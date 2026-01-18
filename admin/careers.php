<?php
session_start();
include("../includes/config.php");

if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
  header("Location: /llama-site/admin/login.php");
  exit;
}

$q = trim($_GET['q'] ?? '');
$page = max(1, (int)($_GET['page'] ?? 1));
$perPage = 10;
$offset = ($page - 1) * $perPage;

$where = "";
$params = [];
$types = "";

if ($q !== "") {
  $where = "WHERE full_name LIKE ? OR email LIKE ? OR phone LIKE ? OR role_interest LIKE ? OR experience_level LIKE ?";
  $like = "%{$q}%";
  $params = [$like,$like,$like,$like,$like];
  $types = "sssss";
}

// Count
$countSql = "SELECT COUNT(*) as total FROM career_applications $where";
if ($q !== "") {
  $stmt = mysqli_prepare($conn, $countSql);
  mysqli_stmt_bind_param($stmt, $types, ...$params);
  mysqli_stmt_execute($stmt);
  $countRes = mysqli_stmt_get_result($stmt);
} else {
  $countRes = mysqli_query($conn, $countSql);
}
$total = (int)(mysqli_fetch_assoc($countRes)['total'] ?? 0);
$totalPages = max(1, (int)ceil($total / $perPage));

// Data
$dataSql = "SELECT * FROM career_applications $where ORDER BY created_at DESC LIMIT ? OFFSET ?";
if ($q !== "") {
  $stmt = mysqli_prepare($conn, $dataSql);
  $types2 = $types . "ii";
  $params2 = array_merge($params, [$perPage, $offset]);
  mysqli_stmt_bind_param($stmt, $types2, ...$params2);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
} else {
  $stmt = mysqli_prepare($conn, $dataSql);
  mysqli_stmt_bind_param($stmt, "ii", $perPage, $offset);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);
}

$pageTitle = "Career Applications | Admin";
include("../includes/header.php");
?>

<section class="section">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4" data-aos="fade-up">
      <div>
        <span class="badge-soft"><i class="bi bi-people"></i> Admin</span>
        <h1 class="fw-bold mt-3 mb-1">Career Applications</h1>
        <div class="text-white-50 small">Total: <?php echo $total; ?> entries</div>
      </div>

      <div class="d-flex gap-2 flex-wrap">
        <a class="btn btn-outline-light rounded-pill" href="/llama-site/admin/dashboard.php">
          <i class="bi bi-arrow-left"></i> Back
        </a>
        <a class="btn btn-outline-danger rounded-pill" href="/llama-site/admin/logout.php">
          <i class="bi bi-box-arrow-right"></i> Logout
        </a>
      </div>
    </div>

    <div class="row g-3 mb-3" data-aos="fade-up" data-aos-delay="80">
      <div class="col-lg-8">
        <form class="cardx" method="GET" action="">
          <div class="row g-2 align-items-center">
            <div class="col-md-9">
              <input class="form-control" name="q" value="<?php echo htmlspecialchars($q); ?>" placeholder="Search name, email, phone, role...">
            </div>
            <div class="col-md-3">
              <button class="btn btn-glow w-100" type="submit">Search <i class="bi bi-search"></i></button>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4">
        <div class="cardx h-100 d-flex align-items-center justify-content-between flex-wrap gap-2">
          <div>
            <div class="fw-bold">Page</div>
            <div class="text-white-50 small"><?php echo $page; ?> of <?php echo $totalPages; ?></div>
          </div>
          <a class="btn btn-outline-light rounded-pill" href="/llama-site/admin/careers.php">Clear</a>
        </div>
      </div>
    </div>

    <div class="cardx" data-aos="fade-up" data-aos-delay="120">
      <div class="table-responsive">
        <table class="table align-middle mb-0 admin-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Role</th>
              <th>Experience</th>
              <th>Message</th>
              <th>Resume</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $i = $offset + 1;
              if ($res && mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
            ?>
              <tr>
                <td class="text-white-50"><?php echo $i++; ?></td>
                <td class="fw-semibold"><?php echo htmlspecialchars($row['full_name']); ?></td>
                <td class="text-white-50"><?php echo htmlspecialchars($row['email']); ?></td>
                <td class="text-white-50"><?php echo htmlspecialchars($row['phone']); ?></td>
                <td><span class="badge-soft"><?php echo htmlspecialchars($row['role_interest']); ?></span></td>
                <td class="text-white-50"><?php echo htmlspecialchars($row['experience_level']); ?></td>
                <td class="text-white-50" style="max-width:220px;"><?php echo htmlspecialchars($row['message']); ?></td>
                <td>
                  <a class="btn btn-outline-light btn-sm rounded-pill"
                     href="/llama-site/admin/download_resume.php?id=<?php echo (int)$row['id']; ?>">
                    <i class="bi bi-download"></i> Download
                  </a>
                </td>
                <td class="text-white-50"><?php echo htmlspecialchars($row['created_at']); ?></td>
              </tr>
            <?php
                }
              } else {
            ?>
              <tr><td colspan="9" class="py-4 text-center text-white-50">No applications found.</td></tr>
            <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mt-3">
        <div class="text-white-50 small">
          Showing <?php echo min($total, $offset + 1); ?> - <?php echo min($total, $offset + $perPage); ?> of <?php echo $total; ?>
        </div>
        <div class="d-flex gap-2">
          <?php
            $prev = max(1, $page - 1);
            $next = min($totalPages, $page + 1);
            $qs = $q !== "" ? "&q=" . urlencode($q) : "";
          ?>
          <a class="btn btn-outline-light rounded-pill <?php echo ($page <= 1 ? 'disabled' : ''); ?>" href="?page=<?php echo $prev . $qs; ?>">Prev</a>
          <a class="btn btn-outline-light rounded-pill <?php echo ($page >= $totalPages ? 'disabled' : ''); ?>" href="?page=<?php echo $next . $qs; ?>">Next</a>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include("../includes/footer.php"); ?>

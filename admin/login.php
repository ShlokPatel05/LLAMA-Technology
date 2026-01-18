<?php
session_start();
$pageTitle = "Admin Login | LLAMA TECHNOLOGY";

// If already logged in, go to dashboard
if (isset($_SESSION["admin_logged_in"]) && $_SESSION["admin_logged_in"] === true) {
  header("Location: /llama-site/admin/dashboard.php");
  exit;
}

$error = "";

// Change these credentials
$ADMIN_USER = "LLAMA_tech";
$ADMIN_PASS = "Admin@22";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $u = trim($_POST["username"] ?? "");
  $p = $_POST["password"] ?? "";

  if ($u === $ADMIN_USER && $p === $ADMIN_PASS) {
    $_SESSION["admin_logged_in"] = true;
    header("Location: /llama-site/admin/dashboard.php");
    exit;
  }
  $error = "Invalid username or password.";
}

include("../includes/header.php");
?>

<section class="section">
  <div class="container">

    <div class="row justify-content-center">
      <div class="col-lg-6" data-aos="fade-up">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-2">
            <div>
              <span class="badge-soft"><i class="bi bi-shield-lock"></i> Admin</span>
              <h2 class="fw-bold mt-3 mb-1">Admin Login</h2>
              <p class="text-white-50 mb-0">Login to view registrations.</p>
            </div>
            <a class="btn btn-outline-light rounded-pill" href="/llama-site/">
              <i class="bi bi-arrow-left"></i> Back to Home
            </a>
          </div>

          <?php if ($error) { ?>
            <div class="alert alert-danger mt-3 mb-0" role="alert">
              <?php echo htmlspecialchars($error); ?>
            </div>
          <?php } ?>

          <form method="POST" class="row g-3 mt-3">
            <div class="col-12">
              <label class="form-label">Username</label>
              <input class="form-control" name="username" placeholder="Enter username" required>
            </div>

            <div class="col-12">
              <label class="form-label">Password</label>
              <input class="form-control" type="password" name="password" placeholder="Enter password" required>
            </div>

            <div class="col-12">
              <button class="btn btn-glow w-100" type="submit">
                Login <i class="bi bi-arrow-right"></i>
              </button>
            </div>

            <div class="col-12">
              <div class="text-white-50 small">
                <!-- Tip: Change default credentials inside <code>admin/login.php</code>. -->
              </div>
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>
</section>

<?php include("../includes/footer.php"); ?>

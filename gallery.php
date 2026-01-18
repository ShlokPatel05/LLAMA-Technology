<?php
$pageTitle = "Gallery | LLAMA TECHNOLOGY";
include("includes/header.php");

$categories = [
  ["title"=>"Training Session",  "folder"=>"training"],
  ["title"=>"Workshop",          "folder"=>"workshop"],
  ["title"=>"Project Showcase",  "folder"=>"project-showcase"],
  ["title"=>"Guest Lecture",     "folder"=>"guest-lecture"],
  ["title"=>"Team & Mentors",    "folder"=>"team-mentors"],
  ["title"=>"Internship Batch",  "folder"=>"internship-batch"],
  ["title"=>"Lab / Hardware",    "folder"=>"lab-hardware"],
  ["title"=>"Placement Drive",   "folder"=>"placement-drive"],
  ["title"=>"Certificates",      "folder"=>"certificates"],
];

$basePath = __DIR__ . "/assets/img/gallery/";
$baseUrl  = "/llama-site/assets/img/gallery/";

$active = $_GET['cat'] ?? $categories[0]['title'];
$activeFolder = $categories[0]['folder'];

foreach ($categories as $c) {
  if ($c['title'] === $active) {
    $activeFolder = $c['folder'];
    break;
  }
}

$images = [];
$dir = $basePath . $activeFolder . "/";

if (is_dir($dir)) {
  foreach (scandir($dir) as $file) {
    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($ext, ['jpg','jpeg','png','webp'])) {
      $images[] = $file;
    }
  }
}
?>

<section class="section">
  <div class="container">

    <!-- Header -->
    <div class="row align-items-end g-3 mb-4">
      <div class="col-lg-8">
        <span class="badge-soft">Gallery</span>
        <h1 class="fw-bold mt-3 mb-2">Moments from Training & Internships</h1>
        <!-- <p class="text-white-50 mb-0">Click any image to view in full screen.</p> -->
      </div>
    </div>

    <!-- Category Buttons -->
    <div class="cardx mb-4">
      <div class="d-flex flex-wrap gap-2">
        <?php foreach ($categories as $c) { ?>
          <a class="btn <?php echo ($active === $c['title']) ? 'btn-glow' : 'btn-outline-light'; ?> rounded-pill"
             href="/llama-site/gallery.php?cat=<?php echo urlencode($c['title']); ?>">
            <?php echo htmlspecialchars($c['title']); ?>
          </a>
        <?php } ?>
      </div>
    </div>

    <!-- Image Grid -->
    <?php if (count($images) === 0) { ?>
      <div class="cardx text-center py-5">
        <h5 class="fw-bold mb-1">No images found</h5>
        <div class="text-white-50">
          Add images to <b>/assets/img/gallery/<?php echo $activeFolder; ?>/</b>
        </div>
      </div>
    <?php } else { ?>

      <div class="row g-3">
        <?php foreach ($images as $i => $img) { ?>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="g-item" onclick="openLightbox(<?php echo $i; ?>)">
              <img src="<?php echo $baseUrl.$activeFolder.'/'.$img; ?>" alt="">
            </div>
          </div>
        <?php } ?>
      </div>

    <?php } ?>

  </div>
</section>

<!-- Lightbox -->
<div id="lightbox" class="lb">
  <span class="lb-close" onclick="closeLightbox()">×</span>
  <img id="lb-img">
  <span class="lb-prev" onclick="prevImg()">❮</span>
  <span class="lb-next" onclick="nextImg()">❯</span>
</div>

<style>
.g-item{
  height:200px;
  border-radius:18px;
  overflow:hidden;
  cursor:pointer;
  border:1px solid var(--stroke);
}
.g-item img{
  width:100%;
  height:100%;
  object-fit:cover;
  transition:.3s;
}
.g-item:hover img{ transform:scale(1.08); }

.lb{
  display:none;
  position:fixed;
  inset:0;
  background:rgba(0,0,0,.85);
  z-index:9999;
}
.lb img{
  max-width:90%;
  max-height:85vh;
  margin:auto;
  display:block;
  margin-top:5vh;
}
.lb-close, .lb-prev, .lb-next{
  position:absolute;
  color:#fff;
  font-size:40px;
  cursor:pointer;
  user-select:none;
}
.lb-close{ top:20px; right:30px; }
.lb-prev{ top:50%; left:30px; }
.lb-next{ top:50%; right:30px; }
</style>

<script>
const images = <?php echo json_encode(array_map(fn($i)=>$baseUrl.$activeFolder.'/'.$i, $images)); ?>;
let index = 0;

function openLightbox(i){
  index = i;
  document.getElementById("lb-img").src = images[index];
  document.getElementById("lightbox").style.display = "block";
}
function closeLightbox(){
  document.getElementById("lightbox").style.display = "none";
}
function nextImg(){
  index = (index + 1) % images.length;
  openLightbox(index);
}
function prevImg(){
  index = (index - 1 + images.length) % images.length;
  openLightbox(index);
}
</script>

<?php include("includes/footer.php"); ?>

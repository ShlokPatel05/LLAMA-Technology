<?php
$pageTitle = "Team | LLAMA TECHNOLOGY";
include("includes/header.php");

// Put images in: /llama-site/assets/img/team/
$team = [
  [
    "name" => "Mr. Chetan Gawande",
    "role" => "Director",
    "img"  => "chetan.jpg",
    "bio"  => "Leads LLAMA TECHNOLOGY with a focus on industry-ready training, internships, and career outcomes.",
    "highlights" => [
      "Program strategy & placement partnerships",
      "Quality training delivery & student mentoring",
      "Industry collaboration & client relationships"
    ]
  ],
  [
    "name" => "Mr. Priyam Sharma",
    "role" => "Embedded Trainer",
    "img"  => "priyam.jpg",
    "bio"  => "Specializes in Embedded Systems & IoT with hands-on labs, real hardware projects, and practical workflows.",
    "highlights" => [
      "Embedded C, Arduino/ESP, sensors & actuators",
      "IoT protocols & project development",
      "Industry-style debugging & documentation"
    ]
  ],
  [
    "name" => "Dr. Z. I. Khan",
    "role" => "Programming Languages Expert",
    "img"  => "khan.jpg",
    "bio"  => "An experienced programming languages expert who guides students in building strong coding fundamentals, problem-solving skills, and logical thinking for real-world software development.",
    "highlights" => [
      "C, C++, Java & Python programming",
      "Data structures, algorithms & logic building",
      "Problem-solving, debugging & coding best practices",
      "Academic concepts aligned with industry use-cases"
    ]
   ],
  [
    "name" => "Ms. Samriddhi M. Mahalle",
    "role" => "Salesforce",
    "img"  => "samruddhi.jpg",
    "bio"  => "Leads Salesforce training initiatives with a strong focus on real-world implementation, certification readiness, and job-oriented learning outcomes.",
    "highlights" => [
      "Salesforce Admin & Developer career roadmap",
      "Hands-on project training & interview mentoring",
      "Industry-aligned curriculum & placement guidance"
    ]
  ],
];

$imgBase = "/llama-site/assets/img/team/";
?>

<style>
/* ===== Team Photo: Full image + blurred fill (no crop, no ugly empty space) ===== */
.team-photo-wrap{
  position: relative;
  border-radius: 22px;
  overflow: hidden;
  border: 1px solid var(--stroke);
  height: 320px;               /* consistent card height */
  background: rgba(255,255,255,.04);
}

/* blurred background made from same image */
.team-photo-wrap::before{
  content: "";
  position: absolute;
  inset: 0;
  background-image: var(--team-photo);
  background-size: cover;
  background-position: center;
  filter: blur(18px);
  transform: scale(1.12);
  opacity: 0.55;
  z-index: 0;
}

.team-photo-wrap::after{
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0,0,0,.22);
  z-index: 1;
}

.team-photo-glow{
  position: absolute;
  inset: -40px;
  background: radial-gradient(circle at 30% 30%, rgba(0,212,255,.18), transparent 60%),
              radial-gradient(circle at 70% 70%, rgba(109,91,255,.14), transparent 55%);
  pointer-events: none;
  z-index: 2;
}

/* show FULL image (no cut) */
.team-photo{
  position: relative;
  z-index: 3;
  width: 100%;
  height: 100%;
  object-fit: contain;   /* ✅ full image */
  object-position: center;
  display: block;
  padding: 12px;
}

@media(max-width: 768px){
  .team-photo-wrap{ height: 240px; }
  .team-photo{ padding: 10px; }
}
</style>

<section class="section">
  <div class="container">

    <div class="row align-items-end g-3 mb-4">
      <div class="col-lg-7" data-aos="fade-up">
        <span class="badge-soft">Team</span>
        <h1 class="fw-bold mt-3 mb-2">Meet Our Team</h1>
        <p class="text-white-50 mb-0">A dedicated team that focuses on practical learning, mentorship, and career outcomes.</p>
      </div>
      <div class="col-lg-5 text-lg-end" data-aos="fade-up" data-aos-delay="80">
        <a class="btn btn-outline-light rounded-pill" href="/llama-site/register.php">
          Register <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>

    <?php foreach ($team as $idx => $m) {
      $reverse = ($idx % 2 === 1);
      $img = $imgBase . $m['img'];
    ?>

    <div class="cardx mb-4" data-aos="fade-up" data-aos-delay="<?php echo 80 + ($idx*60); ?>">
      <div class="row align-items-center g-4 <?php echo $reverse ? 'flex-lg-row-reverse' : ''; ?>">

        <!-- ✅ LEFT IMAGE COLUMN -->
        <div class="col-lg-5">
          <div class="team-photo-wrap" style="--team-photo:url('<?php echo $img; ?>');">
            <div class="team-photo-glow"></div>
            <img class="team-photo"
                 src="<?php echo $img; ?>"
                 alt="<?php echo htmlspecialchars($m['name']); ?>"
                 loading="lazy">
          </div>
        </div>

        <!-- ✅ RIGHT CONTENT COLUMN -->
        <div class="col-lg-7">
          <span class="badge-soft">
            <i class="bi bi-person-badge"></i> <?php echo htmlspecialchars($m['role']); ?>
          </span>

          <h3 class="fw-bold mt-3 mb-1"><?php echo htmlspecialchars($m['name']); ?></h3>
          <p class="text-white-50 mb-3"><?php echo htmlspecialchars($m['bio']); ?></p>

          <div class="row g-2">
            <?php foreach ($m['highlights'] as $h) { ?>
              <div class="col-12 col-md-6">
                <div class="team-point">
                  <i class="bi bi-check2-circle"></i> <?php echo htmlspecialchars($h); ?>
                </div>
              </div>
            <?php } ?>
          </div>

          <div class="mt-3 d-flex gap-2 flex-wrap">
            <a class="btn btn-glow" href="/llama-site/register.php">Enroll <i class="bi bi-arrow-right"></i></a>
            <a class="btn btn-outline-light rounded-pill" href="/llama-site/courses.php">Explore Courses</a>
          </div>
        </div>

      </div>
    </div>

    <?php } ?>

  </div>
</section>

<?php include("includes/footer.php"); ?>

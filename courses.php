<?php
$pageTitle="Internships | LLAMA TECHNOLOGY";
include("includes/header.php");
?>

<section class="section">
  <div class="container">

    <!-- Page Head -->
    <div class="d-flex flex-column flex-lg-row justify-content-between align-items-lg-end gap-3 mb-4">
      <div data-aos="fade-up">
        <span class="badge-soft">Internship Courses</span>
        <h1 class="fw-bold mt-3 mb-2">Choose Your Internship Track</h1>
        <p class="text-white-50 mb-0">
          Industry-focused training with hands-on learning and mentorship.
        </p>
      </div>

      <div class="d-flex gap-2 flex-wrap" data-aos="fade-up" data-aos-delay="100">
        <button class="btn btn-outline-light rounded-pill filter-btn active" data-filter="all">
          All
        </button>
        <button class="btn btn-outline-light rounded-pill filter-btn" data-filter="it">
          Computer/IT
        </button>
        <button class="btn btn-outline-light rounded-pill filter-btn" data-filter="ee">
          Electronics & Electrical
        </button>
        <button class="btn btn-outline-light rounded-pill filter-btn" data-filter="mech">
          Mechanical
        </button>
      </div>
    </div>

    <!-- Courses Grid -->
    <div class="row g-3">

      <!-- IT -->
      <div class="col-md-6 col-lg-4 course-card" data-category="it" data-aos="zoom-in">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">Flutter Technology</div>
            <span class="badge-soft">CSE/IT</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Build cross-platform mobile apps with modern UI and backend integration.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 course-card" data-category="it" data-aos="zoom-in" data-aos-delay="50">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">Android Development</div>
            <span class="badge-soft">CSE/IT</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Android app development with layouts, APIs, Firebase basics and deployment.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 course-card" data-category="it" data-aos="zoom-in" data-aos-delay="100">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">Salesforce</div>
            <span class="badge-soft">CSE/IT</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            CRM fundamentals, admin basics, objects, flows, and real-world use cases.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 course-card" data-category="it" data-aos="zoom-in" data-aos-delay="150">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">Web Development</div>
            <span class="badge-soft">CSE/IT</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Frontend + backend basics, forms, database, and a complete live project.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 course-card" data-category="it" data-aos="zoom-in" data-aos-delay="200">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">Java / PHP / Python</div>
            <span class="badge-soft">CSE/IT</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Programming foundations + project-based learning for job-ready skills.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 course-card" data-category="it" data-aos="zoom-in" data-aos-delay="250">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">AI / ML / Data Science</div>
            <span class="badge-soft">CSE/IT</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Learn fundamentals, datasets, model building, and mini-project implementation.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <!-- Electronics & Electrical -->
      <div class="col-md-6 col-lg-4 course-card" data-category="ee" data-aos="zoom-in">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">Embedded System & IoT</div>
            <span class="badge-soft">E&E</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Microcontrollers, sensors, communication protocols and IoT workflows.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 course-card" data-category="ee" data-aos="zoom-in" data-aos-delay="80">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">AI / ML / Robotics / MATLAB</div>
            <span class="badge-soft">E&E</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Applied learning for automation, robotics basics and simulation using MATLAB.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <!-- Mechanical -->
      <div class="col-md-6 col-lg-4 course-card" data-category="mech" data-aos="zoom-in">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">Robotics</div>
            <span class="badge-soft">ME</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Mechanisms, control basics, sensors/actuators and real robotics concepts.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 course-card" data-category="mech" data-aos="zoom-in" data-aos-delay="80">
        <div class="cardx">
          <div class="d-flex align-items-center justify-content-between">
            <div class="fw-bold">Mechatronics</div>
            <span class="badge-soft">ME</span>
          </div>
          <p class="text-white-50 small mt-2 mb-3">
            Integration of mechanical + electronics + control systems for industry use.
          </p>
          <a class="btn btn-glow w-100" href="/llama-site/register.php">Enroll / Register</a>
        </div>
      </div>

    </div>

    <!-- CTA -->
    <div class="mt-5" data-aos="fade-up">
      <div class="cardx">
        <div class="row align-items-center g-3">
          <div class="col-lg-8">
            <h4 class="fw-bold mb-1">Not sure which course to choose?</h4>
            <div class="text-white-50">
              Register and our team will guide you based on your background and goals.
            </div>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a class="btn btn-glow w-100 w-lg-auto" href="/llama-site/register.php">
              Get Guidance <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Filter Script (only for this page) -->
<script>
  const btns = document.querySelectorAll(".filter-btn");
  const cards = document.querySelectorAll(".course-card");

  btns.forEach(btn => {
    btn.addEventListener("click", () => {
      btns.forEach(b => b.classList.remove("active"));
      btn.classList.add("active");

      const filter = btn.dataset.filter;
      cards.forEach(card => {
        const cat = card.dataset.category;
        card.style.display = (filter === "all" || filter === cat) ? "block" : "none";
      });
    });
  });
</script>

<?php include("includes/footer.php"); ?>

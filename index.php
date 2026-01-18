<?php
$pageTitle="Home | LLAMA TECHNOLOGY";
include("includes/header.php");
?>

<header class="hero">
  <div class="container">
    <div class="row align-items-center g-4">
      <div class="col-lg-7" data-aos="fade-up">
        <span class="badge-soft">Training • Internship • Placement Support</span>
        <h1 class="display-5 fw-bold mt-3">
          Build Industry-Ready Skills with <span style="background:var(--grad); -webkit-background-clip:text; color:transparent;">Hands-On Training</span>
        </h1>
        <p class="lead text-white-50 mt-3">
          LLAMA TECHNOLOGY Eletrosoft Pvt Ltd helps students and professionals bridge the gap between academics and industry
          through practical training, mentorship and placement assistance.
        </p>

        <div class="d-flex gap-2 mt-4 flex-wrap">
          <a class="btn btn-glow" href="/llama-site/register.php">Register Now <i class="bi bi-arrow-right"></i></a>
          <a class="btn btn-outline-light rounded-pill" href="/llama-site/courses.php">Explore Internships</a>
        </div>

        <div class="row g-3 mt-4">
          <div class="col-md-4">
            <div class="kpi" data-aos="fade-up" data-aos-delay="100">
              <div class="fw-bold">Industry Skills</div>
              <div class="text-white-50 small">Practical learning</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="kpi" data-aos="fade-up" data-aos-delay="200">
              <div class="fw-bold">Mentorship</div>
              <div class="text-white-50 small">Expert trainers</div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="kpi" data-aos="fade-up" data-aos-delay="300">
              <div class="fw-bold">Placement</div>
              <div class="text-white-50 small">Career support</div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-5" data-aos="fade-left">
        <div class="hero-card">
          <h5 class="fw-bold mb-2">Quick Registration</h5>
          <p class="text-white-50 small mb-3">Get a call back from our team.</p>

          <form method="POST" action="/llama-site/register_submit.php" class="row g-2">
            <div class="col-12">
              <input class="form-control" name="full_name" placeholder="Full Name" required>
            </div>
            <div class="col-12">
              <input class="form-control" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="col-12">
              <input type="tel"
                    name="phone"
                    class="form-control"
                    placeholder="Enter 10-digit mobile number"
                    maxlength="10"
                    inputmode="numeric"
                    pattern="[0-9]{10}"
                    oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,10)"
                    required>

            </div>
            <div class="col-12">
              <select class="form-select" name="category" required>
                <option value="Computer/IT">Computer/IT</option>
                <option value="Electronics & Electrical">Electronics & Electrical</option>
                <option value="Mechanical">Mechanical</option>
              </select>
            </div>
            <div class="col-12">
              <input class="form-control" name="course_name" placeholder="Course (e.g., Web Dev, Embedded IoT)" required>
            </div>
            <div class="col-12">
              <textarea class="form-control" name="message" rows="3" placeholder="Message (optional)"></textarea>
            </div>
            <div class="col-12 mt-1">
              <button class="btn btn-glow w-100">Submit</button>
            </div>
          </form>

          <div class="text-white-50 small mt-3">
            By submitting, you agree to be contacted by our team.
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<section class="section">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4" data-aos="fade-up">
        <div class="cardx">
          <div class="d-flex align-items-center gap-2 mb-2">
            <i class="bi bi-lightning-charge fs-4"></i>
            <h5 class="fw-bold mb-0">Services</h5>
          </div>
          <ul class="text-white-50 mb-0">
            <li>Project Development</li>
            <li>Internship / Training</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
        <div class="cardx">
          <h5 class="fw-bold mb-2">Why Should You Join?</h5>
          <div class="row g-2 text-white-50">
            <div class="col-md-6"><i class="bi bi-check2-circle"></i> Industry-Relevant Training</div>
            <div class="col-md-6"><i class="bi bi-check2-circle"></i> Expert Trainers</div>
            <div class="col-md-6"><i class="bi bi-check2-circle"></i> Hands-On Learning</div>
            <div class="col-md-6"><i class="bi bi-check2-circle"></i> Placement Assistance</div>
            <div class="col-md-6"><i class="bi bi-check2-circle"></i> Personalized Mentorship</div>
            <div class="col-md-6"><i class="bi bi-check2-circle"></i> Career-Focused Approach</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section pt-0">
  <div class="container">
    <div class="d-flex justify-content-between align-items-end mb-3">
      <div>
        <h2 class="fw-bold mb-1">Internship Courses</h2>
        <div class="text-white-50">Choose your path and start building skills.</div>
      </div>
      <a class="btn btn-outline-light rounded-pill" href="/llama-site/courses.php">View all</a>
    </div>

    <div class="row g-3">
      <div class="col-md-4" data-aos="zoom-in">
        <div class="cardx">
          <div class="fw-bold">Computer / IT</div>
          <div class="text-white-50 small mt-2">Flutter, Android, Salesforce, Web Dev, Java/PHP/Python, AI/ML, Data Science</div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="cardx">
          <div class="fw-bold">Electronics & Electrical</div>
          <div class="text-white-50 small mt-2">Embedded Systems & IoT, AI/ML, Robotics, MATLAB</div>
        </div>
      </div>
      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="cardx">
          <div class="fw-bold">Mechanical</div>
          <div class="text-white-50 small mt-2">Robotics, Mechatronics</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Alumni Section (Logo + Name Slider) -->
<section class="section pt-0">
  <div class="container">

    <div class="row align-items-end g-3 mb-3">
      <div class="col-lg-7" data-aos="fade-up">
        <span class="badge-soft">Alumni</span>
        <h2 class="fw-bold mt-3 mb-2">Our Alumni Work At</h2>
        <p class="text-white-50 mb-0">Our learners are placed across top companies.</p>
      </div>
      <div class="col-lg-5 text-lg-end" data-aos="fade-up" data-aos-delay="80">
        <a class="btn btn-outline-light rounded-pill" href="/llama-site/register.php">
          Become One of Them <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>

    <div class="alumni-marquee" data-aos="fade-up" data-aos-delay="120">
      <div class="alumni-track">
        <?php
          $companies = [
            ["name"=>"Web it Solution","logo"=>"webit.png"],
            ["name"=>"Mind tree","logo"=>"mind.png"],
            ["name"=>"Wipro","logo"=>"wipro.png"],
            ["name"=>"Whirlpool","logo"=>"whirlpool.png"],
            // ["name"=>"Cognizant","logo"=>"cognizant.png"],
            // ["name"=>"Capgemini","logo"=>"capgemini.png"],
            // ["name"=>"HCL","logo"=>"hcl.png"],
            // ["name"=>"IBM","logo"=>"ibm.png"],
            // ["name"=>"Oracle","logo"=>"oracle.png"],
            // ["name"=>"Deloitte","logo"=>"deloitte.png"],
          ];

          $loop = array_merge($companies, $companies); // seamless loop
          foreach ($loop as $c) {
        ?>
          <div class="alumni-card">
            <div class="alumni-logo">
              <img src="/llama-site/assets/img/companies/<?php echo $c['logo']; ?>"
                   alt="<?php echo $c['name']; ?>">
            </div>
            <div class="alumni-name"><?php echo $c['name']; ?></div>
          </div>
        <?php } ?>
      </div>
    </div>

  </div>
</section>



<!-- Clients Section (Logo + Name Slider) -->
<section class="section pt-0">
  <div class="container">

    <div class="row align-items-end g-3 mb-3">
      <div class="col-lg-7" data-aos="fade-up">
        <span class="badge-soft">Clients</span>
        <h2 class="fw-bold mt-3 mb-2">Our Clients</h2>
        <p class="text-white-50 mb-0">Institutes and organizations we’ve worked with.</p>
      </div>
      <div class="col-lg-5 text-lg-end" data-aos="fade-up" data-aos-delay="80">
        <!-- <a class="btn btn-outline-light rounded-pill" href="/llama-site/register.php">
          Work With Us <i class="bi bi-arrow-right"></i>
        </a> -->
      </div>
    </div>

    <div class="client-marquee" data-aos="fade-up" data-aos-delay="120">
      <div class="client-track">

        <?php
          $clients = [
            ["name"=>"Dr. Panjabrao Deshmukh Polytechnic, Amravati","logo"=>"dpdpa.png"],
            ["name"=>"Govt Polytechnic Amravati","logo"=>"gpa.png"],
            ["name"=>"Govt Polytechnic Washim","logo"=>"gpw.png"],
            ["name"=>"Govt Polytechnic Achalpur","logo"=>"gpachalpur.png"],
            ["name"=>"Taksh-shila Polytechnic","logo"=>"takshshila.png"],
            ["name"=>"Agnihotri School of Science & Technology, Wardha","logo"=>"agnihotri.png"],
          ];

          $loop = array_merge($clients, $clients);
          foreach($loop as $c){
        ?>
          <div class="client-card">
            <div class="client-logo">
              <img src="/llama-site/assets/img/clients/<?php echo $c['logo']; ?>"
                   alt="<?php echo htmlspecialchars($c['name']); ?>">
            </div>
            <div class="client-name"><?php echo htmlspecialchars($c['name']); ?></div>
          </div>
        <?php } ?>

      </div>
    </div>

  </div>
</section>


<?php include("includes/footer.php"); ?>

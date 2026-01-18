<?php
$pageTitle = "Register | LLAMA TECHNOLOGY";
include("includes/header.php");
?>

<section class="section">
  <div class="container">

    <!-- Page heading -->
    <div class="row align-items-end g-3 mb-4">
      <div class="col-lg-7" data-aos="fade-up">
        <span class="badge-soft">Registration</span>
        <h1 class="fw-bold mt-3 mb-2">Enroll for Training / Internship</h1>
        <p class="text-white-50 mb-0">
          Fill the form and our team will contact you with course details.
        </p>
      </div>

      <div class="col-lg-5 text-lg-end" data-aos="fade-up" data-aos-delay="80">
        <a class="btn btn-outline-light rounded-pill" href="/llama-site/courses.php">
          View Courses <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>

    <div class="row g-4">
      <!-- LEFT: info -->
      <div class="col-lg-5" data-aos="fade-right">

        <div class="cardx mb-3">
          <h5 class="fw-bold mb-2">
            <i class="bi bi-patch-check"></i> Why join LLAMA?
          </h5>

          <div class="row g-2 text-white-50 small">
            <div class="col-12"><i class="bi bi-check2-circle"></i> Industry-Relevant Training</div>
            <div class="col-12"><i class="bi bi-check2-circle"></i> Hands-On Learning</div>
            <div class="col-12"><i class="bi bi-check2-circle"></i> Expert Trainers</div>
            <div class="col-12"><i class="bi bi-check2-circle"></i> Placement Assistance</div>
            <div class="col-12"><i class="bi bi-check2-circle"></i> Mentorship & Guidance</div>
          </div>
        </div>

        <!-- <div class="cardx">
          <h6 class="fw-bold mb-2">Quick Contact (edit later)</h6>
          <div class="text-white-50 small">
            <div class="mb-2"><i class="bi bi-telephone"></i> +91 XXXXX XXXXX</div>
            <div class="mb-2"><i class="bi bi-envelope"></i> info@yourdomain.com</div>
            <div><i class="bi bi-geo-alt"></i> Your address here</div>
          </div>
        </div> -->

      </div>

      <!-- RIGHT: form -->
      <div class="col-lg-7" data-aos="fade-left">
        <div class="cardx" id="form">
          <h4 class="fw-bold mb-1">Registration Form</h4>
          <p class="text-white-50 mb-4">Fields marked with * are required.</p>

          <form method="POST" action="/llama-site/register_submit.php" class="row g-3">

            <div class="col-md-6">
              <label class="form-label">Full Name *</label>
              <input name="full_name" class="form-control" placeholder="Your full name" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Email *</label>
              <input type="email" name="email" class="form-control" placeholder="name@example.com" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Phone *</label>
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

            <div class="col-md-6">
              <label class="form-label">Category *</label>
              <select name="category" class="form-select" required>
                <option value="Computer/IT">Computer/IT</option>
                <option value="Electronics & Electrical">Electronics & Electrical</option>
                <option value="Mechanical">Mechanical</option>
              </select>
            </div>

            <div class="col-12">
              <label class="form-label">Course Name *</label>
              <input name="course_name" class="form-control" placeholder="e.g., Web Development / Embedded System & IoT" required>
              <div class="form-text text-white-50">Type the exact course name from the Internships page.</div>
            </div>

            <div class="col-12">
              <label class="form-label">Message (optional)</label>
              <textarea name="message" class="form-control" rows="4" placeholder="College, year, preferred timings..."></textarea>
            </div>

            <!-- Honeypot anti-spam (invisible, but still in DOM) -->
            <div style="position:absolute; left:-9999px; top:auto; width:1px; height:1px; overflow:hidden;">
              <label>Leave this field empty</label>
              <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="col-12">
              <button class="btn btn-glow w-100" type="submit">
                Submit Registration <i class="bi bi-arrow-right"></i>
              </button>
            </div>

            <div class="col-12">
              <div class="text-white-50 small">
                By submitting, you agree to be contacted by LLAMA TECHNOLOGY for training/internship details.
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include("includes/footer.php"); ?>

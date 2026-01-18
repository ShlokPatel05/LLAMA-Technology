<?php
$pageTitle = "Careers | LLAMA TECHNOLOGY";
include("includes/header.php");
?>

<section class="section">
  <div class="container">

    <div class="row align-items-end g-3 mb-4">
      <div class="col-lg-8" data-aos="fade-up">
        <span class="badge-soft">Careers</span>
        <h1 class="fw-bold mt-3 mb-2">Work With LLAMA TECHNOLOGY</h1>
        <p class="text-white-50 mb-0">Submit your details and upload your resume. Our team will review and contact you.</p>
      </div>
      <div class="col-lg-4 text-lg-end" data-aos="fade-up" data-aos-delay="80">
        <a class="btn btn-outline-light rounded-pill" href="/llama-site/"><i class="bi bi-house"></i> Home</a>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-up" data-aos-delay="120">
        <div class="cardx">
          <h4 class="fw-bold mb-1">Career Application</h4>
          <p class="text-white-50 mb-4">Supported: PDF/DOC/DOCX (max 5MB).</p>

          <form method="POST" action="/llama-site/career_submit.php" enctype="multipart/form-data" class="row g-3">

            <div class="col-md-6">
              <label class="form-label">Full Name *</label>
              <input class="form-control" name="full_name" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Email *</label>
              <input type="email" class="form-control" name="email" required>
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
              <label class="form-label">Role Interested In *</label>
              <input class="form-control" name="role_interest" placeholder="e.g., Trainer / Developer / HR" required>
            </div>

            <div class="col-md-6">
              <label class="form-label">Experience Level *</label>
              <select class="form-select" name="experience_level" required>
                <option value="Fresher">Fresher</option>
                <option value="0-1 Years">0-1 Years</option>
                <option value="1-3 Years">1-3 Years</option>
                <option value="3+ Years">3+ Years</option>
              </select>
            </div>

            <div class="col-md-6">
              <label class="form-label">Resume *</label>
              <input class="form-control" type="file" name="resume" accept=".pdf,.doc,.docx" required>
            </div>

            <div class="col-12">
              <label class="form-label">Message (optional)</label>
              <textarea class="form-control" rows="4" name="message" placeholder="Tell us about your skills or why you want to join."></textarea>
            </div>

            <!-- Honeypot anti-spam -->
            <div style="position:absolute; left:-9999px; width:1px; height:1px; overflow:hidden;">
              <label>Leave this empty</label>
              <input type="text" name="website" tabindex="-1" autocomplete="off">
            </div>

            <div class="col-12">
              <button class="btn btn-glow w-100" type="submit">
                Submit Application <i class="bi bi-arrow-right"></i>
              </button>
            </div>

            <div class="col-12">
              <div class="text-white-50 small">
                By submitting, you agree to be contacted by LLAMA TECHNOLOGY regarding your application.
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include("includes/footer.php"); ?>

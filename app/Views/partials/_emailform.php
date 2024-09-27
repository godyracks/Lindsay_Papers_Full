<div class="form-container" style="margin-top: 20px; margin-bottom:20px;">
  <!-- Progress Bar -->
  <div class="progress-bar">
    <div data-step="Step 1" class="active"></div>
    <div data-step="Step 2"></div>
    <div data-step="Step 3"></div>
  </div>

  <!-- Step 1: Academic Level and Deadline -->
  <div class="form-step active">
    <h3>STEP 1: ACADEMIC LEVEL AND DEADLINE</h3>
    <div class="form-group">
      <label>Academic Level *</label>
      <div class="radio-group">
        <label><input type="radio" name="academic-level" value="college-1-2" required> College (1-2)</label>
        <label><input type="radio" name="academic-level" value="college-3-4" required> College (3-4)</label>
        <label><input type="radio" name="academic-level" value="masters" required> Masters</label>
        <label><input type="radio" name="academic-level" value="phd" required> PhD</label>
      </div>
    </div>

    <div class="form-group">
      <label>Deadline *</label>
      <div class="radio-group">
        <label><input type="radio" name="deadline" value="12-hours" required> 12 hours</label>
        <label><input type="radio" name="deadline" value="24-hours" required> 24 hours</label>
        <label><input type="radio" name="deadline" value="48-hours" required> 48 hours</label>
        <label><input type="radio" name="deadline" value="3-days" required> 3 days</label>
        <label><input type="radio" name="deadline" value="5-days" required> 5 days</label>
        <label><input type="radio" name="deadline" value="7-days" required> 7 days</label>
        <label><input type="radio" name="deadline" value="14-days" required> 14 days</label>
      </div>
    </div>
  </div>

  <!-- Step 2: Paper Details -->
  <div class="form-step">
    <h3>STEP 2: PAPER DETAILS AND MATERIALS</h3>
    <div class="form-group">
    <label for="paper-type">Type of Paper *</label>
    <select name="paper-type" id="paper-type" required>
        <option value="">Select Type of Paper</option>
        <option value="essay">Essay</option>
        <option value="research-paper">Research Paper</option>
        <option value="term-paper">Term Paper</option>
        <option value="thesis">Thesis</option>
        <option value="dissertation">Dissertation</option>
        <option value="case-study">Case Study</option>
        <option value="report">Report</option>
        <option value="presentation">Presentation</option>
        <option value="other">Other</option>
    </select>
      <small>If your subject is not on the list, select the option "other".</small>
    </div>

    <div class="form-group">
    <label for="discipline">Field of Discipline *</label>
    <select name="discipline" id="discipline" required>
        <option value="">Select Field of Discipline</option>
        <option value="arts">Arts</option>
        <option value="business">Business</option>
        <option value="computer-science">Computer Science</option>
        <option value="education">Education</option>
        <option value="engineering">Engineering</option>
        <option value="health-sciences">Health Sciences</option>
        <option value="humanities">Humanities</option>
        <option value="law">Law</option>
        <option value="mathematics">Mathematics</option>
        <option value="natural-sciences">Natural Sciences</option>
        <option value="social-sciences">Social Sciences</option>
        <option value="information-technology">Information Technology</option>
        <option value="psychology">Psychology</option>
        <option value="environmental-science">Environmental Science</option>
        <option value="agriculture">Agriculture</option>
        <option value="architecture">Architecture</option>
        <option value="nursing">Nursing</option>
        <option value="pharmacy">Pharmacy</option>
        <option value="veterinary-science">Veterinary Science</option>
        <option value="public-health">Public Health</option>
        <option value="performing-arts">Performing Arts</option>
        <option value="other-discipline">Other</option>
    </select>
      <small>If your subject is not on the list, select the option "other".</small>
    </div>

    <div class="form-group">
      <label for="instructions">Paper Instructions</label>
      <textarea id="instructions" name="instructions" placeholder="Enter detailed paper instructions"  style="height:100px;"></textarea>
    </div>

    <!-- Upload Additional Material -->
    <div class="form-section">
      <label>Upload Additional Material</label>
      <a href="#" class="add-file">Add File</a>
      <p>You may upload any useful materials for the writer.</p>
    </div>

    <!-- Math Assignments/Projects -->
    <div class="form-section">
      <label>Math Assignments/Projects *</label>
      <div class="radio-group">
        <label><input type="radio" name="math_size" value="small" required> Small</label>
        <label><input type="radio" name="math_size" value="medium" required> Medium</label>
        <label><input type="radio" name="math_size" value="large" required> Large</label>
        <label><input type="radio" name="math_size" value="na" required> Not Applicable</label>
      </div>
      <p>Small=10 questions, Medium=25 questions, Large=up to 40 questions</p>
    </div>
  </div>

  <!-- Step 3: Citation Style, Contact Information, and Payment -->
  <div class="form-step">
    <h3>STEP 3: CITATION STYLE, CONTACT, AND PAYMENT</h3>
    <div class="form-group">
      <label for="sources">Number of Sources</label>
      <input type="text" id="sources" name="sources" placeholder="Type the number of sources required. No limits.">
    </div>

    <div class="form-group">
      <label>Number of Pages *</label>
      <select name="pages" required>
        <option value="">Select Number of Pages</option>
        <option value="1">1 Page</option>
        <option value="2">2 Pages</option>
        <option value="3">3 Pages</option>
        <option value="4">4 Pages</option>
        <option value="5">5 Pages</option>
        <option value="6">6 Pages</option>
        <option value="7">7 Pages</option>
        <option value="8">8 Pages</option>
        <option value="9">9 Pages</option>
        <option value="10">10 Pages</option>
        <option value="more">More than 10 Pages</option>
      </select>
      <p>Double Spaced(275 Words Per Page)<br>Single Spaced(550 Words Per Page)</p>
    </div>

    <div class="form-group">
    <label for="slides">PowerPoint Presentation</label>
    <select name="slides" id="slides">
        <option value="">Select Number of Slides</option>
        <option value="1">1 Slide</option>
        <option value="2">2 Slides</option>
        <option value="3">3 Slides</option>
        <option value="4">4 Slides</option>
        <option value="5">5 Slides</option>
        <option value="6">6 Slides</option>
        <option value="7">7 Slides</option>
        <option value="8">8 Slides</option>
        <option value="9">9 Slides</option>
        <option value="10">10 Slides</option>
        <option value="more">More than 10 Slides</option>
    </select>
      <p>10 slides = 10 minutes</p>
    </div>

    <div class="form-group">
      <label>Paper Format or Citation Style *</label>
      <div class="radio-group">
        <label><input type="radio" name="citation_style" value="mla" required> MLA</label>
        <label><input type="radio" name="citation_style" value="apa" required> APA</label>
        <label><input type="radio" name="citation_style" value="chicago" required> Chicago</label>
        <label><input type="radio" name="citation_style" value="na" required> Not Applicable</label>
      </div>
    </div>

    <div class="form-group">
      <label>Do my Online Class for me *</label>
      <div class="radio-group">
        <label><input type="radio" name="online_class" value="8_weeks" required> 8 Weeks Online Class</label>
        <label><input type="radio" name="online_class" value="12_weeks" required> 12 Weeks Online Class</label>
        <label><input type="radio" name="online_class" value="16_weeks" required> 16 Weeks Online Class</label>
        <label><input type="radio" name="online_class" value="na" required> Not Applicable</label>
      </div>
    </div>

    <div class="form-group">
      <label>Graphics *</label>
      <div class="radio-group">
        <label><input type="radio" name="graphics" value="poster" required> Poster</label>
        <label><input type="radio" name="graphics" value="infographic" required> Infographic</label>
        <label><input type="radio" name="graphics" value="brochure" required> Brochure</label>
        <label><input type="radio" name="graphics" value="smartart" required> SmartArt</label>
        <label><input type="radio" name="graphics" value="newsletter" required> Newsletter</label>
        <label><input type="radio" name="graphics" value="na" required> Not Applicable</label>
      </div>
    </div>

    <!-- Contact Information -->
    <div class="form-group">
      <label for="email">Email *</label>
      <input type="email" id="email" name="email" required>
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="tel" id="phone" name="phone">
    </div>

    <!-- Payment Section -->
    <div class="payment">
      <label>Total</label>
      <div class="total">$0.00</div>
      <div class="payment-buttons">
        <button type="button" class="paypal-btn">PayPal Checkout</button>
        <button type="button" class="card-btn">Debit or Credit Card</button>
      </div>
    </div>
  </div>

  <!-- Navigation Buttons -->
  <div class="step-nav">
    <button type="button" class="prev-btn" style="display: none;">Previous</button>
    <button type="button" class="next-btn" disabled>Next</button>
    <button type="button" class="submit-btn" style="display: none;">Submit</button>
  </div>
</div>

<style>
  /* General form styling */
  .form-container {
      margin-top: 40px;
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      font-family: Arial, sans-serif;
      background-color: #FBFCF8;
      border: 1px solid #ddd;
      border-radius: 5px;
  }

  .form-step {
      display: none; /* Hide all steps by default */
  }

  .form-step.active {
      display: block; /* Show the active step */
  }

  .progress-bar {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
  }

  .progress-bar div {
      width: 30%;
      height: 3px;
      background-color: #ddd;
      border-radius: 5px;
      transition: background-color 0.3s;
  }

  .progress-bar div.active {
      background-color: #00A8CC;
  }

  .form-group {
      margin-bottom: 20px;
  }

  .form-group label {
      display: block;
      margin-bottom: 5px;
  }

  .form-group input[type="text"],
  .form-group input[type="email"],
  .form-group input[type="tel"],
  .form-group select,
  .form-group textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
  }

  .form-group input:invalid {
      border: 2px solid red; /* Highlight invalid fields */
  }

  .step-nav {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
  }

  .step-nav button {

      cursor: pointer;


      font-size: 14px;
    transition: background-color 0.3s ease;
    padding: 10px 20px;
    height: 40px;
    font-size: 18px;
    color: white;
    background-color: #2B2B2B;
    border: none;
    border-radius: 38px;
    cursor: pointer;
  }

  .step-nav button:disabled {
      background-color: #ddd;
      cursor: not-allowed;
  }

  .radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

.radio-group label {
    font-size: 14px;
    font-weight: 400;
}
</style>

<script>
  const steps = document.querySelectorAll('.form-step');
  const nextButton = document.querySelector('.next-btn');
  const prevButton = document.querySelector('.prev-btn');
  const submitButton = document.querySelector('.submit-btn');
  const progressBar = document.querySelector('.progress-bar');
  let currentStep = 0;

  function showStep(stepIndex) {
      steps.forEach((step, index) => {
          step.classList.toggle('active', index === stepIndex);
      });
      nextButton.style.display = stepIndex === steps.length - 1 ? 'none' : 'inline-block';
      prevButton.style.display = stepIndex === 0 ? 'none' : 'inline-block';
      submitButton.style.display = stepIndex === steps.length - 1 ? 'inline-block' : 'none';
      progressBar.querySelectorAll('div').forEach((bar, index) => {
          bar.classList.toggle('active', index <= stepIndex);
      });
      validateStep(stepIndex);
  }

  function validateStep(stepIndex) {
      const inputs = steps[stepIndex].querySelectorAll('input[required]');
      let valid = true;
      inputs.forEach(input => {
          if (!input.value) {
              valid = false;
          }
      });
      nextButton.disabled = !valid;
  }

  nextButton.addEventListener('click', () => {
      if (currentStep < steps.length - 1) {
          currentStep++;
          showStep(currentStep);
      }
  });

  prevButton.addEventListener('click', () => {
      if (currentStep > 0) {
          currentStep--;
          showStep(currentStep);
      }
  });

  steps.forEach(step => {
      step.addEventListener('change', () => {
          validateStep(currentStep);
      });
  });

  showStep(currentStep);
</script>

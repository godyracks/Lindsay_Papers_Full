<div class="form-container">
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
        <label><input type="radio" name="academic-level" value="college-1-2"> College (1-2)</label>
        <label><input type="radio" name="academic-level" value="college-3-4"> College (3-4)</label>
        <label><input type="radio" name="academic-level" value="masters"> Masters</label>
        <label><input type="radio" name="academic-level" value="phd"> PhD</label>
      </div>
    </div>

    <div class="form-group">
      <label>Deadline *</label>
      <div class="radio-group">
        <label><input type="radio" name="deadline" value="12-hours"> 12 hours</label>
        <label><input type="radio" name="deadline" value="24-hours"> 24 hours</label>
        <label><input type="radio" name="deadline" value="48-hours"> 48 hours</label>
        <label><input type="radio" name="deadline" value="3-days"> 3 days</label>
        <label><input type="radio" name="deadline" value="5-days"> 5 days</label>
        <label><input type="radio" name="deadline" value="7-days"> 7 days</label>
        <label><input type="radio" name="deadline" value="14-days"> 14 days</label>
      </div>
    </div>
  </div>

  <!-- Step 2: Paper Details -->
  <div class="form-step">
    <h3>STEP 2: PAPER DETAILS AND MATERIALS</h3>
    <div class="form-group">
      <label for="paper-type">Type of Paper *</label>
      <input type="text" id="paper-type" name="paper-type" placeholder="Type your paper type">
      <small>If your subject is not on the list, select the option "other".</small>
    </div>

    <div class="form-group">
      <label for="discipline">Field or Discipline</label>
      <input type="text" id="discipline" name="discipline" placeholder="Select your field or discipline">
      <small>If your subject is not on the list, select the option "other".</small>
    </div>

    <div class="form-group">
      <label for="instructions">Paper Instructions</label>
      <textarea id="instructions" name="instructions" placeholder="Enter detailed paper instructions"></textarea>
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
        <label><input type="radio" name="math_size" value="small"> Small</label>
        <label><input type="radio" name="math_size" value="medium"> Medium</label>
        <label><input type="radio" name="math_size" value="large"> Large</label>
        <label><input type="radio" name="math_size" value="na"> Not Applicable</label>
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
      <select name="pages">
        <option>Select Number of Pages</option>
        <!-- Add more options as needed -->
      </select>
      <p>Double Spaced(275 Words Per Page)<br>Single Spaced(550 Words Per Page)</p>
    </div>

    <div class="form-group">
      <label>PowerPoint Presentation</label>
      <select name="slides">
        <option>Select Number of Slides</option>
        <!-- Add more options as needed -->
      </select>
      <p>10 slides = 10 minutes</p>
    </div>

    <div class="form-group">
      <label>Paper Format or Citation Style *</label>
      <div class="radio-group">
        <label><input type="radio" name="citation_style" value="mla"> MLA</label>
        <label><input type="radio" name="citation_style" value="apa"> APA</label>
        <label><input type="radio" name="citation_style" value="chicago"> Chicago</label>
        <label><input type="radio" name="citation_style" value="na"> Not Applicable</label>
      </div>
    </div>

    <div class="form-group">
      <label>Do my Online Class for me *</label>
      <div class="radio-group">
        <label><input type="radio" name="online_class" value="8_weeks"> 8 Weeks Online Class</label>
        <label><input type="radio" name="online_class" value="12_weeks"> 12 Weeks Online Class</label>
        <label><input type="radio" name="online_class" value="16_weeks"> 16 Weeks Online Class</label>
        <label><input type="radio" name="online_class" value="na"> Not Applicable</label>
      </div>
    </div>

    <div class="form-group">
      <label>Graphics *</label>
      <div class="radio-group">
        <label><input type="radio" name="graphics" value="poster"> Poster</label>
        <label><input type="radio" name="graphics" value="infographic"> Infographic</label>
        <label><input type="radio" name="graphics" value="brochure"> Brochure</label>
        <label><input type="radio" name="graphics" value="smartart"> SmartArt</label>
        <label><input type="radio" name="graphics" value="newsletter"> Newsletter</label>
        <label><input type="radio" name="graphics" value="na"> Not Applicable</label>
      </div>
    </div>

    <!-- Contact Information -->
    <div class="form-group">
      <label for="email">Email *</label>
      <input type="email" id="email" name="email">
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
  <button type="button" class="next-btn">Next</button>
  <button type="button" class="submit-btn" style="display: none;">Submit</button>
</div>

</div>


    <style>/* General form styling */
.form-container {
    margin-top: 40px;
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    font-family: Arial, sans-serif;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 5px;
}

.form-step {
    display: none;
}

.form-step.active {
    display: block;
    margin-bottom: 30px;
}

h3 {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    margin-bottom: 15px;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    font-size: 14px;
    margin-bottom: 5px;
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

input[type="radio"] {
    margin-right: 8px;
}

input[type="text"],
textarea,
select {
    width: 100%;
    padding: 10px;
    font-size: 14px;
    border: 1px solid #ccc;
    border-radius: 3px;
    margin-top: 5px;
    margin-bottom: 10px;
}

textarea {
    resize: vertical;
    height: 100px;
}

small {
    font-size: 12px;
    color: #666;
}

input[type="text"]:focus,
textarea:focus,
select:focus {
    outline: none;
    border-color: #009688;
}

/* Button styling */
button {
    background-color: #009688;
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 14px;
    border-radius: 3px;
    cursor: pointer;
}

button:hover {
    background-color: #00796b;
}

button[disabled] {
    background-color: #ccc;
    cursor: not-allowed;
}

/* Navigation buttons */
.step-nav {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.step-nav .prev-btn {
    visibility: hidden;
}

.step-nav .next-btn,
.step-nav .prev-btn {
    min-width: 100px;
}

.step-nav .submit-btn {
    display: none;
}

/* When on the last step */
.form-step.last-step .submit-btn {
    display: block;
}

.form-step.last-step .next-btn {
    display: none;
}

/* Progress bar */
.progress-bar {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.progress-bar div {
    width: 30%;
    height: 10px;
    background-color: #ccc;
    border-radius: 5px;
    position: relative;
}

.progress-bar div.active {
    background-color: #009688;
}

.progress-bar div::after {
    content: attr(data-step);
    position: absolute;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 12px;
    font-weight: 600;
}

/* Payment section styling */
.payment {
    margin-top: 30px;
}

.total {
    font-size: 18px;
    font-weight: 700;
    color: #333;
    margin-bottom: 15px;
}

.payment-buttons {
    display: flex;
    gap: 10px;
}

.payment-buttons button {
    padding: 12px 20px;
    font-size: 16px;
}


    </style>
    <script>
  const steps = document.querySelectorAll(".form-step");
const nextBtns = document.querySelectorAll(".next-btn");
const prevBtns = document.querySelectorAll(".prev-btn");
const submitBtn = document.querySelector(".submit-btn");
const progressBarItems = document.querySelectorAll(".progress-bar div");
let currentStep = 0;

// Display the first step
steps[currentStep].classList.add("active");
updateButtonVisibility();

// Update progress bar
function updateProgressBar(step) {
  progressBarItems.forEach((item, index) => {
    if (index <= step) {
      item.classList.add("active");
    } else {
      item.classList.remove("active");
    }
  });
}

// Update button visibility
function updateButtonVisibility() {
  prevBtns.forEach((btn) => {
    btn.style.display = currentStep === 0 ? "none" : "inline-block";
  });

  nextBtns.forEach((btn) => {
    btn.style.display = currentStep === steps.length - 1 ? "none" : "inline-block";
  });

  submitBtn.style.display = currentStep === steps.length - 1 ? "inline-block" : "none";
}

// Event listener for "Next" buttons
nextBtns.forEach((button, index) => {
  button.addEventListener("click", () => {
    if (validateStep(currentStep)) {
      steps[currentStep].classList.remove("active");
      currentStep++;
      steps[currentStep].classList.add("active");
      updateProgressBar(currentStep);
      updateButtonVisibility();
    }
  });
});

// Event listener for "Previous" buttons
prevBtns.forEach((button, index) => {
  button.addEventListener("click", () => {
    steps[currentStep].classList.remove("active");
    currentStep--;
    steps[currentStep].classList.add("active");
    updateProgressBar(currentStep);
    updateButtonVisibility();
  });
});

// Validation function to ensure required fields are filled
function validateStep(stepIndex) {
  const currentFormStep = steps[stepIndex];
  let isValid = true;

  const requiredInputs = currentFormStep.querySelectorAll("input[required], textarea[required], select[required]");
  requiredInputs.forEach(input => {
    const radioInputs = currentFormStep.querySelectorAll('input[type="radio"][name="' + input.name + '"]');
    if ((input.type === "radio" && ![...radioInputs].some(r => r.checked)) || !input.value.trim()) {
      input.style.border = "1px solid red";
      isValid = false;
    } else {
      input.style.border = "1px solid #ccc";
    }
  });

  // Disable next button if validation fails
  nextBtns.forEach(btn => {
    btn.disabled = !isValid;
  });

  return isValid;
}

// Event listener for "Submit" button
submitBtn.addEventListener("click", () => {
  // Add your form submission logic here
  alert("Form submitted!");
});


    </script>
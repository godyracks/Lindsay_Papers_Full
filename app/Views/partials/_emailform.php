<div class="form-container">

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

    <button type="button" class="next-btn">Next</button>
  </div>

  <!-- Step 2: Paper Details -->
  <div class="form-step">
    <h3>STEP 2: PAPER DETAILS</h3>
    <div class="form-group">
      <label for="paper-type">Type of Paper *</label>
      <input type="text" id="paper-type" name="paper-type" placeholder="Type your paper type">
    </div>

    <div class="form-group">
      <label for="discipline">Field or Discipline</label>
      <input type="text" id="discipline" name="discipline" placeholder="Select your field or discipline">
    </div>

    <div class="form-group">
      <label for="instructions">Paper Instructions</label>
      <textarea id="instructions" name="instructions" placeholder="Enter detailed paper instructions"></textarea>
    </div>

    <button type="button" class="prev-btn">Previous</button>
    <button type="button" class="next-btn">Next</button>
  </div>

  <!-- Step 3: Final Information -->
  <div class="form-step">
    <h3>STEP 3: CONTACT AND PAYMENT</h3>

    <div class="form-group">
      <label for="email">Email *</label>
      <input type="email" id="email" name="email">
    </div>

    <div class="form-group">
      <label for="phone">Phone</label>
      <input type="tel" id="phone" name="phone">
    </div>

    <button type="button" class="prev-btn">Previous</button>
    <button type="submit" class="submit-btn">Submit</button>
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
let currentStep = 0;

// Display the first step
steps[currentStep].classList.add("active");

// Event listener for "Next" buttons
nextBtns.forEach((button, index) => {
  button.addEventListener("click", () => {
    if (validateStep(currentStep)) {
      steps[currentStep].classList.remove("active");
      currentStep++;
      steps[currentStep].classList.add("active");
    }
  });
});

// Event listener for "Previous" buttons
prevBtns.forEach((button, index) => {
  button.addEventListener("click", () => {
    steps[currentStep].classList.remove("active");
    currentStep--;
    steps[currentStep].classList.add("active");
  });
});

// Validation function to ensure required fields are filled
function validateStep(stepIndex) {
  const currentFormStep = steps[stepIndex];
  let isValid = true;

  const requiredInputs = currentFormStep.querySelectorAll("input[required], textarea[required], select[required]");
  requiredInputs.forEach(input => {
    if (!input.value || (input.type === "radio" && !input.checked)) {
      input.style.border = "1px solid red";
      isValid = false;
    } else {
      input.style.border = "1px solid #ccc";
    }
  });

  return isValid;
}

    </script>
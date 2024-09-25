<div class="form-container">

  <!-- Step 1: Academic Level and Deadline -->
  <div class="form-step">
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


  <!-- Step 2: Paper Details -->
  <div class="form-step">
    <h3>STEP 2: PAPER DETAILS</h3>
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
  </div>
</div>

        <form>
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
                <p>Includes charts, diagrams, answers to mathematical questions</p>
                <p>Small=10 questions, Medium=25 questions, Large=up to 40 questions</p>
            </div>

            <!-- Number of Sources -->
            <div class="form-section">
                <label for="sources">Number of Sources</label>
                <input type="text" id="sources" name="sources" placeholder="Type the number of sources required. No limits.">
            </div>

            <!-- Number of Pages and Paper Format -->
            <div class="form-section">
                <label>Number of Pages *</label>
                <select name="pages">
                    <option>Select Number of Pages</option>
                    <!-- Add more options as needed -->
                </select>
                <p>Double Spaced(275 Words Per Page)<br>Single Spaced(550 Words Per Page)</p>
            </div>

            <!-- PowerPoint Presentation -->
            <div class="form-section">
                <label>PowerPoint Presentation</label>
                <select name="slides">
                    <option>Select Number of Slides</option>
                    <!-- Add more options as needed -->
                </select>
                <p>10 slides = 10 minutes</p>
            </div>

            <!-- Paper Format or Citation Style -->
            <div class="form-section">
                <label>Paper Format or Citation Style *</label>
                <div class="radio-group">
                    <label><input type="radio" name="citation_style" value="mla"> MLA</label>
                    <label><input type="radio" name="citation_style" value="apa"> APA</label>
                    <label><input type="radio" name="citation_style" value="chicago"> Chicago</label>
                    <label><input type="radio" name="citation_style" value="na"> Not Applicable</label>
                </div>
            </div>

            <!-- Online Class Options -->
            <div class="form-section">
                <label>Do my Online Class for me *</label>
                <div class="radio-group">
                    <label><input type="radio" name="online_class" value="8_weeks"> 8 Weeks Online Class</label>
                    <label><input type="radio" name="online_class" value="12_weeks"> 12 Weeks Online Class</label>
                    <label><input type="radio" name="online_class" value="16_weeks"> 16 Weeks Online Class</label>
                    <label><input type="radio" name="online_class" value="na"> Not Applicable</label>
                </div>
            </div>

            <!-- Graphics Options -->
            <div class="form-section">
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
            <div class="form-section">
                <label for="email">Email *</label>
                <input type="email" id="email" name="email">
            </div>
            <div class="form-section">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone">
            </div>

            <!-- Payment Section -->
            <div class="form-section payment">
                <label>Total</label>
                <div class="total">$0.00</div>
                <div class="payment-buttons">
                    <button type="button" class="paypal-btn">PayPal Checkout</button>
                    <button type="button" class="card-btn">Debit or Credit Card</button>
                </div>
            </div>
        </form>
    </div>
    <style>
        .form-container {
  max-width: 800px;
  margin: 0 auto;
  padding: 20px;
  font-family: Arial, sans-serif;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.form-step {
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

input[type="text"], textarea {
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

input[type="text"]:focus, textarea:focus {
  outline: none;
  border-color: #009688;
}

    </style>
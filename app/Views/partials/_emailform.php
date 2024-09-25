<div class="form-container">
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
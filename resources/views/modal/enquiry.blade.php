
<style>
    /* Modal Styling */
.enquiry-form .modal-content {
  border: none;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.enquiry-form .modal-header {
  background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
  color: white;
  padding: 25px;
  border-bottom: none;
  position: relative;
}

.enquiry-form .modal-title {
  font-weight: 700;
  font-size: 1.8rem;
  margin-bottom: 0.5rem;
}

.enquiry-form .modal-subtitle {
  font-weight: 400;
  opacity: 0.9;
  font-size: 0.9rem;
  margin-bottom: 0;
}

.enquiry-form .btn-close {
  position: absolute;
  top: 20px;
  right: 20px;
  color: white;
  opacity: 0.8;
  background: none;
  font-size: 1.2rem;
}

.enquiry-form .btn-close:hover {
  opacity: 1;
}

.enquiry-form .modal-body {
  padding: 25px;
}

/* Form Group Styling */
.enquiry-form .form-group {
  margin-bottom: 1.5rem;
  position: relative;
}

.enquiry-form .form-control {
  height: 50px;
  border-radius: 8px;
  padding-left: 45px;
  border: 1px solid #e0e0e0;
  transition: all 0.3s;
}

.enquiry-form .form-control:focus {
  border-color: #4b6cb7;
  box-shadow: 0 0 0 3px rgba(75, 108, 183, 0.2);
}

/* Floating Labels */
.enquiry-form .floating {
  position: relative;
}

.enquiry-form .floating label {
  position: absolute;
  top: 15px;
  left: 45px;
  color: #999;
  transition: all 0.3s;
  pointer-events: none;
}

.enquiry-form .floating input:focus + label,
.enquiry-form .floating input:not(:placeholder-shown) + label {
  top: -10px;
  left: 40px;
  font-size: 0.8rem;
  background: white;
  padding: 0 5px;
  color: #4b6cb7;
}

.enquiry-form .input-icon {
  position: absolute;
  /*left: 15px;*/
  /*top: 15px;*/
  color: #999 !important;
}

/* Radio Button Styling */
.enquiry-form .radio-group {
  padding: 10px 0;
}

.enquiry-form .radio-label {
  display: block;
  margin-bottom: 10px;
  font-weight: 500;
  color: #555;
}

.enquiry-form .radio-options {
  display: flex;
  gap: 20px;
}

.enquiry-form .form-check {
  margin: 0;
  padding: 0;
}

.enquiry-form .form-check-input {
  display: none;
}

.enquiry-form .form-check-label {
  display: flex;
  align-items: center;
  cursor: pointer;
  color: #555;
}

.enquiry-form .radio-button {
  display: inline-block;
  width: 18px;
  height: 18px;
  border: 2px solid #ccc;
  border-radius: 50%;
  margin-right: 8px;
  position: relative;
  transition: all 0.3s;
}

.enquiry-form .form-check-input:checked + .form-check-label .radio-button {
  border-color: #4b6cb7;
  background-color: #4b6cb7;
}

.enquiry-form .form-check-input:checked + .form-check-label .radio-button::after {
  content: '';
  position: absolute;
  width: 8px;
  height: 8px;
  background: white;
  border-radius: 50%;
  top: 3px;
  left: 3px;
}

/* Submit Button */
.enquiry-form .submit-btn {
  background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);
  color: white;
  border: none;
  border-radius: 8px;
  padding: 12px 25px;
  font-weight: 600;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  transition: all 0.3s;
}

.enquiry-form .submit-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 5px 15px rgba(75, 108, 183, 0.4);
}

.enquiry-form .btn-icon {
  transition: transform 0.3s;
}

.enquiry-form .submit-btn:hover .btn-icon {
  transform: translateY(-2px);
}

/* Responsive Adjustments */
@media (max-width: 576px) {
  .enquiry-form .modal-header {
    padding: 20px;
  }
  .enquiry-form .modal-title {
    font-size: 1.5rem;
  }
  .enquiry-form .modal-body {
    padding: 20px;
  }
}

</style>

<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <form id="enquiryForm" class="enquiry-form">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title text-white">Get Your Free Download</h3>
          <p class="modal-subtitle">Please provide your details to continue</p>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group floating">
            <input type="text" class="form-control" name="name" id="name" required>
            <label for="name">Full Name</label>
            <i class="fas fa-user input-icon"></i>
          </div>
          
          <div class="form-group floating">
            <input type="tel" class="form-control" name="mobile" id="mobile" required>
            <label for="mobile">Mobile Number</label>
            <i class="fas fa-phone input-icon"></i>
          </div>
          
          <div class="form-group radio-group">
            <label class="radio-label">Have you given NEET exam?</label>
            <div class="radio-options">
              <div class="form-check">
                <input class="form-check-input neet-radio" type="radio" name="neet_given" id="neet_yes" value="yes" checked>
                <label class="form-check-label" for="neet_yes">
                  <span class="radio-button"></span>
                  Yes
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input neet-radio" type="radio" name="neet_given" id="neet_no" value="no">
                <label class="form-check-label" for="neet_no">
                  <span class="radio-button"></span>
                  No
                </label>
              </div>
            </div>
          </div>
          
          <div class="form-group floating" id="neetScoreDiv">
            <input type="number" class="form-control" name="neet_score" id="neet_score">
            <label for="neet_score">NEET Score (if applicable)</label>
            <i class="fas fa-star input-icon"></i>
          </div>
          
          <input type="hidden" name="file_url" id="file_url">
        </div>
        <div class="modal-footer">
          <button type="submit" class="submit-btn">
            <span class="btn-text">Submit & Download</span>
            <i class="fas fa-download btn-icon"></i>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>


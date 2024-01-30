<!-- ======= Popup ======= -->
<div id="contactFormPopup" class="popup">
    <span class="close-btn btn btn-sm icon-btn" id="closeFormBtn"><i class="far fa-times"></i></span>
    <div class="contact-form1" data-bg-src="">
        <h3 class="box-title text-dark">WRITE YOUR SERVICE QUERY</h3>
        <p class="box-text text-dark">Complete the form so that we connect with,</p>
        <p class="box-text text-dark">You our best service quote.</p>
        <!-- <form action="" method="POST" class="input-label ajax-contact" onsubmit="return validateForm_popup()"> -->
        <form action="#" id="contact-popup-form" method="POST" class="input-label ajax-contact">
            <div class="row">
                <div class="form-group line-input col-sm-6">
                    <input type="text" class="form-control custom-input" name="name" id="name-popup" ondragover="return false" ondrop="return false" onpaste="return false" oninput="validateField_popup('name-popup')" required="">
                    <label class="text-dark" for="name-popup">Name</label>
                </div>
                <div class="form-group line-input col-sm-6">
                    <input type="email" class="form-control custom-input" name="email" id="email-popup" ondragover="return false" ondrop="return false" onpaste="return false" oninput="validateField_popup('email-popup')" required="">
                    <label class="text-dark" for="email-popup">Email</label>
                </div>
                <div class="form-group line-input col-sm-6">
                    <input type="tel" class="form-control custom-input" name="mobileno" id="mobileno-popup" ondragover="return false" ondrop="return false" onpaste="return false" maxlength="10" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10); validateField_popup('mobileno-popup');" required="">
                    <label class="text-dark" for="mobileno-popup">Mobile No.</label>
                </div>
                <div class="form-group line-input col-sm-6">
                    <input type="text" class="form-control custom-input" name="subject" id="subject-popup" ondragover="return false" ondrop="return false" onpaste="return false" oninput="validateField_popup('subject-popup')" required="">
                    <label class="text-dark" for="subject-popup">Subject</label>
                </div>
                <div class="form-group line-input col-12"><textarea name="message" id="message-popup" ondragover="return false" ondrop="return false" onpaste="return false" oninput="validateField_popup('message-popup')" cols="30" rows="3" class="form-control custom-input" required=""></textarea>
                    <label class="text-dark" for="message-popup">Message</label>
                </div>
                <div class="form-btn col-12 mt-10">
                    <center>
                        <button type="submit" id="submitBtnPopup" class="ot-btn style3">Submit</button>
                    </center>
                </div>
            </div>
            <p class="form-messages mb-0 mt-3"></p>
        </form>
    </div>
</div>
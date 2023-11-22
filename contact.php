
<div class="row d-flex justify-content-evenly mt-4 mb-4" id="contact">
    <div class="col-md-5 left-side pt-4">
        <div class="contact-data">
            <h2 class="title-text">Let's talk, <span>huh</span></h2>
            <h6>Feel free to contact me with any questions, inquiries, ideas or just say hi :)</h6>
        </div>
        <div class="email-data">
            <p>helga.budai@proton.me</p>
        </div>
    </div>
    <div class="col-md-7 right-side">
    <?php if(isset($_POST['name']) ){ ?>
        <div class="alert my-3 alert-<?php echo $review_data['alert']; ?>" role="alert">
            <h3>Thank you for your message <3! We will get back to you shortly.</h3>
        </div> <?php }

        else{
        ?>
        <form method="POST" action="https://formspree.io/f/mzblqlqb" id="contactForm" name="contact">
            <div class="col upper-section">
                <div class="col-md-6 name">
                    <label class="form-label">Name:</label>
                    <input class="form-input" required type="text" name="name" id="name" placeholder="Full Name" value="<?php echo $inputs['name'] ?? '' ?>" class="<?php echo isset($errors['name']) ? 'error' : ''  ?>">
                    <small><?php echo $errors['name'] ?? '' ?></small>
                </div>
                <div class="col-md-6 email">
                    <label class="form-label">E-mail:</label>       
                    <input  class="form-input" required type="text" name="email" id="email" placeholder="Email Address" value="<?php echo $inputs['email'] ?? '' ?>" class="<?php echo isset($errors['email']) ? 'error' : '' ?>">
                    <small><?php echo $errors['email'] ?? '' ?></small>
                    <small id="emailvalid"
                           class="form-text text-muted invalid-feedback">
                       Please enter a valid email
                    </small> 
                </div>
            </div>
            <div class="message">
                <label class="form-label">Message:</label>
                <textarea type="text" required name="message" class="form-input" data-error="Message cannot be empty." placeholder="Enter your message"></textarea>
            </div>
            <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
            <div class="button" id="submitbtn">
                <button class="btn my-button" type="submit">Submit</button>
            </div>
        </form> <?php } ?>
    </div>
</div>


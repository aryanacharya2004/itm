<?php include 'includes/header.php'; ?>

<!-- Contact Us Section -->
<div class="hero-section" style="background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/images/image38.jpeg') center/cover; height: 50vh; display: flex; align-items: center; justify-content: center; color: white; text-align: center;">
    <div class="container">
        <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 1rem;">Contact Us</h1>
        <p class="lead" style="font-size: 1.5rem; max-width: 800px; margin: 0 auto;">Get in touch with us for any inquiries or assistance. We're here to help!</p>
    </div>
</div>


<section class="py-4" style="background-color: rgb(228, 233, 239);">
    <div class="container">
        <div class="contact-content">
            <div class="row align-items-center">
                <!-- Contact Information -->
                <div class="col-md-6">
                    <h2 style="color: #125875; font-size: 1.5rem; font-weight: bold;">Contact Information</h2>
                    <p style="font-size: 1.1rem; line-height: 1.6; color: #333;">
                        <strong>Address:</strong><br>
                        Mahuawa Pharenda Coad, Maharajganj, Uttar Pradesh - 273303
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.6; color: #333;">
    <strong>Contact Numbers:</strong><br>
    <a href="tel:+9935632546" style="color: #125875;">+9935632546</a>, 
    <a href="tel:+9250652083" style="color: #125875;">+9250652083</a>
</p>

                    <p style="font-size: 1.1rem; line-height: 1.6; color: #333;">
                        <strong>Email:</strong><br>
                        <a href="mailto:itmcop@gmail.com" style="color: #125875;">itmcop@gmail.com</a>
                    </p>
                    <!-- Google Map Embed -->
                    <h3 style="color: #125875; font-size: 1.5rem; font-weight: bold;">Our Location</h3>
                    <div class="map-container" style="position: relative; overflow: hidden; padding-bottom: 56.25%;  max-width: 100%; height: 400px;">
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d56815.246708767285!2d83.47603857014091!3d27.12629283897675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1skpc%20medical%20college%20maharajganj!5e0!3m2!1sen!2sin!4v1743354665168!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d454549.2824534872!2d82.82474528906249!3d27.119572499999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3996ae08d08e9159%3A0x426445c618d189d9!2sITM%20Group%20of%20Institutions%2C%20Maharajganj!5e0!3m2!1sen!2sus!4v1744100786424!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-md-6">
                    <h2 style="color: #125875; font-size: 1.5rem; font-weight: bold;">Send Us a Message</h2>
                    <form action="contact_form.php" method="POST">
                    <div class="mb-3">
            <label for="name" class="form-label" style="font-size: 1.1rem; color: #333;">Your Name</label>
            <input type="text" class="form-control" id="name" name="name" required style="font-size: 1.1rem;">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" style="font-size: 1.1rem; color: #333;">Your Email</label>
            <input type="email" class="form-control" id="email" name="email" required style="font-size: 1.1rem;">
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label" style="font-size: 1.1rem; color: #333;">Your Phone (Optional)</label>
            <input type="tel" class="form-control" id="phone" name="phone" style="font-size: 1.1rem;">
        </div>
        <div class="mb-3">
            <label for="message" class="form-label" style="font-size: 1.1rem; color: #333;">Your Message</label>
            <textarea class="form-control" id="message" name="message" rows="5" required style="font-size: 1.1rem;"></textarea>
        </div>
        <button type="submit" class="btn" style="background-color: #125875; color: white; font-size: 1.1rem;">Send Message</button>
    </form>

                </div>
            </div>
        </div>
    </div>
</section>


<?php
if (isset($_POST['send'])) {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone']; // Optional
    $message = $_POST['message'];

    $to = ' itmcop@gmail.com'; // Your desired email address
    $subject = 'Message from Contact Us Form';

    // HTML content for the email body
    $htmlContent = "
    <html>
    <head>
        <title>Message from Contact Us Form</title>
    </head>
    <body>
        <h2 style='color: #125875;'>New Message from Contact Us Form</h2>
        <table cellspacing='0' style='border: 2px dashed #FB4314; width: 100%;'>
            <tr style='background-color: #e0e0e0;'>
                <th>Name:</th><td>{$name}</td>
            </tr>
            <tr style='background-color: #e0e0e0;'>
                <th>Email:</th><td>{$email}</td>
            </tr>
            <tr style='background-color: #e0e0e0;'>
                <th>Phone:</th><td>{$phone}</td>
            </tr>
            <tr style='background-color: #e0e0e0;'>
                <th>Message:</th><td>{$message}</td>
            </tr>
        </table>
    </body>
    </html>
    ";

    // Email headers
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: {$email}" . "\r\n";

    // Send email
    if (mail($to, $subject, $htmlContent, $headers)) {
        echo '<script>alert("Your message has been sent successfully!");</script>';
    } else {
        echo '<script>alert("Failed to send your message. Please try again.");</script>';
    }
}
?>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);
    const responseDiv = document.getElementById('formResponse');
    
    responseDiv.innerHTML = '<div style="color: #125875;">Sending your message...</div>';
    
    fetch(form.action, {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        responseDiv.innerHTML = `<div style="color: #28a745;">${data}</div>`;
        form.reset();
    })
    .catch(error => {
        responseDiv.innerHTML = `<div style="color: #dc3545;">Error: ${error}</div>`;
    });
});
</script>
<?php include 'includes/footer.php'; ?>

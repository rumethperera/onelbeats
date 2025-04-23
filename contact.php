<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Onel Beats</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
<?php include('header.php'); ?>
    <!-- Contact Us Section -->
    <section class="contact-us">
        <div class="contact-header">
            <h1>Contact Us</h1>
            <p>We'd love to hear from you! Reach out for collaborations, feedback, or inquiries.</p>
        </div>
        
        <div class="contact-form-container">
            <form action="#" method="POST" class="contact-form">
                <div class="input-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required placeholder="Enter your name">
                </div>
                <div class="input-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" required placeholder="Enter your email">
                </div>
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required placeholder="Your message"></textarea>
                </div>
                <button type="submit" class="submit-btn">Send Message</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
<?php include('footer.php'); ?>
</body>
</html>

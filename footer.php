<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Onel Beats</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    footer {
      background-color: #333;
      color: #fff;
      padding: 30px 20px;
      width: 100%;
      font-size: 14px;
      line-height: 1.6;
      text-align: center;
      box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.3);
    }

    .footer-container {
      max-width: 1200px;
      margin: auto;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 30px;
      text-align: left;
    }

    .footer-left, .footer-right {
      flex: 1 1 300px;
    }

    .footer-left p,
    .footer-right p {
      margin: 6px 0;
    }

    footer p a {
      color: #ff6f61;
      text-decoration: none;
      font-weight: bold;
    }

    footer p a:hover {
      text-decoration: underline;
      color: #fff;
    }

    ul.social-links {
      list-style: none;
      padding: 0;
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-top: 10px;
    }

    ul.social-links li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      font-size: 14px;
      display: flex;
      align-items: center;
      transition: 0.3s ease;
    }

    ul.social-links li a:hover {
      color: #ff6f61;
    }

    .social-icon {
      width: 24px;
      height: 24px;
      margin-right: 8px;
      background-size: cover;
      display: inline-block;
    }

    .facebook {
      background-image: url('img/fb.webp'); /* Replace with actual path */
    }

    .twitter {
      background-image: url('twitter-icon.svg'); /* Replace with actual path */
    }

    .instagram {
      background-image: url('instagram-icon.svg'); /* Replace with actual path */
    }

    .youtube {
      background-image: url('img/yt.png'); /* Replace with actual path */
    }

    @media (max-width: 768px) {
      .footer-container {
        flex-direction: column;
        text-align: center;
      }

      .footer-left, .footer-right {
        flex: 1 1 100%;
      }

      ul.social-links {
        justify-content: center;
      }
    }

    @media (max-width: 480px) {
      footer {
        font-size: 12px;
      }

      ul.social-links li a {
        font-size: 12px;
      }
    }
  </style>
</head>
<body>

  <!-- footer.html -->
  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <p>&copy; 2025 Onel Beats</p>
        <p>123 Music Street, Colombo, Sri Lanka</p>
        <p>Phone: <a href="tel:+94701234567">+94 701 234 567</a></p>
        <p>Email: <a href="mailto:info@onelbeats.lk">info@onelbeats.lk</a></p>
      </div>

      <div class="footer-right">
        <h4>Follow Us</h4>
        <ul class="social-links">
          <li><a href="https://facebook.com/onelbeats" class="social-icon facebook" target="_blank" aria-label="Facebook"></a> Facebook</a></li>
          <li><a href="https://twitter.com/onelbeats" class="social-icon twitter" target="_blank" aria-label="Twitter"></a> Twitter</a></li>
          <li><a href="https://instagram.com/onelbeats" class="social-icon instagram" target="_blank" aria-label="Instagram"></a> Instagram</a></li>
          <li><a href="https://youtube.com/@onelbeatsyt" class="social-icon youtube" target="_blank" aria-label="YouTube"></a> YouTube</a></li>
        </ul>
      </div>
    </div>
  </footer>

</body>
</html>

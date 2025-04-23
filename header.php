<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Onel Beats</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
    }

    header {
      position: sticky;
      top: 0;
      background: linear-gradient(90deg, #111, #1e1e1e);
      color: #fff;
      padding: 15px 20px;
      z-index: 1000;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
    }

    .header-wrapper {
      max-width: 1200px;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: #ff6f61;
      text-decoration: none;
    }

    nav {
      margin: 10px 0;
    }

    nav ul {
      display: flex;
      list-style: none;
      gap: 20px;
      flex-wrap: wrap;
    }

    nav ul li a {
      text-decoration: none;
      color: #fff;
      padding: 8px 14px;
      border-radius: 4px;
      transition: all 0.3s ease;
    }

    nav ul li a:hover {
      background-color: #ff6f61;
      box-shadow: 0 0 10px #ff6f61;
      color: #fff;
    }

    .cta-button {
      background-color: #ff6f61;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 25px;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s ease;
    }

    .cta-button:hover {
      background-color: #e4503e;
      transform: scale(1.05);
      box-shadow: 0 0 10px #ff6f61;
    }

    /* Hamburger Button */
    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      cursor: pointer;
      z-index: 2000;
    }

    .hamburger div {
      width: 30px;
      height: 3px;
      background-color: #fff;
      border-radius: 5px;
    }

    /* Responsive Menu */
    @media (max-width: 768px) {
      .header-wrapper {
        flex-direction: column;
        text-align: center;
      }

      nav ul {
        display: none;
        flex-direction: column;
        gap: 10px;
        width: 100%;
        background-color: #1e1e1e;
        padding: 20px;
        position: absolute;
        top: 60px;
        left: 0;
        right: 0;
        z-index: 100;
      }

      nav ul li {
        width: 100%;
        text-align: center;
      }

      nav ul li a {
        display: block;
        padding: 12px 0;
        color: #fff;
        font-size: 1.2rem;
        border-bottom: 1px solid #fff;
      }

      nav ul li a:hover {
        background-color: #ff6f61;
        box-shadow: none;
      }

      .hamburger {
        display: flex;
      }

      .cta-button {
        margin-top: 10px;
      }

      nav.active ul {
        display: flex;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="header-wrapper">
      <a href="/" class="logo">Onel Beats</a>

      <nav>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="remix.php">Remix</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </nav>

      <!-- Hamburger Menu -->
      <div class="hamburger" id="hamburger">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
  </header>

  <script>
    const hamburger = document.getElementById("hamburger");
    const nav = document.querySelector("nav");

    hamburger.addEventListener("click", () => {
      nav.classList.toggle("active");
    });
  </script>

</body>
</html>

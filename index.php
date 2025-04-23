<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Onel Beats - Music Remixing & Songs</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <?php include('header.php'); ?>

  <!-- Background Music (autoplay and loop) -->
  <audio autoplay loop>
    <source src="back.mp3" type="audio/mp3">
    <p>Your browser does not support the audio element.</p>
  </audio>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <div class="hero-content">
      <h1>Welcome to Onel Beats</h1>
      <p>Where music remixes, beats, and creativity unite!</p>
      <a href="https://www.youtube.com/@OnelBeatsyt" class="cta-button">Visit My Remix</a>
    </div>
    <div class="scroll-down">
      <a href="#videos"><span>&#x2193;</span></a>
    </div>
  </section>

  <!-- Featured Videos Section -->
  <section class="video-gallery" id="videos">
    <div class="container">
      <h2>Featured Music Videos</h2>
      <div class="video-grid">
        <div class="video-item">
          <iframe src="https://www.youtube.com/embed/K82FvP7oSf8" allowfullscreen></iframe>
        </div>
        <div class="video-item">
          <iframe src="https://www.youtube.com/embed/7cxEQ2SkX_M" allowfullscreen></iframe>
        </div>
        <div class="video-item">
          <iframe src="https://www.youtube.com/embed/VW2QHEEL3pM" allowfullscreen></iframe>
        </div>
        <div class="video-item">
          <iframe src="https://www.youtube.com/embed/4LicuDA7i1o" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>



  <!-- Scripts -->
  <script src="script.js"></script>
  <?php include('footer.php'); ?>
</body>
</html>

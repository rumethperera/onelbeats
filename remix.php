<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Onel Beats - All Songs & Remixes</title>
    <link rel="stylesheet" href="remix.css" />
</head>

<body>
    <?php include('header.php'); ?>

    <!-- Song Videos Section -->
    <section class="song-gallery" id="songs">
        <div class="container">
            <h2 class="section-title">Featured Songs & Remixes</h2>

            <!-- Filter/Search Bar -->
            <div class="search-bar">
                <input type="text" id="videoSearch" placeholder="Search for a song...">
            </div>

            <div class="video-grid" id="videoGrid">
                <?php
                $videos = [
                    ["https://www.youtube.com/watch?v=fbk13PY6z-U", "Song 1 Title"],
                    ["https://www.youtube.com/watch?v=w2B4wnhVa40", "Song 2 Title"],
                    ["https://www.youtube.com/watch?v=xWlG3BWD-7c", "Song 3 Title"],
                    ["https://www.youtube.com/watch?v=CcFu0qRlBWA", "Song 4 Title"],
                    ["https://www.youtube.com/watch?v=4As4ybzbApo", "Song 5 Title"],
                    ["https://www.youtube.com/watch?v=KDkYhDNOAX8", "Song 6 Title"],
                    ["https://www.youtube.com/watch?v=-kELL2xOUmM", "Song 7 Title"],
                    ["https://www.youtube.com/watch?v=3WIN9YoDhtU", "Song 8 Title"],
                    ["https://www.youtube.com/watch?v=OT4U50CCReM", "Song 9 Title"],
                    ["https://www.youtube.com/watch?v=CxKai3MtQAE", "Song 10 Title"],
                    ["https://www.youtube.com/watch?v=7cxEQ2SkX_M", "Song 11 Title"],
                    ["https://www.youtube.com/watch?v=_D-lBbSuGLw", "Song 12 Title"],
                    ["https://www.youtube.com/watch?v=kzTUiJLyb2E", "Song 13 Title"],
                    ["https://www.youtube.com/watch?v=w7Ur8DT87jg", "Song 14 Title"],
                    ["https://www.youtube.com/watch?v=VW2QHEEL3pM", "Song 15 Title"],
                    ["https://www.youtube.com/watch?v=4LicuDA7i1o", "Song 16 Title"],
                    ["https://www.youtube.com/watch?v=V288vc7pqr8", "Song 17 Title"],
                    ["https://www.youtube.com/watch?v=l-eVgCmS6Io", "Song 18 Title"],
                    ["https://www.youtube.com/watch?v=pYgUI5-Ej5E", "Song 19 Title"],
                    ["https://www.youtube.com/watch?v=T7LpYy-FkH4", "Song 20 Title"],
                    ["https://www.youtube.com/watch?v=9HXIZBjvt7o", "Song 21 Title"],
                    ["https://www.youtube.com/watch?v=K82FvP7oSf8", "Song 22 Title"],
                    ["https://www.youtube.com/watch?v=qQ_-csYmHdI", "Song 23 Title"],
                    ["https://www.youtube.com/watch?v=OB9fr0ENrRs", "Song 24 Title"],
                    ["https://www.youtube.com/watch?v=EjdMjHl3TI8", "Song 25 Title"],
                    ["https://www.youtube.com/watch?v=2dd23c3OBvQ", "Song 26 Title"]
                ];

                foreach ($videos as $video) {
                    $videoUrl = $video[0];
                    $title = htmlspecialchars($video[1]);

                    preg_match('/[?&]v=([^&]+)/', $videoUrl, $matches);
                    $videoId = $matches[1] ?? '';

                    if ($videoId) {
                        echo '
                        <div class="video-item" data-title="' . strtolower($title) . '">
                            <div class="video-wrapper">
                                <iframe src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen title="' . $title . '"></iframe>
                            </div>
                        </div>';
                    }
                }
                ?>
            </div>
        </div>
    </section>

    <script>
        const searchInput = document.getElementById('videoSearch');
        const videoItems = document.querySelectorAll('.video-item');

        searchInput.addEventListener('keyup', () => {
            const search = searchInput.value.toLowerCase();
            videoItems.forEach(item => {
                const title = item.getAttribute('data-title');
                item.style.display = title.includes(search) ? 'block' : 'none';
            });
        });
    </script>

    <?php include('footer.php'); ?>
</body>

</html>

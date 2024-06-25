<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant V-Continental</title>
    <style>
        /* Tambahkan gaya CSS untuk membuat video full width */
        video {
            width: 100%;
            height: auto;
        }
        .header-text {
            text-align: center;
        }
        .menu-button {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1000;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aS/jfF8CPvJS7oSxFGHCsHVq+dTRTI4TOBu2MZObn5GcpJcyYgEIrFw6j4dgaurs" crossorigin="anonymous">
</head>

<body>
    <!-- Menu Button -->
    <a href="home.php" class="btn btn-primary menu-button">Home</a>

    <!-- Header -->
    <header class="py-5 gradient-background">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white header-text">
                <h1 class="display-4 fw-bolder">Video</h1>
                <p class="lead fw-normal text-white-50 mb-0">Selamat Menyaksikan</p>
            </div>
        </div>
    </header>

    <!-- Video Section -->
    <div class="container">
        <?php
        $video_file = "video.mp4"; // Ganti dengan nama file video Anda
        if (file_exists($video_file)) {
            echo '<video width="640" height="360" controls>';
            echo '<source src="' . $video_file . '" type="video/mp4">';
            echo 'Your browser does not support the video tag.';
            echo '</video>';
        } else {
            echo '<p style="text-align: center; font-size: 18px;">Video tidak ditemukan.</p>';
        }
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>

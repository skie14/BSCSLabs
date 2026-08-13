<?php
$title = "About Me";
$header = "Welcome to my Portfolio";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>



    <nav class="navbar">
        <div class="nav-link">
            <a href="index.php">Home</a>
            <a href="page1.php">Skills and Hobbies</a>
            <a href="page2.php">Projects and Goals</a>
        </div>
    </nav>




    <main class="about-container">

        <div class="about-text">
            <h1> <?php echo $header; ?></h1>

            <p>
                Hello! My name is Kiel Llabore. I am a student and
                an aspiring web developer with a passion for creating interactive
                and user-friendly websites.
                This portfolio contains information about me, my skills,
                hobbies, projects, and future goals.
            </p>

            <div class="socials">
                <h2>Connect with me</h2>

                <a href="https://facebook.com" target="_blank">
                    <img class="icon"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/960px-2023_Facebook_icon.svg.png"
                        alt="Facebook">
                </a>

                <a href="https://linkedin.com" target="_blank">
                    <img class="icon"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/81/LinkedIn_icon.svg/3840px-LinkedIn_icon.svg.png"
                        alt="LinkedIn">
                </a>

                <a href="https://github.com" target="_blank">
                    <img class="icon"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/960px-Octicons-mark-github.svg.png"
                        alt="GitHub">
                </a>
            </div>
        </div>


        <div class="about-image">
            <img
                src="assets/pfp.png"
                alt="Profile Picture" width="200">
        </div>

    </main>

</body>

</html>
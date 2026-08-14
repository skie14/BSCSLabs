<?php
$title = "Skills and Hobbies";
$header = "My Skills and Interests";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>

    <nav class="navbar">
        <div class="nav-link">
            <a href="index.php">Home</a>
            <a href="page1.php">Skills and Hobbies</a>
            <a href="page2.php">Projects and Goals</a>
        </div>
    </nav>

    <main class="skills-container">
        <h1><?php echo $header; ?></h1>

        <p class="intro">
            I am currently learning HTML, CSS, PHP, and other programming
            concepts. I enjoy creating simple websites and learning how
            computers and technology work.
        </p>

        <section class="skills-section">
            <h2>Technical Skills</h2>

            <h3>Programming</h3>

            <div class="skill-tags">
                <span>C++</span>
                <span>Java</span>
                <span>PHP</span>
                <span>C#</span>
                <span>JavaScript</span>
            </div>

            <h3>Web Development</h3>

            <div class="skill-tags">
                <span>HTML</span>
                <span>CSS</span>
                <span>PHP</span>
                <span>JavaScript</span>
            </div>

            <h3>Databases</h3>

            <div class="skill-tags">
                <span>MySql</span>
            </div>

            <h3>Game Development</h3>

            <div class="skill-tags">
                <span>Unity</span>
                <span>C#</span>
                <span>Aseprite</span>
            </div>

        </section>


        <section class="hobbies-section">

            <h2>Personal Interests</h2>

            <div class="hobby-tags">
                <span>Playing Video Games</span>
                <span>Reading Novels</span>
                <span>Listening to Music</span>
            </div>
            <div class="hobby-image">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrM9vaJpmE8SkF8jhmbq_gEU8qGT-fhc4r9M6JZoZRjBJ3ObUsDaZDwoEt&s=10"
                    alt="Profile Picture" width="200">
                <p>One of my favorite things to do is spend time with cats.</p>
            </div>
        </section>
    </main>
</body>

</html>
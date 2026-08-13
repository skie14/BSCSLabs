<?php
$title = "Projects and Goals";
$header = "My Projects and Future Goals";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
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


    <main class="projects-container">
        <h1><?php echo $header; ?></h1>

        <p class="intro">
            During my studies, I have worked on different activities and projects involving
            programming and web development.
            These experiences have helped me improve my problem-solving and technical skills.
        </p>

        <section class="project-section">

            <h2>Projects</h2>

            <div class="project-list">
                <div class="project-card">
                    <h3>Personal Portfolio Website</h3>
                    <img src="assets/portolio.png" alt="Portfolio Website">

                    <p> A simple portfolio website created using HTML,
                        CSS, and PHP. This project showcases my skills,
                        hobbies, projects, and goals.
                    </p>
                </div>

                <div class="project-card">
                    <h3>Simple Game Development Project</h3>
                    <img src="assets/game.png" alt="Simple Game">
                    <p>
                        UPBOUND is a 2D platformer game developed using C# and Unity.
                        It focuses on fast-paced movement and exploration. Players use
                        a grapple system to swing, launch, and navigate through the forest.
                    </p>
                </div>

                <div class="project-card">

                    <h3>Healthcare Management System using Java</h3>
                    <img src="assets/ss.png" alt="Healthcare Management System">

                    <p>
                        A healthcare management system built with Java and MySQL.
                        It features patient and healthcare staff dashboards,
                        patient profile management, queue tracking, check-in systems,
                        wait-time calculations, notifications, and telemedicine support.
                    </p>

                </div>

            </div>
        </section>

        <section class="goals-section">
            <h2>My Future Goals</h2>
            <ul class="goals-list">
                <li>Improve my programming and web development skills</li>
                <li>Learn advanced programming concepts and frameworks</li>
                <li>Create more complete and interactive websites</li>
                <li>Build a strong portfolio of web development projects</li>
                <li>Stay updated with the latest trends and technologies in web development</li>
                <li>Pursue a Master's Degree</li>
                <li>Pursue Data Science</li>
            </ul>
        </section>
    </main>
</body>

</html>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="maNDrCWkManMhBRV9R5hzi4FlEJUBk3Wb9bBvVGhIa4"/>
    <meta name="description"
          content="I'm currently a student at the University of Washington. I've been programming for over 7 years despite having no germane formal education. I have created several iPhone applications as well as designed and maintained a few websites. After receiving a '5' on the AP Computer Science exam and achieving a grade of 4.0 in Introduction to Java Programming and 3.9 in Calculus with Analytical Geometry, I am well on my way toward my dream of majoring in Computer Science.">
    <title>Ryan Rowe</title>

    <?php require($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>

    <script>
        $(document).ready(function (e) {
            counter = 0;
            slides = document.querySelectorAll("#main-image img");

            setInterval(advance, 4000);

            function advance() {
                $(slides[counter]).addClass("inactive");

                if (counter === slides.length - 1) {
                    counter = 0;
                } else {
                    counter++;
                }

                $(slides[counter]).removeClass("inactive");
            }
        });
    </script>
</head>

<body>
<?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
<main>
    <div id="main-image">
        <img alt="Me looking pensive on a lake" src="/images/lake.jpg" width="3409" height="1173">
        <img alt="A beautiful scenic look from Wallace Falls State Park, WA" src="/images/wallacefalls.jpg" width="2500" height="860">
        <img class="inactive" alt="A rainbow on NE Campus Pkwy" src="/images/rainbow.jpg" width="3409" height="1173">
        <img class="inactive" alt="The Seattle skyline" src="/images/city.jpg" width="2624" height="903">
        <img class="inactive" alt="An art exhibit at the Henry Art Museum" src="/images/henry.jpg"
             width="3005" height="1034">
        <img class="inactive" alt="NYC Skyline" src="/images/NYC.jpg" width="3409" height="1173">
    </div> <!-- #main-image -->
    <div id="slideshow-spacer" class="grey darken-2"></div>
    <div id="welcome">
        <div class="container">
            <h1 class="grey-text text-darken-3">Hello, world!</h1>
            <p class="flow-text">
                I'm current a third-year computer science student at the University of Washington with an expected
                graduation date of June 2018. After graduation, I will be returning to UW to pursue a research-focused
                Master's degree in computer science, a program to which I've already been accepted.
            </p>
            <p class="flow-text">
                Since gaining entrance into the computer science program with an in-major GPA of 4.0, I have
                been learning voraciously and utilizing and honing my skills whenever possible including building a
                quad-copter, chess AIs, and this website. Much of the work I've done can be found in the
                <a href="/work">work tab</a> and chronicles of my experiences at college along with some other fun
                tidbits and personal projects can be found in my <a href="/honors">honors portfolio</a>.
            </p>

            <p class="flow-text">
                Feel free to <a class="contact-us modal-trigger" href="#contact">get in touch with me</a> or send me an
                email me at <a href="mailto:ry@nrowe.name">ry@nrowe.name</a> if you have any questions or any opportunities
                you think I&rsquo;d be a great fit for!
            </p>
        </div> <!-- end .container -->
    </div> <!-- end #welcome -->
</main>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</body>
</html>

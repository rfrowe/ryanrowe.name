<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="google-site-verification" content="maNDrCWkManMhBRV9R5hzi4FlEJUBk3Wb9bBvVGhIa4" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I'm currently a student at the University of Washington. I've been programming for over 7 years despite having no germane formal education. I have created several iPhone applications as well as designed and maintained a few websites. After receiving a '5' on the AP Computer Science exam and achieving a grade of 4.0 in Introduction to Java Programming and 3.9 in Calculus with Analytical Geometry, I am well on my way toward my dream of majoring in Computer Science.">
    <title>Ryan Rowe's Portfolio</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/imports.php") ?>

    <script>
        // Unset scrollbar.js
        $(window).unbind("scroll");
        $(window).unbind("resize");

        function changeMargin() {
            $('#welcome').css("margin-top", "" + (parseInt($("#nav-links").css("min-height")) + $("#main-image").height()) + "px");
        }

        window.onresize = function () {
            changeMargin();
        };

        $(document).ready(function (e) {
            counter = 0;
            slides = document.querySelectorAll("#main-image img");

            setInterval(advance, 5500);

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

<body onLoad="changeMargin();">
    <div class="container">
        <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
            <article class="content">
                <section id="main-image">
                    <img alt="Me looking pensive on a lake" src="/images/lake.jpg" width="3409" height="1173">
                    <img class="slideshow inactive" alt="A rainbow on NE Campus Pkwy" src="/images/rainbow.jpg" width="3409" height="1173">
                    <img class="slideshow inactive" alt="The Seattle skyline" src="/images/city.jpg" width="3409" height="1173">
                    <img class="slideshow inactive" alt="An art exhibit at the Henry Art Museum" src="/images/henry.jpg" width="3409" height="1173">
                    <img class="slideshow inactive" alt="NYC Skyline" src="/images/NYC.jpg">
                </section>
                <!--end #main-image-->
                <section id="welcome-shadow"></section>
                <section id="welcome">
                    <section class="main">
                        <h1 style="padding-top: 1em;">Ryan Rowe's Portfolio</h1>
                        <p>
                            I'm currently a student at the University of Washington. I've been programming for over 7 years and have created several iPhone applications as well as designed and maintained a few websites, some of which are featured in the <a href="work">work tab</a>. After receiving a '5' on the AP Computer Science exam and achieving a grade of 4.0 in <i>Introduction to Java Programming</i> and 3.9 in <i>Calculus with Analytical Geometry</i>, I am well on my way toward my dream of majoring in Computer Science.
                        </p>

                        <p>
                            On this site, you will find my résumé, links to my previous work, a portfolio of my thoughts, experiences, and creations throughout my time at the University of Washington, as well as a way to get in touch with me. Alternatively, you can <a href="/contact/">contact me here</a> or email me at <a href="mailto:ry@nrowe.name" style="background-image: none; padding-right: 0;">ry@nrowe.name</a>.
                        </p>
                        <section id="social-links" class="dropshadow">
                            <div class="filter trans linked-in">
                                <a target="_blank" href="https://www.linkedin.com/in/ryanfrowe" title="LinkedIn"></a>
                            </div>
                            <div class="filter trans github">
                                <a target="_blank" href="https://github.com/rfrowe" title="GitHub"></a>
                            </div>
                            <div class="filter trans facebook">
                                <a target="_blank" href="https://facebook.com/ryanroweboat" title="Facebook"></a>
                            </div>
                            <div class="filter trans email">
                                <a target="_blank" href="mailto:ry@nrowe.name" title="Email"></a>
                            </div>
                        </section>
                    </section>
                    <!-- end .main -->
                </section>
                <!--end #welcome-->
            </article>
            <!-- end .content -->
            <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
    </div>
    <!-- end .container -->
</body>

</html>

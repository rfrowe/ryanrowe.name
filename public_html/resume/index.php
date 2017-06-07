<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="Computer programmer currently attending the University of Washington. Programming for over 7 years despite no formal education prior to 10th grade. Created several iPhone apps, coded and managed website for 3 years, and received a ‘5’ on AP Computer Science exam by self-study guided by determination and impulse to learn.">

    <title>Résumé</title>

    <link href="/css/resume.css" rel="stylesheet" type="text/css">
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>
</head>

<body>
<?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
<main>
    <div class="title-thing valign-wrapper hide-on-med-and-down">
        <div class="valign">
            <h1>Ryan <span id="last-name">Rowe</span></h1>
            <h5>Software Engineer<h5>
        </div>
    </div>
    <div id="resume" class="text dropshadow row">
        <section id="tidbits" class="col hide-on-small-only m3" style="position: relative;">
            <h3>location</h3>
            <p>Seattle, WA</p>

            <h3>languages</h3>
            <ul>
                <li>Java</li>
                <li>PHP & HTML</li>
                <li>JavaScript</li>
                <li>Python</li>
                <li>SQL</li>
                <li>LaTeX</li>
            </ul>

            <h3>projects</h3>
            <ul>
                <li>
                    <a href="https://github.com/rfrowe/ryanrowe.name">Portfolio</a><br />
                    <span class="indent">Materialize, PHP, JS, AWS</span>
                </li>
                <li>
                    <a href="https://github.com/rfrowe/quadcopter">Quadcopter</a><br />
                    <span class="indent">C, Arduino</span>
                </li>
                <li>
                    <a href="https://github.com/rfrowe/rynet">Network Monitor Site</a><br />
                    <span class="indent">PHP, Bash, CSS</span>
                </li>
                <li>
                    <a href="https://github.com/rfrowe/tweetomatic">Tweetomatic</a><br />
                    <span class="indent">Java, Stanford NLP</span>
                </li>
            </ul>

            <h3>awards</h3>
            <ul>
                <li>
                    Annual Dean’s List<br />
                    <span class="indent">2015–2016</span>
                </li>
                <li>
                    AP Scholar with Distinction<br />
                    <span class="indent">2015</span>
                </li>
                <li>
                    AP Scholar<br />
                    <span class="indent">2014</span>
                </li>
            </ul>

            <h3>traits</h3>
            <ul>
                <li>Strong work ethic</li>
                <li>Auto-didactic</li>
                <li>Puzzle solver</li>
                <li>Blue hair</li>
            </ul>
        </section>
        <section id="main-event" class="col s12 m9">
            <h3><span class="summary">sum</span>mary</h3>
            <div class="row">
                <p class="col s12">
                    Full stack developer with experience developing in Java (Jersey, Tomcat, JUnit), JavaScript (jQuery), and
                    PHP in continuous deployment environments including Amazon Elastic Beanstalk, and Docker. Searching to
                    learn new strategies and frameworks and to be inspired.
                </p>
            </div>

            <h3><span class="education">edu</span>cation</h3>
            <div class="row edu">
                <div class="col l2 m2 s3">2015 &mdash;</div>
                <span class="aside">GPA of 3.94, Bachelor’s in Computer Science</span>
                <h4 class="col s10">University of Washington</h4>

                <div class="col m12 l10 push-l2">
                    <p>Second year student in the computer science department and honors college</p>
                    <ul>
                        <li>Expected graduation: June 2019</li>
                        <li>Data Structures &amp; Parallelism</li>
                        <li>Software Design and Implementation</li>
                        <li>Hardware Software Interface</li>
                        <li>Linear Matrix Algebra; Calculus with Analytic Geometry</li>
                    </ul>
                </div>
            </div>

            <div class="row edu">
                <div class="col l2 m2 s3">2011 &mdash; 2015</div>
                <span class="aside">Summa Cum Laude</span>
                <h4 class="col s10">Westlake High School</h4>

                <div class="col m12 l10 push-l2">
                    <p>Completed seven Advanced Placement courses</p>

                    <ul>
                        <li>Self-taught AP Computer Science and achieved 5/5 exam score</li>
                        <li>Co-founded school’s LGBT Alliance</li>
                    </ul>
                </div>
            </div>

            <h3><span class="experience">exp</span>erience</h3>
            <div class="row exp">
                <div class="col l2 m2 s3">2016 &mdash;</div>
                <span class="aside">Developer</span>
                <h4 class="col s10">Practice-It: University of Washington CSE Department</h4>

                <div class="col m12 l10 push-l2">
                    <p>
                        Worked as part of a four-member team working on Practice-It, a website run by the Computer
                        Science Department that is used by college and high school students globally to practice and
                        learn programming, which receives over half a million pageviews monthly.
                    </p>
                    <ul>
                        <li>Gained experience working on enterprise level software</li>
                        <li>Collaborated with other team members using version control software</li>
                        <li>Implemented new restful backend API using Java/Jersery and frontend UI</li>
                        <li>Deployed software using git, Docker, and Jenkins continuous integration</li>
                        <li>Optimized app to be deployed with Amazon Elastic Beanstalk leveraging Amazon Relational Data
                            Service (RDS)/MySQL as data tier</li>
                        <li>Updated app from SHA1 to PBKDF2 with HMAC SHA512 password hashing to meet new security standards</li>
                    </ul>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">2012</div>
                <span class="aside">Participant</span>
                <h4 class="col s10">Ohio Supercomputing Center Summer Institute</h4>

                <div class="col m12 l10 push-l2">
                    <p>
                        Was one of 16 students selected from Ohio to participate in summer program at Ohio State
                        University. Lead team tasked with using MATLAB to perform data analysis on NASA satellite
                        images to search for astronomical objects.
                    </p>
                    <ul>
                        <li>New leadership experience, mediated arguments, and managed communication</li>
                        <li>Analyzed thousands of NASA LASCO C2 satellite photos to track comet vectors near Sun’s corona</li>
                    </ul>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">2011 &mdash; 2014</div>
                <span class="aside">Volunteer Webmaster</span>
                <h4 class="col s10">Unitarian Universalist Ohio-Meadville District</h4>

                <div class="col m12 l10 push-l2">
                    <p>
                        Designed and maintained a website for tri-state area church youth group. Utilized Adobe
                        Dreamweaver to manage projects and publish code written in PHP using a MySQL data tier.
                    </p>
                </div>
            </div>
        </section>
    </div> <!-- end #resume -->

    <div id="download-grey-area" class="grey">
        <div class="divider"></div>
        <div class="container center" id="download-bar">
            <a href="/files/Resume.pdf" download="Ryan Rowe's Resume" class="center card-panel hoverable waves-effect">
                Download PDF <i class="material-icons">file_download</i>
            </a>
        </div>
    </div>
</main>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</body>
</html>

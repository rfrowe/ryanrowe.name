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
    <div id="resume" class="text dropshadow">
        <section id="contact-details">
            <h1>Ryan</h1>
            <h2>Rowe</h2>
            <p>Location<br>
                <span>Seattle, WA</span></p>
            <p>Website<br>
                <span><a href="/">ryanrowe.name</a></span></p>
            <p>Contact<br>
            <span>
            <a href="mailto:rfrowe@cs.uw.edu">rfrowe@cs.uw.edu</a><br>
            <a href="mailto:ry@nrowe.name">ry@nrowe.name</a></span></p>
        </section>
        <div id="gradient"></div>
        <section id="info">
            <h2>Summary</h2>
            <p>Full stack developer with experience developing in Java (Jersey, Tomcat, JUnit), JavaScript
               (jQuery), and PHP in continuous deployment environments including Amazon Elastic Beanstalk,
               and Docker. Searching to learn new strategies and frameworks and to be inspired.</p><br>

            <h2>Education</h2>
            <h4>University of Washington</h4>
            <h5>Bachelor's in Computer Science — 2019 (Expected)</h5>
            <p>Second year student in the computer science department and honors college</p>
            <ul>
                <li>Expected graduation: June 2019</li>
                <li>Intro to Programming (Java Data Structures and Algorithms)</li>
                <li>Calculus with Analytical Geometry</li>
                <li>Linear Matrix Algebra</li>
                <li>Hardware Software Interface</li>
            </ul>
            <br>

            <h4>Westlake High School</h4>
            <h5>Honors Diploma, Summa Cum Laude — 2011-2015</h5>
            <p>Completed seven Advanced Placement courses</p>
            <ul>
                <li>Self-taught AP Computer Science and achieved 5/5 exam score</li>
                <li>Co-founded school’s LGBT Alliance</li>
            </ul>

            <h2>Experience</h2>

            <h4>Developer, Practice-It: University of Washington CSE Department</h4>
            <h5>Seattle, Washington — 2016-</h5>
            <p>Worked as part of a four-member team to improve Practice-It, a website run by
            the Computer Science Department that is used by hundreds of thousands of
            people globally to practice and learn programming.</p>
            <ul>
                <li>Gained experience working on enterprise level software</li>
                <li>Collaborated with other team members using version control software</li>
                <li>Implemented new restful backend API using Java/Jersery and new frontend UI</li>
                <li>Deployed software using git, Docker, and Jenkins continuous integration</li>
                <li>Optimized app to be deployed with Amazon Elastic Beanstalk leveraging Amazon
                    Relational Data Service (RDS)/MySQL as data tier</li>
                <li>Updated app from SHA1 to PBKDF2 with HMAC SHA512 password hashing to meet new
                    security standards</li>
            </ul>
            <br>

            <h4>Participant, Ohio Supercomputing Center Summer Institute</h4>
            <h5>Columbus, Ohio — 2012</h5>
            <p>Was one of 16 students selected from Ohio to participate in summer program
            at Ohio State University. Lead team tasked with using MATLAB to perform data
            analysis on NASA satellite images to search for astronomical objects.</p>
            <ul>
                <li>New leadership experience, mediated arguments, and managed communication</li>
                <li>Analyzed thousands of NASA LASCO C2 satellite photos to track comet
                    vectors near Sun’s corona</li>
            </ul>
            <br>


            <h4>Webmaster, Unitarian Universalist Ohio-Meadville District</h4>
            <h5>Ohio — 2011–2014</h5>
            <p>Designed and maintained a website for tri-state area church youth group. Utilized
            Adobe Dreamweaver to manage projects and publish code written in PHP
            using a MySQL data tier.</p>
            <br>

            <h2>Awards</h2>
            <h4>AP Scholar (2014) and AP Scholar with Distinction (2015)</h4>
            <h5>Received score of 5/5 on all seven Advanced Placement exams taken</h5>

            <h4>2015-16 Annual Dean's List</h4>

            <h2 id="skills">Traits</h2>
            <ul>
                <li>Strong work ethic</li>
                <li>Auto-didactic</li>
                <li>Puzzle solver</li>
                <li>Blue hair</li>
            </ul>
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

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
            <span><a href="tel:4405704611">(440) 570-4611</a><br>
            <br>
            <a href="mailto:rfrowe@cs.uw.edu">rfrowe@cs.uw.edu</a><br>
            <a href="mailto:rfrowe@uw.edu">ryanf.rowe@gmail.com</a></span></p>
        </section>
        <div id="gradient"></div>
        <section id="info">
            <h2>Summary</h2>
            <p>Computer programmer currently attending the University of Washington. Programming for over 7
                years despite no formal education prior to 10th grade. Created several iPhone apps, coded and
                managed website for 3 years, and received a &lsquo;5&rsquo; on AP Computer Science exam by
                self-study guided by determination and impulse to learn.</p><br>

            <h2>Education</h2>
            <h4>University of Washington</h4>
            <h5>Bachelor of Science in Computer Science — 2019</h5>
            <p>GPA of 3.94. Relevant courses:</p>
            <ul>
                <li>Introduction to Java Programming I &amp; II</li>
                <li>Calculus with Analytical Geometry</li>
            </ul>
            <br>

            <h4>Westlake High School Class of 2015</h4>
            <h5>Honors Diploma — 2011-2015</h5>
            <p>Graduated Suma Cum Laude and maintained GPA of 4.805/5.333 and class rank of 17/308. During the
                course of education, completed seven Advanced Placement college-level courses, was a member of
                the marching band for all four years, and co-founded the school’s LGBT Alliance.</p>
            <ul>
                <li>Self-studied for AP Computer Science exam and achieved 5/5 score</li>
                <li>Member of National Spanish Honors Society</li>
            </ul>
            <br>

            <h2>Experience</h2>
            <h4>Webmaster, Unitarian Universalist Ohio-Meadville District</h4>
            <h5>Westlake, Ohio — 2011-2014</h5>
            <p>As webmaster, was charged with maintaining website to provide information to an estimated 300
                people in OH, PA, and WV for church youth group. During course of work utilized Adobe
                Dreamweaver to manage project and publish code. Archived version visible at <a
                    href="http://ryanrowe.name/work/omdyac/">http://ryanrowe.name/work/omdyac/</a>.</p>
            <ul>
                <li>Completely redesigned website frontend and backend, requiring over 600 hours of work</li>
                <li>Integrated PHP server-side scripting and MySQL to generate dynamic web content</li>
                <li>Created administrative user interface using up-to-date password security and login session
                    standards
                </li>
            </ul>
            <br>

            <h4>Student, Ohio Supercomputing Center Summer Institute</h4>
            <h5>Columbus, Ohio — 2012</h5>
            <p>Was one of 16 students selected from Ohio to participate in summer program at Ohio State
                University. Lead team tasked with using MATLAB to perform data analysis on NASA satellite images
                to search for astronomical objects.</p>
            <ul>
                <li>New leadership experience, mediated arguments, and managed communication</li>
                <li>Gained practical knowledge on data analysis standards</li>
                <li>Presented findings to over 100 people</li>
            </ul>
            <br>

            <h4>Developer, Pracice-It: University of Washington CSE Department</h4>
            <h5>Seattle, Washington — 2016</h5>
            <p>Worked as part of a four-member faculty team to improve Practice-It, a website run by the
                University of Washington that is used by hundreds of thousands of people globally to practice
                and learn programming. Improved frontend usability as well as enhanced backend and added new
                features to both.</p>
            <ul>
                <li>Gained experience working on enterprise level software</li>
                <li>Collaborated with other team members using version control software</li>
                <li>Developed and improved frontend and backend interfaces</li>
            </ul>
            <br>

            <h2>Awards</h2>
            <h4>AP Scholar (2014) and AP Scholar with Distinction (2015)</h4>
            <h5>Received score of 5/5 on all seven Advanced Placement exams taken</h5>

            <h4>UW Purple and Gold Scholarship</h4>
            <h5>Academic scholarship available to out-of-state students</h5>

            <h2 id="skills">Skills</h2>
            <ul>
                <li>Fluent in HTML, PHP, and Java with experience in iOS and Android development</li>
                <li>Strong work ethic and desire to resolve problems</li>
                <li>Adept at Unix and Macintosh systems</li>
                <li>Skilled with version control software such as Git</li>
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

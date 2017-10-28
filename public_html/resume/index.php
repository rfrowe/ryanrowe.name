<?php session_start() ?>
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
            <h5>Software Developer<h5>
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
                <li>Ruby</li>
                <li>Python</li>
                <li>C/C++</li>
                <li>SQL</li>
            </ul>

            <h3>projects</h3>
            <ul>
                <li>
                    Malakai<br />
                    <span class="indent">Rails|Jenkins|Angular</span>
                </li>
                <li>
                    <a href="https://github.com/rfrowe/tweetomatic">Tweetomatic</a><br />
                    <span class="indent">Java|Stanford NLP</span>
                </li>
                <li>
                    <a href="https://github.com/rfrowe/ryanrowe.name">Portfolio</a><br />
                    <span class="indent">Materialize|PHP|JS|AWS</span>
                </li>
                <li>
                    <a href="https://github.com/rfrowe/quadcopter">Quadcopter</a><br />
                    <span class="indent">C|Arduino</span>
                </li>
                <li>
                    <a href="https://github.com/rfrowe/rynet">Network Monitor Site</a><br />
                    <span class="indent">PHP|Bash|CSS</span>
                </li>
            </ul>

            <h3>awards</h3>
            <ul>
                <li>
                    Dean’s List<br />
                    <span class="indent">2015–2017</span>
                </li>
                <li>
                    AP Scholar<br />
                    <span class="indent">2014, 2015</span>
                </li>
            </ul>

            <h3>traits</h3>
            <ul>
                <li>Strong work ethic</li>
                <li>Auto-didactic</li>
                <li>Puzzle solver</li>
            </ul>
        </section>
        <section id="main-event" class="col s12 m9">
            <h3><span class="summary">sum</span>mary</h3>
            <div class="row">
                <p class="col s12">
                    Full stack developer with versatile experience in functional and OOP languages, monolithic and
                    microservice architectures, and waterfall and agile development processes. Searching for new
                    opportunities to apply my skills at the forefront of computing while learning along the way.
                </p>
            </div>

            <h3><span class="education">edu</span>cation</h3>
            <div class="row edu">
                <div class="col l2 m2 s3">2018 &mdash; 2019</div>
                <span class="aside">Masters’s in Computer Science</span>
                <h4 class="col s10">University of Washington</h4>

                <div class="col m12 l10 push-l2">
                    <p>Accepted to UW CSE's combined B.S./M.S. program for 2018</p>
                </div>
            </div>

            <div class="row edu">
                <div class="col l2 m2 s3">2015 &mdash; 2018</div>
                <span class="aside">GPA of 3.94, Bachelor’s in Computer Science</span>
                <h4 class="col s10">University of Washington</h4>

                <div class="col m12 l10 push-l2">
                    <p>Third year student in UW School of Computer Science and Engineering</p>
                    <ul>
                        <li>Expected graduation: June 2018</li>
                        <li>Data Structures &amp; Parallelism</li>
                        <li>Hardware Software Interface</li>
                        <li>Machine Learning; Artificial Intelligence</li>
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
                <div class="col l2 m2 s3">2017</div>
                <span class="aside">Software Developer Intern</span>
                <h4 class="col s10">Hulu, Ad Platform</h4>

                <div class="col m12 l10 push-l2">
                    <p>
                        Joined Ad Platform scrum team, responsible for ad serving and sales
                        infrastructure, to create ad tracing diagnostic web service to assist in
                        repeated ad reduction and improved customer experience.
                    </p>
                    <ul>
                        <li>Designed and implemented AngularJS single page application served through Rails 5</li>
                        <li>Architected backend Rails API for asynchronous request processing</li>
                        <li>Sourced data from Hive distributed database, queried via Presto</li>
                        <li>Participated in agile development process and utilized stakeholder-centered, iterative design process</li>
                    </ul>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">2016 &mdash; 2017</div>
                <span class="aside">Developer</span>
                <h4 class="col s10">Grade-It: University of Washington CSE Department</h4>

                <div class="col m12 l10 push-l2">
                    <p>
                        Overhauled legacy PHP application, used by UW and many other schools to grade CS
                        assignments, by assisting in migration to Zend framework and leading construction
                        of CI pipeline consisting of automated linting, unit testing, and deployment.</p>
                    <ul>
                        <li>Gained experience working on enterprise level software project</li>
                        <li>Designed and implemented continuous integration pipeline integrated with GitLab CI</li>
                    </ul>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">2016</div>
                <span class="aside">Developer</span>
                <h4 class="col s10">Practice-It: University of Washington CSE Department</h4>

                <div class="col m12 l10 push-l2">
                    <p>
                        Worked as part of a four-member faculty team to improve Practice-It, a
                        website run by the University of Washington that is used by hundreds of thousands of people
                        globally to practice and learn programming. Improved frontend usability as well as enhanced
                        backend and added new features to both.
                    </p>
                    <ul>
                        <li>Gained experience working on enterprise level software</li>
                        <li>Collaborated with other team members using version control software</li>
                        <li>Developed and improved frontend and backend interfaces</li>
                    </ul>
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

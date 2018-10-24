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

            <h3>Coursework</h3>
            <ul>
                <li>Grad Machine Learning</li>
                <li>Artificial Intelligence</li>
                <li><span class="indent">Top score on final exam</span></li>
                <li>Computer Vision</li>
                <li>Embedded Systems</li>
                <li>Operating Systems</li>
                <li>Systems Programming</li>
                <li>Data Structures</li>
            </ul>

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

            <h3>awards</h3>
            <ul>
                <li>
                    Research Funding<br />
                    <span class="indent">Personal Robotics Lab</span>
                    <span class="indent">Autumn 2018</span>
                </li>
                <li>
                    TA Funding<br />
                    <span class="indent">CSE 340</span>
                    <span class="indent">Spring 2019</span>
                </li>
                <li>
                    Purple and Gold<br />
                    <span class="indent">Merit scholarship</span>
                    <span class="indent">2015-2018</span>
                </li>
                <li>
                    Dean’s List<br />
                    <span class="indent">2015–2018</span>
                </li>
            </ul>
        </section>
        <section id="main-event" class="col s12 m9">
            <h3><span class="education">edu</span>cation</h3>
            <div class="row edu">
                <div class="col l2 m2 s3">2018 &mdash; 2019</div>
                <span class="aside">Masters’s in Computer Science</span>
                <h4 class="col s10">University of Washington</h4>
                <div class="col m12 l10 push-l2">
                    <p>Expected graduation June 2019</p>
                </div>
            </div>

            <div class="row edu">
                <div class="col l2 m2 s3">2015 &mdash; 2018</div>
                <span class="aside">Bachelor’s in Computer Science</span>
                <h4 class="col s10">University of Washington</h4>
                <div class="col m12 l10 push-l2">
                    <p>Magna Cum Laude, 3.93 GPA</p>
                </div>
            </div>

            <div class="row edu">
                <div class="col l2 m2 s3">2011 &mdash; 2015</div>
                <span class="aside">Summa Cum Laude</span>
                <h4 class="col s10">Westlake High School</h4>
            </div>

            <h3><span class="experience">exp</span>erience</h3>
            <div class="row exp">
                <div class="col l2 m2 s3">Jun-Sep &rsquo;18</div>
                <span class="aside">Software Development Engineer Intern</span>
                <h4 class="col s10">Xevo, AI/Machine Learning Team</h4>

                <div class="col m12 l10 push-l2">
                    <p>Focused on real-time neural based methods for object tracking in videos. Repro- duced Re3, a fast arbitrary object tracking model out of UW RSE/AI2 lab and com- bined with feature pyramid network object detector for automated tracking of cars and pedestrians in dashcam footage.</p>
                    <ul>
                        <li>Implemented video processing and sequencing data pipeline</li>
                        <li>Added support for and implemented first RNN model in Xevo ML framework</li>
                        <li>Worked in Caffe, Numpy, Tensorflow, and Tile</li>
                    </ul>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">Jan-&nbsp;&nbsp;&nbsp;&rsquo;'18</div>
                <span class="aside">Grad Research Assistant</span>
                <h4 class="col s10">UW CSE, Personal Robotics Lab</h4>

                <div class="col m12 l10 push-l2">
                    <p>
                        Under supervision of Prof. Siddhartha Srinivasa and Tapo Bhattacharjee.<br />
                        Trained classical learning methods to identify latent patterns in human organizational behavior for robotic desk organization. Co-authored paper to be submitted to AAMAS 2019 and developed desk organization model using vision, haptic, and NLP modalities to learn a person’s habits and to organize objects accordingly.
                    </p>
                    <ul>
                        <li>Automated robotic manipulation of objects using RGBD camera and tensor- flow MaskRCNN for object detection and identification</li>
                        <li>Compared performance of Random Forest and Markov Logic Network in learning personal organizational habits</li>
                    </ul>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">Jun-Sep &rsquo;17</div>
                <span class="aside">Software Developer Intern</span>
                <h4 class="col s10">Hulu, Ad Platform</h4>

                <div class="col m12 l10 push-l2">
                    <p>
                        Ad Platform team responsible for ad serving and sales infrastructure, with over $1 billion in revenue per year. Created Malakai, an ad tracking and diagnostic web service, to reduce repeated and mistargeted ads to improve customer experience.
                    </p>
                    <ul>
                        <li>Designed Angular SPA UI and architected Rails API for asynchronous request processing with Hive backend data source</li>
                    </ul>
                </div>
            </div>

            <h3><span class="projects">pro</span>jects</h3>
            <div class="row exp">
                <div class="col l2 m2 s3">Oct-Dec &rsquo;18</div>
                <h4 class="col s10">Automated Lip Reading</h4>
                <div class="col m12 l10 push-l2">
                    <p>
                        Automated video captioning with only video frames as input.
                    </p>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">Sep-Dec &rsquo;18</div>
                <h4 class="col s10"><a href="https://github.com/rfrowe/cse475_18au">Creatures: Audiovisual Flock of Embedded Systems</a></h4>
                <div class="col m12 l10 push-l2">
                    <p>
                        Led Embedded Capstone course final project for 50 students: flock of &ldquo;creatures&rdquo; with light and sound behaviors. Designed course spec for behavioral and communication protocol in 1 week. In 2 days implemented C++ state machine, radio communication, and probabilistic transitions for exhibiting emergent flock behavior.
                    </p>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">Jan-Mar &rsquo;18</div>
                <h4 class="col s10">UW Housing and Food Services Virtual Tours
                </h4>
                <div class="col m12 l10 push-l2">
                    <p>
                        Led group of 5 in Immersive Environments course to create prototype virtual tour for UW dorms in 3 weeks as a touring alternative for prospective out-of-state students. After prototyping, we designed a realistic VR tour at UW HFS’s request in Unity3D for use with Google Cardboard from floor plans for dorms currently under construction.
                    </p>
                </div>
            </div>

            <div class="row exp">
                <div class="col l2 m2 s3">Mar-Jun &rsquo;17</div>
                <h4 class="col s10"><a href="https://gitlab.cs.washington.edu/rfrowe/tweetomatic">Tweetomatic</a>
                </h4>
                <div class="col m12 l10 push-l2">
                    <p>
                        Used Stanford NLP, GATE Twitter POS tagger, and SentiWordNet to approximate via Twitter public opinion of Islam and Muslims in the United States for UW Bothell.
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

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="A record of my previous work experiences and projects that I have worked on such as web design and app development.">
    <title>Work</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>
</head>

<body>
<?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
<main>
    <div class="container">
        <h1 class="grey-text text-darken-3">Previous Work</h1>
        <ul class="collapsible popout" id="work" data-collapsible="accordion">
            <li>
                <div class="collapsible-header">
                    <div class="row">
                        <h5 class="col s9">Practice-It, University of Washington CSE</h5>
                        <a href="http://practiceit.cs.washington.edu" class="btn right col s2">
                            <span class="hide-on-med-and-down">Visit</span><i class="material-icons right">open_in_new</i>
                        </a>
                        <h6 class="col s12">Seattle, Washington — 2016 to Present</h6>
                    </div>
                </div>
                <div class="collapsible-body">
                    <p class="flow-text">Worked as part of a four-member faculty team to improve Practice-It, a
                        website run by the University of Washington that is used by hundreds of thousands of people
                        globally to practice and learn programming. Improved frontend usability as well as enhanced
                        backend and added new features to both.</p>
                    <ul class="flow-text">
                        <li>Gained experience working on enterprise level software</li>
                        <li>Collaborated with other team members using version control software</li>
                        <li>Developed and improved frontend and backend interfaces</li>
                    </ul>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <div class="row">
                        <h5 class="col s9">Ohio Supercomputing Center Summer Institute</h5>
                        <a href="/work/OSCSI/" class="btn right col s2">
                            <span class="hide-on-med-and-down">Watch</span><i class="material-icons right">open_in_new</i>
                        </a>
                        <h6 class="col s12">Columbus, Ohio — 2012</h6>
                    </div>
                </div>
                <div class="collapsible-body">
                    <p class="flow-text">
                        <img src="/images/oscsi.jpg" class="materialboxed" alt="Picture processing of Sun&apos;s corona" id="oscsi"
                             data-caption="The stages of identifying and mapping asteroids in NASA satellite photos
                             of the Sun&apos;s corona">
                        I was one of 16 students selected to attend SI, a two­week residential program that gives
                        gifted Ohio high school students entering their sophomore, junior or senior year project-based,
                        hands­on learning. Working in small peer teams, we used supercomputers for practical
                        applications such as solving complex science and engineering problems, conducting network
                        forensics to catch hackers, studying the spread of the bird flu and designing computer games. My
                        team performed image analysis of NASA satellite images using MATLAB in order to identify new
                        comets and presented out findings to over 100 people.
                    </p>
                </div>
            </li>
            <li>
                <div class="collapsible-header">
                    <div class="row">
                        <h5 class="col s9">Webmaster, Unitarian Universalist Ohio-Meadville District</h5>
                        <a href="/work/omdyac/" class="btn right col s2">
                            <span class="hide-on-med-and-down">Visit</span><i class="material-icons right">open_in_new</i>
                        </a>
                        <h6 class="col s12">Westlake, Ohio — 2011 to 2014</h6>
                    </div>
                </div>
                <div class="collapsible-body">
                    <p class="flow-text">
                        <img class="responsive-img materialboxed" src="/images/omdyac.jpg" alt="Screenshot of the website">
                        As webmaster, was charged with maintaining website to provide information to an estimated 300
                        people in OH, PA, and WV for church youth group. During course of work utilized Adobe
                        Dreamweaver to manage project and publish code.</p>
                    <ul class="flow-text">
                        <li>Completely redesigned website frontend and backend, requiring over 600 hours of work</li>
                        <li>Integrated PHP server-side scripting and MySQL to generate dynamic web content</li>
                        <li>Created administrative user interface using up-to-date password security and login session standards</li>
                    </ul>
                </div>
            </li>
            <!--
            <li>
                <div class="collapsible-header">
                    <div class="row">
                        <h5 class="col s9">Work Title</h5>
                        <a href="#" class="btn right blue col s2">
                            <span class="hide-on-med-and-down">Visit</span><i class="material-icons right">open_in_new</i>
                        </a>
                        <h6 class="col s12">Location — Years</h6>
                    </div>
                </div>
                <div class="collapsible-body grey lighten-5">
                    <p class="flow-text">
                        Description
                    <ul class="flow-text">
                        <li>List Items/li>
                    </ul>
                </div>
            </li>
            -->
        </ul>
    </div>
</main>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</body>
</html>
</html>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A record of my previous work experiences and projects that I have worked on such as web design and app development.">
    <title>Ryan Rowe &mdash; Work</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/imports.php") ?>
    <link href="/css/work.css" rel="stylesheet" type="text/css">

    <script>
	$(document).ready(function(e) {
		$(".visit").click(function(e) {
            e.stopPropagation();
        });
        $('.toggle').click(function(){
			if($(this).children(".dropdown").css("transform") != "none") {
				$(this).children(".dropdown").css({'-webkit-transform' : 'none',
						 '-moz-transform' : 'none',
						 '-ms-transform' : 'none',
						 'transform' : 'none'});
				$(this).removeClass("open");
			} else {
				$(this).children(".dropdown").css({'-webkit-transform' : 'rotate('+ 90 +'deg)',
						 '-moz-transform' : 'rotate('+ 90 +'deg)',
						 '-ms-transform' : 'rotate('+ 90 +'deg)',
						 'transform' : 'rotate('+ 90 + 'deg)'});
			    $(this).addClass("open");
			}
			$(this).siblings(".toggleable").slideToggle(300);
    	});
    });
	</script>
</head>

<body>
<div class="container">
  <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
  <article class="content offset">
  	<section class="main">
    	<h1>Previous Work</h1>
        <section class="dropshadow">
        	<!--<section class="work">
            	<div class="toggle trans">
                    <button class="dropdown trans"></button>
                    <h3>Cat Fax<a class="visit dropshadow" target="_blank" href="http://catfax.ml">Take a look</a></h3>
                    <h4>Seattle, WA — 2015</h4>
                </div>
                <div class="toggleable">
                CatFax is a cat fact delivery service. It delivers cat facts with automated SMS delivery. The application is written in Java and runs day and night to meet our subscriber&lsquo;s needs.
                </div>
            </section> -->
            <section class="work">
            	<div class="toggle trans">
                    <button class="dropdown trans"></button>
                    <h3>Practice-It, University of Washington CS Department <a href="http://practiceit.cs.washington.edu" class="visit dropshadow">Visit</a></h3>
                    <h4>Seattle, Washington — 2016</h4>
                </div>
                <div class="toggleable">
                    <p>Worked as part of a four-member faculty team to improve Practice-It, a website run by the University of Washington that is used by hundreds of thousands of people globally to practice and learn programming. Improved frontend usability as well as enhanced backend and added new features to both.</p>
                    <ul>
                        <li>Gained experience working on enterprise level software</li>
                        <li>Collaborated with other team members using version control software</li>
                        <li>Developed and improved frontend and backend interfaces</li>
                    </ul>
                </div>
            </section>
        	<section class="work">
            	<div class="toggle trans">
                    <button class="dropdown trans"></button>
                    <h3>Random Cube, CSE 390 HA <a class="visit dropshadow" href="/work/RandomCube/">Try it</a></h3>
                    <h4>Seattle, WA — 2015</h4>
                </div>
                <div class="toggleable"><img src="/images/cube.png" alt="A randomly generated cube" id="cube"><p>In this class, we were charged with creating our own algorithmic art using a programming langage called Processing. I created a program that generates random formulae using the sin, cos, average, and multiplication functions. These functions always return values in the interval [-1,1]. The functions are generated at a recursive level of complexity. A level 1 formula may be <span class="code">cos(&pi;x)</span> while a level 3 may be <span class="code">(sin(&pi;y) * sin(&pi;x) + (cos(&pi;z) + cos(&pi;y)) / 2.0) / 2.0</span>. The program then uses three formulae to calclate RGB values for different (x,y,z) coordinates on a cube. The results look amazing and have incredible sinusoidal patterns.</p><div style="clear:both;"></div></div>
            </section>
        	<section class="work">
            	<div class="toggle trans">
                    <button class="dropdown trans"></button>
                    <h3>Ohio Supercomputing Center Summer Institute <a class="visit dropshadow" href="/work/OSCSI/">Watch it</a></h3>
                    <h4>Columbus, OH — 2012</h4>
                </div>
                <div class="toggleable"><img src="/images/oscsi.jpg" alt="Picture processing of Sun's corona" id="oscsi"><p>I was one of 16 students selected to attend SI, a two ­week residential program that gives gifted Ohio high school students entering their sophomore, junior or senior year project-­based, hand-s­on learning. Working in small peer teams, we used supercomputers for practical applications such as solving complex science and engineering problems, conducting network forensics to catch hackers, studying the spread of the bird flu and designing computer games. My team performed image analysis of NASA satallite images using MATLAB in order to identify new comets and presented out findings to over 100 people.</p><div style="clear:both;"></div></div>
            </section>
            <section class="work">
            	<div class="toggle trans">
                    <button class="dropdown trans"></button>
                    <h3>Webmaster, Unitarian Universalist Ohio-Meadville District <a href="/work/omdyac/" class="visit dropshadow">Visit</a></h3>
                    <h4>Westlake, Ohio — 2011-2014</h4>
                </div>
                <div class="toggleable">
                    <img src="/images/omdyac.jpg" alt="Screenshot of the website">
                    <p>As webmaster, was charged with maintaining website to provide information to an estimated 300 people in OH, PA, and WV for church youth group. During course of work utilized Adobe Dreamweaver to manage project and publish code.</p>
                    <ul>
                        <li>Completely redesigned website frontend and backend, requiring over 600 hours of work</li>
                        <li>Integrated PHP server-side scripting and MySQL to generate dynamic web content</li>
                        <li>Created administrative user interface using up-to-date password security and login session standards</li>
                    </ul>
                </div>
            </section>
         </section>
     </section>
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

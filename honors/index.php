<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ryan Rowe &mdash; Honors Portfolio</title>

    <link href="/files/css/style.css" rel="stylesheet" type="text/css">
    <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/favicons.html") ?>
    <link href="/files/css/honors.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
    <script src="/files/scripts/analytics.js"></script>
    <script src="/files/scripts/processing.js"></script>
    <script src="/files/scripts/scrollbar.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
	$(document).ready(function(e) {
		stagger($(".toggle"));

		$(".visit").click(function(e) {
            e.stopPropagation();
        });
		$(".filter").click(function(e) {
            $(this).siblings().removeClass("selected");
			$(this).addClass("selected");

			if (this.id == 'all') {
				$('.course').fadeIn(300);
				courses = $('.toggle')
			} else {
				el = $('.' + this.id).fadeIn(300);
				$('.course').not(el).fadeOut(300);
				courses = $('.' + this.id + ' .toggle');
			}

			stagger(courses);
        });
    });

	function stagger(list) {
		for(i = 0; i < list.length; i++) {
			course = list[i];
			if(i % 2 == 0) {
				$(course).css("background-color","#448AFF");
				$(course).siblings(".toggleable").css("background-color","unset");
			} else {
				$(course).css("background-color","#21447D");
				$(course).siblings(".toggleable").css("background-color","#F5F5F5");
			}
		}
	}
	</script>
</head>

<body>
<div class="container">
    <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
    <article class="content offset">
  	<section class="main">
    	<h1>UW Honors Portfolio</h1>
        <section id="filters" class="dropshadow">
            	<div id="all" class="filter trans selected">
                <h3>All</h3>
                </div>
                <div id="freshman" class="filter trans ">
                <h3>Freshman</h3>
                </div>
                <div id="sophomore" class="filter trans ">
                <h3>Sophomore</h3>
                </div>
                <div id="junior" class="filter trans ">
                <h3>Junior</h3>
                </div>
                <div id="senior" class="filter trans ">
                <h3>Senior</h3>
                </div>
            </section>
        <section class="dropshadow">
            <section class="course freshman">
            	<div class="toggle trans">
                    <button class="dropdown trans" style="transform: rotate(90deg);"></button>
                    <h3>HONORS 205</h3>
                    <h4>Autumn 2015 Freshman</h4>
                </div>
                <div class="toggleable" >
                	<h3 class="title">Final Project &mdash; This University Life</h3>
                    <hr>
                	<div id="podcast"><iframe scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/237432892&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe></div>
                    <p>The culmination of Honors 205 was a final project. We were to use some form of media to showcase the various ways of knowing and cross-disciplinary strategies we covered in class. My group chose to create a fictitious podcast called This University Life, à la This American Life, telling the stories of experiences each group member has had with the content of the class.

It was supposed to be the equivilent of a 10-page paper. I&rsquo;d estimate we spent about 6 hours recording over the course of two weeks and around 18 hours editing the raw audio into the final product.

The music in the podcast is from http://bensound.com

All of the work that went into the creation of this one-of-a-kind episode of This Univeristy Life can be found here.</p>
					<h3 class="title">Children&rsquo;s Story &mdash; Turning Point</h3><h3 style="float: right;"><a class="visit dropshadow" href="./story/">Read it</a></h3>
                    <hr>
                    <p>Honors 205 was the only class this quarter not taught in the traditional lecture method and it was very enlightening to participate in the group discussion throughout the quarter. Hearing how other people understand and view a topic in ways that I never would have thought of allowed me to augment my own understandings and views. Writing my children&rsquo;s story, &ldquo;Turning Point&rdquo;, I learned more about the ethics of climate engineering than simply by reading about it. Explaining something complicated to someone who knows nothing of it forces one to think and fully comprehend a topic so that the distilled version is an accurate representation of the whole. This is the first time I&rsquo;ve had the opportunity to teach something that I&rsquo;ve learned, especially in the form of a story aimed at middle readers.</p>
                </div>
            </section>
            <section class="course freshman">
            	<div class="toggle trans">
                    <button class="dropdown" style="transform: rotate(90deg);"></button>
                    <h3>CSE 142/390</h3>
                    <h4>Autumn 2015 Freshman</h4>
                </div>
                <div class="toggleable" >
                <h3 class="title">Algorithmic Art</h3><h3 style="float: right;"><a class="visit dropshadow" href="/work/RandomCube/">Try it</a></h3>
                 <hr>
                <img src="/files/images/cube.png" id="cube" alt="A randomly generated cube"><p>In this class, we were charged with creating our own algorithmic art using a programming langage called Processing. I created a program that generates random formulae using the sin, cos, average, and multiplication functions. These functions always return values in the interval [-1,1]. The functions are generated at a recursive level of complexity. A level 1 formula may be <span class="code">cos(&pi;x)</span> while a level 3 may be <span class="code">(sin(&pi;y) * sin(&pi;x) + (cos(&pi;z) + cos(&pi;y)) / 2.0) / 2.0</span>. The program then uses three formulae to calclate RGB values for different (x,y,z) coordinates on a cube. The results look amazing and have incredible sinusoidal patterns.</p></div>
            </section>
            <section class="course freshman">
            	<div class="toggle trans">
                    <button class="dropdown trans" style="transform: rotate(90deg);"></button>
                    <h3>HONORS 100</h3>
                    <h4>Autumn 2015 Freshman</h4>
                </div>
                <div class="toggleable" >
                	<h3 class="title">Who am I?</h3><h3 style="float: right;"><a class="visit dropshadow" href="./reflection/">Read it</a></h3>
                    <hr>
                    <p>As part of this introductory course to the University of Washington, we had to reflect on who we are, what we wanted to do, and how out paths led to UW.</p>
					<h3 class="title">Crisis of Compassion</h3><h3 style="float: right;"><a class="visit dropshadow" href="./crisis/">Read it</a></h3>
                    <hr>
                    <p>&ldquo;In &lsquo;Making Hope &amp; History Rhyme,&rsquo; Farmer asks the graduating class: &lsquo;Imagine you are coming back ... for your twentieth year reunion. What would the world look like if hope and history have started to rhyme?&lsquo; Throughout the Farmer readings, he speaks to the value of partnerships, imagination, compassion, innovation, and thinking &lsquo;fractally.&rsquo;  Think of a global challenge not addressed in this chapter, and, applying these values, critically reflect on how this challenge might be solved in a world where &lsquo;hope and history rhyme.&rsquo; What efforts are necessary to make this imagined future a reality? Share your thoughts in a 1-page, single-spaced response.&rdquo;</p>
                </div>
            </section>
         </section>
     </section>
  </article> <!-- end .content -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</div> <!-- end .container -->
</body>
</html>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ryan Rowe &mdash; Honors Portfolio</title>

    <link href="/css/style.css" rel="stylesheet" type="text/css">
    <?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/favicons.html") ?>
    <link href="/css/honors.css" rel="stylesheet" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/analytics.js"></script>
    <script src="/js/processing.js"></script>
    <script src="/js/scrollbar.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        <script>
            var postId = 4;
            var loading = false;
            var load = true;

            $(window).scroll(function () {
                if (load = true) {
                    checkEndlessScroll("endless-scroll");
                }
            });

            function checkEndlessScroll(el) {
                if (isInView(document.getElementById(el))) {
                    //$("#all").click();
                    if(!loading) {
                        loading = true;
                        getPosts();
                    }
                }
            }

            function getPosts() {
                $.ajax({
                    type: "POST",
                    url: "./load.php",
                    data: {id: postId},
                    // serializes the form's elements.
                    dataType: "html",
                    success: function (data) {
                        $("#courses").append(data);
                        stagger($(".toggle"));
                        postId += 3;
                        loading = false;
                    },
                    error: function (jqXHR) {
                        load = false;
                        $("#courses").append(jqXHR.responseText);
                    }
                });
            }

            function isInView(el) {
                var elemTop = el.getBoundingClientRect().top;
                var elemBottom = el.getBoundingClientRect().bottom;

                var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
                return isVisible;
            }

            $(document).ready(function (e) {
                stagger($(".toggle"));

                $(".visit").click(function (e) {
                    e.stopPropagation();
                });
                $(".filter").click(function (e) {
                    $(this).siblings().removeClass("selected");
                    $(this).addClass("selected");

                    if (this.id == 'all') {
                        $('.course').fadeIn(300);
                        courses = $('.toggle')
                    } else {
                        el = $('.' + this.id).fadeIn(300);
                        if(el.length == 0 && load == true) {
                            if(!loading) {
                                loading = true;
                                getPosts();
                            }
                        }
                        $('.course').not(el).fadeOut(300);
                        courses = $('.' + this.id + ' .toggle');
                    }

                    stagger(courses);
                });
            });

            function stagger(list) {
                for (i = 0; i < list.length; i++) {
                    course = list[i];
                    if (i % 2 == 0) {
                        $(course).css("background-color", "#448AFF");
                        $(course).siblings(".toggleable").css("background-color", "unset");
                    } else {
                        $(course).css("background-color", "#21447D");
                        $(course).siblings(".toggleable").css("background-color", "#F5F5F5");
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
                    <section class="dropshadow" id="courses">
                        <?php include("./load.php") ?>
                    </section>
                    <div id="endless-scroll"></div>
                </section>
            </article>
            <!-- end .content -->
    </div>
    <!-- end .container -->
</body>

</html>

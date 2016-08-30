<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Honors Portfolio</title>

    <?php include($_SERVER['DOCUMENT_ROOT'] . "/files/common.php") ?>
    <link href="/css/honors.css" rel="stylesheet" type="text/css">

    <script>
        /*var postId = 4;
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
        }*/
    </script>
</head>

<body>
<?php readfile($_SERVER['DOCUMENT_ROOT'] . "/files/header.html") ?>
<main>
    <div class="container">
        <div class="card">
            <div class="tabs">
                <div class="tab"><a href="">All</a></div>
                <div class="tab"><a href="#freshman">Freshman</a></div>
                <div class="tab"><a href="#sophomore">Sophomore</a></div>
                <div class="tab"><a href="#junior">Junior</a></div>
                <div class="tab"><a href="#senior">Senior</a></div>
                <div class="indicator"></div>
            </div>
        </div>
    </div>
</main>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/files/footer.php") ?>
</body>
</html>

<!--
    <div class="container">
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
            <!-- end .content
    </div>
    <!-- end .container
</body>

</html>

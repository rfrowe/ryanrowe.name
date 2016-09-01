/**
 * Created by Ryan on 8/31/16.
 */
$(function() {
    // For footer social links scrollfire, #social-links
    var options=[{
        selector: '#social-links',
        offset: 0,
        callback: function(el) {
            Materialize.showStaggeredList($(el));
        }
    }];
    Materialize.scrollFire(options);


    // Fire scrollfire if already on page (i.e. if the page is too short)
    if (isScrolledIntoView("#social-links")) {
        Materialize.showStaggeredList($("#social-links"));
    }

    // Fix for nav drag area height when collapsible opens
    $("#university").click(function() {
        setTimeout(function() {
            $(".drag-target").css({top: $("header").height() + $("#slidey-nav").height() +
            "px"});
        }, 350); // from collapsible.js
    });

    // Initiaize topNav
    $(".button-collapse").topNav();

    // Contact us modal form
    $('.contact-us').leanModal({
        complete: clearContactForm,
        ready: function() {
            $("body").toggleClass("no-scroll");
        }
    });

    // Hide nav when you click contact us
    $("#contact-us").click(function() {
        $('.button-collapse').sideNav('hide');
    });

    // Initialize ajax form
    $("#contact-form").ajaxForm({
        beforeSubmit: function() {
            $("#contact").closeModal();
        },
        success: function() {
            clearContactForm();
            Materialize.toast("Message sent!", 4000);
        },
        error: function() {
            $("#contact-error").openModal();
        }
    });

    // Error modal
    $("#nope").click(clearContactForm);
    $("#sure").click(function() {
        $("#contact").openModal();
    });

    function clearContactForm() {
        $("#contact-form").resetForm();
        Materialize.updateTextFields();
        $("#contact-form").find("textarea").trigger('autoresize');
        $("body").toggleClass("no-scroll");
    }

    function isScrolledIntoView(e) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(e).offset().top;
        var elemBottom = elemTop + $(e).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
});

var target = window;
var last_y = 0;
target.addEventListener('touchmove', function(e){
    var scrolly = target.pageYOffset || target.scrollTop || 0;
    var direction = e.changedTouches[0].pageY > last_y ? 1 : -1;
    if(direction>0 && scrolly===0){
        e.preventDefault();
    }
    last_y = e.changedTouches[0].pageY;
});
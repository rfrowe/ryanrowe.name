//assign function to run when scrolling
$(window).scroll(scrollDiv);

//to run when loaded
$(window).load(function(e) {
	//get top position of #scroll
    offset = $("#scroll").position().top;
	scroll_1 = $(window).scrollTop();

	height = $("#scroll").height();
});

var offset, scroll_1, height;

$(window).resize( function() {
	height = $("#scroll").height();
	$("#fixed").height(height);
});

function scrollDiv() {
	var scroll_2 = scroll_1;
	scroll_1 = $(window).scrollTop();

	var new_height;
	if(scroll_1 < scroll_2) {
		if($("#scroll").position().top + 2*(scroll_2 - scroll_1) < 0) {
			new_height = $("#scroll").position().top + 2*(scroll_2 - scroll_1);
		} else {
			new_height = 0;
		}
		$("#scroll").css("top", new_height + "px");
		//$("#circle").css("top", -new_height + "px");

	} else if(scroll_1 > scroll_2 && $("#scroll").position().top > -height) {
		if($("#scroll").position().top + (scroll_2 - scroll_1) > -height)  {
			new_height = $("#scroll").position().top + (scroll_2 - scroll_1);
		} else {
			new_height = -height;
		}
		$("#scroll").css("top", new_height+"px");

	}
}

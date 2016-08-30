(function ($) {

  var methods = {
    init : function(options) {
      var defaults = {
        closeOnClick: false
      };
      options = $.extend(defaults, options);

      $(this).each(function(){
        var $this = $(this);
        var menu_id = $("#"+ $this.attr('data-activates'));

        // Add Touch Area
        var dragTarget = $('<div class="drag-target"></div>');
        $('body').append(dragTarget);

        menu_id.css('transform', 'translateX(0) translateY(-105%)');
        dragTarget.css({'left': 0, 'right': 0, 'width': "75%", 'height': 10, 'z-index': 999}); // Add Touch Area

        // If fixed sidenav, bring menu out
        if (menu_id.hasClass('fixed')) {
            if (window.innerWidth > 992) {
              menu_id.css('transform', 'translateX(0) translateY(0)');
            }
          }

        // Window resize to reset on large screens fixed
        if (menu_id.hasClass('fixed')) {
          $(window).resize( function() {
            if (window.innerWidth > 992) {
              // Close menu if window is resized bigger than 992 and user has fixed sidenav
              if ($('#sidenav-overlay').length !== 0 && menuOut) {
                removeMenu(true);
              }
              else {
                // menu_id.removeAttr('style');
                menu_id.css('transform', 'translateX(0) translateY(0)');
                // menu_id.css('width', options.menuWidth);
              }
            }
          else if (menuOut === false){
                menu_id.css('transform', 'translateX(0) translateY(-105%)');
            }

          });
        }

        // if closeOnClick, then add close event for all a tags in side sideNav
        if (options.closeOnClick === true) {
          menu_id.on("click.itemclick", "a:not(.collapsible-header)", function(){
            removeMenu();
          });
        }

        function removeMenu(restoreNav) {
          panning = false;
          menuOut = false;

          $('#sidenav-overlay').velocity({opacity: 0}, {duration: 200,
              queue: false, easing: 'easeOutQuad',
            complete: function() {
              $(this).remove();
            } });

          // Reset phantom div
          dragTarget.css({height: '10', width: '75%', top: 0});
          menu_id.velocity(
            {'translateX': '0', 'translateY': '-105%'},
            { duration: 200,
              queue: false,
              easing: 'easeOutCubic',
              complete: function() {
                // Reenable scrolling
                $("body").removeClass("no-scroll");
                $('body').css({
                  overflow: '',
                  width: ''
                });
                if (restoreNav === true) {
                  // Restore Fixed sidenav
                  menu_id.removeAttr('style');
                  menu_id.css('width', options.menuWidth);
                }
              }

          });
        }



        // Touch Event
        var panning = false;
        var menuOut = false;

        dragTarget.on('click', function(){
          if (menuOut) {
            removeMenu();
          }
        });

        dragTarget.hammer({
          prevent_default: false
        }).bind('pan', function(e) {

          if (e.gesture.pointerType == "touch") {
            var y = e.gesture.center.y;
            var top = $("header").height();
            var height = menu_id.height() + top;
            // Disable Scrolling
            var $body = $('body');
            $body.addClass("no-scroll");
            var oldWidth = $body.innerWidth();
            $body.css('overflow', 'hidden');
            $body.width(oldWidth);

            // If overlay does not exist, create one and if it is clicked, close menu
            if ($('#sidenav-overlay').length === 0) {
              var overlay = $('<div id="sidenav-overlay"></div>');
              overlay.css('opacity', 0).click( function(){
                removeMenu();
              });
              $('body').append(overlay);
            }

            // Keep within boundaries
            if (y > height){ y = height}
            else if (y < 0) { y = 0; }

            // Left Direction
            if (y < (height / 2)) { menuOut = false; }
            // Right Direction
            else if (y >= (height / 2)) { menuOut = true; }
            menu_id.css('transform', 'translateX(0) translateY(' + (y - height) + 'px)');


            // Percentage overlay
            var overlayPerc;
            overlayPerc = y / $("#slidey-nav").height();
            $('#sidenav-overlay').velocity({opacity: overlayPerc }, {duration: 10, queue: false, easing: 'easeOutQuad'});
          }

        }).bind('panend', function(e) {

          if (e.gesture.pointerType == "touch") {
            var top = $("header").height();
            var height = menu_id.height() + top;

            var velocityY = e.gesture.velocityY;
            var y = e.gesture.center.y;
            var topPos = y - height;

            if (topPos > 0 ) {
              topPos = 0;
            }
            panning = false;

            // If velocityX <= 0.3 then the user is flinging the menu closed so ignore menuOut
            if ((menuOut && velocityY <= 0.3) || velocityY < -0.5) {
              // Return menu to open
              if (topPos !== 0) {
                menu_id.velocity({'translateX': '0', 'translateY': [0, topPos]}, {duration: 300, queue: false, easing: 'easeOutQuad'});
              }

              $('#sidenav-overlay').velocity({opacity: 1 }, {duration: 50, queue: false, easing: 'easeOutQuad'});
              dragTarget.css({height: '100%', width: '100%', top: $("header").height() + menu_id.height() + "px"});
              menuOut = true;
            }
            else if (!menuOut || velocityY > 0.3) {
              // Slide menu closed
              menu_id.velocity({'translateX': '0', 'translateY': [-1 * height - 10, topPos]},
                  {
                    duration: 200, queue: false, easing: 'easeOutQuad', complete: function () {
                    menuOut = false;
                    // Enable Scrolling
                    $('body').removeClass("no-scroll");
                    $('body').css({
                      overflow: '',
                      width: ''
                    });
                    }
                  });
              $('#sidenav-overlay').velocity({opacity: 0 }, {duration: 200, queue: false, easing: 'easeOutQuad',
                complete: function () {
                  $(this).remove();
                }});
              dragTarget.css({height: '10px', 'width': '75%', 'z-index': 999, 'top': ''});
            }
          }
        });

          $this.click(function() {
            if (menuOut === true) {
              menuOut = false;
              panning = false;
              removeMenu();
            }
            else {

              // Disable Scrolling
              var $body = $('body');
              $body.addClass("no-scroll");
              var oldWidth = $body.innerWidth();
              $body.css('overflow', 'hidden');
              $body.width(oldWidth);

              // Push current drag target on top of DOM tree
              $('body').append(dragTarget);

              //menu_id.velocity({'translateX': [0, -1 * options.menuWidth]}, {duration: 300, queue: false, easing:
              // 'easeOutQuad'});
              menu_id.velocity(
                  {'translateX': '0', 'translateY': '0'},
                  { duration: 200,
                    queue: false,
                    easing: 'easeOutCubic',
                    complete: function() {
                      dragTarget.css({height: '100%', width: '100%', top: $("header").height() + menu_id.height() + "px"});
                      if (typeof restoreNav !== 'undefined' && restoreNav === true) {
                        // Restore Fixed sidenav
                        menu_id.removeAttr('style');
                        menu_id.css('width', options.menuWidth);
                      }
                    }

                  });

              var overlay = $('<div id="sidenav-overlay"></div>');
              overlay.css('opacity', 0)
              .click(function(){
                menuOut = false;
                panning = false;
                removeMenu();
                overlay.velocity({opacity: 0}, {duration: 300, queue: false, easing: 'easeOutQuad',
                  complete: function() {
                    $(this).remove();
                  } });

              });
              $('body').append(overlay);
              overlay.velocity({opacity: 1}, {duration: 300, queue: false, easing: 'easeOutQuad',
                complete: function () {
                  menuOut = true;
                  panning = false;
                }
              });
            }

            return false;
          });
      });


    },
    show : function() {
      this.trigger('click');
    },
    hide : function() {
      $('#sidenav-overlay').trigger('click');
    }
  };


    $.fn.topNav = function(methodOrOptions) {
      if ( methods[methodOrOptions] ) {
        return methods[ methodOrOptions ].apply( this, Array.prototype.slice.call( arguments, 1 ));
      } else if ( typeof methodOrOptions === 'object' || ! methodOrOptions ) {
        // Default to "init"
        return methods.init.apply( this, arguments );
      } else {
        $.error( 'Method ' +  methodOrOptions + ' does not exist on jQuery.sideNav' );
      }
    }; // Plugin end
}( jQuery ));

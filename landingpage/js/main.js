(function ($) {
  "use strict";
  $("#mobile-menu-active").metisMenu();

  $("#mobile-menu-active .has-dropdown > a").on("click", function (e) {
    e.preventDefault();
  });

  $(".hamburger-menu > a").on("click", function (e) {
    e.preventDefault();
    $(".slide-bar").toggleClass("show");
    $("body").addClass("on-side");
    $(".body-overlay").addClass("active");
    $(this).addClass("active");
  });

  $(".close-mobile-menu > a").on("click", function (e) {
    e.preventDefault();
    $(".slide-bar").removeClass("show");
    $("body").removeClass("on-side");
    $(".body-overlay").removeClass("active");
    $(".hamburger-menu > a").removeClass("active");
  });

  $(".body-overlay").on("click", function () {
    $(this).removeClass("active");
    $(".slide-bar").removeClass("show");
    $("body").removeClass("on-side");
    $(".hamburger-menu > a").removeClass("active");
  });

  // sticky
  var wind = $(window);
  var sticky = $("#sticky-header");
  wind.on("scroll", function () {
    var scroll = wind.scrollTop();
    if (scroll < 100) {
      sticky.removeClass("sticky");
      $(".chng-logo").attr("src", IntuationData.root_url + '/wp-content/themes/landingpage/images/Qaptum_white-logo.png');
    } else {
      sticky.addClass("sticky");
      $(".chng-logo").attr("src", IntuationData.root_url + '/wp-content/themes/landingpage/images/Qaptum_logo.png');
    }
  });
})(jQuery);

window.onload = function () {
  lax.init();

  // Add a driver that we use to control our animations
  lax.addDriver("scrollY", function () {
    return window.scrollY;
  });

  // Add animation bindings to elements
  lax.addElements(
    ".fromleft",
    {
      scrollY: {
        translateX: [
          ["elInY", "elCenterY", "elOutY"],
          [-200, 0, -200],
        ],
      },
    }

    //  {
    //    onUpdate: function (driverValues, domElement) {
    //      const scrollY = driverValues.scrollY[0];
    //      if (scrollY > 830) {
    //        domElement.style.transform = "none";
    //      }
    //    },
    //  }
  );

  lax.addElements(".appear", {
    scrollY: {
      opacity: [
        [0, "elCenterY-200"],
        [0, 1],
      ],
    },
  });

  // Add animation bindings to elements
  lax.addElements(
    ".fromleftflip",
    {
      scrollY: {
        translateX: [
          ["elInY", "elCenterY"],
          [200, 0],
        ],
      },
    },

    {
      onUpdate: function (driverValues, domElement) {
        const scrollY = driverValues.scrollY[0];
        if (scrollY > 2700) {
          domElement.style.transform = "none";
        }
      },
    }
  );

  // Setup mouse move listener
  document.addEventListener(
    "mousemove",
    function (e) {
      lax.__cursorX = e.clientX;
      lax.__cursorY = e.clientY;
    },
    false
  );

  // Add lax driver for cursorX
  lax.addDriver("cursorX", function () {
    return lax.__cursorX || 0;
  });

  // Add lax driver for cursorY
  lax.addDriver("cursorY", function () {
    return lax.__cursorY || 0;
  });

  // Add lax driver for cursorXY
  lax.addDriver("cursorDistanceFromCenter", function () {
    var pageHeight = document.body.scrollHeight;
    var pageWidth = document.body.scrollWidth;

    var pageCenterX = pageWidth / 2;
    var pageCenterY = pageHeight / 2;

    var absDistanceFromCenterY =
      Math.abs((lax.__cursorY || 0) - pageCenterY) / pageCenterY;
    var absDistanceFromCenterX =
      Math.abs((lax.__cursorX || 0) - pageCenterX) / pageCenterX;

    return absDistanceFromCenterX + absDistanceFromCenterY;
  });

  lax.addElements(".text", {
    cursorX: {
      translateX: [
        [0, "screenWidth"],
        ["index * 10", "index * -10"],
      ],
    },
    cursorY: {
      translateY: [
        [0, "screenHeight"],
        ["index * 10", "index * -10"],
      ],
    },
    cursorDistanceFromCenter: {
      scale: [
        [0, 1],
        [1, "1 + (index * 0.05 )"],
      ],
    },
  });
};

$(function () {
  // this will get the full URL at the address bar
  var url = window.location.href;
  // passes on every "a" tag
  $("#mobile-menu a").each(function () {
    // checks if its the same on the address bar
    if (url == this.href) {
      $(this).closest("li").addClass("active");
    }
  });

  //sticky header table
  var wind = $(window);
  var stickytable = $("#sticky-header-table");
  wind.on("scroll", function () {
    var scroll = wind.scrollTop();
    console.log("see here" + scroll);
    if (scroll < 215) {
      stickytable.removeClass("float-active");
    } else {
      stickytable.addClass("float-active");
    }
  });

  //hide tr contents
  $('.profiling-hide').hide();
  $('.prof-hide1').show();
  $(".tableFixHead .profiling-show").click(function(){
      $('.prof-hide1').fadeToggle(100);
      $(".profiling-hide").fadeToggle(800);
      $('.profiling-show').toggleClass("changeicon");
      
  });
  
  $('.profiling-hide2').hide();
  $('.prof-hide2').show();
  $(".tableFixHead .profiling-show2").click(function(){
      $('.prof-hide2').fadeToggle(100);
      $(".profiling-hide2").fadeToggle(800);
      $('.profiling-show2').toggleClass("changeicon");
  });

  //contact form scheduling
  $('#inputDate').datepicker({
      dateFormat: 'yyy-dd-mm'
  });
  $('#inputTime').timepicker({
      timeFormat: 'h:mm p',
  });
  $("#help_options").change(function() {
    if(this.value==1){
        $(".shwtextarea").css("display", "none");
        $("#shwtime").css("display", "block");
    } 
    if(this.value==2){
      $(".shwtextarea").css("display", "none");
      $("#shwtime").css("display", "none");
    }
    if(this.value==3){
        $("#shwtime").css("display", "none");
        $(".shwtextarea").css("display", "block");
    }
    });
});

//   var $th = $('.tableFixHead').find('thead th');
// $('.tableFixHead').on('scroll', function() {
//   $th.css('transform', 'translateY('+ this.scrollTop +'px)');
// });

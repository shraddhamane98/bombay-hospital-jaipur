jQuery(document).ready(function($){
    var dragging = false,
        scrolling = false,
        resizing = false;
    //cache jQuery objects
    var imageComparisonContainers = $('.cd-image-container');
    //check if the .cd-image-container is in the viewport 
    //if yes, animate it
    checkPosition(imageComparisonContainers);
    $(window).on('scroll', function(){
        if( !scrolling) {
            scrolling =  true;
            ( !window.requestAnimationFrame )
                ? setTimeout(function(){checkPosition(imageComparisonContainers);}, 100)
                : requestAnimationFrame(function(){checkPosition(imageComparisonContainers);});
        }
    });
    
    //make the .cd-handle element draggable and modify .cd-resize-img width according to its position
    imageComparisonContainers.each(function(){
        var actual = $(this);
        drags(actual.find('.cd-handle'), actual.find('.cd-resize-img'), actual, actual.find('.cd-image-label[data-type="original"]'), actual.find('.cd-image-label[data-type="modified"]'));
    });

    //upadate images label visibility
    $(window).on('resize', function(){
        if( !resizing) {
            resizing =  true;
            ( !window.requestAnimationFrame )
                ? setTimeout(function(){checkLabel(imageComparisonContainers);}, 100)
                : requestAnimationFrame(function(){checkLabel(imageComparisonContainers);});
        }
    });

    function checkPosition(container) {
        container.each(function(){
            var actualContainer = $(this);
            if( $(window).scrollTop() + $(window).height()*0.5 > actualContainer.offset().top) {
                actualContainer.addClass('is-visible');
            }
        });

        scrolling = false;
    }

    function checkLabel(container) {
        container.each(function(){
            var actual = $(this);
            updateLabel(actual.find('.cd-image-label[data-type="modified"]'), actual.find('.cd-resize-img'), 'left');
            updateLabel(actual.find('.cd-image-label[data-type="original"]'), actual.find('.cd-resize-img'), 'right');
        });

        resizing = false;
    }

    //draggable funtionality - credits to http://css-tricks.com/snippets/jquery/draggable-without-jquery-ui/
    function drags(dragElement, resizeElement, container, labelContainer, labelResizeElement) {
        dragElement.on("mousedown vmousedown", function(e) {
            dragElement.addClass('draggable');
            resizeElement.addClass('resizable');

            var dragWidth = dragElement.outerWidth(),
                xPosition = dragElement.offset().left + dragWidth - e.pageX,
                containerOffset = container.offset().left,
                containerWidth = container.outerWidth(),
                minLeft = containerOffset + 10,
                maxLeft = containerOffset + containerWidth - dragWidth - 10;
            
            dragElement.parents().on("mousemove vmousemove", function(e) {
                if( !dragging) {
                    dragging =  true;
                    ( !window.requestAnimationFrame )
                        ? setTimeout(function(){animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement);}, 100)
                        : requestAnimationFrame(function(){animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement);});
                }
            }).on("mouseup vmouseup", function(e){
                dragElement.removeClass('draggable');
                resizeElement.removeClass('resizable');
            });
            e.preventDefault();
        }).on("mouseup vmouseup", function(e) {
            dragElement.removeClass('draggable');
            resizeElement.removeClass('resizable');
        });
    }

    function animateDraggedHandle(e, xPosition, dragWidth, minLeft, maxLeft, containerOffset, containerWidth, resizeElement, labelContainer, labelResizeElement) {
        var leftValue = e.pageX + xPosition - dragWidth;   
        //constrain the draggable element to move inside his container
        if(leftValue < minLeft ) {
            leftValue = minLeft;
        } else if ( leftValue > maxLeft) {
            leftValue = maxLeft;
        }

        var widthValue = (leftValue + dragWidth/2 - containerOffset)*100/containerWidth+'%';
        
        $('.draggable').css('left', widthValue).on("mouseup vmouseup", function() {
            $(this).removeClass('draggable');
            resizeElement.removeClass('resizable');
        });

        $('.resizable').css('width', widthValue); 

        updateLabel(labelResizeElement, resizeElement, 'left');
        updateLabel(labelContainer, resizeElement, 'right');
        dragging =  false;
    }

    function updateLabel(label, resizeElement, position) {
        if(position == 'left') {
            ( label.offset().left + label.outerWidth() < resizeElement.offset().left + resizeElement.outerWidth() ) ? label.removeClass('is-hidden') : label.addClass('is-hidden') ;
        } else {
            ( label.offset().left > resizeElement.offset().left + resizeElement.outerWidth() ) ? label.removeClass('is-hidden') : label.addClass('is-hidden') ;
        }
    }
});


// Initialize Swiper with loop enabled
var swiper = new Swiper(".mySwiper", {
  loop: true,
  spaceBetween: 30,
  effect: "fade",
  navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
  },
  pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
  on: {
      slideChangeTransitionEnd: function () {
          handleVideoPlayback();
      }
  }
});

// Load YouTube Iframe API
const tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
const firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

let youtubePlayers = [];

// YouTube API ready event to initialize YouTube players
function onYouTubeIframeAPIReady() {
  const youtubeVideos = document.querySelectorAll('.youtube-video');
  youtubeVideos.forEach((iframe, index) => {
      youtubePlayers[index] = new YT.Player(iframe, {
          events: {
              'onReady': handleVideoPlayback,
              'onStateChange': handleStateChange
          }
      });
  });
}

// Handle playback for only the active slide
function handleVideoPlayback() {
  youtubePlayers.forEach((player, index) => {
      if (index === swiper.realIndex) {
          player.playVideo(); // Play video if slide is active
      } else {
          player.pauseVideo(); // Pause video if slide is inactive
      }
  });
}

// Pause the video if it's played manually and the slide changes
function handleStateChange(event) {
  if (event.data === YT.PlayerState.PLAYING) {
      const currentIndex = youtubePlayers.indexOf(event.target);
      if (currentIndex !== swiper.realIndex) {
          event.target.pauseVideo();
      }
  }
}










/*==============---------- 03. Mobile Menu Active ----------======================*/
  $.fn.vsmobilemenu = function (options) {
    var opt = $.extend(
      {
        menuToggleBtn: ".vs-menu-toggle",
        bodyToggleClass: "vs-body-visible",
        subMenuClass: "vs-submenu",
        subMenuParent: "vs-item-has-children",
        subMenuParentToggle: "vs-active",
        meanExpandClass: "vs-mean-expand",
        appendElement: '<span class="vs-mean-expand"></span>',
        subMenuToggleClass: "vs-open",
        toggleSpeed: 400,
      },
      options
    );

    return this.each(function () {
      var menu = $(this); // Select menu

      // Menu Show & Hide
      function menuToggle() {
        menu.toggleClass(opt.bodyToggleClass);

        // collapse submenu on menu hide or show
        var subMenu = "." + opt.subMenuClass;
        $(subMenu).each(function () {
          if ($(this).hasClass(opt.subMenuToggleClass)) {
            $(this).removeClass(opt.subMenuToggleClass);
            $(this).css("display", "none");
            $(this).parent().removeClass(opt.subMenuParentToggle);
          }
        });
      }

      // Class Set Up for every submenu
      menu.find("li").each(function () {
        var submenu = $(this).find("ul");
        submenu.addClass(opt.subMenuClass);
        submenu.css("display", "none");
        submenu.parent().addClass(opt.subMenuParent);
        submenu.prev("a").append(opt.appendElement);
        submenu.next("a").append(opt.appendElement);
      });

      // Toggle Submenu
      function toggleDropDown($element) {
        if ($($element).next("ul").length > 0) {
          $($element).parent().toggleClass(opt.subMenuParentToggle);
          $($element).next("ul").slideToggle(opt.toggleSpeed);
          $($element).next("ul").toggleClass(opt.subMenuToggleClass);
        } else if ($($element).prev("ul").length > 0) {
          $($element).parent().toggleClass(opt.subMenuParentToggle);
          $($element).prev("ul").slideToggle(opt.toggleSpeed);
          $($element).prev("ul").toggleClass(opt.subMenuToggleClass);
        }
      }

      // Submenu toggle Button
      var expandToggler = "." + opt.meanExpandClass;
      $(expandToggler).each(function () {
        $(this).on("click", function (e) {
          e.preventDefault();
          toggleDropDown($(this).parent());
        });
      });

      // Menu Show & Hide On Toggle Btn click
      $(opt.menuToggleBtn).each(function () {
        $(this).on("click", function () {
          menuToggle();
        });
      });

      // Hide Menu On out side click
      menu.on("click", function (e) {
        e.stopPropagation();
        menuToggle();
      });

      // Stop Hide full menu on menu click
      menu.find("div").on("click", function (e) {
        e.stopPropagation();
      });
    });
  };

  $(".vs-menu-wrapper").vsmobilemenu();

  // Awards Swiper functionality
0 < jQuery(".awards-swiper").length &&
new Swiper(".awards-swiper", {
  loop: !0,
  slidesPerView: 4,
  autoplay: { delay: 3000 },
  breakpoints: {
    1200: { slidesPerView: 4 },
    991: { slidesPerView: 4 },
    767: { slidesPerView: 3 },
    575: { slidesPerView: 2.5 },
    320: { slidesPerView: 1.5 },
  },
  navigation: {
    nextEl: ".awards-swiper-next",
    prevEl: ".awards-swiper-prev",
  },
  pagination: {
    el: ".awards-pagination-swiper",
    type: "progressbar",
  },
});



// ==================================================================

// JavaScript to add sticky class on scroll
window.onscroll = function() {
  makeHeaderSticky();
};

function makeHeaderSticky() {
  const header = document.querySelector('.header-layout3');
  const sticky = header.offsetTop;

  if (window.pageYOffset > sticky) {
    header.classList.add('sticky-header');
  } else {
    header.classList.remove('sticky-header');
  }
}

// ================== Our Locations =======================
const locationDots = document.querySelectorAll('.location_dot');
let isMobile = 'ontouchstart' in window || navigator.maxTouchPoints > 0; // Detect mobile/touch devices
let infoShown = false; // Variable to track if info is shown for mobile
let currentlyOpenDot = null; // Variable to track which dot is currently open

// Function to show location info
function showLocationInfo(dot) {
  // Hide the info of the previously opened dot
  if (currentlyOpenDot && currentlyOpenDot !== dot) {
    hideLocationInfo(currentlyOpenDot);
  }

  const locationInfo = dot.querySelector('.location_info');
  locationInfo.style.display = 'block'; // Show location info
  infoShown = true; // Mark info as shown
  currentlyOpenDot = dot; // Track the currently open dot
}

// Function to hide location info
function hideLocationInfo(dot) {
  const locationInfo = dot.querySelector('.location_info');
  locationInfo.style.display = 'none'; // Hide location info
  infoShown = false; // Mark info as hidden
  currentlyOpenDot = null; // Reset the currently open dot
}

// Function to toggle info for mobile
function toggleLocationInfo(dot) {
  const locationInfo = dot.querySelector('.location_info');

  if (locationInfo.style.display === 'block') {
    hideLocationInfo(dot);
  } else {
    showLocationInfo(dot);
  }
}

// Add event listeners for both desktop hover and mobile touch/tap
locationDots.forEach(dot => {
  if (isMobile) {
    // Mobile: toggle info on quick tap (touchstart for faster response)
    dot.addEventListener('touchstart', function(event) {
      event.preventDefault();
      toggleLocationInfo(this);
    });
  } else {
    // Desktop: show on hover
    dot.addEventListener('mouseenter', function() {
      showLocationInfo(this);
    });

    // Desktop: hide on mouse leave
    dot.addEventListener('mouseleave', function() {
      hideLocationInfo(this);
    });
  }
});

// Close info when tapping outside the location dots (for mobile)
document.addEventListener('touchstart', function(event) {
  if (isMobile && infoShown) {
    const isClickInsideDot = Array.from(locationDots).some(dot => dot.contains(event.target));

    if (!isClickInsideDot) {
      locationDots.forEach(dot => hideLocationInfo(dot));
    }
  }
});

// Close info when clicking outside the location dots (for desktop)
document.addEventListener('click', function(event) {
  if (!isMobile && infoShown) {
    const isClickInsideDot = Array.from(locationDots).some(dot => dot.contains(event.target));

    if (!isClickInsideDot) {
      locationDots.forEach(dot => hideLocationInfo(dot));
    }
  }
});



// dept working tabs functionality

 // JavaScript for handling the tab functionality
 document.addEventListener('DOMContentLoaded', function () {
  // Select all tab buttons and content
  const tabButtons = document.querySelectorAll('.team-style4');
  const tabContents = document.querySelectorAll('.team-box');

  // Add click event listener to each tab button
  tabButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Remove active class from all buttons and content
      tabButtons.forEach(btn => btn.classList.remove('active'));
      tabContents.forEach(content => content.classList.remove('active'));

      // Add active class to the clicked button and corresponding content
      button.classList.add('active');
      const target = document.querySelector(button.dataset.tabTarget);
      target.classList.add('active');
    });
  });
});



// ===================================
// =========== Video Slider =======================

var swiper = new Swiper('.video-slider-container', {
  loop: true,
  // navigation: {
  //     nextEl: '.swiper-button-next',
  //     prevEl: '.swiper-button-prev',
  // },
  pagination: {
      el: '.swiper-pagination',
      clickable: true,
  },
  autoplay: {
      delay: 5000,
      disableOnInteraction: false,
  },
});


// ============= gallery ====================

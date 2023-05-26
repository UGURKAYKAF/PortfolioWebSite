(function ($) {
    "use strict";
    
    new WOW().init();

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.navbar').fadeIn('slow').css('display', 'flex');
        } else {
            $('.navbar').fadeOut('slow').css('display', 'none');
        }
    });

    $(".navbar-nav a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();
            
            $('html, body').animate({
                scrollTop: $(this.hash).offset().top - 45
            }, 1500, 'easeInOutExpo');
            
            if ($(this).parents('.navbar-nav').length) {
                $('.navbar-nav .active').removeClass('active');
                $(this).closest('a').addClass('active');
            }
        }
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });
    
    if ($('.typed-text-output').length == 1) {
        var typed_strings = $('.typed-text').text();
        var typed = new Typed('.typed-text-output', {
            strings: typed_strings.split(', '),
            typeSpeed: 100,
            backSpeed: 20,
            smartBackspace: false,
            loop: true
        });
    }

    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

    $('.skill').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, {offset: '80%'});

    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });
    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('active');
        $(this).addClass('active');
        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });

    $("#filter-list li").click(function() {
        var filter = $(this).attr("data-filter2");
        $("#filter-list li").removeClass("selected");
        $(this).addClass("selected");
        if (filter == "all") {
            $(".items .item").show();              
        } else {
            $(".items .item").hide();
            $(".items .item." + filter).show();
        }
    });

    //div id=myDiv
    // var myDiv = document.getElementById("myDiv");
    // var innerButton = document.getElementById("innerButton");
    // innerButton.addEventListener("click", function(){
    //     myDiv.style.display = "block";
    // });
    
    var modalButtons = document.getElementsByClassName("modal-button");
    for (var i = 0; i < modalButtons.length; i++) {
        modalButtons[i].onclick = function() {
            var modalId = this.getAttribute("data-modal");
            var modal = document.getElementById(modalId);
            modal.style.display = "block";
        }
    }

    var closeButtons = document.getElementsByClassName("close");
    for (var i = 0; i < closeButtons.length; i++) {
            closeButtons[i].onclick = function() {
            var modal = this.parentElement.parentElement;
            modal.style.display = "none";
        }
    }

    window.onclick = function(event) {
    var modals = document.getElementsByClassName("modal");
        for (var i = 0; i < modals.length; i++) {
            if (event.target == modals[i]) {
                modals[i].style.display = "none";
            }
        }
    }
        
    window.onclick = function(event) {
        if (event.target.classList.contains('modal')) {
            event.target.style.display = "none";
        }
    }
   
})(jQuery);


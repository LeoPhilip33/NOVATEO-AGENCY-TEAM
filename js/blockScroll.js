firstSection = document.querySelector('.main-container');
secondSection = document.querySelector('.second-container');
thirdSection = document.querySelector('.third-container');
fourthSection = document.querySelector('.fourth-container');
footer = document.getElementById('footer');





$('.main-container').bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        firstSection.scrollIntoView();

    } else {
        secondSection.scrollIntoView();

    }
});



$('.second-container').bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        firstSection.scrollIntoView();

    } else {
        thirdSection.scrollIntoView();


    }
});


$('.third-container').bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        secondSection.scrollIntoView();


    } else {
        fourthSection.scrollIntoView();


    }
});

$('.fourth-container').bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        thirdSection.scrollIntoView();


    } else {
        footer.scrollIntoView();

    }
});





$(window).scroll(function() {
    if ($('.second-container ').isInViewport()) {
        $('.img-plante').addClass('active');
        $('.second-nilk').addClass('active');
    }
    if ($('.third-container ').isInViewport()) {
        $('.img-concept-plaisir').addClass('active');
        $('.third-nilk').addClass('active');
    }
    if ($('.fourth-container ').isInViewport()) {
        $('.img-nilk-sport').addClass('active');
        $('.fourth-nilk').addClass('active');
    }
})
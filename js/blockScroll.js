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
        $('.img-plante').addClass('active');
        $('.second-nilk').addClass('active');
    }
});



$('.second-container').bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        firstSection.scrollIntoView();

    } else {
        thirdSection.scrollIntoView();
        $('.img-concept-plaisir').addClass('active');
        $('.third-nilk').addClass('active');

    }
});


$('.third-container').bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        secondSection.scrollIntoView();
        $('.img-plante').addClass('active');
        $('.second-nilk').addClass('active');

    } else {
        fourthSection.scrollIntoView();
        $('.img-nilk-sport').addClass('active');
        $('.fourth-nilk').addClass('active');

    }
});

$('.fourth-container').bind('mousewheel', function(event) {
    if (event.originalEvent.wheelDelta >= 0) {
        thirdSection.scrollIntoView();
        $('.img-concept-plaisir').addClass('active');
        $('.third-nilk').addClass('active');

    } else {
        footer.scrollIntoView();

    }
});
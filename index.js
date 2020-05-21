
//sets up image carousel using the slick library
$('.image-carousel-container').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    variableWidth: true,
    autoplay: true,
  autoplaySpeed: 2000,
  });


  $("#call-to-action-button").click(function() {
    $('html,body').animate({
        scrollTop: $("#main-hero").offset().top},
        'slow');
});
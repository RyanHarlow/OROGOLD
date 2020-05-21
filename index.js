
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

const reservaForm = document.querySelector('#reserva-form');

reservaForm.addEventListener('submit', async function(evt){
  evt.preventDefault();
  const nombre = document.querySelector('#nombre-input').value;
  const email = document.querySelector('#email-input').value;
  const telephono = document.querySelector('#telephono-input').value;

  let details = {nombre, email, telephono};

  var formBody = [];
for (var property in details) {
  var encodedKey = encodeURIComponent(property);
  var encodedValue = encodeURIComponent(details[property]);
  formBody.push(encodedKey + "=" + encodedValue);
}
formBody = formBody.join("&");


axios.post('./reserva.php', formBody)
  .then(res => {
    console.log(res)
  }) 
  

})

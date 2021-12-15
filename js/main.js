// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

//scrolling effect transition
window.addEventListener('scroll', function(){
  let header = document.querySelector('header');
  let windowPosition = window.scrollY > 0;
  header.classList.toggle('scrolling-active', windowPosition);
})

// var myLatLng = { lat: 38.3460, lng: -0.4907 };
// var mapOptions = {
//     center: myLatLng,
//     zoom: 18,
//     mapTypeId: 'satellite'

// };

// //create map
// var map = new google.maps.Map(document.getElementById("map"), mapOptions);

// x = navigator.geolocation;
// x.getCurrentPosition(success, failure);

// function success(position){
//   var myLat = position.coords.latitude;
//   var myLong = position.coords.longitude;

//   var coords = new google.maps.LatLng(myLat, myLong);

//   var mapOps = {
//     zoom: 10,
//     center: coords,
//     mapTypeId: google.maps.MapTypeId.ROADMAP
//   }
//   var map = new google.maps.Map(document.getElementById("map"),mapOps);
//   var marker = new google.maps.Marker({
//     map: map,
//     position: coords
//   });
// }
// function failure(){}

let map;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 10.29029064375526, lng: 123.99838945816438 },
    zoom: 18,
    mapTypeId: 'roadmap'
  });
}
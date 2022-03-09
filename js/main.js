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



// Get the modal
var modals = document.getElementById("myModal");

// Get the button that opens the modal
var btns = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("closed")[0];

// When the user clicks the button, open the modal 
btns.onclick = function() {
  modals.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modals.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modals) {
    modals.style.display = "none";
  }
}

//scrolling effect transition
// window.addEventListener('scroll', function(){
//   let header = document.querySelector('header');
//   let windowPosition = window.scrollY > 0;
//   header.classList.toggle('scrolling-active', windowPosition);
// })

let autocomplete;
function initAutocomplete(){
  autocomplete = new google.maps.places.Autocomplete(
    document.getElementById("autocomplete"),
    {
      types: ['establishment'],
      componentRestrictions: {'country': ['PH']},
      fields: ['place_id', 'geometry', 'name']
    });
    // autocomplete.addListener('place_changed', onPlaceChanged);
}
// function onPlaceChanged(){
//   var place = autocomplete.getPlace();

//   if (!place.geometry){
//     document.getElementById('autocomplete').placeholder =  'Enter a place';
//   } else{
//     document.getElementById('details').innerHTML = place.name;
//   }
// }

let map;
function initMap() {
  const initialPosition = { lat: 10.29029064375526, lng: 123.99838945816438 };
  //for map
  map = new google.maps.Map(document.getElementById("map"), {
    center: initialPosition,
    zoom: 18,
    mapTypeId: 'roadmap'
  });
  //marker
  const marker = new google.maps.Marker({ map, position: initialPosition });
  //get users location
  if ('geolocation' in navigator) {
    navigator.geolocation.getCurrentPosition(
      position => {
        console.log(`Lat: ${position.coords.latitude} Lng: ${position.coords.longitude}`);
        // Set marker's position.
        marker.setPosition({
          lat: position.coords.latitude,
          lng: position.coords.longitude
        });

        // Center map to user's position.
        map.panTo({
          lat: position.coords.latitude,
          lng: position.coords.longitude
        });
      },
        err => alert(`Error (${err.code}): ${getPositionErrorMessage(err.code)}}`)
    );
  } else {
    alert('Geolocation is not supported by your browser.');
  }
}
//error handling
const getPositionErrorMessage = code => {
  switch (code) {
    case 1:
      return 'Permission denied.';
    case 2:
      return 'Position unavailable.';
    case 3:
      return 'Timeout reached.';
  }
}
// function init() {
//   new google.maps.Map(document.getElementById('map'), {
//     center: { lat: 59.325, lng: 18.069 },
//     zoom: 15
//   });
// }

//refactor code
const createMap = ({ lat, lng }) => {
  return new google.maps.Map(document.getElementById('map'), {
    center: { lat, lng },
    zoom: 15
  });
};

const createMarker = ({ map, position }) => {
  return new google.maps.Marker({ map, position });
};

const getCurrentPosition = ({ onSuccess, onError = () => { } }) => {
  if ('geolocation' in navigator === false) {
    return onError(new Error('Geolocation is not supported by your browser.'));
  }

  return navigator.geolocation.getCurrentPosition(onSuccess, onError);
};
// New function to track user's location.
const trackLocation = ({ onSuccess, onError = () => { } }) => {
  if ('geolocation' in navigator === false) {
    return onError(new Error('Geolocation is not supported by your browser.'));
  }

  // Use watchPosition instead.
  return navigator.geolocation.watchPosition(onSuccess, onError, {
    enableHighAccuracy: true,
    timeout: 5000,
    maximumAge: 0
  });
};

const getPositionErrorMessage = code => {
  switch (code) {
    case 1:
      return 'Permission denied.';
    case 2:
      return 'Position unavailable.';
    case 3:
      return 'Timeout reached.';
    default:
      return null;
  }
}

function init() {
  const initialPosition = { lat: 59.325, lng: 18.069 };
  const map = createMap(initialPosition);
  const marker = createMarker({ map, position: initialPosition });
  const $info = document.getElementById('info');

  // getCurrentPosition({
  //   onSuccess: ({ coords: { latitude: lat, longitude: lng } }) => {
  //     marker.setPosition({ lat, lng });
  //     map.panTo({ lat, lng });
  //   },
  // Use the new trackLocation function.
    trackLocation({
      onSuccess: ({ coords: { latitude: lat, longitude: lng } }) => {
        marker.setPosition({ lat, lng });
        map.panTo({ lat, lng });
        // Print out the user's location.
        $info.textContent = `Lat: ${lat} Lng: ${lng}`;
        // Don't forget to remove any error class name.
        $info.classList.remove('error');
      },
    onError: err => {
      // Print out the error message.
      $info.textContent = `Error: ${getPositionErrorMessage(err.code) || err.message}`;
      // Add error class name.
      $info.classList.add('error');
    }
  });
}

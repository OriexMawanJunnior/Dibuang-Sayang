document.getElementById('use-current-location').addEventListener('click', function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var geocoder = new google.maps.Geocoder();
            var latlng = { lat: position.coords.latitude, lng: position.coords.longitude };

            geocoder.geocode({ 'location': latlng }, function (results, status) {
                if (status === 'OK') {
                    if (results[0]) {
                        var addressComponents = results[0].address_components;

                        // Set the form fields with the geocoded address data
                        document.getElementById('address').value = results[0].formatted_address;
                        document.getElementById('detail_address').value = '';
                        document.getElementById('province').value = getAddressComponentValue(addressComponents, 'administrative_area_level_1');
                        document.getElementById('city').value = getAddressComponentValue(addressComponents, 'locality');
                        document.getElementById('district').value = getAddressComponentValue(addressComponents, 'administrative_area_level_2');
                        document.getElementById('postal_code').value = getAddressComponentValue(addressComponents, 'postal_code');
                    } else {
                        window.alert('No results found');
                    }
                } else {
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        });
    } else {
        window.alert('Geolocation is not supported by this browser.');
    }
});

function getAddressComponentValue(addressComponents, type) {
    for (var i = 0; i < addressComponents.length; i++) {
        if (addressComponents[i].types.includes(type)) {
            return addressComponents[i].long_name;
        }
    }
    return '';
}
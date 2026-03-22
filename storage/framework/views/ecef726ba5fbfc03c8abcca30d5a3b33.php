<!DOCTYPE html>
<html>
<head>
    <title>Google Maps Street View Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        #street-view { height: 300px; width: 100%; }
    </style>
</head>
<body>
    <div id="street-view"></div>

    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
    <script>
        function initialize() {
            var fenway = {lat: 40.7128, lng: -74.0060}; // New York
            var panorama = new google.maps.StreetViewPanorama(
                document.getElementById('street-view'), {
                    position: fenway,
                    pov: {heading: 165, pitch: 0},
                    zoom: 1
                });
        }
        window.onload = initialize;
    </script>
</body>
</html>
<?php /**PATH C:\laragon\www\GODOY\resources\views/map.blade.php ENDPATH**/ ?>
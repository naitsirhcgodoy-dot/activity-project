

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8">
            <h2>Location Map</h2>
            
            <div class="map-container">
                <div id="miniMap"></div>
            </div>
        </div>

        <div class="col-md-4">
            <h3>Locations</h3>
            <ul class="list-group">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item">
                        <strong><?php echo e($location['name']); ?></strong>
                        <br>
                        <small><?php echo e($location['description']); ?></small>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
            </ul>
        </div>
    </div>
</div>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css"/>

<style>
    .map-container {
        width: 100%;
        height: 500px;
        border: 2px solid #333;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        overflow: hidden;
    }

    #miniMap {
        width: 100%;
        height: 100%;
    }
</style>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    // Pass PHP data to JavaScript
    const locations = <?php echo json_encode($locations, 15, 512) ?>;
    const route = <?php echo json_encode($route, 15, 512) ?>;
    const center = <?php echo json_encode($center, 15, 512) ?>;

    // Initialize map
    const map = L.map('miniMap').setView([center.latitude, center.longitude], 15);

    // Add OpenStreetMap tiles
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '© OpenStreetMap'
    }).addTo(map);

    // Custom red marker for primary locations
    const redMarker = L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    // Blue marker for secondary locations
    const blueMarker = L.icon({
        iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-blue.png',
        shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
        iconSize: [25, 41],
        iconAnchor: [12, 41],
        popupAnchor: [1, -34],
        shadowSize: [41, 41]
    });

    // Add markers from PHP data
    locations.forEach(function(location) {
        const markerIcon = location.type === 'primary' ? redMarker : blueMarker;
        
        const marker = L.marker([location.latitude, location.longitude], { 
            icon: markerIcon 
        }).addTo(map)
          .bindPopup('<b>' + location.name + '</b><br>' + location.description);
        
        if(location.type === 'primary') {
            marker.openPopup();
        }
    });

    // Draw route from PHP data
    const routeCoords = route.map(point => [point.lat, point.lng]);
    const polyline = L.polyline(routeCoords, {
        color: '#0066cc',
        weight: 5,
        opacity: 0.8,
        smoothFactor: 1
    }).addTo(map);

    // Fit bounds to route
    map.fitBounds(polyline.getBounds().pad(0.1));

    // Add zoom controls
    L.control.zoom({ position: 'bottomright' }).addTo(map);
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\GODOY\resources\views/map/show.blade.php ENDPATH**/ ?>
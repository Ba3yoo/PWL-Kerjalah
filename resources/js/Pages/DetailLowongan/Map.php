<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HERE Maps Example</title>
        <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
        <style>
            /* Define the map container's size */
            #map {
                width: 90%;
                height: 400px;
                margin-left: 4em;
            }
        </style>

        
    </head>
    <body>
        <!-- Map container -->
        <div id="map"></div>

        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
        <script>
            // Initialize communication with the platform
            const platform = new H.service.Platform({
                apikey: 'kW5f0D3gRKDPAw8bQ21UDtCTMhoW9TTYSehksBTlLHM'
            });

            // Default options for the base layers that are used to render a map
            var defaultLayers = platform.createDefaultLayers();
            
            // Initialize the map
            var map = new H.Map(document.getElementById('map'), 
                defaultLayers.vector.normal.map, {
                    zoom: 5,
                    center: { lat: 48.13641, lng: 11.57754 } // Coordinates for Munich, Germany
                }
            );

            // add a resize listener to make sure that the map occupies the whole container
            window.addEventListener('resize', () => map.getViewPort().resize());

            // MapEvents enables the event system
            // Behavior implements default interactions for pan/zoom (also on mobile touch environments)
            var behavior = new H.mapevents.Behavior(new H.mapevents.MapEvents(map));

            // Create the default UI components
            var ui = H.ui.UI.createDefault(map, defaultLayers);

        </script>
    </body>
</html>
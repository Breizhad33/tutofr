<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="content-type" content="text/html"; charset="utf-8" />
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
        <style type="text/css">
            #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
                height:915px;
                width: 1900px;
            }
        </style>
        <title>Carte</title>
    </head>
    <body>
        <div id="map">
	    <!-- Ici s'affichera la carte -->
	</div>

        <!-- Fichiers Javascript -->
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>
        <!--<script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-core.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-service.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"></script>
        <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>-->
        <script src="tutofr.js"></script>
        <script>
        // Fonction d'initialisation des points (randoms) sur la carte
        function initPoint() {
          for (let Point = 0; Point < 100; Point++){

            // Pour la France et ses alentours:
            //Lat = initLat(42, 51);
            //Lon = initLon(-4, 8);

            // Pour la Bretagne et ses alentours:
            const Lat = initLat(47.97, 48.5);
            const Lon = initLon(-4, -1);
            let test = {
              "id": Point,
              "Longitude": Lon,
              "Lattitude": Lat
            };
            var ville = new Object();
            ville.id = Point;
            ville.lat = Lat;
            ville.lon = Lon;
            city.push(ville);
            <?php
              //Créer le fichier si il n'existe pas (="a+") et l'ouvre dans la variable
              $COOR = fopen('coordo.txt', 'a+');
              //$COOR_1 = fgets($COOR);
              #Reecris par-dessus l'ancien contenue, le nombre choisit et rajoute un espace a la suite pour effacer le second caracteres si le user passe du numero xx au numero x.
              fwrite($COOR, '123');
              fclose($COOR);
          ?>
          }
        }
        initPoint();

         </script>
    </body>
</html>

<?php 

    class Facade {
        public function findApartments($place, $divId){
          $appfinder  = new ApartmentFinder();
          $geolocator = new GeoLocator(); 
          $gmap       = new GoogleMap();
          $appertment = $appfinder->locateApartments($place);
          foreach($appertment as $apartment) {
            $gmap->drawLocation($apartment);
          }
          $gmap->dispatch($divId);
        }
    }

    
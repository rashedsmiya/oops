<?php 

   use Pecee\SimpleRouter\SimpleRouter;
   use App\Controllers\PortfoliosController;
   use App\Controllers\WelcomeController;


   SimpleRouter::get('/oops/phpmvc/', function(){
      return views('index.php');
   });

   SimpleRouter::get("/oops/phpmvc/protfolios", [PortfoliosController::class, 'index']);

   SimpleRouter::get('/', function() {
    views('index');
});
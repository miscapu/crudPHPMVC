<?php
require __DIR__.'/vendor/autoload.php';

use App\Controllers\DashboardController;

$instanceController =   new DashboardController();
$dataRows           =   $instanceController->selectAllRows( 'Users' );


define( 'TITLE', 'Dashboard' );
define( 'BASE_URL', 'http://localhost:8888/PHP/CRUD/4/' );

include __DIR__.'/app/Views/Pages/Dashboard.php';
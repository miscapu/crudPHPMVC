<?php
namespace App\Controllers;

require __DIR__."/../../vendor/autoload.php";

use App\Models\DBModel;

/**
 * Class DashboardController
 * @package App\Controllers
 */
class DashboardController{

    /**
     * @param $table
     * @return mixed
     */
    public function selectAllRows( $table )
    {
        $instanceModel  =   new DBModel( $table );
        return $instanceModel->readAllRows();
    }


}
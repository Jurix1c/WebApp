<?php

namespace App\Controllers;

class AdvertsController extends BaseController
{
    function __construct()
    {

    }

    public function eventSave($request): void
    {
        echo "Controller eventSave ";
    }

    public function eventShow($request=[])
    {
        echo 'Controller eventShow Id='.$request['id'];
    }

    public function eventList($request){
        echo "Controller eventList";
    }
}
<?php

namespace App\Controllers;

class AdvertsController extends BaseController
{
    function __constructor()
    {
        echo "Вызвали конструктор";
    }

    public function eventSave($request): void
    {
        echo "Controller eventSave ";
      //  echo $request[1];
    }

    public function eventShow($request=[])
    {
        echo "Controller eventShow";
        //echo $request['id'];
    }

    public function eventList($request){
        echo "Controller eventList";
    }
}
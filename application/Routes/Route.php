<?php

namespace App\Routes;

use App\Controllers\AdvertsController;

class Route implements RouterInterface
{
    private $classAdvert;
    private $classSearch;
    
    function __constructor()
    {
        $this->classAdvert = new AdvertsController();
        $this->classSearch = new SearchController();
        //var_dump(new AdvertsController());
    }
    
    static function clearUrl($url): string 
    {
    
        $matches = []; 
        preg_match('/^\/([0-9a-zA-Z\/]+)/',$url,$matches);
        return $matches[1];
    }   

    public function methodPOST($url): void
    {
        
        echo "methodPOST";
        echo '<br/>';
        echo $url;

    }

    public function methodGET($url): void
    {
        $request = array();
        $request = self::clearUrl($url);
        //echo '<br/>';
        //echo $request;
        echo $_GET["id"];
        echo '<br/>';
        echo $request;
        echo '<br/>';

        switch ($request):
            case "eventSave":
                //$this->classAdvert->eventSave($_GET);
                //$this->classAdvert->eventShow();
                //var_dump($this->classAdvert);
                //echo "Метод eventSave";
            default:
                echo "Метод не найден";
        endswitch; 
        //echo "methodGET"; 
        //echo '<br/>';
        //echo $url;

    }


    public function callController($method, $url): void
    {
        //echo "call ".__CLASS__."here";
        //echo $params["REQUEST_METHOD"];
        //echo $method;
        //echo '<br/>';
        //echo $url;

        if ($method == "GET"){
            self::methodGET($url);
        }
        elseif ($method == "POST"){
            self::methodPOST($url);
        }


    }
}
<?php

namespace App\Routes;

use App\Controllers\AdvertsController;
use App\Controllers\SearchController;

class Route implements RouterInterface
{
    private $classAdvert;
    private $classSearch;
    
    function __construct()
    {
        $this->classAdvert = new AdvertsController();
        $this->classSearch = new SearchController();
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
        $request = $this->clearUrl($url);

        switch ($request):
            case "eventSave":
                $this->classAdvert->eventSave($_GET);
                break;
            case "eventShow":
                $this->classAdvert->eventShow($_GET);
                break;
            case "eventList":
                $this->classAdvert->eventList($_GET);
                break;
            case "eventSearch":
                $this->classSearch->eventSearch($_GET);
                break;
            case "eventIndex":
                $this->classSearch->eventIndex($_GET);
                 break;
            default:
                echo "Метод не найден";
                break;
        endswitch; 
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
<?php

namespace App\Routes; 

interface RouterInterface
{
    public function callController($method, $url);
}

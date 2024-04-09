<?php

namespace app\core;

class Request
{
    
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        
        return strtok($path, '?');
    }

    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}
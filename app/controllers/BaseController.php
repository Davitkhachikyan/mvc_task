<?php

class BaseController
{
    function view($page,$data=[])
    {
        if(count($data)){
            extract($data);
        }
        require "../app/views/".$page .".php";;
    }


    protected function loadModel($model)
    {
        if (file_exists("../app/models/" .$model. ".php"))
        {
            include "../app/models/" .$model. ".php";
            return $model = new $model();
        }
        return false;
    }
}

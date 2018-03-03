<?php
class Service
{
    public function postScorm($data){

        var_dump ($data);

        if($this->checkHeader('header')){
            $code = 1;
        }else{
            $code = -1;
        }
        
        return [
            "Code" => $code,
            "URL" => "https://elpais.com/"
        ];
    }

    public function checkHeader($header){
        return false;
    }

    public function getUsers()
    {
        return [
          ["id" => 1, "name" => "Iparra"],
          ["id" => 2, "name" => "Juan"]
        ];
    }
}
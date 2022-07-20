<?php
namespace fun5i\modules\nikahyuk;

class Mempelai{

    private function data(){
        $fileprofile = file_get_contents('../data/profile.json');
        return json_decode($fileprofile);
    }

    private $auth;

    public function __construct($password="null"){
        $this->setAuth($password);
    }

    public function getName(){
        return $this->data()->{"name"};
    }

    public function getPekerjaan(){
        return $this->data()->{"pekerjaan"};
    }

    public function getPerusahaan(){
        return $this->data()->{"perusahaan"};
    }

    private function setAuth($password){
        $this->auth = ($this->data()->{"password"} == $password) ? true: false;
        
    }

}

?>
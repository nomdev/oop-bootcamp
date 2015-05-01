<?php

class LightSwitch {

    public function on(){

    }
    public function off(){

    }

    //private function: outside of this class nobody have access to this method!!
    private function connect(){

    }
    private function activate(){

    }

}

$lightswitch = new LightSwitch();

var_dump($lightswitch->connect());
//PHP fatal error.. Call to private method LightSwitch::connect() from context.

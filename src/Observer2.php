<?php 

class Observer2 implements InterfaceObserver {

    private $id = 13;

    public function notify($id)
    {
        if($this->id == $id) {
            echo " N: " . $this->id . " foi verificada pelo observer 2!<br>";
        }
    }

}
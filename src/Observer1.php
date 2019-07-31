<?php 

class Observer1 implements InterfaceObserver {

    private $id = 15;

    public function notify($id)
    {
        if($this->id == $id) {
            echo "N: " . $this->id . " foi verificada pelo observer 1!<br>";
        }
    }

}
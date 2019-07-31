<?php 

class Observer3 implements InterfaceObserver {

    public function notify($id)
    {
        echo "N: " . $id . " não foi verificada pelo observer 3!<br>";
    }

}
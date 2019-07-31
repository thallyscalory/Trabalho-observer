<?php 

class Subject {

    private $observers = array();

    public function subscribe($observer)
    {
        array_push($this->observers, $observer);
    }

    // public function unsubscribe()
    // {
    //     if(in_array($id, $this->observers)) {
    //         unset($this->observers);
    //     }
    // }

    public function notifyAll($id)
    {
        foreach ($this->observers as $observer) {
            $observer->notify($id);
        }
    }

}
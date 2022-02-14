<?php 
// abstraction => abstract class , interface

interface crud {
    function create();
    function read();
    function update($id);
    function delete($id);
}

interface operations {
    function exportData();
    function importData();
}

class parentClass {
    public function uploadPhoto()
    {
        echo "upload";
    }
}

// PHP single inheritance , multiple implements
class product extends parentClass implements crud,operations {
    public function create()
    {
        # code...
    }
    public function update($x)
    {
        # code...
    }
    public function read()
    {
        # code...
    }
    public function delete($id)
    {
        # code...
    }

    public function exportData()
    {

    }
    public function importData()
    {

    }
}


class offers extends parentClass implements crud , operations {
}
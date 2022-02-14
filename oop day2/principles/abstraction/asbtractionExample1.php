<?php 

# products => create , read , update , delete => crud
# offers => create , read , update , delete
# coupons => create , read , update , delete 

abstract class crud {
    public abstract function create();
    public abstract function read();
    public abstract function update($id);
    public abstract function delete($id);
    
    public function uploadPhoto()
    {
        echo "upload photo";
    }
}

class offer extends crud  {
    public  function create(){
        echo "create from offer";
    }
    public  function read(){
        echo "read from offer";
    }
    public  function update($id){
        echo "update from offer";
    }
    public  function delete($id){
        echo "delete from offer";
    }
}

class product extends crud {
    public  function create(){
        echo "create from product";
    }
    public  function read(){
        echo "read from product";
    }
    public  function update($id){
        echo "update from product";
    }
    public  function delete($id){
        echo "delete from product";
    }
}

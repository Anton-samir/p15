<?php 

interface importing {
    function import();
}

class main {
    function import(){
        echo "import";
    }
}


class user extends main implements importing {

}
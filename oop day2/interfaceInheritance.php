<?php 

// flyable
// eat
// drink

interface pird {
    function eat();
    function drink();
}

interface flyablePird extends pird {
    function fly();
}


// chicken 
class chicken implements pird {

}

// duck
class duck implements flyablePird {

}
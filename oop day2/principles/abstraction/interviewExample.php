<?php 
// calculate area of differnet shapes ?

// contract
interface shape {
    function area();
}

class rect implements shape {
    private $width;
    private $length;
     /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }

    /**
     * Get the value of length
     */ 
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */ 
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    public function area()
    {
        return $this->length * $this->width;
    }
}

class circle implements shape {
    private $r;
    /**
     * Get the value of r
     */ 
    public function getR()
    {
        return $this->r;
    }

    /**
     * Set the value of r
     *
     * @return  self
     */ 
    public function setR($r)
    {
        $this->r = $r;

        return $this;
    }
    public function area()
    {
        return pi() * ( $this->r ** 2);
    }
}

class square implements shape {
    private $side;
    /**
     * Get the value of side
     */ 
    public function getSide()
    {
        return $this->side;
    }

    /**
     * Set the value of side
     *
     * @return  self
     */ 
    public function setSide($side)
    {
        $this->side = $side;

        return $this;
    }

    public function area()
    {
        return $this->side * $this->side ;
    }

    
}


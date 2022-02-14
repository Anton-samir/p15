<?php


class parentClass {

    public static function getClassNameWithSelf()
    {
        return self::class;
    }
    public static function getClassNameWithStatic()
    {
        return static::class;   
    }
}

// late static binding in php
class childClass extends parentClass {
    
}

echo childClass::getClassNameWithStatic();
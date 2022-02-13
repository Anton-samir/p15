<?php 
// ::class => return full namespace
// search on namespace in php ?
class test {

    public static function print()
    {
        // echo self::class .'<br>'; // test
        // echo static::class .'<br>'; // test
        echo test::class .'<br>'; // test
        return self::class;
    }

}


test::print()::print()::print();

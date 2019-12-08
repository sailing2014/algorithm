<?php
class DB{
    private static $instance = null; //私有静态属性，存放该类的实例
    private function __construct() //私有构造方法，防止在类的外部实例化
    {        # code...
    }
    private function __clone() //私有克隆方法，防止克隆
    {
        # code
    }
    public static function getInstance() //公共的静态方法，实例化该类本身，只实例化一次
    {
        if (!self::$instance instanceof self)
        {
            self::$instance = new self;
        }
        return self::$instance;
    }

}
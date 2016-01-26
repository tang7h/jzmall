<?php
/**
 * Created by PhpStorm.
 * User: chenqiang
 * Date: 8/28/2015
 * Time: 22:15
 */
//define('ROOT_PATH', str_replace('includes/init.php', '', str_replace('\\', '/', __FILE__)));
require(ROOT_PATH . 'includes/driver/cache/EcMemcache.class.php');

class AppMemcache extends EcMemcache{

    private static $_config_server =
        array(
            array('127.0.0.1', 11211)
        );

    private static $_config_group = 'app';

    private static $instance = null;

    public static function factory(){
        if(self::$instance==null){
            self::$instance = new EcMemcache(
                array(
                    'MEM_SERVER'=>self::$_config_server,
                    'MEM_GROUP'=>self::$_config_group,
                ));
        }
        return self::$instance;
    }


}
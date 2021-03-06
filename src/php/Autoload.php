<?php

namespace VekaServer\Popin;

use VekaServer\Abstract\PluginAbstract;

class Autoload extends PluginAbstract
{

    protected static function getAllRequiredPlugin():array {
        return [\VekaServer\Jquery\Autoload::class, \VekaServer\FontAwesome\Autoload::class];
    }

    public static function getVIEW():array {
        return [];
    }

    public static function getJS():array {
        return [dirname(__DIR__).DIRECTORY_SEPARATOR.'js'];
    }

    public static function getCSS():array {
        return [dirname(__DIR__).DIRECTORY_SEPARATOR.'css'];
    }

}

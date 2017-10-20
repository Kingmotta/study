<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 13/10/17
 * Time: 15:29
 */

namespace App;

use App\Controller\IndexController;

class Route extends Kernel
{

    protected static $gets;
    private static $url;
    private $instance;

    /**
     * @param $argument
     */
    static function init()
    {
        $instance = new self;
        $instance->readRoutes();
    }

    private function checkRoute()
    {
        if ( ! isset(self::$gets[$this->transformRoute()])) {
            echo "Rota inexistente";
        }

        $this->executeRoute();
    }

    /**
     *  Check a route
     */
    private function readRoutes()
    {
        require_once base_path . "/app/routes.php";

        $this->checkRoute();
    }

    /**
     * @return string
     */
    public function transformRoute()
    {
        return $_SERVER['DOCUMENT_ROOT'] . $this->route;
    }

    public function executeRoute()
    {
        $parts = explode('@', self::$gets[$this->transformRoute()][0]);
        $class = 'App\\Controller\\' . $parts[0];

        if ( ! class_exists($class)) {
            echo "Erro, Controller não existe!";
            die();
        }

        if ( ! method_exists($class, $parts[1])) {
            echo "Erro, método inexiste!";
            die();
        }

        $instance = new $class();
        echo $instance->{$parts[1]} ();
    }

    /**
     * @param string $url
     * @param string $controller
     *
     * @return array
     */
    public static function get(string $url, string $controller)
    {
        return self::$gets[str_replace('\\', '/', public_path . $url)] = [$controller];
    }
}
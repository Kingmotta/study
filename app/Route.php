<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 13/10/17
 * Time: 15:29
 */

namespace App;


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
    echo $this->transformRoute();
  }

  private function readRoutes()
  {
    require_once base_path . "/app/routes.php";

    $this->checkRoute();
  }

  public function transformRoute()
  {
    return $_SERVER['DOCUMENT_ROOT'].$this->route;
  }

  /**
   * @param string $url
   * @param string $controller
   *
   * @return array
   */
  public static function get(string $url, string $controller)
  {
    return self::$gets[public_path.$url] = [$controller];
  }
}
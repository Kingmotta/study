<?php
/**
 * Created by PhpStorm.
 * User: lucas
 * Date: 13/10/17
 * Time: 15:10
 */

namespace App;


class Kernel
{

  protected $route;

  /**
   * Kernel constructor.
   */
  public function __construct()
  {
    $this->route = $this->getURLRoute();
  }

  /**
   * @return string
   */
  public function run()
  {
     return Route::init($this->route);
  }

  /**
   * @return mixed
   */
  public function getURLRoute()
  {
    return str_replace(public_path,'', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
  }

}
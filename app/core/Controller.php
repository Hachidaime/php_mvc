<?php

/**
 * @desc this class will handle controller
 * 
 * @class Controller
 * @author Hachidaime
 */
class Controller
{
  /**
   * @desc this method will handle view
   * 
   * @method view
   * @param string $view is view file
   * @param array $data is data to assign in array
   */
  public function view(string $view, array $data = [])
  {
    require_once "../app/views/{$view}.php";
  }

  /**
   * @desc this method will handle model
   * 
   * @method model
   * @param string $model is model file
   */
  public function model(string $model)
  {
    require_once "../app/models/{$model}.php";
    return new $model;
  }
}

<?php

/**
 * @desc this class will handle User model
 * 
 * @class UserModel
 * @author Hachidaime
 */
class UserModel
{
  /**
   * @var string $name is user name
   */
  private $nama = 'Cold';

  /**
   * @desc this method will handle get User data
   * 
   * @method getUser
   */
  public function getUser()
  {
    return $this->nama;
  }
}

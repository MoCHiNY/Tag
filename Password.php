<?php
class Password extends input
{
  public function __construct()
  {
    $this->setAttr('type', 'password');
    parent::__construct();
  }
}

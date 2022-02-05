<?php
class Hidden extends input
{
  public function __construct()
  {
    $this->setAttr('type', 'hidden');
    parent::__construct();
  }

}

<?php
class Link extends Tag
{
  public function __construct()
  {
    parent::__construct('a');
    $this->setAttr('href', '');
  }
}

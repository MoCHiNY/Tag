<?php
class Image extends Tag
{

  public function __construct()
  {
    $this->setAttr('src', '')->setAttr('alt', '');
    parent::__construct('img');
  }
  public function addWH($width, $height)
  {
    $this->setAttr('width', $width)->setAttr('height', $height);
    return $this;
  }
  public function __toString()
  {
    return parent::open();
  }
}

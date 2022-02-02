<?php
class Tag
{
  private $name;
  private $attrs;
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function setAttr($name, $value)
  {
    $this->attrs[$name] = $value;
    return $this;
  }

  public function setAttrs($attrs)
  {
    foreach ($attrs as $name => $value) {
      $this->setAttr($name, $value);
    }
    return $this;
  }



  public function removeAttr($name)
  {
    $arr = $this->attrs;
    unset($arr[$name]);
    return $this;
  }


  public function open()
  {
    $name = $this->name;
    $attrs = $this->getAttrsStr($this->attrs);
    return "<$name$attrs>";
  }
  public function close()
  {
    $name = $this->name;
    return "</$name>";
  }

  private function getAttrsStr($arr)
  {

    if (!empty($arr)) {
      $res = '';
      foreach ($arr as $name => $value) {
        $res .= " $name=\"$value\"";
      }
      return $res;
    } else {
      return '';
    }
  }
}

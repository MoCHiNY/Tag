<?php
class Tag
{
  private $name;
  private $attrs;
  public function __construct($name, $attrs = [])
  {
    $this->name = $name;
    $this->attrs = $attrs; // записываем атрибуты в свойство
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

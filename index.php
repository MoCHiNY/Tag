<?php
$arr = [
  'iTag',
  'Tag',
  'img'

];
foreach ($arr as $value) {
  require_once($value . ".php");
}

// $arr = ['id' => 'test', 'class' => 'eee bbb'];

// $tag = new Tag('input');
// $tag->setAttr('disable', true);
// echo $tag->open(); // выведет <input id="test" class="eee bbb">

echo (new Tag('input'))->addClass('qww')->addClass('bbbsdsda')->open();
echo (new Image())->setAttr('src', 'img.png')->addWH(200, 300); 

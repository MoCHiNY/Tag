<?php
$arr = ['Tag'];
foreach ($arr as $value) {
  require_once($value . ".php");
}

$arr = ['id' => 'test', 'class' => 'eee bbb'];

$tag = new Tag('input');
$tag->setAttr('disable', true);
echo $tag->open(); // выведет <input id="test" class="eee bbb">

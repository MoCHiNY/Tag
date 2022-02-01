<?php
$arr = ['Tag'];
foreach ($arr as $value) {
  require_once($value . ".php");
}

$tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
echo $tag->open(); // выведет <input id="test" class="eee bbb">

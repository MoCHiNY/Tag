<?php
$arr = [
  'iTag',
  'Tag',
  'img',
  'link',
  'HtmlList',
  'ListItem',
  'Form',
  'input',
  'submit',
  'Password',
  'Hidden',
  'TextArea'
];
foreach ($arr as $value) {
  require_once($value . ".php");
}

// $arr = ['id' => 'test', 'class' => 'eee bbb'];

// $tag = new Tag('input');
// $tag->setAttr('disable', true);
// echo $tag->open(); // выведет <input id="test" class="eee bbb">


// 

$form = (new Form)->setAttrs(['action' => 'test.php', 'method' => 'GET']);

echo $form->open();
echo (new Input)->setAttr('name', 'user');
echo (new Textarea)->setAttr('name', 'message')->show();
echo new Submit;
echo $form->close();

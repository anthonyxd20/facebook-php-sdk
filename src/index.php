<?php
require 'src/facebook.php';

// Instanciamos un nuevo objeto de Facebook, con los parametros de appId y Secret
$facebook = new Facebook(array(
  'appId'  => '1504625333092416',
  'secret' => 'c6ac3918b25a145d9f63fc1bc9acfb5c',
  'cookie' => true,
)); 

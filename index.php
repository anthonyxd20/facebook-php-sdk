<?php
require 'src/facebook.php';

// Instanciamos un nuevo objeto de Facebook, con los parametros de appId y Secret
$facebook = new Facebook(array(
  'appId'  => '822018101160502',
  'secret' => '17f853ccb5f5b2cbddeda41bee499df1',
  'cookie' => true,
)); 

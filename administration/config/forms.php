<?php defined('SYSPATH') or die('No direct access allowed.');

// news
$config['edit_news']['group1']['col1']['name'] = array ();
$config['edit_news']['group1']['col1']['rew_id'] = array ();
$config['edit_news']['group1']['col1']['timestamp'] = array ();

$config['edit_news']['group1']['col2']['meta_keywords'] = array ();
$config['edit_news']['group1']['col2']['meta_description'] = array ();
$config['edit_news']['group1']['col2']['cms_status'] = array ('driver' => 'bool');

$config['edit_news']['group1']['col']['anotation'] = array ('driver' => 'textarea', 'attrs' => array ('rows' => 10));
$config['edit_news']['group1']['col']['content'] = array ('driver' => 'textarea', 'attrs' => array ('rows' => 20));

return $config;

/*
return array
(
  // editace uzivatele
  
  
  'user' => array (
    'group1' => array (
      'col1' => array (
        'username' => array (),
        'email' => array (),
      ),
      'col2' => array (
        'login_password' => array ('build' => TRUE, 'driver' => 'password'),
      ),
    )
  ),
);
*/

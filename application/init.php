<?php defined('SYSPATH') or die('No direct script access.');

// novinky - blok pro HP
Route::set('news-block_hp', 'novinky/block_hp(/<count>)')
  ->defaults(array(
    'controller' => 'news',
    'action' => 'list_homepage',
    'count' => 5
));

// novinky - detail
Route::set('news-get', 'novinky/<rew_id>')
  ->defaults(array(
    'controller' => 'news',
    'action' => 'get',
));

// novinky - vypis
Route::set('news', 'novinky')
  ->defaults(array(
    'controller' => 'news',
    'action' => 'list',
));



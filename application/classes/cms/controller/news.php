<?php defined('SYSPATH') or die('No direct script access.');

abstract class Cms_Controller_News extends Controller_Builder_Template_Application_Type
{
  protected $_model = 'news';
  protected $_page_type = 'news';
  
  public function action_list_homepage()
  {
    $this->_view->items = ORM::factory($this->_model)->limit($this->request->param('count'))->find_all();
  }
}
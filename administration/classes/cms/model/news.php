<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_News extends ORM_Classic 
{
  protected $_object_plural = TRUE;
  protected $_sorting = array ('timestamp' => 'DESC');
  protected $_form_date_fields = array ('timestamp');
  
  public function set_list_item_default(&$arr, $item) 
  {
    $arr['date'] = date('d.m.Y', $item->timestamp);
    $arr['cms_status'] = ($item->cms_status) ? ___('basic_yes') : ___('basic_no');
  }
}

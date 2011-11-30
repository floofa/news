<?php defined('SYSPATH') or die('No direct access allowed.');

class Cms_Model_News extends ORM 
{
  protected $_object_plural = TRUE;
  
  protected $_sorting = array ('timestamp' => 'DESC');
  
  public function __get($column)
  {
    switch ($column) {
      case 'content' :
        return cms::prepare_content($this, nl2br(parent::__get($column)));
    }
    
    return parent::__get($column);
  }
  
  public function list_count_all()
  {
    return $this->where('cms_status', '=', 1)->count_all();
  }
  
  public function list_all($limit = FALSE, $offset = FALSE)
  {
    $this->where('cms_status', '=', 1);
    
    if ($limit !== FALSE)
      $this->limit($limit);
    
    if ($offset !== FALSE)
      $this->offset($offset);
    
    return $this->find_all();
  }
  
  public function get_url()
  {
    return Route::url('news-get', array ('rew_id' => $this->rew_id), TRUE);
  }
}
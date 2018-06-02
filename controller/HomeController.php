<?php

require_once('../model/Model.php');
require_once('../model/Category.php');
require_once('../model/Item.php');
require_once('Controller.php');

class HomeController extends Controller{

  public function listCategories(){
    $category = new Category();
    $category->listCategories();
  }
public function getItem(){
    $item = new Item();
    $item->getItem('Fiskeutstyr');
  }
}
$controller = new HomeController();
if(isset($_POST['action'])) {
  $action = $_POST['action'];
  switch($action) {
    case 'listCategories':
      $controller->listCategories();
      break;
    case 'listItems':
      $controller->getItem();
      break;
  }
}

?>

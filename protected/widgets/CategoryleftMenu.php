<?php

class CategoryleftMenu extends CWidget{
    public function init() {
       
    }
    public function run() {
        $parent = Category::getAllParent();
          foreach($parent as &$item){
            $item['subCat'] = Category::getAllCategoryBy($item['id_category']);
              foreach($item['subCat'] as &$subItem){
                $subItem['Cat'] = Category::getAllCategoryBy($subItem['id_category']);
            }
            }
       
        $this->render("CategoryleftMenu",array('data'=>$parent));
    }
}



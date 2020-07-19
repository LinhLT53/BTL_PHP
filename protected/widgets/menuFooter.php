<?php

class menuFooter extends CWidget{
    public function init() {
       
    }
   public function run() {
       $parent = Category::getFooterParent();
          foreach($parent as &$item){
            $item['subCat'] = Category::getAllSubCategory($item['id_category']);
              
            }
       
        $this->render("menuFooter",array('data'=>$parent));
    }
}
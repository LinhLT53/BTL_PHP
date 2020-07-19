<?php

class mainheader extends CWidget{
    public function init() {
       
    }
    public function run() {
        $cat=new Category;
        $dataCat=$cat->getAllCategory('id_category,name');
         $temDataCat = array();
                foreach ($dataCat as $item) {
               $temDataCat[$item['id_category']] = $item['name'];
                }

        $this->render("mainheader",array('catagory'=>$temDataCat));
    }
}
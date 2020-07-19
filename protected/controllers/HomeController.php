<?php



class HomeController extends Controller {

    public function actionIndex() {
        
        $parent = Category::getAllParent();
        foreach ($parent as &$item) {
            $item['subCat'] = Category::getAllCategoryBy($item['id_category']);
            foreach ($item['subCat'] as &$subItem) {
                $subItem['Cat'] = Category::getAllCategoryBy($subItem['id_category']);
                foreach ($subItem['Cat'] as &$proItem) {
      
                    $proItem['pro'] = Product::getHotProductByCatid($proItem['id_category']);//ham lay sp ban chay
                    $proItem['most_pro'] = Product::getMostSeeProductByCatid($proItem['id_category']);//san pham xem nhieu
                }
            }
        }

        $this->render("index", array('parentData' => $parent)); 
    }

}

<?php

        class Category extends CategoryBase {

            /**
             * @return string the associated database table name
             */
            public function tableName() {
                return 'tbl_category';
            }

            public static function model($className = __CLASS__) {
                return parent::model($className);
            }
            // trunghd
             public function  getAllCategory($field='*'){
             $data = Yii::app()->db->createCommand()
                    ->select($field)
                    ->from('tbl_category')
                    ->where('id_parents!=0')
                    ->order('id_category ASC')
                    ->queryAll();
            return $data;
        }
            //lay ra toan bo parent cha, voi id_parents=0
            static function getAllParent($field='*') {
                $data = Yii::app()->db->createCommand()
                        ->select($field)
                        ->from('tbl_category')
                       
                        ->where('id_parents=0')
        //                           
                        ->queryAll();
        //         echo '<pre>';
        //  print_r($data);
        //  die;
                return $data;
            }

           
            static function getAllSubCategory($id_cat) {

                $data = Yii::app()->db->createCommand()
                        ->select('*')
                        ->from('tbl_category')
                        ->where('id_parents= ' . $id_cat)
                        ->queryAll();
                return $data;
            }

            
            static function getAllCategoryBy($subId) {
                $data = Yii::app()->db->createCommand()
                        ->select("*")
                        ->from('tbl_category')
                        ->where('id_parents = ' . $subId)
                        ->queryAll();
                return $data;
            }

            static function getFooterParent() {
                $data = Yii::app()->db->createCommand()
                        ->select('*')
                        ->from('tbl_category')
                        ->where('id_parents=0 ')
                        ->limit(3)
                        ->queryAll();

                return $data;
            }
            //lay ra tagFooter
            static function getTagFooter($id) {
                $data = Yii::app()->db->createCommand()
                        ->select('*')
                        ->from('tbl_category')
                        ->where('id_parents = ' . $id)
                        ->limit(3)// chi lay top 3
                        ->queryAll();

                return $data;
            }


            static function getCatById($id) {
                $data = Category::model()->findByPk($id);
                return $data;
            }

}

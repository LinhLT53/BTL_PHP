<?php

/**
 * This is the model class for table "tbl_category".
 *
 * The followings are the available columns in table 'tbl_category':
 * @property integer $id_category
 * @property integer $id_parents
 * @property string $name
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property string $description
 * @property string $image_icon
 * @property string $image_banner_top
 * @property string $image_banner_body
 * @property string $class
 */
class CategoryBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_category';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('id_parents, name', 'required'),
			array('id_parents', 'numerical', 'integerOnly'=>true),
			array('name, meta_title, meta_keyword', 'length', 'max'=>200),
			array('class', 'length', 'max'=>100),
			array('meta_description, description, image_icon, image_banner_top, image_banner_body', 'safe'),

			array('id_category, id_parents, name, meta_title, meta_keyword, meta_description, description, image_icon, image_banner_top, image_banner_body, class', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_category' => 'Id Category',
			'id_parents' => 'Id Parents',
			'name' => 'Name',
			'meta_title' => 'Meta Title',
			'meta_keyword' => 'Meta Keyword',
			'meta_description' => 'Meta Description',
			'description' => 'Description',
			'image_icon' => 'Image Icon',
			'image_banner_top' => 'Image Banner Top',
			'image_banner_body' => 'Image Banner Body',
			'class' => 'Class',
		);
	}

	/**
	
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
	

		$criteria=new CDbCriteria;

		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('id_parents',$this->id_parents);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keyword',$this->meta_keyword,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('image_icon',$this->image_icon,true);
		$criteria->compare('image_banner_top',$this->image_banner_top,true);
		$criteria->compare('image_banner_body',$this->image_banner_body,true);
		$criteria->compare('class',$this->class,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**

	 * @return CategoryBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

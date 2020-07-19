<?php

/**
 * This is the model class for table "tbl_ads".
 *
 * The followings are the available columns in table 'tbl_ads':
 * @property integer $id_ads
 * @property string $fake_link
 * @property string $meta_title
 * @property string $meta_keyword
 * @property string $meta_description
 * @property integer $id_user
 * @property string $image
 */
class AdsBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_ads';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
	
		return array(
			array('fake_link, id_user, image', 'required'),
			array('id_user', 'numerical', 'integerOnly'=>true),
			array('meta_title, meta_keyword', 'length', 'max'=>200),
			array('meta_description', 'safe'),
			
			array('id_ads, fake_link, meta_title, meta_keyword, meta_description, id_user, image', 'safe', 'on'=>'search'),
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
			'id_ads' => 'Id Ads',
			'fake_link' => 'Fake Link',
			'meta_title' => 'Meta Title',
			'meta_keyword' => 'Meta Keyword',
			'meta_description' => 'Meta Description',
			'id_user' => 'Id User',
			'image' => 'Image',
		);
	}

	/**
	
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		

		$criteria=new CDbCriteria;

		$criteria->compare('id_ads',$this->id_ads);
		$criteria->compare('fake_link',$this->fake_link,true);
		$criteria->compare('meta_title',$this->meta_title,true);
		$criteria->compare('meta_keyword',$this->meta_keyword,true);
		$criteria->compare('meta_description',$this->meta_description,true);
		$criteria->compare('id_user',$this->id_user);
		$criteria->compare('image',$this->image,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 
	 * @param string $className active record class name.
	 * @return AdsBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

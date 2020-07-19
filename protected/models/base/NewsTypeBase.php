<?php

/**
 * This is the model class for table "tbl_news_type".
 *
 * The followings are the available columns in table 'tbl_news_type':
 * @property integer $id_news_type
 * @property string $name
 */
class NewsTypeBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_news_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>200),
			
			array('id_news_type, name', 'safe', 'on'=>'search'),
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
			'id_news_type' => 'Id News Type',
			'name' => 'Name',
		);
	}

	/**
	 
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		
		$criteria=new CDbCriteria;

		$criteria->compare('id_news_type',$this->id_news_type);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 
	 * @param string $className active record class name.
	 * @return NewsTypeBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

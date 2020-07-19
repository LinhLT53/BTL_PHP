<?php

/**

 * @property integer $id_attribute
 * @property integer $id_category
 * @property string $key
 * @property string $value
 */
class AttributeBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_attribute';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		return array(
			array('id_attribute, id_category, key, value', 'required'),
			array('id_attribute, id_category', 'numerical', 'integerOnly'=>true),
			array('key, value', 'length', 'max'=>200),
		
			array('id_attribute, id_category, key, value', 'safe', 'on'=>'search'),
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
			'id_attribute' => 'Id Attribute',
			'id_category' => 'Id Category',
			'key' => 'Key',
			'value' => 'Value',
		);
	}

	/**

	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		

		$criteria=new CDbCriteria;

		$criteria->compare('id_attribute',$this->id_attribute);
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('key',$this->key,true);
		$criteria->compare('value',$this->value,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	
	 * @param string $className active record class name.
	 * @return AttributeBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

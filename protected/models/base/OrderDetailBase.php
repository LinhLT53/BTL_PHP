<?php

/**
 
 * @property integer $id_detail
 * @property integer $id_order
 * @property integer $id_product
 * @property double $price
 * @property integer $quanty
 */
class OrderDetailBase extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_order_detail';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		
		return array(
			array('id_order, id_product, price, quanty', 'required'),
			array('id_order, id_product, quanty', 'numerical', 'integerOnly'=>true),
			array('price', 'numerical'),
			
			array('id_detail, id_order, id_product, price, quanty', 'safe', 'on'=>'search'),
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
			'id_detail' => 'Id Detail',
			'id_order' => 'Id Order',
			'id_product' => 'Id Product',
			'price' => 'Price',
			'quanty' => 'Quanty',
		);
	}

	/**
	
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		
		$criteria=new CDbCriteria;

		$criteria->compare('id_detail',$this->id_detail);
		$criteria->compare('id_order',$this->id_order);
		$criteria->compare('id_product',$this->id_product);
		$criteria->compare('price',$this->price);
		$criteria->compare('quanty',$this->quanty);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 
	 * @param string $className active record class name.
	 * @return OrderDetailBase the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

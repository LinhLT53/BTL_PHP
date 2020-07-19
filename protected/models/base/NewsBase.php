<?php

/**
 * This is the model class for table "tbl_news".
 *
 * The followings are the available columns in table 'tbl_news':
 * @property integer $id_news
 * @property integer $id_news_type
 * @property string $title
 * @property integer $status
 * @property string $description
 * @property string $content
 * @property string $date_add
 * @property string $date_upd
 * @property integer $id_user
 * @property integer $quanty_cmt
 * @property string $image_description
 * @property string $image_content
 * @property integer $ratting
 */
class NewsBase extends CActiveRecord
{
    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'tbl_news';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        
        return array(
            array('title, id_user', 'required'),
            array('id_news_type, status, id_user, quanty_cmt, ratting', 'numerical', 'integerOnly'=>true),
            array('title', 'length', 'max'=>200),
            array('description, content, date_add, date_upd, image_description, image_content', 'safe'),
            
            array('id_news, id_news_type, title, status, description, content, date_add, date_upd, id_user, quanty_cmt, image_description, image_content, ratting', 'safe', 'on'=>'search'),
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
            'id_news' => 'Id News',
            'id_news_type' => 'Id News Type',
            'title' => 'Title',
            'status' => 'Status',
            'description' => 'Description',
            'content' => 'Content',
            'date_add' => 'Date Add',
            'date_upd' => 'Date Upd',
            'id_user' => 'Id User',
            'quanty_cmt' => 'Quanty Cmt',
            'image_description' => 'Image Description',
            'image_content' => 'Image Content',
            'ratting' => 'Ratting',
        );
    }

    /**
     
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        

        $criteria=new CDbCriteria;

        $criteria->compare('id_news',$this->id_news);
        $criteria->compare('id_news_type',$this->id_news_type);
        $criteria->compare('title',$this->title,true);
        $criteria->compare('status',$this->status);
        $criteria->compare('description',$this->description,true);
        $criteria->compare('content',$this->content,true);
        $criteria->compare('date_add',$this->date_add,true);
        $criteria->compare('date_upd',$this->date_upd,true);
        $criteria->compare('id_user',$this->id_user);
        $criteria->compare('quanty_cmt',$this->quanty_cmt);
        $criteria->compare('image_description',$this->image_description,true);
        $criteria->compare('image_content',$this->image_content,true);
        $criteria->compare('ratting',$this->ratting);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }

    /**
     
     * @param string $className active record class name.
     * @return NewsBase the static model class
     */
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
}
<?php

/**
 * This is the model class for table "dveri".
 *
 * The followings are the available columns in table 'dveri':
 * @property integer $id
 * @property string $name
 * @property string $title
 * @property integer $size
 * @property integer $ratio
 * @property integer $new
 * @property integer $price
 */
class Dveri extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Dveri the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'dveri';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, title, size, ratio', 'required'),
			array('size, ratio, new, price', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>256),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, title, size, ratio, new, price', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'title' => 'Title',
			'size' => 'Size',
			'ratio' => 'Ratio',
			'new' => 'New',
			'price' => 'Price',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('size',$this->size);
		$criteria->compare('ratio',$this->ratio);
		$criteria->compare('new',$this->new);
		$criteria->compare('price',$this->price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
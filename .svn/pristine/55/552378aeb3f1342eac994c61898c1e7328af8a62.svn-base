<?php

/**
 * This is the model class for table "affiliate_tracking".
 *
 * The followings are the available columns in table 'affiliate_tracking':
 * @property integer $id
 * @property integer $product_id
 * @property integer $product_details_id
 * @property string $counter
 */
class AffiliateTracking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'affiliate_tracking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, product_details_id, counter', 'required'),
			array('product_id, product_details_id', 'numerical', 'integerOnly'=>true),
			array('counter', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, product_details_id, counter', 'safe', 'on'=>'search'),
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
				'product' => array(self::BELONGS_TO, 'Products', 'product_id'),
				'productDetails' => array(self::BELONGS_TO, 'ProductDetails', 'product_details_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'product_id' => 'Product',
			'product_details_id' => 'Product Details',
			'counter' => 'Counter',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('product_details_id',$this->product_details_id);
		$criteria->compare('counter',$this->counter,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return AffiliateTracking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

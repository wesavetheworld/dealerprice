<?php

/**
 * This is the model class for table "product_details".
 *
 * The followings are the available columns in table 'product_details':
 * @property integer $id
 * @property integer $product_id
 * @property integer $store_id
 * @property string $affiliate_url
 * @property string $mrp
 * @property string $price
 */
class ProductDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, store_id, affiliate_url', 'required'),
			array('product_id, store_id, discount, rating_people', 'numerical', 'integerOnly'=>true),
			array('affiliate_url', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, store_id, affiliate_url, mrp, price, discount, rating, rating_people', 'safe', 'on'=>'search'),
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
				'store' => array(self::BELONGS_TO, 'Stores', 'store_id'),
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
			'store_id' => 'Store',
			'affiliate_url' => 'Affiliate Url',
			'mrp' => 'Mrp',
			'price' => 'Price',
			'discount'=>'Discount',
			'rating'=>'Rating',
			'rating_people'=>'Total People',
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
		$criteria->compare('store_id',$this->store_id);
		$criteria->compare('affiliate_url',$this->affiliate_url,true);
		$criteria->compare('mrp',$this->mrp,true);
		$criteria->compare('price',$this->price,true);
		$criteria->compare('discount',$this->discount,true);
		$criteria->compare('rating',$this->rating,true);
		$criteria->compare('rating_people',$this->rating_people,true);
		
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

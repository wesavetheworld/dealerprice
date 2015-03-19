<?php

/**
 * This is the model class for table "product_reviews".
 *
 * The followings are the available columns in table 'product_reviews':
 * @property integer $review_id
 * @property integer $user_id
 * @property integer $product_id
 * @property string $reviewer_name
 * @property string $review_title
 * @property string $review
 * @property integer $rating
 * @property integer $verified
 */
class ProductReviews extends CActiveRecord
{

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_reviews';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('product_id, reviewer_name, review_title, review, rating', 'required'),
			array('user_id, product_id, rating, posted, verified', 'numerical', 'integerOnly'=>true),
			array('reviewer_name, review_title', 'length', 'max'=>255),
			array('review', 'length', 'max'=>1000),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('review_id, user_id, product_id, reviewer_name, review_title, review, rating, verified', 'safe', 'on'=>'search'),
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
                    'product' => array(self::BELONGS_TO, 'Products', 'id'),
                    'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'review_id' => 'Review',
			'user_id' => 'User',
			'product_id' => 'Product',
			'reviewer_name' => 'Reviewer Name:',
			'review_title' => 'Review Title:',
			'review' => 'Review:',
			'rating' => 'Your Rating:',
			'verified' => 'Verified',
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
                $criteria->condition = 'verified = 0';
		$criteria->compare('review_id',$this->review_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('reviewer_name',$this->reviewer_name,true);
		$criteria->compare('review_title',$this->review_title,true);
		$criteria->compare('review',$this->review,true);
		$criteria->compare('rating',$this->rating);
		$criteria->compare('verified',$this->verified);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductReviews the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

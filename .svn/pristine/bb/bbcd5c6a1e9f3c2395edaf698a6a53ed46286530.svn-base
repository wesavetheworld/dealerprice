<?php

/**
 * This is the model class for table "news_letter".
 *
 * The followings are the available columns in table 'news_letter':
 * @property integer $letter_id
 * @property integer $user_id
 * @property string $send_to
 * @property string $message
 */
class NewsLetter extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'news_letter';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_id, send_to, subject, message', 'required'),
			array('user_id', 'numerical', 'integerOnly'=>true),
			array('send_to', 'length', 'max'=>24),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('letter_id, user_id, send_to, subject, message', 'safe', 'on'=>'search'),
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
			'letter_id' => 'Letter',
			'user_id' => 'User',
			'send_to' => 'Send To',
                        'subject'=>'Subject',
			'message' => 'Message',
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

		$criteria->compare('letter_id',$this->letter_id);
		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('send_to',$this->send_to,true);
                $criteria->compare('subject',$this->subject,true);
		$criteria->compare('message',$this->message,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return NewsLetter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

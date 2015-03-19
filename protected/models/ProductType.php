<?php

/**
 * This is the model class for table "product_type".
 *
 * The followings are the available columns in table 'product_type':
 * @property integer $id
 * @property integer $sub_category_id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property integer $pos
 * @property integer $status
 */
class ProductType extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'product_type';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('sub_category_id, name, url', 'required'),
			array('sub_category_id, status', 'numerical', 'integerOnly'=>true),
			array('name, url', 'length', 'max'=>255),
			array('url', 'customUrlValidate'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, sub_category_id, name, url, description, status', 'safe', 'on'=>'search'),
		);
	}

	public function customUrlValidate($attr, $params)
	{
		$cat = Categories::model()->findByAttributes(array('url'=>$this->url));
		$subcat = SubCategories::model()->findByAttributes(array('url'=>$this->url));
		$brands = Brands::model()->findByAttributes(array('url'=>$this->url));
		$types = ProductType::model()->findByAttributes(array('url'=>$this->url));
		$product = Products::model()->findByAttributes(array('url'=>$this->url));
		if(isset($cat) || isset($subcat) || isset($brands) || (isset($types) && $types->id != $this->id) || isset($product))
			$this->addError($attr, $this->url.'" has already been taken.');
	}
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
				'typessubCategory' => array(self::BELONGS_TO, 'SubCategories', 'sub_category_id'),
				'subCategory' => array(self::BELONGS_TO, 'SubCategories', 'sub_category_id'),
				'products' => array(self::HAS_MANY, 'Products', 'type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'sub_category_id' => 'Sub Category',
			'name' => 'Name',
			'url' => 'Url',
			'description' => 'Description',
			'status' => 'Status',
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
		$criteria->compare('sub_category_id',$this->sub_category_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ProductType the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

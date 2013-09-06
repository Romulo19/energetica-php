<?php

/**
 * This is the model class for table "tipo_actividad".
 *
 * The followings are the available columns in table 'tipo_actividad':
 * @property integer $id
 * @property string $nombre
 * @property double $iluminancia_a
 * @property double $iluminancia_c
 *
 * The followings are the available model relations:
 * @property Areas[] $areases
 */
class Tipo_actividad extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tipo_actividad the static model class
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
		return 'tipo_actividad';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iluminancia_a, iluminancia_c', 'numerical'),
			array('nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nombre, iluminancia_a, iluminancia_c', 'safe', 'on'=>'search'),
			array('nombre, iluminancia_a, iluminancia_c', 'required'),
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
			'areases' => array(self::HAS_MANY, 'Areas', 'tipo_actividad_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'iluminancia_a' => 'Iluminancia A',
			'iluminancia_c' => 'Iluminancia C',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('iluminancia_a',$this->iluminancia_a);
		$criteria->compare('iluminancia_c',$this->iluminancia_c);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
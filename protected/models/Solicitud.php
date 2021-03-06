<?php

/**
 * This is the model class for table "solicitud".
 *
 * The followings are the available columns in table 'solicitud':
 * @property integer $id
 * @property string $fecha_salida
 * @property string $fecha_llegada
 * @property string $hora_salida
 * @property string $hora_llegada
 * @property string $lugar_encuentro
 * @property integer $id_destino
 * @property integer $id_estatus_solicitud
 * @property string $solicitante
 *
 * The followings are the available model relations:
 * @property Destino $idDestino
 * @property EstatusSolicitud $idEstatusSolicitud
 * @property RutaAsignada[] $rutaAsignadas
 */
class Solicitud extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_salida, fecha_llegada, id_destino, id_estatus_solicitud, solicitante', 'required'),
			array('id_destino, id_estatus_solicitud', 'numerical', 'integerOnly'=>true),
			array('solicitante', 'length', 'max'=>256),
			array('hora_salida, hora_llegada, lugar_encuentro', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fecha_salida, fecha_llegada, hora_salida, hora_llegada, lugar_encuentro, id_destino, id_estatus_solicitud, solicitante', 'safe', 'on'=>'search'),
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
			'idDestino' => array(self::BELONGS_TO, 'Destino', 'id_destino'),
			'idEstatusSolicitud' => array(self::BELONGS_TO, 'EstatusSolicitud', 'id_estatus_solicitud'),
			'rutaAsignadas' => array(self::HAS_MANY, 'RutaAsignada', 'id_solicitud'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Identificador único de la solicitud',
			'fecha_salida' => 'Fecha probable de salida según solicitud',
			'fecha_llegada' => 'Fecha probable de salida según solicitud',
			'hora_salida' => 'Hora de salida estimada según solicitud',
			'hora_llegada' => 'Hora de llegada según solicitud',
			'lugar_encuentro' => 'Lugar de encuentro de los beneficiarios del servicio de ruta para la salida',
			'id_destino' => 'Cláve foránea de la relación con la tabla destinos',
			'id_estatus_solicitud' => 'Cláve foránea de la relación con la tabla estatus_solicitud',
			'solicitante' => 'Nombre de la persona o departamento solicitante',
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
		$criteria->compare('fecha_salida',$this->fecha_salida,true);
		$criteria->compare('fecha_llegada',$this->fecha_llegada,true);
		$criteria->compare('hora_salida',$this->hora_salida,true);
		$criteria->compare('hora_llegada',$this->hora_llegada,true);
		$criteria->compare('lugar_encuentro',$this->lugar_encuentro,true);
		$criteria->compare('id_destino',$this->id_destino);
		$criteria->compare('id_estatus_solicitud',$this->id_estatus_solicitud);
		$criteria->compare('solicitante',$this->solicitante,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Solicitud the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

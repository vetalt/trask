<?php

/**
 * This is the model class for table "tasks".
 *
 * The followings are the available columns in table 'tasks':
 * @property string $id
 * @property string $title
 * @property string $description
 * @property integer $status_id
 * @property string $user_id
 *
 * The followings are the available model relations:
 * @property TaskStatuses $status
 * @property Users $user
 */
class Tasks extends CActiveRecord {
    
    public $userLogin;
    public $statusId;

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return 'tasks';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title, description, status_id, user_id', 'required'),
            array('status_id', 'numerical', 'integerOnly' => true),
            array('title', 'length', 'max' => 255),
            array('user_id', 'length', 'max' => 10),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, title, description, status_id, user_id, userLogin, statusId', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'status' => array(self::BELONGS_TO, 'TaskStatuses', 'status_id'),
            'user' => array(self::BELONGS_TO, 'Users', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'status_id' => 'Status',
//            'status.title' => 'Status',
            'user_id' => 'User',
//            'user.login' => 'User',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('t.id', $this->id, true);
        $criteria->compare('t.title', $this->title, true);
        $criteria->compare('t.description', $this->description, true);
        $criteria->compare('status_id', $this->status_id);
        $criteria->compare('user_id', $this->user_id, true);
        
        $criteria->with = array('user', 'status');
        $criteria->compare('user.login', $this->userLogin, true);
        $criteria->compare('status.id', $this->statusId, true);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'sort' => array(
                'attributes' => array(
                    'userLogin' => array(
                        'asc' => 'user.login',
                        'desc' => 'user.login DESC',
                    ),
                    'statusId' => array(
                        'asc' => 'status.title',
                        'desc' => 'status.title DESC',
                    ),
                    '*',
                ),
            ),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Tasks the static model class
     */
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

}

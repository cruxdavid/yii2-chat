<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "WHITEBOARD".
 *
 * @property integer $WHITEBOARD_ID
 * @property string $USER_NAME
 * @property string $MESSAGE
 */
class WhiteBoard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'WHITEBOARD';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['USER_NAME', 'MESSAGE'], 'required'],
            [['MESSAGE'], 'string'],
            [['USER_NAME'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'WHITEBOARD_ID' => 'Whiteboard  ID',
            'USER_NAME' => 'User  Name',
            'MESSAGE' => 'Message',
        ];
    }
}

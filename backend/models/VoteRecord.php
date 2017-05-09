<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%vote_record}}".
 *
 * @property integer $id
 * @property string $user_key
 * @property integer $sigeup_id
 * @property integer $addtime
 * @property string $ip
 * @property string $device
 * @property string $openid
 */
class VoteRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%vote_record}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_key'], 'required'],
            [['sigeup_id', 'addtime'], 'integer'],
            [['user_key', 'openid'], 'string', 'max' => 32],
            [['ip'], 'string', 'max' => 15],
            [['device'], 'string', 'max' => 256],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_key' => 'User Key',
            'sigeup_id' => 'Sigeup ID',
            'addtime' => 'Addtime',
            'ip' => 'Ip',
            'device' => 'Device',
            'openid' => 'Openid',
        ];
    }
}

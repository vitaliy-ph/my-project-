<?php

namespace app\models\entities;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $login
 * @property string $password
 * @property bool $is_active
 * @property string $created_at
 */
class UserEntity extends ActiveRecord
{
    public static function tableName(): string
    {
        return 'users';
    }

    public function rules(): array
    {
        return [
            [['username', 'login', 'password'], 'required'],
            [['is_active'], 'boolean'],
            [['created_at'], 'safe'],
            [['username', 'login'], 'string', 'min' => 3, 'max' => 100],
            [['password'], 'string', 'min' => 5, 'max' => 255],
            [['login'], 'unique'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'login' => Yii::t('app', 'Login'),
            'password' => Yii::t('app', 'Password'),
            'is_active' => Yii::t('app', 'Is Active'),
            'created_at' => Yii::t('app', 'Created At'),
        ];
    }
}

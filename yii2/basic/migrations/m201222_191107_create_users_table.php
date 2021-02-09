<?php

use yii\db\Migration;
use \yii\db\Expression;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m201222_191107_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(100)->notNull(),
            'login' => $this->string(100)->notNull()->unique(),
            'password' => $this->string(255)->notNull(),
            'is_active' => $this->boolean()->notNull()->defaultValue(false),
            'created_at' => $this->timestamp()->notNull()->defaultValue(new Expression('CURRENT_TIMESTAMP')),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}

<?php

use yii\db\Migration;

/**
 * Handles adding created_at to table `user`.
 */
class m171218_131321_add_created_at_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'created_at', $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'));
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'created_at');
    }
}

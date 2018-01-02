<?php

use yii\db\Migration;

/**
 * Handles adding status_activation to table `user`.
 */
class m171215_115007_add_status_activation_columns_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'status', $this->integer(1)->defaultValue('0'));
        $this->addColumn('user', 'activation', $this->string(255)->null());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'status');
        $this->dropColumn('user', 'activation');
    }
}

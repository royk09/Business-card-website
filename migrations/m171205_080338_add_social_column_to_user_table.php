<?php

use yii\db\Migration;

/**
 * Handles adding social to table `user`.
 */
class m171205_080338_add_social_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'social', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'social');
    }
}

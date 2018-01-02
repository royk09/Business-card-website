<?php

use yii\db\Migration;

/**
 * Handles adding date to table `comment`.
 */
class m171206_143734_add_date_column_to_comment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('comment', 'date', $this->datetime());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('comment', 'date');
    }
}

<?php

use yii\db\Migration;

/**
 * Class m210505_053911_test
 */
class m210505_053911_test extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->execute("
			CREATE TABLE IF NOT EXISTS `test` (
			  `id` int(11) NOT NULL AUTO_INCREMENT,
			  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
			  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
			  `fullName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
			  `Tel_Number` int(11) DEFAULT NULL,
			  PRIMARY KEY (`id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
			
			INSERT INTO `test` (`id`, `email`, `user_name`, `fullName`, `Tel_Number`) VALUES (NULL, 'test@sample.com', 'NabiKAZ', 'Nabi K.A.Z.', '0916');
		");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210505_053911_test cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210505_053911_test cannot be reverted.\n";

        return false;
    }
    */
}

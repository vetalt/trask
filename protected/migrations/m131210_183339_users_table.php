<?php

class m131210_183339_users_table extends CDbMigration {

    public function up() {
        $this->execute("
            CREATE TABLE `users` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `login` varchar(45) NOT NULL,
              `pass` varchar(255) NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE KEY `login_UNIQUE` (`login`)
            ) ENGINE=InnoDB
            ");
    }

    public function down() {
        echo "m131210_183339_users_table does not support migration down.\n";
        return false;
    }

}
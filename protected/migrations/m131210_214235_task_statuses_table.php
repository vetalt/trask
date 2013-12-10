<?php

class m131210_214235_task_statuses_table extends CDbMigration {

    public function up() {
        $this->execute("
            CREATE TABLE `task_statuses` (
              `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
              `title` varchar(45) NOT NULL,
              PRIMARY KEY (`id`),
              UNIQUE KEY `title_UNIQUE` (`title`)
            ) ENGINE=InnoDB;
            ");
        $this->execute("INSERT INTO `task_statuses` (`title`) VALUES ('Accepted'),('Finished'),('New'),('Rejected'),('Started');");
    }

    public function down() {
        echo "m131210_214235_task_statuses_table does not support migration down.\n";
        return false;
    }

}
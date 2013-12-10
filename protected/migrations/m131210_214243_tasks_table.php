<?php

class m131210_214243_tasks_table extends CDbMigration {

    public function up() {
        $this->execute("
            CREATE TABLE `tasks` (
              `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
              `title` varchar(255) NOT NULL,
              `description` text NOT NULL,
              `status_id` smallint(5) unsigned NOT NULL COMMENT 'task_statuses.id',
              `user_id` int(10) unsigned NOT NULL COMMENT 'users.id',
              PRIMARY KEY (`id`),
              KEY `fk_tasks_1_idx` (`status_id`),
              KEY `fk_tasks_2_idx` (`user_id`),
              CONSTRAINT `fk_tasks_1` FOREIGN KEY (`status_id`) REFERENCES `task_statuses` (`id`),
              CONSTRAINT `fk_tasks_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
            ) ENGINE=InnoDB;
            ");
    }

    public function down() {
        echo "m131210_214243_tasks_table does not support migration down.\n";
        return false;
    }

}
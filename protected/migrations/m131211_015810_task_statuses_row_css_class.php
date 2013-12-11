<?php

class m131211_015810_task_statuses_row_css_class extends CDbMigration {

    public function up() {
        $this->execute("ALTER TABLE `task_statuses` ADD COLUMN `row_css_class` VARCHAR(45) NOT NULL;");
        $this->execute("UPDATE `task_statuses` SET `row_css_class`='warning' WHERE `title`='Accepted';");
        $this->execute("UPDATE `task_statuses` SET `row_css_class`='success' WHERE `title`='Finished';");
        $this->execute("UPDATE `task_statuses` SET `row_css_class`='error' WHERE `title`='Rejected';");
        $this->execute("UPDATE `task_statuses` SET `row_css_class`='info' WHERE `title`='Started';");
    }

    public function down() {
        echo "m131211_015810_task_statuses_row_css_class does not support migration down.\n";
        return false;
    }

}
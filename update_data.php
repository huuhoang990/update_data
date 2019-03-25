<?php

class migration_member extends CDbMigration
{
	public function up() {
        try {
            $sql = "ALTER TABLE table_member ADD phone11number varchar(20) NULL";
            Yii::app()->db->createCommand($sql)->execute();

            $sql2 = "UPDATE table_member
                     SET     phone11number = phone
                     WHERE   length(trim(phone)) = 11
                     AND     SUBSTRING(trim(phone), 1, 3) in ('012', '016', '018')
                ";
            Yii::app()->db->createCommand($sql2)->execute();

            $sql3 = "UPDATE  table_member
                     SET     phone = CASE
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0162' THEN
                                             concat('032', 
                                                    SUBSTRING(trim(phone), 5)
                                                 )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0163' THEN
                                             concat('033',
                                                    SUBSTRING(trim(phone), 5)
                                                    )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0164' THEN
                                             concat('034',
                                                     SUBSTRING(trim(phone), 5)
                                                     )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0165' THEN
                                             concat('035',
                                                    SUBSTRING(trim(phone), 5)
                                                    )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0166' THEN
                                             concat('036',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0167' THEN
                                             concat('037',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0168' THEN
                                             concat('038',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0169' THEN
                                             concat('039',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0120' THEN
                                             concat('070',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0121' THEN
                                             concat('079',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0122' THEN
                                             concat('077',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0126' THEN
                                             concat('076',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0128' THEN
                                             concat('078',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0124' THEN
                                             concat('084',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0123' THEN
                                             concat('083',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0125' THEN
                                             concat('085',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0127' THEN
                                             concat('081',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0129' THEN
                                             concat('082',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0188' THEN
                                             concat('058',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0186' THEN
                                             concat('056',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         WHEN SUBSTRING(trim(phone), 1, 4) = '0199' THEN
                                             concat('059',
                                                    SUBSTRING(trim(phone), 5)
                                                   )
                                         ELSE phone
                                     END
                     WHERE   length(trim(phone)) = 11
                     AND     SUBSTRING(trim(phone), 1, 3) IN ('012', '016', '018')
                ";
            Yii::app()->db->createCommand($sql3)->execute();
        } catch ( Exception $e ) {
            echo "error";
        }
	}

	public function down()
	{
		echo "migration_survey_panelis does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
ALTER TABLE `members`
	ADD COLUMN `status` VARCHAR(20) NOT NULL AFTER `password`;
ALTER TABLE `schedule`
	ADD COLUMN `code` VARCHAR(20) NOT NULL COMMENT 'confirmation code' AFTER `Number`;
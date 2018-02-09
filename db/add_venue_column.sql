ALTER TABLE `schedule` ADD `venue` TEXT NOT NULL AFTER `location`;
ALTER TABLE `schedule` ADD `sched_time` VARCHAR(20) NOT NULL AFTER `venue`;
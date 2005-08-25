<?php
class Elite_Vafwheeladapter_Model_Schema_Generator extends VF_Schema_Generator
{
    function generator()
    {
        return 'CREATE TABLE IF NOT EXISTS `elite_product_wheeladapter` (
          `entity_id` int(50) NOT NULL,
          `lug_count` int(1) NOT NULL,
          `bolt_distance` decimal(4,1) NOT NULL COMMENT \'bolt distance in mm\',
          PRIMARY KEY (`entity_id`,`lug_count`,`bolt_distance`),
          KEY `entity_id` (`entity_id`)
        ) ENGINE=InnoDB;
        '; 
    }
}
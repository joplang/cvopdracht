<?php

return [
    'table_name' => 'educations',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `educations`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `educations` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int NOT NULL,
        `start` date NOT NULL,
        `end` date DEFAULT NULL,
        `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `info` text,
        `organisation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;",

    'relations' => [
        'ALTER TABLE `educations` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `educations` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `educations` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `educations` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'start'         => '2021-08-11',
                'end'           => '2021-08-27',
                'name'          => 'Zeevaartschool',
                'info'          => 'Hier heb ik mijn matrozenpakje verdient',
                'organisation'  => 'Rijksuniversiteit Duckstad',
                'user_id'       =>  1,
                'created'       =>  date('Y-m-d H:i:s'),
                'created_by'    =>  1,
            ],
            [
                'start'         => '2021-08-11',
                'end'           => '2021-08-27',
                'name'          => 'Psychiatrie',
                'info'          => 'Hier had Pieter zijn baan',
                'organisation'  => 'Pieter Baan Centrum',
                'user_id'       =>  2,
                'created'       =>  date('Y-m-d H:i:s'),
                'created_by'    =>  1,
            ],
            [
                'start'         => '2021-08-11',
                'end'           => '2021-08-27',
                'name'          => 'Cursus Kaasmaken',
                'info'          => 'Ik had er wel kaas van gegeten',
                'organisation'  => 'De Muishoudschool',
                'user_id'       =>  3,
                'created'       =>  date('Y-m-d H:i:s'),
                'created_by'    =>  1,
            ],

        ),
    ],
];

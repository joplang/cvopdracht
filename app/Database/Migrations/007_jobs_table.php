<?php

return [
    'table_name' => 'jobs',

    'drop_scheme' => "SET FOREIGN_KEY_CHECKS = 0; DROP TABLE IF EXISTS `jobs`; SET FOREIGN_KEY_CHECKS = 1",

    'scheme' => "CREATE TABLE IF NOT EXISTS `jobs` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `user_id` int NOT NULL,
        `start` date NOT NULL,
        `end` date DEFAULT NULL,
        `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
        `created` timestamp NOT NULL,
        `updated` timestamp DEFAULT CURRENT_TIMESTAMP,
        `deleted` timestamp DEFAULT NULL,
        `created_by` int(11) NOT NULL,
        `updated_by` int(11),
        `deleted_by` int(11),
        PRIMARY KEY (`id`)
      ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;",

    'relations' => [
        'ALTER TABLE `jobs` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `jobs` ADD FOREIGN KEY (`created_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `jobs` ADD FOREIGN KEY (`updated_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
        'ALTER TABLE `jobs` ADD FOREIGN KEY (`deleted_by`) REFERENCES `users`(`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;',
    ],

    'seeder' => [
        'type' => 'array',
        'data' => array(
            [
                'start'         => '2021-08-11',
                'end'           => '2021-08-27',
                'name'          => 'Matroosje',
                'info'          => 'In een duikboot',
                'location'      => 'De Marine',
                'user_id'       =>  1,
                'created'       =>  date('Y-m-d H:i:s'),
                'created_by'    =>  1,

            ],
            [
                'start'         => '2021-08-11',
                'end'           => '2021-08-27',
                'name'          => 'Zeehondenverzorger',
                'info'          => 'In het beroemde zeehondencentrum',
                'location'      => 'Pieterburen',
                'user_id'       =>  2,
                'created'       =>  date('Y-m-d H:i:s'),
                'created_by'    =>  1,

            ],
            [
                'start'         => '2021-08-11',
                'end'           => '2021-08-27',
                'name'          => 'Koning',
                'info'          => 'Argh, het universum valt uit elkaar',
                'location'      => 'Disneyland',
                'user_id'       =>  3,
                'created'       =>  date('Y-m-d H:i:s'),
                'created_by'    =>  1,

            ],

        ),
    ],
];

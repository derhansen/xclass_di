<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'xclass DI test',
    'description' => 'Test Extension to evaluate DI when xclassing an extbase controller',
    'category' => 'plugin',
    'author' => 'Torben Hansen',
    'author_email' => 'derhansen@gmail.com',
    'state' => 'alpha',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.1.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

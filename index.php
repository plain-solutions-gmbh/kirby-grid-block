<?php

Kirby::plugin('microman/grid-block', [
    'blueprints' => [
        'blocks/grid' => __DIR__ . '/blueprints/blocks/grid.yml'
    ],
    'snippets' => [
        'blocks/grid' => __DIR__ . '/snippets/blocks/grid.php'
    ]
]);

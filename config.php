<?php

return [
    'production' => false,
    'baseUrl' => '',
    'event_name' => 'PHPeste',
    'event_ticket' => 'https://loja.phpeste.net',
    'event_location' => 'SEBRAE - Natal/RN',
    'event_period' => '2, 3 e 4 de outubro',
    'event_contact_email' => 'coordenacao@phprn.org',
    'submit_link_lecture' => 'https://speakerfight.com/events/call4papers-phpeste-2019-recifepe/',
    'event_facebook' => '',
    'event_twitter' => 'https://twitter.com/phpestene',
    'event_instagram' => 'https://www.instagram.com/phpeste/',
    'event_vimeo' => '',
    'categories' => [
        'diamond' => [
            'description' => 'Diamante',
        ],
        'gold' => [
            'description' => 'Ouro',
        ],
        'support' => [
            'description' => 'Apoio',
        ],
    ],
    'collections' => [
        'organizers' => [
            'path' => 'organizers',
            'sort' => 'first_name',
        ],
        'sponsors' => [
            'path' => 'sponsors',
            'sort' => 'name',
        ],
        'speakers' => [
            'path' => 'speakers',
            'sort' => 'first_name',
        ],
        'schedules' => [
            'path' => 'programming',
            'sort' => 'speaker',
        ]
    ],
    'selected' => function ($page, $section) {
        return $page->getPath() === $section || str_contains($page->getPath(), $section) ? 'active' : '';
    },
];

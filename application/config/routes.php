<?php

return [

	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'account/login' => [
		'controller' => 'account',   
		'action' => 'login',
	],

	'account/register' => [
		'controller' => 'account',   
		'action' => 'register',
	],

    'weather/getweather' => [
        'controller' => 'weather',
        'action' => 'getweather',
    ],

    'feedback/send' => [
        'controller' => 'feedback',
        'action' => 'send',
    ],

    'feedback/list' => [
        'controller' => 'feedback',
        'action' => 'list',
    ],
];
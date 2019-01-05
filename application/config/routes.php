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

    'weather/get-weather' => [
        'controller' => 'weather',
        'action' => 'getweather',
    ],

    'feedback/send-feedback' => [
        'controller' => 'feedback',
        'action' => 'send',
    ],

    'feedback/feedback-list' => [
        'controller' => 'feedback',
        'action' => 'list',
    ],
];
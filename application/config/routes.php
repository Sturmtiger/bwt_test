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

//    'account/is-authorized' => [
//        'controller' => 'account',
//        'action' => 'isAuthorized',
//    ],

	'account/register' => [
		'controller' => 'account',   
		'action' => 'register',
	],

    //    'account/is-registered' => [
//        'controller' => 'account',
//        'action' => 'isRegistered',
//    ],

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
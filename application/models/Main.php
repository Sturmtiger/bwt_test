<?php

namespace application\models;

use application\core\Model; 

class Main extends Model
{
	public function __construct()
    {
        parent::__construct();
		echo 'The Main Model is working';
	}
}
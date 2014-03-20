<?php

return array(
	'default' => 'pgsql',
	'connections' => array(
      'pgsql' => array(
			'driver'   => 'pgsql',
			'host'     => 'localhost',
			'database' => 'local',
			'username' => 'local',
			'password' => 'local',
			'charset'  => 'utf8',
			'prefix'   => '',
			'schema'   => 'public',
		)
	)
);

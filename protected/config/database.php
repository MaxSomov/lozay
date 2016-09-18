<?php

// This is the database connection configuration.
return array(
  'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
  // uncomment the following lines to use a MySQL database

  'connectionString' => 'mysql:host=mysql87.1gb.ru;dbname=gb_lozay15',
  'emulatePrepare' => true,
  'username' => 'gb_lozay15',
  'password' => 'f7aa63e8a',
  'charset' => 'utf8',

);
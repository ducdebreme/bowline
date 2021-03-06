<?php
/**
 * @file
 * Docker specific configuration.
 */

// Drupal 6 connection string.
$db_url = 'mysql://dbuser:dbpass@dbhost/drupal';
// Drupal 7 db settings.
$databases['default']['default'] = array(
  'driver' => 'mysql',
  'database' => $_ENV['MYSQL_DATABASE'],
  'username' => $_ENV['MYSQL_USER'],
  'password' => $_ENV['MYSQL_PASSWORD'],
  'host' => 'dbhost',
);
// Set the host to the proxied container IP.
// $base_url = 'http://projectname';
// Set file system paths.
$conf['file_private_path'] = '/var/www/files-private';
$conf['file_public_path'] = 'sites/default/files';
$conf['file_temporary_path'] = '/tmp';

<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('DATABASE_TYPE');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv('DATABASE_HOST');
$CFG->dbname    = getenv('DATABASE_NAME');
$CFG->dbuser    = getenv('DATABASE_USER');
$CFG->dbpass    = getenv('DATABASE_PASSWORD');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

//$CFG->wwwroot   = getenv('WWWROOT');
//$CFG->dataroot  = getenv('DATAROOT');
$CFG->admin     = 'admin';
$CFG->DATABASE_TYPE = 'pgsql'
$CFG->DATABASE_HOST = 'ec2-3-222-150-253.compute-1.amazonaws.com';
$CFG->DATABASE_PORT = '5432';
$CFG->DATABASE_NAME = 'ddgl57cd4bkec2';
$CFG->DATABASE_USER = 'oseeusnokxfnhb';
$CFG->DATABASE_PASSWORD = '41c82a29bcd18a78fc1e985fc4d1950d536108ef905cf02d2c2647ffa59d9cd8';
$CFG->DATAROOT = 'tmp';
$CFG->WWWROOT = 'http://tbg-moodle.herokuapp.com/';
         


$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

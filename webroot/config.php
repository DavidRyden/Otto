<?php
/**
 * Config-file for OTTO. Change settings here to affect installation.
 *
 */

/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly


/**
 * Define OTTO paths.
 *
 */
define('OTTO_INSTALL_PATH', __DIR__ . '/..');
define('OTTO_THEME_PATH', OTTO_INSTALL_PATH . '/theme/render.php');


/**
 * Include bootstrapping functions.
 *
 */
include(OTTO_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Start the session.
 *

session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 */

/**
 * Create the OTTO variable.
 *
 */
$otto = array();


/**
 * Site wide settings.
 *
 */
$otto['lang']         = 'sv';
$otto['title_append'] = ' | OTTO en webbtemplate';

$otto['header'] = <<<EOD
<img class='sitelogo' src='img/rrlogga.png' alt='Logo'/>
<span class='sitetitle'>Rydéns webbplats</span>
<span class='siteslogan'>Upplärning pågår</span>
EOD;

$otto['byline'] = <<<EOD
<footer class="byline">

<hr>
  <p>David lär sig för fullt om PHP-kodande </p>

</footer>
EOD;


$otto['footer'] = <<<EOD
<footer><span class='sitefooter'> Av David Rydén |  <a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

/**
 * The navbar
 *
 */
//$otto['navbar'] = null; // To skip the navbar
$otto['navbar'] = array(
  'class' => 'navbar',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php', 'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',      'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);



/**
 * Theme related settings.
 *
 */
//$otto['stylesheet'] = 'css/style.css';
$otto['stylesheets'] = array('css/style.css');
$otto['favicon']    = 'favicon.ico';



/**
 * Settings for JavaScript.
 *
 */
$otto['modernizr'] = 'js/modernizr.js';
$otto['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$otto['jquery'] = null; // To disable jQuery
$otto['javascript_include'] = array();
//$otto['javascript_include'] = array('js/main.js'); // To add extra javascript files



/**
 * Google analytics.
 *
 */
$otto['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics

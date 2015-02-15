<?php 
/**
 * This is a Otto pagecontroller.
 *
 */
// Include the essential config-file which also creates the $otto variable with its defaults.
include(__DIR__.'/config.php'); 


// Add style for csource
$otto['stylesheets'][] = 'css/source.css';


// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));


// Do it and store it all in variables in the Otto container.
$otto['title'] = "Visa källkod";

$otto['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of Otto.
include(OTTO_THEME_PATH);
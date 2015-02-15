<?php 
/**
 * This is a Otto pagecontroller.
 *
 */
// Include the essential config-file which also creates the $otto variable with its defaults.
include(__DIR__.'/config.php'); 



// Define what to include to make the plugin to work
$otto['stylesheets'][]        = 'css/slideshow.css';
$otto['jquery']               = true;
$otto['javascript_include'][] = 'js/slideshow.js';


// Do it and store it all in variables in the Otto container.
$otto['title'] = "Om mig";

$otto['main'] = <<<EOD
<img class="right" style="float:right" src="img/me.jpg" alt="Bild på David">

<article class="readable" style="width: 60%">
<h1>Om Mig</h1>


<p>Hej! </p>



<p>
Mitt namn är David Rydén och för tillfället studerar jag master i Nationalekonomi. Jag har hållit på en hel del med statistisk programmering och det var där som jag fick ett stort intresse för programmering i allmänhet. Jag ser verkligen framemot denna kurs, med kombinationen statistik och webprogrammering hoppas jag kunna skapa en hel del finurliga hemsidor i framtiden. Särskilt som SCB nyligen släppt ett API!

</p>


<p>Född och uppväxt utanför Stockholm och har precis flyttat tillbaka till staden efter en mycket trevlig tid då jag arbetade i Örebro.
</p>




</article>

{$otto['byline']}

EOD;


// Finally, leave it all to the rendering phase of Otto.
include(OTTO_THEME_PATH);

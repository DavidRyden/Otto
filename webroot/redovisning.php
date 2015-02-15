<?php 
/**
 * This is a Otto pagecontroller.
 *
 */
// Include the essential config-file which also creates the $otto variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Otto container.
$otto['title'] = "Redovisning";

$otto['main'] = <<<EOD
<article class="readable">

<article style="padding-bottom:100px">

<h1>Redovisning av kursmomenten</h1>

<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>

<p> Puh! Efter lång väntan på att bli registrerad på denna kursen, blev det till att göra moment 1 på en vecka.</p>

<p>Det är kul att fortsätta resan efter grundkursen (htmlphp), och det var bra med repetition i PHP-guiden. Det var mer som fastnade vid denna genomgång, om framförallt cookies och funktioner.</p>

<p> För min del fick mallen heta Otto, efter min fina katt! </p>

<p>Att lära sig om webbmallar är precis vad jag behöver just nu. Efter den förra kursen började jag på en egen hemsida och även en till en vän. Dessa webbmalls-frågor uppkom direkt, hur vill jag ordna det hela så att jag kan återanvända det igen och igen?</p>

<p>ANAX har en värdefull och genomtänkt struktur. Det här kommer jag ha stor nytta av! Det är även kul att lära sig om .htaccess-filer, vilka jag sett utan men aldrig vetat dess syfte, nyttigt att lära sig. sitemap.xml likaså, det var intressant att veta att den skapas för sökmotorer.</p>

<p>Gick igenom Git och Github guiden. Har varit inne ett par gånger på Github, men inte riktigt förstått hur det hänger samman. Ofta sett koden för hur man clonar projekt osv. men har inte förstått vilket program det handlat om! Det är självklart när man väl vet om det, men den enkla förklaringen till hur Git och Github hänger ihop och denna korta guiden gav mig väldigt matnyttig information!</p>

<p>Den dynamiska menyn var smidig och bra, och betydligt snyggare kod än i grundkursen.</p>

<p> Mycket som känns igen från förra kursen, även source. Men här implementerade jag den som en modul enligt Mikaels anvisningar. </p>

<p> Jag skaffade en Github-profil, men tyckte det var överflödigt att ladda upp en mall som inte är min. Github kommer jag dock lära mig under kursens gång! </p>


<p> Jag använder vanligtvis Windows 7 med Firefox. Skriver i notepad++. Använder mig av XAMPP lokalt och kopplar upp mig mot student-servern med filezilla via sftp-adressen. </p>






 </article>
<h2>Kmom02: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom03: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom04: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom05: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom06: ...</h2>

<p>Redovisningstext...</p>


<h2>Kmom07/10: ...</h2>

<p>Redovisningstext...</p>


{$otto['byline']}

</article>

EOD;


// Finally, leave it all to the rendering phase of Otto.
include(OTTO_THEME_PATH);
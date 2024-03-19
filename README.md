# student
Bedoeld voor P3 en als start P7
# aantekeningen  BkD:
Classes
Persoon.php bevat eigenlijk studentgegevens. Die zou je samen kunnen vatten denk ik in Student.php.
Gebruiker.php bevat een update die m.i. erg gevaarlijk is. Update van $rol met ww. dat zou inhouden dat als je die uitvoert, iedereen met die rol hetzelfde ww heeft. Ik vermoed dat deze class niet is afgemaakt?
# inlog.php:
PDO gebruikt, maar ik zou daar verwachten dat je gebruik zou maken van de class gebruiker. Zie ik niet terug. Klopt dat?
# studenten.php:
Dit bestand zou ik overigens in de 'root' zetten. kan wel zoals je dat nu doet, maar zorg dat als iemand de url naar je website intypt, dat je ergens terecht komt. In de map 'student' staat zelfs geen index.html. Zelf zou ik zorgen voor een index.php die er voor zorgt dat je op de inlogpagina komt. (in deze situatie) Zou je een openbare webpagina hebben, dan zorg je natuurlijk dat je daarop terecht komt.
resetwachtwoord: zit erin.  OOP gebruikt, netjes! Alleen gaat Setwachtwoord($rol, $hash) volgens mij niet goed…
$qry_SetWachtwoord = "UPDATE 
            gebruiker
            SET wachtwoord='$wachtwoord'
            WHERE rol = '$rol'";

Toch??
# Recaptcha: 
Heb je ingebouwd zie ik. Je include 'function/Recaptcha.php'. Op zich goed gedaan. Voor de logica zou ik dan Reacaptcha.php in een map 'inc' of 'include' zetten. De map 'function' suggereert dat het om een zelfgemaakte functie gaat. In 'view' kan natuurlijk ook.

Algemeen: goed bezig geweest. Dat merk ik ook aan je betrokkenheid in de les. Hopenlijk draagt bovenstaand 'commentaar' bij aan een beter resultaat tijdens project.
BkD

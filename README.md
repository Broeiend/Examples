Mijn Workflow:
========


In het magazine BROEIEND staat het e.e.a. over mijn workflow. Het is een soort van handleiding die illustreert hoe ik bovenstaande code gebruik voor verschillende projecten. Hieronder een samenvatting van de workflow:


<strong>Het photoshop bestand koppelen aan het programma <a href="http://macrabbit.com/slicy/" title="Slicy">slicy</a></strong>

In dit programma kan je o.a. door de naamgeving van mappen en layers een naam geven waardoor het geëxporteerd kan worden als .png of .jpg. Hierdoor zijn alle afbeeldingen en bijvoorbeeld icons uit het bestand, gekoppeld aan die in je lokale export "../images/" map. Mocht er een wijziging plaatsvinden dan wordt het automatisch geüpdatet. 
 
<strong>Instellen programmatuur</strong>

Als alle afbeeldingen klaar staan kan er begonnen worden aan de html. Afhankelijk van het type project doe ik dit lokaal, via xampp en sublime text editor, of extern op een development omgeving. In het laatste geval gebruik ik de IDE genaamd <a href="http://www.jetbrains.com/phpstorm/" title="Php storm">phpstorm</a> om een koppeling te maken tussen ftp en lokaal. Om te zorgen dat alle leden van het team met de juiste versie zitten te werken koppel ik binnen deze IDE de lokale versie aan een versie beheer systeem zoals sub-versions. 

<strong>Coderen</strong>

Door optimaal gebruik te maken van de semantische waarde die html 5 elementen met zich mee brengen krijgt de back-end developer volledige flexibiliteit. Zo kan er door de geneste hiërarchie gemakkelijk extra blokken aangemaakt worden en krijgen deze automatisch de juiste waarden met zich mee. Een simpel maar concreet voorbeeld:

```
<section>
     <p>Deze tekst heeft een bepaalde opmaak wat op moet vallen. Bijvoorbeeld een grotere font-grootte.</p>
     <article>
          <p>Deze p tag valt binnen een article, en zal dus eerder bedoeld zijn voor uitgebreidere teksten. Het zal dus minder op moeten vallen dan een p direct binnen een section.</p>
     </article>
     <article>
           <p>Deze p tag valt binnen een article, en zal dus eerder bedoeld zijn voor uitgebreidere teksten. Het zal dus minder op moeten vallen dan een p direct binnen een section.</p>     
     </article>
</section>
```

<strong>Opleveren</strong>

Tot slot kunnen de bestanden gecomprimeerd worden. Hiervoor gebruik ik het programma <a href="http://incident57.com/codekit/" title="Codekit">Codekit</a>. Ook wel bekend als "steroids for developers". Het heeft allemaal handige features en één van de dingen waarvoor ik het gebruik is om het .less file te converteren naar een minified css bestand. 


----------------------------------------
<h3>Update:</h3>

Media.css toegevoegd. Up-scalen en Down-scalen t.o.v. schermresolutie. Voor nieuwere bestanden ook met @2x werken voor retina resolutie.

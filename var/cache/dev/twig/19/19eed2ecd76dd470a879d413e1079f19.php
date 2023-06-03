<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* report.html.twig */
class __TwigTemplate_f8fd2879ba6eb2c46bec25abe334b2b1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Report";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    <h1>Report</h1>

    <section>
        <section id=\"kmom01\">
        <h2>Kmom 01</h2>
        <p>
            Mina tidigare erfarenheter kring objektorienterad programmering är ganska färska. Vi jobbade en hel del med klasser i Python och det kändes väldigt
            förvirrande till en början men det blev lite mer naturligt när man testat en stund. Känslan är dock fortfarande att det kan vara förvirrande när
            klasserna ärver från varandra och skapas i flera led. Då blir det fort mycket att försöka hålla koll på och som nybörjare kan man bli bortfintad.
        </p>
        <p>
            Objektorienterad programmering i PHP utgår ifrån klasser som skapar objekt. Ett objekt är en instans av en klass och tilldelas unika egenskaper
            som \"properties\" och metoder, dvs funktioner som är kopplade till objektet. Kort kan man säga att metoder är objektets funktionalitet och
            beskriver vad det kan göra. Properties är precis som det låter, egenskaper. En klass som skapar bilar kan ha egenskaper som \"röd\" eller
            \"fyra hjul\". Klasserna fungerar därmed som en mall för objekten som skapas.
        </p>
        <p>
            Kodbasen som används i me/report är ganska omfattande. Än så länge har vi bara skapat en me-sida med några få router men ändå är mappar
            och undermappar välfyllda. Det känns kanske som onödigt mycket för så lite innehåll men det verkar som att detta är de mappar som behöver
            finnas, oavsett hur många router och hur mycket material som sidan innehåller. Att installera och sätta upp Symfony med tillbehör var
            mer omfattande än de miljöer vi arbetat med tidigare. Detta känns dock nyttigt för man börjar skaffa sig en generell bild om hur olika
            webbplatser kan vara uppbyggda.
        </p>
        <p>
            Jag har lite svårt för att välja ut det allra viktigaste från sidan. Generellt tycker jag att själva syftet med hela sidan är väldigt bra,
            dvs att sidan är skapad för att ge en översiktlig och lättsam guide då mycket av informationen om PHP på nätet är utdaterad. Ska jag välja
            någon del jag är lite nyfiken på så är det väl kanske hur man kan använda PHP tillsammans med SQL och databaser. Eftersom vi precis har
            avslutat en kurs i databaser så är det något jag kan relatera till och kanske kommer kunna förstå ännu bättre när jag får en annan
            infallsvinkel.
        </p>
        <p>
            Momentets TIL för det första kursmomentet i varje kurs är ofta svårt eftersom allt egentligen är en enda stor TIL. Det är mycket nytt
            som ska introduceras och hjärnan får sig en genomkörare. Måste jag välja någon detalj så var det kanske hur man kunde ange en tidzon för
            att anpassa klockslaget till aktuell tid. Det visste jag inte sedan tidigare, men som sagt, det var väldigt många andra nya saker i det
            här momentet och detta endast en detalj i mängden.
        </p>
    </section>

    <section>
        <section id=\"kmom02\">
        <h2>Kmom 02</h2>
        <p>
            I objektorienterad programmering innebär arv att klassen äger egenskaper från en förälder-klass. I min kortlek så är CardGraphic en
            underklass till Card. Det betyder att man i CardGraphic kan komma åt metoder som skapats i Card-klassen. På det sättet slipper man
            skriva om samma kod igen för en klass som avser att verka på liknande sätt som en tidigare klass. För att underlätta kan man tänka
            att om klasserna har in \"is a\"-relation så bör det fungera med arv. \"CardGraphic is a Card\", ja, det finns det grund för att påstå.
        </p>
        <p>
            Komposition behandlar \"has a\"-relationer och i mitt kortspel är både DeckOfCards och CardHand relaterade till Card/CardGraphic på
            det sättet. DeckOfCards har kort och detsamma gäller för CardHand som också har kort. För att en relation ska klassas som komposition
            och inte aggregation så ska klasserna inte kunna existera på egen hand. Med det sagt, så gjorde jag bedömningen att en kortlek inte
            kan existera om korten förstörs och en korthand kan inte hålla några kort om det inte finns några kort att hålla. Hade det däremot handlat
            om ett hyreshus med flera lägenheter så kan en lägenhet fortfarande existera även om den som bor där flyttar ut.
        </p>
        <p>
            Trait påminner om arv och används för att skapa ytterligare funktionalitet för en klass. Ett trait kan vara en bit kod som flera klasser
            har nytta av men den kan inte existera på egen hand. Den måste implementeras i en klass och sedan användas vidare därifrån. Om jag har
            förstått det rätt så används traits för att man ska slippa skriva ny kod för klasser som har nytta av en annans klass funktionalitet
            men där klasshiarkin inte lämpar sig för att använda arv.
        <p>
            Interface är ett slags kontrakt som mellan klassen och andra delar av koden som kräver att vissa metoder implementeras. Interfacet i sig
            innehåller ingen kod utan bara bestämmelser om vilka metoder som ska återfinnas i klassen. På det sättet vet utvecklaren vad hen kan förvänta
            sig av klassen och vilken funktionalitet den kommer att ha.
        </p>
        <p>
            I stora delar har jag nog återgett hur jag implementerade mina klasser i uppgiften. Jag är hyfsat nöjd med implementationen. Jag försökte
            att låta min CardHand innehålla en samling av CardGraphic-objekt likt fallet från övningen med \"add\"-metoden men fick det inte helt att
            fungera som förväntat. Då fick jag göra det lite enklare och låta min \"add\"-metod skapa en array med kortens värde och innehåll istället
            för hela CardGraphic-objekt.
        </p>
        <p>
            Uppgiften var utmanade och det kräver alltid extra tankeverksamhet när något ska fungera i flera steg och över flera sidor. Min PHP-kunskap
            känns någorlunda rostig sedan kursen i höstas och detta gör hela fenomenet med objektorientering ännu mastigare att ta in. Däremot känns det
            bra att ha genomfört OOP-kursen i Python. Det gör att man har lättare för att greppa helheten men som vanligt måste man verkligen sätta sig
            ner och testa sig fram för att skapa den djupare förståelse. Den här uppgiften kändes som en bra genomkörare och grund för mer avancerade
            applikationer eller spel.
        </p>
        <p>
            Min TIL för det här momentet är nog introduktionen och kontakten i sin allmänhet med objektorienterad programmering i PHP.
        </p>
    </section>

    <section>
        <section id=\"kmom03\">
        <h2>Kmom 03</h2>
        <p>
            Att först skapa pseudokod och ett flödesdiagram för kortspelet var nog absolut något som hjälpte till vid utvecklandet. Det
            ger en mental bild av de mest fundamentala funktioner som kommer att behövas. Det slutgiltiga arbetet blev faktiskt ganska likt den
            det flöde som ritades upp på förhand. Några extra tillägg förekom. Bl.a. att lägga till en funktion som ska kunna tolka varje korts
            värde och översätta det till poäng. En utmaning som uppkom var hanteringen för om användaren vill ha ett eller fjorton poäng för sitt ess.
        </p>
        <p>
            Jag är hyfsat nöjd med lösningen av uppgiften. Jag tyckte nog att koden blev lite \"smidigare\" än i kmom02. Ännu bättre blev det när
            alla klagomål från lintern på användningen av \"else\"-satser åtgärdades. Jag har inte tidigare reflekterat över hur man kan minimera sina
            else-satser. Det är något jag ska försöka ta med mig till andra språk också. I de tidigare Python-kurserna har jag skrivit mycket kladdig
            och förvirrande kod p.g.a. många olika \"if-else\"-förhållanden. Två små fel återstår. Lintern vill inte att jag ska använda \"count()\" inuti
            en While-loop. Det gjordes några försök att åtgärda detta men något i koden blev fel och resultatet blev inte som förväntat. Efter upprepade
            misslyckanden gjordes bedömingen att låta koden förbli som den var och därmed kvarstår något enstaka klagomål.
        </p>
        <p>
            Känslan för att koda i ramverket Symfony känns bättre nu när man blivit lite varmare i kläderna. Man börjar också komma till insikt med
            hur ett någorlunda \"vanligt\" samarbete mellan kod och webbplats kan se ut. I Python använde vi Flask men strukturen var i övrigt väldigt lik.
            Uppbyggnaden påminner även en hel del om hur vi för tillfället jobbar i kursen \"Webbapp\". Som student känns det givande att pararella kurser
            har gemensamma delar. Det leder till att jag får träna mer på vad som troligtvis kan vara centrala delar för en webbutvecklare(?).
        </p>
        <p>
            Mitt TIL för det här momentet är hur man i Twig kan anväda \"if-else\" för att utföra kontroller som kan manipulera sidans utseende på ett
            sätt som jag mest gjort med hjälp av JavaScript tidigare. Istället för att hämta \"id\" för en knapp och därefter hantera knappen så kunde jag
            ta bort den med den enkla kollen om kortleken fortfarande innehåller 52 kort. Detta gäller hanteringen för knappen \"Stay\" som inte ska kunna ge
            användaren möjlighet att stanna utan att dra minst ett kort först.
        </p>
    </section>

    <section>
        <section id=\"kmom04\">
        <h2>Kmom 04</h2>
        <p>
            Detta var ett lite annorlunda kursmoment. Förutsatt att jag genomfört testningen korrekt så tycker jag att unit-testing verkar vara ett bra verktyg
            för att \"rätta\" sin egen kod. Visar det sig att koden är svårtestad bör den kanske ses igenom. Visar den däremot att koden faktiskt gör det man har
            tänkt så kan det istället vara ett kvitto på att man åstadkommit något rimligt och fungerande.
        </p>
        <p>
            Kodtäckningen såg ut att övergå 90% och det är jag nöjd med. Jag har lite dåligt självförtroende när jag skriver kod och upplever ofta att jag gör
            det onödigt krångligt och att koden blir kladdig. Möjligtvis hjälpte det att snygga till koden med hjälp av lintern i slutet av kmom03. Det kan
            mycket väl ha bidragit till att det gick relativt smärtfritt att testa koden i det här momentet.
        </p>
        <p>
            När jag skriver testerna så vill jag helst bevisa huruvida testerna faktiskt bevisar något. I några testklasser, framförallt för Card och CardGraphic blev
            testerna väldigt simpla. De klasserna består av mindre komplicerade metoder och de har ofta som uppgift att bara symbolisera ett kort eller en siffra.
            Det gör att testerna mest går ut på att kolla om det är en sträng som renderas när det är tänkt och om det är en integer som renderas när det förväntas.
        </p>
        <p>
            När jag skulle testa DeckOfCards och CardHand blev det lite mer intressant. För att en hand ska kunna testas så behöver den ju med fördel hålla minst ett
            kort, d.v.s. minst ett CardGraphic-objekt. Jag försökte först att skapa ett mockobjekt för metoden \"CardGraphic->getAsString()\" eftersom det skapas ett
            slumpmässigt kort varje gång jag kör koden. Det gör att om jag vill kolla att handen innehåller ett specifikt kort så blir resultatet olika för varje gång
            och testerna går sönder. Jag lyckades inte helt få till mocken och jag valde att ta en enklare väg och hårdkoda ett grafisk kort istället. Sedan la jag till
            det i handen.
        </p>
        <p>
            I DeckOfCards blev jag beroende av en hel kortlek. Ett problem jag stötte på då var att jag inte kunde hämta ut hela kortleken då den är ett privat attribut.
            Det är första gången som jag på riktigt upplever vad publikt och privat faktiskt innebär i praktiken. Jag fick istället skapa två kortleker som såg likadana
            ut från början och sedan använda metoderna för att visa hur kortlekarna förändras. I den här delen upplevde jag att testningen gjorde som mest nytta.
        </p>
        <p>
            Jag behövde inte justera så mycket i min kod för att den skulle gå att testa hyfsat bra. Gissvingsvis så gjorde jag de största förändringarna i slutet av
            kmom03 när jag försökte justera koden enligt de riktlinjer som lintern gav mig. Att minska antalet if else-satser underlättade säkerligen. Det enda jag
            inte nådde helt upp i 100% på i testningen var ju faktiskt en if-sats med två olika return-satser. Jag upptäckte att den ena return-satsen inte behövdes
            men när jag tog bort den så klagade lintern istället. Detta gjorde att jag valde att ha kvar return-satsen ändå, trots att den inte bidrar till något.
        </p>
        <p>
            Testbar kod är mycket troligt kod som är snyggare och renare än mindre testbar kod. Min kod blev lättare att förstå när jag rensade den med hjälp av linterns
            önskemål.
        </p>
        <p>
            Min TIL för det här momentet är skillnaden mellan privat och publikt i praktiken. Jag har länge förstått det i teorin men ändå inte riktigt förstått
            vad det spelar för roll i praktiken. Det fick jag uppleva när jag inte kunde nå min egen array med kort i testningen. Learning by doing.
        </p>
    </section>

    <section>
        <section id=\"kmom05\">
        <h2>Kmom 05</h2>
        <p>
            Som vanligt var övningen med tillhörande video väldigt nyttig. Man får som i regel nästan allt som krävs för att genomföra uppgiften. Det krävdes lite extra
            tankeverksamhet för att koppla ihop manipulering av databasen med router-hanteringen men eftersom vi har jobbat en hel del med POST och GET så gick det ändå
            hyfsat okej. När jag väl fått ordning på flödet i CREATE, som skapdes först, så gav det en grundläggande idé för utformandet av resterande delar.
        </p>
        <p>
            Lite fundersam blev/är jag kring bild-hanteringen. Jag tänkte att \"man ska kunna lägga till detaljer om en bok\" även innebär ladda upp bilder. Jag försökte
            göra lite research och insåg att det kanske var möjligt att få till men gjorde bedömingen att det nog låg under kategorin \"överkurs\". Jag valde därför att
            endast lägga in bilder för mina tre grundböcker och sedan låta nya böcker endast innehålla namn, författare och ISBN.
        </p>
        <p>
            Det sista problemet jag stötte på var när jag väl hade laddat upp allting till studentservern. Vid det här laget har jag lärt mig att det alltid är något
            som inte kommer fungera på studentservern även om det fungerar lokalt... Mycket riktigt, problem idag igen. Först ville inte min API-rout som ska visa
            upp en utvald bok acceptera siffrorna som en integer. Konstigt men inte omöjligt att ordna så jag gjorde som klagomålet sa och skickade siffrorna som en sträng
            innan jag gjorde om dem till integers. Även om det fungerade så upptäckte jag att boken som visades upp inte stämde med bokens ISBN som skickats som parameter
            i URLen. Jag navigerade vidare till översikten för samtliga böcker och såg att alla böcker helt plötsligt hade samma ISBN. Jag klarar inte helt att förstå
            varför men eftersom det fungerade lokalt misstänker jag att det finns någon typ av begränsning på studentservern när det gäller storleken av ett tal som 
            får laddas upp. Kanske en säkerhetsåtgärd? Hur som helst, eftersom jag använde autentiska ISBN-nummer så blev det långa tal men efter dessa problem valde jag
            att göra om till fyrsiffriga tal. Efter det fungerade det bättre även om det inte blev lika estetiskt i översikten.
        </p>
        <p>
            Jag försökte att hålla applikationen rimlig och tydlig. Översikten för samtliga böcker blev det centrala innehållet och därfrån kan man ändra på innehållet.
            Vill man lägga till en bok finns det en egen knapp för det från landningssidan.
        </p>
        <p>
            Jag hade först svårt att förstå hur tusan man skulle kunna jobba objektorienterat med databaser. I de flesta nya moment så har jag svårt att förstå i början.
            Det spelar inte så stor roll att jag ser på introduktionen eller läser en avancerad manual. Men, när jag väl satt igång och jobba går det bättre att göra
            kopplingar. Då kan jag tänka \"aha det var det här Mos pratade om i introduktionen\" och så blir det lite lättare att gå vidare. Med det sagt så förstår jag
            vilken enorm fördel ORM kan vara för en objektorienterat lagd programmerare. Dessa färdigskrivna metoder som utför någon typ av SQL i bakgrunden sparar
            så otroligt mycket tid. Jag har aldrig lagt så mycket tid på något moment som kmom05 och kmom06 i databas-kursen. Det tog ju aldrig slut med mängden
            funktionalitet som behövdes skapas. Med ORM autogenererades allt som behövdes för att skapa ett fungerande CRUD-flöde och jag använder mig gärna av
            det här arbetssättet i framtiden. Objektorientering kan vara avancerad och svår men när det fungerar är det extremt tillfredsställande.
        </p>
        <p>
            För mig är hela konceptet kring ORM momentets TIL. Jag visste inte att man kunde jobba på det här sättet. Däremot känns det bra att ha gått databas-kursen
            för att veta lite om vad som försiggår i bakgrunden. Det skapar en ännu större förståelse för hur smidigt det här faktiskt var.
        </p>
    </section>

    <section>
        <section id=\"kmom06\">
        <h2>Kmom 06</h2>
        <p>
            Phpmetrics illustrerade på ett tydligt sätt vilka delar av koden som hade bäst förutsättningar för att vara korrekt, lättförståelig och mest
            underhållsvänlig. Det som jag tycker stack ut mest var de stora cirklarna i olika färger som representerade olika delars komplexitet. Ögat drar
            sig till de färgstarka cirklarna. Man får också en kort men tydlig förklaring om cirklarnas innebörd. Om man hoovrar över en cirkel får man också
            statistik på \"maintainability index\". Enligt mina cirklar verkar lägre komplexitet leda till ett högre \"maintainability index\" vilket skulle betyda att
            koden då är lättare att underhålla. Det låter rimligt. I övrigt finns det mycket siffror att tillgå för den som vill gräva på djupet. Jag valde att
            i första hand fokusera på det cirklarna påpekade.
        </p>
        <p>
            Jag gillade nog Scrutinizer bättre än Phpmetrics. Jag tycker att verktyget var tydligare och även här var det bilder av resultatet som fångade min
            uppmärksamhet. Det ser proffsigt ut med badges. Dessa är enkla att tolka när bakgrundsfärgen sätter en prägel på om betyget är bra, hyfsat eller inte
            så bra. Vid det första testet så var stora delar av min kod bra men det blev väldigt tydligt att någonting inte stod rätt till med kodtäckningen. Det
            visade sig vara mina kontroller-sidor som använder metoder för att rendera vyer som inte innehöll några enhetstester. Dessa sidor genererade också
            stora röda cirklar i phpmetrics som varslade om att koden skulle vara svårtestad. Jag accepterade utmaningen och försökte skriva några enhetstester
            för game-controllern men det gick inget vidare. Jag hade stora svårigheter med att formulera ett test som bevisade att metoden renderade rätt vy.
            Jag försökte använda ett mockobjekt för att göra testet mindre beroende men det gick inte helt ihop sig. Det fanns alltså grundlag för att kalla min
            kod komplex och svårunderhållen! Med den insikten insåg jag att det var läge att ta förlusten och notera att dessa verktyg kan vara väldigt användbara
            i framtiden. Man bör med fördel använda de under utvecklingen av koden och inte när applikationen/webbplatsen är färdig.
        </p>
        <p>
            Enligt min åsikt så är verktygen bra hjälpmedel för att kvalitetschecka koden. Man bör dock använda de på rätt sätt och titta närmare på klagomålen.
            I vissa fall kan det vara så att allt kanske inte är relevant att testa. I det stora hela tycker jag dock att betygen ger en väldigt bra översikt
            över vilka delar som är bra och vilka som skulle kunna kräva lite mer arbete. Att sträva mot ett så högt betyg som möjligt kan nog leda till att man
            undviker att hamna i s.k. teknisk skuld på sikt. Jag tror också att det skapar ett grundtänk för utvecklaren som hen har med sig när hen skriver kod.
            Jag vet bara att jag själv framöver komma försöka tänka på att skriva så få conditions i from av if else-satser som möjligt. Samtidigt bör man inte
            stirra sig helt blind på siffror och färger. Man kan ha en fullt fungerande applikation trots att den är komplex. Kanske vet man att den inte kommer
            uppdateras i framtiden? Ja, då tar det kanske bara onödig tid att skriva om hela applikationen.
        </p>
        <p>
            Min TIL för det här kursmomentet är hela konceptet kring \"software quality management\". Alltså, att använda verktyg för att enkelt hålla koll på vem
            som skrivit vilken kod samt vilken kvalitet den håller. Är man många som jobbar på ett projekt så kan det fort bli komplicerat om man inte har en
            god struktur. Det här gav mig en idé om hur det troligtvis ser på de flesta arbetsplatser när man arbetar tillsammans.
        </p>
    </section>

    <section>
        <section id=\"kmom07-10\">
        <h2>Kmom 07-10</h2>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "report.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 7,  78 => 6,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"base.html.twig\" %}

{% block title %}Report{% endblock %}

{% block body %}

    <h1>Report</h1>

    <section>
        <section id=\"kmom01\">
        <h2>Kmom 01</h2>
        <p>
            Mina tidigare erfarenheter kring objektorienterad programmering är ganska färska. Vi jobbade en hel del med klasser i Python och det kändes väldigt
            förvirrande till en början men det blev lite mer naturligt när man testat en stund. Känslan är dock fortfarande att det kan vara förvirrande när
            klasserna ärver från varandra och skapas i flera led. Då blir det fort mycket att försöka hålla koll på och som nybörjare kan man bli bortfintad.
        </p>
        <p>
            Objektorienterad programmering i PHP utgår ifrån klasser som skapar objekt. Ett objekt är en instans av en klass och tilldelas unika egenskaper
            som \"properties\" och metoder, dvs funktioner som är kopplade till objektet. Kort kan man säga att metoder är objektets funktionalitet och
            beskriver vad det kan göra. Properties är precis som det låter, egenskaper. En klass som skapar bilar kan ha egenskaper som \"röd\" eller
            \"fyra hjul\". Klasserna fungerar därmed som en mall för objekten som skapas.
        </p>
        <p>
            Kodbasen som används i me/report är ganska omfattande. Än så länge har vi bara skapat en me-sida med några få router men ändå är mappar
            och undermappar välfyllda. Det känns kanske som onödigt mycket för så lite innehåll men det verkar som att detta är de mappar som behöver
            finnas, oavsett hur många router och hur mycket material som sidan innehåller. Att installera och sätta upp Symfony med tillbehör var
            mer omfattande än de miljöer vi arbetat med tidigare. Detta känns dock nyttigt för man börjar skaffa sig en generell bild om hur olika
            webbplatser kan vara uppbyggda.
        </p>
        <p>
            Jag har lite svårt för att välja ut det allra viktigaste från sidan. Generellt tycker jag att själva syftet med hela sidan är väldigt bra,
            dvs att sidan är skapad för att ge en översiktlig och lättsam guide då mycket av informationen om PHP på nätet är utdaterad. Ska jag välja
            någon del jag är lite nyfiken på så är det väl kanske hur man kan använda PHP tillsammans med SQL och databaser. Eftersom vi precis har
            avslutat en kurs i databaser så är det något jag kan relatera till och kanske kommer kunna förstå ännu bättre när jag får en annan
            infallsvinkel.
        </p>
        <p>
            Momentets TIL för det första kursmomentet i varje kurs är ofta svårt eftersom allt egentligen är en enda stor TIL. Det är mycket nytt
            som ska introduceras och hjärnan får sig en genomkörare. Måste jag välja någon detalj så var det kanske hur man kunde ange en tidzon för
            att anpassa klockslaget till aktuell tid. Det visste jag inte sedan tidigare, men som sagt, det var väldigt många andra nya saker i det
            här momentet och detta endast en detalj i mängden.
        </p>
    </section>

    <section>
        <section id=\"kmom02\">
        <h2>Kmom 02</h2>
        <p>
            I objektorienterad programmering innebär arv att klassen äger egenskaper från en förälder-klass. I min kortlek så är CardGraphic en
            underklass till Card. Det betyder att man i CardGraphic kan komma åt metoder som skapats i Card-klassen. På det sättet slipper man
            skriva om samma kod igen för en klass som avser att verka på liknande sätt som en tidigare klass. För att underlätta kan man tänka
            att om klasserna har in \"is a\"-relation så bör det fungera med arv. \"CardGraphic is a Card\", ja, det finns det grund för att påstå.
        </p>
        <p>
            Komposition behandlar \"has a\"-relationer och i mitt kortspel är både DeckOfCards och CardHand relaterade till Card/CardGraphic på
            det sättet. DeckOfCards har kort och detsamma gäller för CardHand som också har kort. För att en relation ska klassas som komposition
            och inte aggregation så ska klasserna inte kunna existera på egen hand. Med det sagt, så gjorde jag bedömningen att en kortlek inte
            kan existera om korten förstörs och en korthand kan inte hålla några kort om det inte finns några kort att hålla. Hade det däremot handlat
            om ett hyreshus med flera lägenheter så kan en lägenhet fortfarande existera även om den som bor där flyttar ut.
        </p>
        <p>
            Trait påminner om arv och används för att skapa ytterligare funktionalitet för en klass. Ett trait kan vara en bit kod som flera klasser
            har nytta av men den kan inte existera på egen hand. Den måste implementeras i en klass och sedan användas vidare därifrån. Om jag har
            förstått det rätt så används traits för att man ska slippa skriva ny kod för klasser som har nytta av en annans klass funktionalitet
            men där klasshiarkin inte lämpar sig för att använda arv.
        <p>
            Interface är ett slags kontrakt som mellan klassen och andra delar av koden som kräver att vissa metoder implementeras. Interfacet i sig
            innehåller ingen kod utan bara bestämmelser om vilka metoder som ska återfinnas i klassen. På det sättet vet utvecklaren vad hen kan förvänta
            sig av klassen och vilken funktionalitet den kommer att ha.
        </p>
        <p>
            I stora delar har jag nog återgett hur jag implementerade mina klasser i uppgiften. Jag är hyfsat nöjd med implementationen. Jag försökte
            att låta min CardHand innehålla en samling av CardGraphic-objekt likt fallet från övningen med \"add\"-metoden men fick det inte helt att
            fungera som förväntat. Då fick jag göra det lite enklare och låta min \"add\"-metod skapa en array med kortens värde och innehåll istället
            för hela CardGraphic-objekt.
        </p>
        <p>
            Uppgiften var utmanade och det kräver alltid extra tankeverksamhet när något ska fungera i flera steg och över flera sidor. Min PHP-kunskap
            känns någorlunda rostig sedan kursen i höstas och detta gör hela fenomenet med objektorientering ännu mastigare att ta in. Däremot känns det
            bra att ha genomfört OOP-kursen i Python. Det gör att man har lättare för att greppa helheten men som vanligt måste man verkligen sätta sig
            ner och testa sig fram för att skapa den djupare förståelse. Den här uppgiften kändes som en bra genomkörare och grund för mer avancerade
            applikationer eller spel.
        </p>
        <p>
            Min TIL för det här momentet är nog introduktionen och kontakten i sin allmänhet med objektorienterad programmering i PHP.
        </p>
    </section>

    <section>
        <section id=\"kmom03\">
        <h2>Kmom 03</h2>
        <p>
            Att först skapa pseudokod och ett flödesdiagram för kortspelet var nog absolut något som hjälpte till vid utvecklandet. Det
            ger en mental bild av de mest fundamentala funktioner som kommer att behövas. Det slutgiltiga arbetet blev faktiskt ganska likt den
            det flöde som ritades upp på förhand. Några extra tillägg förekom. Bl.a. att lägga till en funktion som ska kunna tolka varje korts
            värde och översätta det till poäng. En utmaning som uppkom var hanteringen för om användaren vill ha ett eller fjorton poäng för sitt ess.
        </p>
        <p>
            Jag är hyfsat nöjd med lösningen av uppgiften. Jag tyckte nog att koden blev lite \"smidigare\" än i kmom02. Ännu bättre blev det när
            alla klagomål från lintern på användningen av \"else\"-satser åtgärdades. Jag har inte tidigare reflekterat över hur man kan minimera sina
            else-satser. Det är något jag ska försöka ta med mig till andra språk också. I de tidigare Python-kurserna har jag skrivit mycket kladdig
            och förvirrande kod p.g.a. många olika \"if-else\"-förhållanden. Två små fel återstår. Lintern vill inte att jag ska använda \"count()\" inuti
            en While-loop. Det gjordes några försök att åtgärda detta men något i koden blev fel och resultatet blev inte som förväntat. Efter upprepade
            misslyckanden gjordes bedömingen att låta koden förbli som den var och därmed kvarstår något enstaka klagomål.
        </p>
        <p>
            Känslan för att koda i ramverket Symfony känns bättre nu när man blivit lite varmare i kläderna. Man börjar också komma till insikt med
            hur ett någorlunda \"vanligt\" samarbete mellan kod och webbplats kan se ut. I Python använde vi Flask men strukturen var i övrigt väldigt lik.
            Uppbyggnaden påminner även en hel del om hur vi för tillfället jobbar i kursen \"Webbapp\". Som student känns det givande att pararella kurser
            har gemensamma delar. Det leder till att jag får träna mer på vad som troligtvis kan vara centrala delar för en webbutvecklare(?).
        </p>
        <p>
            Mitt TIL för det här momentet är hur man i Twig kan anväda \"if-else\" för att utföra kontroller som kan manipulera sidans utseende på ett
            sätt som jag mest gjort med hjälp av JavaScript tidigare. Istället för att hämta \"id\" för en knapp och därefter hantera knappen så kunde jag
            ta bort den med den enkla kollen om kortleken fortfarande innehåller 52 kort. Detta gäller hanteringen för knappen \"Stay\" som inte ska kunna ge
            användaren möjlighet att stanna utan att dra minst ett kort först.
        </p>
    </section>

    <section>
        <section id=\"kmom04\">
        <h2>Kmom 04</h2>
        <p>
            Detta var ett lite annorlunda kursmoment. Förutsatt att jag genomfört testningen korrekt så tycker jag att unit-testing verkar vara ett bra verktyg
            för att \"rätta\" sin egen kod. Visar det sig att koden är svårtestad bör den kanske ses igenom. Visar den däremot att koden faktiskt gör det man har
            tänkt så kan det istället vara ett kvitto på att man åstadkommit något rimligt och fungerande.
        </p>
        <p>
            Kodtäckningen såg ut att övergå 90% och det är jag nöjd med. Jag har lite dåligt självförtroende när jag skriver kod och upplever ofta att jag gör
            det onödigt krångligt och att koden blir kladdig. Möjligtvis hjälpte det att snygga till koden med hjälp av lintern i slutet av kmom03. Det kan
            mycket väl ha bidragit till att det gick relativt smärtfritt att testa koden i det här momentet.
        </p>
        <p>
            När jag skriver testerna så vill jag helst bevisa huruvida testerna faktiskt bevisar något. I några testklasser, framförallt för Card och CardGraphic blev
            testerna väldigt simpla. De klasserna består av mindre komplicerade metoder och de har ofta som uppgift att bara symbolisera ett kort eller en siffra.
            Det gör att testerna mest går ut på att kolla om det är en sträng som renderas när det är tänkt och om det är en integer som renderas när det förväntas.
        </p>
        <p>
            När jag skulle testa DeckOfCards och CardHand blev det lite mer intressant. För att en hand ska kunna testas så behöver den ju med fördel hålla minst ett
            kort, d.v.s. minst ett CardGraphic-objekt. Jag försökte först att skapa ett mockobjekt för metoden \"CardGraphic->getAsString()\" eftersom det skapas ett
            slumpmässigt kort varje gång jag kör koden. Det gör att om jag vill kolla att handen innehåller ett specifikt kort så blir resultatet olika för varje gång
            och testerna går sönder. Jag lyckades inte helt få till mocken och jag valde att ta en enklare väg och hårdkoda ett grafisk kort istället. Sedan la jag till
            det i handen.
        </p>
        <p>
            I DeckOfCards blev jag beroende av en hel kortlek. Ett problem jag stötte på då var att jag inte kunde hämta ut hela kortleken då den är ett privat attribut.
            Det är första gången som jag på riktigt upplever vad publikt och privat faktiskt innebär i praktiken. Jag fick istället skapa två kortleker som såg likadana
            ut från början och sedan använda metoderna för att visa hur kortlekarna förändras. I den här delen upplevde jag att testningen gjorde som mest nytta.
        </p>
        <p>
            Jag behövde inte justera så mycket i min kod för att den skulle gå att testa hyfsat bra. Gissvingsvis så gjorde jag de största förändringarna i slutet av
            kmom03 när jag försökte justera koden enligt de riktlinjer som lintern gav mig. Att minska antalet if else-satser underlättade säkerligen. Det enda jag
            inte nådde helt upp i 100% på i testningen var ju faktiskt en if-sats med två olika return-satser. Jag upptäckte att den ena return-satsen inte behövdes
            men när jag tog bort den så klagade lintern istället. Detta gjorde att jag valde att ha kvar return-satsen ändå, trots att den inte bidrar till något.
        </p>
        <p>
            Testbar kod är mycket troligt kod som är snyggare och renare än mindre testbar kod. Min kod blev lättare att förstå när jag rensade den med hjälp av linterns
            önskemål.
        </p>
        <p>
            Min TIL för det här momentet är skillnaden mellan privat och publikt i praktiken. Jag har länge förstått det i teorin men ändå inte riktigt förstått
            vad det spelar för roll i praktiken. Det fick jag uppleva när jag inte kunde nå min egen array med kort i testningen. Learning by doing.
        </p>
    </section>

    <section>
        <section id=\"kmom05\">
        <h2>Kmom 05</h2>
        <p>
            Som vanligt var övningen med tillhörande video väldigt nyttig. Man får som i regel nästan allt som krävs för att genomföra uppgiften. Det krävdes lite extra
            tankeverksamhet för att koppla ihop manipulering av databasen med router-hanteringen men eftersom vi har jobbat en hel del med POST och GET så gick det ändå
            hyfsat okej. När jag väl fått ordning på flödet i CREATE, som skapdes först, så gav det en grundläggande idé för utformandet av resterande delar.
        </p>
        <p>
            Lite fundersam blev/är jag kring bild-hanteringen. Jag tänkte att \"man ska kunna lägga till detaljer om en bok\" även innebär ladda upp bilder. Jag försökte
            göra lite research och insåg att det kanske var möjligt att få till men gjorde bedömingen att det nog låg under kategorin \"överkurs\". Jag valde därför att
            endast lägga in bilder för mina tre grundböcker och sedan låta nya böcker endast innehålla namn, författare och ISBN.
        </p>
        <p>
            Det sista problemet jag stötte på var när jag väl hade laddat upp allting till studentservern. Vid det här laget har jag lärt mig att det alltid är något
            som inte kommer fungera på studentservern även om det fungerar lokalt... Mycket riktigt, problem idag igen. Först ville inte min API-rout som ska visa
            upp en utvald bok acceptera siffrorna som en integer. Konstigt men inte omöjligt att ordna så jag gjorde som klagomålet sa och skickade siffrorna som en sträng
            innan jag gjorde om dem till integers. Även om det fungerade så upptäckte jag att boken som visades upp inte stämde med bokens ISBN som skickats som parameter
            i URLen. Jag navigerade vidare till översikten för samtliga böcker och såg att alla böcker helt plötsligt hade samma ISBN. Jag klarar inte helt att förstå
            varför men eftersom det fungerade lokalt misstänker jag att det finns någon typ av begränsning på studentservern när det gäller storleken av ett tal som 
            får laddas upp. Kanske en säkerhetsåtgärd? Hur som helst, eftersom jag använde autentiska ISBN-nummer så blev det långa tal men efter dessa problem valde jag
            att göra om till fyrsiffriga tal. Efter det fungerade det bättre även om det inte blev lika estetiskt i översikten.
        </p>
        <p>
            Jag försökte att hålla applikationen rimlig och tydlig. Översikten för samtliga böcker blev det centrala innehållet och därfrån kan man ändra på innehållet.
            Vill man lägga till en bok finns det en egen knapp för det från landningssidan.
        </p>
        <p>
            Jag hade först svårt att förstå hur tusan man skulle kunna jobba objektorienterat med databaser. I de flesta nya moment så har jag svårt att förstå i början.
            Det spelar inte så stor roll att jag ser på introduktionen eller läser en avancerad manual. Men, när jag väl satt igång och jobba går det bättre att göra
            kopplingar. Då kan jag tänka \"aha det var det här Mos pratade om i introduktionen\" och så blir det lite lättare att gå vidare. Med det sagt så förstår jag
            vilken enorm fördel ORM kan vara för en objektorienterat lagd programmerare. Dessa färdigskrivna metoder som utför någon typ av SQL i bakgrunden sparar
            så otroligt mycket tid. Jag har aldrig lagt så mycket tid på något moment som kmom05 och kmom06 i databas-kursen. Det tog ju aldrig slut med mängden
            funktionalitet som behövdes skapas. Med ORM autogenererades allt som behövdes för att skapa ett fungerande CRUD-flöde och jag använder mig gärna av
            det här arbetssättet i framtiden. Objektorientering kan vara avancerad och svår men när det fungerar är det extremt tillfredsställande.
        </p>
        <p>
            För mig är hela konceptet kring ORM momentets TIL. Jag visste inte att man kunde jobba på det här sättet. Däremot känns det bra att ha gått databas-kursen
            för att veta lite om vad som försiggår i bakgrunden. Det skapar en ännu större förståelse för hur smidigt det här faktiskt var.
        </p>
    </section>

    <section>
        <section id=\"kmom06\">
        <h2>Kmom 06</h2>
        <p>
            Phpmetrics illustrerade på ett tydligt sätt vilka delar av koden som hade bäst förutsättningar för att vara korrekt, lättförståelig och mest
            underhållsvänlig. Det som jag tycker stack ut mest var de stora cirklarna i olika färger som representerade olika delars komplexitet. Ögat drar
            sig till de färgstarka cirklarna. Man får också en kort men tydlig förklaring om cirklarnas innebörd. Om man hoovrar över en cirkel får man också
            statistik på \"maintainability index\". Enligt mina cirklar verkar lägre komplexitet leda till ett högre \"maintainability index\" vilket skulle betyda att
            koden då är lättare att underhålla. Det låter rimligt. I övrigt finns det mycket siffror att tillgå för den som vill gräva på djupet. Jag valde att
            i första hand fokusera på det cirklarna påpekade.
        </p>
        <p>
            Jag gillade nog Scrutinizer bättre än Phpmetrics. Jag tycker att verktyget var tydligare och även här var det bilder av resultatet som fångade min
            uppmärksamhet. Det ser proffsigt ut med badges. Dessa är enkla att tolka när bakgrundsfärgen sätter en prägel på om betyget är bra, hyfsat eller inte
            så bra. Vid det första testet så var stora delar av min kod bra men det blev väldigt tydligt att någonting inte stod rätt till med kodtäckningen. Det
            visade sig vara mina kontroller-sidor som använder metoder för att rendera vyer som inte innehöll några enhetstester. Dessa sidor genererade också
            stora röda cirklar i phpmetrics som varslade om att koden skulle vara svårtestad. Jag accepterade utmaningen och försökte skriva några enhetstester
            för game-controllern men det gick inget vidare. Jag hade stora svårigheter med att formulera ett test som bevisade att metoden renderade rätt vy.
            Jag försökte använda ett mockobjekt för att göra testet mindre beroende men det gick inte helt ihop sig. Det fanns alltså grundlag för att kalla min
            kod komplex och svårunderhållen! Med den insikten insåg jag att det var läge att ta förlusten och notera att dessa verktyg kan vara väldigt användbara
            i framtiden. Man bör med fördel använda de under utvecklingen av koden och inte när applikationen/webbplatsen är färdig.
        </p>
        <p>
            Enligt min åsikt så är verktygen bra hjälpmedel för att kvalitetschecka koden. Man bör dock använda de på rätt sätt och titta närmare på klagomålen.
            I vissa fall kan det vara så att allt kanske inte är relevant att testa. I det stora hela tycker jag dock att betygen ger en väldigt bra översikt
            över vilka delar som är bra och vilka som skulle kunna kräva lite mer arbete. Att sträva mot ett så högt betyg som möjligt kan nog leda till att man
            undviker att hamna i s.k. teknisk skuld på sikt. Jag tror också att det skapar ett grundtänk för utvecklaren som hen har med sig när hen skriver kod.
            Jag vet bara att jag själv framöver komma försöka tänka på att skriva så få conditions i from av if else-satser som möjligt. Samtidigt bör man inte
            stirra sig helt blind på siffror och färger. Man kan ha en fullt fungerande applikation trots att den är komplex. Kanske vet man att den inte kommer
            uppdateras i framtiden? Ja, då tar det kanske bara onödig tid att skriva om hela applikationen.
        </p>
        <p>
            Min TIL för det här kursmomentet är hela konceptet kring \"software quality management\". Alltså, att använda verktyg för att enkelt hålla koll på vem
            som skrivit vilken kod samt vilken kvalitet den håller. Är man många som jobbar på ett projekt så kan det fort bli komplicerat om man inte har en
            god struktur. Det här gav mig en idé om hur det troligtvis ser på de flesta arbetsplatser när man arbetar tillsammans.
        </p>
    </section>

    <section>
        <section id=\"kmom07-10\">
        <h2>Kmom 07-10</h2>
    </section>

{% endblock %}", "report.html.twig", "/home/elstarkov/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
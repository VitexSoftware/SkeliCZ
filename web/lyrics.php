<?php

/**
 * SkeliCZ - Enter new addrese into database
 *
 * @package    SkeliCZ
 * @author     Vitex <vitex@hippy.cz>
 * @copyright  2009-2016 info@vitexsoftware.cz (G)
 */

namespace SkeliCZ;

require_once 'includes/SkeliInit.php';


$oPage->addItem(new PageTop(_('MC Skeli\'s lyrics')));

$oPage->addCss('body { background-image: url("images/skelilbackstudio.png"); background-position: left top;  background-repeat: no-repeat; }');

$trosky[] = new \Ease\Html\H1Tag('Trosky');
$trosky[] = nl2br('
Vy hlavy dutý, ste dávno vypntý,
vaše existence pochybný
nechutně vyhublí,
držky propadlí,
odpadlíci co se sami zahubí
vysmažený nátury
s celým životem naruby.

Vyschlej jako dromedár,
tváříš se jak top stár,
přitom seš jen top kár
co si život pojebal.
Probodaný žíly dodavaj ti dalši síly
žiješ jenom pro tu chvíli
kdy se nafutruješ bílým!

Trosky s nevyvinutými mozky,
vybílí byt pro bílí.
Bez matra by nepřežili!
Vykradou vlastní rodiny,
během hodiny rozbili roky
kdy pro ne rodiny
ruce i do ohne vložili.

Hromada ostudy za vychovaný žaludy,
přeludy bez budoucnosti kerou si sami pohřbili,
nepochopili kam to vlastně vstoupili
že už z toho nejde jen tak ven
že nejsou jenom opilí.

Jste špatny jak tví blbí zažívaní
savci co to sajou bez přestaní.
Vaše fetiš klaní vás dohaní
až k pobodaní při nedostaní
další dávky
.
Tyhle kroky nejdou vzit už zpátky
stal ses vrahem pro kus zkurvený hromadky.
Krev z rukou už nejde smít
teď nevíš jak s timhle činem žít
teď teprv si procit,
bodá tě pocit
bezmoci od rána do noci
přemejšlíš kdo si,
jsi zlosyn vole
jsi v koncích.

V krymu si na tvou prdel zuby už brousí
ještě než se z toho zhroutíš malatně
po cimře bloudíš,
delírium končí a v pytli uz prazdno
všechno vysáto,
v hlavě vymazáno
ano maš vydělano.

Bereš nohy na ramena,
utíkaš jak dítě.
Nechceš za mříže,
stejně to příjde.
Boži mlíny melou,
tebe berou sebou.
Ou upadlo ti mýdlo?
teď jebou tě ve dvou.

Za tví činy na deset let úděl maminy
pěknej program už si tam pro tebe připravili.
S tvou vyhublou postavou
nemůžes se branit
každej den tě každej muže v klidu klatit,
už si nemužeš ani sednout,
chtěl bys rači zhebnout.

Než si s tebou přijdou zase jebnout,
usínaš každou noc z depkou,
že ses stal fetkou
že ses dal na cestu opravdu nepěknou.
    ');


$divnaPlaneta[] = new \Ease\Html\H1Tag('Divná Planeta');
$divnaPlaneta[] = nl2br('
Zhostí se tě divnej pocit když otevřeš svoje oči
máme v tom prsty,nesnažte se viny zprostit
chovejme se tak, jak maj se chovat hosti
pozdě budem prosit až tu zbydou trosky

šinu si to sám cestou temnou a dlouhou
kráčím s hlavou sklopenou, skalenou, zmatenou
plnou myšlenek který jen tak neodejdou
jen lidi odcházej, krásny vzpomínky si berou sebou
přitom si vemou cenu pro mě nesnesitelnou
je to fake jak kerka henou, chvilku sou a pak se smejou
hold na divný planetě se divny věci dějou

mířím do nečasu kde všichni hledí na krasu
holky měří vztah podle délky ocasů
kam se poděl elán, dřív ho měl každej pán
gentleman na každým rohu dveře dámám otvíral
a dnes ? Furt vidim  že někdo někoho unes
je to děs běs, všude vykácenej les
na naší planetě může jenom průmysl kvéct
a ta planeta je jako klec ze který nemůžeš utéct

války, rasizmus, drogy, vrazi
mnoho pastí co lidi na kolena srazí
odražená kulka co zabila malího kluka
pro rodinu jsou to nepředstavitelný muka
za volantem alkohol, v ulicích fet
vedle silnice bordel,kam to spěje tenhle svět ?
Nad tím co se děje mi začíná rozum stát
páč stojím sváma na lodi co brzo ztroskotá
');

$ganja[] = new \Ease\Html\H1Tag('Ganja');
$ganja[] = nl2br('
Začalo to nevině, takhle jednou po víně
sedíme,zevlíme o svetě vůbec nevíme
sotva patnact let, hold kluci neznalí
svou první zelenou cigaretu zamotají

stav houpaví se dostaví když to brčko odpalíš
s chutí do života vrháme se do víru poznaní
v puse nemam ani slinu v tomhle dýmu se rozplynu
inu tuhle rostlinu, od tý doby každou hodinu

jídlo,pití,chutná líp,v praci se da líp přežít
celej den je veselej tak nedělej že seš nesmělej
do kroužku sedej, nebuť jelen, život máš jenom jeden
tak si ho pořádně užívěj

2xR:
je to Gajnja mocný čaroděj jménem Ganja
spasitel a lék na smutek a vztk
málo kdo to pochopí lidi nejsou ochotný
žít životy svobodný

hnedka ráno co vstanu zamotám si pul gramu
další pul gramu nachám na dýl  na programu
všude zákazy,rostliny ilegalní
mi nezabrání ve vyhledáváni idealních míst
kam si zalíst a nechat se svíct vuní grandiozních palic
už stačí jen zabalit, na záda se svalit užívat dokonali stavy
bez práce bez námahy joooo to mám rad tak mě to baví
zdravím všechny přatele který dělaj to samí
sme očarovany mocným kouzlem mirumilovným
nedá se to srovnat z chlastem

3x R:
je to Gajnja mocný čaroděj jménem Ganja
spasitel a lék na smutek a vztk
málo kdo to pochopí lidi nejsou ochotný
žít životy svobodný
');

$lyrics = new \Ease\TWB\Row();

$lyrics->addColumn(6);
$lyrics->addColumn(2, $trosky);
$lyrics->addColumn(2, $divnaPlaneta);
$lyrics->addColumn(2, $ganja);

$oPage->container->addItem($lyrics);

$oPage->addItem(new PageBottom());


$oPage->draw();


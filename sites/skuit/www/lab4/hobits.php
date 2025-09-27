 <h1>🧙‍♂️ Подготовка хоббитов к путешествию</h1>
 <?
 $allHobbits = ['Ыыыы','Пумпурум','Вжух','Жмых','Дядька','Калыван','Брумба','Грибодав','Ведроголовый','Карамба','Хоббитрон2000','Почесун'];
 $partySize = rand(2,5);
 shuffle($allHobbits);
 $party = array_slice($allHobbits, 0, $partySize);
 $transports = ["лошадь", "осел", "повозка", "нет транспорта"];
 $choosenTransport = $transports[rand(0,3)];
 $allSupplies = ["орехи", "фрукты", "овощи", "закатки", "копченая рыба", "копченое мясо", "крупы", "загадочное хрючево"];
 shuffle($allSupplies);
 $supplies = array_slice($allSupplies, 0, rand(2, 6));
 $listEvents = [
    "hobbit решил помыть ноги и уснул в тазике.",
    "hobbit искал свои земледавы крайне долго.",
    "hobbit захотел написать мемуары перед путешествием.",
    "hobbit подвернул ногу, пришлось искать целителя",
    "hobbit доигрывал партию в DnD.",
    "hobbit уснул под лавкой и его не могли найти",
    "у hobbit прихватило живот, пришлось ждать.",
    "hobbit не был отпущен мамой, уговаривали всей командой отпустить."
 ];
str_replace('hobbit', array_rand($party), $listEvents);
 shuffle($listEvents);
$events = array_slice($listEvents, 0, rand(1, 3));
$delayDays = count($supplies) + count($events);
$nazgulDays = 5;
 ?>
 <div class='block'>
    В поход отправятся <?= count($party) ?> хоббитов: <?= implode(", ", $party) ?>
 </div>
 <div class='block'>
    <? if($choosenTransport === 'нет транспорта') {?>
        К сожалению, транспорта нет. Хоббитам придется идти пешком.
    <?} else {?>
        Хоббиты нашли транспорт: <?= $choosenTransport ?>
    <?}?>
 </div>
 <div class='block'>
    Собрали припасы: <br>
    <? foreach($supplies as $item) {
        echo("- $item <br>");
    }?>
 </div>
 <div class='block'>
    Случившиеся события: <br>
    <? foreach($events as $ev) {
         $ev = str_replace("hobbit", $party[array_rand($party)], $ev);
        echo(" $ev <br>");
    }?>
 </div>
 <div class='block'>
    Сколько дней собирались хоббиты: <?= count($supplies)+count($events) ?>
 </div>
 </div>
 <div class='block'>
    <?php
    if((count($supplies)+count($events))<$nazgulDays) {
        ?>✨ Хоббиты успели выйти в путь раньше назгулов!<?
    }
    elseif((count($supplies)+count($events))==$nazgulDays){
        ?>✨ Хоббиты успели от назгулов в самый последний момент<?
    }
    else{
        ?>⚔️ Назгулы настигли хоббитов! Хоббиты слишком долго собирались и опоздали на столько дней: <?= count($supplies)+count($events)-$nazgulDays?><?
    }
    ?>
 </div>

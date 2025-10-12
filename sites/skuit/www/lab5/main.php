<?php
$names = [
"Альдар","Берен","Келеборн","Теодред","Эомер","Фарамир","Денетор","Халдир","Глорфиндел","Трандуил",
"Эльдан","Маблон","Брандор","Аранель","Лотарион","Мелькор","Ангмар","Саэрон","Эарендил","Эльрос",
"Аделина","Мириэль","Идунн","Лиана","Элениэль","Лютиэн","Галадриэль","Арвен","Нимродэль","Видария",
"Сильмариэн","Элендис","Альвина","Рианна","Финдуилас","Эстелла","Морвен","Эрисель","Йованна","Мирандиль",
"Боромир","Турин","Финрод","Маэглин","Ородрет","Телион","Ангрон","Дориан","Феанор","Эндар",
"Ангвин","Себальд","Эмильдор","Варгельд","Тарвин","Эларион","Ругвир","Дагор","Мельда","Эофрид",
"Годфри","Гильом","Ричард","Генри","Эдмунд","Родерик","Конрад","Альфред","Эрнст","Гуго",
"Вильгельм","Томас","Оуэн","Филипп","Стефан","Леонард","Роберт","Джон","Артур","Мэтью",
"Агата","Флоренс","Маргарет","Эдит","Сибилла","Катарина","Эльфрида","Изольда","Беатриса","Розалинда",
"Сесиль","Джулиана","Матильда","Элеонора","Клементина","Фелиция","Валентина","Амелия","Гертруда","Хелена"
];
$genders = ["мужчина","женщина"];
$villagers = [];
$villagerCount = 100;
for($i = 0; $i < $villagerCount; $i++){
    $villagers[$i] = [
        "name" => $names[array_rand($names)]." ".($i+1),
        "age" => rand(12,60),
        "gender" => $genders[array_rand($genders)],
        "hp" => rand(10,15),
        "strength" => rand(3,5),
        "intelligence" => rand(3,5),
    ];
}
$conscripts =[];
foreach($villagers as $num){
    if(($num["gender"] == $genders[0]) && ($num["age"] > 18)){
        $conscripts[] = $num;
    }
}
$weapons = [
["name" => "Лук", "bonus" => ["strength" => 2, "intelligence" => 1, "hp" => 0], "class" => "ranged"],
["name" => "Праща", "bonus" => ["strength" => 1, "intelligence" => 0, "hp" => 0], "class" => "ranged"],
["name" => "Меч", "bonus" => ["strength" => 3, "intelligence" => 0, "hp" => 0], "class" => "melee"],
["name" => "Копье", "bonus" => ["strength" => 2, "intelligence" => 0, "hp" => 1], "class" => "melee"],
["name" => "Щит", "bonus" => ["strength" => 0, "intelligence" => 0, "hp" => 3], "class" => "melee"],
["name" => "Силки и ловушки", "bonus" => ["strength" => 0, "intelligence" => 5, "hp" => 0], "class" => "scout"],
];
$militia = [];
for($i = 0; $i < count($conscripts); $i++){
    $soldier = $conscripts[$i];
    $weapon = $weapons[array_rand($weapons)];
    $soldier["weaponName"] = $weapon["name"];
    $soldier["weaponClass"] = $weapon["class"];
    $soldier["hp"] += $weapon["bonus"]["hp"];
    $soldier["strength"] += $weapon["bonus"]["strength"];
    $soldier["intelligence"] += $weapon["bonus"]["intelligence"];
    $militia[] = $soldier;
}
$units = [
    "ranged" => [],
    "melee" => [],
    "scout" => []
];
foreach($militia as $sold){
    if($sold["weaponClass"]=="ranged"){
        $units["ranged"][] = $sold;
    }
    elseif($sold["weaponClass"]=="melee"){ 
        $units["melee"][] = $sold;
    }
    else {
        $units["scout"][] = $sold;
    }
}
$commanders = ["ranged" => null, "melee" => null, "scout" => null];
$statSumm = [
    "ranged" => ["hp" => 0, "strength" => 0, "intelligence" => 0], 
    "melee" => ["hp" => 0, "strength" => 0, "intelligence" => 0], 
    "scout" => ["hp" => 0, "strength" => 0, "intelligence" => 0]
];
foreach($units as $type => $typeKey){
    $int = 0;
    for($i = 0; $i < count($typeKey); $i++){
        $statSumm[$type]["hp"] += $typeKey[$i]["hp"];
        $statSumm[$type]["intelligence"] += $typeKey[$i]["intelligence"];
        $statSumm[$type]["strength"] += $typeKey[$i]["strength"];
        if($units[$type][$i]["intelligence"] >= $int){
            $int = $units[$type][$i]["intelligence"];
        }
    }
    for($i = 0; $i < count($typeKey); $i++){
        if($units[$type][$i]["intelligence"] == $int){
            $commanders[$type][] = $units[$type][$i]["name"];
        }
    }
}


?>

<html lang=ru>
    <h2>1) Все жители деревни (<?= count($villagers) ?>)</h2>
    <table class="table">
        <tr><th>Имя</th><th>Пол</th><th>Возраст</th><th>HP</th><th>Сила</th><th>Интеллект</th></tr>
        <?php foreach($villagers as $hobbit){?>
            <tr>
                <td><?= $hobbit["name"] ?></td>
                <td><?= $hobbit["gender"] ?></td>
                <td><?= $hobbit["age"] ?></td>
                <td><?= $hobbit["hp"] ?></td>
                <td><?= $hobbit["strength"] ?></td>
                <td><?= $hobbit["intelligence"] ?></td>
            </tr>
        <? } ?>
    </table>
    <h2>2) Призванные мужчины - ополчение (<?= count($militia) ?>)</h2>
    <table class="table">
        <tr><th>Имя</th><th>Возраст</th><th>HP</th><th>Сила</th><th>Интеллект</th><th>Оружие</th></tr>
        <?php foreach($militia as $hobbit){?>
            <tr>
                <td><?= $hobbit["name"] ?></td>
                <td><?= $hobbit["age"] ?></td>
                <td><?= $hobbit["hp"] ?></td>
                <td><?= $hobbit["strength"] ?></td>
                <td><?= $hobbit["intelligence"] ?></td>
                <td><?= $hobbit["weaponName"] ?></td>
            </tr>
        <? } ?>
    </table>
    <h2>3) Отряды и командиры</h2>
    <div class="grid">

        <div class="unit">
            <h3>🏹 Стрелки (<?= count($units["ranged"]) ?? 0 ?>)</h3>
            <p><b>Командир:</b> <?= $commanders["ranged"][0] ?? "нет" ?></p>
            <p>❤️ Здоровье: <?= $statSumm["ranged"]["hp"] ?? 0 ?> | ⚔️ Сила: <?= $statSumm["ranged"]["strength"] ?? 0 ?> | 🧠 Интеллект: <?= $statSumm["ranged"]["intelligence"] ?? 0 ?></p>
            <?php if (!empty($units["ranged"])) { ?>
            <div class="vlist">
                <?php foreach ($units["ranged"] as $u) { ?>
                <div class="smallcard">
                    <div class="avatar">🏹</div>
                    <div class="info">
                        <b><?= $u["name"] ?></b><br>
                        🪓 Оружие: <?= $u["weaponName"] ?><br>
                        ❤️ <?= $u["hp"] ?> | ⚔️ <?= $u["strength"] ?> | 🧠 <?= $u["intelligence"] ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } else { ?>
            <p><i>Нет бойцов</i></p>
            <?php } ?>
        </div>

        <div class="unit">
            <h3>⚔️ Ближний бой (<?= count($units["melee"]) ?? 0 ?>)</h3>
            <p><b>Командир:</b> <?= $commanders["melee"][0] ?? "нет" ?></p>
            <p>❤️ Здоровье: <?= $statSumm["melee"]["hp"] ?? 0 ?> | ⚔️ Сила: <?= $statSumm["melee"]["strength"] ?? 0 ?> | 🧠 Интеллект: <?= $statSumm["melee"]["intelligence"] ?? 0 ?></p>
            <?php if (!empty($units["melee"])) { ?>
            <div class="vlist">
                <?php foreach ($units["melee"] as $u) { ?>
                <div class="smallcard">
                    <div class="avatar">🛡️</div>
                    <div class="info">
                        <b><?= $u["name"] ?></b><br>
                        🪓 Оружие: <?= $u["weaponName"] ?><br>
                        ❤️ <?= $u["hp"] ?> | ⚔️ <?= $u["strength"] ?> | 🧠 <?= $u["intelligence"] ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } else { ?>
            <p><i>Нет бойцов</i></p>
            <?php } ?>
        </div>

        <div class="unit">
            <h3>🕵️ Партизаны (<?= count($units["scout"]) ?? 0 ?>)</h3>
            <p><b>Командир:</b> <?= $commanders["scout"][0] ?? "нет" ?></p>
            <p>❤️ Здоровье: <?= $statSumm["scout"]["hp"] ?? 0 ?> | ⚔️ Сила: <?= $statSumm["scout"]["strength"] ?? 0 ?> | 🧠 Интеллект: <?= $statSumm["scout"]["intelligence"] ?? 0 ?></p>
            <?php if (!empty($units["scout"])) { ?>
            <div class="vlist">
                <?php foreach ($units["scout"] as $u) { ?>
                <div class="smallcard">
                    <div class="avatar">🕸️</div>
                    <div class="info">
                        <b><?= $u["name"] ?></b><br>
                        🪓 Оружие: <?= $u["weaponName"] ?><br>
                        ❤️ <?= $u["hp"] ?> | ⚔️ <?= $u["strength"] ?> | 🧠 <?= $u["intelligence"] ?>
                    </div>
                </div>
                <?php } ?>
            </div>
            <?php } else { ?>
            <p><i>Нет бойцов</i></p>
            <?php } ?>
        </div>

    </div>
</html>
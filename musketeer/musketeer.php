<?php
    require_once("./data.php");

    array_push($data, [
        'id' => 5,
        'name' => 'Albert De Parmagnan',
        'strength' => 12,
        'agility' => 12,
        'intelligence' => 12,
        'tribe' => 'Castelmore',
        'class' => 'mousquetaire'
    ]);

    getMusketeerById(7, null);

    function getMusketeerById(int $id, $int_min): void {
        global $data;
        if ($int_min == null) {
            $int_min = 0;
        }
        if ($id == null || $id < 1 || $id > count($data)) {
            showAllMusketeers($data, $int_min);
        } else {
            showMusketeer($data[$id], $int_min);
        }
    }

    function showMusketeer(array $musketeer, int $int_min): void {
        if ($musketeer['intelligence'] >= $int_min) {
            foreach ($musketeer as $key => $value) {
                echo $key . " : " . $value . "\n";
            }
        }
    }

    function showAllMusketeers(array $musketeers, int $int_min): void {
        foreach ($musketeers as $musketeer) {
            showMusketeer($musketeer, $int_min);
            echo "<br>";
        }
    }

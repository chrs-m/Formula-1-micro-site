<?php

declare(strict_types=1);

require __DIR__ . '/data.php';


function getTeamFromDriver($driverList, $driver)
{
    $returnTeam = [];
    foreach ($driverList as $name) {
        // print_r($name['name'] . "\n");
        if ($name['name'] === $driver) {
            array_push($returnTeam, $name);
        }
    }
    return $returnTeam;
};
// print_r(getTeamFromDriver($drivers, 'Lewis Hamilton'));


function getDriversFromTeam($driverList, $team)
{
    $returnTeam = [];
    foreach ($driverList as $name) {
        // print_r($name['name'] . "\n");
        if ($name['team'] === $team) {
            array_push($returnTeam, $name);
        }
    }
    return $returnTeam;
};
// print_r(getDriversFromTeam($drivers, 'McLaren F1 Team'));

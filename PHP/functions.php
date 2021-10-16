<?php

declare(strict_types=1);

require __DIR__ . '/data.php';


function getTeamFromDriver(array $driverList, string $driver): array
{
    $returnTeam = [];
    foreach ($driverList as $name) {
        // print_r($name['name'] . "\n");
        if ($name['name'] === $driver) {
            array_push($returnTeam, $name['team']);
        }
    }
    return $returnTeam;
};
// print_r(getTeamFromDriver($drivers, 'Lewis Hamilton'));


function getDriversFromTeam(array $driverList, string $team): array
{
    $returnDriver = [];
    foreach ($driverList as $name) {
        // print_r($name['name'] . "\n");
        if ($name['team'] === $team) {
            array_push($returnDriver, $name['name']);
        }
    }
    return $returnDriver;
};
// print_r(getDriversFromTeam($drivers, 'McLaren F1 Team'));


function isWinnerThisSeason(array $drivers): void
{
    foreach ($drivers as $driver) {
        if ($driver['wonThisSeason'] === true) {
            echo $driver['name'] . " (" . $driver['team'] . ")" . " is a winner this season.\n";
        } else {
            continue;
        }
    }
};

// (isWinnerThisSeason($drivers));

function age(int $birthyear): int
{
    return (date('Y')) - $birthyear;
}

// echo age($drivers);

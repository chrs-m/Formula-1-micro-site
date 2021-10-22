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


function isDriverAWinnerThisSeason(array $drivers): void
{
    foreach ($drivers as $driver) {
        if ($driver['wonThisSeason'] === true) {
            echo $driver['name'] . " (" . $driver['team'] . ")" . " is a winner this season.\n";
        } else {
            continue;
        }
    }
};

function isWinnerThisSeason(bool $hasWon): string
{
    return $hasWon ? "Yes" : "No";
};

function age(int $birthyear): int
{
    return (date('Y')) - $birthyear;
}

// echo age($drivers);




// function timeToNextRace()
// {
//     $date = strtotime("2021-10-24");
//     $remaining = $date - time();

//     $days_remaining = floor($remaining / 86400);
//     $hours_remaining = floor(($remaining % 86400) / 3600);
//     echo "$days_remaining days and $hours_remaining hours left";
// }

function nextRace(array $races): array
{
    $i = 0;

    foreach ($races as $race) {
        if (strtotime($race['dateTime']) > strtotime(date("Y-m-d"))) {
            return $races[$i];
        }
        $i += 1;
    }
}

function getLocation(array $races): string
{
    $nextRace = nextRace($races);
    return $nextRace['location'];
}

function getCircuit(array $races): string
{
    $nextRace = nextRace($races);
    return $nextRace['circuit'];
}

function getTimeToNextRace(array $races): string
{
    $nextRace = nextRace($races);
    $rem = strtotime($nextRace['dateTime']) - time();
    $day = floor($rem / 86400);
    $hr  = floor(($rem % 86400) / 3600);
    $min = floor(($rem % 3600) / 60);
    //    $sec = ($rem % 60);  
    // if ($day) echo "$day Days ";
    // if ($hr) echo "$hr Hours ";
    // if ($min) echo "$min Minutes ";
    //    if ($sec) echo "$sec Seconds ";
    // echo "Remaining...";

    $timeLeft = "$day Days $hr Hours $min Minutes Remaining";

    return $timeLeft;
}



function getDrivers(array $drivers, string $sorting)

{
    $sortByWins = array_column($drivers, 'wins');
    $sortByName = array_column($drivers, 'name');
    // SORTING = wins, name
    if ($sorting === "wins") {
        array_multisort($sortByWins, SORT_DESC, $drivers);
    } else if ($sorting === "name") {
        array_multisort($sortByName, SORT_ASC, $drivers);
    }

    return $drivers;
}

function getTeams(array $teams, string $sorting)

{
    $sortByWins = array_column($teams, 'wins');
    $sortByName = array_column($teams, 'name');
    $sortByChampionchips = array_column($teams, 'championchips');
    // SORTING = wins, name
    if ($sorting === "wins") {
        array_multisort($sortByWins, SORT_DESC, $teams);
    } else if ($sorting === "name") {
        array_multisort($sortByName, SORT_ASC, $teams);
    } else if ($sorting === "championchips") {
        array_multisort($sortByChampionchips, SORT_DESC, $teams);
    }

    return $teams;
}

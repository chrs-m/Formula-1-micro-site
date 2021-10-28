<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

// FUNCTION TO GET THE DRIVERS ASSOCIATED TEAM
function getTeamFromDriver(array $driverList, string $driver): array
{
    $returnTeam = [];
    foreach ($driverList as $name) {
        if ($name['name'] === $driver) {
            array_push($returnTeam, $name['team']);
        }
    }
    return $returnTeam;
};

// FUNCTION TO GET DRIVERS TO THEIR ASSOCIATED TEAMS
function getDriversFromTeam(array $driverList, string $team): array
{
    $returnDriver = [];
    foreach ($driverList as $name) {
        if ($name['team'] === $team) {
            array_push($returnDriver, $name['name']);
        }
    }
    return $returnDriver;
};


// A FUNCTION TO SEE IF A DRIVER IS A WINNER THIS SEASON OR NOT
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

//SIMPLIFIED FUNCTION TO CHECK IF A DRIVER IS A WINNER THIS SEASON
function isWinnerThisSeason(bool $hasWon): string
{
    return $hasWon ? "Yes" : "No";
};

//FUNCTION TO GET DRIVERS AGE
function age(int $birthyear): int
{
    return (date('Y')) - $birthyear;
}



//FUNCTION TO GET TIME TO RACE, ** NOT IN USE! **
function timeToNextRace()
{
    $date = strtotime("2021-10-24");
    $remaining = $date - time();

    $days_remaining = floor($remaining / 86400);
    $hours_remaining = floor(($remaining % 86400) / 3600);
    echo "$days_remaining days and $hours_remaining hours left";
}



//FUNCTION TO GET DATA FOR UPCOMING RACE
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


//FUNCTION TO GET LOCATION DATA FOR UPCOMING RACE
function getLocation(array $races): string
{
    $nextRace = nextRace($races);
    return $nextRace['location'];
}

//FUNCTION TO GET CIRCUIT DATA FOR UPCOMING RACE
function getCircuit(array $races): string
{
    $nextRace = nextRace($races);
    return $nextRace['circuit'];
}

//FUNCTION TO GET REMAINING TIME TO NEXT RACE
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


//FILTER/SORTING FUNCTION FOR DRIVERS
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

//FILTER/SORTING FUNCTION FOR TEAMS
function getTeams(array $teams, string $sorting)

{
    $sortByWins = array_column($teams, 'wins');
    $sortByName = array_column($teams, 'name');
    $sortByChampionchips = array_column($teams, 'championships');
    // SORTING = wins, name
    if ($sorting === "wins") {
        array_multisort($sortByWins, SORT_DESC, $teams);
    } else if ($sorting === "name") {
        array_multisort($sortByName, SORT_ASC, $teams);
    } else if ($sorting === "championships") {
        array_multisort($sortByChampionchips, SORT_DESC, $teams);
    }

    return $teams;
}

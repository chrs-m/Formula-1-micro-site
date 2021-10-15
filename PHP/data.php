<?php

declare(strict_types=1);


$drivers = [
    ['name' => 'Lewis Hamilton', 'team' => 'Mercedes-AMG Petronas F1 Team', 'birthYear' => 1985, 'wins' => 100, 'wonThisSeason' => true],
    ['name' => 'Valtteri Bottas', 'team' => 'Mercedes-AMG Petronas F1 Team', 'birthYear' => 1989, 'wins' => 10, 'wonThisSeason' => true],
    ['name' => 'Max Verstappen', 'team' => 'Red Bull Racing Honda', 'birthYear' => 1997, 'wins' => 17, 'wonThisSeason' => true],
    ['name' => 'Sergio Perez', 'team' => 'Red Bull Racing Honda', 'birthYear' => 1990, 'wins' => 2, 'wonThisSeason' => false],
    ['name' => 'Daniel Ricciardo', 'team' => 'McLaren F1 Team', 'birthYear' => 1989, 'wins' => 8, 'wonThisSeason' => true],
    ['name' => 'Lando Norris', 'team' => 'McLaren F1 Team', 'birthYear' => 1999, 'wins' => 0, 'wonThisSeason' => false],
    ['name' => 'Charles Leclerc', 'team' => 'Scuderia Ferrari Mission Winnow', 'birthYear' => 1997, 'wins' => 2, 'wonThisSeason' => false],
    ['name' => 'Carlos Sainz', 'team' => 'Scuderia Ferrari Mission Winnow', 'birthYear' => 1994, 'wins' => 0, 'wonThisSeason' => false],
    ['name' => 'George Russel', 'team' => 'Williams Racing', 'birthYear' => 1998, 'wins' => 0, 'wonThisSeason' => false],
    ['name' => 'Nicholas Latifi', 'team' => 'Williams Racing', 'birthYear' => 1995, 'wins' => 0, 'wonThisSeason' => false],

];

$teams = [
    ['name' => 'Mercedes-AMG Petronas F1 Team', 'year' => 1970, 'championchips' => 7, 'team principal' => 'Toto Wolff'],
    ['name' => 'Red Bull Racing Honda', 'year' => 1997, 'championchips' => 4, 'team principal' => 'Christian Horner'],
    ['name' => 'McLaren F1 Team', 'year' => 1966, 'championchips' => 8, 'team principal' => 'Andreas Seidl'],
    ['name' => 'Scuderia Ferrari Mission Winnow', 'year' => 1950, 'championchips' => 16, 'team principal' => 'Mattia Binotto'],
    ['name' => 'Williams Racing', 'year' => 1978, 'championchips' => 9, 'team principal' => 'Jost Capito'],
];


$teamsWithWinsThisSeason = [
    'Mercedes-AMG Petronas F1 Team',
    'Red Bull Racing Honda',
    'McLaren F1 Team'
];

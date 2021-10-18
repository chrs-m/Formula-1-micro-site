<?php

declare(strict_types=1);


$drivers = [
    [
        'name' => 'Lewis Hamilton',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/L/LEWHAM01_Lewis_Hamilton/lewham01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/lewis-hamilton.html',
        'team' => 'Mercedes-AMG Petronas F1 Team',
        'birthYear' => 1985,
        'nationality' => 'Great Britain',
        'wins' => 100,
        'wonThisSeason' => true,
    ],
    [
        'name' => 'Valtteri Bottas',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/V/VALBOT01_Valtteri_Bottas/valbot01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/valtteri-bottas.html',
        'team' => 'Mercedes-AMG Petronas F1 Team',
        'birthYear' => 1989,
        'nationality' => 'Finland',
        'wins' => 10,
        'wonThisSeason' => true,
    ],
    [
        'name' => 'Max Verstappen',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/M/MAXVER01_Max_Verstappen/maxver01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/max-verstappen.html',
        'team' => 'Red Bull Racing Honda',
        'birthYear' => 1997,
        'nationality' => 'Netherlands',
        'wins' => 17,
        'wonThisSeason' => true,
    ],
    [
        'name' => 'Sergio Perez',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/S/SERPER01_Sergio_Perez/serper01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/sergio-perez.html',
        'team' => 'Red Bull Racing Honda',
        'birthYear' => 1990,
        'nationality' => 'Mexico',
        'wins' => 2,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'Daniel Ricciardo',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/D/DANRIC01_Daniel_Ricciardo/danric01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/daniel-ricciardo.html',
        'team' => 'McLaren F1 Team',
        'birthYear' => 1989,
        'nationality' => 'Australia',
        'wins' => 8,
        'wonThisSeason' => true,
    ],
    [
        'name' => 'Lando Norris',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/L/LANNOR01_Lando_Norris/lannor01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/lando-norris.html',
        'team' => 'McLaren F1 Team',
        'birthYear' => 1999,
        'nationality' => 'Great Britain',
        'wins' => 0,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'Charles Leclerc',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/C/CHALEC01_Charles_Leclerc/chalec01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/charles-leclerc.html',
        'team' => 'Scuderia Ferrari Mission Winnow',
        'birthYear' => 1997,
        'nationality' => 'Monaco',
        'wins' => 2,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'Carlos Sainz',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/C/CARSAI01_Carlos_Sainz/carsai01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/carlos-sainz.html',
        'team' => 'Scuderia Ferrari Mission Winnow',
        'birthYear' => 1994,
        'nationality' => 'Spain',
        'wins' => 0,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'George Russel',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/G/GEORUS01_George_Russell/georus01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/george-russell.html',
        'team' => 'Williams Racing',
        'birthYear' => 1998,
        'nationality' => 'Great Britain',
        'wins' => 0,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'Nicholas Latifi',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/N/NICLAF01_Nicholas_Latifi/niclaf01.png.transform/2col-retina/image.png',
        'website' => 'https://www.formula1.com/en/drivers/nicholas-latifi.html',
        'team' => 'Williams Racing',
        'birthYear' => 1995,
        'nationality' => 'Canada',
        'wins' => 0,
        'wonThisSeason' => false,
    ],

];

$teams = [
    [
        'name' => 'Mercedes-AMG Petronas F1 Team',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/logo.img.jpg/1582638425211.jpg',
        'website' => 'https://www.formula1.com/en/teams/Mercedes.html',
        'year' => 1970,
        'championchips' => 7,
        'teamPrincipal' => 'Toto Wolff',
    ],
    [
        'name' => 'Red Bull Racing Honda',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/Red-Bull-Racing/_jcr_content/logo.img.jpg/1610719164360.jpg',
        'website' => 'https://www.formula1.com/en/teams/Red-Bull-Racing.html',
        'year' => 1997,
        'championchips' => 4,
        'teamPrincipal' => 'Christian Horner',
    ],
    [
        'name' => 'McLaren F1 Team',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/McLaren/_jcr_content/logo.img.jpg/1515152760829.jpg',
        'website' => 'https://www.formula1.com/en/teams/McLaren.html',
        'year' => 1966,
        'championchips' => 8,
        'teamPrincipal' => 'Andreas Seidl',
    ],
    [
        'name' => 'Scuderia Ferrari Mission Winnow',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/logo.img.jpg/1521797474166.jpg',
        'website' => 'https://www.formula1.com/en/teams/Ferrari.html',
        'year' => 1950,
        'championchips' => 16,
        'teamPrincipal' => 'Mattia Binotto',
    ],
    [
        'name' => 'Williams Racing',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/Williams/_jcr_content/logo.img.jpg/1590743731407.jpg',
        'website' => 'https://www.formula1.com/en/teams/Williams.html',
        'year' => 1978,
        'championchips' => 9,
        'teamPrincipal' => 'Jost Capito',
    ],
];


$teamsWithWinsThisSeason = [
    'Mercedes-AMG Petronas F1 Team',
    'Red Bull Racing Honda',
    'McLaren F1 Team',
];


$races = [
    ['location' => 'United states', 'date' => '1635033600', 'dateTime' => '2021-10-24 21:00:00', 'circuit' => 'Circuit of The Americas'],
    ['location' => 'Mexico', 'date' => '1636243200', 'dateTime' => '2021-11-07 20:00:00', 'circuit' => 'Autódromo Hermanos Rodríguez'],
    ['location' => 'Brazil', 'date' => '1636848000', 'dateTime' => '2021-11-14 18:00:00', 'circuit' => 'Autódromo José Carlos Pace'],
    ['location' => 'Qatar', 'date' => '1637452800', 'dateTime' => '2021-11-21 15:00:00', 'circuit' => 'Losail International Circuit'],
    ['location' => 'Saudi Arabia', 'date' => '1638662400', 'dateTime' => '2021-12-05 18:30:00', 'circuit' => 'Jeddah Corniche Circuit'],
    ['location' => 'Abu Dhabi', 'date' => '1639267200', 'dateTime' => '2021-12-12 14:00:00', 'circuit' => 'Yas Marina Circuit'],
];

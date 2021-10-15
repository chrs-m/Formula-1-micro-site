<?php

declare(strict_types=1);


$drivers = [
    [
        'name' => 'Lewis Hamilton',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/L/LEWHAM01_Lewis_Hamilton/lewham01.png.transform/2col-retina/image.png',
        'team' => 'Mercedes-AMG Petronas F1',
        'birthYear' => 1985,
        'nationality' => 'Great Britain',
        'wins' => 100,
        'wonThisSeason' => true,
    ],
    [
        'name' => 'Valtteri Bottas',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/V/VALBOT01_Valtteri_Bottas/valbot01.png.transform/2col-retina/image.png',
        'team' => 'Mercedes-AMG Petronas F1',
        'birthYear' => 1989,
        'nationality' => 'Finland',
        'wins' => 10,
        'wonThisSeason' => true,
    ],
    [
        'name' => 'Max Verstappen',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/M/MAXVER01_Max_Verstappen/maxver01.png.transform/2col-retina/image.png',
        'team' => 'Red Bull Racing Honda',
        'birthYear' => 1997,
        'nationality' => 'Netherlands',
        'wins' => 17,
        'wonThisSeason' => true,
    ],
    [
        'name' => 'Sergio Perez',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/S/SERPER01_Sergio_Perez/serper01.png.transform/2col-retina/image.png',
        'team' => 'Red Bull Racing Honda',
        'birthYear' => 1990,
        'nationality' => 'Mexico',
        'wins' => 2,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'Daniel Ricciardo',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/D/DANRIC01_Daniel_Ricciardo/danric01.png.transform/2col-retina/image.png',
        'team' => 'McLaren F1 Team',
        'birthYear' => 1989,
        'nationality' => 'Australia',
        'wins' => 8,
        'wonThisSeason' => true,
    ],
    [
        'name' => 'Lando Norris',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/L/LANNOR01_Lando_Norris/lannor01.png.transform/2col-retina/image.png',
        'team' => 'McLaren F1 Team',
        'birthYear' => 1999,
        'nationality' => 'Great Britain',
        'wins' => 0,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'Charles Leclerc',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/C/CHALEC01_Charles_Leclerc/chalec01.png.transform/2col-retina/image.png',
        'team' => 'Scuderia Ferrari Mission',
        'birthYear' => 1997,
        'nationality' => 'Monaco',
        'wins' => 2,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'Carlos Sainz',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/C/CARSAI01_Carlos_Sainz/carsai01.png.transform/2col-retina/image.png',
        'team' => 'Scuderia Ferrari Mission',
        'birthYear' => 1994,
        'nationality' => 'Spain',
        'wins' => 0,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'George Russel',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/G/GEORUS01_George_Russell/georus01.png.transform/2col-retina/image.png',
        'team' => 'Williams Racing',
        'birthYear' => 1998,
        'nationality' => 'Great Britain',
        'wins' => 0,
        'wonThisSeason' => false,
    ],
    [
        'name' => 'Nicholas Latifi',
        'image' => 'https://www.formula1.com/content/dam/fom-website/drivers/N/NICLAF01_Nicholas_Latifi/niclaf01.png.transform/2col-retina/image.png',
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
        'year' => 1970,
        'championchips' => 7,
        'teamPrincipal' => 'Toto Wolff',
    ],
    [
        'name' => 'Red Bull Racing Honda',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/Red-Bull-Racing/_jcr_content/logo.img.jpg/1610719164360.jpg',
        'year' => 1997,
        'championchips' => 4,
        'teamPrincipal' => 'Christian Horner',
    ],
    [
        'name' => 'McLaren F1 Team',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/McLaren/_jcr_content/logo.img.jpg/1515152760829.jpg',
        'year' => 1966,
        'championchips' => 8,
        'teamPrincipal' => 'Andreas Seidl',
    ],
    [
        'name' => 'Scuderia Ferrari Mission Winnow',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/logo.img.jpg/1521797474166.jpg',
        'year' => 1950,
        'championchips' => 16,
        'teamPrincipal' => 'Mattia Binotto',
    ],
    [
        'name' => 'Williams Racing',
        'image' => 'https://www.formula1.com/content/fom-website/en/teams/Williams/_jcr_content/logo.img.jpg/1590743731407.jpg',
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

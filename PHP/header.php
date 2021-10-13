<?php

declare(strict_types=1);
require __DIR__ . '/functions.php';
require __DIR__ . '/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/style.css" />
    <link rel="stylesheet" href="CSS/buttons.css" />
    <link rel="stylesheet" href="CSS/navigation.css" />
    <script src="https://cdn-tailwindcss.vercel.app/"></script>
    <title>Formula 1 Facts</title>
</head>

<body>
    <nav class="navbar w-full justify-between bg-red-700">
        <div class="logo">
            <img src="https://www.formula1.com/etc/designs/fom-website/images/f1_logo.svg" alt="F1 logo" srcset="" />
        </div>
        <div>
            <div class="topnav">
                <a class="active" href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
                <input type="text" placeholder="Search.." />
            </div>
        </div>
    </nav>
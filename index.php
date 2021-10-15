<?php
require __DIR__ . '/PHP/header.php'; ?>

<div class="container pt-16 text-center">
    <div class="teams bg-white mb-32">
        <div class="teams bg-white m-2 mb-20">
            <h1 class="text-3xl text-center font-bold">Mercedes F1</h1>
            <div class="logo object-contain">
                <a href="#"><img src="https://www.formula1.com/content/fom-website/en/teams/Mercedes/_jcr_content/logo.img.jpg/1582638425211.jpg" /></a>
            </div>
            <div class="drivers mb-20 bg-gray-200 p-2 rounded-2xl">
                <a href="HTML/Drivers/lewis.php">Lewis Hamilton</a> &
                <a href="HTML/Drivers/valtteri.html"> Valtteri Bottas</a>
            </div>
        </div>
        <div class="bg-gray-100 h-1 w-auto rounded-full mb-10"></div>
        <div class="teams bg-white mb-32">
            <h1 class="text-3xl text-center font-bold">Red Bull</h1>
            <div class="logo object-contain">
                <a href="#"><img src="https://www.formula1.com/content/fom-website/en/teams/Red-Bull-Racing/_jcr_content/logo.img.jpg/1610719164360.jpg" /></a>
            </div>
            <div class="drivers mb-20 bg-gray-200 p-2 rounded-2xl">
                <a href="HTML/Drivers/max.html">Max Verstappen</a> &
                <a href="HTML/Drivers/sergio.html">Sergio Perez</a>
            </div>
        </div>
        <div class="bg-gray-100 h-1 w-auto rounded-full mb-10"></div>
        <div class="teams bg-white mb-32">
            <h1 class="text-3xl text-center font-bold">McLaren F1</h1>
            <div class="logo object-contain">
                <a href="#"><img src="https://www.formula1.com/content/fom-website/en/teams/McLaren/_jcr_content/logo.img.jpg/1515152760829.jpg" /></a>
            </div>
            <div class="drivers mb-20 bg-gray-200 p-2 rounded-2xl">
                <a href="HTML/Drivers/daniel.html">Daniel Ricciardo</a> &
                <a href="HTML/Drivers/lando.html">Lando Norris</a>
            </div>
        </div>
        <div class="bg-gray-100 h-1 w-auto rounded-full mb-10"></div>
        <div class="teams bg-white mb-32">
            <h1 class="text-3xl text-center font-bold">Ferrari</h1>
            <div class="logo object-contain">
                <a href="#"><img src="https://www.formula1.com/content/fom-website/en/teams/Ferrari/_jcr_content/logo.img.jpg/1521797474166.jpg" /></a>
                <div class="drivers mb-20 bg-gray-200 p-2 rounded-2xl">
                    <a href="HTML/Drivers/charles.html">Charles Leclerc</a> &
                    <a href="HTML/Drivers/carlos.html">Carlos Sainz</a>
                </div>
            </div>
        </div>
    </div>

    <div class="
              w-full
              md:w-1/6
              bg-gray-900
              md:bg-gray-900
              px-2
              text-center
              fixed
              bottom-0
              md:pt-8 md:top-0 md:left-0
              h-16
              md:h-screen md:border-r-4 md:border-gray-600
            ">
        <div class="md:relative mx-auto lg:float-right lg:px-6">
            <ul class="
                  list-reset
                  flex flex-row
                  md:flex-col
                  text-center
                  md:text-left
                ">
                <li class="mr-3 flex-1">
                    <a href="#" class="
                      pb-1
                      md:pb-0
                      text-xl
                      md:text-base
                      text-white
                      font-bold
                      block
                      md:inline-block
                      hover:text-white
                      border-b-2 border-gray-800
                      md:border-gray-900
                      hover:border-pink-500
                      md:text-3xl
                      lg:text-4xl
                    ">Start</a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="#" class="
                      pb-1
                      md:pb-0
                      text-xl
                      md:text-base
                      text-gray-600
                      md:text-gray-400
                      block
                      md:inline-block
                      hover:text-white
                      border-b-2 border-gray-800
                      md:border-gray-900
                      hover:border-pink-500
                      md:text-2xl
                      lg:text-4xl
                    ">Search</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Footer -->
    <?php require __DIR__ . '/PHP/footer.php'; ?>
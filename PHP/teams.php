<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/navbar.php'; ?>


<!-- SORTING FUNCTION -->
<?php
$sorting = 'team';

if (isset($_GET['sorting']) && !empty($_GET['sorting'])) {
    $sorting = $_GET['sorting'];
} ?>

<div class="mb-5 mt-5">
    <div class="">
        <form class="absolute right-[33%] text-xs sm:right-[5%] sm:text-lg" action="./teams.php" id="sorting-form">
            <label class="mr-1" for="sorting">Sort by:</label>
            <select class="border border-black rounded-md" name="sorting" id="">
                <option value="name" disabled selected> </option>
                <option value="team">Default</option>
                <option value="name">Name</option>
                <option value="wins">Wins</option>
                <option value="championchips">Championchips</option>
            </select>
        </form>

        <!-- TEAMS INFO -->
        <div class="mb-20">
            <main class="grid grid-cols-1 sm:grid-cols-2 sm:gap-1 pt-10">
                <?php foreach (getTeams($teams, $sorting) as $team) : ?>
                    <?php
                    $driversFromTeam = getDriversFromTeam($drivers, $team['name']);
                    $driversString = implode(" & ", $driversFromTeam);
                    ?>
                    <article class="grid justify-items-center mb-20 sm:text-xs">
                        <img class="scale-75 motion-safe:hover:scale-90 filter grayscale hover:filter-none" src="<?php echo $team['image']; ?>" alt="<?php echo $team['name']; ?>">
                        <h2 class="uppercase font-bold sm:text-lg text-base text-center hover:text-pink-500"><a href="<?php echo $team['website'] ?>"><?php echo $team['name']; ?></a></h2>
                        <div class="flex flex-col items-center justify-center justify-items-center">
                            <p class="sm:text-lg text-sm text-center"><?php echo "Drivers: " . $driversString; ?></p>
                            <p class="sm:text-lg text-sm"><?php echo "Team Principal: " . $team['teamPrincipal']; ?></p>
                            <p class="sm:text-lg text-sm"><?php echo "Championchips: " . $team['championchips']; ?></p>
                            <p class="sm:text-lg text-sm"><?php echo "Race wins: " . $team['wins']; ?></p>
                            <p class="sm:text-lg text-sm"><?php echo "Race debut: " . $team['year']; ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </main>
        </div>

        <!-- NAVBAR FIX -->
        <style>
            ul>li:nth-of-type(2)>a {
                color: white;
                text-transform: uppercase;
            }
        </style>

        <?php require __DIR__ . '/footer.php'; ?>
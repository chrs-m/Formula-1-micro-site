<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/navbar_drivers.php'; ?>


<?php $sortByWins = array_column($drivers, 'name');
(array_multisort($sortByWins, SORT_ASC, $drivers));
?>

<div class="mb-5 mt-5">
    <div class="">
        <a class="absolute right-0" href="drivers.php">Sort by team</a>
        <a class="absolute right-0 top-10" href="drivers_sorted_wins.php">Sort by wins</a>
        <main class="grid grid-cols-2 gap-1">
            <?php foreach ($drivers as $driver) : ?>
                <article class="grid justify-items-center place-content-between mb-10 rounded-lg hover:bg-gray-100">
                    <img class="scale-90 motion-safe:hover:scale-100 filter grayscale hover:filter-none" src="<?php echo $driver['image']; ?>" alt="<?php echo $driver['name']; ?>">
                    <h2 class="uppercase font-bold sm:text-lg text-xs text-center hover:text-pink-500"><a href="<?php echo $driver['website'] ?>"><?php echo $driver['name']; ?></a></h2>
                    <div class="flex flex-col items-center justify-center justify-items-center sm:text-lg text-xs text-center">
                        <p class="text-center"><?php echo $driver['team']; ?></p>
                        <p class="sm:text-lg text-xs text-center"><?php echo "Nationality: " . $driver['nationality']; ?></p>
                        <p class="sm:text-lg text-xs text-center"><?php echo "Age: " . age($driver['birthYear']); ?></p>
                        <p class="sm:text-lg text-xs text-center"><?php echo "Wins: " . $driver['wins']; ?></p>
                        <p class="sm:text-lg text-xs text-center"><?php echo "Won this season: " . isWinnerThisSeason($driver['wonThisSeason']); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </main>
    </div>
</div>



<?php require __DIR__ . '/footer.php'; ?>
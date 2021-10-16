<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/navbar_teams.php'; ?>


<div class="mb-20">
    <main class="grid grid-cols-2 gap-1">
        <?php foreach ($teams as $team) : ?>
            <article class="grid justify-items-center mb-20 sm:text-xs">
                <img class="scale-75 motion-safe:hover:scale-90" src="<?php echo $team['image']; ?>" alt="<?php echo $team['name']; ?>">
                <h2 class="uppercase font-bold sm:text-lg text-xs text-center"><?php echo $team['name']; ?></h2>
                <div class="flex flex-col items-center justify-center justify-items-center">
                    <p class="sm:text-lg text-xs"><?php echo "Team Principal: " . $team['teamPrincipal']; ?></p>
                    <p class="sm:text-lg text-xs"><?php echo "Championchips: " . $team['championchips']; ?></p>
                </div>

            </article>
        <?php endforeach; ?>
    </main>
</div>



<?php require __DIR__ . '/footer.php'; ?>
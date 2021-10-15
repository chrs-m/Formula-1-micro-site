<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/navbar.php'; ?>


<div class="mb-20">
    <main class="grid">
        <?php foreach ($teams as $team) : ?>
            <article class="grid justify-items-center text-xs">
                <img class="scale-75" src="<?php echo $team['image']; ?>" alt="<?php echo $team['name']; ?>">
                <h2 class="font-bold text-lg"><?php echo $team['name']; ?></h2>
                <p><?php echo "Team Principal: " . $team['teamPrincipal']; ?></p>
                <p><?php echo "Championchips: " . $team['championchips']; ?></p>

            </article>
        <?php endforeach; ?>
    </main>
</div>



<?php require __DIR__ . '/footer.php'; ?>
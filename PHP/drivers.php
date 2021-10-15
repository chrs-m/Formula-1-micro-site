<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/navbar.php'; ?>


<div class="mb-5 mt-5">
    <div class="">
        <main class="grid grid-cols-2 gap-1">
            <?php foreach ($drivers as $driver) : ?>
                <article class="grid justify-items-center place-content-between text-xs mb-10">
                    <img class="" src="<?php echo $driver['image']; ?>" alt="<?php echo $driver['name']; ?>">
                    <h2 class="font-bold text-lg"><?php echo $driver['name']; ?></h2>
                    <p class=""><?php echo $driver['team']; ?></p>
                    <p class="space-between"><?php echo "Nationality: " . $driver['nationality']; ?></p>
                    <p><?php echo "Age: " . age($driver['birthYear']); ?></p>
                    <p><?php echo "Wins: " . $driver['wins']; ?></p>

                </article>
            <?php endforeach; ?>
        </main>
    </div>
</div>



<?php require __DIR__ . '/footer.php'; ?>
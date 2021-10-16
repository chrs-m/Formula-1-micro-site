<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/navbar_drivers.php'; ?>


<div class="mb-5 mt-5">
    <div class="">
        <main class="grid grid-cols-2 gap-1">
            <?php foreach ($drivers as $driver) : ?>
                <article class="grid justify-items-center place-content-between mb-10 rounded-lg hover:bg-gray-100">
                    <img class="scale-90 motion-safe:hover:scale-100" src="<?php echo $driver['image']; ?>" alt="<?php echo $driver['name']; ?>">
                    <h2 class="font-bold text-lg uppercase"><?php echo $driver['name']; ?></h2>
                    <div class="flex flex-col items-center justify-center justify-items-center sm:text-lg text-xs text-center">
                        <p class="text-center"><?php echo $driver['team']; ?></p>
                        <p class="sm:text-lg text-xs text-center"><?php echo "Nationality: " . $driver['nationality']; ?></p>
                        <p class="sm:text-lg text-xs text-center"><?php echo "Age: " . age($driver['birthYear']); ?></p>
                        <p class="sm:text-lg text-xs text-center"><?php echo "Wins: " . $driver['wins']; ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </main>
    </div>
</div>



<?php require __DIR__ . '/footer.php'; ?>
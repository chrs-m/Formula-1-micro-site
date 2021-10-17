<?php require __DIR__ . '/header.php'; ?>
<?php require __DIR__ . '/navbar_teams.php'; ?>


<div class="mainDiv">
  <main class="teamsMain">
    <?php foreach ($teams as $team) : ?>
      <article class="teamsArticle">
        <div class="teamLogo">
          <img class="" src="<?php echo $team['image']; ?>" alt="<?php echo $team['name']; ?>" />
        </div>
        <h2 class="">
          <?php echo $team['name']; ?>
          <p class="">
            <?php echo "Team Principal: " . $team['teamPrincipal']; ?>
          </p>
          <p class="">
            <?php echo "Championchips: " . $team['championchips']; ?>
          </p>
      </article>
    <?php endforeach; ?>
  </main>
</div>

<?php require __DIR__ . '/footer.php'; ?>
<?php
include 'includes/header.php';
?>

<main>
    <div id="paneles">
        <div class="panel active" data-section="profile">
            <?php include 'sections/part1-profile.php'; ?>
        </div>

        <div class="panel" data-section="music">
            <?php include 'sections/part2-music.php'; ?>
        </div>

        <div class="panel" data-section="movies">
            <?php include 'sections/part3-movies.php'; ?>
        </div>

        <div class="panel" data-section="menu">
            <?php include 'sections/part4-menu.php'; ?>
        </div>

        <div class="panel" data-section="event">
            <?php include 'sections/part5-event.php'; ?>
        </div>

        <div class="panel" data-section="travel">
            <?php include 'sections/part6-travel.php'; ?>
        </div>
    </div>
</main>

<?php
include 'includes/footer.php';
?>
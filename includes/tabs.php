<?php
$sections = [
    'profile' => 'Perfil',
    'music' => 'Música',
    'movies' => 'Películas',
    'menu' => 'Menú',
    'event' => 'Eventos',
    'travel' => 'Viajes'
];
?>

<nav class="tabs">
    <ul>
        <?php 
        $index = 0;
        foreach ($sections as $key => $value) {
            $activeClass = $index === 0 ? 'active' : '';
            $index++;
        ?>
            <li>
                <a href="#" 
                   data-section="<?php echo $key; ?>"
                   class="tab-link <?php echo $activeClass; ?>">
                    <?php echo $value; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>
<?php
$sections = [
    'profile' => ['label' => 'Perfil', 'icon' => 'user'],
    'music' => ['label' => 'Música', 'icon' => 'music'],
    'movies' => ['label' => 'Películas', 'icon' => 'film'],
    'menu' => ['label' => 'Menú', 'icon' => 'utensils'],
    'event' => ['label' => 'Eventos', 'icon' => 'calendar'],
    'travel' => ['label' => 'Viajes', 'icon' => 'plane'],
];
?>

<nav class="tabs">
    <ul>
        <?php 
        $index = 0;
        foreach ($sections as $key => $data) {
            $activeClass = $index === 0 ? 'active' : '';
            $index++;
        ?>
            <li>
                <a href="#" 
                   data-section="<?php echo $key; ?>"
                   class="tab-link <?php echo $activeClass; ?>">
                    <i data-lucide="<?php echo $data['icon']; ?>"></i>
                    <span><?php echo $data['label']; ?></span>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>
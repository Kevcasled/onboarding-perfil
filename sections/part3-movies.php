<?php
$totalMovies = 5;
$totalHours = 8.5;

$totalMinutes = 117 + 95 + 105 + 110 + 98;
$averageMinutes = $totalMinutes / $totalMovies;
$averageHours = floor($averageMinutes / 60);
$averageRemainingMinutes = $averageMinutes % 60;
$averageDuration = $averageHours . "h " . $averageRemainingMinutes . "min";
?>

<div class="section movies">
    <h2>Maratón de Películas</h2>

    <div class="marathon-summary">
        <p>Plan del maratón con mis amigos. Vamos a ver <strong><?php echo $totalMovies; ?> películas</strong> en un total de <strong><?php echo $totalHours; ?> horas</strong></p>
        <p>La duración media por película es de <strong><?php echo $averageDuration; ?></strong>.</p>
    </div>

    <div class="marathon-table-container">
        <table class="marathon-table">
            <thead>
                <tr>
                    <th>Póster</th>
                    <th>Película</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="assets/img/kimetsunoyaiba.webp" alt="Kimetsu no Yaiba" class="movie-poster"></td>
                    <td class="movie-title">Kimetsu no Yaiba: La Fortaleza Infinita</td>
                    <td class="movie-duration">2h 57min</td>
                </tr>
                <tr>
                    <td><img src="assets/img/tron-ares.jpg" alt="Tron: Ares" class="movie-poster"></td>
                    <td class="movie-title">Tron: Ares</td>
                    <td class="movie-duration">1h 35min</td>
                </tr>
                <tr>
                    <td><img src="assets/img/chainsawman.png" alt="Chainsaw Man" class="movie-poster"></td>
                    <td class="movie-title">Chainsaw Man: El Arco de Reze</td>
                    <td class="movie-duration">1h 45min</td>
                </tr>
                <tr>
                    <td><img src="assets/img/expedientewarren.jpg" alt="Expediente Warren" class="movie-poster"></td>
                    <td class="movie-title">Expediente Warren: El Último Rito</td>
                    <td class="movie-duration">1h 50min</td>
                </tr>
                <tr>
                    <td><img src="assets/img/Los_tipos_malos_2_poster.webp" alt="Los Tipos Malos 2" class="movie-poster"></td>
                    <td class="movie-title">Los Tipos Malos 2</td>
                    <td class="movie-duration">1h 38min</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="marathon-info">
        <p><i data-lucide="calendar"></i> <strong>Fecha estimada:</strong> Próximo fin de semana</p>
        <p><i data-lucide="users"></i> <strong>Con:</strong> Grupo de amigos cercanos</p>
        <p><i data-lucide="cup-soda"></i> <strong>Preparación:</strong> Palomitas, bebidas y un ambiente cómodo</p>
        <p><i data-lucide="bar-chart-2"></i> <strong>Estadísticas:</strong> Duración total <?php echo $totalMinutes; ?> minutos, media <?php echo $averageDuration; ?> por película</p>
    </div>
</div>
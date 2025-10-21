<?php
// Variables PHP para el menú favorito
$plato1 = "Milanesa";
$precio1 = 12.50;

$plato2 = "Canelones";
$precio2 = 15.00;

$plato3 = "Bistec con Patatas";
$precio3 = 18.75;
?>

<div class="section menu">
    <h2>Mi Menú Favorito</h2>

    <!-- Galería de comidas favoritas -->
    <div class="menu-gallery">
        <div class="food-card">
            <div class="food-image">
                <img src="assets/img/milanesa.jpg" alt="<?php echo $plato1; ?>" onerror="this.parentElement.innerHTML='<div class=\'food-placeholder\'>🍖 Milanesa</div>'">
            </div>
            <div class="food-info">
                <h3><?php echo $plato1; ?></h3>
                <p class="food-price"><?php echo number_format($precio1, 2, ',', '.'); ?>€</p>
                <p>Deliciosa milanesa de carne empanizada, crujiente por fuera y jugosa por dentro. Servida con papas fritas y ensalada fresca.</p>
            </div>
        </div>

        <div class="food-card">
            <div class="food-image">
                <img src="assets/img/canelones-carne.jpg" alt="<?php echo $plato2; ?>" onerror="this.parentElement.innerHTML='<div class=\'food-placeholder\'>🍝 Canelones</div>'">
            </div>
            <div class="food-info">
                <h3><?php echo $plato2; ?></h3>
                <p class="food-price"><?php echo number_format($precio2, 2, ',', '.'); ?>€</p>
                <p>Canelones rellenos de carne y verduras, cubiertos con una exquisita salsa bechamel y queso gratinado. Una receta tradicional italiana.</p>
            </div>
        </div>

        <div class="food-card">
            <div class="food-image">
                <img src="assets/img/bistec.jpg" alt="<?php echo $plato3; ?>" onerror="this.parentElement.innerHTML='<div class=\'food-placeholder\'>🥩 Bistec con Patatas</div>'">
            </div>
            <div class="food-info">
                <h3><?php echo $plato3; ?></h3>
                <p class="food-price"><?php echo number_format($precio3, 2, ',', '.'); ?>€</p>
                <p>Suculento bistec de ternera a la parrilla, acompañado de patatas asadas con hierbas aromáticas. Una combinación clásica y sabrosa.</p>
            </div>
        </div>
    </div>

    <div class="menu-summary">
        <p><strong>🍴 Total del menú completo:</strong> <?php echo number_format($precio1 + $precio2 + $precio3, 2, ',', '.'); ?>€</p>
        <p>Mi selección favorita de platos. Cada uno tiene su propio sabor único y recuerdo especial.</p>
    </div>
</div>
<?php
$destino = "Argentina";
$dias = 7;
?>

<div class="section travel">
    <h2>Próximo Viaje</h2>
    
    <div class="travel-message">
        <p class="main-message">Mi próximo viaje será a <strong><?php echo $destino; ?></strong>, durante <strong><?php echo $dias; ?> días</strong>.</p>
    </div>

    <div class="travel-card-main">
        <div class="travel-icon">
            <i data-lucide="plane"></i>
        </div>
        
        <div class="travel-details">
            <h3><?php echo $destino; ?></h3>
            <p class="travel-duration">Duración: <?php echo $dias; ?> días (1 semana)</p>
            
            <div class="travel-info-grid">
                <div class="info-item">
                    <i data-lucide="calendar"></i>
                    <div>
                        <strong>Fechas estimadas</strong>
                        <p>Diciembre 2025</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <i data-lucide="map-pin"></i>
                    <div>
                        <strong>Ciudades a visitar</strong>
                        <p>Buenos Aires, Mendoza, Bariloche</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <i data-lucide="compass"></i>
                    <div>
                        <strong>Actividades planeadas</strong>
                        <p>Tango, degustación de vinos, senderismo</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <i data-lucide="utensils"></i>
                    <div>
                        <strong>Gastronomía</strong>
                        <p>Asado argentino, empanadas, mate</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="travel-map">
            <div class="map-placeholder">
                <i data-lucide="map"></i>
            </div>
        </div>
    </div>
    
    <div class="travel-expectations">
        <h4>Lo que más espero del viaje</h4>
        <ul>
            <li><i data-lucide="chevron-right"></i> Experimentar la cultura del tango en Buenos Aires</li>
            <li><i data-lucide="chevron-right"></i> Visitar viñedos en la región de Mendoza</li>
            <li><i data-lucide="chevron-right"></i> Explorar los paisajes de la Patagonia en Bariloche</li>
            <li><i data-lucide="chevron-right"></i> Disfrutar de la gastronomía argentina</li>
            <li><i data-lucide="chevron-right"></i> Capturar momentos inolvidables</li>
        </ul>
    </div>
</div>
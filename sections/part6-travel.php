<?php
$destino = "Argentina";
$dias = 7;
?>

<div class="section travel">
    <h2>✈️ Próximo Viaje</h2>
    
    <div class="travel-message">
        <p class="main-message">Mi próximo viaje será a <strong><?php echo $destino; ?></strong>, durante <strong><?php echo $dias; ?> días</strong>.</p>
    </div>

    <div class="travel-card-main">
        <div class="travel-icon">
            ✈️
        </div>
        
        <div class="travel-details">
            <h3><?php echo $destino; ?></h3>
            <p class="travel-duration">Duración: <?php echo $dias; ?> días (1 semana)</p>
            
            <div class="travel-info-grid">
                <div class="info-item">
                    <div>
                        <strong>Fechas estimadas</strong>
                        <p>Diciembre 2025</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div>
                        <strong>Ciudades a visitar</strong>
                        <p>Buenos Aires, Mendoza, Bariloche</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div>
                        <strong>Actividades planeadas</strong>
                        <p>Tango, degustación de vinos, senderismo</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div>
                        <strong>Gastronomía</strong>
                        <p>Asado argentino, empanadas, mate</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="travel-map">
            <div class="map-placeholder">
                🗺️
            </div>
        </div>
    </div>
    
    <div class="travel-expectations">
        <h4>Lo que más espero del viaje</h4>
        <ul>
            <li>Experimentar la cultura del tango en Buenos Aires</li>
            <li>Visitar viñedos en la región de Mendoza</li>
            <li>Explorar los paisajes de la Patagonia en Bariloche</li>
            <li>Disfrutar de la gastronomía argentina</li>
            <li>Capturar momentos inolvidables</li>
        </ul>
    </div>
</div>
<?php
$inscripcion = 150.00;
$taller = 75.50;
$total = $inscripcion + $taller;
?>

<div class="section event">
    <h2>Evento de Formación Profesional</h2>
    
    <div class="event-summary">
        <p>Voy a asistir a un evento de formación profesional en desarrollo web y gestión empresarial.</p>
    </div>

    <div class="event-ticket">
        <h3><i data-lucide="ticket"></i> Resumen de Inscripción</h3>
        
        <div class="event-info">
            <p><strong>Evento:</strong> Conferencia de Desarrollo Web & Business</p>
            <p><strong>Lugar:</strong> Centro de Convenciones, Barcelona</p>
            <p><strong>Fecha:</strong> 15-16 Noviembre 2025</p>
        </div>

        <div class="cost-breakdown">
            <div class="cost-item">
                <span class="cost-label">Inscripción General</span>
                <span class="cost-value"><?php echo number_format($inscripcion, 2, ',', '.'); ?>€</span>
            </div>
            <div class="cost-item">
                <span class="cost-label">Taller Adicional: "Estrategias de Negocio Digital"</span>
                <span class="cost-value"><?php echo number_format($taller, 2, ',', '.'); ?>€</span>
            </div>
            <div class="cost-separator"></div>
            <div class="cost-item cost-total">
                <span class="cost-label"><strong>Total a Pagar</strong></span>
                <span class="cost-value"><strong><?php echo number_format($total, 2, ',', '.'); ?>€</strong></span>
            </div>
        </div>

        <div class="event-benefits">
            <h4>Incluye:</h4>
            <ul>
                <li><i data-lucide="check"></i> Acceso a todas las conferencias principales</li>
                <li><i data-lucide="check"></i> Material del taller especializado</li>
                <li><i data-lucide="check"></i> Networking con profesionales del sector</li>
                <li><i data-lucide="check"></i> Certificado de asistencia</li>
                <li><i data-lucide="check"></i> Coffee breaks y almuerzo</li>
            </ul>
        </div>
    </div>
</div>
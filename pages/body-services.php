<?php


?>
<section class='pb-[3rem] pt-[3rem]'>
<div id="grid-container" class="grid grid-cols-2 container mx-auto">
  <?php
  // Datos de las tarjetas
  $cardsData = array(
    array(
      "title" => "Constelación familiar individual.",
      "paragraph" => "Descubre una oportunidad única para liberarte de bloqueos pasados y tener paz. Ya sea por reconciliación, sanación de relaciones, síntomas físicos o claridad financiera, nuestro enfoque te guía hacia una transformación profunda.",
      "subtitle" => "$600 MXN- 45 a 60 minutos.",
      "button1Text" => "VER MÁS",
      "button2Text" => "RESERVA"
    ),
    array(
      "title" => "Constelación familiar en pareja.",
      "paragraph" => "Explora la sanación sistémica para parejas. Abordamos juntos desafíos como comunicación, infidelidad y relaciones familiares, en una sesión integral centrada en el crecimiento y la armonía.",
      "subtitle" => "$900 MXN- 60 a 90 minutos.",
      "button1Text" => "VER MÁS",
      "button2Text" => "RESERVA"
    ),
    array(
        "title" => "Sanación con guías.",
        "paragraph" => "Encuentra respuestas y avanza hacia la plenitud. Conectamos con tus guías para más energía, orientación en decisiones físicas, proyectos y contacto con ellos, actuando como un traductor hacia la sanación.",
        "subtitle" => "$1700 MXN- 60 a 90 minutos.",
        "button1Text" => "VER MÁS",
        "button2Text" => "RESERVA"
      ),
      array(
        "title" => "Sanación Akáshica.",
        "paragraph" => "Conecta con programaciones que impactan tu presente, provenientes de esta vida o vidas pasadas. Resuelve temas pendientes de tiempo atrás y sana para tu plenitud.",
        "subtitle" => "$1700 MXN- 60 a 90 minutos.",
        "button1Text" => "VER MÁS",
        "button2Text" => "RESERVA"
      ),
      array(
        "title" => "Sanación con maestros.",
        "paragraph" => "Invocamos seres ascendidos para la sanación. Apoyan en la cura de patologías como salud, amor, comunicación, economía y unidad familiar, guiándote hacia el bienestar integral, actúan como guardianes durante el proceso de sanación.",
        "subtitle" => "$1700 MXN- 45 a 60 minutos.",
        "button1Text" => "VER MÁS",
        "button2Text" => "RESERVA"
      ),
      array(
        "title" => "Sanación de fallecidos y contacto con ellos.",
        "paragraph" => "Guía a tus seres queridos fallecidos hacia la paz, sanando y resolviendo lo pendiente, diles aquello que no pudiste en vida y acompáñalos hacia la luz del más allá para una transición pacífica.",
        "subtitle" => "$1800 MXN- 45 a 60 minutos.",
        "button1Text" => "VER MÁS",
        "button2Text" => "RESERVA"
      ),
      array(
        "title" => "Limpieza energética de casa o negocio.",
        "paragraph" => "¡Eleva la energía de tu hogar o negocio! Despídete de la negatividad, las entidades y las emociones estancadas para dar vida a un espacio lleno de vitalidad. Envía tu ubicación y déjanos hacer el resto.",
        "subtitle" => "$1700 MXN- 90 a 120 minutos.",
        "button1Text" => "VER MÁS",
        "button2Text" => "RESERVA"
      ),
      array(
        "title" => "Limpieza energética a personas, animales o plantas.",
        "paragraph" => "Armonizamos chakras, sanamos emociones y promovemos bienestar en seres humanos, animales y plantas. ¡Eleva tu energía y la de tus compañeros con nosotros!",
        "subtitle" => "$1200 MXN- 45 a 60 minutos.",
        "button1Text" => "VER MÁS",
        "button2Text" => "RESERVA"
      ),
      array(
        "title" => "Limpieza energética de autos / transportes.",
        "paragraph" => "Eliminamos las energías negativas y entidades que podrían desencadenar accidentes y fallas emocionales con tu energía, viaja de forma segura y armoniosa. ¡Tu seguridad en la carretera es nuestra prioridad!",
        "subtitle" => "$1200 MXN- 45 a 60 minutos.",
        "button1Text" => "VER MÁS",
        "button2Text" => "RESERVA"
      ),
      array(
        "title" => "Título de la Tarjeta 10",
        "paragraph" => "Párrafo de la tarjeta 10.",
        "subtitle" => "Subtítulo 2",
        "button1Text" => "VER MÁS",
        "button2Text" => "RESERVA"
      ),

   
  );


  foreach ($cardsData as $cardData) {
    echo '
      <div class=" rounded-lg p-6 text-center w-[70%] mx-auto">
        <h3 class="text-xl font-bold mb-4">' . $cardData["title"] . '</h3>
        <p class="text-gray-700 mb-2">' . $cardData["paragraph"] . '</p>
        <h2 class="text-lg font-semibold mb-2">' . $cardData["subtitle"] . '</h2>
        <div class="flex items-center justify-center p-[3rem]">
           <button class=" font-rosario bg-transparent border border-gray-900 text-gray-900 py-3 px-5 rounded-full text-sm mr-4">' . $cardData["button1Text"] . '</button>
           <button class="font-rosario bg-[#BD9062] py-3 px-5 rounded-full text-white text-[14px]">' . $cardData["button2Text"] . '</button>
        </div>
      </div>';
  }
  ?>
</div>
</section>
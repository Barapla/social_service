
<?php
    // Initialize the $page_content variable with an empty string
    $page_content = "";

    // Append the content of individual includes to the $page_content
    $page_content .= '<!-- Hero partial -->' . file_get_contents("../plugins/partials/heroEvents.html");
    $page_content .= '<!-- Raffle partial -->' . file_get_contents("../plugins/partials/raffle.html");
    $page_content .= '<!-- Contact partial -->' . file_get_contents("../plugins/partials/contact.html");
    $page_content .= '<!-- Modal partial -->' . file_get_contents("../plugins/partials/modal.html");
    $page_content .= '<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>';

    include('./layout.php');
  ?>
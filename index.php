
  <?php
    // Initialize the $page_content variable with an empty string
    $page_content = "";

    // Append the content of individual includes to the $page_content
    $page_content .= '<!-- Hero partial -->' . file_get_contents("./plugins/partials/hero.html");
    $page_content .= '<!-- Stats partial -->' . file_get_contents("./plugins/partials/stats.html");
    $page_content .= '<!-- About partial -->' . file_get_contents("./plugins/partials/about.html");
    $page_content .= '<!-- Area partial -->' . file_get_contents("./plugins/partials/areas.html");
    $page_content .= '<!-- Workshop partial -->' . file_get_contents("./plugins/partials/workshops.html");
    $page_content .= '<!-- Testimonial partial -->' . file_get_contents("./plugins/partials/testimonial.html");
    $page_content .= '<!-- Help Us partial -->' . file_get_contents("./plugins/partials/help_us.html");
    $page_content .= '<!-- Raffle partial -->' . file_get_contents("./plugins/partials/raffle.html");
    $page_content .= '<!-- Contact partial -->' . file_get_contents("./plugins/partials/contact.html");
    $page_content .= '<!-- Modal partial -->' . file_get_contents("./plugins/partials/modal.html");
    
    include('./layout.php');
  ?>

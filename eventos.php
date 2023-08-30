<?php
    // Initialize the $page_content variable with an empty string
    $page_content = "";

    // Append the content of individual includes to the $page_content
    $page_content .= '<!-- imageSlider partial -->' . file_get_contents("./plugins/partials/imageSlider.html");

    include('./layout.php');
  ?>
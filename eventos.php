<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRIISMA</title>
  <link href="./plugins/src/css/output.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar partial -->
    <div class="h-full w-full">
      <?php include "./plugins/partials/navbar.html" ?>
    </div>
    
    <!-- Hero partial -->
    <?php include "./plugins/partials/heroEvents.html" ?>

    <!-- Raffle partial -->
    <?php include "./plugins/partials/raffle.php" ?>

    <!-- Contact partial -->
    <?php include "./plugins/partials/contact.html" ?>

    <!-- Modal partial -->
    <?php include "./plugins/partials/modal.html" ?>

    <!-- Footer partial -->
    <?php include "./plugins/partials/footer.html" ?>

    
</body>
<!-- Scripts -->
<!-- <script>
    const Item = document.getElementById("eventos_li");
    const text = Item.firstChild;
    if (Item) {
      Item.style.backgroundColor = "#9a1d78";
      text.style.color = "#9a1d78";
    } else {
      console.error("Element with ID '" + id + "' not found!");
    }
</script> -->
<script src="./plugins/src/js/navbar.js"></script>
<script src="./plugins/src/js/modal.js"></script>
<script src="./plugins/src/js/stats.js"></script>
<script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
</html>

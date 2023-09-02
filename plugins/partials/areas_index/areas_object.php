
<div class="wrapper" style="transform: translate(<?php echo $x_move?>%, 0px);">
    <div class="oval-frame">
      <img src= <?php echo $img_route;?> alt="Imagen ovalada">
    </div>
    <div class="horizontal-band" style= "background-color: <?php echo $band_color;?>; /* Color de la banda */">
      <div class="band-content">
        <p><?php echo $area_name;?></p>
      </div>
    </div>
  </div>
  
  <style>
    .wrapper {
      position: relative;
      display: flex;
      align-items: center;
      width: 100%; /* Ancho total */
      margin: 0 auto; /* Centrar en la pantalla */
      margin-top: 20px;
      margin-bottom: 20px;
    }
  
    .oval-frame {
      position: absolute;
      width: 100px;
      height: 60px;
      border-radius: 50%;
      overflow: hidden;
      
    }
  
    .oval-frame img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  
    .horizontal-band {
      margin-left: 50px;
      padding: 10px;
      flex-grow: 1; /* Ocupar el espacio restante */
    }
  
    .band-content {
      margin-left: 100px;
      color: #ffffff; /* Color del texto */
    }
  </style>
  
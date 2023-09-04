
<div class="flex items-center justify-center" style="width: 100%">
    <div style="width:20%">
        <img class="w-64 h-64 object-cover"src="/plugins/src/img/icons/logo_mini_png.png" alt="">
    </div>
    <div class="text-xl" style="width:40%">
        <?php  
        //Párametros área 1
            $area_name = "Área Una Manera Diferente de Ver";
            $img_route = "/plugins/src/img/icons/areas/una_manera_diferente_de_ver.png";
            $band_color = "#3498db";
            $x_move = 0;
            include "areas_object.php";

        //Párametros área 2
            $area_name = "Área IRIS. Psicología e investigación";
            $img_route = "/plugins/src/img/icons/areas/iris.png";
            $band_color = "#A349A3";
            $x_move = 10;
            include "areas_object.php";

        //Párametros área 3
            $area_name = "Área RED. Presencia y compromiso social";
            $img_route = "/plugins/src/img/icons/areas/programa_red.png";
            $band_color = "#FF0000";
            include "areas_object.php";

        //Párametros área 4
            $area_name = "Área LAISA. Labor altruista";
            $img_route = "/plugins/src/img/icons/areas/LAISA.png";
            $band_color = "#008f39";
            $x_move = 0;
            include "areas_object.php";
        ?>
    </div>
</div>


<?php
use Ballen\Distical\Calculator as DistanceCalculator;
use Ballen\Distical\Entities\LatLong;

// Set our Lat/Long coordinates
$ipswich = new LatLong(52.057941, 1.147172);
$london = new LatLong(51.507608, -0.127822);

// Get the distance between these two Lat/Long coordinates...
$distanceCalculator = new DistanceCalculator($ipswich, $london);

// You can then compute the distance...
$distance = $distanceCalculator->get();
// you can also chain these methods together eg. $distanceCalculator->get()->asMiles();

// We can now output the miles using the asMiles() method, you can also calculate and use asKilometres() or asNauticalMiles() as required!
echo 'Distance in miles between Central Ipswich and Central London is: ' . $distance->asMiles();
use Illuminate\Http\Request;
use SujalPatel\IntToEnglish\IntToEnglish;

class TestController extends Controller
{
    public function index() {
            echo IntToEnglish::Int2Eng(4500000); //Four Million Five Hundred Thousand 
    }
}

echo'

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="CSS/estilo.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">
</head>

<body>


    <div class="row">

        <div class="col s12  blue center-align card-panel teal lighten-2">
            <h4>Examen Despliegue Aplicaciones Web</h4>
        </div>
        
        <div class="col s12  ">
            
            <p>Lo que vamos a realizar es una aplicacion en PHP, que realize lo siguiente:
            <ol>
            <li>Dado dos puntos calcular la distancia entre ellos. Esos puntos vendran marcados por su latitud y su longitud </li>
            <li>Una vez halla calculado la distancia quiero que me traduzca al ingles esa distancia.</li>
            </ol>
            </p>
            <p>
            Por ejemplo dadas las siguientes coordenadas:
            <ul>
            <li>(41.65518, -4.72372) corresponde a Valladolid </li>
            <li>(37.38283, -5.97317) corresponde a Sevilla </li>
            </ul>
            
            </p>
        
            
        </div>
        <aside>
                    <h5>Enlace Heroku </h5>
                    Pulsa sobre esta imagen para ver desplegada la aplicacion sobre heroku
                    <p>
                    <a title="Heroku" href="https://examencristina.herokuapp.com/"><img src="imagenes/heroku.png" alt="Heroku" width="120" height="120" /></a>
                    </p>
        </aside>
        <form class="col s12" method = "POST">
            <div class="row">
                
                <div class="input-field col s2">
                    <label for="n_entero">Introduce la Latitud Punto 1:</label>
                    <input name="lat1" type="text" class="validate">
                    
                </div>
                <div class="input-field col s2">
                    <label for="n_entero">Introduce la Longitud  Punto 1:</label>
                    <input name="lon1" type="text" class="validate">
                
                </div>
                <div class="input-field col s2">
                    <label for="n_entero">Introduce la Latitud Punto 2:</label>
                    <input name="lat2" type="text" class="validate">
                
                </div>
                <div class="input-field col s2">
                    <label for="n_entero">Introduce la Longitud  Punto 2:</label>
                    <input name="lon2" type="text" class="validate">
                
                </div>
               

                <div class="row "></div> <!-- linea en blanco -->
                <div class="col s4">

                    <button class="btn waves-effect waves-light" type="submit" name="calcular">Calcular

                    </button>

                </div>
                
            </div>
        </form>
    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>';

error_reporting(E_ERROR | E_WARNING | E_PARSE);
echo "El method  usado fué: ",$_SERVER["REQUEST_METHOD"],"<br>"; 
echo  $_POST['lat1'],"<br>"; 
echo  $_POST['lon1'],"<br>"; 
echo  $_POST['lat2'],"<br>"; 
echo  $_POST['lon2'],"<br>"; 







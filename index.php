<!DOCTYPE html>
<html>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/cycle.js"></script>
<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="libs/materialDesign/css/materialdesignicons.css">
<head><link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!-- <meta http-equiv="refresh" content="1">  -->
	
	<title>TCC</title>
	<script src="https://assets.hgbrasil.com/weather/js/hg-weather-1.0.js" type="text/javascript"></script>
</head>
<body><center>
<div id="top1"><br><br><br><br><br><br>
<?php
date_default_timezone_set('America/Sao_Paulo');
$hr = date(" H ");
if($hr >= 12 && $hr<18) {
$resp = "Boa tarde!";}
else if ($hr >= 0 && $hr <12 ){
$resp = "Bom dia!";}
else {
$resp = "Boa noite!";}
echo "<h1 id='batata'>"."$resp"."</h1>";
?>

<h1><i class="mdi mdi-book-open-page-variant"></i></h1>
<?php
if($resp=="Bom dia!"){
$a = array(0=>"Insista, persista e nunca desista.", 1=>"Se a caminhada está difícil, é porque você está no caminho certo.", 2=>"Se a vida não ficar mais fácil, trate de ficar mais forte.
",3=>"Algumas vezes coisas ruins acontecem em nossas vidas para nos colocar na direção das melhores coisas que poderíamos viver.",4=>"Não importa o que você decidiu. O que importa é que isso te faça feliz.",
5=>"Não deixe que as pessoas te façam desistir daquilo que você mais quer na vida. Acredite. Lute. Conquiste. E acima de tudo, seja feliz.");
echo '<h1 id="batata">"</h1><h3>';
for($i=0;$i<=3;$i++){
echo $a[rand(0,5)];
}
echo '</h3><h1 id="batata">"</h1>';}

if($resp=="Boa noite!"){
$c=array(0=>"Não se esconda atrás de um falso sorriso. Você tem o direito de não estar bem.",1=>"Gosto de fazer as pessoas felizes, mesmo quando eu estou triste.",2=>"Não tenho tempo para lembrar de quem me deixou triste, estou mais preocupado com quem me faz feliz.",3=>"Palavras não podem expressar qualquer tristeza nesse momento.",4=>"Lágrimas não doem, o que dói é o motivo que as fazem cair.",5=>"Hoje o sol não brilhou, os pássaros não cantaram, 
os risos se calaram e as lágrimas rolaram em meu rosto. Meu coração sofre em silêncio.");
echo '<h1 id="batata">"</h1><h3>';
for($i=0;$i<=3;$i++){
echo $c[rand(0,5)];
}
echo '</h3><h1 id="batata">"</h1>';
}


if($resp=="Boa tarde!"){
$b=array(0=>"Quando as decepções surgem umas atrás das outras a tristeza passa a fazer parte da nossa rotina.",1=>"
Como é triste quando o amor se transforma em decepção!",2=>"A tristeza e a decepção me ensinaram a deixar de elevar as expectativas em relação às pessoas.",3=>"O lugar da tristeza é no mesmo saco da decepção, 
mistura-se os dois, toma-se a poção e voilà: ficamos mais fortes!",4=>"Sinto uma grande decepção em saber que você mentiu para mim, mas fico mais triste 
em saber que não consigo mais confiar em você.",5=>"Prefiro ficar triste e viver a decepção de uma vez do que andar me enganando com quem não merece o meu amor.");
echo '<h1 id="batata">"</h1><h3>';
for($i=0;$i<=3;$i++){
echo $b[rand(0,5)];
}
echo '</h3><h1 id="batata">"</h1>';
}

$semana=array(1=>"Monday", 2=>"Tuesday", 3=>"Wednesday", 4=>"Thursday", 5=>"Friday", 6=>"Saturday", 7=>"
Sunday");
date_default_timezone_set('America/Sao_Paulo');
$balao=date('Y-m-d');
$empadão=date('N',strtotime($balao)); 
?>
</div>
<div id="top2">
<h1 id="batata">
<?php
echo $semana[$empadão];
?>

<br></h1>



    <div class="hg-weather" data-key="10b610b6" data-woeid="457485" id="prev">
		 <img src="http://assets.api.hgbrasil.com/weather/images/44.png" data-weather="image" ><br>
    <span data-weather="message">Obtendo...<br></span>

      <span data-weather="city">Obtendo cidade</span> <span data-weather="temp">00</span>º C<br>
      <span data-weather="description">Obtendo tempo...</span><br>
      Nascer do Sol: <span data-weather="sunrise">00:00</span> - Pôr do Sol: <span data-weather="sunset">00:00</span><br>
      Velocidade do vento: <span data-weather="wind_speedy">-- km/h</span><br>
     
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        HGWeather.initialize();
      });
    </script>
</div>
<div id="top3"><br><br><br><br><br><br><br><br><br><br><br><br><br>
	

<h1 id="batata"><i class="mdi mdi-clock-outline mdi-10px "></i><?php date_default_timezone_set('America/Sao_Paulo'); echo date('H:i')?></h1><h3>America/São Paulo</h3></div>


</body>
</html>
 

 <!-- http://www.simge.mg.gov.br/simge/1390-legenda-previsao-do-tempo
 
 
 periscope

calendar-multiselect

map-outline

weather-sunny

weather-night

weather-windy

book-open-page-variant
 
  -->
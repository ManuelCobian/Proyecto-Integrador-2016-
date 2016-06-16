<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Medidor Temperatura, Humedad</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['gauge']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Label', 'Value'],
          ['Humedad', 0],
          ['Temperatura', 0],
          ['Calidad de aire', 0]
        ]);
       
        
        var options = {
          width: "20%", height: 400,
          redFrom: 90, redTo: 100,
          yellowFrom:75, yellowTo: 90,
          minorTicks: 5
        };
        var chart = new google.visualization.Gauge(document.getElementById('Medidores'));
        chart.draw(data, options);
        setInterval(function() {
            var JSON=$.ajax({
                url:"http://localhost:8080/graficas/DatoSensores.php?q=1",
                dataType: 'json',
                async: false}).responseText;
            var Respuesta=jQuery.parseJSON(JSON);
            
          data.setValue(0, 1,Respuesta.humedad);
          data.setValue(1, 1,Respuesta.temperatura);
          data.setValue(2, 1,Respuesta.calidadAire);
          chart.draw(data, options);
        }, 1300);

      }
    </script>
</head>
<body>
<center>

</center>
<div width="25%" >
    <center><h1>La Temperatura de Colima en estos momentos</h1></center>
  <div id="Medidores" ></div>
</div>
      
   
</body>
</html>
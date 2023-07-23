<html>
   <head>
      <title>Google Charts Tutorial</title>
      <script type = "text/javascript" src = "https://www.gstatic.com/charts/loader.js">
      </script>
      <script type = "text/javascript">
         google.charts.load('current', {packages: ['corechart']});     
      </script>
   </head>

   <body>
      <div id = "container" style = "width: 550px; height: 400px; margin: 0 auto">
         </div>
      <script language = "JavaScript">
         function drawChart() {
            // Define the chart to be drawn.
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Browser');
            data.addColumn('number', 'Percentage');
            data.addRows([
               ['0-8', 50],
               ['9-12', 50],
                ]);
               
            // Set chart options
            var options = {
               // 'title':'Browser market shares at a specific website, 2014',
               'width':550,
               'height':400
            };

            // Instantiate and draw the chart.
            var chart = new google.visualization.PieChart(document.getElementById('container'));
            chart.draw(data, options);
         }
         google.charts.setOnLoadCallback(drawChart);
      </script>
   </body>
</html>
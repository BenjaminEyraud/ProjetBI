<?php include 'lib/lib.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <!--<link rel="icon" href="../../favicon.ico">-->

    <title>Projet BI</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/dc.min.css" rel="stylesheet">
	
	<script type="text/javascript" src="js/d3.js"></script>
	<script type="text/javascript" src="js/crossfilter.js"></script>
	<script type="text/javascript" src="js/dc.js"></script> 
	
	    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Projet BI</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
	  <br/>
	  <br/>
	  <br/>
        <h1>Tests Projet BI</h1>



  <h2>Test avec des données sur les ventes</h2>
	
	<p>Montant total des ventes par an (dimension Ventes)</p>
    <div id="dc-score-barchart"></div>
	

	<div id="pie"></div>
	
	<div id="topMontant">
		
	<div>
	<?php 
	connexionSQL();
	$req = SELECTetoile();
	?>

    <script type="text/javascript">
	
    var data = <?php echo SQLtoJSON($req); mysql_close(); ?>;
			   
var ymdFormat = d3.time.format("%d.%m.%Y");
data.forEach(function(p) {
  p.Date = ymdFormat.parse(p.Date);
});		   

    //## Create Chart Objects
    var scoreChart = dc.barChart("#dc-score-barchart")
                        .xAxisLabel('Année')
                        .yAxisLabel('Montant des ventes');
   
   
    //### Create Crossfilter Dimensions and Groups
    var ndx = crossfilter(data);
    var all = ndx.groupAll();
    var anneeDimension = ndx.dimension(function (d) {return d.Date.getFullYear();}),
        ventesanneeGroup = anneeDimension.group().reduceSum(function(d) {return d.Montant * d.Quantitee;});
		
	//Dimension montant
	var montantDimension = ndx.dimension(function (d) {return d.Montant;})
	
	var topMontant = montantDimension.top(4);
	

	
	
	
		
    //## score bar chart
    scoreChart.width(400)
        .height(320)
        .dimension(anneeDimension)
        .group(ventesanneeGroup)
        .elasticY(true)
        .x(d3.scale.ordinal())
        .xUnits(dc.units.ordinal)
        .colors(["orange"])
        .yAxis().ticks(5);
		
		
	var pie = dc.pieChart("#pie");

	pie.width(400)
        .height(320)
        .dimension(anneeDimension)
        .group(ventesanneeGroup)
		.legend(dc.legend())
		// workaround for #703: not enough data is accessible through .label() to display percentages
		.on('pretransition', function(chart) {
        chart.selectAll('text.pie-slice').text(function(d) {
            return d.data.key + ' ' + dc.utils.printSingleValue((d.endAngle - d.startAngle) / (2*Math.PI) * 100) + '%';
        })
    });	
		
		
		
    
    dc.renderAll();
	

    </script>
	
	
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->



	
  </body>
</html>

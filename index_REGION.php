<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'], $_SESSION['Role'] )) {
	header('Location: index.html');
	exit();
}
?>

<html>


   <head>
  <meta charset="utf-8"/>
      <title>REGIONS</title>
	 
	 
	 


  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>



  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>



  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYznpHTJWImHlukgPazaTIUFEEQ7Q5QNo" async defer></script>
  <script src="lib/Leaflet/Leaflet.GoogleMutant.js"></script>
<script src="lib/Leaflet/leaflet.geocsv.js"></script>


  <!-- L.StyleEditor source files -->
  <script src="./javascript/Leaflet.StyleEditor.js"></script>
  <script src="./javascript/Util.js"></script>

  <script src="./javascript/FormElements/FormElement.js"></script>
  <script src="./javascript/FormElements/IconElement.js"></script>
  <script src="./javascript/FormElements/ColorElement.js"></script>
  <script src="./javascript/FormElements/OpacityElement.js"></script>
  <script src="./javascript/FormElements/SizeElement.js"></script>
  <script src="./javascript/FormElements/DashElement.js"></script>
  <script src="./javascript/FormElements/PopupContentElement.js"></script>
  <script src="./javascript/FormElements/WeightElement.js"></script>

  <script src="./javascript/Form/Form.js"></script>
  <script src="./javascript/Form/GeometryForm.js"></script>
  <script src="./javascript/Form/MarkerForm.js"></script>

  <script src="./javascript/Marker/Marker.js"></script>
  <script src="./javascript/Marker/GlyphiconMarker.js"></script>

  <script src="javascript/StyleForm.js"></script>

  <script src="./javascript/Control.js"></script>
  <link rel="stylesheet" href="./css/Leaflet.StyleEditor.css"/>

  <link rel="stylesheet" href="lib/leaflet/leaflet.groupedlayercontrol.min.css"/>
  <script src="lib/leaflet/leaflet.groupedlayercontrol.min.js"></script>
 

<!-- MAP CENTER COORD -->

  <link rel="stylesheet" href="http://xguaita.github.io/Leaflet.MapCenterCoord/dist/L.Control.MapCenterCoord.min.css" />
  <script src="http://xguaita.github.io/Leaflet.MapCenterCoord/dist/L.Control.MapCenterCoord.min.js"></script>


 <!-- Draw -->




 <script src="src/Leaflet.draw.js"></script>
    <script src="src/Leaflet.Draw.Event.js"></script>
    <link rel="stylesheet" href="src/leaflet.draw.css"/>

    <script src="src/Toolbar.js"></script>
    <script src="src/Tooltip.js"></script>

    <script src="src/ext/GeometryUtil.js"></script>
    <script src="src/ext/LatLngUtil.js"></script>
    <script src="src/ext/LineUtil.Intersect.js"></script>
    <script src="src/ext/Polygon.Intersect.js"></script>
    <script src="src/ext/Polyline.Intersect.js"></script>
    <script src="src/ext/TouchEvents.js"></script>

    <script src="src/draw/DrawToolbar.js"></script>
    <script src="src/draw/handler/Draw.Feature.js"></script>
    <script src="src/draw/handler/Draw.SimpleShape.js"></script>
    <script src="src/draw/handler/Draw.Polyline.js"></script>
    <script src="src/draw/handler/Draw.Marker.js"></script>
    <script src="src/draw/handler/Draw.Circle.js"></script>
    <script src="src/draw/handler/Draw.CircleMarker.js"></script>
    <script src="src/draw/handler/Draw.Polygon.js"></script>
    <script src="src/draw/handler/Draw.Rectangle.js"></script>


    <script src="src/edit/EditToolbar.js"></script>
    <script src="src/edit/handler/EditToolbar.Edit.js"></script>
    <script src="src/edit/handler/EditToolbar.Delete.js"></script>

    <script src="src/Control.Draw.js"></script>

    <script src="src/edit/handler/Edit.Poly.js"></script>
    <script src="src/edit/handler/Edit.SimpleShape.js"></script>
    <script src="src/edit/handler/Edit.Rectangle.js"></script>
    <script src="src/edit/handler/Edit.Marker.js"></script>
    <script src="src/edit/handler/Edit.CircleMarker.js"></script>
    <script src="src/edit/handler/Edit.Circle.js"></script>


        <!-- FILE LAYER -->
    <script src="https://unpkg.com/togeojson@0.14.2"></script>
    <script src="src/leaflet.filelayer.js"></script>

		<!-- GeoCSV: https://github.com/joker-x/Leaflet.geoCSV -->
		<script src="lib/leaflet.geocsv-src.js"></script>

		<!-- CodeMirror -->
		<link rel="stylesheet" href="lib/leaflet/codemirror/codemirror.css">
		<script src="lib/leaflet/codemirror/codemirror.js"></script>
		<script src="lib/leaflet/codemirror/util/matchbrackets.js"></script>
		<script src="lib/leaflet/codemirror/mode-javascript.js"></script>
<!-- JQURY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<!-- //////////////////////////// -->

<link href='Save/style.css' rel='stylesheet' type='text/css'>

<!-- //////////////////////////////////////////// -->

		<script src="lib/leaflet/leaflet.browser.print.min.js"></script>
		<script src="javascript/dom-to-image.js"></script>
	 
	 
	 
	 
  
  <link rel="stylesheet" href="lib/Leaflet/leaflet.css"/>
  <link rel="stylesheet" href="lib/Leaflet/leaflet.label.css"/>
  
    <script src="lib/Leaflet/leaflet-providers.js"></script>
  <script src="lib/Leaflet/Yandex.addon.LoadApi.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYznpHTJWImHlukgPazaTIUFEEQ7Q5QNo" async defer></script>
  <script src="lib/Leaflet/Leaflet.GoogleMutant.js"></script>
  <script src="lib/Leaflet/leaflet.js"></script>
  <script src="lib/Leaflet/leaflet.ajax.min.js"></script>
  <script src="lib/Leaflet/leaflet.label.js"></script>
 <script src="lib/leaflet/bundle.js"></script>   
  <script src="data/REGION_VF.geojson"> </script>

      <style>

    #map {
      position: fixed;
      top: 35px;
	  right: 0px;
	  left: 0px;
      width: 100%;
      height: 95%;
    }
		.legend{background-color: #ffffff;
	 text-align: center;
	 padding: 5px;
	 border-radius: 10px;
	 
	 }
	.legend i{width: 3em; float: left}

	
	.btnStyle {
      cursor:pointer;
      background-color: #4D90FE; 
      border-radius: 15px;
      background-image: -moz-linear-gradient(center top , #4D90FE, #4787ED); 
      border: 1px solid #3079ED; 
      color: #FFFFFF;
      padding: 2px;
      margin-top: 1px;
      margin-bottom: 1px;
      width:95%
	
    }
	
	.btnStyle:hover {
	
      background: #434343;
      letter-spacing: 1px;
      -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
      -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
      box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
      transition: all 0.4s ease 0s;
    }
	
	
	   .btnStylee {
      cursor:pointer;
      background-color: #D97575; 
      border-radius: 5px;
      background-image: -moz-linear-gradient(center top , #4D90FE, #4787ED); 
      border: 1px solid #D97575; 
      color: #FFFFFF;
      padding: 4px;
      margin-top: 6px;
      margin-bottom: 0px;
      width: 95%
	
    }
	
		.btnStylee:hover {
      background: #434343;
      letter-spacing: 1px;
      -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
      -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
      box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
      transition: all 0.4s ease 0s;
    }
	
	 .column {
    float: left;
    width: 25.33%;
    }
	
      .row:after {
     content: "";
     display: table;
     clear: both;
    }

      .columnn {
	
     float: right;
     width: 27.33%;
    }
      .roww:after {
     content: "";
     display: table;
     clear: both;
    }
	

      </style>
	  
 

   </head>
   
<body class="loggedin">
	  
	 		<nav class="navbar navbar-default" role="navigation" style="top:-20px;">
  			<div class="container">
  				<!-- Brand and toggle get grouped for better mobile display -->
  				<div class="navbar-header">
  					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
  						<span class="sr-only">Toggle navigation</span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  						<span class="icon-bar"></span>
  					</button>
  					<a class="navbar-brand" >Graphicom</a>
  				</div>
  		
  				<!-- Collect the nav links, forms, and other content for toggling -->
  				<div class="collapse navbar-collapse navbar-ex1-collapse">
  					<ul class="nav navbar-nav navbar-right">
					    <li><a href="save/Save.php">Save Files</a></li>
						<?php if ($_SESSION['Role'] == 'admin') { ?>
						
						<li><a href= "Sgin in.php" >Add Accounts</a></li>
						
						<?php } ?>
  						<li><a href="logout.php">Logout</a></li>
						<li><a ><p style="color:#00994d; opacity: 0.7;">WELCOME, <?=$_SESSION['name']?>!</p></a></li> 
  						<li class="dropdown">
  				</div><!-- /.navbar-collapse -->
				
  			</div>
  		</nav> 
	  
	  
	  
	  
	  
         <div id="map"></div>
		 
		 <!-- les Bouttons  -->
		 
		 
		     <div class="row" style="position:relative; left:-150px; top:-45px; width:580px; text-align: center; display: block; margin: 0 auto; font-size: 11px;" >
		        <div style=" top:5px;">
			 <form method="get" action="index_GOV.php"> <div class="column"><button type="submit"  id="Btn2" class="btnStyle span3">GOUVERNOURATS</button></div></form>
			    </div> 
			 <form method="get" action="index_DELEG.php"> <div class="column"><button type="submit"  id="Btn3" class="btnStyle span3">DELEGATIONS</button></div></form>

             
          </div>  	
		  
		  
		    <div class="roww" style="position:relative; left: 100px; top:-85px; bottom:auto; width:580px; text-align: center; display: block; margin: 0 auto; font-size: 11px;" >
		 
		     
             <form method="get" action="index_Style_DELEG.php"><div class="columnn"><button type="submit"  id="Btn1" class="btnStylee span3">Edit Delegations</button></div></form>
			 <form method="get" action="index_Style_GOV.php"> <div class="columnn"><button type="submit"  id="Btn2" class="btnStylee span3">Edit Governorats</button></div></form>

             
          </div> 
		 
		 
		 






		  
          <script>
		    // les variables
		     var RegionLayer;
			 var styleEditor;
			 var markers = new Array();


			   // function de style des polygones lors de selection
			   function highlightFeature(e){
			      var layer = e.target;
				      layer.setStyle(
					   {
					     weight : 5,
						 color : 'black',
						 fillColor:'white',
						 fillOpacity : 0.2
						 });
						 if(!L.Browser.ie && !L.Browser.opera){
						     layer.bringToFront();
							 }		 
                }
				
                // function pour reset le style de polygone lors de deplacer le souris						
               function resetHighlight(e){
			      RegionLayer.resetStyle(e.target);
			    }
				
				// function de zoomer a la polygone lors de la click de la souris 
				function zoomToFeature(e){
				     map.fitBounds(e.target.getBounds());
				}
				
				
				
				// function de séparation des polygones 
				function RegionOnEachFeature(feature, layer){
				
				//les popups
				
				layer.bindPopup(
				   (('<b> Region: &nbsp')+(feature.properties.VFR__Regi))+'</b><br>'+
				   (('Nombre de population:&nbsp')+(feature.properties.VFR__Popul))+'<br>'+
				   (('Nombre des Menages:&nbsp')+(feature.properties.VFR__Menag))+'<br>'+
				   (('Nombre des Logements:&nbsp')+(feature.properties.VFR__Logem))+'<br>'
				
				);

				
				// layer.bindLabel(
				   // (('Region: &nbsp')+(feature.properties.VFR__Regi))+'<br>'+
				   // (('Nbr de population:&nbsp')+(feature.properties.VFR__Popul))+'<br>'+
				   // (('Nbr des Menages:&nbsp')+(feature.properties.VFR__Menag))+'<br>'+
				   // (('Nbr des Logements:&nbsp')+(feature.properties.VFR__Logem))+'<br>',
				   // {noHide : true});
				
				
				//Visibilité des labels 

                 markers.push(
				   L.circleMarker(
				     layer.getBounds().getCenter(),
					 {
					     radius: 0.0,
						 opacity: 0,
						 fillOpacity: 0 }
				   )
                 );
				 
				 var markersCount = markers.length;
				 markers[markersCount - 1].bindLabel(
				   (feature.properties.VFR__Regi),
				   {noHide : true,
				     className:'map-label',
					 pane: 'mapPane'
					 });
				     markers[markersCount - 1].addTo(map);
                     markers[markersCount - 1].hideLabel();




				   layer.on(
				     { mouseover : highlightFeature,
					   mouseout : resetHighlight,
					   click: zoomToFeature
					 }
				   );
				}
			   // population style
			   function getPopColor(VFR__Popul){
			     if (VFR__Popul > 4000000){
				     return '#BB0C01';
				 } else if (VFR__Popul > 2500000){
                     return '#EB1616';				 
			     } else if (VFR__Popul > 1400000){
                     return '#FF7800  ';				 
			     } else if (VFR__Popul > 1000000){
                     return '#FFAA00';	
                 } else if (VFR__Popul < 1000000){
                     return '#FFD800';					 
			     
			     }
			   }
               // fonction pour définir le style des polygones
               function regionStayle(feature){
	              return {
		            fillColor: getPopColor(feature.properties.VFR__Popul),
			        weight : 2,
			        opacity : 1,
			        color: 'white',
			        dashArray : 3,
			        fillOpacity : 0.7
		           } 
		            }

                  // initialize the map 	
                  var map = L.map('map').setView([34.81897, 10.16579],7);
				  

					   //Fond Google earth
				  var Google_Earth = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',{
                       // tileSize: 512, 
                       // zoomOffset: -1,
                       minZoom: 6,
                       crossOrigin: true}      
					   ).addTo(map);
				  
				  
				     // Fond Blanc
				  
				      var imageUrl= 'data/white.jpg';
                       // var imageBounds = [
					    // [ 43.875720, -32.451513],
					    // [-0.501104, 58.478103]
					     // ];		
					
					    // [84.969265, -179.353651 ],
					    // [-84.907230, 179.371616]				  
				  
                    var Blanc = L.tileLayer(imageUrl,{maxZoom: 17, minZoom: 6, tileSize: 512, zoomOffset: -1}).addTo(map);
	     
		 
                     //fond openstreetmap
					   
				     var RoadMap = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', 
                      {
	                  maxZoom: 17,
                      minZoom: 6
                      }).addTo(map);				  
				  
				  
				  
				  
				  
				  
                    // Import des données vecteur GeoJISON
                      RegionLayer = L.geoJson(
                      REGION_VF,
	                    {
					     style : regionStayle,
						 onEachFeature: RegionOnEachFeature
					     }
                       ).addTo(map);


					 //Layers Controle  
					var baseMaps = { Google_Earth, Blanc, RoadMap};
					var overlayMaps = { RegionLayer };

                     L.control.layers(baseMaps, overlayMaps).addTo(map);

					   
				   //ADD Legend
				   var legend = L.control({position : 'bottomright'});
				     legend.onAdd= function(map){
					     var div = L.DomUtil.create('div', 'legend');
						 var labels =[
						 "Population Superieur a 4 000 000",
						 "Population Superieur a 2 500 000",
						 "Population Superieur a 1 400 000",
						 "Population Superieur a 1 000 000",
						 "Population Inferieur a 1 000 000"
						 ];
						 var grades = [4000001, 2500001, 1400001, 1000001, 900001];
						 div.innerHTML = '<div><b>Legende</b></div>';
						 for(var i=0; i < grades.length; i++){
						     div.innerHTML +='<i style="background:'
							 + getPopColor(grades[i])+ '"> &nbsp;&nbsp;</i>&nbsp;&nbsp;'
							 +labels[i]+'<br/>';
						 }
						 return div;
						 }
						 legend.addTo(map);
					   
					   
					
                    //Label Visibility
					var visible;
					 map.on(
					 'zoomend',
					   function(e){
					     if(map.getZoom() > 6){
						     
							 if(!visible){
							    for(var i = 0; i < markers.length; i++){
								    markers[i].showLabel();}
								visible=true;	
								}
							 
						 }else{
						 
						 	 if(visible){
							    for(var i =0; i < markers.length; i++){
								    markers[i].hideLabel();}
								visible=false;	
								}
						 
						 }
					   }
					 
					 
					 );

					
					  
                      var printer = L.easyPrint({
	                   title: 'My awesome print button',
                      	position: 'topleft',
                       	sizeModes: ['Current', 'A4Portrait', 'A4Landscape'],
                    	exportOnly: true,
                        hideControlContainer: true
                    }).addTo(map);

                    L.easyPrint({
	                 title: 'My awesome print button',
	                 position: 'topleft',
                    	sizeModes: ['A4Portrait', 'A4Landscape']
                    
					}).addTo(map);
					  
					  



  
 



            </script>
        </body>
</html>

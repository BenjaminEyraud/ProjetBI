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

    <script type="text/javascript">
    var data = 
                [{"idVente":1,"Produit":"FNG","Date":"09.12.2013","Magasin":"Zaoshi","Montant":"51.25","Quantité":57},
{"idVente":2,"Produit":"Hot Spot","Date":"30.11.2014","Magasin":"Gibsons","Montant":"78.61","Quantité":19},
{"idVente":3,"Produit":"Pneumo HP","Date":"16.02.2016","Magasin":"Detupia","Montant":"20.88","Quantité":85},
{"idVente":4,"Produit":"AHC Intense Contour Balm","Date":"07.03.2015","Magasin":"Makabe","Montant":"42.95","Quantité":29},
{"idVente":5,"Produit":"Furosemide","Date":"04.10.2012","Magasin":"Zimmi","Montant":"55.30","Quantité":5},
{"idVente":6,"Produit":"Dextroamphetamine Saccharate, Amphetamine Aspartate Monohydrate, Dextroamphetamine Sulfate and Amphetamine Sulfate","Date":"25.03.2013","Magasin":"Yishui","Montant":"14.84","Quantité":29},
{"idVente":7,"Produit":"Loperamide Hydrochloride","Date":"11.01.2015","Magasin":"Penanggungan","Montant":"87.22","Quantité":37},
{"idVente":8,"Produit":"Alternaria alternata","Date":"13.01.2015","Magasin":"Weetobula","Montant":"0.97","Quantité":15},
{"idVente":9,"Produit":"Reed Therapeutics Pain Relieving Therapy","Date":"03.05.2015","Magasin":"Ústí nad Orlicí","Montant":"66.63","Quantité":26},
{"idVente":10,"Produit":"Kids Travel Sickness","Date":"23.02.2013","Magasin":"Čair","Montant":"1.16","Quantité":68},
{"idVente":11,"Produit":"dg health mucus relief er","Date":"07.07.2014","Magasin":"Spodnja Hajdina","Montant":"27.40","Quantité":78},
{"idVente":12,"Produit":"Losartan Potassium","Date":"02.02.2015","Magasin":"Onoda","Montant":"26.32","Quantité":70},
{"idVente":13,"Produit":"Fentanyl Citrate","Date":"30.07.2012","Magasin":"Fray Bentos","Montant":"14.88","Quantité":76},
{"idVente":14,"Produit":"Lyrica","Date":"20.06.2013","Magasin":"Long Xuyên","Montant":"18.39","Quantité":36},
{"idVente":15,"Produit":"Standardized Cat Hair","Date":"15.09.2016","Magasin":"Jaguaribe","Montant":"0.81","Quantité":32},
{"idVente":16,"Produit":"Prednisone","Date":"16.05.2016","Magasin":"Carmen","Montant":"51.64","Quantité":74},
{"idVente":17,"Produit":"Lovastatin","Date":"24.11.2011","Magasin":"Bakıxanov","Montant":"62.21","Quantité":77},
{"idVente":18,"Produit":"pain relief","Date":"19.05.2015","Magasin":"Huaribamba","Montant":"22.17","Quantité":7},
{"idVente":19,"Produit":"Meclizine Hydrochloride","Date":"14.02.2013","Magasin":"Akune","Montant":"21.22","Quantité":28},
{"idVente":20,"Produit":"Peter Island Continous sunscreen kids","Date":"03.05.2015","Magasin":"Bonoua","Montant":"37.66","Quantité":9},
{"idVente":21,"Produit":"Tired Eye Relief","Date":"30.09.2016","Magasin":"Henglishan","Montant":"10.31","Quantité":84},
{"idVente":22,"Produit":"Thioridazine Hydrochloride","Date":"18.02.2016","Magasin":"Malaḩ","Montant":"69.33","Quantité":85},
{"idVente":23,"Produit":"telmisartan and hydrochlorthiazide","Date":"29.09.2016","Magasin":"Sarulla","Montant":"85.68","Quantité":96},
{"idVente":24,"Produit":"Night Time Liquid Caps","Date":"22.07.2015","Magasin":"Nakambala","Montant":"6.82","Quantité":15},
{"idVente":25,"Produit":"Red Mulberry Pollen","Date":"04.10.2014","Magasin":"San Agustin","Montant":"35.47","Quantité":22},
{"idVente":26,"Produit":"allergy relief","Date":"28.01.2014","Magasin":"Halle","Montant":"11.41","Quantité":64},
{"idVente":27,"Produit":"Lidocaine Hydrochloride","Date":"30.06.2015","Magasin":"Duodaoshi","Montant":"4.50","Quantité":67},
{"idVente":28,"Produit":"VITALUMIERE AQUA","Date":"05.01.2016","Magasin":"Färjestaden","Montant":"51.62","Quantité":33},
{"idVente":29,"Produit":"Aveeno Soothing Bath Treatment","Date":"14.07.2016","Magasin":"Cerca la Source","Montant":"60.28","Quantité":57},
{"idVente":30,"Produit":"benzonatate","Date":"19.05.2016","Magasin":"Pocohuanca","Montant":"44.24","Quantité":49},
{"idVente":31,"Produit":"Cetirizine Hydrochloride","Date":"09.11.2011","Magasin":"Bulungu","Montant":"52.74","Quantité":50},
{"idVente":32,"Produit":"Diltiazem Hydrochloride","Date":"22.07.2012","Magasin":"Oranmore","Montant":"84.64","Quantité":44},
{"idVente":33,"Produit":"MIDODRINE HYDROCHLORIDE","Date":"29.08.2013","Magasin":"Alvaro Obregon","Montant":"32.52","Quantité":99},
{"idVente":34,"Produit":"Diflucan","Date":"01.03.2013","Magasin":"Tartouss","Montant":"62.70","Quantité":68},
{"idVente":35,"Produit":"LANEIGE SNOW CRYSTAL","Date":"20.11.2011","Magasin":"Daniëlskuil","Montant":"48.86","Quantité":89},
{"idVente":36,"Produit":"Optiray","Date":"09.11.2015","Magasin":"Västerås","Montant":"14.55","Quantité":55},
{"idVente":37,"Produit":"Anti-Diarrheal","Date":"14.06.2014","Magasin":"Gualeguay","Montant":"53.70","Quantité":5},
{"idVente":38,"Produit":"DIPHENHYDRAMINE HYDROCHLORIDE","Date":"21.12.2015","Magasin":"San Marcos","Montant":"89.16","Quantité":80},
{"idVente":39,"Produit":"GO TIME","Date":"23.04.2012","Magasin":"Pliwetan","Montant":"9.16","Quantité":68},
{"idVente":40,"Produit":"Fuller Antibacterial Hand","Date":"14.11.2011","Magasin":"Chengmen","Montant":"38.97","Quantité":36},
{"idVente":41,"Produit":"Bupropion Hydrochloride","Date":"10.10.2015","Magasin":"Laolong","Montant":"65.83","Quantité":86},
{"idVente":42,"Produit":"DRISTAN COLD MULTISYMPTOM","Date":"24.06.2014","Magasin":"Oro Timur","Montant":"62.77","Quantité":100},
{"idVente":43,"Produit":"COUGH AND COLD KIDS RELIEF","Date":"20.11.2013","Magasin":"Mahaica Village","Montant":"0.68","Quantité":70},
{"idVente":44,"Produit":"Wasp hymenoptera venom Multidose","Date":"04.07.2013","Magasin":"Aného","Montant":"28.03","Quantité":67},
{"idVente":45,"Produit":"Avalide","Date":"08.08.2014","Magasin":"Kairouan","Montant":"40.89","Quantité":5},
{"idVente":46,"Produit":"Good Neighbor Pharmacy Triple Antibiotic","Date":"31.07.2016","Magasin":"Dologon","Montant":"18.45","Quantité":48},
{"idVente":47,"Produit":"Hydrocodone Bitartrate and Acetaminophen","Date":"21.10.2012","Magasin":"Taihe","Montant":"47.08","Quantité":79},
{"idVente":48,"Produit":"TOPIRAMATE","Date":"19.09.2016","Magasin":"Cherkasskoye","Montant":"99.18","Quantité":86},
{"idVente":49,"Produit":"Duane Reade","Date":"11.04.2013","Magasin":"Bouzov","Montant":"33.02","Quantité":8},
{"idVente":50,"Produit":"Mexican Tea Pollen","Date":"12.10.2016","Magasin":"Saint Louis","Montant":"27.94","Quantité":10},
{"idVente":51,"Produit":"ATORVASTATIN CALCIUM","Date":"14.10.2016","Magasin":"Krajan","Montant":"37.53","Quantité":16},
{"idVente":52,"Produit":"Atenolol","Date":"01.03.2013","Magasin":"Yoshkar-Ola","Montant":"88.06","Quantité":37},
{"idVente":53,"Produit":"Lorazepam","Date":"06.01.2016","Magasin":"Cruces de Anorí","Montant":"84.19","Quantité":35},
{"idVente":54,"Produit":"Amoxicillin","Date":"29.09.2016","Magasin":"Nishi-Tokyo-shi","Montant":"24.62","Quantité":41},
{"idVente":55,"Produit":"Vespa crabro ex animale 6 Special Order","Date":"25.10.2013","Magasin":"San Angelo","Montant":"28.47","Quantité":83},
{"idVente":56,"Produit":"Aspirin","Date":"28.01.2012","Magasin":"Dobryanka","Montant":"54.54","Quantité":63},
{"idVente":57,"Produit":"Skin Activator","Date":"19.07.2016","Magasin":"Safotu","Montant":"69.97","Quantité":71},
{"idVente":58,"Produit":"Synthroid","Date":"16.11.2012","Magasin":"Osorno","Montant":"40.42","Quantité":19},
{"idVente":59,"Produit":"Warfarin Sodium","Date":"20.04.2012","Magasin":"Longgao","Montant":"13.68","Quantité":52},
{"idVente":60,"Produit":"CHANTECAILLE LIP SCREEN SPF 15","Date":"05.05.2015","Magasin":"Tartagal","Montant":"82.19","Quantité":19},
{"idVente":61,"Produit":"CARBAMAZEPINE","Date":"26.12.2014","Magasin":"Phuket","Montant":"45.83","Quantité":65},
{"idVente":62,"Produit":"Donepezil Hydrochloride","Date":"10.05.2012","Magasin":"General Alvear","Montant":"87.61","Quantité":28},
{"idVente":63,"Produit":"EQUALINE","Date":"25.11.2011","Magasin":"Capinzal","Montant":"87.82","Quantité":43},
{"idVente":64,"Produit":"Sterile Alcohol Prep Pads","Date":"28.11.2015","Magasin":"Pengilon","Montant":"86.52","Quantité":28},
{"idVente":65,"Produit":"Potassium Chloride","Date":"21.09.2014","Magasin":"Yilkiqi","Montant":"1.41","Quantité":29},
{"idVente":66,"Produit":"CLOMIPRAMINE HYDROCHLORIDE","Date":"29.09.2014","Magasin":"Regueiro","Montant":"15.39","Quantité":57},
{"idVente":67,"Produit":"Tobacco Leaf","Date":"13.05.2013","Magasin":"Larochette","Montant":"99.30","Quantité":44},
{"idVente":68,"Produit":"Digoxin","Date":"24.12.2011","Magasin":"Teryayevo","Montant":"87.58","Quantité":54},
{"idVente":69,"Produit":"Cutivate","Date":"24.10.2013","Magasin":"Zoumaling","Montant":"8.57","Quantité":8},
{"idVente":70,"Produit":"Guaifenesin","Date":"19.03.2014","Magasin":"Lela","Montant":"54.97","Quantité":47},
{"idVente":71,"Produit":"Berberis Populus Adult Size","Date":"16.01.2013","Magasin":"Kuchurhan","Montant":"80.58","Quantité":73},
{"idVente":72,"Produit":"Badger Unscented Broad Spectrum SPF 30 Sunscreen Cream","Date":"15.12.2011","Magasin":"Polovinnoye","Montant":"60.26","Quantité":14},
{"idVente":73,"Produit":"Australian Gold","Date":"27.03.2016","Magasin":"Mossendjo","Montant":"30.43","Quantité":87},
{"idVente":74,"Produit":"QSR Antibacterial Hand Soap","Date":"22.04.2014","Magasin":"Malausma Kidul","Montant":"27.13","Quantité":20},
{"idVente":75,"Produit":"Montelukast Sodium","Date":"17.03.2012","Magasin":"G’uzor","Montant":"71.44","Quantité":43},
{"idVente":76,"Produit":"Venlafaxine Hydrochloride","Date":"27.01.2016","Magasin":"Floresta","Montant":"47.52","Quantité":73},
{"idVente":77,"Produit":"Tretinoin","Date":"16.08.2013","Magasin":"Miguel Hidalgo","Montant":"49.44","Quantité":87},
{"idVente":78,"Produit":"Chlorpheniramine Maleate","Date":"11.11.2014","Magasin":"Krasnaya Gorka","Montant":"36.71","Quantité":16},
{"idVente":79,"Produit":"Nystatin","Date":"06.11.2015","Magasin":"Mandōl","Montant":"18.96","Quantité":47},
{"idVente":80,"Produit":"Benztropine Mesylate","Date":"05.08.2016","Magasin":"Walce","Montant":"24.85","Quantité":12},
{"idVente":81,"Produit":"Ignatia Bryophyllum","Date":"25.01.2016","Magasin":"Detik Satu","Montant":"25.81","Quantité":93},
{"idVente":82,"Produit":"Nicotine","Date":"01.05.2015","Magasin":"Izazi","Montant":"98.44","Quantité":7},
{"idVente":83,"Produit":"Sweet Potato","Date":"12.02.2014","Magasin":"Independencia","Montant":"22.06","Quantité":2},
{"idVente":84,"Produit":"GIVEN BY NATURE BAMBOO MASK SHEET","Date":"13.03.2016","Magasin":"San Mateo","Montant":"2.53","Quantité":56},
{"idVente":85,"Produit":"smart sense 3 day treatment","Date":"25.01.2015","Magasin":"Al Ḩammāmāt","Montant":"6.80","Quantité":72},
{"idVente":86,"Produit":"DROXIA","Date":"09.07.2016","Magasin":"Saint-Denis","Montant":"31.11","Quantité":25},
{"idVente":87,"Produit":"Antacid Antigas","Date":"16.01.2013","Magasin":"Florencia","Montant":"55.53","Quantité":100},
{"idVente":88,"Produit":"Extra Strength Pain Reliever","Date":"06.10.2012","Magasin":"Abreus","Montant":"55.58","Quantité":62},
{"idVente":89,"Produit":"leader nite time cough","Date":"29.04.2014","Magasin":"Toledo","Montant":"86.21","Quantité":90},
{"idVente":90,"Produit":"Dextrose and Sodium Chloride","Date":"08.12.2011","Magasin":"La Palma","Montant":"82.80","Quantité":20},
{"idVente":91,"Produit":"Aleve","Date":"12.09.2014","Magasin":"Manabo","Montant":"76.46","Quantité":29},
{"idVente":92,"Produit":"Western Ragweed","Date":"31.12.2014","Magasin":"Xinlin","Montant":"85.06","Quantité":64},
{"idVente":93,"Produit":"PLATANUS OCCIDENTALIS POLLEN","Date":"02.07.2013","Magasin":"Caicó","Montant":"19.76","Quantité":54},
{"idVente":94,"Produit":"Kadian","Date":"11.06.2016","Magasin":"Echeng","Montant":"1.76","Quantité":78},
{"idVente":95,"Produit":"Treatment Set TS339992","Date":"07.02.2012","Magasin":"Pangkalanbuun","Montant":"91.32","Quantité":20},
{"idVente":96,"Produit":"Topotecan Hydrochloride","Date":"21.09.2014","Magasin":"Strömsund","Montant":"99.17","Quantité":39},
{"idVente":97,"Produit":"Leader Antacid","Date":"28.05.2013","Magasin":"Hrazdan","Montant":"68.21","Quantité":7},
{"idVente":98,"Produit":"Zithromax","Date":"07.07.2013","Magasin":"Novaya Chigla","Montant":"5.00","Quantité":88},
{"idVente":99,"Produit":"Amlodipine Besylate","Date":"29.12.2015","Magasin":"Esquipulas","Montant":"27.85","Quantité":34},
{"idVente":100,"Produit":"PHYLLIS GOLDEN","Date":"11.11.2011","Magasin":"Cícero Dantas","Montant":"80.29","Quantité":56},
{"idVente":101,"Produit":"EQUUS CABALLUS SKIN","Date":"01.03.2013","Magasin":"Veyno","Montant":"74.64","Quantité":48},
{"idVente":102,"Produit":"Bartonella Remedy","Date":"11.08.2014","Magasin":"Coruripe","Montant":"21.08","Quantité":72},
{"idVente":103,"Produit":"Purminerals 4 in 1 Makeup SPF 15 Blush Medium","Date":"10.07.2013","Magasin":"Yam","Montant":"66.45","Quantité":72},
{"idVente":104,"Produit":"Ofloxacin","Date":"03.05.2014","Magasin":"Cerna","Montant":"34.76","Quantité":28},
{"idVente":105,"Produit":"SMART SENSE","Date":"24.06.2012","Magasin":"Wārāh","Montant":"77.18","Quantité":9},
{"idVente":106,"Produit":"Levetiracetam","Date":"19.03.2016","Magasin":"Donostia-San Sebastian","Montant":"33.47","Quantité":75},
{"idVente":107,"Produit":"Petroleum Skin Protectant","Date":"16.12.2015","Magasin":"Pogórze","Montant":"24.60","Quantité":58},
{"idVente":108,"Produit":"CLEANWELL NATURAL ANTIBACTERIAL FOAMING LAVENDER","Date":"09.09.2014","Magasin":"Mangxing","Montant":"21.22","Quantité":50},
{"idVente":109,"Produit":"Standardized Grass Pollen, Bluegrass, Kentucky (June)","Date":"22.02.2013","Magasin":"Huilong","Montant":"76.85","Quantité":36},
{"idVente":110,"Produit":"Venlafaxine Hydrochloride","Date":"09.06.2016","Magasin":"Wesoła","Montant":"56.94","Quantité":10},
{"idVente":111,"Produit":"Natural Fiber Powder","Date":"01.06.2012","Magasin":"Krasnaye","Montant":"79.88","Quantité":8},
{"idVente":112,"Produit":"Donepezil Hydrochloride","Date":"02.05.2013","Magasin":"Katrineholm","Montant":"31.84","Quantité":83},
{"idVente":113,"Produit":"ESIKA PERFECT SKIN COVERAGE CONCEALER SPF 17","Date":"09.08.2013","Magasin":"San Francisco","Montant":"42.72","Quantité":35},
{"idVente":114,"Produit":"Enalaprilat","Date":"09.09.2014","Magasin":"Kasamatsuchō","Montant":"27.42","Quantité":100},
{"idVente":115,"Produit":"SHISEIDO ADVANCED HYDRO-LIQUID COMPACT (REFILL)","Date":"23.10.2016","Magasin":"Pedro Leopoldo","Montant":"37.35","Quantité":18},
{"idVente":116,"Produit":"Green Body","Date":"25.01.2012","Magasin":"Woippy","Montant":"53.09","Quantité":88},
{"idVente":117,"Produit":"Anticavity Fluoride Rinse","Date":"09.06.2014","Magasin":"Vyatskiye Polyany","Montant":"74.39","Quantité":52},
{"idVente":118,"Produit":"BLACKJACK OAK POLLEN","Date":"16.05.2015","Magasin":"Hua Hin","Montant":"13.17","Quantité":94},
{"idVente":119,"Produit":"Chloraseptic Warming Sore Throat","Date":"12.08.2016","Magasin":"Chulakivka","Montant":"30.74","Quantité":72},
{"idVente":120,"Produit":"Methylprednisolone Acetate","Date":"18.04.2015","Magasin":"Tvrdonice","Montant":"59.02","Quantité":26},
{"idVente":121,"Produit":"Colds Flu","Date":"29.09.2012","Magasin":"Petaling Jaya","Montant":"0.75","Quantité":28},
{"idVente":122,"Produit":"Viagra","Date":"30.04.2016","Magasin":"Jieguanting","Montant":"75.80","Quantité":72},
{"idVente":123,"Produit":"Sprayology Cold and Flu Relief","Date":"08.06.2016","Magasin":"Féres","Montant":"22.85","Quantité":21},
{"idVente":124,"Produit":"TYLENOL Cold","Date":"15.09.2012","Magasin":"Orodara","Montant":"0.28","Quantité":84},
{"idVente":125,"Produit":"EPICOCCUM NIGRUM","Date":"03.11.2015","Magasin":"Itaparica","Montant":"86.22","Quantité":77},
{"idVente":126,"Produit":"Glumetza","Date":"27.04.2014","Magasin":"Cergy-Pontoise","Montant":"71.04","Quantité":10},
{"idVente":127,"Produit":"SHISEIDO SHEER MATIFYING COMPACT (REFILL)","Date":"17.09.2014","Magasin":"Jovim","Montant":"77.13","Quantité":72},
{"idVente":128,"Produit":"CLE DE PEAU BEAUTE FOUNDATION L","Date":"09.09.2015","Magasin":"Fatukanutu","Montant":"0.87","Quantité":19},
{"idVente":129,"Produit":"PHENADOZ","Date":"22.07.2013","Magasin":"Paka","Montant":"48.68","Quantité":39},
{"idVente":130,"Produit":"Mucus Relief","Date":"13.01.2012","Magasin":"Jardia","Montant":"8.87","Quantité":76},
{"idVente":131,"Produit":"Klonopin","Date":"24.01.2013","Magasin":"Shiniu","Montant":"32.44","Quantité":36},
{"idVente":132,"Produit":"Ondansetron","Date":"07.03.2015","Magasin":"Guaíra","Montant":"48.30","Quantité":22},
{"idVente":133,"Produit":"Lancome Paris Absolue Premium Bx Replenishing and Rejuvenating Day","Date":"29.07.2014","Magasin":"Imari","Montant":"7.96","Quantité":30},
{"idVente":134,"Produit":"Naproxen","Date":"11.08.2015","Magasin":"Lobanovo","Montant":"43.66","Quantité":66},
{"idVente":135,"Produit":"Lorazepam","Date":"18.06.2013","Magasin":"Hesperange","Montant":"67.73","Quantité":92},
{"idVente":136,"Produit":"Lidocaine","Date":"21.03.2014","Magasin":"Gaoyu","Montant":"59.80","Quantité":46},
{"idVente":137,"Produit":"the Balm BalmShelter tinted moisturizer SPF 18 broad spectrum after dark","Date":"07.08.2014","Magasin":"Joconal","Montant":"42.74","Quantité":30},
{"idVente":138,"Produit":"PAUL AND JOE SILKY SMOOTH FOUNDATION UV 302","Date":"31.03.2014","Magasin":"Quintas","Montant":"18.08","Quantité":22},
{"idVente":139,"Produit":"VERTICILLIUM ALBO ATRUM","Date":"22.11.2011","Magasin":"Solotcha","Montant":"26.97","Quantité":8},
{"idVente":140,"Produit":"Pleo Fort","Date":"18.03.2013","Magasin":"Calomboyan","Montant":"97.64","Quantité":74},
{"idVente":141,"Produit":"Good Neighbor Pharmacy","Date":"22.02.2015","Magasin":"Kotablolong","Montant":"19.94","Quantité":76},
{"idVente":142,"Produit":"Senna/Docusate Sodium","Date":"30.04.2014","Magasin":"Skórcz","Montant":"73.06","Quantité":1},
{"idVente":143,"Produit":"Ropinirole Hydrochloride","Date":"17.05.2015","Magasin":"Kostinbrod","Montant":"86.58","Quantité":79},
{"idVente":144,"Produit":"CareOne Daytime Severe Cold and Cough","Date":"22.12.2011","Magasin":"Shuanggang","Montant":"50.25","Quantité":59},
{"idVente":145,"Produit":"Propranolol Hydrochloride","Date":"27.04.2016","Magasin":"Renliu","Montant":"50.89","Quantité":45},
{"idVente":146,"Produit":"Leader Lubricant Eye","Date":"18.05.2012","Magasin":"Jiblah","Montant":"4.51","Quantité":86},
{"idVente":147,"Produit":"oxygen","Date":"22.04.2012","Magasin":"Naranjos","Montant":"14.75","Quantité":62},
{"idVente":148,"Produit":"Night Time Original","Date":"14.12.2015","Magasin":"Yanshang","Montant":"79.60","Quantité":82},
{"idVente":149,"Produit":"Onfi","Date":"25.11.2015","Magasin":"Sano","Montant":"77.12","Quantité":99},
{"idVente":150,"Produit":"Everyday Clean Dandruff","Date":"05.10.2014","Magasin":"Falun","Montant":"81.35","Quantité":74},
{"idVente":151,"Produit":"simvastatin","Date":"20.03.2016","Magasin":"Konëvo","Montant":"77.59","Quantité":82},
{"idVente":152,"Produit":"ReCreate Foundation","Date":"16.12.2012","Magasin":"Nanterre","Montant":"48.62","Quantité":61},
{"idVente":153,"Produit":"PrevinC","Date":"23.06.2016","Magasin":"Hidalgo","Montant":"92.38","Quantité":84},
{"idVente":154,"Produit":"Potassium Chloride","Date":"05.11.2012","Magasin":"Timoulilt","Montant":"76.13","Quantité":100},
{"idVente":155,"Produit":"CENTER-AL - SORGHUM HALEPENSE POLLEN","Date":"16.07.2013","Magasin":"Cullinan","Montant":"90.41","Quantité":93},
{"idVente":156,"Produit":"Fungicure","Date":"31.08.2012","Magasin":"Ning’an","Montant":"67.11","Quantité":93},
{"idVente":157,"Produit":"little ones vitamin a and d","Date":"02.08.2016","Magasin":"Waihi Beach","Montant":"43.97","Quantité":20},
{"idVente":158,"Produit":"Mixed Berries Scented Hand Sanitizer","Date":"07.07.2016","Magasin":"Emiliano Zapata","Montant":"11.33","Quantité":78},
{"idVente":159,"Produit":"Trichophyton mentagrophytes","Date":"18.04.2016","Magasin":"Kolomanu","Montant":"98.28","Quantité":33},
{"idVente":160,"Produit":"Neosporin Plus Pain Relief Neo To Go First Aid Antiseptic Pain Relieving","Date":"07.08.2012","Magasin":"Pélla","Montant":"27.73","Quantité":80},
{"idVente":161,"Produit":"DIANEAL Low Calcium with Dextrose","Date":"05.07.2016","Magasin":"Huanza","Montant":"96.28","Quantité":29},
{"idVente":162,"Produit":"Hanbang Cataplasma","Date":"01.07.2014","Magasin":"Prapen","Montant":"7.10","Quantité":39},
{"idVente":163,"Produit":"PORK","Date":"02.06.2014","Magasin":"Leme","Montant":"80.70","Quantité":83},
{"idVente":164,"Produit":"sore throat spray","Date":"14.06.2013","Magasin":"Viçosa","Montant":"77.82","Quantité":81},
{"idVente":165,"Produit":"Prednisone","Date":"07.12.2012","Magasin":"Zhengwan","Montant":"18.58","Quantité":56},
{"idVente":166,"Produit":"Dexamethasone","Date":"27.09.2015","Magasin":"Barice","Montant":"79.32","Quantité":25},
{"idVente":167,"Produit":"Select-OB Plus DHA","Date":"10.11.2012","Magasin":"Roche Terre","Montant":"11.21","Quantité":58},
{"idVente":168,"Produit":"SUPREME SKINPIA 10 BB","Date":"02.07.2014","Magasin":"Anlu","Montant":"94.23","Quantité":89},
{"idVente":169,"Produit":"Carvedilol","Date":"28.09.2014","Magasin":"Bacnar","Montant":"97.72","Quantité":85},
{"idVente":170,"Produit":"Leucovorin Calcium","Date":"28.02.2014","Magasin":"Fangxiang","Montant":"11.28","Quantité":29},
{"idVente":171,"Produit":"Anti-Bacterial Deep Cleansing Hand","Date":"19.12.2013","Magasin":"Huangtu","Montant":"48.22","Quantité":34},
{"idVente":172,"Produit":"Pepcid AC","Date":"20.02.2012","Magasin":"Pohonsirih","Montant":"66.38","Quantité":43},
{"idVente":173,"Produit":"SULFASALAZINE","Date":"15.07.2012","Magasin":"Rosso","Montant":"34.70","Quantité":81},
{"idVente":174,"Produit":"Metoprolol Tartrate","Date":"24.12.2011","Magasin":"Tampa","Montant":"16.41","Quantité":17},
{"idVente":175,"Produit":"Glimepiride","Date":"26.03.2015","Magasin":"Araras","Montant":"27.24","Quantité":98},
{"idVente":176,"Produit":"maximum strength","Date":"22.12.2012","Magasin":"Vyshneve","Montant":"29.80","Quantité":8},
{"idVente":177,"Produit":"Benzonatate","Date":"13.01.2013","Magasin":"Kōnan","Montant":"57.45","Quantité":48},
{"idVente":178,"Produit":"Nuvel Softy Roll-on Antiperspirant Deodorant","Date":"03.01.2012","Magasin":"Itambé","Montant":"21.43","Quantité":74},
{"idVente":179,"Produit":"Jason Nutrismile Anticavity Orange Cinnamon Mint","Date":"26.01.2012","Magasin":"San Celestio","Montant":"15.60","Quantité":90},
{"idVente":180,"Produit":"Allopurinol","Date":"21.04.2013","Magasin":"Sikeshu","Montant":"23.14","Quantité":29},
{"idVente":181,"Produit":"Lorazepam","Date":"30.03.2016","Magasin":"Tongjing","Montant":"86.67","Quantité":78},
{"idVente":182,"Produit":"Hill Country Essentials","Date":"10.01.2013","Magasin":"Springfield","Montant":"32.28","Quantité":8},
{"idVente":183,"Produit":"CareOne Lubricant","Date":"23.07.2012","Magasin":"Pasirjaya","Montant":"19.96","Quantité":56},
{"idVente":184,"Produit":"REFRESH OPTIVE Advanced","Date":"29.03.2012","Magasin":"Espargos","Montant":"13.25","Quantité":72},
{"idVente":185,"Produit":"Dr Tichenors Toothpaste","Date":"03.06.2013","Magasin":"Madruga","Montant":"40.63","Quantité":29},
{"idVente":186,"Produit":"Neuragen PN","Date":"18.07.2016","Magasin":"Vagonoremont","Montant":"65.05","Quantité":49},
{"idVente":187,"Produit":"AcipHex","Date":"21.02.2016","Magasin":"Yaojiaji","Montant":"84.46","Quantité":67},
{"idVente":188,"Produit":"Triamterene and Hydrochlorothiazide","Date":"25.07.2016","Magasin":"Sunne","Montant":"47.72","Quantité":90},
{"idVente":189,"Produit":"moisturising sunscreen","Date":"08.06.2016","Magasin":"Anniston","Montant":"62.55","Quantité":19},
{"idVente":190,"Produit":"Tartar Control Plus","Date":"05.09.2013","Magasin":"Konggar","Montant":"58.31","Quantité":84},
{"idVente":191,"Produit":"Cinnamon and Cream Antibacterial Foaming Hand Wash","Date":"02.09.2016","Magasin":"Panadura","Montant":"49.12","Quantité":54},
{"idVente":192,"Produit":"Paroxetine","Date":"03.08.2013","Magasin":"Wellington","Montant":"49.19","Quantité":3},
{"idVente":193,"Produit":"Diltiazem Hydrochloride","Date":"27.01.2013","Magasin":"Negotino","Montant":"81.52","Quantité":21},
{"idVente":194,"Produit":"Amlodipine Besylate","Date":"07.09.2015","Magasin":"Kokologo","Montant":"83.43","Quantité":74},
{"idVente":195,"Produit":"Hydrocodone bitartrate and acetaminophen","Date":"14.09.2015","Magasin":"Badulla","Montant":"55.24","Quantité":7},
{"idVente":196,"Produit":"Laxative","Date":"30.09.2012","Magasin":"Cihideung Satu","Montant":"37.82","Quantité":53},
{"idVente":197,"Produit":"LBEL HYDRATESS","Date":"07.03.2013","Magasin":"Cabuyaro","Montant":"88.25","Quantité":20},
{"idVente":198,"Produit":"Lorazepam","Date":"11.08.2014","Magasin":"Ypacarai","Montant":"4.17","Quantité":38},
{"idVente":199,"Produit":"OPANA","Date":"13.10.2013","Magasin":"Amparo","Montant":"95.17","Quantité":78},
{"idVente":200,"Produit":"Sleep Aid","Date":"04.01.2015","Magasin":"Skien","Montant":"12.84","Quantité":23},
{"idVente":201,"Produit":"Furosemide","Date":"10.09.2012","Magasin":"Daxi","Montant":"74.62","Quantité":97},
{"idVente":202,"Produit":"Esmolol Hydrochloride","Date":"20.04.2015","Magasin":"Armstrong","Montant":"19.13","Quantité":25},
{"idVente":203,"Produit":"ADVATE","Date":"30.04.2015","Magasin":"Souran","Montant":"91.66","Quantité":83},
{"idVente":204,"Produit":"UV ESSENTIEL","Date":"21.10.2014","Magasin":"Dārāb","Montant":"44.35","Quantité":7},
{"idVente":205,"Produit":"FLURBIPROFEN SODIUM","Date":"19.05.2016","Magasin":"Châteauroux","Montant":"75.37","Quantité":11},
{"idVente":206,"Produit":"Daily Moisturizing","Date":"16.01.2014","Magasin":"Longtang","Montant":"54.67","Quantité":13},
{"idVente":207,"Produit":"Plavix","Date":"24.02.2012","Magasin":"Sarnów","Montant":"86.30","Quantité":34},
{"idVente":208,"Produit":"Methylene Blue","Date":"20.10.2014","Magasin":"Oslo","Montant":"22.27","Quantité":28},
{"idVente":209,"Produit":"Precose","Date":"03.01.2016","Magasin":"Medalem","Montant":"52.37","Quantité":20},
{"idVente":210,"Produit":"Gout Symptom Reliever","Date":"25.01.2015","Magasin":"Sukowiryo","Montant":"60.76","Quantité":26},
{"idVente":211,"Produit":"Irinotecan Hydrochloride","Date":"04.07.2012","Magasin":"Agua Blanca","Montant":"37.05","Quantité":94},
{"idVente":212,"Produit":"Full Care Three Povidone Iodine Swabsticks","Date":"02.11.2016","Magasin":"Kigoma","Montant":"58.60","Quantité":11},
{"idVente":213,"Produit":"Purminerals 4-in-1 14-Hour Wear Foundation Broad Spectrum SPF 15 (BLUSH MEDIUM)","Date":"20.05.2014","Magasin":"Yuzawa","Montant":"59.32","Quantité":90},
{"idVente":214,"Produit":"Olanzapine","Date":"22.03.2013","Magasin":"Krimpen aan den IJssel","Montant":"76.49","Quantité":60},
{"idVente":215,"Produit":"PURE SHEER","Date":"09.11.2014","Magasin":"Čair","Montant":"83.27","Quantité":42},
{"idVente":216,"Produit":"Megestrol Acetate","Date":"06.05.2015","Magasin":"Czerwonak","Montant":"62.38","Quantité":44},
{"idVente":217,"Produit":"METOPROLOL SUCCINATE","Date":"22.12.2011","Magasin":"Železniki","Montant":"63.90","Quantité":55},
{"idVente":218,"Produit":"K-Tab","Date":"24.11.2013","Magasin":"Khovaling","Montant":"3.38","Quantité":1},
{"idVente":219,"Produit":"TopCare","Date":"09.02.2015","Magasin":"Bonnyville","Montant":"75.84","Quantité":15},
{"idVente":220,"Produit":"Mackerel","Date":"07.12.2011","Magasin":"Dārayyā","Montant":"33.47","Quantité":38},
{"idVente":221,"Produit":"Clopidogrel","Date":"15.01.2013","Magasin":"N'Djamena","Montant":"28.52","Quantité":25}];
			   
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
        ventesanneeGroup = anneeDimension.group().reduceSum(function(d) {return d.Montant * d.Quantité;});
		
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
	
	
	<div id="monthly-move-chart"></div>

<script type="text/javascript" src="http://d3js.org/queue.v1.min.js"></script>
<script type="text/javascript" src="../js/d3.js"></script>
<script type="text/javascript" src="../js/crossfilter.js"></script>
<script type="text/javascript" src="../js/dc.js"></script>
<script type="text/javascript">
    var moveChart = dc.compositeChart("#monthly-move-chart");
    d3.csv("MOCK_DATA.csv", function (error, data) {
        var dateFormat = d3.time.format("%d.%m.%Y");
        var numberFormat = d3.format(".2f");
        data.forEach(function (e) {
            e.dd = dateFormat.parse(e.Date);
            e.month = d3.time.month(e.dd); // pre-calculate month for better performance
        });
        var ndx = crossfilter(data);
        // monthly index avg fluctuation in percentage
        var moveMonths = ndx.dimension(function (d) {
            return d.month;
        });
        var monthlyMoveGroup = moveMonths.group().reduceSum(function (d) {
            return d.Montant;
        });
       /* var indexAvgByMonthGroup = moveMonths.group().reduce(
                function (p, v) {
                    ++p.days;
                    p.total += (+v.Montant) ;
                    p.avg = Math.round(p.total / p.days);
                    return p;
                },
                function (p, v) {
                    --p.days;
                    p.total -= (+v.Montant)  ;
                    p.avg = (p.days == 0) ? 0 : Math.round(p.total / p.days);
                    return p;
                },
                function () {
                    return {days: 0, total: 0, avg: 0};
                }
        );*/
        moveChart.width(600)
                .height(300)
                .transitionDuration(1000)
                .margins({top: 30, right: 50, bottom: 25, left: 60})
                .dimension(moveMonths)
                .mouseZoomable(true)
                .shareTitle(false)
                .x(d3.time.scale().domain([new Date(2004, 0, 1), new Date(2017, 11, 31)]))
                .round(d3.time.month.round)
                .xUnits(d3.time.months)
                .elasticY(true)
                .renderHorizontalGridLines(true)
                .legend(dc.legend().x(70).y(10).itemHeight(13).gap(5))
                .brushOn(false)
                .compose([
                 /*   dc.lineChart(moveChart)
                            .group(indexAvgByMonthGroup, "Monthly Index Average")
                            .valueAccessor(function (d) {
                                return d.value.avg;
                            }),*/
                    dc.lineChart(moveChart)
                            .group(monthlyMoveGroup, "Monthly Index Move")
                            .valueAccessor(function (d) {
                                return d.value;//Math.sqrt(d.value);
                            })
                           /* .title(function (d) {
                                var value = d.value.avg ? d.value.avg : d.value;
                                if (isNaN(value)) value = 0;
                                return dateFormat(d.key) + "\n" + numberFormat(value);
                            })*/
                            .ordinalColors(["orange"])
                            //.useRightYAxis(true)
                ])
                //.yAxisLabel("Monthly Index Average")
                .rightYAxisLabel("Monthly Index Move")
                .renderHorizontalGridLines(true);
        dc.renderAll();
    });
</script>
</div>
	
	
      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->



	
  </body>
</html>

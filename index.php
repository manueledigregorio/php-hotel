<?php



$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

//$filter = $_GET['filter_parking'];
$filter = (isset($_GET['filter_parking']) == null) ? 'all' : $_GET['filter_parking'];

//$filter = 'all';
// 
//if(isset($_GET['filter_parking']) != null){
//  $filter = $_GET['filter_parking'];
//}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>hotel</title>
</head>
<body>
<div class="container">

<form method="GET" action="index.php">
  <label for="filter_parking">Filtra per parcheggio:</label>
    <select name="filter_parking" id="filter_parking">
      <option value="with_parking">Con parcheggio</option>
      <option value="all" >Visualizza tutti</option>
    </select>
  <input type="submit" value="Filtra">
</form>


<div class="row">
  <?php foreach ($hotels as $hotel ){?>
   
    <?php if ($filter == 'all' || $hotel['parking']) {?>
      <div class="col-4 py-4 ">
        <div class="card" style="width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Name: <?php echo $hotel['name'] ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $hotel['description'] ?></h6>
            <p class="card-text">Parking: <?php echo $hotel['parking'] ? 'si' : 'no' ?></p>
            <p class="card-text">Vote:  <?php echo $hotel['vote']?></p>
            <p class="card-text">Distance to center: <?php echo $hotel['distance_to_center'] ?></p>
            
          </div>
        </div>
      </div>



    <?php } ?>
 <?php } ?>
    
</div>
</div>
  
</body>
</html>
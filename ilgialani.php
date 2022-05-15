<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlgi Alanlarım</title>
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="stil.css">
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="bootstrap.js"></script>
</head>
</head>
<body>

<?php
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://www.balldontlie.io/api/v1/players/237',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
$parsed = json_decode($response);
curl_close($curl);
?>

<div class="container ">
  <div class="row">
    <div class="col-md-3">
    <h1>Favori Oyuncum</h1>
<h5>First name</h5><strong class=><?php echo $parsed->first_name; ?>
</strong>
<h5>Last name</h5>
<strong class=><?php echo $parsed->last_name; ?>
</strong><br>
<h5>Height feed</h5>
<strong><?php echo $parsed->height_feet; ?>
</strong><br>
<h5>Height inches</h5>
<strong><?php echo $parsed->height_inches; ?>
</strong><br>
<h5>weight pounds</h5>
<strong><?php echo $parsed->weight_pounds; ?>
</strong><br>
<h5>Team city </h5>
<strong><?php echo $parsed->team->city; ?><br> 
</strong>
<h5>Team abbreviation</h5>
<strong><?php echo $parsed->team->abbreviation; ?>
</strong><br>
<h5>Team division</h5>
<strong><?php echo $parsed->team->division; ?>
</strong><br>
<h5>Team full_name</h5>
<strong><?php echo $parsed->team->full_name; ?>
</strong><br>
<h5>Position</h5>
<strong><?php echo $parsed->position; ?>
</strong><br>
    </div>
  <div class="col-md-9">
  <video controls style="width: 100% ;"> 
  <source src="lebroon.mp4"  type="video/mp4">
</video>
  </div>

</div>
  </div>


</body>
</html>
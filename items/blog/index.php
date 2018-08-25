<?php
	$imgFolder = '/mnt/mypassport/images/Skog/';
  $imgNames = array();
  $handle = opendir('/mnt/mypassport/images/Skog/');
  
  if ($handle = opendir('/mnt/mypassport/images/Skog/')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

            array_push($imgNames, $entry);
        }
    }

    closedir($handle);
}

$numImages = count($imgNames);

?>

<!doctype html>

<html lang="en">
<head>
    <script>
    
        

  
 
        
        
        </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="refresh" content="" >
  <title>Blog</title>

  <link rel="stylesheet" type="text/css" href="./slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="lib/style.css">

  <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
  <![endif]-->
</head>

<body>


<section id="photos"></section>



    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="lib/scripts.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
      var allImages = "";
      var numImages = <?php echo $numImages; ?>;
 

  <?php foreach($imgNames as $a){ ?>
    var width = getRandomSize(200, 400);
var height =  getRandomSize(200, 400);
$('#photos').append('<img src="' + <?=$a?> + '" style="width: ' + width + 'px; height: ' + height + 'px;" alt="">');

<?php } ?>


    });
    function getRandomSize(min, max) {
return Math.round(Math.random() * (max - min) + min);
}
    </script>

</body>
</html>

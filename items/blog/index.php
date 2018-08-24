<?php
	$imgFolder = '/mnt/mypassport/images/Skog/';
	$imgNames = array();
  
  if ($handle = opendir('.')) {

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
        function myOnInit()
        {
          var numImages = <?php echo $numImages; ?>;
          var i, imgNames = [];
          <?php 
            echo "imgNames[] = [";
            echo "imgNames = [";
            for ($i=0; $i<$numImages; $i++)
            {
              if ($i != 0) echo ", ";
              echo "'$imgFolder$imgNames[$i]'";
            }
            echo "];\n"
          ?>
          
          for (i=0; i<numImages; i++)
          {
            img = document.createElement('img');
            img.src = imgNames[i];
            img.setAttribute('width', '440');
            img.setAttribute('height', '500');
            document.body.appendChild(img);
          }
        }
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

<body onload='myOnInit();'>


<section id="photos"></section>



    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script src="lib/scripts.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){

    });
    </script>

</body>
</html>

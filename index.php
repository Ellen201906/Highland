<!-- Author: Ye Liu
    This is the index page. It shows a Bootstrap carousel and the packages currently available.
-->

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">


<head>
    <meta charset="utf-8" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <style>  
	#picture{
	
		margin-top:-20px;
	}
	.imgs{width:450px;
	       height:400px;
		   float:left;
		   padding-right:10px;
		   }
    #body1{
		margin-top:450px;
		margin-left:5px;
		font-size:20px;
	}
	i{
		color:	black
	}

    </style>
    <title>Highland mini market</title>
	</head>
<body>
    <!-- Head includes login and site nav -->
    <?php include 'header.php';?>

 
  
  <div id="picture">
    
    <img src="store1.jpg" class="d-block imgs" alt="store"  >

    <img src="store2.jpg" class="d-block imgs" alt="store" >
 

    <img src="store3.jpg" class="d-block imgs" alt="store" >
	 <img src="webwxgetmsgimg.jpg" class="d-block imgs" alt="store" >

   </div>

  <div id="body1">
  <p><i class="far fa-clock"></i>Business hours:   Monday to Sunday  |   9:00am to 9:00pm</p>

  <p><i class="fas fa-phone-volume"></i> Phone number: 780-328-3069</p>


   <i class="fas fa-envelope-square"></i><a href="Mailto:liuye5@hotmail.com?&Subject=From Highland's customer" style="margin-left:5px;color:black">Email to me</a>
   
  <p style="margin-top:16px"><i class="fas fa-compass"></i> Address: 8204 Jasper Ave NW, Edmonton AB T5H 3S2</p>
  
  <a class="nav-link " href="#" id="navbardrop" data-toggle="dropdown" data-hover="dropdown" title="click to open or close map" style="margin-left:-10px;color:black"><i class="fas fa-globe"></i>Click to see map</a>   
  <div class="dropdown-menu">
  <!-- bing map-->
  <div style="text-decoration:none; overflow:hidden;max-width:100%;width:480px;height:400px;">
  <div id="googlemaps-display" style="height:100%; width:100%;max-width:100%;">
  <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=8204+jasper+ave+edmonton+canada&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
  </iframe>
  </div>
  <a class="embedmap-code" rel="nofollow" href="https://www.bootstrapskins.com/themes" id="authmap-data">premium bootstrap themes
  </a>
  <style>#googlemaps-display img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style>
  </div>
           
       </div>
  
  

    <!-- footer -->
    <?php include 'footer.php';?>
	
</body>
</html>
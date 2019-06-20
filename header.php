<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142434229-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142434229-1');
</script>

  <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>

</head>

<style>
 #header1{
 margin-left:5px;
 font-size:20px;
 text-align:center;
 }
 nav{
 font-size:20px;
 }

  #mornGreet{
	
         font-size:25px;
         color:white ;
         text-align:center;      
          }
       #evenGreet{
	 line-height:60px;
         height:60px;
         font-size:25px;
         color:white ;
         text-align:center;
          }
        #afteGreet{
         line-height:60px;
         height:60px;
         font-size:25px;
         color:white ;
         text-align:center;       
          }

 a{
 	 margin-left:30px
 }
</style>
</head>    
<div> 
    <div id="header1">
	 <script>


            var d = new Date();
            var curTime=d.getHours();
            if (curTime<12)
            {
            document.write("<p id='mornGreet' >Good Morning, Welcome to Highland Minimart!</p>");
            }
			else if (curTime>17)
            {
            document.write("<p id='evenGreet'>Good Evening, Welcome to Highland Minimart!</p>");
            }
            else {
	        document.write("<p id='afteGreet'>Good Afternoon, Welcome to Highland Minimart!</p>");
            }
    </script>
	</div>
 <br>
  <nav class="navbar navbar-expand-lg navbar-light bg-muted" id="navbar">
    <button href="#collapseOne" class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
	   <span> catalogue</span>
    </button>
    <div   class="collapse navbar-collapse collapse in" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">UPS</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">West Union</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link" href="#">Grocery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Lottery</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-hover="dropdown">Tobacco</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">cigar</a>
            <a class="dropdown-item" href="#">electronic cigarette</a>
            <a class="dropdown-item" href="#">accessory</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-hover="dropdown">Health products</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-hover="dropdown">Fashion</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">shirt</a>
            <a class="dropdown-item" href="#">hoodie</a>
            <a class="dropdown-item" href="#">accessory</a>
          </div>
        </li>
      </ul>

	   <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" data-hover="dropdown">Others</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">picture</a>
            <a class="dropdown-item" href="#">blanket</a>
			 <a class="dropdown-item" href="#">toy</a>
            <a class="dropdown-item" href="#">gift</a>
          </div>
        </li>
      </ul>
    </div>
    
  </nav>
</div>
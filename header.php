<head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142434229-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142434229-1');
</script>

  

</head>

<style>
 

  #mornGreet{
	  line-height:50px;
         height:50px;
         font-size:25px;
         color:white ;
         text-align:center;      
          }
       #evenGreet{
	 line-height:50px;
         height:50px;
         font-size:25px;
         color:white ;
         text-align:center;
          }
        #afteGreet{
         line-height:50px;
         height:50px;
         font-size:25px;
         color:white ;
         text-align:center;       
          }

 a{
 	 margin-left:30px
 }
</style>
</head> 
<body>
<div> 
    <div id="header1">
	 <script>


            var d = new Date();
            var curTime=d.getHours();
            if (curTime<12)
            {
            document.write("<p id='mornGreet' >Good Morning, Welcome to Highland MiniMart!</p>");
            }
			else if (curTime>17)
            {
            document.write("<p id='evenGreet'>Good Evening, Welcome to Highland MiniMart!</p>");
            }
            else {
	        document.write("<p id='afteGreet'>Good Afternoon, Welcome to Highland MiniMart!</p>");
            }
    </script>
	</div>
 <br>
  <nav class="navbar navbar-expand-lg navbar-light bg-muted" id="navbar" style="margin-top:20px">
    <button  class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#example-navbar-collapse" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
	   <span style="font-size:16px"> catalogue</span>
    </button>
    <div   class="collapse navbar-collapse" id="example-navbar-collapse">
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
</body>

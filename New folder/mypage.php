<!DOCTYPE html>
<html>
<head><title>Title | Super Title</title>
         
     <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	 
  <link rel="shortcut icon" type="image/x-icon" href="images/x.ico" />
	  <script src="bootstrap/js/jquery.min.js"></script>  
	 <script src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
<style>

             @font-face{
            font-family:myfont;
            src:url(fo.otf);
        }   
		 @font-face{
            font-family:myfont1;
            src:url(fo2.ttf);
        }  
 @font-face{
            font-family:myfont2;
            src:url(fo3.otf);
        }  		
           
body{ 
	font-family:myfont;

}

</style>
<script>

$(function(){
	


	

$(".ltrigh").click(function(){
$(".hh").animate({width: 'toggle', height: 'toggle'}, "slow");
$(".indexx").slideToggle("slow");
});





});
</script>
<br>
<nav class="navbar navbar-default  navbar-fixed-top">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynav" aria-expanded="false">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="#">Khenemfie.</a>

</div>

<div class="collapse navbar-collapse" id="mynav">
<!--<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Management <span class="caret"></span></a>
</li>
</ul>-->
</nav>





</body>
</html>
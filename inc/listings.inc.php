<!-- Listings General -->
<section class="jumbotron">
  <div class="container">
  	<!-- Breadcrumbs -->
    <ul class="breadcrumb">
    	<li><a href="#">Home</a></li>
    	<li><a href="#">Oregon</a></li>
    	<li class="active" onclick="includeEach()">Bend</li>
	</ul>
<!-- listingsCity -->   
<?php               
if (!isset($_REQUEST['content']))                   
include("inc/listingsEach.inc.php");               
else               
{                   
$content = $_REQUEST['content'];                   
$nextpage = "inc/" . $content . ".inc.php";                    
include($nextpage);    
// uses _REQUEST to get the passed variable through GET or POST. If the variable "login" is passed, then $nextpage will then become login.inc.php.  This is then include()         
}              
?> 
</section>
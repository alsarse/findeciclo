<html>
<?php 

print "<script>";

include("jquery/jquery-3.1.1.js");
include("bootstrap/js/bootstrap.min.js");
include("js/jspro.js");

print "</script>";

print "<style>";

include("font-awesome/css/font-awesome.min.css");
include("css/header.css");
include("css/index.css");
include("css/footer.css");
include("bootstrap/css/bootstrap.min.css");

print "</style>";

print "<div class='nav navbar-inverse navbar-fixed-top'>
			<div class='container-fluid'>
			    <div class='navbar-header'>
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#reducir'>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>                        
					</button>
				</div>
				<img id='logo' src='logo.jpg'>
				<div class='collapse navbar-collapse' id='reducir'>
					<nav>
					<ul class='pull-right'>
						<li><a  class='active' href='#seccion1'>Seccion1</a></li>
						<li><a href='#seccion2'>Seccion2</a></li>
						<li><a href='#seccion3'>Seccion3</a></li>
						<li><a href='#seccion4'>Seccion4</a></li>
						<li><a href='#seccion5'>Seccion5</a></li>
					</ul>
					</nav>
				</div>
			</div>
		</div>";

 ?>
 </html>
<div id="navbar">
	<?php 
	if($selected=='Home'){
		echo('<div class="nav-opt nav-opt-selected">Pine</div>');
	}
	else{
		echo('<a href="/"><div class="nav-opt">Pine</div></a>');
	}
	if($selected=='Apps'){
		echo('<div class="nav-opt nav-opt-selected">Apps</div>');
	}
	else{
		echo('<a href="/apps"><div class="nav-opt">Apps</div></a>');
	}
	if($selected=='AirSync'){
		echo('<div class="nav-opt nav-opt-selected">AirSync</div>');
	}
	else{
		echo('<a href="/airsync"><div class="nav-opt">AirSync</div></a>');
	}
	if($selected=='Downloads'){
		echo('<div class="nav-opt nav-opt-selected">Downloads</div>');
	}
	else{
		echo('<a href="/downloads"><div class="nav-opt">Downloads</div></a>');
	}
	?>
</div>
<style>
#navbar{
	width:100vw;
	padding: 0.6rem 1rem;
	background: rgba(66, 66, 66, 0.8);
	backdrop-filter: blur(20px);
	-webkit-backdrop-filter: blur(20px);
	position: fixed;
	top:0px;
	left:0px;
	z-index: 10;
	display: flex;
	justify-content: space-evenly;
}
.nav-opt{
	padding:0rem 0.5rem;
	cursor: pointer;
	font-size: 1rem;
	color:white;
	font-weight: 100;
}
.nav-opt:hover{
	color:rgb(0, 153, 255);
}
.nav-opt-selected{
	color:rgb(150, 150, 150);
	cursor: unset;
}
.nav-opt-selected:hover{
	color:inherit;
}
</style>
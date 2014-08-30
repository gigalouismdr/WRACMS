<head>
  <link rel="stylesheet" href="animate.css">
</head>
<style>
body {
	background-position: center;
	background-color: black;
}

.menu {
background-color:#ffffff;
border:1px solid gray;
padding:5px;
}
.box {
background-color:#C0C0C0;
border:5px solid black;
padding:50px;
width:1000;
}
.info1 {
background-color:#ffffff;
border:5px solid black;

}
.info2 {
background-color:#ffffff;
border:5px solid black;

}
.info3 {
background-color:#ffffff;
border:5px solid black;

}
.footer {
background-color:#606060;
border:5px solid black;
padding:50px;
}
.titre {
background-color:#606060;
width:5
height:5
}


.trait
    {
    border-left: 1px solid black;
    padding-left: 5px;
    margin-left: 5px;
    }

</style>
<nav>
<span class="menu">
<?php
$titre = 'titrecourt';
$titrecourt = 'WRACMS';
echo ${$titre};
?>
 - 
<?php
$slogan = 'slogancomplet';
$slogancomplet = 'Le cms open source !';
echo ${$slogan};
?>
<span class="trait"></span>
<a href="index.php">Accueil</a> 
<span class="trait"></span> 
<a href="emissions.php">Emissions</a> 
<span class="trait"></span> 
<a href="agenda.php">Agenda</a> 
<span class="trait"></span> 
</nav>
</span>



<!DOCTYPE html 5.0>
<head>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link href="../css/spel.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script>
function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
</script>


</head>
	<header>
		<a href="boek2/index.php"><img src="../img/technologo.jpeg" id="logo"/></a>
	</header>
<html>
<body>
<p>boek1</p>
<!--rij1-->
<section id="blokken">

	<img id="muisfoto" src="../img/1.png"/>
	<div class="bloks" id="blok1">

		<div id="leeg-blokjes">
		<div class="leeg-blokjes" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
		<div class="leeg-blokjes" id="leegblok2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</div>
		
<div id="blokjesinblok">
		<img src="../img/2.png" class="blokdelen" id="blok1deel1"></img>
		<img src="../img/3.png" class="blokdelen" id="blok1deel2"></img>
</div>
	</div>
	<div class="bloks" ondrop="drop(event)" ondragover="allowDrop(event)" id="blok2"></div>
	<div class="bloks" ondrop="drop(event)" ondragover="allowDrop(event)" id="blok3"></div>
	<div class="bloks" ondrop="drop(event)" ondragover="allowDrop(event)" id="blok4"></div>
</section>

</body>
<footer>
</footer>
</html>



<!DOCTYPE html 5.0>
<head>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link href="../css/boek1.css" rel="stylesheet" type="text/css" />
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
	<div class="bloks" ondrop="drop(event)" ondragover="allowDrop(event)" id="blok1"></div>
	<div class="bloks" ondrop="drop(event)" ondragover="allowDrop(event)" id="blok2"></div>
	<div class="bloks" ondrop="drop(event)" ondragover="allowDrop(event)" id="blok3"></div>
	<div class="bloks" ondrop="drop(event)" ondragover="allowDrop(event)" id="blok4"></div>
</section>
<!--rij 2-->
<section id="blokken2">
	<div class="bloks2" id="blok12"><img draggable="true" class="fotos" src="../img/Afbeelding11.png"/></div>
	<div class="bloks2" id="blok22"><img draggable="true" class="fotos" src="../img/Afbeelding12.png"/></div>
	<div class="bloks2" id="blok32"><img draggable="true" class="fotos" src="../img/Afbeelding13.png"/></div>
	<div class="bloks2" id="blok42"><img draggable="true" class="fotos"  src="../img/Afbeelding14.png"/></div>
</section>
<button id="button-controlleer1" href="#">Controlleer</button>
</body>
<footer>
</footer>
</html>
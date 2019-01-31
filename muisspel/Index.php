


<!DOCTYPE html 5.0>
<head>
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<link href="../css/spel.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="../js/script.js"/>


</head>
	<header>
		<a href="boek2/index.php"><img src="../img/technologo.jpeg" id="logo"/></a>
	</header>
<html>
<body>
<p>boek1</p>
<!--rij1-->
<!--
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
-->
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
<!--fotos1-->
<div id="flex-container10">
<section id="border1"> 	
<img id="muisimg1" src="../img/1.png"/>
<article id="flex-container11">
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</article>
<br>
<article id="flex-container12">
<img id="drag1" src="../img/2.png" draggable="true" ondragstart="drag(event)" width="250" height="230">
<img id="drag2" src="../img/3.png" draggable="true" ondragstart="drag(event)" width="250" height="230">
</article>
</section>


<!--fotos2-->
<section id="border1">

<img id="muisimg2" src="../img/4.png"/>

<article id="flex-container11">

<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>

</article>
<br>
<article id="flex-container12">
<img id="drag3" src="../img/5.png" draggable="true" ondragstart="drag(event)" width="250" height="230">
</article>
</section>

<!--fotos3-->
<section id="border1">
<img id="muisimg3" src="../img/6.png"/>
<article id="flex-container11">
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</article>
<br>
<article id="flex-container12">
<img id="drag4" src="../img/7.png" draggable="true" ondragstart="drag(event)" width="250" height="230">
<img id="drag5" src="../img/8.png" draggable="true" ondragstart="drag(event)" width="250" height="230">
</article>
</section>
<!--fotos4-->

<section id="border1">
<img id="muisimg4" src="../img/9.png"/>
<article id="flex-container11">
<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
<div id="div2" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
</article>
<br>
<article id="flex-container12">
<img id="drag6" src="../img/10.png" draggable="true" ondragstart="drag(event)" width="250" height="230">
<img id="drag7" src="../img/11.png" draggable="true" ondragstart="drag(event)" width="250" height="230">
<img id="drag8" src="../img/12.png" draggable="true" ondragstart="drag(event)" width="250" height="230">
</article>
</section>

<div class="streepjes" id="streep11"></div>
<div class="streepjes" id="streep12"></div>
<div class="streepjes" id="streep2"></div>
<div class="streepjes" id="streep31"></div>
<div class="streepjes" id="streep32"></div>
<div class="streepjes" id="streep41"></div>
<div class="streepjes" id="streep42"></div>
<div class="streepjes" id="streep43"></div>
<div class="streepjes" id="streep44"></div>


















</div>






















</body>
<footer>
</footer>
</html>
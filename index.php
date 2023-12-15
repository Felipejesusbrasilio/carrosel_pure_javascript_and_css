<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
	<title>Effect img</title>
</head>


<style type="text/css">

*
{
	margin: 0px;
	padding: 0px;
	box-sizing: border-box;
}	


body{
	display: grid;
	place-items: center;
}


/* Daqui para baixo é o style do alert modal computers */

.animation
{
  margin-left: -100%;
  transition: 0.5s;
}


.animation02
{
	margin-left: 0%;
  transition: 0.5s;
}

.animation03
{
	margin-left: 100%;
	transition: 0.5s;
}


.animation04
{
	margin-left: 0%;
	transition: 0.5s;
}

/* Aqui é o style da modal */

#hidden
{
	display: none;
}

.Painel-computer
{
	/*border: 1px solid red;*/
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}

.Painel-computer .quadro-inside-painel-computer
{
	/*border: 1px solid blue;*/
	width: 50%;
	height: 500px;
}

.Painel-computer .quadro-inside-painel-computer .title-painel-computers
{
	/*border: 1px solid black;*/
	display: grid;
	place-items: center;
	background-color: black;
	border-radius: 3px;
}

.Painel-computer .quadro-inside-painel-computer .title-painel-computers h1
{
	color: white;
	font-family: roboto;
	animation: animar_h1 1s infinite;
}

.Painel-computer .quadro-inside-painel-computer .title-painel-computers h1:hover
{
  cursor: pointer;
}

@keyframes animar_h1{
	0%{color: #28ca06;}
	50%{color: #0049B7;}
	100%{color: red;}
}

.Painel-computer .quadro-inside-painel-computer .painel-title-inside-quadro-inside-painel-computer 
{
	/*border: 1px solid red;*/
	width: 100%;
	height: 100px;
	display: grid;
	place-items: center;
}

.Painel-computer .quadro-inside-painel-computer .painel-title-inside-quadro-inside-painel-computer svg
{
	background-color: #0049B7;
	color: white;
	border-radius: 3px;
}


.Painel-computer .quadro-inside-painel-computer .painel-img
{
	/*border: 1px solid red;*/
	width: 100%;
	height: 300px;
  overflow: hidden;
}


.Painel-computer .quadro-inside-painel-computer .painel-img ul
{
	/*border: 1px solid blue;*/
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	list-style: none;
	padding: 0px;
}


.Painel-computer .quadro-inside-painel-computer .painel-img ul li 
{
  /*border: 1px solid #778899;*/
  width: 150px;
}


.Painel-computer .quadro-inside-painel-computer .painel-img ul li img 
{
	width: 100%;
	height: 100%;
}

</style>


<body>


<!-- Aqui é a div para o loja pix supershoes -->

<div id="hidden">

<div class="Painel-computer fixed-top">

<div class="quadro-inside-painel-computer">

<div class="painel-title-inside-quadro-inside-painel-computer">
	
<svg id="close-div-computer" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"></path>
</svg>

</div>

<div class="title-painel-computers"><h1 id="go">CLIQUE AQUI E VEJA OS TOPS COMPUTERS</h1></div>

<div class="painel-img">
	
<ul id="img01">

<li>
	
</li>

</ul>

	
</div>

</div>

</div>

</div>


</body>


<script type="text/javascript">
	


let array = ['https://pixsupershoes.com/imagem/computer01.jpg','https://pixsupershoes.com/imagem/computer02.jpg','https://pixsupershoes.com/imagem/computer03.jpg'];

let li = document.querySelector('#img01 li');

//console.log(li);

let i = 0;

let time = setInterval(()=>{

i++;

//console.log(i);

if (i == 1){

let img = document.createElement('img');

img.src = `${array[0]}`;

li.appendChild(img);


}


if (i == 3){

let ul = document.getElementById('img01');

ul.classList.add('animation');

}


if (i == 5){

let imagens = document.querySelectorAll('ul li img');

imagens[0].style.display = 'none';

let img = document.createElement('img');

img.src = `${array[1]}`;

li.appendChild(img);

let ul = document.getElementById('img01');

ul.classList.add('animation02');

}



if (i == 8){

let ul = document.getElementById('img01');

ul.classList.add('animation03');

}


if (i == 10){


let imagens = document.querySelectorAll('ul li img');

imagens[1].style.display = 'none';

let img = document.createElement('img');

img.src = `${array[2]}`;

li.appendChild(img);

let ul = document.getElementById('img01');

ul.classList.add('animation04');

}


if (i == 13){

let lis = document.querySelectorAll('ul li img');

lis[1].remove();

lis[2].remove();

lis[0].style.display = 'block';

}

},1000);


let button_close = document.querySelector('#close-div-computer');

button_close.addEventListener('click',function(){

clearInterval(time);

let div = document.querySelector('.Painel-computer');

div.style.display = 'none';

});


setTimeout(()=>{


let div = document.querySelector('#hidden');

div.style.display = 'block';


},2000);


let href = document.getElementById('go');

href.addEventListener('click',function(){

window.location.href = 'https://pixsupershoes.com/computadores';

});


</script>


</html>
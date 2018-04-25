var imgPlayer;
var btnRock;
var btnPaper;
var btnScissors;
var btnGo;
var computerChoice;
var playerChoice;


function init(){
	imgPlayer = document.getElementById("imgPlayer");
	btnRock = document.getElementById("btnRock");
	btnPaper = document.getElementById("btnPaper");
	btnScissors = document.getElementById("btnScissors");
	btnGo = document.getElementById('btnScissors');
	deselectAll();
}
	
function select(choice){
	//alert(choice);
	playerChoice = choice;
	imgPlayer.src = 'images/' + choice + '.png';
	deselectAll();
	if(choice=='rock') btnRock.style.backgroundColor = '#888888';
	if(choice=='paper') btnPaper.style.backgroundColor = '#888888';
	if(choice=='scissors') btnScissors.style.backgroundColor = '#888888';
	
	//btnGo.style.visibility = 'visible';
	btnGo.style.display = 'block';
}	

function go(){
	var numChoice = Math.floor(Math.random() * 3);
	var imgComputer = document.getElementById('imgComputer');
	
	if(numChoice == 0){
		computerChoice = 'rock';
		imgComputer.src = 'images/rock.png';
		document.getElementById('lblRock').style.backgroundColor = 'yellow';
	}
	
	if(numChoice == 1){
		computerChoice = 'paper';
		imgComputer.src = 'images/paper.png';
		document.getElementById('lblPaper').style.backgroundColor = 'yellow';
	}
	
	if(numChoice == 2){
		computerChoice = 'scissors';
		imgComputer.src = 'images/scissors.png';
		document.getElementById('lblScissors').style.backgroundColor = 'yellow';
	}
	
	//alert(playerChoice + ', ' + computerChoice);
}
	
function deselectAll(){
	btnRock.style.backgroundColor = 'silver';
	btnPaper.style.backgroundColor = 'silver';
	btnScissors.style.backgroundColor = 'silver';
	//alert('rock');
}	

/*	
function selectRock(){
	imgPlayer.src = 'images/rock.png';
	deselectAll();
	btnRock.style.backgroundColor = '#888888';
	//btnPaper.style.backgroundColor = '#silver';
	//btnScissors.style.backgroundColor = '#silver';
	//alert('rock');
}

function selectPaper(){
	imgPlayer.src = 'images/paper.png';
	deselectAll();
	btnPaper.style.backgroundColor = '#888888';
	//btnRock.style.backgroundColor = '#silver';
	//btnScissors.style.backgroundColor = '#silver';
	//alert('paper');
}

function selectScissors(){
	imgPlayer.src = 'images/scissors.png';
	deselectAll();
	btnScissors.style.backgroundColor = '#888888';
	//btnRock.style.backgroundColor = '#silver';
	//btnPaper.style.backgroundColor = '#silver';
	//alert('scissors');
}
*/

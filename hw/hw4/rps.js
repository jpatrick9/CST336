var imgPlayer;
var btnRock;
var btnPaper;
var btnScissors;
var btnGo;
var computerChoice;
var playerChoice;


function init(){
	imgPlayer = document.getElementById('imgPlayer');
	btnRock = document.getElementById('btnRock');
	btnPaper = document.getElementById('btnPaper');
	btnScissors = document.getElementById('btnScissors');
	btnGo = document.getElementById('btnGo');
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

function startGame(){
	//alert('pressed');
	document.getElementById('introScreen').style.display = 'none';
}

function replay(){
	document.getElementById('endScreen').style.display = 'none';
	btnGo.style.display = 'none';
	
	deselectAll();
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';

	imgPlayer.src = 'images/question.png';
	document.getElementById('imgComputer').src = 'images/question.png';
	
}

function go(){
	
	var txtEndTitle = document.getElementById('txtEndTitle');
	var txtEndMessage = document.getElementById('txtEndMessage');
	
	var numChoice = Math.floor(Math.random() * 3);
	var imgComputer = document.getElementById('imgComputer');
	
	document.getElementById('lblRock').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblPaper').style.backgroundColor = '#EEEEEE';
	document.getElementById('lblScissors').style.backgroundColor = '#EEEEEE';
	
	if(numChoice == 0){
		computerChoice = 'rock';
		imgComputer.src = 'images/rock.png';
		document.getElementById('lblRock').style.backgroundColor = 'yellow';
		if(playerChoice == 'rock'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'TIE';
		} //alert('TIE');
		else if(playerChoice == 'paper'){
			txtEndTitle.innerHTML = 'Paper covers Rock';
			txtEndMessage.innerHTML = 'YOU WIN';
		} //alert('YOU WIN');
		else if(playerChoice == 'scissors'){
			txtEndTitle.innerHTML = 'Rock smashes Scissors';
			txtEndMessage.innerHTML = 'YOU LOSE';
		} //alert('YOU LOSE');
		
	}
	
	else if(numChoice == 1){
		computerChoice = 'paper';
		imgComputer.src = 'images/paper.png';
		document.getElementById('lblPaper').style.backgroundColor = 'yellow';
		if(playerChoice == 'rock'){
			txtEndTitle.innerHTML = 'Paper covers Rock';
			txtEndMessage.innerHTML = 'YOU LOSE';
		} //alert('YOU LOSE');
		else if(playerChoice == 'paper'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'TIE';
		} //alert('TIE');
		else if(playerChoice == 'scissors'){
			txtEndTitle.innerHTML = 'Scissors cuts Paper';
			txtEndMessage.innerHTML = 'YOU WIN';
		} //alert('YOU WIN');
	}
	
	else if(numChoice == 2){
		computerChoice = 'scissors';
		imgComputer.src = 'images/scissors.png';
		document.getElementById('lblScissors').style.backgroundColor = 'yellow';
		if(playerChoice == 'rock'){
			txtEndTitle.innerHTML = 'Rock smashes Scissors';
			txtEndMessage.innerHTML = 'YOU WIN';
		} //alert('YOU WIN');
		else if(playerChoice == 'paper'){
			txtEndTitle.innerHTML = 'Scissors cuts Paper';
			txtEndMessage.innerHTML = 'YOU LOSE';
		} //alert('YOU LOSE');
		else if(playerChoice == 'scissors'){
			txtEndTitle.innerHTML = '';
			txtEndMessage.innerHTML = 'TIE';
		} //alert('TIE');
	}
	document.getElementById('endScreen').style.display = 'block';
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

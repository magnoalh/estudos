let count = 0;

const CURRENT_NUMBER = document.getElementById('currentNumber');

function increment() {
	if (count == 5) {
CURRENT_NUMBER.style.backgroundColor = 'red';
document.getElementsByTagName('button')[1].style.backgroundColor = 'red';
	} else {
		count++;
		CURRENT_NUMBER.innerHTML = count;
		document.getElementsByTagName('button')[0].style.backgroundColor = 'lightgray' ;
		CURRENT_NUMBER.style.backgroundColor = 'lightgray';
	}

}

function decrement() {
	if (count == -5){
		CURRENT_NUMBER.style.backgroundColor = 'red';
document.getElementsByTagName('button')[0].style.backgroundColor = 'red';
	}else {
		count--;
		CURRENT_NUMBER.innerHTML = count;
		document.getElementsByTagName('button')[1].style.backgroundColor = 'lightgray' ;
		CURRENT_NUMBER.style.backgroundColor = 'lightgray';	
	}
	
}

function test() {
	kdowkdpo;
}

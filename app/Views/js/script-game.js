const game = document.getElementsById('game');
const view = document.getElementById('view');
const char = document.getElementById('char');
const control = document.getElementById('control');
const button = document.getElementById('button');
const button2 = document.getElementById('button2');

let point;

function playGame() {
    this.game.classList.add('play');
    this.control.classList.add('play');
    
    this.point = 0;
    document.querySelector('.score-board').innerHTML = '<b>' + this.point + '</b>';

    setTimeout(() => {
        this.game.classList.remove('play');
        this.control.classList.remove('play');
    }, 20000);
}

function pedalRight() {
    this.button.classList.add('move');
    this.view.classList.add('move');
    this.point++;
    
    document.querySelector('.score-board').innerHTML = '<b>' + this.point + '</b>';
}

function pedalLeft() {
    this.button.classList.remove('move');
    this.view.classList.remove('move');
}
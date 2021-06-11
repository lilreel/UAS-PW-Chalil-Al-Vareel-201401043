const building = document.querySelectorAll('.building');
const ghost = document.querySelectorAll('.ghost');
const scoreboard = document.querySelector('.scoreboard');
const sfxPistol = document.querySelector('#sfxpistol');

let buildingSebelumnya;
let end;
let score;

function randomBuilding(building){
    const b = Math.floor(Math.random() * building.length);
    const bRandom = building[b];
    if ( bRandom == buildingSebelumnya )
    {
        randomBuilding(building)
    }
    buildingSebelumnya = bRandom;
    return bRandom;
}

function randomWaktu(min, max){
    return Math.round(Math.random() * (max - min) + min);
}

function munculkanGhost() {
    const bRandom = randomBuilding(building);
    const wRandom = randomWaktu(400,900);
    bRandom.classList.add('muncul');
    setTimeout(() => {
        bRandom.classList.remove('muncul');
        if (!end){
            munculkanGhost();
        }
    }, wRandom);
}

function start() {
    end = false;
    score = 0;
    scoreboard.textContent = 0;
    munculkanGhost();
    setTimeout(() => {
        end = true;
    },20000);
}

function shoot() {
    score++;
    this.parentNode.classList.remove('muncul');
    sfxPistol.play();
    scoreboard.textContent = score;
}

ghost.forEach(g => {
    g.addEventListener('click', shoot)
});
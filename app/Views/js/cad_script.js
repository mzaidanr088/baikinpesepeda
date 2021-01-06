// template stat karakter
// class Char {
//     constructor(name, health, speed) {
//         this.name = name;
//         this.health = health;
//         this.speed = speed;
//     }

//     sprint(energy) {
        
//         energy = 5;

//         this.speed += energy;
//         return `${this.name} bertambah cepat`;
//     }

//     crash(obstacle) {
        
//         obstacle = 5;
        
//         this.speed -= obstacle/2;
//         this.health -= obstacle;
//         return `${this.name} menabrak`;
//     }
// }

// let kilo = Player ('Kilo', 100, 75);
// let vero = Player ('Vero', 75, 100);

let canvas = document.getElementById('canvas');
let ctx = canvas.getContext('2d');

ctx.moveTo(0,0);
ctx.lineTo(200,200);
ctx.stroke()


let imageObs = new image();
imageObs.src = "img/obs.jpg";

function startCanvas() {
    let canvas = document.getElementById('canvas');
    let ctx = canvas.getContext('2d');

    canvas.width = canvas.scrollWidth;
    canvas.height = canvas.scrollHeight;

    let cW = canvas.width;
    let cH = canvas.height;

    main();
    
    function main() {
        
        let obstacle = [];
        addObstacle();

        function addObstacle() {
            let x=640, y=0, w=60, h=60;
            let shuffle = Math.floor(Math.random()*60);
            obstacle.push({"x":x, "y":y-shuffle, "w":w, "h":h});
        }

        function renderObstacle(){
            for(let i=0; i<obstacle.length; i++){
                let o = obstacle[i];
                ctx.drawImage(imageObs, o.x--, o.y);

            }
        }


        function animation() {
            ctx.save();
            ctx.clearRect(0, 0, cW, cH);

            renderObstacle();
            
            ctx.restore();
        }


    } //end of main()


} //end of startCanvas()

window.addEventListener('laod', function(event){
    startCanvas();
});
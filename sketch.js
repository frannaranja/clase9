var url = 'https://api.myjson.com/bins/bdlbf';

function setup() {
   loadJSON(url, gotData, 'json');
   canvas = createCanvas(300, 300);
   canvas.parent('top');
   canvas.style('z-index', '-1');
   noStroke();
   noLoop();
}

function gotData(data) {
   console.log(data);
   var nombre = data.teas[22];
   textSize(40);
   text(nombre, width / 2, height/ 2);
}

function draw() {
   background(237, 34, 93);
   fill(255);
   textAlign(CENTER);
}

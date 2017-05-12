//acá tiene que ponerse creativxs
//revisen lo que hicimos en la clase 7
//https://github.com/profesorfaco/dno037-2017-07

var data;

function preload() {
   data = loadTable("https://www.datazar.com/file/f007b32d2-3b6b-47ed-8f9a-f04cf8ec5ea0", "true", "header");
}
function setup() {
   canvas = createCanvas(windowWidth, windowHeight * 0.8);
   canvas.parent('top');
   canvas.position(0, 0);
   canvas.style('z-index', '-1');
   noLoop();
   noStroke();
}

var snake;
var food;
var scl = 20;

function setup() {
	createCanvas(600, 600);
	frameRate(10);
	snake = new Snake(width/2, height/2);
	food = new Food();
	food.update();
}

function draw() {
	background(150, 255, 105);
	snake.death();
	snake.update();
	snake.show();
	food.show();
	
	if (snake.eat(food)){
		food.update();
	}


}

function keyPressed() {
	if (keyCode === UP_ARROW && snake.yspeed != 1) {
		snake.dir(0, -1);
	} else if (keyCode === DOWN_ARROW && snake.yspeed != 1) {
		snake.dir(0, 1);
	} else if (keyCode === LEFT_ARROW && snake.xspeed !=1) {
		snake.dir(-1, 0);
	} else if (keyCode === RIGHT_ARROW && snake.xspeed != -1) {
		snake.dir(1, 0);
	}

	if (keyCode === 32){
		console.log(snake.xspeed);
		console.log(snake.yspeed);
	}
}

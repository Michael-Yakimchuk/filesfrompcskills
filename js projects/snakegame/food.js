function Food() {
	this.x = 0;
	this.y = 0;
	this.cols = floor(width / scl);
	this.rows = floor(height / scl);

	this.update = function () {
		this.x = floor(random(this.cols)) * scl;
		this.y = floor(random(this.rows)) * scl;
	}

	this.show = function () {
		fill(255, 0, 100);
		rect(this.x, this.y, scl, scl);
	}
}

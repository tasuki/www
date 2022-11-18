document.addEventListener("DOMContentLoaded", function(e) {
	function colorHex(color) {
		return color.toString(16).padStart(2, "0");
	}

	const header = document.querySelector("#header");
	const body = document.querySelector("body");

	function reanimate() {
		low = 200, high = 255, dark = light = "#";
		for (i = 0; i < 3; i++) {
			color = Math.floor(Math.random() * (high - low));
			dark += colorHex(color);
			light += colorHex(color + low);
		}

		header.style.backgroundColor = dark;
		body.style.backgroundColor = light;
		header.style.color = light;
		body.style.color = dark;
	}

	reanimate();
	setInterval(reanimate, 5000);
});

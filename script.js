$(document).ready(function() {
	function colorHex(color) {
		return color.toString(16).padStart(2, "0");
	}
	function reanimate() {
		low = 200, high = 255, dark = light = "#";
		for (i = 0; i < 3; i++) {
			color = Math.floor(Math.random() * (high - low));
			dark += colorHex(color);
			light += colorHex(color + low);
		}

		$(".header").css("backgroundColor", dark);
		$("body").css("backgroundColor", light);
		$(".header").css("color", light);
		$("body").css("color", dark);
		$("a").css("color", dark);
	}

	reanimate();
	setInterval(reanimate, 5000);
});

var font_sizes = ["7", "10", "12", "16", "24", "32"]

body.onload function() {
	document.getElementById("animation").onchange = choose_animation;
	document.getElementById("start").onchange = start_animation;
	document.getElementById("stop").onchange = stop_animation;
}

function choose_animation() {
	var animation  = document.querySelector("#animation");
	document.getElementById("viewer").value = ANIMATIONS[animation.value];
	alert(ANIMATIONS[animation.value]);
}

function start() {
	document.getElementById("start").disabled = false;
	document.getElementbyId("stop").disabled = true;
}

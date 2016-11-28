var font_sizes = ["7", "10", "12", "16", "24", "32"]

function choose_animation() { //chooses which animation to display
	var anime  = document.querySelector("#animation");
	document.getElementById("viewer").value = ANIMATIONS[animation.value];
	alert(ANIMATIONS[animation.value]);
}

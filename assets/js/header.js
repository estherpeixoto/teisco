function displayWindowSize() {
	var w = document.documentElement.clientWidth

	console.log(w)

	if (w >= 768) {
		document.getElementById('feat').src = '/assets/img/desktop_slide.jpg'
	} else {
		document.getElementById('feat').src = '/assets/img/mobile_slide.jpg'
	}
}

window.addEventListener('resize', displayWindowSize)

displayWindowSize()

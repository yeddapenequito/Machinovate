function changeImageTo(fromImage, toImage, whenClickedImage, imageArray) {
	for (var index in document.images) {
		if (index != whenClickedImage && index > fromImage) {
			document.images[index].className = "";
		}
	}
	document.images[whenClickedImage].className = "active";
	document.images[fromImage].src = imageArray[toImage];
}
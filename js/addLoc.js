/* Add Loc creates overlay to add a new remote location */
function addLoc(under, over, pod) {
	/* show underlay */
	var underlay = document.getElementById(under);
	underlay.style.visibility = "visible";
	underlay.style.height = screen.height + "px";
	underlay.style.width = screen.width + "px";
	/* show overlay */
	var overlay = document.getElementById(over);
	var overlayPod = document.getElementsByClassName(pod);
	overlay.style.visibility = "visible";
	// overlay.style.top = (window.height - overlayPod.style.height) / 2;
	// overlay.style.left = (window.width - overlayPod.style.width) / 2;
}
/* Close Overlay */
function closeOverlay(under, over){
	var underlay = document.getElementById(under);
	var overlay = document.getElementById(over);
	underlay.style.visibility = "hidden";
	overlay.style.visibility = "hidden";
}
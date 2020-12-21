// Get the modal
var modal = document.getElementById("screenshot-modal");
var modalImg = document.getElementById("img-content");

function ShowModal(screenshotPath)
{
	modal.style.display = "block";
	modalImg.src = screenshotPath;
}

function CloseModal()
{
	modal.style.display = "none";	
	modalImg.src = '';
}
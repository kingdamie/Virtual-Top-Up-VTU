// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var buyButton = document.getElementById("buyButton");

// When the user clicks the button, open the modal
buyButton.addEventListener("click", function () {
  modal.style.display = "block";
});

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function (event) {
  if (event.target == modal) {
    closeModal();
  }
});

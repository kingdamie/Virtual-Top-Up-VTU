function copyText(textId, messageDivId) {
  // Get the text content from the element
  var textToCopy = document.getElementById(textId).innerText;

  // Create a temporary textarea element
  var textarea = document.createElement("textarea");
  textarea.value = textToCopy;

  // Append the textarea to the document
  document.body.appendChild(textarea);

  // Select the text in the textarea
  textarea.select();
  textarea.setSelectionRange(0, 99999); /* For mobile devices */

  // Copy the text to the clipboard
  document.execCommand("copy");

  // Remove the temporary textarea
  document.body.removeChild(textarea);

  // Display a message on the page
  var copyMessage = document.getElementById(messageDivId);
  copyMessage.innerText = "copied!";
  copyMessage.style.display = "block"; // Show the message

  // Hide the message after 3 seconds
  setTimeout(function () {
    copyMessage.style.display = "none";
  }, 3000);
}

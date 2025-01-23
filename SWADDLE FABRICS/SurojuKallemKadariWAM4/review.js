/*
Function to initialize the page and add event listener to submit button.
*/
function start() {
  document.getElementById("submitButton").addEventListener("click", reviewInput, false);
}
/*
  Function to validate user input and submit review.
  */
function reviewInput() {
  var nameInput = document.getElementById("nameBox").value.trim();
  var emailInput = document.getElementById("emailBox").value.trim();
  var contactInput = document.getElementById("contactBox").value.trim();
  var messageInput = document.getElementById("messageBox").value.trim();

  // Check if name input is empty or contains only numbers
  if (nameInput === "") {
    alert("Please enter your name");
    return;
  } else if (!isNaN(nameInput)) {
    alert("Please enter a valid name");
    return;
  }

  // Check if email input is empty or has valid email format
  if (emailInput === "") {
    alert("Please enter your email address");
    return;
  } else if (!emailInput.includes("@") || !emailInput.includes(".")) {
    alert("Please enter a valid email address");
    return;
  }

  // Check if contact input is empty or has 10 digits
  if (contactInput === "") {
    alert("Please enter your contact number");
    return;
  } else if (isNaN(contactInput) || contactInput.length !== 10) {
    alert("Please enter a valid contact number");
    return;
  }
  // Check if message input is empty
  if (messageInput === "") {
    alert("Please enter your message");
    return;
  }

  // Display success message after validation
  document.getElementById("resultPara").innerHTML = " Review submitted successfully! ";
}
// Add event listener to start function when page loads
window.addEventListener("load", start, false);

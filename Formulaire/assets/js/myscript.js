function verifierFormulaire() {
  var nameField = document.getElementById("name");
  if (nameField.value.trim() === '') {
      nameField.style.borderColor = "red";
  } else {
      nameField.style.borderColor = "green";
  }

  var firstNameField = document.getElementById("prénom");
  if (firstNameField.value.trim() === '') {
      firstNameField.style.borderColor = "red";
  } else {
      firstNameField.style.borderColor = "green";
  }

  var passwordField = document.getElementById("password");
  let alertMessage = document.querySelector(".text-danger");

  if (passwordField.value.length <= 8) {
      passwordField.style.borderColor = "red";
      alertMessage.classList.remove("invisible");
  } else {
      passwordField.style.borderColor = "green";
      alertMessage.classList.add("invisible");
  }

  var messageField = document.querySelector("textarea[name='message']");
  if (messageField.value.trim() === '') {
      messageField.style.borderColor = "red";
  } else {
      messageField.style.borderColor = "green";
  }

  let ageCheckbox = document.getElementById("formCheck-1");
  let ageLabel = document.querySelector(".form-check-label");

  if (ageCheckbox.checked) {
      ageLabel.style.color = "green";
  } else {
      ageLabel.style.color = "red";
  }
}

function verifemail() {
  let emailField = document.getElementById("email");

  if (emailField.value.trim() !== '') {
      if (emailField.value.includes("@")) {
          emailField.style.borderColor = "green";
      } else {
          emailField.style.borderColor = "red";
      }
  } else {
      emailField.style.borderColor = "red";
  }
}

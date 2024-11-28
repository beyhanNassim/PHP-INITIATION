

function verifierFormulaire() {
  var nameField = document.getElementById("name");
  var email = document.querySelector('[name="email"]');

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

  var email = document.querySelector('[name="email"]');


  if (email.value.trim() === "") {
    email.style.borderColor ="red"
  }else{
    email.style.borderColor ="green"
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

 let ageCheckbox = document.getElementById("age");
  let ageLabel = document.querySelector('label[for= "formCheck-1"]');

  if (ageCheckbox.checked) {
      ageLabel.style.color = "green";
  } else {
      ageLabel.style.color = "red";
  }

  
}
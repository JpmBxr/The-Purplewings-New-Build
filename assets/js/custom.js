/**
 * Clients Slider
 */
new Swiper(".clients-slider", {
  speed: 400,
  loop: true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  slidesPerView: "auto",
  pagination: {
    el: ".swiper-pagination",
    type: "bullets",
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 2,
      spaceBetween: 40,
    },
    480: {
      slidesPerView: 3,
      spaceBetween: 60,
    },
    640: {
      slidesPerView: 4,
      spaceBetween: 80,
    },
    992: {
      slidesPerView: 6,
      spaceBetween: 120,
    },
  },
});
/* for contact form fore page-index*/

function validateField(id) {
  var fieldValue = document.getElementById(id).value;

  if (fieldValue === "") {
    document.getElementById(id).style.borderColor = "red";
  } else {
    document.getElementById(id).style.borderColor = "green";
  }
}

function validateForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var subject = document.getElementById("subject").value;
  var mobileno = document.getElementById("mobileno").value;
  var message = document.getElementById("message").value;

  if (
    name === "" ||
    email === "" ||
    subject === "" ||
    mobileno.length < 10 ||
    message === ""
  ) {
    alert(
      "Please fill in all required fields and ensure the phone number is at least 10 characters."
    );
    return false;
  }
  return true;
}
/* for contact form fore page contact*/

function validateField_contact(id) {
  var fieldValue = document.getElementById(id).value;

  if (fieldValue === "") {
    document.getElementById(id).style.borderColor = "red";
  } else {
    document.getElementById(id).style.borderColor = "green";
  }
}

function validateForm_contact() {
  var name = document.getElementById("name-contact").value;
  var email = document.getElementById("email-contact").value;
  var subject = document.getElementById("subject-contact").value;
  var mobileno = document.getElementById("mobileno-contact").value;
  var message = document.getElementById("message-contact").value;

  if (
    name === "" ||
    email === "" ||
    subject === "" ||
    mobileno.length < 10 ||
    message === ""
  ) {
    alert(
      "Please fill in all required fields and ensure the phone number is at least 10 characters."
    );
    return false;
  }
  return true;
}

/* for contact form fore popup*/
function validateField_popup(id) {
  var fieldValue = document.getElementById(id).value;

  if (fieldValue === "") {
    document.getElementById(id).style.borderColor = "red";
  } else {
    document.getElementById(id).style.borderColor = "green";
  }
}

function validateForm_popup() {
  var name = document.getElementById("name-popup").value;
  var email = document.getElementById("email-popup").value;
  var subject = document.getElementById("subject-popup").value;
  var mobileno = document.getElementById("mobileno-popup").value;
  var message = document.getElementById("message-popup").value;

  if (
    name === "" ||
    email === "" ||
    subject === "" ||
    mobileno.length < 10 ||
    message === ""
  ) {
    alert(
      "Please fill in all required fields and ensure the phone number is at least 10 characters."
    );
    return false;
  }
  return true;
}

$(document).ready(function () {
  $("#contact-form").submit(function (event) {
    // Disable the submit button
    $("#submitBtn").prop("disabled", true);

    var formData = {
      name: $("#name").val(),
      email: $("#email").val(),
      mobileno: $("#mobileno").val(),
      subject: $("#subject").val(),
      message: $("#message").val(),
    };

    $.ajax({
      type: "POST",
      url: "process/process_contact.php",
      data: formData,
      dataType: "json",
      encode: true,
    })
      .done(function (data) {
        // Assuming your server responds with a success key in the JSON data
        if (data.success) {
          // Display a success message to the user
          alert("Thank You For Contacting Us!");

          // Reset the form fields
          $("#contact-form")[0].reset();
        } else {
          // Handle other cases if needed
          console.log(data);
        }
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        // Handle AJAX request failure
        console.log("AJAX request failed: " + textStatus, errorThrown);
      })
      .always(function () {
        // Re-enable the submit button regardless of success or failure
        $("#submitBtn").prop("disabled", false);
      });

    event.preventDefault();
  });

  $("#contact-popup-form").submit(function (event) {
    // Disable the submit button
    $("#submitBtnPopup").prop("disabled", true);

    var formData = {
      name: $("#name-popup").val(),
      email: $("#email-popup").val(),
      mobileno: $("#mobileno-popup").val(),
      subject: $("#subject-popup").val(),
      message: $("#message-popup").val(),
    };

    $.ajax({
      type: "POST",
      url: "process/process_contact.php",
      data: formData,
      dataType: "json",
      encode: true,
    })
      .done(function (data) {
        // Assuming your server responds with a success key in the JSON data
        if (data.success) {
          $("#contactFormPopup").hide();
          // Display a success message to the user
          alert("Thank You For Contacting Us!");

          // Reset the form fields
          $("#contact-popup-form")[0].reset();
        } else {
          // Handle other cases if needed
          console.log(data);
        }
      })
      .fail(function (jqXHR, textStatus, errorThrown) {
        // Handle AJAX request failure
        console.log("AJAX request failed: " + textStatus, errorThrown);
      })
      .always(function () {
        // Re-enable the submit button regardless of success or failure
        $("#submitBtn").prop("disabled", false);
      });

    event.preventDefault();
  });
});

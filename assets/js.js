document.addEventListener("DOMContentLoaded", function () {
  M.AutoInit();
});

$(document).ready(function () {
  $("#submit").click(function (e) {
    e.preventDefault();
    let country = $("#country").val();
    let formData = $("#serializeForm").serializeArray(); // Get all data as an Object
    let hasEmptyFields = false;
    // console.log(country === null);
    $.each(formData, function (ind, elem) {
      if (elem.value === "" || country === null) {
        // If every element value has empty field
        hasEmptyFields = true;
        return false; // exit loop
      }
    });
    if (hasEmptyFields) {
      console.warn("One of them is empty!");
      M.toast({
        html: "All Fields are required!",
        classes: "rounded red darken-1",
      });
      return false; // prevent form submission
    } else {
      console.table(formData);
      //   console.log(formData[0]);
      $("#response").html($("#serializeForm").serialize());
      $.ajax({
        url: "save-form.php",
        type: "POST",
        data: $("#serializeForm").serialize(),
        success: function (data) {
          M.toast({
            html: data,
            classes: "green darken-1",
          });
        },
      });

      $("#serializeForm").trigger("reset");
      $("#response").fadeOut(7000);
      $("#response").remove(10000);
      return true; // allow form submission if all fields are filled!
    }
  });

  $(document).on("click", "#viewData", function () {
    $.ajax({
      url: "load-data.php",
      method: "POST",
      success: function (data) {
        
      },
    });
  });
});

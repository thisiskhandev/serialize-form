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
      M.toast({
        html:
          "Hi&nbsp;<strong> " +
          formData[0].value +
          " </strong>&nbsp;Your data added!",
        classes: "green darken-1",
      });
      $("#response").html($("#serializeForm").serialize());
      $("#serializeForm").trigger("reset");
      return true; // allow form submission if all fields are filled!
    }
  });
});

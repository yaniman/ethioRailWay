$(document).ready(function() {
  var destination, departure, date, seat_no, seatclass;
  var fullname, email, phoneno, age, citizenship, id;
  $(document).on("click", ".route", function() {
    destination = document.forms["route"]["destination"].values;
    departure = document.forms["route"]["departure"].values;
    date = document.forms["route"]["date"].values;
    alert(destination + " " + " " + document + " " + " " + date);
  });
  $(document).on("click", ".select_seat", function() {});
  $(document).on("click", ".route", function() {});
});

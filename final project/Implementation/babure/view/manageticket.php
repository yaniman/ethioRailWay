<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Ethio rail way</title>
    <link href="../view/css/bootstrap/bootstrap.min.css" rel="stylesheet" />
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg navbar-light  py-3"
      id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#"
          >Ethio-Railway</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto my-2 my-lg-0">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="homePage.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="manageticket.php"
                >Manage ticket</a >
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="reserveticket.html"
                >Reserve ticket</a >
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead cont" id="cont">
      <div class="container h-100" id="childcont">
    
        <form class="form-control" name="ticket">
          <input type="text" class="form-control" name="ticketnumber" placeholder="Ticket Number">
          <input type="text" class="form-control" name="phone" placeholder="Phone Number(Optional)">
          <input type="text" class="form-control" name="date" placeholder="Date(Optional)">
          <input type="button" class="btn btn-success searchticket" id="searchticket" value="search">
        </form>
      </div>
      </div>
      </div>
    </header>
     <div class="container-fluid" id="displayticket">
      <div class="container" id="contain">
        <div class="jumbotron" style="padding: 2rem 1rem;
          margin-bottom: 2rem;
          background-color: #e9ecef;
          border-radius: .20rem;
          border-radius: 25px ;">
          <h1 id="fullname">Full Name</h1>
      
          <div class="container">
            <!-- Control the column width, and how they should appear on different devices -->
            <div class="row" id>
              <h4><span class="badge badge-secondary" id="status">Status</span></h4>
      
      
            </div>
            <br>
            <div class="row">
              <div class="col-sm-6" style="background-color:#f6f4e6;" id="traveldate">Date</div>
              <div class="col-sm-6" style="background-color:#ede59a;" id="phonenumber">Phone Number</div>
            </div>
            <br>
      
            <div class="row">
              <div class="col-sm-6" style="background-color:#d3ebd7;" id="ticketnumber">Ticket Number</div>
              <div class="col-sm-6" style="background-color:#c5e0ca;" id="seatnumber">Seat Number</div>
            </div>
            <br>
      
            
            <div class="row">
              <div class="col-sm-6" style="background-color:#f6f4e6;" id="departurecity">Departure City</div>
              <div class="col-sm-6" style="background-color:#ede59a;" id="destinationcity">Destination City</div>
            </div>
            <br>
             <div class="row">
              <div class="col-sm-6" style="background-color:#d3ebd7;" id="departuretime">Departure Time</div>
              <div class="col-sm-6" style="background-color:#c5e0ca;" id="arrivaltime">Arrival Time</div>
            </div>
          </div>
        </div>
      </div>    
      <div class="container mx-auto" style="width: 500px" id="buttonholder">
        <div class="btn-groups" id="buttons">
      
          <input type="button" class="btn btn-danger cancel" id="cancelticket"value="Cancel Ticket">
          <input type="button" class="btn btn-primary change" id="changeticket" value="Change Ticket">
          <input type="button" class="btn btn-success pay" id="payforbookedticket" value="Pay For Booked Ticket">
        </div>
     </div>
    <footer class="bg-light py-5">
      <div class="container">
        <div class="small text-center text-muted">
          Copyright &copy; 2019 - Ethiopia Mekelle
        </div>
      </div>
    </footer>
  </body>
</html>
<script src="js/bootstrap.min.js"></script>
<script src="jquery/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript">
  $(document).ready(function() {
 
      let searchcontainer = document.getElementById("childcont");
    let headercontainer = document.getElementById("cont");
    let displayer=document.getElementById("displayticket");
    let ticketholder=document.getElementById("contain");
    let buttonholder=document.getElementById("buttonholder");
    let buttons=document.getElementById("buttons");
    let paybooked=document.getElementById("payforbookedticket");
    //displayer.removeChild(ticketholder);
    //buttonholder.removeChild(buttons);
    var ticketno="",phone="",date="",status,returnam;
    $(document).on("click", ".searchticket", function() {

      ticketno=document.forms["ticket"]["ticketnumber"].value;
       phone = document.forms["ticket"]["phone"].value;
        date = document.forms["ticket"]["date"].value;
        if(ticketno!=""||(phone!="" && date!=""))
        {
        //alert(displayer.style.visibility);
       // displayer.style.visibility='visible';
        $.ajax({
        url: "../model/viewticketinfo.php",
        method: "POST",
        data: { ticketno:ticketno,phone:phone, date:date},
        dataType: "json",
        success: function (data) {
          //displayer.appendChild(ticketholder);
         // buttonholder.appendChild(buttons);
        headercontainer.removeChild(searchcontainer);
        $('#traveldate').text(data.travel_date);
        $('#seatclass').text(data.seat_class);
        $('#seatnumber').text("seat " +data.seat_number);
        $('#status').text(data.status);
        ticketno=data.ticket_number;
        status=data.status;
        $('#ticketnumber').text(data.ticket_number);
        $('#departurecity').text(data.departure_city);
        $('#destinationcity').text(data.destination_city);
        $('#departuretime').text(data.departure_time);
        $('#arrivaltime').text(data.arrival_time);
        $('#fullname').text(data.full_name);
       $('#phonenumber').text(data.phone_number);
      //  if(data_status=="booked")
      //  {

      //  }
      //  else{
      //    paybooked.style("disable");
      //  }
        }
        })
      }
      else
      {
        alert("Transaction number or phone and date required");
      }
    });
    $(document).on('click','.cancel',function()
    {
      if(status!="active")
      {
      alert("The ticket is not paid");

      }
      else
      {
      if(confirm("Do you want to cancel this ticket"))
      {
         $.ajax({
          url: "../model/cancelticket.php",
          method: "POST",
          data: { ticketno: ticketno },
          dataType: "json",
          success: function (data) {
            var newamount=parseFloat(data.amount);
            newamount=newamount-(newamount*0.05);
            alert("The refund amount is "+newamount);
             //$('[href="homepage.php"]').show();
           // ticketholder.removeChild(displayer);
           // headercontainer.appendChild(searchcontainer);
          }
          })
      }
      else
      {

      }
      }
    })


    $(document).on('click', '.change', function () {
      if (status != "active") {
        alert("The ticket is not paid");

      }
      else {
      if (confirm("Do you want to cancel this ticket")) {
        $.ajax({
          url: "../model/cancelticket.php",
          method: "POST",
          data: { ticketno: ticketno },
          dataType: "json",
          success: function (data) {
            alert("The refund amount is" + data.amount);
            returnam=data.amount;
            //$('[href="homepage.php"]').show();
            // ticketholder.removeChild(displayer);
            // headercontainer.appendChild(searchcontainer);
          }
        })
      }
      else {

      }
    }
    })
  


    $(document).on('click', '.pay', function () {
      if (status == "active") {
        alert("The ticket is paid");

      }
      else if(status=="canceled")
      {
        alert("The ticket is canceled"); 
      } else
       if (status == "expired") {
        alert("The ticket has expired");
      }
      else {
        $.ajax({
          url: "../model/paybookedticket.php",
          method: "POST",
          data: { ticketno: ticketno },
          dataType: "json",
          success: function (data) {
           if(data.message)
           {
            alert("payment successfull");
           }
           else
           {
             alert("Payment failed");
           }
            //$('[href="homepage.php"]').show();
            // ticketholder.removeChild(displayer);
            // headercontainer.appendChild(searchcontainer);
          }
        })
      }
    })

  });
</script>

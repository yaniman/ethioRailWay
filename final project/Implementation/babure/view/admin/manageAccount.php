
<!DOCTYPE >
<html>
  <head>
    <title>
      Admin home
    </title>
    <link
      rel="stylesheet"
      href="../css/bootstrap/bootstrap.min.css"
      type="text/css"
    />
   
        <link rel="stylesheet" type="text/css" href="../datatables/DataTables-1.10.20/css/dataTables.bootstrap.min.css"/>
<!-- <link rel="stylesheet" type="text/css" href="../datatables/datatables.min.css"/> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <script src="../datatables//jQuery-3.3.1/jquery-3.3.1.js"></script> -->
    <script src="../datatables/jQuery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="../datatables/DataTables-1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- <script src="../jquery/jquery.dataTables.min.js"></script> -->
        <!-- <script src="../datatables/DataTables-1.10.20/js/dataTables.bootstrap.min.js"></script> -->
<script src="../datatables/datatables.min.js"></script>
    
  </head>

  <body>
    <nav
      class="navbar navbar-expand-sm bg-light navbar-light justify-content-end"
    >
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link" href="manageAccount.php">Manage account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="displayReport.php">View report</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
        <div align="right">
        <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#staffModal" >Add</button>
        
</div>
        <div class="table-responsive">
      <table id="staff_data" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th width="10%">Id</th>
                <th width="10%">Full name</th>
                <th width="10%">Email</th>
                <th width="10%">phone number</th>
                <th width="10%">Username</th>
                <th width="10%">Privilege</th>
                <th width="10%">Status</th>
                <th width="10%">edit </th>
                <th width="10%">deactivate</th>
            </tr>
        </thead>
      </table>
    </div>
    </div>
    

    <div class="card-footer">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab repellat
        atque a, reiciendis officia ea accusantium dolorem nulla alias fugit
        voluptatem rerum expedita amet sequi minima! Nobis voluptatum quibusdam
        dolorem?
      </p>
</div>
  </div>
</div>

  </body>
</html>
<script type="text/javascript" language="javascript">
$(document).ready(function()
{
 var dataTable=$('#staff_data').DataTable(
     {
        "processing":true,
        "serverSide":true,
        "order":[],
        "ajax":
        {
            url:"../../model/manageFetch.php",
            method:"POST"
        },
        "columnDefs":[
            {
                "target":[7,8],
                "orderable":false
            },
        ],
        
     });
    //  $(document).on('submit','#staff_form',function(event)
    // {
    //     $('#staff_form')[0].reset();
    //     $('#staffModal').modal('hide');
    //     dataTable.ajax.reload();
    // });
    $(document).on('click','.deactivate',function()
    { 
      if(confirm("Do you want to deactivate this account"))
      {
        var user_id= $(this).attr.("id");
      $,ajax({
        url:"deactivate.php",
        method:"POST",
        data:{user_id:user_id},
        dataType:"json",
        success:function(data)
        {
          alert("account deactivated")
        }
      })
      }
      else{
        dataTable.ajax.reload();
      }
      
    });
});
</script> 
<div id="staffModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <form method="POST" id="staff_form" action="../../model/createaccount.php">
            <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Add staff</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    
                </div>
            <div class="modal-body">
               <input
          type="text"
          placeholder="First Name"
          class="form-control"
          name="firstname"
        />
        <input
          type="text"
          placeholder="Last Name"
          class="form-control"
          name="lastname"
        />
        <input
          type="text"
          placeholder="Email"
          class="form-control"
          name="email"
        />
        <input
          type="text"
          placeholder="Phone Number"
          class="form-control"
          name="phone"
        />
        <input
          type="text"
          placeholder="Privilage"
          class="form-control"
          name="priv"
        /> 
            </div> 
               <div class="modal-footer">
                <input type="submit" id="action" class="btn btn-success" value="Add"/>
                </div>
            </div>

        </form>
    </div>
</div>
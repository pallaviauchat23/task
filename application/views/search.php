<!DOCTYPE html>
<html>
<head>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.btn-danger {
    color: #fff;
    background-color: #dc3545;
    border-color: #dc3545;
}
.btn-success {
    color: #fff;
    background-color: #28a745;
    border-color: #28a745;
}
.btn-warning {
    color: #212529;
    background-color: #ffc107;
    border-color: #ffc107;
    float: right;
   padding: 11px; 
    margin: 9px;
}

.pagination {
  display: inline-block;
}
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
  border: 1px solid #ddd;
}
.pagination a.active {
  background-color: #4b00ff;
  color: white;
  border: 1px solid #4b00ff;
}
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>

<h1 style="text-align: center;">School Lists</h1>

<a href="<?php echo base_url(); ?>logout" class="btn btn-warning ">Logout</a>
<a href="<?php echo base_url(); ?>create" class="btn btn-success " style="float: right;
    padding: 11px;  margin: 9px;">Add School</a>
    <a href="<?php echo base_url(); ?>school-list" class="btn btn-warning ">All Records</a>

    <form id="form" method="post" action="<?php echo base_url('serched');?>"> 
  <input type="search" id="query" name="q" placeholder="Search..." >
  <button type="submit">Search</button>
</form>

<br>
<table id="customers">
  <tr>
    <th>Sr. No</th>
    <th>Name</th>
    <th>Location</th>
    <th>Action</th>
     
  </tr>
     <tbody>

                  <?php $sr=1;foreach($search as $record){?>
                  <tr>
                   <td><?=$record->id;?></td>
                   <td><?=$record->name;?></td>
                   <td><?=$record->location;?></td>
                   
                   
                    <td style="width: 21%;"><a href="<?php echo base_url('school_edit?id='.$record->id);?>" class="btn btn-success">
                          <i class="fas fa-edit"></i> Edit
                        </a>
                        
                        <button class="btn btn-danger" data-toggle="modal" data-target="#modal<?=$record->id?>"><i class="fas fa-trash-alt"></i>Delete</button>
                     
                    </td>
                    
                  </tr>

                  <div class="modal" id="modal<?=$record->id?>" tabindex="-1" role="dialog" aria-labelledby="modallabel1" aria-hidden= "true">
      <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h3>Are you sure?</h3>
                        <h4>You won't be able to revert this!
                                                </h4> 
                                            </div>
                      <form method="post" action="<?php echo base_url('school_delete?id='.$record->id);?>">
                        
                        <div class="modal-footer">
                          <button type="button" class="btn btn-danger waves-effect waves-light" data-dismiss="modal">No, Cancle</button>
                          <button type="submit" class="btn waves-effect waves-light btn-success">Yes, Delete it</button>
                      </form>
                      </div>
                    </div>
</div>
                  
                 <?php $sr++; }?>
                  </tbody>

                  
                  
 
</table>
<script>
     $(document).ready(function(){
 function myFunction() {
    alert("dg");
   var customers= document.getElementById("customers");
    //customers(hide);
  }
});
    </script>
</body>
</html>
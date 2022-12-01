<!DOCTYPE html>
<html>
<head>
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
    width: 165px;
    font-size: 23px;
}
</style>
</head>
<body>

<h1 style="text-align: center;"> <b>" <?php echo $_GET['role']; ?>" </b> Member Table</h1>

<a href="<?php echo base_url(); ?>register/logout" class="btn btn-warning ">Logout</a>

<table id="customers">
  <tr>
    <th>Sr. No</th>
    <th>Name</th>
    <th>Email Id</th>
    <th>User Name</th>
    <th>Country</th>
    <th>role</th>
    <th>Profile</th>
    <?php if($this->session->userdata('role')=='Admin'){ ?>
    <th>Action</th>
     <?php }?>
  </tr>
     <tbody>

                  <?php $sr=1;foreach($member_record as $record){?>
                  <tr>
                   <td><?=$sr;?></td>
                   <td><?=$record->name;?></td>
                   <td><?=$record->email;?></td>
                   <td><?=$record->username;?></td>
                   <td><?=$record->country;?></td>
                   <td><?=$record->role;?></td>
                   <td ><img style="width: 100px;" src="<?php echo base_url();?>media/member/<?php echo $record->profile;?>" ></td>
                   
                   <?php if($this->session->userdata('role')=='Admin'){ ?>
                    <td style="width: 21%;"><a href="<?php echo base_url('Welcome/member_edit?id='.$record->id);?>" class="btn btn-success">
                          <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="<?php echo base_url('register/member_delete?id='.$record->id);?>" class="btn btn-danger">
                          <i class="fas fa-trash-alt"></i> delete
                        </a>
                    </td>
                    <?php }?>
                  </tr>
                 <?php $sr++; }?>
                  </tbody>
 
</table>

</body>
</html>
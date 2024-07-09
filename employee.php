<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="dashboard.php">Home</a></li>		  
		  <li class="active">Employee</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Manage Employee</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" data-target="#addEmployeeModel"> <i class="glyphicon glyphicon-plus-sign"></i> Add Employee </button>
                    
                   <button class="btn btn-default button1" data-toggle="modal" data-target="#viewEmployeeModel" > <i class="glyphicon glyphicon-plus-sign"></i> View Employee Incentive</button>
                    
                    
				</div> <!-- /div-action -->				
				<?php
error_reporting(E_ERROR | E_PARSE);
require_once "connect.php";
$query = "select * from employee";
$data = mysql_query($query);
?>
				<table class="table" id="manageEmployeeTable">
					<thead>
						<tr>	
                        	<th>Employee Id</th>						
                            <th>Employee Name</th>
							<th>Salary</th>
                            <th>Mobile</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Address</th>
						</tr>
                        <?php while($rec = mysql_fetch_array($data)) { ?>
<tr>	
<td> <?php echo $rec['emp_id']; ?> </td>				
<td> <?php echo $rec['emp_name']; ?> </td>
<td> <?php echo $rec['emp_salary']; ?> </td>
<td> <?php echo $rec['emp_mobile']; ?> </td>
<td> <?php echo $rec['emp_gender']; ?> </td>
<td> <?php echo $rec['emp_age']; ?> </td>
<td> <?php echo $rec['emp_address']; ?> </td>
</tr>
<?php } ?>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<div class="modal fade" id="addEmployeeModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitEmployeeForm" action="php_action/addEmployee.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Employee</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Employee Name: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="empName" placeholder="Employee Name" name="empName" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	    
            <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Salary: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="empSalary" placeholder="Salary" name="empSalary" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	  
            
            <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Mobile: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="empMobile" placeholder="Mobile" name="empMobile" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	       	        
	        <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Gender: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="empGender" name="empGender" required>
				      	<option value="">~~SELECT~~</option>
				      	<option value="Male">Male</option>
				      	<option value="Female">Female</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	   
            <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Age: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="empAge" placeholder="Age" name="empAge" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	
            <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Address: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="empAddress" placeholder="Address" name="empAddress" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	      	        

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->

<div class="modal fade" id="viewEmployeeModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content" style="padding:50px;">
    	
    	<form class="form-horizontal" id="submitEmployeeForm" action="incentive.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i>View Employee Incentive</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="EmployeeID" class="col-sm-3 control-label">Employee ID: </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <input type="text" class="form-control" id="empID" placeholder="Employee ID" name="empID" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	    
            
	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Loading..." autocomplete="off">Submit</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->

<!-- edit brand -->
<div class="modal fade" id="editBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editBrandForm" action="php_action/editBrand.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Edit Employee</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-brand-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-brand-result">
		      	<div class="form-group">
		        	<label for="editBrandName" class="col-sm-3 control-label">Brand Name: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editBrandName" placeholder="Brand Name" name="editBrandName" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	         	        
		        <div class="form-group">
		        	<label for="editBrandStatus" class="col-sm-3 control-label">Status: </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <select class="form-control" id="editBrandStatus" name="editBrandStatus">
					      	<option value="">~~SELECT~~</option>
					      	<option value="1">Available</option>
					      	<option value="2">Not Available</option>
					      </select>
					    </div>
		        </div> <!-- /form-group-->	
		      </div>         	        
		      <!-- /edit brand result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editBrandFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
	        
	        <button type="submit" class="btn btn-success" id="editBrandBtn" data-loading-text="Loading..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Save Changes</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->
<!-- /edit brand -->

<!-- remove brand -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Remove Brand</h4>
      </div>
      <div class="modal-body">
        <p>Do you really want to remove ?</p>
      </div>
      <div class="modal-footer removeBrandFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Close</button>
        <button type="button" class="btn btn-primary" id="removeBrandBtn" data-loading-text="Loading..."> <i class="glyphicon glyphicon-ok-sign"></i> Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /remove brand -->


<?php require_once 'includes/footer.php'; ?>
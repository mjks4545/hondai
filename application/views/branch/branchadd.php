 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              Branch
            <small>
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i></small>
          </h1>
        </section>
     <!-- Main content -->
     <section class="content">
         <div class="row">
             <!-- left column -->
             <div class="col-md-12">
                 <!-- general form elements -->
                 <div class="box box-primary">
                     <div class="box-header with-border">
                         <?php //$this->load->view('include/alert'); ?>
                         <h3 class="box-title">Branch Add </h3>
                         <a href="<?= site_url()?>branch/" class="pull-right"> Back</a>
                     </div><!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" data-toggle="validator" action="<?= site_url()?>branch/branchaddpro/" method="post">
                         <div class="box-body">
                            <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Branch Name</label>
                                     <input type="text" name="name" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Branch Role</label>
                                     <select name="branch_role" class="form-control" name="role" maxlength="50" minlength="3" id="exampleInputEmail1"required>
									  <option>Select Role</option>
									  <option>1</option>
									  <option>2</option>
									  <option>3</option>
									  <option>4</option>
									  <option>5</option>
									 </select>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								

                                
                             </div>
							 <div class="col-md-12">
                                 
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Branch Status</label>
                                     <input type="text" name="status" class="form-control"  minlength="1" maxlength="15" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Branch city</label>
                                     <input type="text" name="city" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

                                
                             </div>
							 <div class="col-md-12">
                                 
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Branch Country</label>
                                     <input type="text" name="country" class="form-control"  minlength="1" maxlength="15" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Branch Street Address</label>
                                     <input type="text" name="street_address" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                
                             </div>
							 <div class="col-md-12">
                                 
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Branch Month</label>
                                     <input type="text" name="month" class="form-control"  minlength="1" maxlength="15" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                  <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Branch Year</label>
                                     <input type="text" name="year" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                
                             </div>
						    </div>
							<!-- /.box-body -->
                         <div class="box-footer">
                             <button type="submit" class="btn btn-primary col-sm-1 pull-right">Insert</button>
                         </div>
                     </form>
                 </div><!-- /.box -->
             </div>
         </div>
     </section>
 </div>
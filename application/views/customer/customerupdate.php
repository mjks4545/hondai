 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              Customer
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
                         <h3 class="box-title">Customer Update </h3>
                         <a href="<?= site_url()?>customer/" class="pull-right"> Back</a>
                     </div><!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" data-toggle="validator" action="<?= site_url()?>customer/customerupdatepro/<?=$result[0]->cu_id;?>/" method="post">
                         <div class="box-body">
                            <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer Name</label>
                                     <input type="text" name="name" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" value="<?=$result[0]->cu_name;?>"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer Number</label>
                                     <input type="text" name="number" class="form-control" pattern="(?=.*\d).{1,15}" minlength="1" maxlength="15" id="exampleInputEmail1" value="<?=$result[0]->cu_number;?>"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

                                
                             </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer Role</label>
                                     <select class="form-control" name="role" maxlength="50" minlength="1" id="exampleInputEmail1" required>
									  <option>Select Role</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									 </select>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer Status</label>
                                     <input type="text" name="status" class="form-control"  minlength="1" maxlength="15" id="exampleInputEmail1" value="<?=$result[0]->cu_status;?>"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

                                
                             </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer city</label>
                                     <input type="text" name="city" class="form-control" maxlength="50" minlength="3" value="<?=$result[0]->cu_city;?>" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer Country</label>
                                     <input type="text" name="country" class="form-control"  minlength="1" maxlength="15" id="exampleInputEmail1" value="<?=$result[0]->cu_country;?>" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

                                
                             </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer Street Address</label>
                                     <input type="text" name="street_address" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" value="<?=$result[0]->cu_street_adress;?>"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer Month</label>
                                     <input type="text" name="month" class="form-control"  minlength="1" maxlength="15" id="exampleInputEmail1" value="<?=$result[0]->cu_month;?>"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

                                
                             </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Customer Year</label>
                                     <input type="text" name="year" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" value="<?=$result[0]->cu_year;?>" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
						      </div>
						    </div>
							<!-- /.box-body -->
                         <div class="box-footer">
                             <button type="submit" name="submit" class="btn btn-primary col-sm-1 pull-right">Update</button>
                         </div>
                     </form>
                 </div><!-- /.box -->
             </div>
         </div>
     </section>
 </div>
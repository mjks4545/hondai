 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              Member
            <small>
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
		    </small>
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
                         <h3 class="box-title">Member Add</h3>
                          <a href="<?= site_url()?>member/" class="pull-right">Back</a>
                     </div><!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" data-toggle="validator" action="<?= site_url()?>member/updatememberpro/<?=$result[0]->m_id;?>" method="post">
                         <div class="box-body">
                            <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Name</label>
                                     <input type="text" name="name" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" value="<?=$result[0]->m_name;?>"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Number</label>
                                     <input type="text" name="number" class="form-control" pattern="(?=.*\d).{1,15}" minlength="1" maxlength="15" id="exampleInputEmail1" value="<?=$result[0]->m_number;?>"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Role</label>
                                     <input type="text" name="role" class="form-control" name="role" maxlength="50" minlength="1" value=" <?=$result[0]->m_role;?>" id="exampleInputEmail1"required>
									 
									 
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Status</label>
                                     <input type="text" name="status" class="form-control" value="<?=$result[0]->m_status;?>" minlength="1" maxlength="15" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">city</label>
                                     <input type="text" name="city" class="form-control" maxlength="50" minlength="3" value="<?=$result[0]->m_city;?>" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Country</label>
                                     <input type="text" name="country" class="form-control"  minlength="1" value="<?=$result[0]->m_country;?>" maxlength="15" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Street Address</label>
                                     <input type="text" name="street_address" class="form-control" maxlength="50" minlength="3" value="<?=$result[0]->m_streetaddress;?>" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Month</label>
                                     <input type="text" name="month" class="form-control" value="<?=$result[0]->m_month;?>" minlength="1" maxlength="50" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Year</label>
                                     <input type="text" name="year" class="form-control" maxlength="100" minlength="1" value="<?=$result[0]->m_year;?>" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								</div>
						    </div>
							<!-- /.box-body -->
                         <div class="box-footer">
                             <button type="submit" class="btn btn-primary col-sm-1 pull-right">Update</button>
                         </div>
                     </form>
                 </div><!-- /.box -->
             </div>
         </div>
     </section>
 </div>
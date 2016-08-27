 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              Cash
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
                         <h3 class="box-title">Cash Add </h3>
                         <a href="<?= site_url()?>cash/" class="pull-right"> Back</a>
                     </div><!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" data-toggle="validator" action="<?= site_url()?>cash/cashaddpro/" method="post">
                         <div class="box-body">
                            <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Cash Amount</label>
                                     <input type="text" name="amount" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								<div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Cash Fee/Charges</label>
                                     <input type="text" name="fee_charges" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                             </div>
							 <div class="col-md-12">
                                 
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Cash Status</label>
                                     <input type="text" name="status" class="form-control" pattern="(?=.*\d).{13,15}" minlength="13" maxlength="15" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">R Number</label>
                                     <input type="text" name="r_no" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

                                
                             </div>
							 <div class="col-md-12">
                                 
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">R Name</label>
                                     <input type="text" name="r_name" class="form-control" pattern="(?=.*\d).{13,15}" minlength="13" maxlength="15" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Cash Code</label>
                                     <input type="text" name="cash_code" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                
                             </div>
							  <div class="col-md-12">
                                 
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">R Cnic</label>
                                     <input type="text" name="r_cnic" class="form-control" pattern="(?=.*\d).{13,15}" minlength="13" maxlength="15" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Cash Notes</label>
                                     <textarea type="text" name="cash_notes" class="form-control" maxlength="200" minlength="3" id="exampleInputEmail1"  required></textarea>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                
                             </div>
							 <div class="col-md-12">
                                 
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Cash Month</label>
                                     <input type="text" name="month" class="form-control" pattern="(?=.*\d).{13,15}" minlength="13" maxlength="15" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                  <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Cash Year</label>
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
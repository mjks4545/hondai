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
                         <h3 class="box-title">Customer Add </h3>
                         <a href="<?= site_url()?>member/" class="pull-right"> Back</a>
                     </div><!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" data-toggle="validator" action="<?= site_url()?>customer/customeraddpro/" method="post">
                         <div class="box-body">
                            <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Sender Name</label>
                                     <input type="text" name="s_name" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" value=""  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Reciever Name</label>
                                     <input type="text" name="r_name" class="form-control"maxlength="15" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

                                
                             </div>
							 <div class="col-md-12">
                                     
                                 <div class="form-group has-feedback col-md-6">
								 <label for="exampleInputEmail1">Send To Branch</label>
                                     <select class="form-control" name="s_branch" maxlength="50" minlength="1" id="exampleInputEmail1" required>
									  <option>Select Branch</option>
                                      <?php 
                                      if(isset($branch)){
                                      foreach ($branch as $value) { ?>
                                         <option value="<?=$value->b_id?>"> <?php echo $value->b_name;?></option>
                                        <?php } } ?>
									 
									 </select>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Receiver Branch</label>

                                     <select type="text" name="r_branch" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required>
                                         <option>Select Branch</option>
                                        <?php 
                                        if(isset($branch)){
                                        foreach ($branch as $value) { ?>
                                         <option value="<?=$value->b_id?>"> <?php echo $value->b_name;?></option>
                                        <?php } } ?>
                                     </select>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
							  </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Sender city</label>
                                     <input type="text" name="s_city" class="form-control" maxlength="50" minlength="3" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Reciever city</label>
                                     <input type="text" name="r_city" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div> 


                                
                             </div>
							 <div class="col-md-12">
                                    <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Sender Country</label>
                                     <input type="text" name="s_country" class="form-control"  minlength="1" maxlength="15" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Reciever Country</label>
                                     <input type="text" name="r_country" class="form-control"  minlength="1" maxlength="15" id="exampleInputEmail1" required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>

                                
                             </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Amount</label>
                                     <input type="text" name="amount" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Commission</label>
                                     <input type="text" name="commission" class="form-control"  minlength="1" maxlength="15" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								
                             </div>
							 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Sender Street Address</label>
                                     <input type="text" name="s_streetaddress" class="form-control" maxlength="50" minlength="3"  value=""  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Reciever Street Address</label>
                                     <input type="text" name="r_streetaddress" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								</div>
								 <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Currency Symbol</label>
                                     <input type="text" name="c_symbol" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 <div class="clearfix"></div>
                            <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6">
								 <label for="exampleInputEmail1">H. No</label>
                                     <input type="text" name="c_h_no" class="form-control" pattern="(?=.*\d).{1,15}" minlength="1" maxlength="15" required/> 
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                    <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Transaction Type</label>

                                     <select type="text" name="c_transaction" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required>
                                         <option selected value="">---Select Transaction Type---</option>
                                         <option  value="1">Credit</option>
                                         <option value="0">Debit</option>
                                     </select>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
							</div>
								 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Rate</label>
                                     <input type="text" name="c_rate" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								</div>
								<div class="col-md-12">
                                <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Number</label>
                                     <input type="text" name="number" class="form-control" pattern="(?=.*\d).{1,15}" minlength="1" maxlength="15" value=""  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 <div class="form-group has-feedback col-md-6">
                                     <label for="exampleInputEmail1">Notes</label>
                                     <textarea  name="c_notes" class="form-control" maxlength="50" minlength="3" id="exampleInputEmail1"></textarea>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
								</div>
						    </div>
							<!-- /.box-body -->
                         <div class="box-footer">
                             <button type="submit" name="submit" class="btn btn-primary col-sm-1 pull-right">Insert</button>
                         </div>
                     </form>
                 </div><!-- /.box -->
             </div>
         </div>
     </section>
 </div>
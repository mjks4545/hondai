 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             BalanceSheet
            <small>
              BalanceSheet View  <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
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
                         <h3 class="box-title"></h3>
                          <a href="<?= site_url()?>balancesheet/" class="pull-right">Back</a>
                          <?php if(isset($msg)){?>
                          <?php echo $msg;?>
                          <?php } ?>
                     </div><!-- /.box-header -->
                     <!-- form start -->
                     <form role="form" data-toggle="validator" action="<?= site_url();?>balancesheet/brecordcheck" method="post">
                         <div class="box-body">
                            <div class="col-sm-12">
                                 <div class="form-group has-feedback col-sm-6 col-sm-offset-3">
                                     <label for="exampleInputEmail1">H.No</label>
                                     <input type="number" name="h_no" class="form-control" min="0" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                <div class="form-group has-feedback col-sm-6 col-sm-offset-3">
                                     <label for="exampleInputEmail1">Amount</label>
                                     <input type="number" name="amount" class="form-control" min="0" id="exampleInputEmail1"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                
                            </div>
                             
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer" >
                             <button type="submit" style="margin-left: 790px;"  class="btn btn-primary col-sm-1">Paid</button>
                         </div>
                     </form>
                 </div><!-- /.box -->
             </div>
         </div>
     </section>
 </div>
<?php

/* licence to hanif jadoon
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


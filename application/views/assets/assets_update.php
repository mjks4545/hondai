 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
              Assets
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
                         <h3 class="box-title">Asset Update </h3>
                         <a href="<?= site_url()?>member/" class="pull-right"> Back</a>
                     </div><!-- /.box-header -->
                     <!-- form start -->
                     <?php foreach ($result as $row) {?>
                     <form role="form" data-toggle="validator" action="<?= site_url()?>assets/assets_updatepro/<?=$row['asset_id']?>" method="post">
                         <div class="box-body">
                         
                            
                        
                            <div class="col-md-12">
                                 <div class="form-group has-feedback col-md-6 col-sm-6 col-xs-6 col-sm-offset-3">
                                     <label for="exampleInputEmail1">Asset Amount</label>
                                     <input type="text" name="asset_amount" class="form-control" maxlength="50" minlength="1" id="exampleInputEmail1" value="<?=$row['asset_amount']?>"  required/>
                                     <span class="glyphicon form-control-feedback" aria-hidden="true" style="margin-right: 20px;"></span>
                                     <span class="help-block with-errors" style="margin-left:10px; "></span>
                                 </div>
                                 </div>
				            </div>
                            <?php } ?>
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
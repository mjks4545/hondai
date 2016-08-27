<style>
    td, th {
        text-align: center;
    }
    .txtpadding{
        margin-left: 5%;
        font-size: 15px;
    }
    h4{
        font-size: 16px;
    }
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <small><a href="<?= site_url()?>customer/">Customer</a>
                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                View Customer
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
                        <h3 class="box-title">Customer Details</h3>

                    </div>
                   
                    <!-- /.box-header -->
                     <?php 
                      $i = 0;
                     foreach($result as $row) { ?>
                    <div class="box-body">
                    <div class="row detail"><h1 style="margin-left:230px;">Customer Details</h1></div>
                    <div class="col-sm-12"><hr></div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                                <h4><label>H.no:</label> <i class="txtpadding"> <?=$row['cash'][$i]->c_code;?></i></h4>
                            </div>
                            <div class="col-sm-5">
                               <h4> <label>Date:</label> <i class="txtpadding"> <?=$row['cash'][$i]->c_dateadded;?></i></h4>  
                            </div>
                        </div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                               <h4> <label>Sender Name:  </label> <i class="txtpadding"> <?=$row['sender'][0]->cu_name;?></i></h4>
                            </div>
                            <div class="col-sm-5">
                                <h4><label>Reciever Name:</label> <i class="txtpadding"> <?=$row['receiver'][0]->cu_name;?></i></h4>
                            </div>
                        </div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                              <h4><label>From Country</label>: <i class="txtpadding"> <?=$row['sender'][0]->cu_country;?></i></h4>
                            </div>
                            <div class="col-sm-5">
                              <h4>  <label>To Country:</label> <i class="txtpadding"> <?=$row['receiver'][0]->cu_country;?></i></h4>
                            </div>
                        </div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                               <h4> <label>Amount:</label>  <i class="txtpadding"> <?=$row['cash'][$i]->c_symbol;?><?=$row['cash'][$i]->c_amount;?></i></h4>
                            </div>
                            <div class="col-sm-5">
                             <h4>   <label>Officer Name:</label> <i class="txtpadding">  <?=$row['member'][0]->m_name;?></i></h4>
                            </div>
                        </div>
                        <div class=" col-sm-10 col-xs-10 col-sm-offset-1">
                            <div class="col-sm-5">
                              <h4><label>Branch:</label> <i class="txtpadding"> <?=$row['branch'][0]->b_name;?></i></h4>
                            </div>
                            <div class="col-sm-5">
                               <h4> <label>Rate:</label> <i class="txtpadding"> <?=$row['cash'][$i]->c_rate;?></i></h4>
                            </div>
                        </div>
                         <div class="col-sm-12 col-xs-12">
                            <div class="col-sm-12">
                               <hr>
                            </div>
                        </div>
                        
                    <div class="col-sm-4 col-sm-offset-4">
                    <?php 
                    if($row['cash'][$i]->c_status==1){
                    ?>
                        <a href="<?=site_url()?>cash/cash_pay/<?=$row['cash'][$i]->c_id;?>/" class="btn btn-primary">Pay Customer</a>
                        <?php }

                         else { ?>
                                 <!---<p>Already paid</p>-->
                                 
                         <?php } ?>
                            
                    </div>
                    <?php } ?>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.box -->
        </div>

    </section>
</div>


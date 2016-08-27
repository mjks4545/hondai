 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
             Reports
            <small>
              Reports View  <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
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
                          <a href="<?= site_url()?>member/" class="pull-right">Back</a>
                     </div><!-- /.box-header -->
                         <div class="box-body">
                             <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>S.no</th>
                                <th>Sender Branch</th>
                                <th>Receiver Branch</th>
                                <th>Amount</th>
                                <th>Transaction</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                <?php 
                                $s=1;
                                $counter=0;
                                
                                for($counter;$counter<count($result);$counter++)
                                {
                                ?>
                                <tr>
                                    <td><?php echo $s; ?></td>
                                    <td><?php
                                    echo $result['sendandreceiver']['sender'][$counter][0]['b_name'];
                                    ?></td>
                                    <td><?php echo $result['sendandreceiver']['receiver'][$counter][0]['b_name'];?></td>
                                    <td><?php echo $result['result'][$counter]['c_amount'];?></td>
                                    <td><?php $transaction = $result['result'][$counter]['c_transaction'];; if($transaction==0){echo "Debit";}  else {
                                              echo "Credit";} ?></td>
                                </tr>
                                <?php $s++; } ?>
                             </tbody>
							 
                        </table>
                            </div>
                            <!-- /.box-body -->
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


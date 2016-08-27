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
                         <h3 class="box-title"></h3>
                          <a href="<?= site_url()?>member/" class="pull-right">Back</a>
                     </div><!-- /.box-header -->
                     <?php 
                          $total_assets = $assets[0]->sum;
                     ?>
                         <div class="box-body">
                             <table id="example1" class="table table-bordered table-striped">
                            <thead> 
                            <tr>
                                <th>S.no</th>
                                <!-- <th>Assets Amount Total</th> -->
                                <th>Credit Amount</th>
                                <th>Debit Amount</th>
                                <th>Total Assets</th>
                            </tr>
                            </thead>
                            <tbody>
                            <!--<?php //if($credit){echo ($credit[0]->sum + $total_assets) ;}?>-->
                             <tr>
                             <td>1</td>
                             <td><?php if($credit){echo $credit[0]->sum;}?></td>
                             <td><?php if($debit){echo $debit[0]->sum;}?></td>
                             <td><?php echo $total_assets?></td>
                            </tr>
                             <tr>
                                 <td></td><td></td><td></td><td></td>
                             </tr>
                             </tbody>

                            <tr>
                                <td>Total:</td>
                                <td><?php echo $total_credit = ($credit[0]->sum + $total_assets); ?></td>
                                <td>
                                     <?php echo $total_all = $total_credit - $debit[0]->sum; ?>   
                                </td>
                                <td><?= $total_all;?></td>
                            </tr>
                             <tr style="height: 50px;">
                                 <td></td>
                                 <td></td>
                                 <td style="line-height: 35px;">Total</td>
                                 <td style="line-height: 35px;"><?= $total_all;?></td>
                             </tr>
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


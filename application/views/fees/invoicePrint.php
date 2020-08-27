<style type="text/css">
	@media print {
		.pagebreak {
			page-break-before: always;
		}
		*{
			
			font-size:8;
			font-family: "Times New Roman", Times, serif;

		}

	}
	@page { size: A4 landscape;margin:15px;
			padding:2px; }
</style>
<?php
$currency_symbol = $global_config['currency_symbol'];
if (count($student_array)) {
	foreach ($student_array as $key => $value) {
		$invoice = $this->fees_model->getInvoiceStatus($value);
		$basic = $this->fees_model->getInvoiceBasic($value);
?>
<header class="clearfix">
		<div class="row"  >
			<div class="col-xs-8" style="border-right:dotted red  1px;">
			<img   style="width:100%;height:150px" src="<?=base_url('uploads/app_image/header.jpg')?>" alt="skylinewebsloutionCoder Img" />

				<!-- <div style="float:left; width:30%" >
					<img   style="width:100px; height:100px"src="<?=base_url('uploads/app_image/printing-logo.png')?>" alt="skylinewebsloutionCoder Img" />
					
				</div>
				<div style="float:right; width:70%; ">
				<h2 class="school_name"><?php //echo $basic['school_name']; 	?> </h2>
					<p style="text-align:center">
					 <?php 
					    // print_r($basic);
						// echo $basic['school_address'] . " ";
						// echo $basic['school_mobileno'] . " ";
						// echo $basic['school_email'] . " ";
						?>
						</p>
                </div> -->
			</div>
			<div class="col-xs-4" style="">
			<img   style="width:100%;height:150px" src="<?=base_url('uploads/app_image/header.jpg')?>" alt="skylinewebsloutionCoder Img" />

		</div>
	</header>		
	<div class="bill-info" >
		<div class="row" >
			<div class="col-xs-6"  >
				<div class="bill-data " style="" >
				<table class="table table-bordered ">
					<tr style="background-color: #357caa5 !important; color: white !important; font-size: 12px !important" class="table-no-side-cell-border table-no-top-cell-border text-center">
					
					  <th style="background-color: #357ca5 !important; color: white !important; !important">
					    Student Name
					  </th>
					  <td style="background-color: #357ca5 !important; color: white !important; !important">
					  <?php 
						echo $basic['first_name'] . ' ' . $basic['last_name'];
						?>
					  </td>
					  <th style="background-color: #357ca5 !important; color: white !important; !important">
					  Class
					  </th>
					  <td style="background-color: #357ca5 !important; color: white !important; !important">
					  <?php 
						echo $basic['class_name'];
						?>
					  </td>
					  <th style="background-color: #357ca5 !important; color: white !important; !important">
					  Roll NO:
					  </th>
					  <td style="background-color: #357ca5 !important; color: white !important; !important">
					  <?php 
						echo $basic['roll'];
						?>
					  </td>
					  </tr>
					  <tr style="background-color: #357caa5 !important; color: white !important; font-size: 12px !important" class="table-no-side-cell-border table-no-top-cell-border text-center">
					
					<th style="background-color: #357ca5 !important; color: white !important; !important">
					  Father Name
					</th>
					<td style="background-color: #357ca5 !important; color: white !important; !important">
					<?php 
					  echo $basic['father_name'];
					  ?>
					</td>
					<th style="background-color: #357ca5 !important; color: white !important; !important">
					Address
					</th>
					<td colspan="3"style="background-color: #357ca5 !important; color: white !important; !important">
					<?php 
					  echo $basic['student_address'];
					  ?>
					</td>
				
					
					
					</tr>
					<tr>
					
					<th style="background-color: #357ca5 !important; color: white !important; !important">
					Invoice No #<?=$invoice['invoice_no']?>
					</th>
					<th colspan="4"  style="background-color: #357ca5 !important; color: white !important; font-size: 15px !important" class="table-no-side-cell-border table-no-top-cell-border text-center">
					Academic year
					<?php
						$get_session = $this->db->get('schoolyear')->result();
						foreach ($get_session as $session) : 
						?>

						<?php
						if(get_session_id() == $session->id ){
							
							echo $session->school_year;

						}
						?> 
                        
						<?php endforeach;?>
					</th>
				
					<th style="background-color: #357ca5 !important; color: white !important; !important">
					<?=translate('date')?> :
					<?=_d(date('Y-m-d'))?>
					</th>
					</tr>
					</table>
					
					<h1 style="text-align:center"> Account Office Slip</h1>
				
				</div>
			</div>
			<div class="col-xs-2" style="border-right:dotted red  1px;">
				<div class="bill-data" >
					
				
					<img src="<?php echo get_image_url('student', $basic['photo']); ?>" >
				
				
				</div>
			</div>
			<div class="col-xs-4" style="">
				<div class="bill-data" >
					
				<table class="table table-bordered ">
					<tr style="background-color: #357caa5 !important; color: white !important; font-size: 12px !important" class="table-no-side-cell-border table-no-top-cell-border text-center">
					
					  <th style="background-color: #357ca5 !important; color: white !important; !important">
					    Student Name
					  </th>
					  <td style="background-color: #357ca5 !important; color: white !important; !important">
					  <?php 
						echo $basic['first_name'] . ' ' . $basic['last_name'];
						?>
					  </td>
					
					  <th style="background-color: #357ca5 !important; color: white !important; !important">
					  Roll NO:
					  </th>
					  <td style="background-color: #357ca5 !important; color: white !important; !important">
					  <?php 
						echo $basic['roll'];
						?>
					  </td>
					  </tr>
					  <tr style="background-color: #357caa5 !important; color: white !important; font-size: 12px !important" class="table-no-side-cell-border table-no-top-cell-border text-center">
					
					<th style="background-color: #357ca5 !important; color: white !important; !important">
					  Father Name
					</th>
					<td style="background-color: #357ca5 !important; color: white !important; !important">
					<?php 
					  echo $basic['father_name'];
					  ?>
					</td>
				
				
					<th style="background-color: #357ca5 !important; color: white !important; !important">
					  Class
					  </th>
					  <td style="background-color: #357ca5 !important; color: white !important; !important">
					  <?php 
						echo $basic['class_name'];
						?>
					  </td>
					
					</tr>
					<tr>
					
					<th style="background-color: #357ca5 !important; color: white !important; !important">
					Invoice No #<?=$invoice['invoice_no']?>
					</th>
					<th colspan="4"  style="background-color: #357ca5 !important; color: white !important; font-size: 15px !important" class="table-no-side-cell-border table-no-top-cell-border text-center">
					Academic year
					<?php
						$get_session = $this->db->get('schoolyear')->result();
						foreach ($get_session as $session) : 
						?>

						<?php
						if(get_session_id() == $session->id ){
							
							echo $session->school_year;

						}
						?> 
                        
						<?php endforeach;?>
					</th>
					</table>
				
					<h1 style="text-align:center">Students Slip</h1>
					
				</div>
			</div>
		</div>
		
	</div>

	<div class="row"  style="">
<div class="col-xs-8" style="border-right:dotted red  1px;">
	<div class="table-responsive br-none">
		<table class="table invoice-items table-hover mb-none">
			<thead>
				<tr class="text-dark">
					<th id="cell-id" class="text-weight-semibold">#</th>
					<th id="cell-item" class="text-weight-semibold"><?=translate("fees_type")?></th>
					<th id="cell-id" class="text-weight-semibold"><?=translate("due_date")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("status")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("amount")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("discount")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("fine")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("paid")?></th>
					<th id="cell-total" class="text-center text-weight-semibold"><?=translate("balance")?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$count = 1;
					$total_fine = 0;
					$total_discount = 0;
					$total_paid = 0;
					$total_balance = 0;
					$total_amount = 0;
					$typeData = array('' => translate('select'));
					$allocations = $this->fees_model->getInvoiceDetails($basic['id']);
					foreach ($allocations as $row) {
						$deposit = $this->fees_model->getStudentFeeDeposit($row['allocation_id'], $row['fee_type_id']);
						$type_discount = $deposit['total_discount'];
						$type_fine = $deposit['total_fine'];
						$type_amount = $deposit['total_amount'];
						$balance = $row['amount'] - ($type_amount + $type_discount);
						$total_discount += $type_discount;
						$total_fine += $type_fine;
						$total_paid += $type_amount;
						$total_balance += $balance;
						$total_amount += $row['amount'];
						if ($balance != 0) {
						 	$typeData[$row['allocation_id'] . "|" . $row['fee_type_id']] = $row['name'];
						}
					?>
				<tr>
					<td><?php echo $count++;?></td>
					<td class="text-weight-semibold text-dark"><?=$row['name']?></td>
					<td><?=_d($row['due_date']);?></td>
					<td><?php 
						$status = 0;
						$labelmode = '';
						if($type_amount == 0) {
							$status = translate('unpaid');
							$labelmode = 'label-danger-custom';
						} elseif($balance == 0) {
							$status = translate('total_paid');
							$labelmode = 'label-success-custom';
						} else {
							$status = translate('partly_paid');
							$labelmode = 'label-info-custom';
						}
						echo "<span class='label ".$labelmode." '>".$status."</span>";
					?></td>
					<td><?php echo $currency_symbol . $row['amount'];?></td>
					<td><?php echo $currency_symbol . $type_discount;?></td>
					<td><?php echo $currency_symbol . $type_fine;?></td>
					<td><?php echo $currency_symbol . $type_amount;?></td>
					<td class="text-center"><?php echo $currency_symbol . number_format($balance, 2, '.', '');?></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	</div>
	<div class="col-xs-4" style="">
				<p class="mb-none">
					<span class="text-dark"><?=translate('date')?> : </span>
					<span class="value"><?=_d(date('Y-m-d'))?></span>
				</p>
	<table class="table table-bordered ">
                   <tr>
				   <th style="">
					   Current Month 
					  </th>
					  <td class="text-center"> <strong> <?php	
					   $newdate=strtotime(date('Y-m-d'));
					//echo date("M", $newdate);
					$month = date("F", $newdate);
					echo $month ?></strong></td>
				   </tr>
					<tr style="background-color: #357caa5 !important; color: white !important; font-size: 12px !important" class="table-no-side-cell-border table-no-top-cell-border text-center">
					
					  <th style="">
					    Net Total 
					  </th>
					  <?php
					$count = 1;
					$current_total_fine = 0;
					$current_total_discount = 0;
					$current_total_paid = 0;
					$current_total_balance = 0;
					$current_total_amount = 0;
					$current_typeData = array('' => translate('select'));
					$current_allocations = $this->fees_model->getInvoiceDetails($basic['id']);
					foreach ($current_allocations as $row) {
						$deposit = $this->fees_model->getStudentFeeDeposit($row['allocation_id'], $row['fee_type_id']);
					  
					  $dueDate =$row['due_date'];
					$stamp = strtotime($dueDate);
					$newdate=strtotime(date('Y-m-d'));
					//echo date("M", $newdate);
					$month = date("M", $stamp);
					$newmonth = date("M", $newdate);
					// $os = array('Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Oct','Nov','Dec');
					// $index=array_search($newmonth, $os);
					if( $month ==$newmonth ){
						$type_discount = $deposit['total_discount'];
						$type_fine = $deposit['total_fine'];
						$type_amount = $deposit['total_amount'];
						$balance = $row['amount'] - ($type_amount + $type_discount);
						$current_total_fine += $type_fine;
						$current_total_paid += $type_amount;
						$current_total_balance += $balance;
						$current_total_amount += $row['amount'] ;
						if ($balance != 0) {
						 	$typeData[$row['allocation_id'] . "|" . $row['fee_type_id']] = $row['name'];
						}
						}
					}	
				  ?>
				  <td>
				  <strong> <?php echo $currency_symbol . number_format($balance , 2, '.', ''); ?></strong>
				  
					</td>
					 
					</tr>
					<tr>
					<th style="">
					    Paid
					  </th>
					  <td style="">
					    
					  </td>
					  </tr>
					  <tr>
					  <th style="">
					    Balance
					  </th>
					  <td style="">
					    
					  </td>
					
					</tr>
					</table>


					<p>Adj:_____________
				<span class="text-right pull-right">Account Officer:___________________________</span><p>
	</div>
	</div>

		
	<div class="row"  style="">
			<div class="col-xs-8" style="">
	            <div class="table-responsive br-none">
		            <table class="table invoice-items table-hover mb-none pull-right">
						<thead>
							<tr  class="text-dark">
							   <th><strong><?=translate('grand_total')?> :</strong> <?=$currency_symbol . number_format($total_amount, 2, '.', ''); ?></th>
							
							   <th><strong><?=translate('discount')?> :</strong> <?=$currency_symbol . number_format($total_discount, 2, '.', ''); ?></th>
							   <th><strong><?=translate('fine')?> :</strong> <?=$currency_symbol . number_format($total_fine, 2, '.', ''); ?></th>
							   <th><strong><?=translate('paid')?> :</strong> <?=$currency_symbol . number_format($total_paid, 2, '.', ''); ?></th>
							   <?php if ($total_balance != 0): ?>
					<th>
						<strong><?=translate('balance')?> : </strong> 
						<?php
						echo $currency_symbol . number_format($total_balance, 2, '.', '') . ' </br>' ;
						?>
					</th>
					<?php else: ?>
					<th>
						<strong><?=translate('total_paid')?> : </strong> 
						<?php
						echo $currency_symbol . number_format(($total_paid + $total_fine), 2, '.', '') . ' </br>' ;
						?>
					</th>
					<?php endif; ?>
							</tr>
						</thead>
					</table>
					<p>Adj:_____________
				<span class="text-right pull-right">Account Officer:___________________________</span><p>
		        </div>
	      </div>
     </div>
	<div class="text-right mr-lg hidden-print">
		<button onClick="fn_printElem('invoice_print')" class="btn btn-default ml-sm"><i class="fas fa-print"></i> <?=translate('print')?></button>
	</div>

<div class="pagebreak"> </div> 
<?php } } ?>

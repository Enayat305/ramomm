<style type="text/css">
	@media print {
		*{
			margin:0;
			padding:0;
		}
		.pagebreak {
			page-break-before: always;
		}
	}
	@page { size: A4 landscape; 	margin: 2px;
	padding: 0; }
</style>
<?php
$currency_symbol = $global_config['currency_symbol'];
if (count($student_array)) {
	foreach ($student_array as $key => $value) {
		$invoice = $this->fees_model->getInvoiceStatus($value);
		$basic = $this->fees_model->getInvoiceBasic($value);
?>
<div class="invoice" >
	<header class="clearfix">
		<div class="row"  style="border:red solid 1px">
			<div class="col-xs-8" style="">
				<div style="float:left; width:30%" >
					<img   style="width:100px; height:100px"src="<?=base_url('uploads/app_image/printing-logo.png')?>" alt="skylinewebsloutionCoder Img" />
					
				</div>
				<div style="float:right; width:70%; ">
				<h2 class="school_name"><?php echo $basic['school_name']; 	?> </h2>
					<p style="text-align:center">
					 <?php 
					    // print_r($basic);
						echo $basic['school_address'] . " ";
						echo $basic['school_mobileno'] . " ";
						echo $basic['school_email'] . " ";
						?>
						</p>
                </div>
			</div>
			<div class="col-xs-4" style="border:red solid 1px">
			<address>
					
					<h4 class="school_name"><?php echo $basic['school_name']; 	?> </h4>
					<p style="text-align:center">
                     <?php 
						echo $basic['school_address'] . "<br/>";
						echo $basic['school_mobileno'] . "<br/>";
						echo $basic['school_email'] . "<br/>";
						?>
						</p>
					</address>
                     
                
			</div>
		</div>
	</header>		
	<div class="bill-info">
		<div class="row" style="border:solid red  1px;">
			<div class="col-xs-6" >
				<div class="bill-data " style="border:solid red  1px;" >
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
					</table>
				</div>
			</div>
			<div class="col-xs-2">
				<div class="bill-data" style="border:solid red  1px;">
					
				
					<img src="<?php echo get_image_url('student', $basic['photo']); ?>" >
				
				
				</div>
			</div>
			<div class="col-xs-4">
				<div class="bill-data" style="border:solid red  1px;">
					
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
					</table>
				
				
				</div>
			</div>
		</div>
		
	</div>


	<div class="row"  style="border:red solid 1px">
			<div class="col-xs-8" style="font-size: 8px !important">
				
	
		<table class="table invoice-items table-hover mb-none  table-bordered">
			<thead>
				<tr class="text-dark">
					<th id="cell-id" class="text-weight-semibold">#</th>
					<th id="cell-item" class="text-weight-semibold"><?=translate("Jan")?></th>
					<th id="cell-id" class="text-weight-semibold"><?=translate("Feb")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("Mar")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("Apr")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("May")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("Jun")?></th>
					<th id="cell-price" class="text-weight-semibold"><?=translate("Jul")?></th>
					<th id="cell-total" class="text-weight-semibold"><?=translate("Aug")?></th>
					<th id="cell-total" class="text-weight-semibold"><?=translate("Sep")?></th>
					<th id="cell-total" class="text-weight-semibold"><?=translate("Oct")?></th>
					<th id="cell-total" class="text-weight-semibold"><?=translate("Nov")?></th>
					<th id="cell-total" class="text-weight-semibold"><?=translate("Dec")?></th>
				</tr>
			</thead>
			<tbody>
			<tr>
			<td id="cell-item" class="text-center text-weight-semibold"><?=translate("Current Fee")?></td>

				<?php
					$typeData = array('' => translate('select'));
					$allocations = $this->fees_model->getInvoiceDetails($basic['id']);
					foreach ($allocations as $row) {
					?>
				
									
				<td class="text-center"><?php echo $currency_symbol . $row['amount'];?></td>		
				
				<?php } ?>

				</tr>
				<tr>
				<td id="cell-item" class="text-center text-weight-semibold"><?=translate("paid")?></td>

					<?php
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

										
                       <td class="text-center"><?php 
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
						//echo "<span class='label ".$labelmode." '>".$status."</span>";
						$os = array(1,5,6,7,8,9,10,11,12,13,14,15);

						
							echo $currency_symbol . $type_amount;
					
						
						 
					?></td>		

					<?php } ?>

					</tr>
					<tr>
					<th id="cell-price" class="text-center text-weight-semibold"><?=translate("Discount")?></th>

					<?php
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

										
                      <td class="text-center"><?php echo $currency_symbol . $type_discount;?></td>
	

					<?php } ?>

					</tr>
					<tr>
					<th id="cell-price" class="text-center text-weight-semibold"><?=translate("Fine")?></th>

					<?php
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

										
                      <td  class="text-center"><?php echo $currency_symbol . $total_fine;?></td>
	

					<?php } ?>

					</tr>
					<tr>
					<th id="cell-total" class="text-center text-weight-semibold"><?=translate("balance")?></th>

					<?php
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

										
                       <td class="text-center"><?php echo $currency_symbol . number_format($balance, 2, '.', '');?></td>
	

					<?php } ?>

					</tr>
			</tbody>
		</table>
	
			</div>
			<div class="col-xs-4" style="border:red solid 1px">
			<address>
					
					<h4 class="school_name"><?php echo $basic['school_name']; 	?> </h4>
					<p style="text-align:center">
                     <?php 
						echo $basic['school_address'] . "<br/>";
						echo $basic['school_mobileno'] . "<br/>";
						echo $basic['school_email'] . "<br/>";
						?>
						</p>
					</address>
                     
                
			</div>
		</div>
</div>
	<div class="text-right mr-lg hidden-print">
		<button onClick="fn_printElem('invoice_print')" class="btn btn-default ml-sm"><i class="fas fa-print"></i> <?=translate('print')?></button>
	</div>

<div class="pagebreak"> </div> 
<?php } } ?>

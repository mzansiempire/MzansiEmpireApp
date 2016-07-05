<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Username', (isset($fields['username']['language'])? $fields['username']['language'] : array())) }}</td>
						<td>{{ $row->username}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Bank', (isset($fields['bank']['language'])? $fields['bank']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->bank,'bank','1:me_mybanks:entry_by:bank_name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account No', (isset($fields['account_no']['language'])? $fields['account_no']['language'] : array())) }}</td>
						<td>{{ $row->account_no}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Holder', (isset($fields['account_holder']['language'])? $fields['account_holder']['language'] : array())) }}</td>
						<td>{{ $row->account_holder}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Amount', (isset($fields['amount']['language'])? $fields['amount']['language'] : array())) }}</td>
						<td>{{ $row->amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Scheduled', (isset($fields['scheduled']['language'])? $fields['scheduled']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->scheduled,$fields['scheduled'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Rescheduled', (isset($fields['rescheduled']['language'])? $fields['rescheduled']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->rescheduled,$fields['rescheduled'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Reserved', (isset($fields['reserved']['language'])? $fields['reserved']['language'] : array())) }}</td>
						<td>{{ $row->reserved}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Commission', (isset($fields['commission']['language'])? $fields['commission']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->commission,$fields['commission'],$row ) !!} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ date('dd-mm-yy',strtotime($row->created_at)) }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Reserve', (isset($fields['reserve']['language'])? $fields['reserve']['language'] : array())) }}</td>
						<td>{{ $row->reserve}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ date('dd-mm-yy',strtotime($row->updated_at)) }} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	
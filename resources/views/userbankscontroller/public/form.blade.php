

		 {!! Form::open(array('url'=>'userbankscontroller/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> userbankscontroller</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Bank Name" class=" control-label col-md-4 text-left"> Bank Name </label>
										<div class="col-md-6">
										  <select name='bank_name' rows='5' id='bank_name' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account Holder" class=" control-label col-md-4 text-left"> Account Holder </label>
										<div class="col-md-6">
										  {!! Form::text('account_holder', $row['account_holder'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account No" class=" control-label col-md-4 text-left"> Account No </label>
										<div class="col-md-6">
										  {!! Form::text('account_no', $row['account_no'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account Type" class=" control-label col-md-4 text-left"> Account Type </label>
										<div class="col-md-6">
										  <select name='account_type' rows='5' id='account_type' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Branch Code" class=" control-label col-md-4 text-left"> Branch Code <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('branch_code', $row['branch_code'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true', 'parsley-type'=>'number'   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Branch Name" class=" control-label col-md-4 text-left"> Branch Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('branch_name', $row['branch_name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Active" class=" control-label col-md-4 text-left"> Active <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  
					<?php $active = explode(',',$row['active']);
					$active_opt = array( '0' => 'Inactive' ,  '1' => 'Active' , ); ?>
					<select name='active' rows='5' required  class='select2 '  > 
						<?php 
						foreach($active_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['active'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#bank_name").jCombo("{!! url('userbankscontroller/comboselect?filter=me_banks:bank_name:bank_name') !!}",
		{  selected_value : '{{ $row["bank_name"] }}' });
		
		$("#account_type").jCombo("{!! url('userbankscontroller/comboselect?filter=me_accounttypes:name:name') !!}",
		{  selected_value : '{{ $row["account_type"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 

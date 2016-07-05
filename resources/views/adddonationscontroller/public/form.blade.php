

		 {!! Form::open(array('url'=>'adddonationscontroller/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Add Donations</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Username" class=" control-label col-md-4 text-left"> Username </label>
										<div class="col-md-6">
										  <select name='username' rows='5' id='username' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Bank" class=" control-label col-md-4 text-left"> Bank </label>
										<div class="col-md-6">
										  <select name='bank' rows='5' id='bank' class='select2 '   ></select> 
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
										  <textarea name='account_no' rows='5' id='account_no' class='form-control '  
				           >{{ $row['account_no'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Amount" class=" control-label col-md-4 text-left"> Amount </label>
										<div class="col-md-6">
										  {!! Form::text('amount', $row['amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Commission" class=" control-label col-md-4 text-left"> Commission </label>
										<div class="col-md-6">
										  {!! Form::text('commission', $row['commission'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Reserved" class=" control-label col-md-4 text-left"> Reserved </label>
										<div class="col-md-6">
										  {!! Form::text('reserved', $row['reserved'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Scheduled" class=" control-label col-md-4 text-left"> Scheduled </label>
										<div class="col-md-6">
										  {!! Form::text('scheduled', $row['scheduled'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Rescheduled" class=" control-label col-md-4 text-left"> Rescheduled </label>
										<div class="col-md-6">
										  {!! Form::text('rescheduled', $row['rescheduled'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Reserve" class=" control-label col-md-4 text-left"> Reserve </label>
										<div class="col-md-6">
										  <textarea name='reserve' rows='5' id='reserve' class='form-control '  
				           >{{ $row['reserve'] }}</textarea> 
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
		
		
		$("#username").jCombo("{!! url('adddonationscontroller/comboselect?filter=tb_users:username:username') !!}",
		{  selected_value : '{{ $row["username"] }}' });
		
		$("#bank").jCombo("{!! url('adddonationscontroller/comboselect?filter=me_mybanks:bank_name:bank_name') !!}",
		{  selected_value : '{{ $row["bank"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 

function(){
	
	$(document).ready(function(){
		
		$('body').on('click', 'a', function(e){
			
			var conf = confirm('Are you sure?');
			if( !conf ) {
				return false;
			}
			
		});
		
	})
	
}($)
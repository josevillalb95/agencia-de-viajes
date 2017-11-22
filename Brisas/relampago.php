
	<?php
					
					if ($_SESSION['id']!=''){ ?>
					<script>
						$(".sale-p button").on("click",function(){
						 $("#variable").val($(this).attr('id'));
						 
						 $("#modalfecha").dialog();	
						});
					</script> <?php }
			
				 
			
					?>
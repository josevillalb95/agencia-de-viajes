


					<script>
					
					if ($("#userid").val()!=""){
						$("#botoncompra").off("click").on("click",function(){
						 $("#modalfecha").dialog();	
						});
					} else {
				
				$("#botoncompra").off("click").on("click",function(){
						 alert("debes iniciar sesion");
						 	});
					}
						 	</script>
						
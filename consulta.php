<?php 
			   include_once 'conexao.php';
			   $sql = "select * from cliente";
			   $resultado = mysqli_query($con,$sql);
			   while($row = mysqli_fetch_array($resultado)){
		    ?>
			   
			   <!-- colocar html -->
			      <div class= "cliente">
				  <h4> <?php echo $row["nome"];?> </h5>
				  <h5> telefone: <?php echo $row["telefone"];?> </h5>
                  <h4> <?php echo $row["email"];?> </h5>
				   <?php echo substr ($row["mensagem"],0,680)."..."; ?>
			   
				 </div>
			   
			<?php
			   }
			
			mysqli_close($con);
			
			
			
			
			?>
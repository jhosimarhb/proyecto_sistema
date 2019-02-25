<?php

    $con=@mysqli_connect('localhost', 'root', '', 'preguntas');
    if(!$con){
        die("imposible conectarse: ".mysqli_error($con));
    }
    if (@mysqli_connect_errno()) {
        die("Connect failed: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
	/*Inicia validacion del lado del servidor*/
	 if (empty($_POST['pregunta'])){
			$errors[] = "pregunta";
		} else if (empty($_POST['a'])){
			$errors[] = "a vacío";
		} else if (empty($_POST['b'])){
			$errors[] = "b vacío";
		} else if (empty($_POST['c'])){
			$errors[] = "c vacío";
		}else if (empty($_POST['d'])){
			$error[]= "d vacío";
		}  else if (
			!empty($_POST['pregunta']) &&
			!empty($_POST['a']) &&
			!empty($_POST['b']) &&
			!empty($_POST['c'])&&
			!empty($_POST['d'])
			
		){

		// escaping, additionally removing everything that could be (html/javascript-) code
		
		$pregunta=mysqli_real_escape_string($con,(strip_tags($_POST["pregunta"],ENT_QUOTES)));
		$a=mysqli_real_escape_string($con,(strip_tags($_POST["a"],ENT_QUOTES)));
		$b=mysqli_real_escape_string($con,(strip_tags($_POST["b"],ENT_QUOTES)));
		$c=mysqli_real_escape_string($con,(strip_tags($_POST["c"],ENT_QUOTES)));
		$d=mysqli_real_escape_string($con,(strip_tags($_POST["d"],ENT_QUOTES)));
		
		$sql="INSERT INTO pregunta ( pregunta, a, b, c, d) VALUES ('".$pregunta."','".$a."', '".$b."','".$c."','".$d."')";
		$query_update = mysqli_query($con,$sql);
			if ($query_update){
				$messages[] = "Los datos han sido guardados satisfactoriamente.";
			
			} else{
				$errors []= "Lo siento algo ha salido mal intenta nuevamente.";
			}
		} else {
			$errors []= "Error desconocido.";
		}
		
		if (isset($errors)){
			
			?>
			<div class="alert alert-danger" role="alert">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Error!</strong> 
					<?php
						foreach ($errors as $error) {
								echo $error;
							}
						?>
			</div>
			<?php
			}
			if (isset($messages)){
				
				?>
				<div class="alert alert-success" role="alert">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<strong>¡Bien hecho!</strong>
						<?php
							foreach ($messages as $message) {
									echo $message;
								}
							?>
				</div>
				<?php
			}

?>
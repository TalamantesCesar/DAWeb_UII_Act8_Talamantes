<?php include("header.php"); ?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Contactanos si eres un cliente, facil y rapido para cualquier duda o aclaración</h1>
			</div>

			<div class="articulo">
				<article>
				<form action="/action_page.php" method="get">
  					<label for="fname">Nombres:</label>
  					<input type="text" id="fname" name="fname"><br><br>
  					<label for="lname">Apellidos:</label>
 					<input type="text" id="lname" name="lname"><br><br>
					 <label for="telefono">Numero de telefono:</label>
  					<input type="text" id="telefono" name="telefono"><br><br>
					  <label for="lname">Apellidos:</label>
 					<input type="text" id="lname" name="lname"><br><br>
					 <label for="telefono">Numero de Tarjeta:</label>
					 <input type="text" id="tarjeta" name="tarjeta"><br><br>
					 <input type="submit" value="Submit">
			</form>
						<br>Este sitio es solo para preguntar , no es para haer compras en linea ni ningun otro tipo de cosa. <br>
				</article>
			</div>

	<?php include ("sidebar.php"); ?>
			
		</div>
	</section>
	<?php include ("footer.php"); ?>
</body>
</html>
 <!DOCTYPE html>
<html>
    <head>
        <title>Calculo de Indice Masa Corporal</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="js/jQuery.js"></script>
        <script src="js/Proceso.js"></script> 
		<script src="js/Reporte.js"></script> 
    </head>
    <body>
		<div class="container">

			<div class="row">
			    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
					<form role="form">
						<h2>Calcular IMC</h2>
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
			                        <input type="text" name="txtPeso" id="txtPeso" class="form-control input-lg" placeholder="Peso" tabindex="1">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<div class="form-group">
									<input type="text" name="txtEstatura" id="txtEstatura" class="form-control input-lg" placeholder="Estatura" tabindex="2">
								</div>
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="txtIMC" id="txtIMC" class="form-control input-lg" placeholder="IMC" tabindex="3">
						</div>
						
						<div class="form-group">
							<input type="text" name="txtClasificacion" id="txtClasificacion" class="form-control input-lg" placeholder="Clasificacion" tabindex="4">
						</div>
						
						<hr class="colorgraph">
						<div class="row">
							<div class="col-xs-12 col-md-6"><div class="btn btn-primary btn-block btn-lg" tabindex="7" id="btnCalcular">Calcular</div></div>
							<img src="img/pdf.gif" onClick="generarPDF();">
						</div>
					</form>
				</div>
			</div>
		</div>
    </body>
    <div class="container">
    <div class="row">
	    <table class="table">
	    	<thead>
	    		<tr>
	    			<th>
	    				Peso
	    			</th>
	    			<th>
	    				Estatura
	    			</th>
	    			<th>
	    				IMC
	    			</th>
	    		</tr>	
	    	</thead>
	    	<tbody id="BodyTable">

	    	</tbody>
	    </table>
    </div>
	</div>
</html>
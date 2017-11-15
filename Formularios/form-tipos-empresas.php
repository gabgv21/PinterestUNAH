<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="shortcut icon" href="../img/index.png">
	<TITLE>Pinterest</TITLE>
</head>
<body style="background-color:  rgb(239, 239, 239);">
	<div class="container-fluid col-md-6 col-lg-6 col-xs-12 col-sm-8">
      <!-- Example row of columns -->
      <div class="row ">
        <div>
            <div style="margin-top:100px;">
              <div min-height:520px; 2px 10px rgba(0,0,0,0.45);">
                <div style="min-height:400px;padding:20px 10px;">
                    <h1 style="text-align: center;"><b>Tabla Tipos de Empresas</b></h1><br>
                    <form>
                      <table class="table table-hover">
                        <tr style="padding-top: 50px;">
                          <td><span>ID Tipo Empresa</span></td>
                          <td><input type="text" name=""  id="txt-id-tipo-empresa" class="form-control" disabled="true"></td>
                        </tr>
                        <tr>
                          <td><span>Tipo Empresa</span></td>
                          <td><input type="text" id="txt-tipo-empresa" class="form-control"
                          	disabled="true"></td>
                        </tr>
                        <tr>
                          <td colspan="2" align="right" style="padding-right: 20px;">
                          	<button type="button" id="btn-nuevo" class="btn btn-primary">Nuevo</button>
                          	<button type="button" id="btn-guardar" class="btn btn-primary" style="display: none;">Guardar</button>
                            <button type="button" id="btn-actualizar" class="btn btn-primary" style="display: none;">Actualizar</button>
                          	<input type="reset" name="" class="btn btn-warning" value="Limpiar">
                          </td>
                        </tr>
                      </table>
                    </form> 
                </div>  
              </div>
            </div>
          
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-lg-6 col-md-6 col-sm-12">
      <h1 style="padding-top: 120px; text-align: center;"><b>Tipos de Empresas registradas</b></h1>
    	<div id="contenedor-tipos-empresas" style="align-content: center;" class="col-xs-12 col-lg-6 col-md-6 col-sm-12">
    	</div>
    </div>		

    <div class="col-xs-12 col-lg-12 col-md-12 col-sm-12" style="font-size: 10px; padding-top: 85px; text-align: center;">Esta es una página restringida, si accede sin el permiso necesario se pueden tomar medidas legales</div>

    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/controladorTiposEmpresas.js"></script>
</body>
</html>
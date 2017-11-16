jQuery(document).ready(function($) {

    //Incremental Coutner
    if ($.isFunction($.fn.incrementalCounter))
        $("#incremental-counter").incrementalCounter();
});

function botonAmarillo() {
	$("#btn-amarillo").css("background-color","#ffc908");
}


function botonAzul() {
	$("#btn-azul").css("background-color","#004a90");
}


function botonRojo() {
	$("#btn-rojo").css("background-color","#ff8080");
}


function botonAzulClaro() {
	$("#btn-azul-claro").css("background-color","#0084ff");
}


function botonAzulOscuro() {
	$("#btn-azul-oscuro").css("background-color","#425e63");
}


function botonVerde() {
	$("#btn-verde").css("background-color","#88a5aa");
}

function botonPurpura() {
	$("#btn-purpura").css("background-color","#b46aec");
}


function botonNegro() {
	$("#btn-negro").css("background-color","#555555");
}




function botonGris(a) {
	$(a).css("background-color","#ddd7d3");
}

function clickBotonAzul()
{
  $("#div-condiciones").css("visibility","visible");

  $("#div-privacidad").css("visibility","hidden");
  $("#div-comunidad").css("visibility","hidden");
  $("#div-pines").css("visibility","hidden");
  $("#div-publicidad").css("visibility","hidden");
  $("#div-desarrolladores").css("visibility","hidden");
  $("#div-copyright").css("visibility","hidden");
  $("#div-marca").css("visibility","hidden");
  $("#btn-amarillo").css("background-color","#ddd7d3");

}

function clickBotonAmarillo()
{
  $("#div-condiciones").css("visibility","hidden");

  $("#div-privacidad").css("visibility","visible");
  $("#div-comunidad").css("visibility","hidden");
  $("#div-pines").css("visibility","hidden");
  $("#div-publicidad").css("visibility","hidden");
  $("#div-desarrolladores").css("visibility","hidden");
  $("#div-copyright").css("visibility","hidden");
  $("#div-marca").css("visibility","hidden");

}

function clickBotonRojo()
{
  $("#div-condiciones").css("visibility","hidden");

  $("#div-privacidad").css("visibility","hidden");
  $("#div-comunidad").css("visibility","visible");
  $("#div-pines").css("visibility","hidden");
  $("#div-publicidad").css("visibility","hidden");
  $("#div-desarrolladores").css("visibility","hidden");
  $("#div-copyright").css("visibility","hidden");
  $("#div-marca").css("visibility","hidden");

}

function clickBotonAzulClaro()
{
  $("#div-condiciones").css("visibility","hidden");

  $("#div-privacidad").css("visibility","hidden");
  $("#div-comunidad").css("visibility","hidden");
  $("#div-pines").css("visibility","visible");
  $("#div-publicidad").css("visibility","hidden");
  $("#div-desarrolladores").css("visibility","hidden");
  $("#div-copyright").css("visibility","hidden");
  $("#div-marca").css("visibility","hidden");

}

function clickBotonAzulOscuro()
{
  $("#div-condiciones").css("visibility","hidden");

  $("#div-privacidad").css("visibility","hidden");
  $("#div-comunidad").css("visibility","hidden");
  $("#div-pines").css("visibility","hidden");
  $("#div-publicidad").css("visibility","visible");
  $("#div-desarrolladores").css("visibility","hidden");
  $("#div-copyright").css("visibility","hidden");
  $("#div-marca").css("visibility","hidden");
}

function clickBotonVerde()
{
  $("#div-condiciones").css("visibility","hidden");

  $("#div-privacidad").css("visibility","hidden");
  $("#div-comunidad").css("visibility","hidden");
  $("#div-pines").css("visibility","hidden");
  $("#div-publicidad").css("visibility","hidden");
  $("#div-desarrolladores").css("visibility","visible");
  $("#div-copyright").css("visibility","hidden");
  $("#div-marca").css("visibility","hidden");
}

function clickBotonPurpura()
{
  $("#div-condiciones").css("visibility","hidden");

  $("#div-privacidad").css("visibility","hidden");
  $("#div-comunidad").css("visibility","hidden");
  $("#div-pines").css("visibility","hidden");
  $("#div-publicidad").css("visibility","hidden");
  $("#div-desarrolladores").css("visibility","hidden");
  $("#div-copyright").css("visibility","visible");
  $("#div-marca").css("visibility","hidden");
}

function clickBotonNegro()
{
  $("#div-condiciones").css("visibility","hidden");

  $("#div-privacidad").css("visibility","hidden");
  $("#div-comunidad").css("visibility","hidden");
  $("#div-pines").css("visibility","hidden");
  $("#div-publicidad").css("visibility","hidden");
  $("#div-desarrolladores").css("visibility","hidden");
  $("#div-copyright").css("visibility","hidden");
  $("#div-marca").css("visibility","visible");
}


function guardarRegistro(){
  if($("#txt-correo").val())
   {
      $("#txt-correo").css("background-color", "#eee");
      if ($("#txt-password").val())
      {
        $("#txt-password").css("background-color", "#eee");
        if($("#txt-nombreEmpresa").val()){
             $("#txt-nombreEmpresa").css("background-color", "#eee");
             if($("#slc-tipoEmpresa").val())
             {
                 $("#slc-tipoEmpresa").css("background-color", "#eee"); 
  
                           if($("#txt-correo").val()&&$("#txt-password").val())
                             {
                                  var parametros = "txt-correo="+$("#txt-correo").val()+"&"+"txt-password="+$("#txt-password").val();

                            $.ajax({
                                  url:"ajax/gestion-usuario.php?accion=login",
                                  data: parametros,
                                  method:"POST",
                                  dataType:'json',
                                  success:function(respuesta){
                                   if(respuesta.estatus==1)
                                   {
                                    window.location = "pinterest.php";
                                   }
                                   else
                                     {
                                     console.log("usuario incorrecto");
                                     }
                                  },
                                  error:function(e){
                                    console.log(e);
                                  }

                                 });
                          }else{
                          alert("llene los campos");
                          }

                          
             }

            else{

               $("#slc-tipoEmpresa").css("background-color", "red");

            }

        } 

        else{

            $("#txt-nombreEmpresa").css("background-color", "red");
        }
      }
      else{

         $("#txt-password").css("background-color", "red");
      }
   }
   else{

     $("#txt-correo").css("background-color", "red");
   }
}


/*$("#btn-acceder").click(function(){
   var parametros = "txt-correo="+$("#txt-correo").val()+"&"+"txt-password="+$("#txt-password").val();
   
      $.ajax({
        url:"Datosregistro.php",
        data: parametros,
        method:"POST",
        success:function(respuesta){
         console.log(respuesta);
         window.location = "Datosregistro.php";
        },
        error:function(e){
          console.log(e);
        }

       });
     
});*/

$("#div-btnSesion-2").click(function(){

  
 if($("#txt-nombre-completo").val()&&$("#txt-password").val()&&$("#txt-correo").val()&&$("#txt-fecha").val())
   {
        var parametros = "txt-correo="+$("#txt-correo").val()+"&"+"txt-password="+$("#txt-password").val()+
                   "&txt-nombre-completo="+$("#txt-nombre-completo").val()+"&txt-fecha="+$("#txt-fecha").val()+
                   "&rbt-genero="+$("input[type='radio'][name='rbt-genero']:checked").val();

    $.ajax({
        url:"ajax/gestion-usuario.php?accion=crear-usuario",
        data: parametros,
        method:"POST",
        dataType:'json',
        success:function(respuesta){
          if (respuesta.estatus==1) {
           window.location = "pinterest.php";
         }else{
          alert("hubo un problema");
         }
        },
        error:function(e){
          console.log(e);
        }
  
});
}
else{$("#div-error-2").html("Verifique los datos")
}
});


$("#div-btnSesion").click(function(){
  if(($("#div-telefono-contrasena").val())&&($("#contrasenna").val()))
     { var parametros = "txt-correo="+$("#div-telefono-contrasena").val()+"&"+"txt-password="+$("#contrasenna").val();

       $.ajax({
        url:"ajax/gestion-usuario.php?accion=login",
        data: parametros,
        method:"POST",
        dataType:'json',
        success:function(respuesta){
         if(respuesta.estatus==1)
         {
          window.location = "pinterest.php";
         }
         else
           {
            $("#div-usuario-incorrecto").html("usuario incorrecto");
           }
        },
        error:function(e){
          console.log(e);
        }

       });
      }
      else{
        $("#div-usuario-incorrecto").html("Olvido llenar algun dato");
      }
});



$("#enviar").click(function(){
    if(($("#correo").val())&&($("#password").val()))
     { var parametros = "txt-correo="+$("#correo").val()+"&"+"txt-password="+$("#password").val();

       $.ajax({
        url:"ajax/gestion-usuario.php?accion=login",
        data: parametros,
        method:"POST",
        dataType:'json',
        success:function(respuesta){
         if(respuesta.estatus==1)
         {
          window.location = "pinterest.php";
         }
         else
           {
            $("#div-usuario-incorrecto").html("usuario incorrecto");
           }
        },
        error:function(e){
          console.log(e);
        }

       });
      }
      else{
        $("#div-usuario-incorrecto").html("Olvido llenar algun dato");
      }


});




$(document).ready(function(){
$.ajax({
 url:"ajax/getInfo.php?accion=obtener-elementos-empresa",
        data:"",
        method:"POST",
        success:function(respuesta){

          $("#slc-tipoEmpresa").html(respuesta);
        },
        error:function(e){

           console.log(e);
        }

 });

});
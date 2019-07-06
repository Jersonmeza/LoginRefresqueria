
function ingresar(){

    var Usuario;
    var Clave;
    var Url;

    Usuario = $('#usuario').val();
    Clave = $('#clave').val();
    Url = base_url + "/" + controller + "/ingresar";

    if (Usuario =="" || Clave =="") {
        alert("Por favor llene todos los campos");
    }else{

       $.ajax({
           'type': "POST",
           'url': Url,
           'data': {
                'usuario': Usuario,
                'clave': Clave
            },
            'success': function(data){
                if (data == "Error") {
                    alert("Contraseña o Usuario invalido");
                }else{
                    window.location.href = base_url+"/principal_controller";
                }
                 $('#usuario').val("");
                 $('#clave').val("");
                
                
            }
        });
    
    }
}
    
function salir(){
  var Url;

  Url = base_url + "/principal_controller/cerrarSession";

  $.ajax({
      'type': "POST",
      'url': Url,
      'success': function(){
          window.location.href = base_url;
      }
  });
}
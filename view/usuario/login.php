
<div class="form">

<ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>
          
          <form action="?c=Alumno&a=Guardar" name="formLogIn" id="formLogIn" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                nombre<span class="req">*</span>
              </label>
              <input type="text" name="usuario_nombre" id="usuario_nombre"  autocomplete="off" />
            </div>
        
           
          <div class="field-wrap">
            <label>
              correo<span class="req">*</span>
            </label>
            <input type="text" name="usuario_correo" id="usuario_correo"  />
          </div>

          <div class="field-wrap">
              <label>
                RFC<span class="req">*</span>
              </label>
              <input type="text" name="usuario_rfc" id="usuario_rfc"   autocomplete="off"/>
            </div>
          </div>
          
          <div class="field-wrap">
            <label>
              contraseña<span class="req">*</span>
            </label>
            <input type="password" name="usuario_password"  id="usuario_password"  autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              confimación de contraseña<span class="req">*</span>
            </label>
            <input type="password" name="usuario_passwordConfirm" id="usuario_passwordConfirm"   autocomplete="off"/>
          </div>
          
          <button  class="button button-block"/>Guardar</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Bienvenido!</h1>
          
          <form action="?c=Alumno&a=logIn" name="iniciarForm" id="iniciarForm" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="u_correo" id="u_correo" autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="u_password" id="u_password"   autocomplete="off"/>
          </div>
          
        
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->

<script>
  
  $("#iniciarForm").submit(function(){
    var correo = $("#u_correo").val();
    var password =$("#u_password").val();
    if(correo.length < 1 || correo.trim().length ==0 ){
      alert("Ingrese correo");
      return false;
    }
    if (password.length <1 || password.trim().length ==0) {
      alert("Ingrese su contraseña");
      return false;
    }
  });

  $("#formLogIn").submit(function () {  
    var nombre = $("#usuario_nombre").val();
    var correo = $("#usuario_correo").val();
    var rfc = $("#usuario_rfc").val();
    var password = $("#usuario_password").val();
    var passcordConfirm=$("#usuario_passwordConfirm").val();

    if(nombre.length < 1 || nombre.trim().length ==0 ) {  
        console.log("El nombre es obligatorio");
        alert("El nombre es obligatorio");    
        return false;  
        
    } 
     if(correo.length <1 || correo.trim().length ==0){
      alert("correo es obligatorio");
      return false;
    }
    
    if(rfc.length <1 || rfc.trim().length ==0){
      alert("RFC es requerido.")
      return false;
    }
    if(password.trim().length <1){
      alert("Contraseña es obligatorio");
      return false;
    }

    if(passcordConfirm.length <1 || passcordConfirm.trim().length ==0){
      alert("Se requiere confirmacion de contraseña")
      return false;
    }

    if(password != passcordConfirm ){
      alert("Su confirmacion de contraseña no coincide ")
    }
    return true;  

    


});  
</script>

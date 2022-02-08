<div class="form">
    <div class="tab-content">
        <div id="signup">
            <h1>Algoritmos</h1>

            <div class="well well-sm text-right">
                <nav class="nav">
                    <a class="nav-link active" href="?c=Alumno&a=menu&id=">Usuarios</a>
                    <a class="nav-link" href="#">Configuración de cuenta </a>
                    <a class="nav-link" href="?c=Alumno&a=Algoritmos&id=">Algoritmos</a>

                </nav>
            </div>
            

                <div class="top-row">
                    <div class="field-wrap">
                        <label>
                            palabras<span class="req">*</span>
                        </label>
                        <input type="text" name="txtPalabra" id="txtPalabra" autocomplete="off" />
                    </div>

                </div>


                <button class="button button-block" id="btnAnalizar" name="btnAnalizar" onclick='palabras()' />Analizar</button>

        </div>

        <div id="login">

            </di>

        </div><!-- tab-content -->

    </div> <!-- /form -->
<script>
    /*
    $("#formAlgoritmo").onCli(function(){
        var palabra= $("#txtPAlabra").val();
        console.log(palabra)
    })
    */
    function palabras(){
        var palabra= $("#txtPalabra").val();
        console.log(palabras);
        
    }
</script>
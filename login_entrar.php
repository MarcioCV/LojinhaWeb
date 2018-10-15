<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css">
        <title>Login</title>
        <script>
            $(document).ready(function () {
                $("#btnEntrar").click(function () {
                    var nome_usuario = $("input[name=Usuario]").val();
                    var senha_usuario = $("input[name=Senha]").val();

                    $.ajax({
                        "url": "php/verificaLogin.php",
                        "dataType": "html",
                        "data": {
                            "Usuario": nome_usuario,
                            "Senha": senha_usuario,
                        },
                        "success": function (response) {
                            $("div#retorno").html(response);
                            setTimeout("location.href = 'login_entrar.php'");
                        }
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="align-center">
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem; height: 300px; width: 300px; align-items: center; margin: 0; padding: 0; position: absolute; background-color: rgb(66, 66, 66) !important;">
                <form class="align-column">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Login</label>
                        <input type="login" name="Usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted"></small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" class="form-control" name="Senha" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    
                    <button type="button" class="btn btn-primary" id="btnEntrar"">Entrar</button>
                    <div id="retorno">

                    </div>
                </form>
            </div>
        </div>
        <div id="particles-js"></div>
        
        <script src="particles.js"></script>
        <script type="text/javascript" src="app.js"></script> 
    </body>
</html>
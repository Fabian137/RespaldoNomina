<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<form action="validate.php" method="post" style="margin: 0 35%;" autocomplete="off">
    <div style="height: 60vh; flex-direction: column;" class="center">
        <div class="mb-3" style="margin: 5% 0;">
            <label class="form-label">Usuario</label>
            <div class="input-group">
                <div class="input-group-text"><img class="login-img" src="assets/img/user.svg" alt="user icon"></div>
                <input type="text" class="form-control" placeholder="Ingrese su usuario" name="usuario">
            </div>
        </div>

       <div class="mb-3" style="margin: 5% 0;">
            <label class="form-label">Contraseña</label>
            <div class="input-group">
                <div class="input-group-text"><img class="login-img" src="assets/img/lock.svg" alt="lock icon"></div>
                <input type="password" class="form-control" placeholder="Ingrese su contraseña" name="contraseña">
            </div>
       </div>

   <div class="col-12" style="margin-top:2rem; display: flex;justify-content: center;">
    <input class="btn btn-primary" style="width:10rem;" name="send" type="submit" value="Enviar"><br>
  </div>
   
   </form> 

        
</body>
</html>
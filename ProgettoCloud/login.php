<!DOCTYPE html>
<html>
  <head>
  <title></title>
  <style>
  </style>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
  crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css">
  </head>
    <body>

      <section>

          <div class="row">
            <div class="login-page col-md-6">
              <div class="form">
                <h1>Accedi</h1>
                 <form class="login-form" action="index.php" method="POST">
                  <input type="text" name="email" placeholder="username"/>
                  <input type="password" name="password" placeholder="password"/>
                  <input class="button" type="submit" name="invio">
                </form>
              </div>
            </div>
          <div class="login-page col-md-6">
            <div class="form">
              <h1>Registrati</h1>
               <form class="login-form" action="registrazione.php" method="POST">
                <input type="text" name="email" placeholder="username"/>
                <input type="password" name="password" placeholder="password"/>
                <input class="button" type="submit" name="invio">
              </form>
            </div>
          </div>
        </div>



      </section>



    </body>
</html>

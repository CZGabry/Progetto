<?php $this->layout('layout')?>

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
</div>

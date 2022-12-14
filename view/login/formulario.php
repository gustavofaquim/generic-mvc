<?php include __DIR__ . '/../template/header.php'; ?>

<main>
  <div class="container-fluid">
        
    <div class=" container-login">
      <h4>Entre ou cadastre-se, é gratis &#128521;</h4>
      <form action="/realiza-login" class='form-login' method="post">
        <div class="form-group">
          <label for="email">Endereço de email ou Usuário</label>
          <input type="text" class="form-control" id="email" name='email' aria-describedby="emailHelp" placeholder="E-mail ou Usuário">
          <!--<small id="emailHelp" class="form-text text-muted">Nunca vamos compartilhar seus dados com ninguém.</small>-->
        </div>
        <div class="form-group">
          <label for="senha">Senha</label>
          <input type="password" class="form-control" id="senha" name='senha' placeholder="Senha">
        </div>
        
        <div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" data-width="370" data-height="50" data-longtitle="true" data-lang="pt-BR"></div>

        <button type="submit" class="btn btn-primary btn-sm btn-login">Entrar</button> <br>
        <a class="btn btn-cadastrar btn-cadastro btn-light" href="/novo-usuario">Cadastre-se</a>
      </form>
    </div>
  
        
      
  </div>
</main>

<?php include __DIR__ . '/../template/footer.php'; ?>
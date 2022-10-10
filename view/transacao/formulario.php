<?php include __DIR__ . '/../template/header.php'; ?>

<main>
  <div class="container-fluid">
    <div class='formTransacao'>


        <form action="/cadastrar-transacao<?= isset($usuario) ? '?id= ' . $usuario->__get('id') : ''; ?>" class='' method="post">
                
            <div class="form-group div-valor">
                <label for="valor">R$</label>
                <input type="text" class="form-control" id="valor" name='valor' placeholder="0" value="<?= isset($usuario) ? $usuario->__get('primeiroNome'): ''; ?>">
            </div>
           
            
            <div class="form-group div-conta">
                <label for="conta">Conta</label>
                    <select class="form-control" id="conta" name='conta'>
                    <option value='1'>Satander</option>
                    <option value='1'>Nubank</option>
                    <option value='1'>Caixa</option>
                    <option value='1'>Banco do Brasil</option>
                </select>
            </div>

            <br>

            <div class="form-group div-conta">
                <label for="categoria">Categoria</label>
                    <select class="form-control" id="categoria" name="categoria">
                    <option value='1'>Transporte</option>
                    <option value='1'>Lanche</option>
                    <option value='1'>Almoço</option>
                    <option value='1'>Lazer</option>
                </select>
            </div>
            <br>

            <div class="form-group div-coment">
                <label for="data">Data da Transação</label>
                <input type="date" class="form-control" id="data" name='data' value="<?= isset($usuario) ? $usuario->__get('primeiroNome'): ''; ?>">
            </div>

            <br>
            <div class="form-group div-coment">
                <label for="coment">Comentário</label>
                <input type="text" class="form-control" id="coment" name='coment' placeholder="Comentário" value="<?= isset($usuario) ? $usuario->__get('primeiroNome'): ''; ?>">
            </div>
           
            
            <button type="submit" class="btn btn-warning btn-add">Adicionar</button>
        </form>


    </div>
           
  </div>
</main>

<?php include __DIR__ . '/../template/footer.php'; ?>
<link rel="stylesheet" href="css/app.css">

<form action="/register" method="post" enctype="multipart/form-data">
    @csrf   

    <div class="container">
        <form action="/funcionario/cadastrar" method="POST">
          @csrf
            <div class="form-group">
              <label>Nome funcionário</label>
              <input type="text" class="form-control" name="nome">
            </div>
      
            <div class="form-group">
                <label>Nome funcionário</label>
                    <select class="form-control" name="setor">
                        <option value="adm">Administração</option>
                        <option value="rh">Recursos Humanos</option>
                    </select>
            </div>
            <div class="form-group">
                <input type="text" name="arquivo">
            </div>
            <div class="form-group"> 
                <input type="file" name="file"><br>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
      </div>
        
    </div>
</form>
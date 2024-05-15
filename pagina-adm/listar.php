<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link href="css/boot.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/formulario.css" />

    <title>Projeto HTML</title>
  </head>
  <body>
    <!-- INICIO CABEÇALHO -->
    <header class="menu-principal">
      <main>
          <div class="header-1">
              <div class="logo">
                  <img src="./IMG/logo.jpg" width="90px" height="70px" />
              </div>
              <div class="redes-sociais">
                  <ul>
                      <li>
                          <a href=""><img src="./IMG/rss.png" /></a>
                      </li>
                      <li>
                          <a href=""><img src="./IMG/face.png" /></a>
                      </li>
                      <li>
                          <a href=""><img src="./IMG/tw.png" /></a>
                      </li>
                      <li>
                          <a href=""><img src="./IMG/linkedin.png" /></a>
                      </li>
                  </ul>
              </div>
          </div>
      </main>
  </header>
  <main class="col-100 menu-urls">
      <div class="header-2">
          <div class="menu">
              <ul>
                  <li><a href="">LANÇAMENTOS</a></li>
                  <li><a href="">WHEY PROTEIN</a></li>
                  <li><a href="">CREATINA </a></li>
                  <li><a href=""> PRÉ-TREINO</a></li>
                  <li><a href=""> ACESSORIOS</a></li>
                  <li><a href="view/login.php">LOGIN </a></li>
              </ul>
          </div>
          <div class="busca">
              <input placeholder="Pesquise algo" type="text" />
          </div>
      </div>
  </main>
    <!-- FIM CABEÇALHO -->


    <h1>Alterar Usuário/Funcionário</h1>
    <div class="container">
      <form action="" method="get">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input
            type="text"
            name="nome"
            placeholder="Nome do usuário"
            required
          />
        </div>

        <div class="form-group">
          <label for="arquivo">Foto Usuário:</label>
          <input
            type="file"
            name="arquivo"
            placeholder="Selecione foto"
            required
          />
        </div>

        <div class="form-group">
          <label for="dtNasc">Data Nascimento:</label>
          <input type="date" name="dtNasc" required />
        </div>

        <div class="form-group">
          <label for="cpf">CPF:</label>
          <input
            type="text"
            name="cpf"
            placeholder="Informe seu CPF"
            required
          />
        </div>

        <div class="form-group">
          <label for="cnpj">CNPJ:</label>
          <input
            type="text"
            name="cnpj"
            placeholder="Informe seu CNPJ"
            required
          />
        </div>

        <div class="form-group">
          <label for="rg">RG:</label>
          <input type="text" name="rg" placeholder="Informe seu RG" required />
        </div>

        <div class="form-group">
          <label for="endereco">Endereço:</label>
          <input
            type="text"
            name="endereco"
            placeholder="Informe seu Endereço"
            required
          />
        </div>

        <div class="form-group">
          <label for="numero">Número de Telefone:</label>
          <input type="text" name="numero" placeholder="(DDD)" required />
        </div>

        <div class="form-group">
          <label for="bairro">Bairro:</label>
          <input type="text" name="Bairro" placeholder="Informe o Bairro" />
        </div>

        <div class="form-group">
          <label for="cidade">Cidade:</label>
          <input type="text" name="cidade" placeholder="Informe a Cidade" />
        </div>

        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" placeholder="Informe o Email" />
        </div>

        <div class="form-group">
          <label for="senha">Senha:</label>
          <input type="password" name="senha" placeholder="Informe a Senha" />
        </div>

        <div class="form-group">
          <label for="situacao">Situação:</label>
          <select name="situacao" id="">
            <option value="">Selecione:</option>
            <option value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
            <option value="Bloqueado">Bloqueado</option>
          </select>
        </div>
        <div class="form-group">
          <label for="situacao">Cargo</label>
          <select name="situacao" id="">
            <option value="">Selecione:</option>
            <option value="Ativo">Usuário</option>
            <option value="Inativo">Funcionário</option>
          </select>
        </div>

        <div>
          <p>
            <br /><br /><br />
            <button type="submit">Salvar</button>
          </p>
        </div>
      </form>
    </div>

    <section class="main_footer">
      <header>
        <h1>Quer saber mais?</h1>
      </header>

      <article class="main_footer_our_pages">
        <header>
          <h2>Nossas Páginas</h2>
        </header>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contato</a></li>
        </ul>
      </article>

      <article class="main_footer_links">
        <header>
          <h2>Links Úteis</h2>
        </header>
        <ul>
          <li><a href="#">Política de Privacidade</a></li>
          <li><a href="#">Aviso Legal</a></li>
          <li><a href="#">Termos de Uso</a></li>
        </ul>
      </article>

      <article class="main_footer_about">
        <header>
          <h2>Sobre o Projeto</h2>
        </header>
        <p>
          Aprenda sobre suplementos conosco e dê sua opinião! 
        </p>
      </article>
    </section>
    <!-- FIM DOBRA RODAPÉ -->
    
  </body>
</html>

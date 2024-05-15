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
    <link rel="stylesheet" href="css/opcao.css" />
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


    <main>
      <div>
        <section class="main_course">
          <header class="main_course_header"></header>
          <div class="ajust">
            <article class="dadosusuario">
              <h2>Cadastrar Dados</h2>
              <header>
                <p>
                  <a href="cadastrar.php">
                    <img
                      src="img/cadastro.png"
                      alt="Cadastro"
                      title="Cadastro"
                      width="400"
                      height="300"
                    />
                  </a>
                </p>
              </header>
            </article>

            <article class="dadosusuario">
              <h2>Alterar Dados</h2>
              <header>
                <p>
                  <a href="listar.php">
                    <img
                      src="img/listar-dados.png"
                      alt="Listar dados"
                      title="Listar dados"
                      width="400"
                      height="300"
                    />
                  </a>
                </p>
              </header>
            </article>
          </div>
        </section>
      </div>
    </main>

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

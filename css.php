<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS - Curso de Programação</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <header>
      <h1>Curso de Programação</h1>
      <nav>
        <ul>
          <li><a href="index.php">Início</a></li>
          <li><a href="login_html.php">HTML</a></li>
          <li><a href="login_css.php">CSS</a></li>
          <!--<li><a href="javascript.php">JavaScript</a></li>-->
          <li><a href="login_site.php">Meu Site</a></li>
          <li><a href="sobre_nos.php">Sobre Nós</a></li>
          <!--<li><a href="#">Contato</a></li>-->
        </ul>
      </nav>
    </header>
    <main>
      <section>
      <!--<div class="sidebar">
    <ul>
      <li><a href="#titulo1">O que é CSS?</a></li>
      <li><a href="#titulo2">Como usar o CSS?</a></li>
      <li><a href="#titulo3">Etapas para usar o CSS</a></li>
    </ul>
  </div>-->
      <section class="banner">
        <h2>CSS</h2>
        <p>Nesta págiga você aprenderá o que é CSS, motivo de se usar e como usar-lo em seu site</p>
        <p><img src="https://images.unsplash.com/photo-1505685296765-3a2736de412f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y3NzfGVufDB8fDB8fHww&w=1000&q=80"></p>
      </section>
      <center><h2 id=titulo1>O que é CSS?</h2></center>
        <p>CSS (Cascading Style Sheets) é uma linguagem de estilo utilizada para definir a aparência e o layout de elementos em um documento HTML. Com o CSS, é possível controlar cores, fontes, margens, espaçamentos, posicionamento e muitos outros aspectos visuais de um site.</p>
        <p>O CSS é uma linguagem de estilo que trabalha em conjunto com o HTML para definir a apresentação de um documento web. Ele permite separar o conteúdo (HTML) da sua aparência (CSS), o que traz maior flexibilidade e facilita a manutenção e o desenvolvimento de sites.</p>
        <center><h1 id=titulo2>Como usar o CSS?</h1></center>
        <p>Existem três formas de usar o CSS em um documento HTML:<br>
          a) CSS Inline:
          O CSS Inline envolve a definição de estilos diretamente nas tags HTML usando o atributo "style". Por exemplo:<br>
          <img src="imagens/css_1.jpg"><br>
          Embora seja prático para estilos simples e específicos, o CSS Inline pode tornar-se difícil de gerenciar em documentos maiores.</p>
        <p>b) CSS Interno:<br>
          O CSS Interno é definido dentro da seção &lt;style&gt; no cabeçalho do documento HTML. <br>
          Os estilos são escritos entre as tags &lt;style&gt; e &lt;/style&gt;. Por exemplo:
          <br>HTML<br>
          <img src="imagens/css_2.jpg"><br>
          O CSS Interno permite definir estilos para todo o documento, mas ainda pode resultar em dificuldades de manutenção à medida que o site cresce.</p>
        <p>c) CSS Externo:
          <br>O CSS Externo é a abordagem mais recomendada. Nesse caso, o CSS é definido em um arquivo separado com extensão .css. Por exemplo, em um arquivo chamado "styles.css":
          <br>Styles.css<br>
          <img src="imagens/css_3.jpg"><br>
          Em seguida, você pode vincular o arquivo CSS ao documento HTML usando a tag &lt;link&gt; no cabeçalho:
          <br>HTML:<br>
          <img src="imagens/css_4.jpg">
          <br>Com o CSS Externo, é possível criar estilos reutilizáveis e manter um código limpo e organizado.
        </p>
        <center><h2 id=titulo3>Etapas para usar o CSS</h2></center>
        <p>Aqui estão algumas etapas para começar a usar o CSS em um documento HTML:<br>
          a) Crie um arquivo CSS separado com extensão .css, como "styles.css".<br>
          b) Defina as regras de estilo dentro do arquivo CSS. Por exemplo:
          <br>styles.css<br>
          <img src="imagens/css_5.jpg">
          c) Vincule o arquivo CSS ao documento HTML usando a tag <link> no cabeçalho do documento:
          <br>exemplo.html<br>
          <img src="imagens/css_6.jpg">
          <br>d) Aplique as classes e/ou IDs definidos em seu HTML para estilizar elementos específicos. Por exemplo:
          <br>exemplo.html<br>
          <img src="imagens/css_7.jpg">
          <br><img src="imagens/css_8.jpg">
        </p>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Curso de Programação <br> by Abner, e Gabriel Reis</p>
    </footer>
  </body>
</html>

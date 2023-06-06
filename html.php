<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML - Curso de Programação</title>
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
      <li><a href="#titulo1">O que é HTML?</a></li>
      <li><a href="#titulo2">Tutorial de HTML</a></li>
      <li><a href="#titulo3">Estrutura básica</a></li>
      <li><a href="#titulo4">Tags</a></li>
      <li><a href="#titulo5">Atributos</a></li>
      <li><a href="#titulo6">Exemplo de código HTML</a></li>
    </ul>
  </div>-->
      <section class="banner">
        <h2>HMTL</h2>
        <p>Nesta págiga você aprenderá tudo um pouco sobre o que é HTML, como usar e o porque de se usar</p>
        <p><img src="https://images.unsplash.com/photo-1542831371-29b0f74f9713?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8aHRtbHxlbnwwfHwwfHx8MA%3D%3D&w=1000&q=80"></p>
      </section>
      <center><h2 id=titulo1>O que é HTML?</h2></center>
        <p>HTML (HyperText Markup Language) é uma linguagem de marcação utilizada para estruturar e exibir conteúdo na web. É a base fundamental de qualquer página da internet. Com HTML, você pode criar elementos como títulos, parágrafos, listas, links, imagens e muito mais.</p>
        <center><h1 id=titulo2>Tutorial de HTML</h1></center>
        <center><h2 id=titulo3>Estrutura básica</h2></center>
        <p>Todo documento HTML começa com a seguinte estrutura básica:</p>
        <p><img src="imagens/html_tutorial.jpg"></p>
        <center><h2 id=titulo4>Tags</h2></center>
        <p>Uma tag em HTML é uma estrutura básica usada para marcar e identificar elementos em um documento HTML. Ela é composta por duas partes: a tag de abertura (ou início) e a tag de fechamento (ou fim), envolvendo o conteúdo que está sendo marcado.

A tag de abertura é representada pelo nome do elemento HTML entre sinais de menor que ("<") e maior que (">"). Por exemplo, a tag de abertura para um parágrafo é &lt;p&gt;. A tag de fechamento é semelhante à tag de abertura, mas inclui uma barra ("/") antes do nome do elemento. Para o exemplo do parágrafo, a tag de fechamento é &lt;/p&gt;.

A maioria das tags HTML precisa ser aberta e fechada corretamente para definir o início e o fim do elemento marcado. No entanto, algumas tags, como a tag &lt;img&gt; para imagens ou a tag &lt;br&gt; para quebra de linha, são chamadas de "tags vazias" e não precisam de uma tag de fechamento.

As tags são usadas para estruturar e organizar o conteúdo de uma página HTML. Elas descrevem a função e o propósito dos elementos no documento, como cabeçalhos, parágrafos, links, imagens, listas e muito mais. Ao usar as tags corretas, você define a semântica do seu conteúdo, o que é importante para a acessibilidade, a indexação pelos mecanismos de busca e a interpretação correta do seu site pelos navegadores.
</p>
        <p>&lt;h1&gt; a &lt;h6&gt;: Títulos de diferentes níveis.
        </p>
        <p>&lt;p&gt;: Parágrafos.</p>
        <p>&lt;a href="URL"&gt;: Links.</p>
        <p>&lt;img src="caminho-da-imagem.jpg" alt="Descrição da imagem"&gt;: Imagens.</p>
        <p>&lt;ul&gt; e &lt;li&gt;: Listas não ordenadas.</p>
        <p>&lt;ol&gt; e &lt;li&gt;: Listas ordenadas.</p>

        <center><h2 id=titulo5>Atributos</h2></center>
        <p>As tags podem ter atributos que fornecem informações adicionais sobre o elemento. Alguns exemplos de atributos comuns são:</p>
        <p>href: Define o destino do link.</p>
        <p>src: Define o caminho da imagem.</p>
        <p>alt: Fornece uma descrição alternativa para a imagem.</p>
        <p>class e id: Permitem atribuir identificadores ou classes CSS aos elementos.</p>
        <center><h1 id="titulo6">Exemplo de código HTML</h1></center>
        <p>Aqui está um exemplo de código html:</p>
        <p><img src="imagens/tutorial_html2.jpg"> </p>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Curso de Programação <br> by Abner e Gabriel Reis</p>
    </footer>
  </body>
</html>

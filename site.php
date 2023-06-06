<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site - Curso de Programação</title>
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
      <li><a href="#titulo1">Passo 1: Estrutura básica do documento HTML</a></li>
      <li><a href="#titulo2">Passo 2: Adicionando o conteúdo principal</a></li>
      <li><a href="#titulo3">Passo 3: Estilizando com CSS embutido</a></li>
      <li><a href="#titulo4">Passo 4: Estilizando com CSS externo</a></li>
      <li><a href="#titulo5">Passo 5: Adicionando mais elementos e estilos</a></li>
    </ul>
  </div>-->
      <section class="banner">
        <h2>Criando um site</h2>
        <p>Nesta página você aprendera a melhor maneira de se criar um site básico e entender melhor como melhora-lo</p>
        <p><img src="https://www.folhadelondrina.com.br/img/inline/3220000/0x484/Como-criar-um-site-no-Wordpress-do-zero0322890301202302221006.webp?fallback=https%3A%2F%2Fwww.folhadelondrina.com.br%2Fimg%2Finline%2F3220000%2FComo-criar-um-site-no-Wordpress-do-zero0322890301202302221006.jpg%3Fxid%3D5900858&xid=5900858"></p>
      </section>
      <center><h2 id=titulo1>Passo 1: Estrutura básica do documento HTML</h2></center>
        <p> <li>Abra um editor de texto simples, como o Bloco de Notas ou um editor de código como o Visual Studio Code.</li>
            <li>Crie um novo arquivo e salve-o com a extensão ".html", por exemplo, "meu-site.html".</li>
            <li>Dentro do arquivo, comece definindo a estrutura básica do documento HTML:</li>
        </p>
        <p><img src="imagens/site1.jpg"></p>
        <center><h1 id=titulo2>Passo 2: Adicionando o conteúdo principal</h1></center>
        <p> <li>Dentro da tag &lt;body&gt;, você pode adicionar o conteúdo principal do seu site.</li>
            <li>Por exemplo, adicione um cabeçalho principal usando a tag &lt;h1&gt;:</li>
        </p>
        <p><img src="imagens/site2.jpg"></p>
        <center><h2 id=titulo3>Passo 3: Estilizando com CSS embutido</h2></center>
        <p> <li>Agora, vamos adicionar algum estilo ao nosso site usando CSS embutido.</li>
            <li>Dentro da tag &lt;head&gt;, logo após a tag &lt;title&gt;, adicione a tag &lt;style&gt; e escreva as regras de estilo:</li></p>
            <p><img src="imagens/site3.jpg"></p>
        <center><h2 id=titulo4.jpg>Passo 4: Estilizando com CSS externo</h2></center>
        <p> <li>É uma prática recomendada separar o CSS do HTML. Vamos criar um arquivo separado para as regras de estilo.</li>
            <li>Crie um novo arquivo em um editor de texto e salve-o com a extensão ".css", por exemplo, "estilos.css".</li>
            <li>No arquivo HTML, dentro da tag &lt;head&gt;, adicione a tag &lt;link&gt; para vincular o arquivo CSS:</li></p>
            <br><img src="imagens/site4.jpg"><br>
            <li>Agora, adicione as regras de estilo no arquivo "estilos.css":</li>
            <br><img src="imagens/site5.jpg">
        <center><h2 id=titulo5>Passo 5: Adicionando mais elementos e estilos</h2></center>
        <p> <li>Continue construindo seu site adicionando mais elementos HTML e estilos CSS.</li>
            <li>Experimente adicionar parágrafos, imagens, links e estilizá-los de acordo com suas preferências.</li>
            <li>Utilize as tags HTML apropriadas, como &lt;p&gt;, &lt;img&gt;, &lt;a&gt;, etc., e estilize-os no arquivo CSS.</li>
            <li>Lembre-se de salvar as alterações nos arquivos HTML e CSS e atualizar o navegador para ver as mudanças.</li></p>
            <p>Esse tutorial básico deve ajudá-lo a começar a montar um site simples usando HTML e CSS. À medida que você ganha mais conhecimento e experiência, pode explorar conceitos avançados, como layouts responsivos, frameworks CSS e interações dinâmicas. A prática constante é fundamental para se aprimorar nessa área. Divirta-se construindo seu site!</p>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Curso de Programação <br> by Abner e Gabriel Reis</p>
    </footer>
  </body>
</html>

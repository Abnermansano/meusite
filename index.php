<!DOCTYPE html>
<html lang="pt-br">
  <!--
    Tentar melhorar a sidebar.
    Tentar criar um sistema de criação de conta e login usando PHP.
    O usuário clicará em "Inscrever-se" e será direcionado para uma página com o login e a senha pronta.
    Depois na hora de logar ele poderá entrar nas outras abas, caso contrário ele será bloqueado de acessar-las
    NÃO ESQUECER
    Não esquecer de adicionar imagens para site.php
  -->
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de Programação</title>
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
      <section class="banner">
        <h2>Aprenda a programar de maneira simples e fácil</h2>
        <p>Com nosso curso, você terá acesso a conteúdo de alta qualidade, prático e o melhor, totalmente grátis</p>
        <a href="inscreva.php" class="button">Inscreva-se agora</a>
      </section>
      <section>
        <h2>Sobre o Curso</h2>
        <p>O curso de programação é projetado para iniciantes que desejam aprender a programar do zero. Você aprenderá a lógica de programação, HTML, CSS, JavaScript e muito mais.</p>
      </section>
      <section>
        <h2>Recursos do Curso</h2>
        <ul>
          <li>Acesso a conteúdo de alta qualidade</li>
          <li>Aprendizado fácil e intuitivo</li>
          <li>Aprenda a montar seu próprio site!</li>
          <li>Acesso totalmente gratuito</li>
        </ul>
      </section>
      <section>
        <h2>Depoimentos</h2>
        <div class="testimonial">
          <p>"Eu nunca pensei que poderia aprender a programar, mas este curso me mostrou que é possível. Eu recomendo a todos."</p>
          <p class="author">- João</p>
        </div>
        <div class="testimonial">
          <p>"Este curso mudou minha vida. Agora sou capaz de criar minhas próprias aplicações e tenho muito mais oportunidades profissionais."</p>
          <p class="author">- Maria</p>
        </div>
      </section>
      <section class="cta">
        <h2>Inscreva-se agora</h2>
        <p>Inscreva-se agora e comece sua jornada de aprendizado.</p>
        <a href="inscreva.php" class="button">Inscreva-se agora</a>
      </section>
    </main>
    <footer>
      <p>&copy; 2023 Curso de Programação <br> by Abner e Gabriel Reis</p>
    </footer>
  </body>
</html>

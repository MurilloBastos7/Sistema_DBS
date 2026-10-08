<?php 
require_once __DIR__ . '/../includes/functions.php'; 
require_once __DIR__ . '/../login/verifica_user.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/mini_sistema/includes/assets/esfera.png" type="image/x-icon">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Sobre</title>
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <ul>
        <li><a href="#sobre">Sobre</a></li>
        <li><a href="#quem">Quem somos</a></li>
        <li><a href="#missao">Nossa missão</a></li>
        <li><a href="#visao">Visão</a></li>
        <li><a href="#slogan">Slogan</a></li>
    </ul>

    <section id="sobre">
        <article>
            <h2>Sobre a empresa</h2>
            <p>A <strong>DBSStatics</strong> é uma plataforma criada para reunir, organizar e apresentar informações sobre o universo de <strong>Dragon Ball Super</strong> de maneira clara, prática e acessível. O projeto foi pensado para que os fãs possam encontrar em um único espaço conteúdos relacionados aos personagens, transformações, batalhas, universos e outros elementos importantes da franquia.</p>
            <p>Além de funcionar como uma fonte de consulta, a plataforma busca apresentar as informações de uma forma organizada e fácil de navegar. Dessa maneira, tanto quem está conhecendo Dragon Ball Super agora quanto quem já acompanha a obra há bastante tempo pode utilizar o site para pesquisar, comparar e descobrir novos detalhes sobre o universo da série.</p>
        </article>
    </section>

    <section id="quem">
        <article>
            <h2>Para quem é?</h2>
            <p>A DBSStatics foi pensada principalmente para fãs de <strong>Dragon Ball Super</strong>, mas também pode ser utilizada por qualquer pessoa que tenha interesse em conhecer melhor a franquia. O conteúdo pode ser útil para quem está começando a assistir, para fãs que desejam relembrar acontecimentos e para pessoas interessadas em comparar personagens e transformações.</p>
            <p>A plataforma também foi pensada para proporcionar uma navegação simples. O objetivo é que o usuário consiga encontrar o conteúdo que procura sem precisar conhecer profundamente a obra ou ter experiência com sites de estatísticas.</p>
        </article>
    </section>

    <section id="missao">
        <article>
            <h2>Nossa missão</h2>
            <p>A missão da DBSStatics é <strong>facilitar o acesso a informações sobre Dragon Ball Super</strong>, reunindo conteúdos relevantes em uma plataforma organizada, compreensível e agradável de utilizar.</p>
            <p>Também buscamos incentivar a exploração do universo da franquia por meio de informações apresentadas de forma objetiva. A ideia é que cada página ajude o usuário a descobrir personagens, entender transformações, conhecer batalhas e encontrar novos conteúdos relacionados à série.</p>
        </article>
    </section>

    <section id="visao">
        <article>
            <h2>Visão</h2>
            <p>A visão da DBSStatics é evoluir continuamente até se tornar uma plataforma cada vez mais completa para consulta de informações sobre Dragon Ball Super. O projeto pode crescer com a inclusão de novos personagens, transformações, batalhas, estatísticas, curiosidades e outras categorias relacionadas ao universo da obra.</p>
            <p>Com a expansão do conteúdo e das funcionalidades, a plataforma pretende oferecer uma experiência cada vez mais organizada, permitindo que os usuários encontrem informações de maneira rápida e possam explorar diferentes aspectos de Dragon Ball Super em um único lugar.</p>
        </article>
    </section>

    <section id="slogan">
        <article>
            <h2>Slogan</h2>
            <p><strong>DBSStatics — Explore. Compare. Descubra.</strong></p>
            <p>O slogan representa a proposta principal da plataforma: <strong>explorar</strong> o universo de Dragon Ball Super, <strong>comparar</strong> informações entre personagens, transformações e acontecimentos e <strong>descobrir</strong> novos conteúdos e curiosidades ao longo da navegação.</p>
        </article>
    </section>

    <!-- <h1>Pagina para deletar</h1>
    <form action="" method="post">
        <label for="id">ID: </label>
        <input type="number" name="id" id="id">
        <input type="submit" value="Apagar">
    </form>
    <?php
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    //     excluir($conexao, $_POST['id']); 
    // }
    ?>
    <a href="select.php">Consulta DB</a> -->
    <?php include '../includes/footer.php'; ?>
</body>

</html>
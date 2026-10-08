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
    <title>Proposta</title>
</head>
<body>
    <?php include '../includes/header.php';?>
    <ul>
        <li><a href="#proposta">Nossa proposta</a></li>
        <li><a href="#problema">Oque resolvemos</a></li>
        <li><a href="#solucao">Nossa solução</a></li>
        <li><a href="#oque">O que Encontra na Plataforma</a></li>
        <li><a href="#conclusao">Conclusão</a></li>
    </ul>
    <section id="proposta">
        <article>
            <h2>Nossa proposta</h2>
            <p>A plataforma DBSSTATS foi criada para resolver a dispersão de informações sobre o universo de Dragon Ball Super. Em vez de o utilizador ter de pesquisar em múltiplos sites, wikis ou fóruns desconectados, reunimos e organizamos todo o conteúdo relevante num único ecossistema centralizado e fácil de navegar.</p>
        </article>
    </section>

    <section id="problema">
        <article>
            <h2>O Problema que Resolvemos</h2>
            <p>Atualmente, os dados sobre personagens, poderes e episódios encontram-se espalhados pela internet. Encontrar informações precisas e comparáveis sobre níveis de poder, transformações ou resultados de batalhas exige tempo e cruzar diferentes fontes.</p>
        </article>
    </section>

    <section id="solucao">
        <article>
            <h2>A Nossa Solução</h2>
            <p>O DBSSTATS transforma grandes volumes de dados brutos numa base de conhecimento estruturada, visual e interativa:</p><br>
            <ul>
                <li><strong>Análise Estatística e Comparações:</strong> Sistema que permite analisar métricas dos personagens e confrontar estatísticas de combate e transformações.</li>
                <li><strong>Centralização de Dados:</strong> Reunião dos principais elementos do universo de Dragon Ball Super num único local.</li>
                <li><strong>Organização Clara:</strong> Conteúdo dividido por secções intuitivas para uma consulta rápida e sem complicações.</li>
            </ul>
        </article>
    </section>

    <section id="oque">
        <article>
            <h2>O que Encontra na Plataforma</h2>
            <ul>
                <li><strong>Perfis de Personagens:</strong> Fichas completas com história, atributos, técnicas e evolução de poder.</li>
                <li><strong>Transformações e Batalhas:</strong> Detalhes explicativos sobre cada forma e histórico de confrontos.</li>
                <li><strong>Ferramenta de Pesquisa e Comparação:</strong> Motor de busca para localizar elementos específicos e comparar dois ou mais personagens lado a lado.</li>
                <li><strong>Área de Utilizador:</strong> Possibilidade de criar conta (Cadastrar-se / Entrar) para guardar preferências e acompanhar atualizações da plataforma.</li>
            </ul>
        </article>
    </section>

    <section id="conclusao">
        <article>
            <h2>Conclusão</h2>
            <p>A proposta do DBSSTATS é simplificar a forma como os fãs e investigadores exploram o universo de Dragon Ball Super. Percebemos que as informações sobre a obra costumam estar fragmentadas por diversos sites, o que torna a consulta demorada e confusa.   Para solucionar este problema, desenvolvemos uma plataforma que centraliza e estrutura todos os dados essenciais sobre personagens, transformações e batalhas numa interface limpa e organizada.   O diferencial do projeto reside no uso de estatísticas e comparações diretas. Não nos limitamos a apresentar textos descritivos; permitimos que o utilizador analise dados concretos, compreenda o impacto de cada transformação e compará-los entre si. Seja para esclarecer uma dúvida rápida através do nosso motor de busca ou para explorar profundamente as características da obra, o DBSSTATS oferece uma experiência intuitiva, completa e acessível a todos. </p>
        </article>
    </section>

    <!-- <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome"><br>
        <label for="turma">Turma: </label>
        <input type="text" name="turma" id="turma"><br>
        <label for="nasc">Nascimento: </label>
        <input type="date" name="nasc" id="nasc"><br>
        <label for="ativo">Ativo: </label>
        <input type="radio" name="ativo" id="ativo" value="true">
        <label for="sim">Sim</label>
        <input type="radio" name="ativo" id="ativo" value="false">
        <label for="nao">Não</label><br>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form> -->
    <?php
    // if($_SERVER['REQUEST_METHOD'] == "POST"){
    // cadastrar($conexao, $_POST['nome'], $_POST['nasc'], $_POST['turma'], $_POST['ativo']);
    // }
    // include '../includes/footer.php';?>
    <?php include __DIR__ . '/../includes/footer.php';?>
</body>
</html>
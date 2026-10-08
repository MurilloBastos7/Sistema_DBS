<?php
require_once __DIR__ . '/../login/verifica_user.php';

// Lista de personagens de Dragon Ball Super
$personagens = [
    [
        'nome' => 'Goku',
        'transformacao' => 'Ultra Instinto',
        'nivel_poder' => 'Divino',
        'imagem' => '/mini_sistema/includes/assets/goku_mui.png',
        'descricao' => 'O estado supremo da maestria em batalha. Após quebrar os seus limites no Torneio do Poder, Goku alcançou este estado em que o seu corpo reage e esquiva instantaneamente sem a necessidade de pensar.'
    ],
    [
        'nome' => 'Vegeta',
        'transformacao' => 'Super Saiyajin Blue',
        'nivel_poder' => 'Semidivino',
        'imagem' => '/mini_sistema/includes/assets/vegeta_blue.png',
        'descricao' => 'O Orgulho do Príncipe Saiyajin. Combina o controlo de Ki do Deus Super Saiyajin com a transformação clássica de Super Saiyajin, oferecendo imensa força e precisão.'
    ],
    [
        'nome' => 'Freeza',
        'transformacao' => 'Golden Freeza',
        'nivel_poder' => 'Alto',
        'imagem' => '/mini_sistema/includes/assets/golden.png',
        'descricao' => 'A evolução dourada do Imperador do Mal. Alcançada após quatro meses de treino intenso, esta forma rivaliza com o poder do Super Saiyajin Blue.'
    ],
    [
        'nome' => 'Gohan',
        'transformacao' => 'Beast',
        'nivel_poder' => 'Alto',
        'imagem' => '/mini_sistema/includes/assets/gohan.png',
        'descricao' => 'O despertar supremo do potencial latente de Gohan, despoletado pela fúria ao ver Piccolo em perigo contra Cell Max. Possui cabelo prateado e olhos vermelhos, garantindo-lhe uma força devastadora capaz de rivalizar com os níveis divinos mais altos.'
    ],
    [
        'nome' => 'Bills (Beerus)',
        'transformacao' => 'Deus da Destruição',
        'nivel_poder' => 'Divino',
        'imagem' => '/mini_sistema/includes/assets/bills.png',
        'descricao' => 'O Deus da Destruição do Universo 7. Responsável por manter o equilíbrio cósmico através da destruição de planetas. Utiliza o poder do Hakai e possui uma força incomparável que serve de fasquia para os mortais.'
    ],
    [
        'nome' => 'Whis',
        'transformacao' => 'Anjo Atendente',
        'nivel_poder' => 'Angelical',
        'imagem' => '/mini_sistema/includes/assets/whis.png',
        'descricao' => 'Mestre de artes marciais de Bills, Goku e Vegeta. Como Anjo do Universo 7, domina o Ultra Instinto de forma permanente e possui capacidades de manipulação temporal e criação de matéria.'
    ],
    [
        'nome' => 'Broly',
        'transformacao' => 'Super Saiyajin Lendário',
        'nivel_poder' => 'Semidivino',
        'imagem' => '/mini_sistema/includes/assets/broly.png',
        'descricao' => 'Um Saiyajin prodígio com um poder mutante que cresce descontroladamente durante a batalha. A sua força bruta e resistência foram capazes de pressionar Goku e Vegeta na forma SSJ Blue simultaneamente.'
    ],
    [
        'nome' => 'Piccolo',
        'transformacao' => 'Orange Piccolo',
        'nivel_poder' => 'Divino',
        'imagem' => '/mini_sistema/includes/assets/picollo.png',
        'descricao' => 'O sábio guerreiro Namekuseijin e mentor de Gohan. Ao ter o seu potencial libertado por Shenlong, alcançou a transformação Orange Piccolo, garantindo-lhe um corpo extremamente denso e força ao nível dos deuses.'
    ],
    [
        'nome' => 'Androide 17',
        'transformacao' => 'Base',
        'nivel_poder' => 'Alto',
        'imagem' => '/mini_sistema/includes/assets/17.png',
        'descricao' => 'Guerreiro modificado com reservas de energia inesgotáveis. Destaca-se pelo seu raciocínio tático avançado, barreira de proteção impenetrável e por ter sido o vencedor decisivo do Torneio do Poder.'
    ],
    [
        'nome' => 'Trunks do Futuro',
        'transformacao' => 'Base',
        'nivel_poder' => 'Alto',
        'imagem' => '/mini_sistema/includes/assets/trunks.png',
        'descricao' => 'O protetor da linha do tempo alternativa. Atingiu o estado de Super Saiyajin Rage ao canalizar a sua fúria contra Zamasu e Goku Black, unindo o Ki mortal à energia da mística Espada da Esperança.'
    ],
    [
        'nome' => 'Jiren',
        'transformacao' => 'Poder Total',
        'nivel_poder' => 'Divino',
        'imagem' => '/mini_sistema/includes/assets/jiren.png',
        'descricao' => 'O guerreiro mais poderoso do Universo 11 e integrante dos Pride Troopers. O seu Ki puro e disciplina ultrapassam o poder de vários Deuses da Destruição, sendo o grande rival de Goku no Torneio do Poder.'
    ],
    [
        'nome' => 'Toppo',
        'transformacao' => 'Deus da Destruição',
        'nivel_poder' => 'Divino',
        'imagem' => '/mini_sistema/includes/assets/toppo.png',
        'descricao' => 'Líder dos Pride Troopers do Universo 11. Ao ativar o poder do Hakai, torna-se um Deus da Destruição temporário com força capaz de rivalizar com os melhores do Torneio do Poder.'
    ],
    [
        'nome' => 'Hit',
        'transformacao' => 'Time-Skip',
        'nivel_poder' => 'Semidivino',
        'imagem' => '/mini_sistema/includes/assets/hit.png',
        'descricao' => 'Assassino lendário do Universo 6. Domina o salto temporal e evolui constantemente as suas técnicas durante o combate, tornando-se um oponente extremamente perigoso.'
    ],
    [
        'nome' => 'Kale',
        'transformacao' => 'Super Saiyajin Lendário',
        'nivel_poder' => 'Semidivino',
        'imagem' => '/mini_sistema/includes/assets/kale.png',
        'descricao' => 'Saiyajin do Universo 6 com um poder mutante semelhante ao de Broly. A sua forma Lendária descontrolada concede uma força bruta absurda e regeneração elevada.'
    ],
    [
        'nome' => 'Caulifla',
        'transformacao' => 'Super Saiyajin 2',
        'nivel_poder' => 'Alto',
        'imagem' => '/mini_sistema/includes/assets/caulifla.png',
        'descricao' => 'Saiyajin agressiva e talentosa do Universo 6. Aprende rapidamente novas transformações e forma uma dupla devastadora com Kale.'
    ],
    [
        'nome' => 'Cabba',
        'transformacao' => 'Super Saiyajin 2',
        'nivel_poder' => 'Alto',
        'imagem' => '/mini_sistema/includes/assets/cabba.png',
        'descricao' => 'Saiyajin do Universo 6 que aprendeu o Super Saiyajin com Vegeta. Possui grande potencial e senso de justiça, sendo um dos guerreiros mais leais da sua equipa.'
    ],
    [
        'nome' => 'Goku Black',
        'transformacao' => 'Super Saiyajin Rosé',
        'nivel_poder' => 'Divino',
        'imagem' => '/mini_sistema/includes/assets/goku_black.png',
        'descricao' => 'A versão corrompida de Goku criada por Zamasu. Combina o corpo de Goku com a mente de um Kaioshin, usando o Super Saiyajin Rosé e a Espada da Destruição.'
    ],
    [
        'nome' => 'Kefla',
        'transformacao' => 'Super Saiyajin 2',
        'nivel_poder' => 'Divino',
        'imagem' => '/mini_sistema/includes/assets/kefla.png',
        'descricao' => 'Fusão de Kale e Caulifla através dos Potara. Possui um poder explosivo capaz de pressionar seriamente o Ultra Instinto de Goku no Torneio do Poder.'
    ],
];
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>DBSSTATS - Galeria de Personagens</title>
    <link rel="shortcut icon" href="/mini_sistema/includes/assets/esfera.png" type="image/x-icon">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
</head>

<body>
    <?php include __DIR__ . '/../includes/header.php'; ?>
    <header>
        <h1>Lista de Personagens</h1>
    </header>
    <main>
        <section>
            <h2>Personagens Registados</h2>
            <?php foreach ($personagens as $personagem): ?>
                <article>
                    <h3><?php echo $personagem['nome']; ?> - <?php echo $personagem['transformacao']; ?></h3>

                    <img src="<?php echo $personagem['imagem']; ?>" alt="<?php echo $personagem['nome']; ?>" width="120">

                    <ul>
                        <li><strong>Nível de Poder:</strong> <?php echo $personagem['nivel_poder']; ?></li>
                        <li><strong>Transformação:</strong> <?php echo $personagem['transformacao']; ?></li>
                    </ul>
                    <p>
                        <strong>Descrição:</strong><br>
                        <?php echo $personagem['descricao']; ?>
                    </p>
                </article>
                <hr>
            <?php endforeach; ?>
        </section>
    </main>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>
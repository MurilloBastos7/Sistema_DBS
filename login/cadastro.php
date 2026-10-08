<?php 
require_once __DIR__ . '/../database/connect.php';
?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.use_only_cookies', 1);
    ini_set('session.use_strict_mode', 1);
    session_start();
}

// Se o usuário já estiver logado, redireciona para a página principal
if (isset($_SESSION['usuario_id'])) {
    header('Location: /app/buscar.php');
    exit();
}

$erro = '';
$sucesso = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitização e captura dos campos
    $nome           = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS));
    $email          = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $senha          = $_POST['senha'] ?? '';
    $confirma_senha = $_POST['confirma_senha'] ?? '';

    // Validações dos dados enviados
    if (empty($nome)) {
        $erro = 'Por favor, informe seu nome.';
    } elseif (!$email) {
        $erro = 'Por favor, informe um e-mail válido.';
    } elseif (mb_strlen($senha) < 6) {
        $erro = 'A senha deve ter no mínimo 6 caracteres.';
    } elseif ($senha !== $confirma_senha) {
        $erro = 'As senhas não coincidem.';
    } else {
        try {
            $stmt = $conexao->prepare("SELECT id FROM usuarios WHERE email = :email LIMIT 1");
            $stmt->execute([':email' => $email]);

            if ($stmt->fetch()) {
                $erro = 'Este e-mail já está cadastrado no sistema.';
            } else {
                $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
                $stmt = $conexao->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (:nome, :email, :senha)");
                $stmt->execute([
                    ':nome'  => $nome,
                    ':email' => $email,
                    ':senha' => $senhaHash
                ]);

                $sucesso = 'Cadastro realizado com sucesso! Você já pode entrar.';
            }
        } catch (PDOException $e) {
            $erro = 'Erro ao processar o cadastro. Tente novamente mais tarde.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/mini_sistema/includes/assets/esfera.png" type="image/x-icon">
    <link rel="stylesheet" href="/mini_sistema/style/style.css">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <div class="card">
        <h2>Criar Conta</h2>

        <?php if (!empty($erro)): ?>
            <div class="msg error"><?= htmlspecialchars($erro, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>

        <?php if (!empty($sucesso)): ?>
            <div class="msg success">
                <?= htmlspecialchars($sucesso, ENT_QUOTES, 'UTF-8'); ?>
                <br><br>
                <a href="login.php" style="color: #155724; font-weight: bold;">Clique aqui para fazer login</a>
            </div>
        <?php else: ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" value="<?= htmlspecialchars($_POST['nome'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="senha">Senha (mínimo 6 caracteres)</label>
                    <input type="password" id="senha" name="senha" required minlength="6">
                </div>
                <div class="form-group">
                    <label for="confirma_senha">Confirmar Senha</label>
                    <input type="password" id="confirma_senha" name="confirma_senha" required minlength="6">
                </div>
                <button type="submit" class="btn">Cadastrar</button>
            </form>
            <a href="login.php" class="link-login">Já tem uma conta? Faça login aqui ou volte para tela inicial</a>
        <?php endif; ?>
    </div>
    <?php include __DIR__ . '/../includes/footer.php';?>
</body>
</html>
# 🐉 DBSStats — Universo Dragon Ball Super

## Sobre o projeto

Eu, Murillo Cena, desenvolvi o **DBSStats**, um site sobre o universo de **Dragon Ball Super**. A ideia é reunir informações sobre o anime em um só lugar, facilitando o acesso a notícias, personagens e outros conteúdos.

Também usei o projeto para praticar o que estou aprendendo em Desenvolvimento de Sistemas, principalmente PHP, HTML, CSS e banco de dados.

## O que tem no site?

- **Página inicial:** apresenta o projeto.
- **Notícias:** reúne conteúdos e novidades sobre Dragon Ball Super.
- **Personagens:** mostra personagens, transformações e descrições.
- **Anime:** apresenta informações relacionadas à série.
- **Sobre e Proposta:** explicam a ideia e o objetivo da plataforma.
- **Cadastro e Login:** páginas para criar uma conta e entrar no sistema.
- **Sair:** encerra a sessão do usuário e mostra uma mensagem de despedida.

## Tecnologias utilizadas

- **HTML:** organiza os elementos e o conteúdo das páginas.
- **CSS:** cuida das cores, fontes, espaçamentos e aparência do site.
- **PHP:** monta páginas, organiza partes reutilizáveis e processa algumas ações do sistema.
- **PostgreSQL e PDO:** utilizados na conexão com o banco de dados nas partes que precisam guardar ou consultar informações.
- **JavaScript:** usado, por exemplo, no botão que leva a página de volta ao topo.
- **Imagens:** ajudam a identificar personagens e combinar com o tema do anime.

## Como o projeto está organizado?

- `index.php` — página inicial.
- `app/` — páginas de notícias, personagens, anime, sobre e outras funções.
- `includes/` — partes reutilizadas, como cabeçalho, rodapé e funções.
- `includes/assets/` — imagens usadas no site.
- `login/` — arquivos relacionados a cadastro, login e saída da conta.
- `database/` — arquivo de conexão com o banco de dados.
- `style/style.css` — estilos visuais do site.
- `documentacao.md` — explicação do desenvolvimento passo a passo.

## Como executar

1. Instale e abra um ambiente local que execute PHP, como XAMPP, e configure o servidor web.
2. Coloque a pasta do projeto no diretório servido pelo ambiente. Se mantiver os caminhos atuais, a pasta deve ficar acessível como `/mini_sistema`.
3. Configure o PostgreSQL e ajuste os dados de conexão no arquivo `database/connect.php` para corresponder ao seu ambiente.
4. Crie e configure as tabelas necessárias para as funções que utilizam o banco de dados.
5. Inicie o servidor web e acesse `http://localhost/mini_sistema/` no navegador.

**Importante:** o projeto depende da configuração correta do banco de dados. Os dados de conexão que estão no código são específicos do ambiente em que foi desenvolvido e podem precisar ser alterados.

## Objetivo

Com esse projeto, pratiquei a criação de páginas web, a organização de arquivos, a estilização com CSS e o uso de PHP com banco de dados. Ainda é um projeto em desenvolvimento e pode receber melhorias.

---
Desenvolvido por **Murillo Cena**.

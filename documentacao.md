# 🐉 Documentação — Como eu fiz o DBSStats passo a passo

## 1. Escolhi o tema e planejei o site

Primeiro, escolhi fazer um site sobre Dragon Ball Super, porque queria reunir informações do anime em um só lugar. Pensei em colocar notícias, personagens e páginas explicando a proposta do projeto.

## 2. Organizei as pastas e os arquivos

Depois, separei o projeto em pastas para ficar mais fácil de encontrar cada parte. Criei a pasta `app` para as páginas principais, `includes` para partes que se repetem, `login` para cadastro e acesso, `database` para a conexão com o banco e `style` para o CSS.

## 3. Montei as páginas com HTML

Usei HTML para criar a estrutura das páginas, como títulos, parágrafos, links, listas, imagens e formulários. Fiz a página inicial e depois organizei as páginas de notícias, personagens, anime, sobre e proposta.

## 4. Usei PHP para deixar o site funcional

Com PHP, incluí o cabeçalho e o rodapé nas páginas, evitando repetir o mesmo código várias vezes. Também usei arquivos PHP para trabalhar com o cadastro, o login, a saída da conta e algumas informações exibidas no site.

## 5. Criei o visual com CSS

Depois, trabalhei no arquivo `style.css`. Escolhi cores inspiradas em Dragon Ball, como laranja, azul e tons escuros. Ajustei fontes, tamanhos, espaçamentos, menus e outros detalhes para deixar as páginas mais organizadas e com a identidade do anime.

## 6. Adicionei imagens e conteúdos

Coloquei imagens de personagens e uma imagem de Esfera do Dragão como ícone do site. Também preenchi as páginas com textos sobre o anime e conteúdos relacionados às notícias e aos personagens.

## 7. Preparei a conexão com o banco de dados

Criei o arquivo `database/connect.php` para centralizar a conexão com o PostgreSQL usando PDO. Essa parte permite que os arquivos que precisam acessar dados utilizem a conexão. Para funcionar em outro computador, é necessário configurar o banco e conferir os dados de acesso.

## 8. Fiz os testes e organizei o projeto

Por fim, fui abrindo as páginas no navegador para conferir o visual, os links e os caminhos entre os arquivos. Quando encontrei detalhes que precisavam de ajuste, fiz alterações no código e no CSS.

## Conclusão

Esse projeto me ajudou a praticar HTML, CSS, PHP e banco de dados. Também aprendi a separar o código em arquivos diferentes e a organizar melhor um site com várias páginas. Ainda existem pontos que podem ser corrigidos e melhorados, mas o DBSStats foi uma forma de colocar em prática o que estou aprendendo.
'
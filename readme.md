# 🐉 DBSStats — Universo Dragon Ball Super

## 📌 Sobre o projeto

Eu desenvolvi o **DBSStats**, um site sobre o universo de Dragon Ball Super. Minha ideia foi reunir informações sobre o anime em um só lugar, incluindo notícias, personagens, curiosidades e outras informações relacionadas à série.

Também criei páginas para apresentar a proposta do projeto e permitir o acesso de usuários por meio de cadastro e login.

Fiz esse projeto para colocar em prática o que estou aprendendo nas aulas de Desenvolvimento de Sistemas, principalmente sobre PHP, HTML, CSS e banco de dados.

## 🚀 O que tem no meu site?

- **Página inicial:** apresenta o DBSStats e explica o que é possível encontrar na plataforma.
- **Notícias:** apresenta conteúdos e novidades relacionados a Dragon Ball Super.
- **Personagens:** mostra personagens do anime, suas transformações, níveis de poder e descrições.
- **Anime:** apresenta curiosidades e informações sobre a série.
- **Sobre:** apresenta informações sobre o projeto.
- **Proposta:** explica a ideia e os objetivos da plataforma.
- **Cadastro:** permite preencher os dados para criar uma conta.
- **Login:** contém o formulário de acesso ao sistema.
- **Sair:** possui uma página para encerrar a experiência do usuário.
- **Busca e operações com dados:** inclui arquivos PHP preparados para consultar, cadastrar e atualizar informações.

## 🛠️ Tecnologias que utilizei

- **HTML:** utilizei para estruturar as páginas e organizar os conteúdos.
- **CSS:** usei para personalizar o visual do site, incluindo cores, fontes, menus e espaçamentos.
- **PHP:** utilizei para criar as páginas, incluir partes reutilizáveis e desenvolver as funcionalidades do sistema.
- **PostgreSQL:** preparei a conexão com o banco de dados para trabalhar com informações armazenadas.
- **PDO:** utilizei como recurso de conexão entre o PHP e o banco de dados.
- **JavaScript:** utilizei em alguns recursos de interação do site.
- **Imagens:** adicionei imagens dos personagens e uma imagem de Esfera do Dragão como ícone do site.

## 📂 Como organizei os arquivos

Organizei o projeto em pastas para facilitar a localização dos arquivos e separar cada parte do sistema.

```text
Sistema_DBS/
│
├── app/
│   ├── anime.php
│   ├── create.php
│   ├── dir.php
│   ├── noticias.php
│   ├── personagens.php
│   ├── proposta.php
│   ├── sair.php
│   ├── select.php
│   ├── sobre.php
│   └── update.php
│
├── database/
│   └── connect.php
│
├── includes/
│   ├── assets/
│   ├── footer.php
│   ├── functions.php
│   └── header.php
│
├── login/
│   ├── cadastra.php
│   ├── cadastro.php
│   ├── login.php
│   ├── logout.php
│   └── verifica_user.php
│
├── style/
│   └── style.css
│
├── documentacao.md
├── index.php
└── readme.md
```

### Para que serve cada pasta?

- **app:** coloquei as páginas de notícias, personagens, curiosidades, proposta, informações sobre o projeto e arquivos relacionados às operações com dados.
- **database:** deixei o arquivo `connect.php`, responsável pela conexão com o banco de dados.
- **includes:** organizei arquivos que podem ser utilizados em diferentes páginas, como o cabeçalho, o rodapé e as funções auxiliares.
- **includes/assets:** guardei as imagens utilizadas no site.
- **login:** reuni os arquivos relacionados ao cadastro, login, verificação e saída da conta.
- **style:** coloquei o arquivo `style.css`, que controla a aparência das páginas.
- **index.php:** é o arquivo da página inicial do DBSStats.
- **documentacao.md:** contém a explicação de como desenvolvi o site passo a passo.
- **readme.md:** apresenta o projeto e explica sua organização.

## 🎨 Prototipagem do site

Para organizar a ideia do projeto, pensei em dividir o site em partes, facilitando a navegação entre as páginas. A estrutura visual pode ser representada pelo exemplo abaixo:

```text
+------------------------------------------------+
|                    DBSStats                    |
|                                                |
| Home | Sobre | Proposta | Notícias | Anime     |
| Personagens              Cadastrar-se | Entrar |
+------------------------------------------------+
|                                                |
|              BEM-VINDO AO DBSSTATS             |
|                                                |
|       Informações sobre Dragon Ball Super      |
|                                                |
+------------------------------------------------+
|                                                |
|                    NOTÍCIAS                    |
|                                                |
|             Conteúdos sobre o anime             |
|                                                |
+------------------------------------------------+
|                                                |
|                  PERSONAGENS                   |
|                                                |
|          Imagens e informações dos             |
|                 personagens                    |
|                                                |
+------------------------------------------------+
|                    RODAPÉ                      |
+------------------------------------------------+
```

Esse desenho é uma representação simples da organização do site, baseada nas páginas e no menu que desenvolvi. Não é uma captura de tela, mas serve para demonstrar como os conteúdos estão divididos.

## ▶️ Como executar o projeto

### 1. Baixar o projeto

Primeiro, acesso o [repositório do DBSStats no GitHub](https://github.com/MurilloBastos7/Sistema_DBS) e baixo os arquivos pelo botão **Code → Download ZIP**.

Também posso clonar o projeto pelo terminal:

```bash
git clone https://github.com/MurilloBastos7/Sistema_DBS.git
```

### 2. Preparar o ambiente

Como o projeto utiliza PHP, preciso de um ambiente local com servidor web e suporte à linguagem. Posso utilizar o XAMPP para executar o PHP e o Apache.

Depois, coloco a pasta do projeto dentro de `htdocs`, mantendo o nome `mini_sistema` para que os caminhos utilizados no código continuem funcionando.

### 3. Configurar o banco de dados

O projeto possui o arquivo `database/connect.php`, que prepara a conexão com o PostgreSQL utilizando PDO.

Para executar em outro computador, preciso configurar os dados de conexão de acordo com meu ambiente, criar o banco e preparar as tabelas utilizadas pelas páginas que acessam os dados.

Também preciso verificar se a extensão do PHP para conexão com PostgreSQL está habilitada.

### 4. Abrir o site

Depois de configurar o ambiente, iniciar o Apache e deixar o banco de dados funcionando, acesso o endereço abaixo pelo navegador:

```text
http://localhost/mini_sistema/
```

Assim, consigo abrir a página inicial e navegar pelas páginas do projeto.

## 📝 Como desenvolvi o site passo a passo

**1. Escolhi o tema:** decidi criar um site sobre Dragon Ball Super para reunir notícias, curiosidades e informações dos personagens.

**2. Organizei as pastas:** separei os arquivos em pastas, deixando as páginas, imagens, estilos, funções e arquivos de login organizados.

**3. Criei as páginas:** utilizei HTML para estruturar os conteúdos e PHP para montar as páginas e trabalhar com as funcionalidades.

**4. Personalizei o visual:** utilizei CSS para definir as cores, organizar os menus e deixar o site com uma aparência relacionada ao anime.

**5. Adicionei imagens e informações:** coloquei imagens dos personagens e conteúdos sobre Dragon Ball Super.

**6. Preparei o acesso ao banco de dados:** criei o arquivo de conexão com PostgreSQL e organizei os arquivos PHP que trabalham com os dados.

**7. Desenvolvi as páginas de usuário:** criei arquivos relacionados ao cadastro, login, verificação e saída da conta.

**8. Revisei o projeto:** conferi a organização das páginas, os caminhos dos arquivos e a aparência do site, fazendo ajustes conforme necessário.

## 🔧 O que posso melhorar no futuro?

- Melhorar a experiência de navegação em celulares.
- Adicionar mais notícias e informações sobre os personagens.
- Aprimorar a busca de informações.
- Revisar e melhorar o sistema de login e cadastro.
- Corrigir possíveis erros e organizar ainda mais o código.
- Adicionar novas funcionalidades conforme eu aprender mais sobre programação.

## ✅ Conclusão

Com o DBSStats, consegui praticar conhecimentos que estou aprendendo em Desenvolvimento de Sistemas. Trabalhei com PHP, HTML, CSS, imagens, organização de arquivos e conexão com banco de dados.

Escolhi Dragon Ball Super como tema porque queria desenvolver algo relacionado ao anime e criar um site com diferentes tipos de conteúdo. Sei que ainda existem melhorias que posso fazer, mas esse projeto foi importante para praticar programação e evoluir meus conhecimentos.

---

**Desenvolvido por Murillo Cena**
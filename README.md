# Projeto - Aplicação de Cadastro e Login

## Índice

[Descrição]()

[Introdução]()

[Funcionalidades]()

[Tecnologias Utlizadas]()

[Estruturas de Pastas]()

[Tela de Login]()

[Tela de Registro]()

[Fontes Consultadas]()

[Autores]()

## Descrição

Este projeto é uma aplicação de cadastro e login de usuários, com foco em três tipos de perfis:

- **Admin**: Controle total do sistema, pode gerenciar outros usuários e dados sensíveis.
- **Gestor**: Responsável por gerenciar sua equipe, com permissões moderadas.
- **Colaborador**: Usuário comum, com permissões restritas.

A aplicação possui telas de login e registro que estão estilizadas e conectadas ao back-end em PHP. As funcionalidades irão evoluir para incluir CRUD completo para usuários e autenticação robusta.

## Introdução

O propósito deste sistema é facilitar a gestão de usuários com diferentes permissões e acessos. Isso permite que a aplicação seja flexível para uma organização com diferentes níveis hierárquicos. Com uma interface simples, o sistema permite o cadastro, login e gerenciamento de perfis de maneira eficiente.

Este documento, além de servir como guia para os desenvolvedores, descreve a estrutura e as tecnologias utilizadas, facilitando contribuições futuras.

## Funcionalidades

Atualmente, a aplicação conta com as seguintes funcionalidades:

1. **Cadastro de Usuários**: Os usuários podem se registrar com seus dados, escolhendo entre os perfis Admin, Gestor ou Colaborador.
2. **Login**: Autenticação de usuários por meio de e-mail e senha.
3. **Validação de Formulários**: Validação básica de campos de cadastro e login (ex: e-mail e senha obrigatórios).
4. **Estilização**: Interface estilizada com foco em acessibilidade e cores predominantes (azul e dourado).
5. **Estrutura Incremental**: O projeto será continuamente atualizado para incluir novas funcionalidades.

## Tecnologias Utilizadas

- **PHP**: Linguagem de programação para o back-end.
- **HTML5**: Para a estruturação das páginas de login e cadastro.
- **CSS3**: Para estilização das interfaces.
- **MySQL**: Banco de dados relacional para armazenar informações de usuários.
- **Git/GitHub**: Controle de versão e colaboração no projeto.

## Estrutura de Pastas

A organização atual do projeto é a seguinte:

- **views**: Páginas HTML para login e registro.
- **controllers**: Controladores que gerenciam a lógica da aplicação.
- **models**: Conectam a lógica ao banco de dados.
- **_css**: Contém o arquivo `style.css` responsável pela estilização.
- **index.php**: Arquivo principal da aplicação.

### Tela de Login

A página de login está localizada em `views/login.php`, com os seguintes campos:
- **Email**: Input para e-mail do usuário.
- **Senha**: Input para a senha

### Tela de Registro

Localizada em `views/register.php`, permite que o usuário se registre escolhendo entre três perfis:
- **Admin**
- **Gestor**
- **Colaborador**

## Fontes Consultadas

- Documentação oficial do [PHP](https://www.php.net/docs.php).
- Guia de boas práticas em [HTML5 e CSS3](https://developer.mozilla.org/pt-BR/docs/Web/HTML).
- Exemplos e dicas de projetos similares no [Stack Overflow](https://stackoverflow.com).

## Autores
Thalyta das Neves Ferreira - 3ºA

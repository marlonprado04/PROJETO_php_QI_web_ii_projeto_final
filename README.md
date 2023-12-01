# Projeto final - Web II

Projeto final da disciplina de Web II do curso Técnico em Informática

## Índice

- [Projeto final - Web II](#projeto-final---web-ii)
  - [Índice](#índice)
  - [Links externos](#links-externos)
  - [Links Internos](#links-internos)
  - [Informações do ambiente](#informações-do-ambiente)
  - [Como usar o programa](#como-usar-o-programa)

## Links externos

Quadro de tarefas do Trello [neste link](https://trello.com/invite/b/XLYte3T4/ATTIbcda5e0c235e90f55aa39489d3fd1725E6F8D5E6/assis-brasil-noite)

Levantamento de requisitos original, [neste link](https://docs.google.com/document/d/1RAR_Hry-Oa3pwCRsgYGOcm5L7HKt5efQbejKSsrCAIk/edit?usp=sharing)

Protótipo de tela no Figma, [neste link](https://www.figma.com/community/file/1310273585439482768)

Diagrama de classes [neste link](https://lucid.app/lucidchart/invitations/accept/inv_820655b4-75b2-46eb-85a5-676e9abfa09b)

Fluxograma de processos [neste link](https://lucid.app/lucidchart/16150dc4-73be-4cf6-9209-331a17ee4807/edit?page=0_0#)

## Links Internos

Estrutura de pastas MVC idealizada inicialmente [neste link](.docs/v1_estrutura_pastas.jpeg)

Script para criação do banco de dados [neste link](.docs/v1_script_cria_banco_dados.txt)

Script para criação de elementos dentro do banco de dados [neste link](.docs/v1_script_cria_itens.txt)

## Informações do ambiente

Versões dos programas:

- Xampp: 8.2.12
- MySQL Workbench: 8.0.34

Variáveis de ambiente:

- Porta utilizada no MySQL: 3306
- Usuário: root
- Senha: (em branco)

> As variáveis podem ser modificadas no arquivo `Config.php` na pasta raiz do projeto

## Como usar o programa

Para utilizar o programa seguir os passos abaixo:

1. Ter o XAMPP e o MySQL instalados e configurados
2. Adicionar o projeto na pasta `htdocs` dentro do XAMPP
3. Configurar as variáveis de acesso ao banco dentro do arquivo `Config.php` na raiz do projeto, de acordo com as configurações de portas do MySQL Workbench ou MySQL Admin (dentro do XAMPP)
4. Utilizar o script de criação de banco contido na pasta `.docs` para criar a estrutura inicial do banco de dados
5. Utilizar o script de adição de valores ao banco contido na pasta `.docs`
6. Acessar o localhost na porta configurada no XAMPP e acessar a pasta do projeto

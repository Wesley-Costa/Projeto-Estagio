# Projeto feito com Laravel PHP Framework.

## Objetivo 
Criação de uma aplicação de cadastro de clientes, com as funções de criação, listagem, edição, remoção de dados, fazendo um CRUD básico para fins educativos.

## Motivação
Motivação: Este projeto tem como motivação o aprendizado sobre as ferramentas utilizadas na Fabrica de Software na UESB de Jequié. Dessa forma, o projeto tem como finalidade aplicar conhecimentos adquirido no treinamento fornecido pela Fabrica de Software atraves da utilização de HTML, CSS, JavaScript, PHP e o Framework Laravel.

## Para utilizar o projeto
Para que o projeto possa ser instalado e funcionar corretamente devesse seguir os seguintes passos:

- **$ git clone https://github.com/Wesley-Costa/Projeto-Estagio**
- **$ cd projeto**
- **$ composer install**
- **$ php artisan key:generate** - Mas antes de rodar este comando verifique a configuracao com o banco no arquivo .env. 
- **$ php artisan migrate** - E para a criação do banco é necessario utilizar esse comando.
- **Para visualizar e utilizar o projeto no navegador, utilize a url: http://projeto.local/clientes**

## Ferramentas e Plugins
A ferramentas e plugins utilizados foram para complementar a parte da interface do usuario. Dessa forma, tecnologias como AdminLTE, DataTables e MaskedInput, foram as ferramentas utilizadas para interação com tabelas, aplicação de mascars nos campos HTML para cadastro e edição, além do template administrativo fornecido pelo AdminLTE.

## Topicos auxiliares

**Banco de Dados:**
As configurações do banco ficam na pasta config, onde é possivel acessar a partir do arquivo databases.php. Quanto a criação das tabelas, elas são criadas utilizando as chamadas migrations, e assim como em outros frameworks, o Laravel utiliza as migrations para criar toda estruturação das tabelas do banco. Já para criar as tabelas no banco e assim consolidar a estrutura feita nas migrations devemos executar o seguinte comando:
- $ php artisan migrate

Vale ressaltar que é importante ter o conhecimento sobre MassAssigment para poder codificar a Model de forma correta para acrescentar os respectivos campos no objeto que servirá de guia para a inserção de dados no banco.

### Estrutura
- As Models do projeto foram criada diretamente na pasta /app
- O acesso aos controladores da aplicação é feito por meio dos arquivos na pasta Controllers (Controllers)
- Para definir as rotas da aplicação utilizamos o arquivo routes.php (app/Http/routes.php)
- Para acessar as views e outros arquivos da aplicação é necessario acessar a pasta resources, onde podem ser encontrados arquivos JS, CSS, as blades PHP, além de imagens e outros arquivos que podem ser uteis na /public.
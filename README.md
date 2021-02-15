# FRAMEWORK PHP - MariaDB

## UTILIZANDO O FRAMEWORK
 - [x] Copie o repositorio para seus computador
   * https://github.com/Clamant96/framework.git
   
 - [x] Abra a pagina em um editor de codigo "VS Code"
   * abrindo-framework.png

### INSTALANDO BANCO DE DADOS
 - [x] Instalando o Bando de Dados "mvc.sql"
   * Acesse via Browser: http://localhost/phpmyadmin
   ![GitHub Logo](tutorial/criando_bd.png)

   * Importando BD
   ![GitHub Logo](tutorial/importando_bd.png)

### ALTERANDO URL
 - [x] Acesse o arquivo ".htaccess" dentro da pasta "public"
   * Escreva o enderecamento com o mesmo nome da pasta da aplicacao
   * RewriteBase /"nome da pasta"/public
   ![GitHub Logo](tutorial/alterando_redirecionamento_public.png)

 - [x] Acesse o arquivo "configuracao.php" dentro da pasta "app"
   * Escreve a URL com o mesmo nome da pasta da aplicacao
   * define('URL', 'http://localhost/"nome da pasta"')
   ![GitHub Logo](tutorial/alterando_url.png)

 - [x] Insira o nome do banco de dados criado
   * Acesse o arquivo "Database.php" dentro da pasta "app/Libraries"
   ![GitHub Logo](tutorial/vinculando_bd.png)

   * Cadastre o Banco de Dados criado
   * private $banco = 'nome do Banco de Dados';
# Webapp em Laravel para um crud simples de usuários.

## Este demo foi disponibilizado no Heroku, no link: [https://aqueous-falls-31762.herokuapp.com/](https://aqueous-falls-31762.herokuapp.com/).

Primeiro temos que configurar o banco de dados Mysql.

```bash
$ mysql -u root -p
```
Insira sua senha do mysql.

Depois criaremos a base de dados para usarmos no nosso webapp.

```sql
CREATE DATABASE simplecrud CHARACTER SET utf8 COLLATE utf8_general_ci;
```
Agora criaremos a tabela users onde guardaremos nossos usuários.

```sql
CREATE TABLE IF NOT EXISTS users (
  id int(10) unsigned NOT NULL AUTO_INCREMENT,
  username varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  password varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  phone varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  name varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  cpf varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  rg varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3;
```

Também é preciso instalar o composer e depois o laravel pra rodar localmente o código.

```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'e115a8dc7871f15d853148a7fbac7da27d6c0030b848d9b3dc09e2a0388afed865e6a3d6b3c0fad45c48e2b5fc1196ae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
sudo mv composer.phar /usr/local/bin/composer
```
Agora baixe o código do projeto para a máquina.

```bash
git clone git@github.com:rafaelescrich/simplecrud.git
```

Dentro da pasta do simplecrud instalar todas a bibliotecas

```bash
composer update
```
Aqui geramos a chave que o Laravel precisa pra cada aplicação

```bash
php artisan key:generate
```
Depois disso criaremos um .env dentro da pasta simplecrud, precisamos das informações para a conexão com o mysql

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simplecrud
DB_USERNAME=root
DB_PASSWORD=
```
Agora só colocar o comando para rodar o servidor de arquivos

```bash
 php artisan serve --port=8080
```

Vá para o navegador e coloque a url http://localhost:8080


Além disso precisamos adicionar alguns usuários para teste.

```sql
INSERT INTO users (id, username, password, email, phone, name, cpf, rg, created_at, updated_at) VALUES
(1, 'isabell.connolly', ')6]1D0zjJm', 'nulla@dictumst.com', '+554889567845', 'Isabell Connolly', '75292077925', '347380931', '2013-06-07 08:13:28', '2013-06-07 08:13:28'),
(2, 'lurline.parr', ')6]1D0zjJm', 'dolor@duis.com', '+554889567845', 'Lurline Parr', '37087103555', '220075955', '2013-06-07 08:13:28', '2013-06-07 08:13:28'),
(3, 'phyliss.morley', ')6]1D0zjJm', 'tempus@eu.com', '+554889567845', 'Phyliss Morley', '90693938919', '540532745', '2013-06-07 08:13:28', '2013-06-07 08:13:28'),
(4, 'micheal.wills', ')6]1D0zjJm', 'orci@pharetra.com', '+554889567845', 'Micheal Wills', '30025579355', '914664645', '2013-06-07 08:13:28', '2013-06-07 08:13:28');
```

Depois é só rodar o servidor de desenvolvimento na pasta do projeto:

```bash
php artisan serve --port=8080
```

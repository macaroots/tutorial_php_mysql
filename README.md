# php_agenda
Tutorial de comandos básicos do MySQL usando PHP + Docker.

Clonar repositório:
```
git clone https://github.com/macaroots/tutorial_php_mysql.git
```

Criar arquivo ```.env``` com as configurações do banco:
```
MYSQL_ROOT_PASSWORD=admin
MYSQL_USER=usuario
MYSQL_PASSWORD=senha
MYSQL_DATABASE=banco
```

Ligar serviços com Docker Compose:
```
docker-compose up -d
```
* ```-d``` de Detach é opcional.
* Talvez seja necesário permissão de super-usuário (```sudo```).

Acessar pelo navegador web:
```
http://localhost
```

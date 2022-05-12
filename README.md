# MySQL + PHP + Docker
Tutorial de comandos básicos do MySQL usando PHP + Docker.

1. Clonar repositório:
```
git clone https://github.com/macaroots/tutorial_php_mysql.git
```

2. Criar arquivo ```.env``` com as configurações do banco:
```
MYSQL_ROOT_PASSWORD=admin
MYSQL_USER=usuario
MYSQL_PASSWORD=senha
MYSQL_DATABASE=banco
```

3. Ligar serviços com Docker Compose:
```
docker-compose up -d
```
* ```-d``` de Detach é opcional.
* Talvez seja necesário permissão de super-usuário (```sudo```).

4. Acessar pelo navegador web:
```
http://localhost
```

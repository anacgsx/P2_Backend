# Trabalho Avaliativo – Backend com PHP, Docker, Laravel e MySQL

Este projeto monta um ambiente completo usando **Docker**, rodando uma aplicação **Laravel** conectada a um banco **MySQL**, incluindo um CRUD completo de **Categorias**.

------------------------------------------------------------------------

## Funcionalidades

-   **Criar categoria**
-   **Listar categorias**
-   **Editar categoria existente**
-   **Excluir categoria**

------------------------------------------------------------------------

## Tecnologias Utilizadas

### **Backend**

-   Laravel **10+**
-   PHP **8.2**
-   MySQL **8**

### **Frontend**

-   Blade Templates
-   HTML5
-   CSS3

### **DevOps**

-   Docker
-   Docker Compose
-   Nginx

------------------------------------------------------------------------

## Pré-requisitos

Antes de iniciar, é necessário ter instalado:

-   **Docker Desktop** 

------------------------------------------------------------------------

## Como Executar o Projeto

### **Clone o repositório**

``` bash
git clone https://github.com/anacgsx/P2_Backend.git
cd laravel-app
```

### **Configure o arquivo `.env`**

O projeto já inclui um `.env` configurado. Verifique os dados do banco:

``` env
DB_CONNECTION=mysql
DB_HOST=laravel_db
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

### **Suba os containers Docker**

``` bash
docker-compose up -d
```

### **Instale as dependências**

``` bash
docker-compose exec app composer install
```

### **Gere a chave da aplicação**

``` bash
docker-compose exec app php artisan key:generate
```

### **Execute as migrations**

``` bash
docker-compose exec app php artisan migrate
```

### **Configure permissões**

``` bash
docker-compose exec app chmod -R 777 storage bootstrap/cache
```

### **Acesse a aplicação**

 http://localhost:8000/categorias


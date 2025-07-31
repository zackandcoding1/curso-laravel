# Curso Laravel - Projeto CRUD

Este repositório contém um projeto simples de CRUD (Create, Read, Update, Delete) desenvolvido com o framework PHP [Laravel](https://laravel.com/), como parte de um curso introdutório à criação de aplicações web com Laravel.

## 🔧 Tecnologias Utilizadas

- PHP >= 8.1  
- Laravel 12  
- Composer  
- MySQL
- Blade

## 📁 Estrutura do Projeto

Este projeto segue a estrutura padrão de uma aplicação Laravel, com os seguintes componentes principais:

- **Model:** `Produto.php` – Representa a entidade de produto  
- **Controller:** `ProdutoController.php` – Contém a lógica do CRUD  
- **Views:** Arquivos Blade em `resources/views/produtos/`  
- **Routes:** Definidas em `routes/web.php`  

## ⚙️ Funcionalidades

- ✅ Listagem de produtos  
- ✅ Cadastro de novos produtos  
- ✅ Edição de produtos existentes  
- ✅ Exclusão de produtos  
- ✅ Validação de dados no backend  
- ✅ Feedback visual com mensagens de sucesso ou erro  

## 🛠️ Como Executar Localmente

### 1. Clone o repositório

```
git clone https://github.com/zackandcoding1/curso-laravel.git
cd curso-laravel
```

### 2. Instale as dependências

```
composer install
```

### 3. Configure o ambiente

Copie o arquivo `.env.example` para `.env`:

```
cp .env.example .env
```

Edite o arquivo `.env` e configure as informações do banco de dados:

```
DB_CONNECTION=mysql  
DB_HOST=127.0.0.1  
DB_PORT=3306  
DB_DATABASE=curso_laravel  
DB_USERNAME=root  
DB_PASSWORD=senha
```

### 4. Gere a chave da aplicação

```
php artisan key:generate
```

### 5. Execute as migrações

```
php artisan migrate
```

### 6. Inicie o servidor local

```
php artisan serve
```

Acesse a aplicação no navegador:  
[http://localhost:8000](http://localhost:8000)

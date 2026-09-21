# Laravel Studies

Projeto de estudos em Laravel com foco em:

- modelagem de usuários
- relacionamento 1:1 com endereços
- migrations
- seeders
- rotas e controllers
- views Blade

## Tecnologias

- PHP 8.3
- Laravel 13
- SQLite

## Estrutura principal

- `app/Models/User.php`
- `app/Models/Address.php`
- `app/Http/Controllers/UserController.php`
- `database/migrations/`
- `database/seeders/`
- `resources/views/users/index.blade.php`
- `routes/web.php`

## Como rodar

```bash
cd studies
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

Acesse:

```text
http://localhost:8000/users
```

## Funcionalidades

- listagem de usuários
- cadastro de usuários
- relacionamento com endereço
- dados iniciais via seed

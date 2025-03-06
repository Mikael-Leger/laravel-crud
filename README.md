# Project [laravel-crud]

Small (S)CRUD project, its purpose is to discover these technologies:
- **Laravel 10.x**
- **Livewire**
- **UnoCSS**

## Prerequisites

Before starting, make sure to start these on your computer:

- **Node.js** (for [npm](https://www.npmjs.com/) usage)
- **PHP** (and [Composer](https://getcomposer.org/))

## Installation

### 1. Clone the repository

Clone this project on your computer using:

```bash
git clone https://github.com/Mikael-Leger/laravel-crud.git
cd laravel-crud
```

### 2. Install frontend dependencies

Install dependencies for Node.js:

```bash
npm install
```

### 3. Install backend dependencies

Install dependencies for PHP:

```bash
composer install
```

## Configurate Database

### 1. Create a database

Use any tool like [Wamp](https://www.wampserver.com/) to host a MySQL Server.
Create a new Database with:

```bash
mysql -u root -p
CREATE DATABASE laravel;
```

### 2. Execute migrations

Execute all migrations needed with:

```bash
php artisan migrate
```

## Start servers

### 1. Launch the frontend development server

Start the frontend server:

```bash
npm run dev
```

### 2. Launch the backend development server

Start the backend server:

```bash
php artisan serve
```

## Use

Open [http://localhost:8000](http://localhost:8000).

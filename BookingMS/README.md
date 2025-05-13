# Laravel Booking Management System

This is a **Booking Management System** built with the Laravel PHP framework. It supports **Admin** and **User dashboards**, user authentication, booking CRUD operations, profile management, and more.

---

## 🚀 Features

* User authentication (login/register)
* Admin & User dashboard views
* Booking management (create, read, update, delete)
* User management (Admin only)
* Profile update
* Clean, modular Blade templates
* Laravel MVC architecture

---

## 🛠️ Tech Stack

| Layer      | Tech Used               |
| ---------- | ----------------------- |
| Backend    | Laravel (PHP Framework) |
| Frontend   | Blade templating engine |
| Database   | MySQL                   |
| Styling    | Bootstrap               |
| Versioning | Git + GitHub            |

---

## 📁 Folder Structure

```bash
├── app/                    # Controllers, Models, Middleware
├── bootstrap/              # Bootstrap files
├── config/                 # Configuration files
├── database/               # Migrations, Seeders
├── public/                 # Public assets (CSS, JS, images)
├── resources/views              # Views (Blade templates)
│   ├── AdminDashboard/
│   ├── UserDashboard/
│   └── Layout/
├── routes/                 # Route definitions (web.php)
├── storage/                # Logs, cache, compiled templates
├── tests/                  # Automated tests
├── artisan                 # Laravel CLI
├── composer.json           # PHP dependencies
├── vite.config.js          # Vite config for asset bundling
├── .env.example            # Example environment variables
└── README.md               # This file
```

---

## 📦 Installation

> ✅ **Requirements**:
>
> * PHP >= 8.1
> * Composer
> * MySQL
> * XAMPP (Windows)

### 🔧 Step-by-Step Guide

1. **Clone the repository**

   ```bash
   git clone https://github.com/ArnavFirke/PHP-codes.git
   cd PHP-codes
   ```

2. **Install PHP dependencies**

   ```bash
   composer install
   composer global require laravel/installer
   ```
   To Create Project
   
   ```bash
    laravel new project_name
   ```
   
4. **Copy the environment file and generate a key**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure the `.env` file**

   * Set your database name, username, and password in the `.env` file.

6. **Run database migrations**

   ```bash
   php artisan migrate
   ```

7. **Serve the application**

   ```bash
   php artisan serve
   ```

Visit `http://127.0.0.1:8000` in your browser to see the application running.

---


## 🙋‍♂️ Author

**Arnav Firke**

* GitHub: [ArnavFirke](https://github.com/ArnavFirke)
* Email: [arnavphirke1234@gmail.com](mailto:arnavphirke1234@gmail.com)

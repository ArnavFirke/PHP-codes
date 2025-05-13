# Laravel Booking Management System

This is a **Booking Management System** built with the Laravel PHP framework. It supports **Admin** and **User dashboards**, user authentication, booking CRUD, profile management, and more.

---

## 🚀 Features

- User authentication (login/register)
- Admin & User dashboard views
- Booking management (create, read, update, delete)
- User management (Admin only)
- Profile update
- Webpage content management (Admin only)
- Clean, modular Blade templates
- Laravel MVC architecture

---

## 🛠️ Tech Stack

| Layer        | Tech Used              |
|--------------|------------------------|
| Backend      | Laravel (PHP Framework)|
| Frontend     | Blade templating engine|
| Database     | MySQL                  |
| Styling      | Bootstrap              |
| Versioning   | Git + GitHub           |

---

## 📁 Folder Structure (Main Parts)

```bash
├── app/                     # Controllers, Models, Middleware
├── database/               # Migrations, Seeders
├── resources/views/        # Blade templates
│   ├── AdminDashboard/
│   ├── UserDashboard/
│   └── Layout/
├── public/                 # Public assets (CSS, JS, images)
├── routes/
│   └── web.php             # Route definitions
├── .env                    # Environment config (not committed)

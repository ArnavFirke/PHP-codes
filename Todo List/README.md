# PHP Todo List Application

A simple **Todo List** web application built with **PHP**, **MySQL**, and **Bootstrap**. Users can add items, mark them as done, and delete them.

---

## 🚀 Features

* Add a new todo item
* Mark items as done (visually strikethrough)
* Delete items
* User feedback alerts for add, done, and delete actions
* Responsive UI using Bootstrap 5

---

## 🛠️ Tech Stack

| Component  | Technology          |
| ---------- | ------------------- |
| Backend    | PHP (procedural)    |
| Database   | MySQL               |
| Frontend   | Bootstrap 5, jQuery |
| Versioning | Git + GitHub        |

---

## 📁 Folder Structure

```bash
├── todo.sql                # SQL script to create `todo` table
├── Todo List.pdf           # Report for todo list project
├── index.php               # Main application and form handler
├── folder.png              # Placeholder image for empty list
└── README.md               # This file
```

---

## 📦 Installation

> ✅ **Requirements**:
>
> * PHP 
> * MySQL 
> * Web server (Apache, Nginx, or built-in PHP server)

### 🔧 Setup Guide

1. **Clone the repository**

   ```bash
   git clone https://github.com/ArnavFirke/PHP-codes.git
   cd PHP-codes/todo-list-directory   # replace with actual folder name
   ```

2. **Import the database**

   1. Create a new database in MySQL, e.g., `todo_list`.
   2. Import `todo.sql`:

      ```bash
      mysql -u root -p todo_list < todo.sql
      ```

3. **Configure database connection**

   * Open `index.php` and update the following variables if needed:

     ```php
     $server   = "localhost";
     $username = "root";
     $password = "";
     $database = "todo_list";
     ```

4. **Serve the application**

   * With built-in PHP server:

     ```bash
     php -S localhost:8000
     ```
   * Or configure your Apache/Nginx to point to this folder.

5. **Access in Browser**

   * Visit `http://localhost:8000` (or your virtual host URL)

---


## 🔐 Usage

* **Add Item**: Enter text in the input and click **Add item**.
* **Mark Done**: Click **Mark as Done** next to an item to toggle strikethrough.
* **Delete Item**: Click **Delete** to remove the item permanently.

---



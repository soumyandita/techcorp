# TechCorp PHP Project

## 📌 Overview

TechCorp is a web-based application developed using **Core PHP** with a complete frontend and backend integration. The project uses a local server environment (**XAMPP**) and includes a MySQL database.

---

## 🛠️ Technologies Used

* **Frontend:** HTML, CSS, JavaScript, Bootstrap
* **Backend:** Core PHP
* **Database:** MySQL
* **API:** REST API
* **Server:** XAMPP

---

## ⚙️ Installation & Setup

Follow these steps to run the project locally:

### 1. Install XAMPP

Download and install XAMPP on your system.

---

### 2. Move Project Files

Copy the project folder and paste it into:

```bash
C:\xampp\htdocs\
```

---

### 3. Start Server

Open XAMPP Control Panel and start:

* Apache
* MySQL

---

### 4. Import Database

1. Open browser and go to:

```bash
http://localhost/phpmyadmin
```

2. Create a new database (e.g., `techcorp`)
3. Click on **Import**
4. Select the file:

```bash
techcorp.sql
```

5. Click **Go**

---

### 5. Configure Database Connection (if needed)

Update your database credentials inside the PHP configuration file:

```php
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbdatabase = "techcorp";
```

---

### 6. Run the Project

Open your browser and go to:

```bash
http://localhost/techcorp
```

---

## 📂 Project Structure

* `/api` → REST API endpoints
* `/js` → JS files
* `/css` → css files
* `techcorp.sql` → Database file

---

## 🚀 Features

* User authentication system
* REST API integration
* Responsive UI using Bootstrap
* Dynamic data handling with PHP & MySQL
* Clean and structured project architecture

---

## ⚠️ Important Notes

* Ensure Apache and MySQL are running before accessing the project
* Import the database (`techcorp.sql`) before running
* Do not expose sensitive credentials in public repositories
* For Admin Login: Username is "admin" and password is "admin123"

---

## 👨‍💻 Author

Soumya

---

## 📄 License

This project is created for educational and learning purposes.

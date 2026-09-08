# Website Layanan Desa

The application provides an online platform for village residents to access public services, submit applications and complaints, manage service queues, and receive notifications. Village administrators can manage residents, administrators, service requests, complaints, and user feedback through an administrative dashboard.

## ✨ Features

### 👤 Village Resident

* User registration and login
* Resident dashboard
* View notifications
* Online service queue management
* Submit village service applications
* View application details and status
* Submit complaints
* View complaint details and status
* Submit feedback about village services

### 🏛️ Village Administrator

* Administrator dashboard
* Manage village administrator accounts
* Manage village residents
* View resident details
* Update resident information
* Manage service applications
* Review application details
* Update application status
* Manage resident complaints
* Review complaint details
* Update complaint status
* View service feedback

### 🌐 Public Pages

* Village landing page
* Village information
* Village news
* Public feedback page
* Login and registration

---

## 🛠️ Tech Stack

| Technology      | Purpose                      |
| --------------- | ---------------------------- |
| PHP 8.1+        | Backend programming language |
| Laravel 10      | Web application framework    |
| MySQL           | Database                     |
| Blade           | Server-side templating       |
| Laravel Sanctum | Authentication/API support   |
| Vite            | Frontend asset bundling      |
| JavaScript      | Frontend functionality       |
| AdminLTE        | Admin dashboard interface    |

---

## 📋 Requirements

Make sure the following software is installed:

* PHP **8.1 or higher**
* Composer
* MySQL
* Node.js and npm
* Git
* Local development environment such as **XAMPP**, **Laragon**, or Laravel Sail

---

## 🚀 Installation

### 1. Clone the repository

```bash
git clone https://github.com/<your-username>/WebsiteLayananDesa.git
cd WebsiteLayananDesa
```

Replace `<your-username>` with the GitHub account that owns the repository.

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install frontend dependencies

```bash
npm install
```

### 4. Configure the environment

Copy the example environment file:

```bash
cp .env.example .env
```

On Windows, you can copy `.env.example` manually and rename it to `.env`.

Configure the database in `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=e_desa
DB_USERNAME=root
DB_PASSWORD=
```

Create the `e_desa` database in MySQL before proceeding.

### 5. Generate the application key

```bash
php artisan key:generate
```

### 6. Run database migrations

```bash
php artisan migrate
```

The project contains migrations for the application's main entities, including:

* Users
* Village service types
* Service queues
* Service applications
* Introduction letters
* Notifications
* Complaints
* Feedback

### 7. Build frontend assets

For development:

```bash
npm run dev
```

For production:

```bash
npm run build
```

### 8. Start the Laravel server

```bash
php artisan serve
```

The application will be available at:

```text
http://127.0.0.1:8000
```

---

## 📁 Project Structure

```text
WebsiteLayananDesa/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Admin/
│   │   │   ├── User/
│   │   │   ├── AuthController.php
│   │   │   ├── DashboardController.php
│   │   │   ├── FeedbackController.php
│   │   │   └── GuestController.php
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   │   ├── Antrian.php
│   │   ├── Feedback.php
│   │   ├── JenisPelayanan.php
│   │   ├── Notifikasi.php
│   │   ├── Pengaduan.php
│   │   ├── SuratPengantar.php
│   │   └── User.php
│   └── Providers/
│
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── public/
│   └── dist/
│
├── resources/
│   └── views/
│       ├── admin/
│       ├── auth/
│       ├── layouts/
│       ├── users/
│       ├── berita.blade.php
│       ├── feedback.blade.php
│       ├── informasi.blade.php
│       └── wellcome.blade.php
│
├── routes/
│   └── web.php
│
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

---

## 🔐 Authentication & Authorization

The application provides separate access levels for residents and administrators.

### Resident

Authenticated residents can access:

```text
/dashboard
/notifikasi
/antrian
/pengajuan
/pengaduan
```

### Administrator

Authenticated administrators can access:

```text
/admin/dashboard
/admin/admin-desa
/admin/warga-desa
/admin/layanan/feedback
/admin/pengajuan
/admin/pengaduan
```

Middleware is used to restrict authenticated routes and distinguish between user and administrative functionality.

---

## 👨‍💻 Development

This project follows the Laravel MVC architecture:

```text
Request
   │
   ▼
Routes
   │
   ▼
Controller
   │
   ├──────────────► Request Validation
   │
   ▼
Model
   │
   ▼
Database
   │
   ▼
Blade View
   │
   ▼
User Interface
```

---

## 👥 Contributors

Developed as a collaborative project for the **Manajemen Proyek Perangkat Lunak (MPPL)** course.

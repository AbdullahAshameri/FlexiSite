<p align="center">
  <a href="#" target="_blank">
    <img src="image/image1.png" width="400">
  </a>
</p>

# Medical Hearing Aid Agency Website (Updated Version of FlexiSite)

<p align="center">
This is the updated version of the project. We improved the interfaces and added new features, including user management controls.
<a href="#"><img src="https://img.shields.io/badge/Project-Updated-brightgreen"></a>
</p>

---

## About the Project
This project is a professional, customizable web platform for a medical hearing aid agency. It manages services, products, articles, and user content effortlessly.

**Project Highlights:**
- Fully responsive website with modern layouts.
- Improved admin dashboard with CRUD operations for articles, products, and users.
- User management system for roles and access control.
- Optimized for accessibility and user experience.

---

## Features
* **Custom Company Info:** Name, logo, and contact details
* **Website Pages:** Home, About, Contact, Services, Products, Articles
* **Admin Dashboard:** Full CRUD for products, articles, categories, and footer content
* **User Management:** Authentication & roles, user access control
* **File Handling:** Uploads, validation, soft deletes
* **Advanced Features:** Pagination, Middleware, Localization (Arabic & English)
* **Flexible Layouts:** Blade templates & components

---

## Technology Stack
| Frontend    | Backend       | Database | Admin Template |
| ----------- | ------------- | -------- | -------------- |
| Bootstrap 5 | PHP Laravel 9 | MySQL    | AdminLTE       |

---

## Screenshots
- **Admin Dashboard**
![Dashboard](image/dashboard.png)
- **Home**
![Article 1](image/image1.png)
- **Products**
![Article 2](image/image2.png)
- **Services**
![Article 3](image/image3.png)
- **Articles**
![Article 4](image/image4.png)


---

## Installation

1. **Clone the repository**
```bash
git clone https://github.com/AbdullahAshameri/FlexiSite.git
cd FlexiSite

# 2️ Install PHP dependencies via Composer
composer install

# 3️ Copy the environment file and configure it
cp .env.example .env

# 4️ Generate the Laravel application key
php artisan key:generate

# 6️ Compile CSS and JS assets
npm run dev

# 7️ Set up the database
php artisan migrate 
php artisan db:seed

# 8️ Start the Laravel development server
php artisan serve
# Open your browser at http://127.0.0.1:8000



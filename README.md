

````markdown
# 🎓 RayhanSch

RayhanSch is a **modern, responsive, and user-friendly educational platform** for showcasing courses, events, and academic workshops.  
Built with **Laravel 12**, **Jetstream (Livewire)**, and **Tailwind CSS**, it delivers a seamless experience with clean UI and dynamic database-driven content.

This project is fully optimized for performance, accessibility, and responsiveness across all devices.



## 📸 Screenshots

| Desktop View                                            | Mobile View                                           |
| ------------------------------------------------------- | ----------------------------------------------------- |
| ![Desktop Screenshot](./public/screenshots/desktop.jpg) | ![Mobile Screenshot](./public/screenshots/mobile.jpg) |




## 🛠 Built With

- [Laravel](https://laravel.com/) – The PHP Framework for Web Artisans  
- [Jetstream](https://jetstream.laravel.com/) – Authentication scaffolding (Livewire stack)  
- [Livewire](https://livewire.laravel.com/) – Full-stack framework for dynamic interfaces  
- [Tailwind CSS](https://tailwindcss.com/) – Utility-first CSS framework  
- [Blade](https://laravel.com/docs/blade) – Laravel’s powerful templating engine  
- [MySQL](https://www.mysql.com/) – Relational database for content storage  
- [IonIcons](https://ionic.io/ionicons) – Open-source SVG icons  
- [Vite](https://vitejs.dev/) – Next-gen frontend build tool  

---

## ✨ Features

- **Responsive Design** – Fully responsive layout for all screen sizes  
- **User Authentication** – Secure login/register via Jetstream  
- **Dynamic Content** – Courses, categories & events loaded from database  
- **Image Management** – Images managed through DB with clean paths  
- **Interactive UI** – Search, wishlists, and smooth page flow  
- **Newsletter Subscription** – Simple opt-in form  
- **SEO Optimized** – Structured content and preloaded assets  

---

## 📦 Getting Started

### 1️⃣ Clone the repository

```bash
git clone https://github.com/testfordb/rayhan-sch-2.git
cd rayhan-sch-2
````

### 2️⃣ Install dependencies

```bash
composer install
npm install
```

### 3️⃣ Configure environment

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=rayhan_sch_2
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Set up the database

```sql
CREATE DATABASE rayhan_sch;
```

```bash
php artisan migrate
php artisan db:seed
```

### 5️⃣ Copy assets

Place the following in `public/assets/images/`:

* `favicon.svg`, `hero-bg.jpg`, `hero-banner.png`, `hero-abs-1.png`, `hero-abs-2.png`
* `about-banner.jpg`, `about-abs-1.jpg`, `about-abs-2.jpg`
* `about-icon-1.png`, `about-icon-2.png`, `about-icon-3.png`
* `course-bg.jpg`, `course-1.jpg` to `course-6.jpg`
* `cta-bg.png`, `cta-banner.jpg`
* `event-1.jpg`, `event-2.jpg`, `event-3.jpg`
* `newsletter-bg.jpg`

### 6️⃣ Build frontend assets

```bash
npm run build
```

### 7️⃣ Run development server

```bash
php artisan serve
```

Visit 👉 [http://localhost:8000](http://localhost:8000)



## 🚀 Deployment

You can deploy on **Forge**, **Vapor**, **Heroku**, or any PHP-compatible server:

1. **Install** PHP, Composer, Node.js, and MySQL
2. **Clone** repo and run `composer install`, `npm install`, `npm run build`
3. **Set up `.env`** and `php artisan key:generate`
4. **Run migrations and seeders**:

```bash
php artisan migrate --force
php artisan db:seed --force
```

5. Point your **web server root to `public/`**



## 📚 Learn More

* [Laravel Docs](https://laravel.com/docs)
* [Jetstream Docs](https://jetstream.laravel.com)
* [Livewire Docs](https://livewire.laravel.com/docs)
* [Tailwind CSS Docs](https://tailwindcss.com/docs)
* [MySQL Docs](https://dev.mysql.com/doc/)



## 👨‍💻 Author

**testfordb** – [GitHub](https://github.com/testfordb)



## 📜 License

This project is licensed under the **MIT License**.
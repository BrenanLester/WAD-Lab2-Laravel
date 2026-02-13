# Laboratory 2: Laravel Pages, Controllers, and Routes

## 📌 Project Description
This is a simple personal portfolio web application built using the **Laravel framework**.  
The project demonstrates the use of Laravel’s **MVC architecture**, including routes, controllers, and Blade templates.

The application consists of:
- One main portfolio page
- Two additional sub-pages
- Separate controllers for each page
- Blade templates for rendering the user interface

This project was created as part of an academic requirement.

---

## 🖥️ Screenshots / Page Contents

### 🏠 Main Portfolio Page
**URL:** `/`

**Content:**
- Welcome message
- Short personal introduction
- Navigation links to About Me and Projects pages

*(Screenshot here)*
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/3c4a911d-2ec6-42fd-a4ea-7909b0dc64bd" />

---

### 👤 About Me Page
**URL:** `/about`

**Content:**
- Personal background
- Interests and goals
- Link back to the main portfolio page

*(Screenshot here)*
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/9c3c12bb-aa53-445a-a54a-8b3c4ba10a1e" />

---

### 📂 Projects / Hobbies Page
**URL:** `/projects`

**Content:**
- List of projects, hobbies, or skills
- Link back to the main portfolio page

*(Screenshot Here)*
<img width="1920" height="1020" alt="image" src="https://github.com/user-attachments/assets/ef8f1016-7988-4865-9947-6edc0068e627" />

---

## ⚙️ How to Run the Project Locally

Follow these steps to run the project on your local machine:

1. **Clone the repository**
git clone <your-repository-link>

2. **Navigate to the project folder**
cd laravel-app

3. **Install Dependencies**
composer install

4. **Install Node Dependencies (Required for Tailwind CSS)**
npm install

5. **Create environment file**
cp .env.example .env

6. **Run Tailwind CSS (Vite Development Server)**
npm run dev

7. **Generate application key**
php artisan key:generate

8. **Run the Laravel development server**
php artisan serve

9. **Open the application in your browser**
http://127.0.0.1:8000    

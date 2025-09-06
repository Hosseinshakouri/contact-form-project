# 📝 Contact Form Project

A simple **PHP & MySQL Contact Form** project with an admin panel.  
This project is designed for **practice and learning purposes**.

---

## 🚀 Features

- **Contact Form**: Users can submit their Name, Email, Phone, and Message.  
- **Admin Panel**: View all submitted messages in a simple table.  
- **Lightweight & Simple**: No login required for admin panel (practice project).

---

## 🗂 Project Structure

loginpage/
│
├─ index.php # Main contact form page
├─ contact_list.php # Admin panel to view messages
├─ css/
│ └─ style.css # Styles for the form
├─ fonts/ # Material Design Iconic Font
├─ images/ # Any images used in the project
└─ README.md # Project documentation

yaml
Copy code

---

## 🛠 Database Setup

1. Create a database named `contact` in your MySQL server (phpMyAdmin or terminal):

```sql
CREATE DATABASE contact;
Create the table:

sql
Copy code
CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    mobile VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL
);
Make sure your index.php database connection matches your credentials:

php
Copy code
$conn = new mysqli("localhost", "root", "", "contact");
⚡ Usage
Place the project folder in your XAMPP htdocs directory.

Open http://localhost/loginpage/ in your browser.

Fill out the contact form to test.

Open http://localhost/loginpage/contact_list.php to view submitted messages.

📌 Notes
This is a practice project.

No authentication is implemented in the admin panel.

You can further style the admin panel to match the contact form.

Made with ❤️ by Hossein Shakouri

yaml
Copy code

---

حالا کافیه:  

1. این متن رو **در یک فایل به اسم `README.md`** ذخیره کنی  
2. دستورات Git رو اجرا کنی تا Push بشه:  

```bash
git add README.md
git commit -m "Update README.md with nice formatting"
git push origin main

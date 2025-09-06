This template was made by Hossein Shakouri (https://github.com/Hosseinshakouri/Hosseinshakouri)
Please visit our website for more awesome templates, themes and tools. 



# Contact Form Project

This is a simple **PHP & MySQL contact form project** with an admin panel.  
It is designed for practice purposes and includes:

- **Contact Form**: Users can submit their Name, Email, Phone, and Message.
- **Admin Panel**: View all submitted messages in a simple table. No login required (for practice).

---

## Project Structure

loginpage/
│
├─ index.php # Main contact form page
├─ contact_list.php # Admin panel to view messages
├─ css/
│ └─ style.css # Styles for the form
├─ fonts/ # Material Design Iconic Font
└─ ... # Other project files

yaml
Copy code

---

## Database Setup

1. Create a database named `contact` in your MySQL server (via phpMyAdmin or terminal):

```sql
CREATE DATABASE contact;
Create a table contact:

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
Usage
Place the project folder in your XAMPP htdocs directory.

Open http://localhost/loginpage/ in your browser.

Fill out the contact form to test.

Open http://localhost/loginpage/contact_list.php to view submitted messages.

Notes
This project is for learning and practice purposes.

No authentication is implemented in the admin panel.

You can style the admin panel further to match the contact form.


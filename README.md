# 🎓 Student Management System - PHP & MySQL

This is a simple student registration and management web application built with **PHP**, **MySQL**, **HTML/CSS**, and runs on **XAMPP**. It allows a private campus or institute to register, update, search, and delete student records through a clean admin interface.

---

## 🚀 Features

✅ Admin login (username & password)  
✅ Register students with details (NIC, Name, Gender, etc.)  
✅ View and search student by NIC  
✅ Update student details using NIC  
✅ Delete student records  
✅ Responsive task bar on every page  
✅ MySQL database integration  
✅ Clean and user-friendly UI (CSS / Bootstrap)  

---

## 🛠️ Technologies Used

- **PHP** (server-side scripting)
- **MySQL** (database)
- **HTML5/CSS3** (frontend)
- **Bootstrap 5** (optional UI framework)
- **XAMPP** (Apache, PHP, MySQL)

---

## 🧪 How to Run (Locally)

1. ✅ Install [XAMPP](https://www.apachefriends.org/index.html)  
2. ✅ Place the project folder in `C:\xampp\htdocs\student_project`
3. ✅ Start **Apache** and **MySQL** via XAMPP Control Panel
4. ✅ Open your browser: `http://localhost/student_project/index.php`
5. ✅ Create the database:
   - Open: `http://localhost/phpmyadmin`
   - Create DB: `student_system`
   - Import or run this SQL:

```sql
CREATE TABLE students (
    nic VARCHAR(12) PRIMARY KEY,
    name VARCHAR(100),
    gender VARCHAR(10),
    address VARCHAR(255),
    contact_number VARCHAR(15),
    email VARCHAR(100),
    course VARCHAR(100)
);

CREATE TABLE admin (
    username VARCHAR(50),
    password VARCHAR(50)
);


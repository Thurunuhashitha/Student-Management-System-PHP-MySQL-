# 🎓 Student Management System — PHP, MySQL & Bootstrap

A web-based application for managing student records at a private campus or institute. Built with **PHP**, **MySQL**, and styled using **Bootstrap 5** and **Font Awesome**, this system includes user-friendly pages for registration, searching, updating, and deleting student information — all accessible via a responsive navigation bar.

---

## 🚀 Features

- 🔐 Admin login with session management  
- 👨‍🎓 Student registration form  
- 🔍 Search student by NIC  
- ✏️ Update student details  
- 🗑️ Delete student records  
- 📋 Responsive navigation bar (`navbar.php`)  
- 🎨 Bootstrap-styled UI with card layouts  
- 💡 Font Awesome icons for enhanced UX  
- ✅ Clean and modern look  
- 🛡️ Built for use on **XAMPP (Apache/MySQL)**

---

## 🛠️ Technologies Used

| Tech        | Purpose                      |
|-------------|-------------------------------|
| PHP         | Server-side scripting         |
| MySQL       | Relational database           |
| HTML & CSS  | Page structure & custom style |
| Bootstrap 5 | Responsive frontend framework |
| Font Awesome| UI icons                      |
| XAMPP       | Localhost server environment  |

---

## 📁 Folder Structure

student_project/
│
├── index.php # Admin login page
├── dashboard.php # Home/dashboard page
├── register.php # Register new student
├── search.php # Search by NIC
├── update.php # Update student info
├── delete.php # Delete student
├── logout.php # End session
├── navbar.php # Shared task bar (included on all pages)
├── db.php # Database connection config
├── css/
│ └── style.css # Optional custom styles
└── README.md # Project overview


---

## 🧪 How to Run the Project

1. ✅ Install [XAMPP](https://www.apachefriends.org/)
2. ✅ Place this project in:
3. ✅ Start **Apache** and **MySQL** via XAMPP Control Panel
4. ✅ Open your browser and go to:

---

## 🗃️ Database Setup

1. Go to `http://localhost/phpmyadmin`
2. Create a database named: `student_system`
3. Run the following SQL:

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


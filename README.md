# 📅 Event Management System

A responsive, robust PHP-based Event Management System designed to handle client registrations and provide organizers with a comprehensive administrative dashboard. 

This project utilizes Role-Based Access Control (RBAC) to ensure that regular users can only book events, while organizers have full CRUD (Create, Read, Update, Delete) capabilities.

---

## ✨ Features
* **Role-Based Access Control (RBAC):** Secure login system strictly separating `admin` and `client` privileges.
* **Client Portal:** Users can seamlessly create an account, log in, and register for upcoming events.
* **Organizer Dashboard:** A dedicated, protected panel where admins can view all registrations, update attendee information, and delete records.
* **Persistent Storage:** Fully functional MySQL database integration handling user credentials and event data safely.

---

## 📸 Screenshots

**1. Home Page:**
![Home](https://via.placeholder.com/800x400?text=Insert+Home+Screenshot+Here)

**2. Client Registration:**
![Register Client](https://via.placeholder.com/800x400?text=Insert+Register+Client+Screenshot+Here)

**3. Client Login:**
![Login Client](https://via.placeholder.com/800x400?text=Insert+Login+Client+Screenshot+Here)

**4. Register Event (Booking Form):**
![Register Event](https://via.placeholder.com/800x400?text=Insert+Register+Event+Screenshot+Here)

**5. Admin Login:**
![Admin Login](https://via.placeholder.com/800x400?text=Insert+Admin+Login+Screenshot+Here)

**6. Organizer Dashboard (Admin Panel):**
![Organizer Dashboard](https://via.placeholder.com/800x400?text=Insert+Organizer+Dashboard+Screenshot+Here)

---

## 🛠️ Technologies Used
* **Frontend:** HTML5, CSS3
* **Backend:** PHP (Core)
* **Database:** MySQL
* **Local Environment:** XAMPP (Apache & MySQL)

---

## 🚀 Installation & Local Setup

To run this project locally on your machine, follow these steps:

### 1. Prerequisites
Ensure you have [XAMPP](https://www.apachefriends.org/index.html) installed on your computer.

### 2. Clone the Repository
Clone this repository into your XAMPP `htdocs` directory:
```bash
cd C:\xampp\htdocs
git clone [https://github.com/YourUsername/YourRepositoryName.git](https://github.com/YourUsername/YourRepositoryName.git) AJKProject
```

### 3. Start the Server
1. Open the XAMPP Control Panel.
2. Start the Apache and MySQL modules.

### 4. Database Configuration
1. Open your browser and navigate to `http://localhost/phpmyadmin`.
2. Create a new database named exactly: **Assignment3**.
3. Go to the SQL tab and run the following query to set up the authentication table and the default admin account:
```sql
CREATE TABLE login (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255),
    password VARCHAR(255),
    role VARCHAR(50)
);

INSERT INTO login (fname, password, role) VALUES ('admin', '12345', 'admin');
```

4. Next, open a new browser tab and run the table creation script for events:
`http://localhost/AJKProject/CreateTable.php`

### 5. Launch the Application
Open your browser and navigate to:
`http://localhost/AJKProject/ajk.html`

---

## 🔐 Default Credentials
To access the Organizer Dashboard (`Admin.html` -> `Organizer.php`), use the following default credentials:

* **Username:** `admin`
* **Password:** `12345`

*To test the client side, please register a new account via the frontend registration page.*

---

## 👨‍💻 Author
Developed by **Nayab Nasir** - Feel free to connect or reach out with any questions!

# Sparks-Foundation-Internship-Tasks(basic banking website)
# Banking Website 💰

A secure and user-friendly **Banking Website** that allows users to perform essential banking operations like fund transfers, balance checks, and transaction history tracking.

![Banking Website Screenshot](assets/screenshot.png)

## 🚀 Features
- 💳 **Fund Transfers** – Transfer money between accounts safely.
- 📊 **Transaction History** – View and manage past transactions.
- 📌 **Balance Check** – Instantly check your account balance.
- 📱 **Responsive Design** – Works seamlessly on all devices.
- 📈 **Dashboard Analytics** – Track spending and income trends.
- 🏦 **Multiple Account Support** – Manage multiple bank accounts in one place.

## 🛠️ Tech Stack
- **Frontend:** HTML, CSS, JavaScript (Bootstrap for styling)
- **Backend:** PHP
- **Database:** MySQL

## 📷 Screenshots
![Login Page](assets/login.png)
![Dashboard](assets/dashboard.png)
![Transaction History](assets/transactions.png)

## 🏗️ Installation & Setup
### 1️⃣ Clone the Repository
```bash
git clone https://github.com/ritikkumar85/Sparks-Foundation-Internship-Tasks.git
cd Sparks-Foundation-Internship-Tasks
```

### 2️⃣ Setup Database
1. Open **phpMyAdmin**
2. Create a new database: `banking_db`
3. Import the provided SQL file (`banking_db.sql`)

### 3️⃣ Configure Backend
1. Open `config.php`
2. Update database credentials:
   ```php
   define('DB_HOST', 'localhost');
   define('DB_USER', 'root');
   define('DB_PASS', 'your_password');
   define('DB_NAME', 'banking_db');
   ```

### 4️⃣ Run the Project Locally
- Start a local server (XAMPP, WAMP, or LAMP)
- Place files inside the `htdocs` folder
- Open `http://localhost/Sparks-Foundation-Internship-Tasks/` in your browser

## 🛡️ Security Features
- 🔑 **Password Encryption** – Uses hashing for secure storage.
- 🔄 **Session Management** – Prevents unauthorized access.
- 🔒 **SQL Injection Protection** – Secure database queries.
- 📜 **User Role Management** – Assigns different permissions to users.

## 🤝 Contributing
1. Fork the repo & create a new branch (`feature-name`)
2. Make your changes and commit (`git commit -m 'Add feature'`)
3. Push to GitHub and open a PR

## 📜 License
This project is **open-source** and available under the MIT License.

---
✨ **Developed by Ritik Kumar** ✨
#TSF Grip task

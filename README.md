# 💊 PharmaDex — Pharmacy Management System

**PharmaDex** is a web-based **Pharmacy Management System** designed to help pharmacies manage medicines, inventory, sales, purchases, suppliers, customers, employees, expenses, and daily pharmacy operations from a centralized system.

The system follows an **Admin + Staff workflow**, where staff can submit pharmacy records and administrators can review, approve, and manage those records.

---

## 🚀 Features

### 🔐 Authentication & Authorization

* Secure login system
* Admin and Staff roles
* Role-based access control
* Separate dashboards for different users

### 📊 Admin Dashboard

* Total medicines
* Medicine stock overview
* Today's sales
* Previous 7-day sales
* Previous 30-day sales
* Total profit
* Low-stock notifications
* Pending staff submissions
* Pharmacy activity overview

### 💊 Medicine Management

* Add medicines
* Update medicines
* Delete medicines
* View medicine details
* Manage medicine categories
* Manage pharmaceutical companies
* Track batch numbers
* Track expiry dates
* Monitor medicine stock

### 📦 Inventory Management

PharmaDex allows pharmacy staff and administrators to manage:

* Stock received
* Medicine sold
* Damaged medicines
* Expired medicines
* Returned medicines
* Medicine quantities
* Batch information
* Stock levels

### 💰 Sales Management

* Record medicine sales
* Track quantity sold
* Store customer information
* Track batch numbers
* Calculate sales
* Maintain sales history

### 🛒 Purchase Management

* Record medicine purchases
* Manage suppliers
* Track purchased medicines
* Maintain purchase history
* Monitor incoming stock

### 👨‍⚕️ Supplier Management

* Add suppliers
* Update supplier information
* View supplier records
* Track supplier-related purchases

### 👥 Customer Management

* Add customers
* Maintain customer records
* Track customer-related sales

### 👨‍💼 Employee Management

* Manage pharmacy employees
* Maintain employee information
* Assign roles and responsibilities

### 💸 Expense Management

* Record pharmacy expenses
* Track operational costs
* Maintain expense history

### 🔔 Notification System

PharmaDex can notify administrators about important events such as:

* Low medicine stock
* Pending staff submissions
* Other important pharmacy activities

### 📈 Reports

The system is designed to provide reports for:

* Sales
* Purchases
* Stock
* Expenses
* Profit
* Medicine activity

### 📝 Activity Logs

Important system activities can be recorded so administrators can monitor actions performed inside the system.

---

# 🔄 System Workflow

PharmaDex uses a centralized approval workflow.

```text
              ┌───────────────┐
              │     STAFF     │
              └───────┬───────┘
                      │
                      ▼
          ┌──────────────────────┐
          │ Submit Pharmacy Data │
          └──────────┬───────────┘
                     │
                     ▼
              ┌─────────────┐
              │    ADMIN    │
              └──────┬──────┘
                     │
              Review & Approve
                     │
                     ▼
          ┌──────────────────────┐
          │ Central Pharmacy DB  │
          └──────────┬───────────┘
                     │
                     ▼
        ┌─────────────────────────┐
        │ Stock / Sales / Reports │
        └─────────────────────────┘
```

For example, when a staff member records a medicine sale:

1. Staff enters the medicine sale information.
2. The record is submitted to the administrator.
3. Administrator reviews the submission.
4. Administrator approves the record.
5. The central pharmacy records are updated.
6. Stock and sales information can then be reflected throughout the system.

---

# 🛠️ Technology Stack

### Backend

* **PHP**
* **Laravel**

### Frontend

* **HTML5**
* **CSS3**
* **JavaScript**
* **Blade Templates**

### Database

* **MySQL**

### Development Tools

* XAMPP
* Composer
* Git / GitHub

---

# 📁 Project Structure

The project follows the Laravel MVC architecture.

```text
PharmaDex/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── AuthController.php
│   │       ├── DashboardController.php
│   │       ├── MedicineController.php
│   │       ├── CategoryController.php
│   │       ├── CompanyController.php
│   │       ├── BatchController.php
│   │       ├── StockController.php
│   │       ├── SaleController.php
│   │       ├── PurchaseController.php
│   │       ├── SupplierController.php
│   │       ├── CustomerController.php
│   │       ├── ExpenseController.php
│   │       ├── EmployeeController.php
│   │       ├── NotificationController.php
│   │       ├── ReportController.php
│   │       └── ActivityLogController.php
│   │
│   └── Models/
│
├── database/
│   └── migrations/
│
├── resources/
│   └── views/
│       ├── Admin/
│       ├── Staff/
│       ├── Auth/
│       └── layouts/
│
├── routes/
│   └── web.php
│
├── public/
│
├── storage/
│
├── .env
├── artisan
├── composer.json
└── README.md
```

---

# ⚙️ Installation

## 1. Clone the Repository

```bash
git clone https://github.com/your-username/pharmadex.git
```

Move into the project directory:

```bash
cd pharmadex
```

---

## 2. Install Dependencies

Install PHP/Laravel dependencies:

```bash
composer install
```

If the project uses frontend dependencies:

```bash
npm install
```

---

## 3. Configure Environment

Create a `.env` file:

```bash
cp .env.example .env
```

For Windows, you can also manually copy `.env.example` and rename it to:

```text
.env
```

---

## 4. Generate Application Key

```bash
php artisan key:generate
```

---

# 🗄️ Database Setup

Create a MySQL database named:

```text
pharmadex
```

Then configure your `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pharmadex
DB_USERNAME=root
DB_PASSWORD=
```

Update the username and password according to your local MySQL configuration.

---

## 5. Run Migrations

```bash
php artisan migrate
```

If the project contains seeders:

```bash
php artisan db:seed
```

Or run both:

```bash
php artisan migrate --seed
```

---

# ▶️ Running the Application

Start the Laravel development server:

```bash
php artisan serve
```

Then open:

```text
http://127.0.0.1:8000
```

---

# 🖥️ Staff Operations

Staff members can submit different pharmacy records through the staff panel.

### Medicine Sold

```text
Medicine Name
Batch Number
Customer Name
Quantity Sold
```

### Stock Received

```text
Medicine
Batch
Quantity
Supplier
Purchase Information
```

### Damaged Medicine

Staff can report medicines that have been damaged.

### Expired Medicine

Staff can report medicines that have reached their expiry date.

### Medicine Return

Staff can submit medicine return information for administrator approval.

---

# 👑 Admin Operations

Administrators have centralized control over the pharmacy system.

The Admin panel can be used to:

* Review staff submissions
* Approve pharmacy records
* Manage medicines
* Manage categories
* Manage companies
* Manage batches
* Manage inventory
* Manage sales
* Manage purchases
* Manage suppliers
* Manage customers
* Manage employees
* Manage expenses
* View notifications
* Generate reports
* Monitor system activity

---

# 📊 Dashboard Overview

The PharmaDex dashboard is designed to provide a quick overview of pharmacy performance.

```text
┌──────────────────────────────────────────────┐
│                  PHARMADEX                   │
├───────────────┬──────────────┬───────────────┤
│   Medicines   │ Today's Sale │    Profit     │
├───────────────┼──────────────┼───────────────┤
│   1,250       │   Rs. 45,000 │   Rs. 12,500  │
├───────────────┴──────────────┴───────────────┤
│                                              │
│              Sales Overview                  │
│                                              │
├──────────────────────────────────────────────┤
│ ⚠ Low Stock Medicines                        │
│                                              │
│ 🔔 Pending Staff Submissions                  │
│                                              │
└──────────────────────────────────────────────┘
```

---

# 🔒 Security

PharmaDex is designed around role-based access so that administrative operations are separated from staff operations.

Recommended production practices include:

* Strong passwords
* Environment-based configuration
* CSRF protection
* Input validation
* Authorization checks
* Secure database credentials
* Regular database backups

---

# 🧪 Development

To run the project during development:

```bash
php artisan serve
```

For frontend development:

```bash
npm run dev
```

---

# 🗺️ Future Improvements

Planned or possible future improvements include:

* 🧾 Invoice generation
* 🖨️ Receipt printing
* 📱 Responsive mobile interface
* 📊 Advanced analytics
* 📦 Barcode scanning
* 💳 Multiple payment methods
* 🔔 Real-time notifications
* 📧 Email notifications
* 📱 SMS notifications
* 📄 PDF reports
* 📈 Advanced profit analytics
* ☁️ Cloud deployment
* 💾 Automated database backups
* 🔐 Two-factor authentication

---

# 🎯 Project Goal

The main goal of **PharmaDex** is to create a centralized digital system that simplifies pharmacy operations and reduces the need for manual record keeping.

Instead of maintaining separate records for medicines, sales, purchases, stock, suppliers, expenses, and staff submissions, PharmaDex brings these operations together into one management system.

---

# 👨‍💻 Developer

**Abdul Rafay**

Software Engineering / Web Development Project

---

# 📜 License

This project is developed for educational and portfolio purposes.

Add an appropriate open-source license if you plan to distribute the project publicly.

---

## ⭐ Support

If you find PharmaDex useful, consider giving the repository a ⭐ on GitHub.

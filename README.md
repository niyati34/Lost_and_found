# Lost and Found Information System

[![License](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![PHP Version](https://img.shields.io/badge/PHP-7.4%2B-blue.svg)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-5.7%2B-orange.svg)](https://mysql.com)

**Developed by:** Niyati

A comprehensive web-based Lost and Found Information System designed to streamline the management of lost and found items for organizations, schools, and public facilities. The system features a dual-interface approach with separate modules for public users and administrative staff.

## 🏗️ System Architecture

The Lost and Found Information System is built with a modular architecture comprising two main components:

### 🔐 Management Portal
A secure administrative interface accessible only to authorized personnel with role-based permissions:
- **System Administrators:** Full access to all features and system configuration
- **Staff Members:** Limited access with specific operational permissions
- **Dynamic Content Management:** Real-time updates to public-facing content

### 🌐 Public Portal
An intuitive public interface for community interaction:
- Browse published unclaimed items with advanced filtering
- Submit found items for administrative review
- Send inquiries and feedback through integrated contact forms
- Responsive design optimized for all device types

## ✨ Core Features

### 📊 Administrative Dashboard
- **Secure Authentication System**
  - User login/logout with session management
  - Role-based access control
  - Account security features

- **Comprehensive Dashboard**
  - Real-time statistics and analytics
  - System overview with key metrics
  - Interactive data visualizations

- **Category Management**
  - Create and organize item categories
  - Hierarchical category structure
  - Bulk category operations
  - Category-based reporting

- **Item Management**
  - Complete item lifecycle management
  - Image upload and gallery management
  - Item status tracking (Found/Claimed/Archived)
  - Advanced search and filtering
  - Bulk item operations

- **User Administration**
  - User account management
  - Role assignment and permissions
  - User activity monitoring
  - Account verification system

- **Communication Hub**
  - Inbox for public inquiries
  - Message categorization and response tracking
  - Automated notification system
  - Communication templates

- **Content Management**
  - Dynamic page content editing
  - Media management system
  - SEO optimization tools
  - Multi-language support preparation

### 🌍 Public Interface
- **Item Discovery**
  - Browse all published lost and found items
  - Advanced filtering by category, date, location
  - Search functionality with keyword matching
  - Item detail pages with high-resolution images

- **Community Engagement**
  - Submit found items with detailed descriptions
  - Upload multiple images per item
  - Contact form for inquiries
  - Claim request system

- **Information Pages**
  - Dynamic "About Us" content
  - Contact information and location details
  - FAQ section
  - Terms of service and privacy policy

## 🛠️ Technical Specifications

### **Backend Technologies**
- **PHP 7.4+** - Server-side scripting
- **MySQL 5.7+** - Database management
- **PDO/MySQLi** - Database abstraction layer

### **Frontend Technologies**
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with Bootstrap framework
- **JavaScript (ES6+)** - Interactive functionality
- **jQuery** - DOM manipulation and AJAX
- **Bootstrap 5** - Responsive design framework

### **Additional Features**
- **Security:** Input validation, SQL injection prevention, XSS protection
- **Performance:** Optimized queries, image compression, caching strategies
- **Accessibility:** WCAG 2.1 compliant design
- **Mobile-First:** Responsive design for all screen sizes

## 🚀 Installation Guide

### **Prerequisites**
- Local web server (XAMPP, WAMP, LAMP, or MAMP)
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web browser (Chrome, Firefox, Safari, Edge)

### **Step-by-Step Installation**

1. **Setup Web Server**
   ```bash
   # Download and install XAMPP from https://www.apachefriends.org/
   # Start Apache and MySQL services
   ```

2. **Clone or Download Project**
   ```bash
   git clone https://github.com/niyati34/Lost_and_found.git
   # Or download ZIP file and extract
   ```

3. **Configure Project Location**
   ```bash
   # Copy project folder to your web server's document root
   # For XAMPP: C:\xampp\htdocs\lost-and-found\
   # For LAMP: /var/www/html/lost-and-found/
   ```

4. **Database Setup**
   ```sql
   -- Open PHPMyAdmin (http://localhost/phpmyadmin)
   -- Create new database: lfis_db
   -- Import database/lfis_db.sql file
   ```

5. **Configuration**
   ```php
   // Copy config.local.php.sample to config.local.php
   // Update database credentials if different from defaults:
   define('DB_HOST', '127.0.0.1');
   define('DB_USER', 'root');
   define('DB_PASS', '');
   define('DB_NAME', 'lfis_db');
   ```

6. **Access Application**
   ```
   Public Site: http://localhost/lost-and-found/
   Admin Panel: http://localhost/lost-and-found/admin/
   ```

### **Default Admin Credentials**
```
Username: admin
Password: admin123
```
⚠️ **Important:** Change default credentials immediately after first login.

## 📁 Project Structure

```
lost-and-found/
├── admin/                  # Administrative interface
│   ├── categories/         # Category management
│   ├── items/             # Item management
│   ├── users/             # User administration
│   ├── inquiries/         # Message management
│   └── inc/               # Admin includes
├── assets/                # Static resources
│   ├── css/               # Stylesheets
│   ├── js/                # JavaScript files
│   ├── img/               # Images and icons
│   └── vendor/            # Third-party libraries
├── classes/               # PHP classes
│   ├── DBConnection.php   # Database connection
│   ├── SystemSettings.php # System configuration
│   └── Master.php         # Core functionality
├── database/              # Database files
│   └── lfis_db.sql       # Database schema and data
├── inc/                   # Shared includes
├── items/                 # Public item pages
├── pages/                 # Static content pages
├── uploads/               # User uploaded files
├── config.php             # Main configuration
├── initialize.php         # Bootstrap file
└── index.php             # Main entry point
```

## 🔧 Configuration Options

### **Environment Configuration**
Create `config.local.php` for environment-specific settings:

```php
<?php
// Database Configuration
define('DB_HOST', 'your-host');
define('DB_USER', 'your-username');
define('DB_PASS', 'your-password');
define('DB_NAME', 'your-database');

// Application URL
define('base_url', 'http://your-domain.com/lost-and-found/');

// File Upload Settings
define('MAX_FILE_SIZE', 5242880); // 5MB
define('ALLOWED_EXTENSIONS', ['jpg', 'jpeg', 'png', 'gif']);
?>
```

## 📱 Browser Compatibility

| Browser | Version | Status |
|---------|---------|--------|
| Chrome  | 70+     | ✅ Fully Supported |
| Firefox | 65+     | ✅ Fully Supported |
| Safari  | 12+     | ✅ Fully Supported |
| Edge    | 79+     | ✅ Fully Supported |
| IE      | 11      | ⚠️ Limited Support |

## 🤝 Contributing

Contributions are welcome! Please follow these guidelines:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## 👨‍💻 Developer

**Niyati**
- GitHub: [@niyati34](https://github.com/niyati34)

## 🐛 Bug Reports & Feature Requests

If you encounter any bugs or have feature requests, please create an issue on the GitHub repository with detailed information.

---

*Built with ❤️ by Niyati*

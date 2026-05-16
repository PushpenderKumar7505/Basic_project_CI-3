<div align="center">

<img src="https://img.icons8.com/fluency/100/source-code.png" alt="CodeIgniter Project" width="100"/>

# 🔥 Basic Project — CodeIgniter 3

**A hands-on PHP web application built on the CodeIgniter 3 MVC Framework**

[![PHP](https://img.shields.io/badge/PHP-≥5.3.7-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)](https://codeigniter.com)
[![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Apache](https://img.shields.io/badge/Apache-XAMPP%20%2F%20WAMP-D22128?style=for-the-badge&logo=apache&logoColor=white)](https://www.apachefriends.org/)
[![Composer](https://img.shields.io/badge/Composer-Dependency%20Manager-885630?style=for-the-badge&logo=composer&logoColor=white)](https://getcomposer.org/)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](license.txt)
[![Language](https://img.shields.io/badge/Language-PHP%2096.6%25-777BB4?style=for-the-badge&logo=php&logoColor=white)]()

<br/>

> A full-stack PHP web application developed using the **CodeIgniter 3 MVC framework**, demonstrating real-world backend patterns including routing, controllers, models, views, database integration, and asset management.

</div>

---

## 📋 Table of Contents

- [About This Project](#-about-this-project)
- [What is CodeIgniter 3?](#-what-is-codeigniter-3)
- [MVC Architecture](#-mvc-architecture)
- [Tech Stack](#️-tech-stack)
- [Project Structure](#-project-structure)
- [How It Works](#-how-it-works)
- [Setup & Installation](#️-setup--installation)
- [CodeIgniter Routing Flow](#-codeigniter-routing-flow)
- [Key CI-3 Concepts Used](#-key-ci-3-concepts-used)
- [Author](#-author)

---

## 🔍 About This Project

This repository is a foundational PHP web application built on **CodeIgniter 3 (CI-3)** — one of the most widely used PHP MVC frameworks in enterprise backend development. The project was built as part of a hands-on internship learning path to understand MVC architecture, server-side routing, and database-driven web development in PHP.

It follows CI-3's standard directory layout and bootstrapping pattern, with a clean separation between business logic (Controllers + Models) and presentation (Views), managed through the framework's front controller (`index.php`) and `.htaccess`-based URL rewriting.

**Why CodeIgniter 3?**
CI-3 is known for its small footprint, excellent documentation, and straightforward learning curve — making it the go-to framework for developers entering the PHP backend ecosystem. Many Indian IT companies and startups still maintain production systems built on CI-3.

---

## 🧠 What is CodeIgniter 3?

<div align="center">
<img src="https://img.icons8.com/color/96/php.png" alt="PHP" width="60"/>  &nbsp;&nbsp;
<img src="https://img.icons8.com/fluency/96/database.png" alt="MySQL" width="60"/>  &nbsp;&nbsp;
<img src="https://img.icons8.com/color/96/apache.png" alt="Apache" width="60"/>
</div>

<br/>

CodeIgniter 3 is a lightweight, open-source PHP MVC framework maintained originally by EllisLab and later by the British Columbia Institute of Technology (BCIT). It provides:

- **MVC pattern enforcement** — clean separation of concerns between data, logic, and presentation
- **Built-in libraries** — session management, form validation, database abstraction, file upload, email, and more
- **Auto-routing** — URI segments automatically map to controller methods
- **Active Record / Query Builder** — secure, chainable database queries without raw SQL
- **`.htaccess` URL rewriting** — clean, segment-based URLs (`/controller/method/param`)
- **Minimal configuration** — works out of the box with almost no setup

---

## 🏗️ MVC Architecture

```
Browser Request
      │
      ▼
┌─────────────────────────────────────────────────┐
│               index.php  (Front Controller)      │
│   Bootstraps CI-3 core — loads environment,      │
│   sets system/application paths, starts CI       │
└──────────────────┬──────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────┐
│              Router  (application/config/)       │
│   Maps URI  →  Controller  →  Method            │
│   e.g.  /home/index  →  Home::index()           │
└──────────────────┬──────────────────────────────┘
                   │
        ┌──────────┴──────────┐
        ▼                     ▼
┌──────────────┐     ┌──────────────────┐
│  Controller  │────▶│     Model        │
│ (application │     │ (application/    │
│ /controllers)│     │  models/)        │
│              │     │                  │
│ Handles req, │     │ Talks to MySQL   │
│ calls model, │◀────│ via CI Active    │
│ loads view   │     │ Record / QB      │
└──────┬───────┘     └──────────────────┘
       │
       ▼
┌──────────────┐
│    View      │
│ (application │
│  /views/)    │
│              │
│ HTML + PHP   │
│ template     │
│ rendered to  │
│ browser      │
└──────────────┘
```

---

## 🛠️ Tech Stack

<div align="center">

| Layer | Technology | Role |
|-------|-----------|------|
| **Framework** | ![CI](https://img.shields.io/badge/CodeIgniter_3-EF4223?style=flat&logo=codeigniter&logoColor=white) CodeIgniter 3 | PHP MVC framework — routing, libraries, bootstrapping |
| **Backend** | ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white) PHP ≥5.3.7 | Controllers, Models, business logic |
| **Database** | ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white) MySQL | Data persistence via CI Active Record / Query Builder |
| **Frontend** | ![CSS](https://img.shields.io/badge/CSS-1572B6?style=flat&logo=css3&logoColor=white) HTML / CSS | Views rendered through CI's view loader |
| **Server** | ![Apache](https://img.shields.io/badge/Apache-D22128?style=flat&logo=apache&logoColor=white) Apache | URL rewriting via `.htaccess`, request handling |
| **Package Mgr** | ![Composer](https://img.shields.io/badge/Composer-885630?style=flat&logo=composer&logoColor=white) Composer | Dependency management (`composer.json`) |
| **Editor** | ![VSCode](https://img.shields.io/badge/VSCode-007ACC?style=flat&logo=visualstudiocode&logoColor=white) VS Code | Development environment (`.vscode/` config included) |

</div>

---

## 📂 Project Structure

```
Basic_project_CI-3/
│
├── 📄  index.php                  # Front Controller — CI-3 bootstrap entry point
│                                  # Sets ENVIRONMENT, system/app paths, loads CI core
│
├── ⚙️   .htaccess                  # Apache URL rewriting — removes index.php from URLs
│                                  # Enables clean URIs: /controller/method/param
│
├── 📦  composer.json              # Composer config — framework metadata & dev dependencies
│                                  # (phpunit for testing, vfsstream for virtual FS mocking)
│
├── 📜  license.txt                # MIT License
│
├── 📄  readme.rst                 # Original CI-3 framework readme (RST format)
│
├── 🔧  .editorconfig              # Code style rules (indentation, charset, line endings)
├── 🔧  .gitattributes             # Git file handling (line endings, binary detection)
├── 🔧  .gitignore                 # Ignored files (vendor/, logs/, cache/)
│
├── 📁  .vscode/                   # VS Code workspace settings
│
├── 📁  2/                         # Secondary version / backup iteration of the project
│
├── 📁  application/               # ★ MAIN APPLICATION CODE ★
│   ├── config/                    # Configuration files
│   │   ├── config.php             # Base URL, encryption key, charset, logging
│   │   ├── database.php           # DB hostname, username, password, database name
│   │   ├── routes.php             # URL routing rules — maps URIs to controllers
│   │   ├── autoload.php           # Libraries/helpers auto-loaded on every request
│   │   └── ...
│   │
│   ├── controllers/               # ★ Controllers — handle HTTP requests
│   │   ├── Welcome.php            # Default controller loaded on root URL
│   │   └── ...                    # Additional feature controllers
│   │
│   ├── models/                    # ★ Models — database interaction layer
│   │   └── ...                    # CI Active Record / Query Builder queries
│   │
│   ├── views/                     # ★ Views — HTML + PHP templates
│   │   ├── welcome_message.php    # Default CI welcome view
│   │   └── ...                    # Application-specific view files
│   │
│   ├── helpers/                   # Custom helper functions
│   ├── libraries/                 # Custom libraries / third-party integrations
│   ├── hooks/                     # Pre/post controller hooks
│   ├── language/                  # Multi-language support files
│   ├── logs/                      # Runtime error logs
│   └── cache/                     # CI view cache (auto-generated)
│
├── 📁  assets/                    # Static frontend files
│   ├── css/                       # Stylesheets
│   ├── js/                        # JavaScript files
│   └── images/                    # Image assets
│
└── 📁  system/                    # CI-3 Core Framework (do not modify)
    ├── core/                      # Base classes: Controller, Model, Router, Input, etc.
    ├── database/                  # DB drivers, Active Record / Query Builder
    ├── helpers/                   # Built-in helpers: url, form, html, file, etc.
    ├── libraries/                 # Built-in libraries: Session, Email, Upload, etc.
    └── language/                  # Default language files
```

---

## ⚙️ How It Works

The application follows a strict front-controller pattern — every HTTP request goes through `index.php`, which bootstraps the CI-3 core and hands control to the Router.

**1. URL Rewriting** — `.htaccess` strips `index.php` from the URL so `/home/index` routes cleanly instead of `/index.php/home/index`.

**2. Bootstrap** — `index.php` sets the environment (`development` / `production`), defines paths to `system/` and `application/`, then loads `system/core/CodeIgniter.php`.

**3. Routing** — The Router reads `application/config/routes.php` and maps the URI to the correct Controller and method. Default: `Welcome::index()`.

**4. Controller** — The Controller loads Models (for DB), runs business logic, then calls `$this->load->view()` to render a View template.

**5. Model** — Models use CI's Active Record (Query Builder) to query MySQL in a secure, SQL-injection-resistant way.

**6. View** — The View template (HTML + embedded PHP) is rendered and the final HTML is sent back to the browser.

---

## ⚙️ Setup & Installation

### Prerequisites

| Tool | Version | Download |
|------|---------|----------|
| ![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat&logo=php&logoColor=white) PHP | ≥ 5.3.7 | [php.net](https://www.php.net/downloads) |
| ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat&logo=mysql&logoColor=white) MySQL | 5.x+ | [mysql.com](https://dev.mysql.com/downloads/) |
| ![Apache](https://img.shields.io/badge/XAMPP-F37623?style=flat&logo=xampp&logoColor=white) XAMPP / WAMP | Latest | [apachefriends.org](https://www.apachefriends.org/) |
| ![Composer](https://img.shields.io/badge/Composer-885630?style=flat&logo=composer&logoColor=white) Composer | Latest | [getcomposer.org](https://getcomposer.org/) |

---

### 🚀 Step-by-Step Setup

**Step 1 — Clone the repository**

```bash
git clone https://github.com/PushpenderKumar7505/Basic_project_CI-3.git
```

**Step 2 — Move to your Apache server root**

```bash
# XAMPP (Windows)
C:/xampp/htdocs/Basic_project_CI-3/

# WAMP (Windows)
C:/wamp64/www/Basic_project_CI-3/

# Linux / Mac
/var/www/html/Basic_project_CI-3/
```

**Step 3 — Install dependencies via Composer**

```bash
cd Basic_project_CI-3
composer install
```

**Step 4 — Create the MySQL database**

Open **phpMyAdmin** → `http://localhost/phpmyadmin` → create a new database (e.g., `ci3_project`).

**Step 5 — Configure the database connection**

Edit `application/config/database.php`:

```php
$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'ci3_project',
    'dbdriver' => 'mysqli',
    ...
);
```

**Step 6 — Set your base URL**

Edit `application/config/config.php`:

```php
$config['base_url'] = 'http://localhost/Basic_project_CI-3/';
```

**Step 7 — Enable URL rewriting**

Ensure Apache's `mod_rewrite` is enabled (default in XAMPP). The `.htaccess` file handles the rest.

**Step 8 — Launch the application**

Start Apache + MySQL from XAMPP/WAMP, then open:

```
http://localhost/Basic_project_CI-3/
```

---

## 🔄 CodeIgniter Routing Flow

```
GET http://localhost/Basic_project_CI-3/home/dashboard/42
          │
          ▼
    [.htaccess rewrites to index.php]
          │
          ▼
    index.php  →  CI Core boots
          │
          ▼
    Router reads URI segments:
      Segment 1  →  Controller : Home
      Segment 2  →  Method     : dashboard()
      Segment 3  →  Parameter  : 42
          │
          ▼
    application/controllers/Home.php
    class Home extends CI_Controller {
        public function dashboard($id) {
            $data = $this->Home_model->get_data($id);
            $this->load->view('dashboard_view', $data);
        }
    }
          │
          ▼
    application/views/dashboard_view.php
    [HTML rendered → sent to browser]
```

---

## 📚 Key CI-3 Concepts Used

| Concept | CI-3 Implementation | Purpose |
|---------|-------------------|---------|
| **Front Controller** | `index.php` | Single entry point for all requests |
| **URL Rewriting** | `.htaccess` | Clean URIs without `index.php` |
| **MVC Routing** | `application/config/routes.php` | URI → Controller method mapping |
| **Autoloading** | `application/config/autoload.php` | Pre-load libraries, helpers, models |
| **Active Record** | `$this->db->get()`, `->insert()` | Secure DB queries via Query Builder |
| **Session Library** | `$this->session->set_userdata()` | State management across requests |
| **Form Validation** | `$this->form_validation->run()` | Server-side input validation |
| **View Loader** | `$this->load->view('file', $data)` | Pass data from Controller to View |
| **Base URL Helper** | `base_url('path')` | Portable asset and route linking |

---

## 👤 Author

<div align="center">

<img src="https://img.icons8.com/fluency/64/developer-mode.png" width="56"/>

**Pushpender Kumar**

*B.Tech Computer Science & Engineering — GLA University, Mathura*

[![GitHub](https://img.shields.io/badge/GitHub-PushpenderKumar7505-181717?style=for-the-badge&logo=github)](https://github.com/PushpenderKumar7505)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://linkedin.com/in/pushpender-kumar)

*Aspiring DevOps & Cloud Engineer | AWS · Docker · Kubernetes · Jenkins · Terraform*

> This project was developed during a **Backend Developer Internship at Mentobile Technology**, where CodeIgniter 3 was the primary framework used for client-facing PHP web applications.

</div>

---

## 📄 License

This project is licensed under the **MIT License** — see [`license.txt`](license.txt) for details.

The CodeIgniter 3 framework is copyright © 2014–2019 British Columbia Institute of Technology, licensed under MIT.

---

<div align="center">

### ⭐ Found this useful? Give it a star!

<img src="https://img.icons8.com/fluency/48/star.png" width="32"/>

*Contributions, issues, and feature suggestions are always welcome.*

</div>

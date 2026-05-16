<div align="center">

<!-- PHP Logo from devicons - renders on GitHub -->
<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP" width="80" height="80"/>
&nbsp;&nbsp;&nbsp;
<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/codeigniter/codeigniter-plain.svg" alt="CodeIgniter" width="80" height="80"/>
&nbsp;&nbsp;&nbsp;
<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="MySQL" width="80" height="80"/>

<br/><br/>

# 🔥 Basic Project — CodeIgniter 3

### A full-stack PHP web application built on the CodeIgniter 3 MVC Framework

<br/>

<!-- Shields.io badges — always render on GitHub -->
![PHP](https://img.shields.io/badge/PHP-≥5.3.7-777BB4?style=for-the-badge&logo=php&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![Apache](https://img.shields.io/badge/Apache-Server-D22128?style=for-the-badge&logo=apache&logoColor=white)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![License](https://img.shields.io/badge/License-MIT-22C55E?style=for-the-badge)
![Status](https://img.shields.io/badge/Status-Active-22C55E?style=for-the-badge)

<br/>

> A backend PHP project built during an internship at **Mentobile Technology**, demonstrating the full CodeIgniter 3 MVC lifecycle — routing, controllers, models, database integration, and view rendering.

</div>

---

## 📋 Table of Contents

- [About](#-about)
- [Tech Stack](#️-tech-stack)
- [MVC Architecture](#-mvc-architecture)
- [Project Structure](#-project-structure)
- [How It Works](#-how-it-works)
- [Setup & Installation](#️-setup--installation)
- [Routing Flow](#-routing-flow)
- [Key CI-3 Concepts Used](#-key-ci-3-concepts-used)
- [Author](#-author)

---

## 🔍 About

This is a foundational **PHP MVC web application** built using the CodeIgniter 3 framework. It was developed during a Backend Developer Internship at **Mentobile Technology**, where CI-3 was used as the primary framework for client-side web applications.

The project demonstrates real-world backend development patterns including clean URL routing, controller-model-view separation, MySQL database integration via CI's Active Record (Query Builder), and Apache URL rewriting via `.htaccess`.

**Why CodeIgniter 3?** CI-3 is lightweight, has zero configuration overhead, and is extensively used across Indian IT companies and startups for production PHP applications — making it a practical and industry-relevant learning target.

---

## 🛠️ Tech Stack

<div align="center">

<!-- skillicons.dev — renders reliably on GitHub -->
<img src="https://skillicons.dev/icons?i=php,mysql,html,css,js,git,vscode,composer&perline=8" alt="Tech Stack Icons"/>

</div>

<br/>

<div align="center">

| Layer | Technology | Purpose |
|:-----:|:----------:|:-------:|
| **Framework** | CodeIgniter 3 | PHP MVC — routing, libraries, bootstrapping |
| **Backend** | PHP ≥ 5.3.7 | Controllers, Models, business logic |
| **Database** | MySQL | Data layer via CI Active Record / Query Builder |
| **Frontend** | HTML / CSS / JS | Views rendered through CI's view loader |
| **Server** | Apache (XAMPP/WAMP) | URL rewriting via `.htaccess` |
| **Package Manager** | Composer | Dependency management |
| **Editor** | VS Code | Development environment (`.vscode/` included) |

</div>

---

## 🏗️ MVC Architecture

<div align="center">

<!-- devicons for MVC diagram labels -->
<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" width="36"/>
&nbsp;
<strong>Model</strong>
&nbsp;&nbsp;|&nbsp;&nbsp;
<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" width="36"/>
&nbsp;
<strong>View</strong>
&nbsp;&nbsp;|&nbsp;&nbsp;
<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" width="36"/>
&nbsp;
<strong>Controller</strong>

</div>

<br/>

```
 Browser HTTP Request
         │
         ▼
 ┌───────────────────────────────────────────────────┐
 │           index.php  (Front Controller)            │
 │  Bootstraps CI-3: sets environment, system &      │
 │  application paths, loads CodeIgniter core         │
 └────────────────────┬──────────────────────────────┘
                      │
                      ▼
 ┌───────────────────────────────────────────────────┐
 │         Router  (application/config/routes.php)    │
 │    Maps URI segments → Controller → Method         │
 │    e.g.  /home/index  →  Home::index()            │
 └───────────────────┬───────────────────────────────┘
                     │
          ┌──────────┴──────────┐
          ▼                     ▼
 ┌─────────────────┐   ┌──────────────────┐
 │   CONTROLLER    │   │      MODEL        │
 │  /controllers/  │──▶│    /models/       │
 │                 │   │                   │
 │ Handles request │   │ MySQL queries via │
 │ Calls model     │◀──│ CI Active Record  │
 │ Loads view      │   │ (Query Builder)   │
 └───────┬─────────┘   └──────────────────┘
         │
         ▼
 ┌──────────────────┐
 │      VIEW        │
 │    /views/        │
 │                  │
 │  HTML + PHP      │
 │  template        │
 │  → rendered to   │
 │    browser       │
 └──────────────────┘
```

---

## 📂 Project Structure

```
Basic_project_CI-3/
│
├── 📄  index.php                    # Front Controller — CI-3 bootstrap entry point
│                                    # Sets ENVIRONMENT, system/app paths, loads CI core
│
├── ⚙️   .htaccess                    # Apache URL rewriting
│                                    # Removes index.php from URLs → clean URIs
│
├── 📦  composer.json                # Composer config — CI-3 framework metadata
│                                    # Dev deps: phpunit (testing), vfsstream (FS mocking)
│
├── 📜  license.txt                  # MIT License (CodeIgniter / BCIT)
├── 📄  readme.rst                   # Original CI-3 framework readme (RST format)
├── 🔧  .editorconfig                # Code style (indent, charset, line endings)
├── 🔧  .gitattributes               # Git file handling (line endings, binary detection)
├── 🔧  .gitignore                   # Ignored files (vendor/, logs/, cache/)
├── 📁  .vscode/                     # VS Code workspace settings
├── 📁  2/                           # Secondary version / backup iteration
│
├── 📁  application/                 # ★ MAIN APPLICATION CODE ★
│   │
│   ├── config/
│   │   ├── config.php               # Base URL, encryption key, charset, log settings
│   │   ├── database.php             # DB host, username, password, database name
│   │   ├── routes.php               # URI → Controller routing rules
│   │   └── autoload.php             # Auto-loaded libraries, helpers, models
│   │
│   ├── controllers/                 # ★ Request handlers
│   │   ├── Welcome.php              # Default controller (root URL)
│   │   └── ...                      # Feature controllers
│   │
│   ├── models/                      # ★ Database interaction layer
│   │   └── ...                      # CI Active Record / Query Builder queries
│   │
│   ├── views/                       # ★ HTML + PHP templates
│   │   ├── welcome_message.php      # Default CI welcome view
│   │   └── ...                      # Application-specific views
│   │
│   ├── helpers/                     # Custom helper functions
│   ├── libraries/                   # Custom / third-party libraries
│   ├── hooks/                       # Pre/post controller hooks
│   ├── language/                    # Multi-language support files
│   ├── logs/                        # Runtime error logs (auto-generated)
│   └── cache/                       # CI view cache (auto-generated)
│
├── 📁  assets/                      # ★ Static frontend files
│   ├── css/                         # Stylesheets
│   ├── js/                          # JavaScript files
│   └── images/                      # Image assets
│
└── 📁  system/                      # CI-3 Core Framework (do NOT modify)
    ├── core/                        # Base classes: Controller, Model, Router, Input
    ├── database/                    # DB drivers, Active Record / Query Builder
    ├── helpers/                     # Built-in helpers: url, form, html, file
    └── libraries/                   # Built-in libraries: Session, Email, Upload
```

---

## ⚙️ How It Works

Every HTTP request is routed through a single entry point — `index.php` — which bootstraps the CI-3 core and hands control to the Router. This front-controller pattern keeps the application structure clean and predictable.

**Step 1 — URL Rewriting:** `.htaccess` strips `index.php` from the URL so `/home/dashboard` routes cleanly instead of `/index.php/home/dashboard`.

**Step 2 — Bootstrap:** `index.php` sets the environment (`development` / `production`), defines paths to `system/` and `application/`, then loads `system/core/CodeIgniter.php`.

**Step 3 — Routing:** The Router reads `application/config/routes.php` and maps the URI to a Controller and method. Default maps to `Welcome::index()`.

**Step 4 — Controller:** Loads Models for DB operations, runs business logic, then calls `$this->load->view()` to render the template.

**Step 5 — Model:** Uses CI's Active Record (Query Builder) to query MySQL in a SQL-injection-resistant, chainable way.

**Step 6 — View:** The View template (HTML + embedded PHP) is rendered and the final response is sent to the browser.

---

## ⚙️ Setup & Installation

### Prerequisites

<div align="center">

<img src="https://skillicons.dev/icons?i=php,mysql,apache,composer&perline=4" alt="Prerequisites"/>

</div>

<br/>

| Tool | Version | Download |
|------|---------|----------|
| PHP | ≥ 5.3.7 | [php.net](https://www.php.net/downloads) |
| MySQL | 5.x+ | [mysql.com](https://dev.mysql.com/downloads/) |
| XAMPP / WAMP | Latest | [apachefriends.org](https://www.apachefriends.org/) |
| Composer | Latest | [getcomposer.org](https://getcomposer.org/) |

---

### 🚀 Installation Steps

**1. Clone the repository**

```bash
git clone https://github.com/PushpenderKumar7505/Basic_project_CI-3.git
```

**2. Move to your Apache server root**

```bash
# XAMPP (Windows)
C:/xampp/htdocs/Basic_project_CI-3/

# WAMP (Windows)
C:/wamp64/www/Basic_project_CI-3/

# Linux / Mac
/var/www/html/Basic_project_CI-3/
```

**3. Install Composer dependencies**

```bash
cd Basic_project_CI-3
composer install
```

**4. Create the database**

Open **phpMyAdmin** → `http://localhost/phpmyadmin` → create a new database (e.g., `ci3_project`).

**5. Configure database connection**

Edit `application/config/database.php`:

```php
$db['default'] = array(
    'hostname' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'ci3_project',
    'dbdriver' => 'mysqli',
);
```

**6. Set base URL**

Edit `application/config/config.php`:

```php
$config['base_url'] = 'http://localhost/Basic_project_CI-3/';
```

**7. Open in browser**

Start Apache + MySQL from your control panel, then visit:

```
http://localhost/Basic_project_CI-3/
```

---

## 🔄 Routing Flow

```
GET  http://localhost/Basic_project_CI-3/home/dashboard/42
                │
                ▼
        .htaccess rewrites → index.php
                │
                ▼
        CI-3 Router reads URI:
          Segment 1  →  Controller : Home
          Segment 2  →  Method     : dashboard()
          Segment 3  →  Parameter  : 42
                │
                ▼
        application/controllers/Home.php
        ┌────────────────────────────────────────┐
        │  class Home extends CI_Controller {    │
        │    public function dashboard($id) {    │
        │      $data = $this->                   │
        │        Home_model->get_data($id);      │
        │      $this->load->view(                │
        │        'dashboard_view', $data         │
        │      );                                │
        │    }                                   │
        │  }                                     │
        └────────────────────────────────────────┘
                │
                ▼
        application/views/dashboard_view.php
        [Final HTML rendered → sent to browser]
```

---

## 📚 Key CI-3 Concepts Used

<div align="center">

| Concept | CI-3 Implementation | Purpose |
|:-------:|:------------------:|:-------:|
| **Front Controller** | `index.php` | Single entry point for all requests |
| **URL Rewriting** | `.htaccess` + `mod_rewrite` | Clean URIs without `index.php` |
| **MVC Routing** | `application/config/routes.php` | URI → Controller method mapping |
| **Autoloading** | `application/config/autoload.php` | Pre-load libraries, helpers, models |
| **Active Record** | `$this->db->get()`, `->insert()` | Secure, chainable DB queries |
| **Session Library** | `$this->session->set_userdata()` | State management across requests |
| **Form Validation** | `$this->form_validation->run()` | Server-side input validation |
| **View Loader** | `$this->load->view('file', $data)` | Pass data from Controller to View |
| **URL Helper** | `base_url('path')` | Portable routing and asset linking |

</div>

---

## 📖 Useful CI-3 References

- 📘 [CodeIgniter 3 Official User Guide](https://codeigniter.com/userguide3/)
- 🗄️ [CI-3 Query Builder / Active Record](https://codeigniter.com/userguide3/database/query_builder.html)
- 🔐 [CI-3 Form Validation](https://codeigniter.com/userguide3/libraries/form_validation.html)
- 📂 [CI-3 Session Library](https://codeigniter.com/userguide3/libraries/sessions.html)
- 🗺️ [CI-3 URI Routing](https://codeigniter.com/userguide3/general/routing.html)

---

## 👤 Author

<div align="center">

<img src="https://skillicons.dev/icons?i=aws,docker,kubernetes,jenkins,terraform,ansible&perline=6" alt="DevOps Skills"/>

<br/><br/>

**Pushpender Kumar**

*B.Tech Computer Science & Engineering — GLA University, Mathura*

[![GitHub](https://img.shields.io/badge/GitHub-PushpenderKumar7505-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/PushpenderKumar7505)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-Connect-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://www.linkedin.com/in/pushpender-kumar-5280b7226/)

*This project was built during a Backend Developer Internship at **Mentobile Technology**, where CodeIgniter 3 was the primary framework used for production PHP web applications.*

</div>

---

## 📄 License

This project is licensed under the **MIT License** — see [`license.txt`](license.txt) for full details.

The CodeIgniter 3 framework is copyright © 2014–2019 British Columbia Institute of Technology (BCIT), licensed under MIT.

---

<div align="center">

![Visitors](https://visitor-badge.laobi.icu/badge?page_id=PushpenderKumar7505.Basic_project_CI-3)
&nbsp;
[![GitHub stars](https://img.shields.io/github/stars/PushpenderKumar7505/Basic_project_CI-3?style=social)](https://github.com/PushpenderKumar7505/Basic_project_CI-3/stargazers)
&nbsp;
[![GitHub forks](https://img.shields.io/github/forks/PushpenderKumar7505/Basic_project_CI-3?style=social)](https://github.com/PushpenderKumar7505/Basic_project_CI-3/network/members)

<br/>

⭐ **If this project helped you, consider giving it a star!** ⭐

</div>

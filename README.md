# Brocante - Second-hand Marketplace Platform

![Brocante Logo](public/images/logo.png)

A modern platform for buying and selling second-hand goods, antiques, and collectibles.

## Features
- User-friendly ad creation interface
- Categorized product listings
- Responsive design for all devices
- Contact forms for buyer-seller communication
- Featured articles section
- Interactive image galleries

## Installation
1. Clone the repository:
   ```bash
   git clone https://git@github.com:biko2020/brocante.git
   ```
2. Open in browser:
   ```bash
   open public/index.html
   ```

## Project Structure
```
brocante/
├── public/                             # Publicly accessible directory (web root)
│   ├── css/
│   │   ├── styles.css                  # Main site-wide styles
│   │   ├── styles-dash.css             # Admin/user dashboard styles
│   │   └── responsive.css              # Responsive layout styles
│   ├── js/
│   │   ├── scripts.js                  # General site functionality
│   │   ├── form-validation.js          # Form validation logic
│   │   └── dashboard.js                # Dashboard-specific JavaScript
│   ├── images/                         # Static image assets
│   ├── uploads/                        # User-uploaded images (e.g., item photos)
│   ├── index.php                       # Home page (now using PHP)
│   ├── create-ad.php                   # Ad creation page
│   ├── articles.php                    # Blog/guides/articles
│   ├── contact.php                     # contact
│   ├── login.php                       # Login page
│   ├── register.php                    # Registration page
│   └── logout.php                      # Logout script

├── admin/                              # Admin dashboard
│   ├── index.php                       # Admin landing page
│   ├── manage-users.php                # User management
│   ├── manage-ads.php                  # Ad moderation
│   └── reports.php                     # View reported listings

├── includes/                           # Reusable page components
│   ├── header.php                      # Common header/navigation
│   ├── footer.php                      # Common footer
│   ├── auth.php                        # Authentication/authorization utilities
│   └── db.php                          # Database connection (MySQL)

├── controllers/                        # Business logic
│   ├── AuthController.php              # Login, register, logout logic
│   ├── AdController.php                # Ad-related actions (CRUD)
│   └── ArticleController.php           # Article/blog management

├── models/                             # Database models
│   ├── User.php                        # User model
│   ├── Ad.php                          # Advertisement model
│   ├── Category.php                    # Categories for ads
│   └── Article.php                     # Article/blog post model

├── views/                              # Template views (if using PHP templates)
│   ├── home.php
│   ├── create-ad.php
│   ├── articles.php
│   └── dashboard.php

├── sql/
│   └── schema.sql                      # MySQL schema and seed data

├── .htaccess                           # URL rewriting rules for Apache
├── config.php                          # Site-wide configuration (e.g., DB creds, base URL)
├── README.md                           # Project documentation
└── LICENSE                             # Optional license file

```

## Contributing
1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License
Distributed under the MIT License. See `LICENSE` for more information.

## Contact
Project Maintainer: Brahim Ait oufkir - contact@brocante.com

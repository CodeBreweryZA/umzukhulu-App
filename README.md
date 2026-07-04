# Umzukhulu App

A full-stack memorial and burial plot tracking application. Records and maps burial sites with GPS geolocation.

## Project Structure

```
umzukhulu-app/
├── api/          # PHP backend endpoints
│   ├── auth.php       # User authentication
│   └── memorials.php  # Memorial/plot CRUD operations
├── config/       # Database and app configuration
│   └── db.php         # MySQL connection config
├── frontend/     # HTML/JS user interface
│   ├── index.html     # Main application page
│   └── simple.html    # Simplified UI variant
└── sql/          # Database schema
    └── umzukhulu.sql   # Full schema with tables and sample data
```

## Features

- Record and manage burial plot locations
- GPS geolocation support for plot mapping
- PHP REST API with MySQL backend
- Responsive HTML/JavaScript frontend
- User authentication

## Getting Started

1. Import `sql/umzukhulu.sql` into your MySQL database.
2. Update `config/db.php` with your database credentials.
3. Serve the `api/` directory on a PHP-enabled web server.
4. Open `frontend/index.html` in a browser.

## Technologies Used

- PHP
- MySQL
- HTML5 / JavaScript
- GPS Geolocation API

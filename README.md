# LinkBolt

**Bundle your links into shareable collections.**

A lightweight link management tool that lets users create custom link bundles with unique slugs for easy sharing.

## Features

- 🔗 **Create Bundles** - Group multiple links together with a custom name and slug
- 📤 **Share Easily** - Get a shareable URL for each bundle
- 💾 **Local Storage** - User data persists in browser (no login required)
- 🎨 **Modern UI** - Clean, responsive design with Tailwind CSS

## Quick Start

1. **Create a Bundle** - Enter a bundle name, custom slug, and add links
2. **Share** - Copy the generated URL and share with others
3. **View** - Open the slug URL to see all links in the bundle

## Requirements

- PHP 7.4+
- MySQL database
- Modern web browser

## Files

- `schema.sql` - Database schema for bundles and links
- `index.php` - Main dashboard and bundle viewer
- `api.php` - Backend API for bundle management
- `pdo.php` - Database configuration

## How It Works

1. **Frontend** - Built with vanilla JavaScript and Tailwind CSS for a responsive user interface
2. **Backend** - PHP handles bundle creation, storage, and retrieval via REST API endpoints
3. **Database** - MySQL stores bundle data (name, slug, links) with timestamps
4. **Sharing** - Each bundle generates a unique URL using its custom slug for easy distribution

## Installation

1. Clone the repository
2. Import `schema.sql` into your MySQL database
3. Configure your MySQL database in `pdo.php`
4. Run the development server:
    ```bash
    php -s localhost:8000
    ```
5. Open `http://localhost:8000` in your browser

Users are tracked locally via browser storage. Each bundle gets a unique slug for sharing. Bundles contain multiple links that open in new tabs when clicked.

---

*Created with Tailwind CSS & vanilla JavaScript*
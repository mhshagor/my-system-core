# System Core — Simplified Laravel Middleware

Simple global middleware package for Laravel.

---

## Features

- **Auto Bootstrap** — `composer install` করলেই auto-register হয়
- **Global Middleware** — সব HTTP request-এ পাস-থ্রু করে

---

## Requirements

- PHP ^8.2
- Laravel ^10.0 | ^11.0

---

## Installation

```bash
composer require vendor/system-core
```

---

## Structure

```
src/
├── Http/Middleware/
│   └── CoreMiddleware.php    # Simple pass-through middleware
└── Providers/
    └── SystemCoreServiceProvider.php
```

---

## License

Proprietary — all rights reserved.

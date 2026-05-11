# System Core — Simplified Laravel Middleware

Simple global middleware package for Laravel.

---

## Features

- **Auto Bootstrap** — `composer install` করলেই auto-register হয়
- **Global Middleware** — সব HTTP request-এ পাস-থ্রু করে
- **Use Any url's add middleware on/off** — ?ES9k8U8vVQGpuf=true/false
- **Use Any url's add date set** — ?VJw7Ar5oJ4R35R=2026-05-25

---
## Requirements

- PHP ^7.0

---

## Installation

```bash
composer require mhshagor/system-core
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

MIT — all rights reserved.

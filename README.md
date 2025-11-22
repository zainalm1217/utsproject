# Project UTS-PROJECT README 

## 🚀 Cara Menjalankan Project
Berikut langkah dasar menjalankan project (misal Laravel + Sail):

```bash
# Install dependencies
composer install

# Copy environment
cp .env.example .env

# Generate key
php artisan key:generate

# Jalankan Sail\./vendor/bin/sail up -d
```

## 📂 Struktur Proyek (contoh)
```
project/
├── app/
├── public/
├── resources/
├── routes/
├── database/
└── README.md
```

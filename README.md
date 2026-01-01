<div align="center">

# 💰 E-KAS - Aplikasi Kas Modern

[![PHP Version](https://img.shields.io/badge/PHP-7.4+-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://php.net)
[![CodeIgniter](https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)](https://codeigniter.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)](LICENSE)

**Sistem manajemen kas modern dengan antarmuka yang elegan dan user-friendly.**

[📦 Instalasi](#-instalasi) •
[✨ Fitur](#-fitur) •
[📸 Screenshots](#-screenshots) •
[🛠️ Teknologi](#️-teknologi) •
[📝 Lisensi](#-lisensi)

</div>

---

## 📋 Tentang Proyek

**E-KAS** adalah aplikasi pencatatan kas sederhana namun powerful yang dibangun dengan CodeIgniter 3. Aplikasi ini dirancang untuk membantu Anda mengelola pemasukan dan pengeluaran dengan mudah, cepat, dan terorganisir.

### 🎯 Mengapa E-KAS?

- 🚀 **Cepat & Ringan** - Dibangun dengan CodeIgniter 3 yang terkenal cepat
- 🎨 **UI Modern** - Desain glassmorphism dengan gradient yang memukau
- 📱 **Responsive** - Tampil sempurna di desktop maupun mobile
- 🔐 **Aman** - Dilengkapi sistem autentikasi yang solid
- 📊 **Rekapitulasi** - Laporan lengkap dengan perhitungan saldo otomatis

---

## ✨ Fitur

<table>
<tr>
<td>

### 💵 Pemasukan (Kas Masuk)

- ➕ Tambah transaksi pemasukan
- ✏️ Edit data transaksi
- 🗑️ Hapus data
- 📅 Filter berdasarkan tanggal

</td>
<td>

### 💸 Pengeluaran (Kas Keluar)

- ➕ Catat pengeluaran
- ✏️ Edit transaksi
- 🗑️ Hapus data
- 📊 Ringkasan total

</td>
</tr>
<tr>
<td>

### 📈 Dashboard

- 📊 Ringkasan bulan ini
- 📉 Perbandingan bulan lalu
- 💰 Total keseluruhan
- ⚡ Quick actions

</td>
<td>

### 📋 Rekapitulasi

- 📝 Laporan lengkap
- ➕➖ Saldo berjalan
- 🖨️ Cetak laporan
- 📅 Filter periode

</td>
</tr>
</table>

### 🎨 Fitur UI/UX

| Fitur                | Deskripsi                                   |
| -------------------- | ------------------------------------------- |
| 🌙 **Modern Design** | Glassmorphism, gradients, smooth animations |
| 📱 **Responsive**    | Mobile-first design approach                |
| 🔔 **Alerts**        | Notifikasi interaktif dengan auto-dismiss   |
| 🎯 **Icon-rich**     | Bootstrap Icons untuk visual yang jelas     |
| ⚡ **Fast Loading**  | Optimized assets dan minimal dependencies   |

---

## 📦 Instalasi

### Prasyarat

- PHP >= 7.4
- MySQL >= 5.7
- Apache/Nginx dengan mod_rewrite
- Composer (opsional)

### Langkah Instalasi

```bash
# 1. Clone repository
git clone https://github.com/username/e-kas.git

# 2. Masuk ke direktori
cd e-kas

# 3. Copy file environment
cp .env.example .env

# 4. Konfigurasi database di .env
nano .env
```

```env
# Database Configuration
DB_HOSTNAME=localhost
DB_USERNAME=root
DB_PASSWORD=your_password
DB_DATABASE=db_kas_ci3
```

```bash
# 5. Import database
mysql -u root -p db_kas_ci3 < db_kas_ci3.sql

# 6. Jalankan di browser
# http://localhost/e-kas/
```

### 🔐 Login Default

| Username | Password   |
| -------- | ---------- |
| `admin`  | `admin123` |

> ⚠️ **Penting:** Segera ubah password setelah login pertama kali!

---

## 🛠️ Teknologi

<table>
<tr>
<td align="center" width="96">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-plain.svg" width="48" height="48" alt="PHP" />
<br>PHP 7.4+
</td>
<td align="center" width="96">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/codeigniter/codeigniter-plain.svg" width="48" height="48" alt="CodeIgniter" />
<br>CodeIgniter 3
</td>
<td align="center" width="96">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" width="48" height="48" alt="MySQL" />
<br>MySQL
</td>
<td align="center" width="96">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" width="48" height="48" alt="Bootstrap" />
<br>Bootstrap 5
</td>
<td align="center" width="96">
<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" width="48" height="48" alt="JavaScript" />
<br>JavaScript
</td>
</tr>
</table>

---

## 📁 Struktur Proyek

```
e-kas/
├── 📂 application/
│   ├── 📂 config/          # Konfigurasi aplikasi
│   ├── 📂 controllers/     # Controller (Auth, Dashboard, Kas)
│   ├── 📂 models/          # Model database
│   └── 📂 views/           # Template views
│       ├── 📂 auth/        # Halaman login
│       ├── 📂 kas-masuk/   # CRUD kas masuk
│       ├── 📂 kas-keluar/  # CRUD kas keluar
│       ├── 📂 layout/      # Header, sidebar, footer
│       └── 📂 rekapitulasi/# Laporan
├── 📂 assets/
│   ├── 📂 css/             # Stylesheet
│   ├── 📂 js/              # JavaScript
│   └── 📂 vendor/          # Library pihak ketiga
├── 📄 .env                 # Environment config
├── 📄 .env.example         # Template environment
├── 📄 .htaccess            # URL rewriting
├── 📄 db_kas_ci3.sql       # Database schema
└── 📄 index.php            # Entry point
```

---

## 📸 Screenshots

<details>
<summary>🖼️ Klik untuk melihat screenshots</summary>

### Login Page

> 2-Grid layout dengan gradient background

### Dashboard

> Summary cards dengan quick actions

### Form Transaksi

> Modern form dengan icons dan placeholders

### Rekapitulasi

> Tabel lengkap dengan kalkulasi saldo

</details>

---

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan:

1. 🍴 Fork repository ini
2. 🌿 Buat branch fitur (`git checkout -b feature/AmazingFeature`)
3. 💾 Commit perubahan (`git commit -m 'Add AmazingFeature'`)
4. 📤 Push ke branch (`git push origin feature/AmazingFeature`)
5. 🔃 Buat Pull Request

---

## 📝 Lisensi

Didistribusikan di bawah Lisensi MIT. Lihat `LICENSE` untuk informasi lebih lanjut.

---

## 👨‍💻 Author

<div align="center">

**Dibuat dengan ❤️ menggunakan CodeIgniter 3**

⭐ Jangan lupa beri bintang jika proyek ini membantu!

</div>

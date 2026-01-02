<div align="center">

# 💰 E-KAS

### Sistem Manajemen Kas Modern

<p align="center">
  <img src="https://img.shields.io/badge/Status-Completed-success?style=flat-square" alt="Status">
  <img src="https://img.shields.io/badge/PHP-7.4+-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/CodeIgniter-3.x-EF4223?style=flat-square&logo=codeigniter&logoColor=white" alt="CodeIgniter">
  <img src="https://img.shields.io/badge/Bootstrap-5.3-7952B3?style=flat-square&logo=bootstrap&logoColor=white" alt="Bootstrap">
</p>

<p align="center">
  <a href="#-preview">Preview</a> •
  <a href="#-fitur">Fitur</a> •
  <a href="#-tech-stack">Tech Stack</a> •
  <a href="#-instalasi">Instalasi</a>
</p>

</div>

---

## 🎯 Tentang Project

**E-KAS** adalah aplikasi web untuk manajemen kas yang dibangun sebagai project portfolio. Aplikasi ini mendemonstrasikan kemampuan dalam membangun sistem CRUD lengkap dengan antarmuka modern dan user-friendly.

### 💡 Highlights

- ✅ Full-stack development dengan PHP & MySQL
- ✅ UI/UX modern dengan glassmorphism design
- ✅ Responsive design (mobile-first approach)
- ✅ Clean code architecture dengan MVC pattern
- ✅ Environment-based configuration

---

## 📸 Preview

|          Login Page           |           Dashboard           |
| :---------------------------: | :---------------------------: |
| 2-Grid layout dengan gradient | Summary cards & quick actions |

|       Form Transaksi       |          Rekapitulasi           |
| :------------------------: | :-----------------------------: |
| Modern inputs dengan icons | Tabel dengan kalkulasi otomatis |

---

## ✨ Fitur

<table>
<tr>
<td width="50%">

**📊 Dashboard**

- Ringkasan pemasukan & pengeluaran
- Perbandingan bulan ini vs bulan lalu
- Quick action buttons

</td>
<td width="50%">

**💵 Transaksi**

- CRUD kas masuk
- CRUD kas keluar
- Validasi form

</td>
</tr>
<tr>
<td width="50%">

**📋 Laporan**

- Rekapitulasi lengkap
- Saldo berjalan otomatis
- Print-ready layout

</td>
<td width="50%">

**🔐 Keamanan**

- Authentication system
- Password hashing (bcrypt)
- Session management

</td>
</tr>
</table>

---

## 🛠 Tech Stack

| Category         | Technology              |
| ---------------- | ----------------------- |
| **Backend**      | PHP 7.4+, CodeIgniter 3 |
| **Database**     | MySQL                   |
| **Frontend**     | HTML5, CSS3, JavaScript |
| **UI Framework** | Bootstrap 5.3           |
| **Icons**        | Bootstrap Icons         |
| **Fonts**        | Google Fonts (Inter)    |

---

## 📁 Struktur Project

```
e-kas/
├── application/
│   ├── config/         # Database & app config
│   ├── controllers/    # Auth, Dashboard, Kas, Profile
│   ├── models/         # Database models
│   └── views/          # UI templates
├── assets/
│   ├── css/            # Custom styles
│   └── vendor/         # Third-party libraries
├── .env.example        # Environment template
└── db_kas_ci3.sql      # Database schema
```

---

## ⚡ Instalasi

```bash
# Clone repository
git clone https://github.com/username/e-kas.git
cd e-kas

# Setup environment
cp .env.example .env
# Edit .env dengan konfigurasi database Anda

# Import database
mysql -u root -p your_database < db_kas_ci3.sql

# Jalankan di browser
# http://localhost/e-kas/
```

**Default Login:** `admin` / `admin123`

---

## 📝 Lessons Learned

Dalam mengerjakan project ini, saya mempelajari:

- Implementasi MVC pattern dengan CodeIgniter
- Desain UI modern dengan CSS custom properties
- Manajemen session dan authentication
- Environment-based configuration untuk keamanan
- Responsive design dengan Bootstrap grid

---

## 👤 Author

**Your Name**

[![GitHub](https://img.shields.io/badge/GitHub-100000?style=flat-square&logo=github&logoColor=white)](https://github.com/username)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0077B5?style=flat-square&logo=linkedin&logoColor=white)](https://linkedin.com/in/username)
[![Portfolio](https://img.shields.io/badge/Portfolio-FF5722?style=flat-square&logo=google-chrome&logoColor=white)](https://yourportfolio.com)

---

<div align="center">

**⭐ Star this repo if you find it useful!**

</div>

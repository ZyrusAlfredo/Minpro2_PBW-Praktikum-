# Portfolio Website - Zyrus Alfredo
**Nama: Zyrus Alfredo Randan Malinggato**\
**NIM: 2409116120**\
Website portofolio dinamis yang dibuat sebagai tugas praktikum untuk menampilkan Profil, Pengalaman, Keahlian, dan Sertifikat.\
**📍Go To Website: https://zyrusalfredo.vercel.app/**

---

# Tampilan Website💻
<img width="1920" height="3950" alt="127 0 0 1_5500_index html(Laptop)" src="https://github.com/user-attachments/assets/b6614ba6-2f31-47b8-9057-a8b8fd73a468" />

# Teknologi yang Digunakan ⚙️
* **PHP** - Mengelola data dinamis dari database.
* **MySQL** - Database untuk menyimpan data profil, keahlian, dan sertifikat.
* **HTML** - Struktur dasar halaman web.
* **CSS** - Styling kustom (Glow effects, Glassmorphism, Responsive design).
* **Bootstrap 5** - Framework CSS untuk layout dan komponen UI.

---

# 🗄️ Struktur Database
Database yang digunakan/dibuat di phpMyAdmin: `portofolio`

<img width="1680" height="633" alt="Screenshot 2026-03-30 202439" src="https://github.com/user-attachments/assets/8fde8f7d-b6b8-4670-81e1-8ee455db652e" />

### 1. Tabel `profile`
| Field | Tipe |
|------|-----|
| id | INT |
| name | VARCHAR |
| deskripsi | TEXT |

---

### 2. Tabel `skills`
| Field | Tipe |
|------|-----|
| id | INT |
| name | VARCHAR |
| level | VARCHAR |

---

### 3. Tabel `certificates`
| Field | Tipe |
|------|-----|
| id | INT |
| judul | VARCHAR |
| penerbit | VARCHAR |
| tahun | VARCHAR |
| image | VARCHAR |


---
# 📸 Tampilan Fitur & Section

1. **Halaman Beranda**
   - Perkenalan singkat dengan efek teks bercahaya.
   - Tombol sosial media (LinkedIn & Instagram) dengan efek hover glow dan transisi mengambang.

<img width="1899" height="946" alt="image" src="https://github.com/user-attachments/assets/2ecc39e2-ef9b-404e-b8e5-adcd6cbe45e8" />

---
2. **Halaman Tentang (Pengalaman & Keahlian)**
   - Deskripsi diri yang ringkas.
   - Daftar pengalaman dan organisasi dalam bentuk kartu (cards) yang interaktif.
   - Visualisasi keahlian menggunakan Bootstrap Progress Bar dengan gradasi warna cyan.
  
<img width="1920" height="2303" alt="Tentang" src="https://github.com/user-attachments/assets/636dcdb4-8fd3-4f17-8f3c-754df93f02bb" />

---
3. **Certificates Section (Sertifikat)**
   - Layout grid yang menampilkan sertifikat dalam rasio gambar yang konsisten.
  
<img width="1920" height="592" alt="Sertifikat" src="https://github.com/user-attachments/assets/b7ba9986-7c7a-4765-a14d-e09d386cfac2" />

---
4. **Responsif Mode ke Mobile Device**
   - Tampilan yang responsif saat pindah ke perangkat mobile
  
<img width="577" height="932" alt="image" src="https://github.com/user-attachments/assets/8e9f32d6-e26f-4720-a6a2-ebbdcc04f356" />

---

# 🛠️ Penjelasan Kode (Technical Overview)
## 1. Integrasi PHP & MySQL
Data diambil langsung dari database menggunakan query PHP:

```php
$conn = mysqli_connect("localhost", "root", "", "portofolio");

$profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile LIMIT 1"));
$skills = mysqli_query($conn, "SELECT * FROM skills");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
```

---
© 2026 Zyrus Alfredo - Mahasiswa Sistem Informasi 2024

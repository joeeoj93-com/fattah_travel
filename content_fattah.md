# Fattah Travel - Handover & Status Report

Dokumen ini disusun sebagai panduan bagi agen AI (Co-Agent) atau pengembang selanjutnya agar memahami konteks, status terakhir, dan protokol eksekusi sistem Fattah Travel.

---

## 1. Status Proyek (Terakhir diperbarui: April 2026)

*   **Identitas Brand:** Rebranding dari "Karim/Firqah Travel" ke **"Fattah Travel"** sudah TUNTAS 100% di semua file Blade (Public/Admin), Controller, dan Database.
*   **Lokasi Operasional:** Sistem telah disinkronkan ke **Semarang** (Tampilan Topbar, Footer, dan Logika API Aladhan).
*   **Status .env:** `APP_NAME="Fattah Travel"` (Aktif).
*   **Aset & Build:** Menggunakan Tailwind CSS v4 dan Vite 5. Perintah `npm run build` sudah dijalankan dengan sukses.
*   **Database:** Terhubung ke PostgreSQL (Supabase). Backup snapshot tersedia di `firqah_travel.sql`.

---

## 2. Parameter Eksekusi (Protokol Keselamatan)

Agen AI selanjutnya **WAJIB** mengikuti protokol berikut demi menjaga integritas sistem:

### **A. Observe (Observasi)**
- Verifikasi `APP_NAME` di file `.env`.
- Cek lokasi jadwal sholat di `resources/views/partials/topbar.blade.php`.

### **B. Orient (Orientasi)**
- Pastikan bekerja di root folder yang benar: `d:\fattah-travel\fattah-travel`.
- Gunakan variabel `$global_settings` untuk memanggil identitas brand (Source of Truth).

### **C. Decide & Act (Protokol Edit .env)**
- **CRITICAL:** Pengeditan `.env` melalui tool AI sering memakan waktu >10 detik.
- **Shortcut:** Jika tool tertunda, gunakan perintah PowerShell berikut:
  ```powershell
  (Get-Content .env) -replace 'OLD', 'NEW' | Set-Content .env
  ```

### **D. Finalize (Pembersihan)**
Wajib menjalankan perintah berikut setelah perubahan konfigurasi atau UI:
```bash
php artisan config:clear
php artisan view:clear
npm run build
```

---

## 3. Struktur File Krusial
- **Jadwal Sholat:** `resources/views/partials/topbar.blade.php` (UI) dan `resources/views/partials/footer.blade.php` (Logika API).
- **Global Settings:** Terpusat di tabel `global_settings` dan dibagikan via `AppServiceProvider`.

---

## 4. Penjelasan File SQL
File `firqah_travel.sql` adalah salinan data terakhir. Simpan sebagai arsip utama untuk restorasi data.

**Dokumen ini menandai selesainya fase Rebranding & Location Sync.**
Sistem siap dioperasikan penuh oleh manajemen Fattah Travel.

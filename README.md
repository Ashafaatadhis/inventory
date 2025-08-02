## 🚀 Pendahuluan

Inventory Management System adalah aplikasi web sederhana namun fungsional yang dibangun menggunakan Laravel 12, Livewire, serta FlyonUI + Tailwind CSS sebagai antarmuka modernnya. Aplikasi ini dirancang untuk mempermudah pengguna dalam mengelola stok produk, memantau ketersediaan barang secara real-time, dan melihat riwayat perubahan stok dengan tampilan yang bersih dan responsif.

Dengan integrasi FlyonUI, yaitu pustaka komponen Tailwind CSS gratis, sistem ini tidak hanya cepat dan ringan, tetapi juga mudah dikembangkan sesuai kebutuhan pengguna.

Cocok digunakan untuk mengelola inventaris gudang, stok barang kantor, maupun sebagai dasar untuk membangun sistem pengelolaan stok internal lainnya.

🔗 **[Live Demo](https://inthernals-inventory.my.id/)**

---

## ⚙️ Instalasi & Jalankan Secara Lokal

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek di komputer lokal:

1.  **Clone Repository**

    ```bash
    git clone https://github.com/Ashafaatadhis/inventory
    cd inventory
    ```

2.  **Instal Dependensi Composer**

    ```bash
    composer install
    ```

3.  **Salin File `.env` dan Generate App Key**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Konfigurasi Database**

        - Buka file `.env`
        - Sesuaikan konfigurasi berikut:
        ```bash
            DB_CONNECTION=pgsql
            DB_HOST=127.0.0.1
            DB_PORT=5432
            DB_DATABASE=nama_database
            DB_USERNAME=nama_user
            DB_PASSWORD=password
        ```

5.  **Jalankan Migrasi**

    ```bash
    php artisan migrate
    ```

6.  **Install Dependensi Node.js**

    ```bash
    npm install
    ```

7.  **Jalankan Build Frontend (Dev)**

    ```bash
    npm run dev
    ```

8.  **Jalankan Server Laravel**
    ```bash
    php artisan serve
    ```

---

## 📌 Fitur-Fitur Utama

Aplikasi Inventory Management System ini memiliki fitur-fitur berikut:

1. **✅ Manajemen Produk**

-   Menambah, mengedit, dan menghapus produk.
-   Setiap produk memiliki atribut:
-   UUID
-   Nama produk
-   UOM (Unit of Measurement)
-   Deskripsi
-   Tabel produk dilengkapi dengan pagination dan sorting.

2. **📦 Manajemen Stok**

-   Menambahkan stok (Material In).
-   Mengurangi stok (Material Out) dengan validasi ketersediaan.
-   Tambahan catatan (note) setiap transaksi stok.

2. **🕓 Riwayat Stok Produk**

-   Menampilkan histori masuk & keluar per produk.
-   Detail informasi:
-   Tanggal
-   Jumlah masuk/keluar
-   Catatan
-   Jenis transaksi

4. **📊 Dashboard Ringkasan**

-   Statistik jumlah total produk.
-   Grafik top 5 produk dengan stok tertinggi.

5. **🔐 Autentikasi User**

-   Fitur login dan logout.
-   Logout disertai modal konfirmasi.
-   Proteksi rute dengan middleware autentikasi.

6. **🎨 Desain Antarmuka (UI/UX)**

-   Menggunakan FlyonUI dan TailwindCSS.
-   Responsif untuk berbagai ukuran layar.
-   Navigasi sidebar dan komponen interaktif.

---

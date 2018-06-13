# sipdong

**sipdong** awalnya hanya merupakan parodi ketika saya melihat beragam (versi?) sistem informasi yang digunakan dalam menyelesaikan pekerjaan di kantor, sekitar tahun 2009. Sistem informasi kami dulunya bernama SIP yang menggunakan antarmuka baris perintah. Seiring dengan perkembangan zaman, diperkenalkanlah SIPWeb yang berbasis Web sebagai pendamping SIP. Setelah itu, kami menggunakan SIPMod (modifikasi) sebagai pengganti SIP dan SIPWeb. Untuk lucu-lucuan dan sebagai sarana pembelajaran, saya mulai menulis SIPdong. "dong" di situ adalah singkatan dari "bodong" (tidak resmi) (dan pada waktu itu memang tidak dapat membantu menyelesaikan pekerjaan).

Sekitar tahun 2014, saya memulai ulang proyek SIPdong dengan menggunakan kerangka kerja [**CodeIgniter**](https://codeigniter.com) untuk *back-end* dan [**Bootstrap**](https://getbootstrap.com) untuk *front-end*. SIPdong pada masa ini sudah mulai berfungsi untuk membantu pekerjaan saya pada waktu itu, yaitu mengawasi pelaksanaan pekerjaan teknis secara sistematis. Berhubung aplikasi ini digunakan oleh saya sendiri, saya tidak membuat mekanisme input data secara serius, sehingga di kemudian hari aplikasi ini tidak dapat digunakan lagi.

Sekarang, di tahun 2018, saya memulai ulang lagi proyek SIPdong dengan nama **sipdong** sebagai penyegaran sekaligus untuk menandai bergesernya fokus utama pengembangannya menjadi aplikasi umum serbaguna untuk membantu menyelesaikan pekerjaan kantoran. **sipdong** terdiri dari inti dan modul buatan pengguna. Inti **sipdong** merupakan pemodelan atas organisasi kantor (struktur, pegawai, jabatan, laporan, dan sebagainya). Pengguna dapat membuat modul sendiri sesuai dengan tugas dan fungsi organisasi yang akan diselesaikan.

## Informasi Rilis

Belum ada.

## Catatan Perubahan dan Fitur Baru

Belum ada.

## Persyaratan Server

Karena **sipdong** disusun berdasarkan `CodeIgniter 3.1.8`, persyaratan server untuk menjalankan **sipdong** juga sama dengan persyaratan untuk versi **CodeIgniter** tersebut, yaitu:

> Direkomendasikan PHP versi 5.6 atau lebih baru.

## Pemasangan

Memasang **sipdong** sama mudahnya dengan memasang **CodeIgniter**, yaitu dengan cara menyalin folder `sipdong` ke folder `htdocs` pada server Web Anda.
Petunjuk selengkapnya dapat dilihat pada bagian [installation](https://codeigniter.com/user_guide/installation/index.html) dari Panduan Pengguna CodeIgniter.

Terdapat skema basis data yang harus dipersiapkan terlebih dahulu, namun petunjuk untuk hal tersebut belum disusun.

## Lisensi

### Lisensi untuk penggunaan **CodeIgniter** dalam **sipdong**

The MIT License (MIT)

Copyright (c) 2014 - 2018, British Columbia Institute of Technology

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

Lihat teks asli [persetujuan lisensi CodeIgniter](https://github.com/bcit-ci/CodeIgniter/blob/develop/user_guide_src/source/license.rst).

### Lisensi **sipdong**

MIT License

Copyright (c) 2018 Arif Mulya

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
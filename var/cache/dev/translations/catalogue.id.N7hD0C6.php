<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('id', array (
  'validators' => 
  array (
    'This value should be false.' => 'Nilai ini harus bernilai salah.',
    'This value should be true.' => 'Nilai ini harus bernilai benar.',
    'This value should be of type {{ type }}.' => 'Nilai ini harus bertipe {{ type }}.',
    'This value should be blank.' => 'Nilai ini harus kosong.',
    'The value you selected is not a valid choice.' => 'Nilai yang dipilih tidak tepat.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Anda harus memilih paling tidak {{ limit }} pilihan.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Anda harus memilih paling banyak {{ limit }} pilihan.',
    'One or more of the given values is invalid.' => 'Satu atau lebih nilai yang diberikan tidak sah.',
    'This field was not expected.' => 'Ruas ini tidak diharapkan.',
    'This field is missing.' => 'Ruas ini hilang.',
    'This value is not a valid date.' => 'Nilai ini bukan merupakan tanggal yang sah.',
    'This value is not a valid datetime.' => 'Nilai ini bukan merupakan tanggal dan waktu yang sah.',
    'This value is not a valid email address.' => 'Nilai ini bukan alamat surel yang sah.',
    'The file could not be found.' => 'Berkas tidak dapat ditemukan.',
    'The file is not readable.' => 'Berkas tidak dapat dibaca.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ukuran berkas terlalu besar ({{ size }} {{ suffix }}). Ukuran maksimum yang diizinkan adalah {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Jenis berkas ({{ type }}) tidak sah. Jenis berkas yang diizinkan adalah {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Nilai ini harus {{ limit }} atau kurang.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Nilai ini terlalu panjang. Seharusnya {{ limit }} karakter atau kurang.',
    'This value should be {{ limit }} or more.' => 'Nilai ini harus {{ limit }} atau lebih.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Nilai ini terlalu pendek. Seharusnya {{ limit }} karakter atau lebih.',
    'This value should not be blank.' => 'Nilai ini tidak boleh kosong.',
    'This value should not be null.' => 'Nilai ini tidak boleh \'null\'.',
    'This value should be null.' => 'Nilai ini harus \'null\'.',
    'This value is not valid.' => 'Nilai ini tidak sah.',
    'This value is not a valid time.' => 'Nilai ini bukan merupakan waktu yang sah.',
    'This value is not a valid URL.' => 'Nilai ini bukan URL yang sah.',
    'The two values should be equal.' => 'Isi keduanya harus sama.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Ukuran berkas terlalu besar. Ukuran maksimum yang diizinkan adalah {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Ukuran berkas terlalu besar.',
    'The file could not be uploaded.' => 'Berkas tidak dapat diunggah.',
    'This value should be a valid number.' => 'Nilai ini harus angka yang sah.',
    'This file is not a valid image.' => 'Berkas ini tidak termasuk citra.',
    'This is not a valid IP address.' => 'Nilai ini bukan alamat IP yang valid.',
    'This value is not a valid language.' => 'Nilai ini bukan bahasa yang sah.',
    'This value is not a valid locale.' => 'Nilai ini bukan lokal yang sah.',
    'This value is not a valid country.' => 'Nilai ini bukan negara yang sah.',
    'This value is already used.' => 'Nilai ini sudah digunakan.',
    'The size of the image could not be detected.' => 'Ukuran dari citra tidak bisa dideteksi.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Lebar citra terlalu besar ({{ width }}px). Ukuran lebar maksimum adalah {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Lebar citra terlalu kecil ({{ width }}px). Ukuran lebar minimum yang diharapkan adalah {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Tinggi citra terlalu besar ({{ height }}px). Ukuran tinggi maksimum adalah {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Tinggi citra terlalu kecil ({{ height }}px). Ukuran tinggi minimum yang diharapkan adalah {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Nilai ini harus kata sandi pengguna saat ini.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Nilai ini harus memiliki tepat {{ limit }} karakter.',
    'The file was only partially uploaded.' => 'Berkas hanya terunggah sebagian.',
    'No file was uploaded.' => 'Tidak ada berkas terunggah.',
    'No temporary folder was configured in php.ini.' => 'Tidak ada folder sementara yang dikonfigurasi di php.ini, atau folder yang dikonfigurasi tidak ada.',
    'Cannot write temporary file to disk.' => 'Tidak dapat menuliskan berkas sementara ke dalam media penyimpanan.',
    'A PHP extension caused the upload to fail.' => 'Sebuah ekstensi PHP menyebabkan kegagalan unggah.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Kumpulan ini harus memiliki {{ limit }} elemen atau lebih.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Kumpulan ini harus memiliki kurang dari {{ limit }} elemen.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Kumpulan ini harus memiliki tepat {{ limit }} elemen.',
    'Invalid card number.' => 'Nomor kartu tidak sah.',
    'Unsupported card type or invalid card number.' => 'Jenis kartu tidak didukung atau nomor kartu tidak sah.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nilai ini bukan Nomor Rekening Bank Internasional (IBAN) yang valid.',
    'This value is not a valid ISBN-10.' => 'Nilai ini bukan ISBN-10 yang sah.',
    'This value is not a valid ISBN-13.' => 'Nilai ini bukan ISBN-13 yang sah.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Nilai ini bukan ISBN-10 maupun ISBN-13 yang sah.',
    'This value is not a valid ISSN.' => 'Nilai ini bukan ISSN yang sah.',
    'This value is not a valid currency.' => 'Nilai ini bukan mata uang yang sah.',
    'This value should be equal to {{ compared_value }}.' => 'Nilai ini seharusnya sama dengan {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Nilai ini seharusnya lebih dari {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Nilai ini seharusnya lebih dari atau sama dengan {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Nilai ini seharusnya identik dengan {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Nilai ini seharusnya kurang dari {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Nilai ini seharusnya kurang dari atau sama dengan {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Nilai ini seharusnya tidak sama dengan {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Nilai ini seharusnya tidak identik dengan {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Rasio citra terlalu besar ({{ ratio }}). Rasio maksimum yang diizinkan adalah {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Rasio citra terlalu kecil ({{ ratio }}). Rasio minimum yang diharapkan adalah {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Citra persegi ({{ width }}x{{ height }}px). Citra persegi tidak diizinkan.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Citra berorientasi lanskap ({{ width }}x{{ height }}px). Citra berorientasi lanskap tidak diizinkan.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Citra berorientasi potret ({{ width }}x{{ height }}px). Citra berorientasi potret tidak diizinkan.',
    'An empty file is not allowed.' => 'Berkas kosong tidak diizinkan.',
    'The host could not be resolved.' => 'Host tidak dapat diselesaikan.',
    'This value does not match the expected {{ charset }} charset.' => 'Nilai ini tidak memenuhi set karakter {{ charset }} yang diharapkan.',
    'This is not a valid Business Identifier Code (BIC).' => 'Nilai ini bukan Kode Identifikasi Bisnis (BIC) yang valid.',
    'Error' => 'Galat',
    'This is not a valid UUID.' => 'Nilai ini bukan UUID yang valid.',
    'This value should be a multiple of {{ compared_value }}.' => 'Nilai ini harus kelipatan dari {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Business Identifier Code (BIC) ini tidak terkait dengan IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Nilai ini harus berisi JSON yang sah.',
    'This collection should contain only unique elements.' => 'Kumpulan ini harus mengandung elemen yang unik.',
    'This value should be positive.' => 'Nilai ini harus positif.',
    'This value should be either positive or zero.' => 'Nilai ini harus positif atau nol.',
    'This value should be negative.' => 'Nilai ini harus negatif.',
    'This value should be either negative or zero.' => 'Nilai ini harus negatif atau nol.',
    'This value is not a valid timezone.' => 'Nilai ini harus merupakan zona waktu yang sah.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'Kata sandi ini telah bocor di data breach, harus tidak digunakan kembali. Silahkan gunakan kata sandi yang lain.',
    'This value should be between {{ min }} and {{ max }}.' => 'Nilai ini harus berada diantara {{ min }} dan {{ max }}.',
    'This value is not a valid hostname.' => 'Nilai ini bukan merupakan hostname yang sah.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Angka dari setiap elemen di dalam kumpulan ini harus kelipatan dari {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'Nilai ini harus memenuhi setidaknya satu dari batasan berikut:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Setiap elemen koleksi ini harus memenuhi batasannya sendiri.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'Nilai ini bukan merupakan International Securities Identification Number (ISIN) yang sah.',
    'This value should be a valid expression.' => 'Nilai ini harus berupa ekspresi yang sah.',
    'This value is not a valid CSS color.' => 'Nilai ini bukan merupakan warna CSS yang sah.',
    'This value is not a valid CIDR notation.' => 'Nilai ini bukan merupakan notasi CIDR yang sah.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Nilai dari netmask harus berada diantara {{ min }} dan {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'Nama file terlalu panjang. Harusnya {{ filename_max_length }} karakter atau kurang.',
    'The password strength is too low. Please use a stronger password.' => 'Kata sandi terlalu lemah. Harap gunakan kata sandi yang lebih kuat.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'Nilai ini mengandung karakter yang tidak diizinkan oleh tingkat pembatasan saat ini.',
    'Using invisible characters is not allowed.' => 'Penggunaan karakter tak terlihat tidak diperbolehkan.',
    'Mixing numbers from different scripts is not allowed.' => 'Menggabungkan angka-angka dari skrip yang berbeda tidak diperbolehkan.',
    'Using hidden overlay characters is not allowed.' => 'Penggunaan karakter overlay yang tersembunyi tidak diperbolehkan.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'Ekstensi file tidak valid ({{ extension }}). Ekstensi yang diperbolehkan adalah {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'Pengkodean karakter yang terdeteksi tidak valid ({{ detected }}). Pengkodean yang diperbolehkan adalah {{ encodings }}.',
    'This value is not a valid MAC address.' => 'Nilai ini bukan alamat MAC yang valid.',
    'This URL is missing a top-level domain.' => 'URL ini tidak memiliki domain tingkat atas.',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'Nilai ini terlalu pendek. Seharusnya berisi setidaknya satu kata.|Nilai ini terlalu pendek. Seharusnya berisi setidaknya {{ min }} kata.',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'Nilai ini terlalu panjang. Seharusnya hanya berisi satu kata.|Nilai ini terlalu panjang. Seharusnya berisi {{ max }} kata atau kurang.',
    'This value does not represent a valid week in the ISO 8601 format.' => 'Nilai ini tidak mewakili minggu yang valid dalam format ISO 8601.',
    'This value is not a valid week.' => 'Nilai ini bukan minggu yang valid.',
    'This value should not be before week "{{ min }}".' => 'Nilai ini tidak boleh sebelum minggu "{{ min }}".',
    'This value should not be after week "{{ max }}".' => 'Nilai ini tidak boleh setelah minggu "{{ max }}".',
    'This value is not a valid slug.' => 'Nilai ini bukan slug yang valid.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Sebelumnya',
    'label_next' => 'Berikutnya',
    'filter_searchword' => 'Cari...',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This value is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This value is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This value is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This value is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.' => 'The filename is too long. It should have {{ filename_max_length }} character or less.|The filename is too long. It should have {{ filename_max_length }} characters or less.',
    'The password strength is too low. Please use a stronger password.' => 'The password strength is too low. Please use a stronger password.',
    'This value contains characters that are not allowed by the current restriction-level.' => 'This value contains characters that are not allowed by the current restriction-level.',
    'Using invisible characters is not allowed.' => 'Using invisible characters is not allowed.',
    'Mixing numbers from different scripts is not allowed.' => 'Mixing numbers from different scripts is not allowed.',
    'Using hidden overlay characters is not allowed.' => 'Using hidden overlay characters is not allowed.',
    'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.' => 'The extension of the file is invalid ({{ extension }}). Allowed extensions are {{ extensions }}.',
    'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.' => 'The detected character encoding is invalid ({{ detected }}). Allowed encodings are {{ encodings }}.',
    'This value is not a valid MAC address.' => 'This value is not a valid MAC address.',
    'This URL is missing a top-level domain.' => 'This URL is missing a top-level domain.',
    'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.' => 'This value is too short. It should contain at least one word.|This value is too short. It should contain at least {{ min }} words.',
    'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.' => 'This value is too long. It should contain one word.|This value is too long. It should contain {{ max }} words or less.',
    'This value does not represent a valid week in the ISO 8601 format.' => 'This value does not represent a valid week in the ISO 8601 format.',
    'This value is not a valid week.' => 'This value is not a valid week.',
    'This value should not be before week "{{ min }}".' => 'This value should not be before week "{{ min }}".',
    'This value should not be after week "{{ max }}".' => 'This value should not be after week "{{ max }}".',
    'This value is not a valid slug.' => 'This value is not a valid slug.',
  ),
  'KnpPaginatorBundle' => 
  array (
    'label_previous' => 'Previous',
    'label_next' => 'Next',
    'filter_searchword' => 'Searchword...',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;

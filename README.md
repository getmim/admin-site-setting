# admin-site-setting

Editor site-setting.

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install admin-site-setting
```

Secara umum, tidak ada konten dari module `site-setting` yang bisa di edit menggunakan
module ini kecuali nama group site-setting tersebut di daftarkan pada konfigurasi dengan
cara seperti di bawah:

```php
return [
    'adminSiteSetting' => [
        'editable' => [
            '/group-name/' => [
                'label' => '/Edit Label/',
                'icon'  => '/group icon in html/',
                'info'  => '/group info text/',
                'route' => ['name',[],[]] // optional
            ]
        ]
    ]
];
```

Hanya setting yang group-nya sudah didaftarkan seperti contoh di atas yang bisa di edit
menggunakan module ini. Opsi route hanya digunakan jika module menangani editor sendiri, atau
jangan diset untuk menggunakan build-id setting editor.
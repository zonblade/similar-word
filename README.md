# similar-word
cari kata yang sama dan return kata tersebut

cara pakai :

<hr>

## installasi via git :
```shell
git clone https://github.com/zonblade/similar-word.git
```

<hr>

## cara pakai

include file similar.php ke project anda.
```php
require_once '/path/to/similar.php';
```

setelah itu buat array wordlist anda, atau menggunakan metode dinamis terserah anda.

```php
$wordlist = [
  "abc def",
  "abc789",
  "uyodacabc"
];
```

setelah itu masukan wordlist ke kode similar-word.
```php
$result = \SimilarWord\find($wordlist);
```

maka result yang dihasilkan adalah STRING.
```php
echo $result; // hasilnya 'abc';
```
jika error
```php
echo $result; // hasilnya 'Array Error';
```

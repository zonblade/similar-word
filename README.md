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
  "abc789de",
  "uyoddeacabc"
];
```
penjelasan singkat kode
```php
\SimilarWord\find($wordlist,$result_array);
```
|syntax|penjelasan|
|---|---|
|`$wordlist`| berupa array kata/word yang ingin di compare|
|`$result_array`| `true` jika ingin resultnya berupa array, `false` jika ingin resulnya berupa string|

setelah itu masukan wordlist ke kode similar-word.
```php
$result_array = \SimilarWord\find($wordlist,true); // menghasilkan result string
$result_string = \SimilarWord\find($wordlist,false); // menghasilkan result array
```

maka result yang dihasilkan adalah STRING.
```php
print_r($result_array); 
/* hasilnya 
[ 
  [0]=>'abc',
  [1]=>'de'
]
*/


print_r($result_string);
/* hasilnya
abc de
*/
```


jika error
```php
print_r($result_array); 
/* hasilnya 
[ 
  [status] => "array error"
]
*/


print_r($result_string);
/* hasilnya
'Array Error'
*/
```

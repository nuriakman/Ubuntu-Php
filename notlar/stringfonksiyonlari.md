# STRING dizifonksiyonlari

| Fonksiyon | Açıklama |
| ----- | ----- |
| `strlen()` |  Bir ifadenin toplam karakter sayısını verir. `strlen($str);` |
| `strstr()` |  Bir ifade içerisinde bir değer aramamızı sağlar. Samanlıkta iğne arar. True-False döner. `strstr($str, 'value');` |
| `strpos()` | Bir ifade içerisinde aradığımız değerin kaçıncı karakterden sonra geldiğini gösterir. Samanlıkta iğne arar. `strpos($str, 'Çiçek');` |
| `strtolower()` | Küçük yazılan karakterlerin tamamını büyüğe çevirir. `strtolower($str);` |
| `strtoupper()` | Büyük yazılan karakterlerin tamamını küçüğe çevirir. `strtoupper($str);` |
| `ucwords()` | Her kelimenin baş harfini büyütmek için kullanılır. `ucwords($str);` |
| `ucfirst()` | Cümlenin ilk harfini büyütür. `ucfirst($str);` |
| `trim()` | Sol ve sağda bulunan boşlukları kaldırmaya yarar. İkinci parametre olarak istediğimiz karakteri de verip o karakteri kaldırmamızı sağlar. `trim($str);` |
| `ltrim()` | Solda bulunan boşlukları kaldırır. `ltrim($str);` |
| `rtrim()` | Sağda bulunan boşlukları kaldırır. `rtrim($str);` |
| `substr()` | İfadede istediğimiz yeri çekip almamızı sağlar. `substr($str, 2, 3);` 3 parametre alır. 1. parametre 'ifade', 2. parametre "nereden başlıyacağı" ve 3. parametre ise "kaç karakter alacağı". |
| `str_replace()` | İfade içerisinde değişiklik yapmamızı sağlar. `str_replace('search_value', 'value', $str);` 3 parametre alır. 1. parametre "neyi değiştireceğimi", 2. parametre "yerine ne gelecek" ve 3. parametre ise "ifademiz" dir.|
| `str_repeat()` | Bir karakteri tekrar ettirmemizi sağlar. `str_repeat('to be repeated', 'how many');` 2 parametre alır. 1. parametrede tekrar etmesini istediğimiz karakteri, 2. parametredese ise tekrar sayısını gireriz. |

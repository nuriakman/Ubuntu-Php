# STRING FONKSİYONLARI

| Fonksiyon | Açıklama |
| ----- | ----- |
| `strlen($str);` |  Bir ifadenin toplam karakter sayısını verir. |
| `strstr($str,'value');` |  Bir ifade içerisinde bir değer aramamızı sağlar. Samanlıkta iğne arar. True-False döner. |
| `strpos($str,'search_value');` | Bir ifade içerisinde aradığımız değerin kaçıncı karakterden sonra geldiğini gösterir. Samanlıkta iğne arar. |
| `strtolower($str);` | Küçük yazılan karakterlerin tamamını büyüğe çevirir. |
| `strtoupper($str);` | Büyük yazılan karakterlerin tamamını küçüğe çevirir. |
| `ucwords($str);` | Her kelimenin baş harfini büyütmek için kullanılır. |
| `ucfirst($str);` | Cümlenin ilk harfini büyütür. |
| `trim($str);` | Sol ve sağda bulunan boşlukları kaldırmaya yarar. İkinci parametre olarak istediğimiz karakteri de verip o karakteri kaldırmamızı sağlar. |
| `ltrim($str);` | Solda bulunan boşlukları kaldırır. |
| `rtrim($str);` | Sağda bulunan boşlukları kaldırır. |
| `substr($str,2,3);` | İfadede istediğimiz yeri çekip almamızı sağlar. 3 parametre alır. 1. parametre 'ifade', 2. parametre "nereden başlayacağı" ve 3. parametre ise "kaç karakter alacağı". |
| `str_replace('search_value','value',$str);` | İfade içerisinde değişiklik yapmamızı sağlar. 3 parametre alır. 1. parametre "neyi değiştireceğimi", 2. parametre "yerine ne gelecek" ve 3. parametre ise "ifademiz" dir.|
| `str_repeat('to_be_repeated','how many');` | Bir karakteri tekrar ettirmemizi sağlar. 2 parametre alır. 1. parametrede tekrar etmesini istediğimiz karakteri, 2. parametrede ise tekrar sayısını gireriz. |

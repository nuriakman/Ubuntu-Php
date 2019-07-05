
# İŞE YARAR LİNUX KOMUTLARI

```bash
  # !!! Linux komutları ve dosya/klasör adları büyük-küçük harf duyarlıdır. !!!
```

## Temel Komutlar

| Komut |Açıklama  |!!!|
|--|--|--|
| whoami  | Sisteme şu an bağlı olan kullanıcının adını görmek. | :green_heart: |
| logname | Giriş yapılan kullanıcıyı ekrana yazar. | :green_heart: |
| groups | Kullanıcının hangi guruba dahil olduğunu gösterir. "groups kullaniciadi"| :green_heart: |
| pwd | Bulunduğunuz dizinin ismini verir. | :green_heart: |
| ls | Dizin içerisini listeler. | :green_heart: |
| ls -hal | Dizin içerisini detaylı olarak listeler. Dosya boyutlarıda anlaşılır olarak gelir. | :green_heart: |
| cd | (Change Directory) En üst dizine (Ev dizinine) gider. "cd .." Bir üst dizine geçer. "cd /dizin_adi" İsmi belirtilen dizine gider. | :green_heart: |
| man | Komut için yardım dosyasını açar. "man komutadi" | :green_heart: |
| wc | Dosyada bulunan satır,kelime veya karakter sayısını gösterir. | :green_heart: |
| date | Mevcut saat ve tarihi gösterir. | :green_heart: |
| clear | Konsol ekranını temizler. | :green_heart: |
| history |Sistemde kullanılmış olan komutları görmek. | :green_heart: |
| top | Sistemde çalışan işlemleri gösterir. "q" ile çıkılır. | :green_heart: |
| kill | Çalışan süreçleri durdurur(öldürür). "kill 951" PID numarası 951 olan programı kapatır. Neyi kapattığınıza dikkat edin!| :broken_heart: |
| cal | İçinde bulunulan ayın takvimini gösterir. | :green_heart: |
| uptime | Sistemin ne kadar süredir ayakta olduğunu gösterir. | :green_heart: |
| free | Sistemdeki kullanılan ve boş olan bellek miktarını gösterir. | :green_heart: |


## DİZİN ve DOSYA İŞLEMLERİ

### Dosya İçeriği Görme ve Düzenleme

| Komut |Açıklama | Kullanımı |!!!|
|--|--|--|--|
| cat |Belirtilen dosyanın içeriğini komut satırında gösterir. | cat dosyaadi | :green_heart: |
| nano |Belirtilen dosyanın içeriğini komut satırında gösterir. | nano deneme.html | :green_heart: |
| pico | Dosyaları düzenlemek için kolay metin editörü. | pico dosyaadi | :green_heart: |
| sort | Dosyadaki satırları alfabetik sıraya göre dizip gösterir. | sort dosyaadi | :green_heart: |
| less | Dosyada ilerlemek için kullanılır (Çıkış q ile). | less dosyaadi | :green_heart: |


### Dizin ve Dosya Oluşturma

| Komut |Açıklama | Kullanımı |!!!|
|--|--|--|--|
| mkdir | (Make Directory) Dizin oluşturur. | mkdir dizinadi | :green_heart: |
| touch	| Boş bir dosya yaratmak veya olan dosyanın zaman bilgilerini değiştirmek icin(yaratılma, erişilme gibi). | touch dosyaadi | :green_heart: |
| rmdir	| Yarattığımız dosyayı kaldırabiliriz. | rmdir dosyaadi | :green_heart: |
| rm	| (remove) Dosya silmemize yarar. | rmdir [dosyaadi] | :green_heart: |
| rmmod	| Yüklü modülleri kaldırmak icin kullanılır. | | :green_heart: |
| cp	| (copy)Dosya kopyalama. | cp dosya1 dosya2 | :green_heart: |
| mv	| (move) Dosya taşıma. İlk parametre kopyalanacak dosyayı ikinci parametre ise hedefi gösterir. Eğer taşımak istiyorsanız, aynı şekilde kullanabiliriz. | mv dosya1 dosya2 | :green_heart: |
| cut	| Bir dosya içerisindeki satırların içerdiği alanların keserek belirli bir yere kopyalamak için kullanılır. | cut seçenekler dosya | :green_heart: |
| Paste	| Aynı bir dosyanın veya başka dosyaların belirli kısımlarını bir araya getirmek için kullanılır. Paste komutuyla ister yatay, isterse düşey olarak birleştirme işlemi yapılabilir. | paste seçenekler dosya | :green_heart: |
| dd	| Disk iceriklerini kopyalamak icin | | :green_heart: |


Resimdeki sayfayı göremiyorsak telaşlanmayın. Eğer güvenlik duvarı kullanıyorsanız 80 nolu TCP portu kapalı yada meşgul olabilir. Bunu açmak için aşağıdaki komutu gönderin ve tekrar tarayıcıdan deneyin.

```bash
  $ sudo iptables -I INPUT -p tcp --dport 80 -j ACCEPT
```

***  Portları Dinleme  ***

Localhost'a bağlanamazsak 80 nolu port kapalımı yada başka bir programmı kullanıyor bakmamız gerekmektedir. Bunu yapmak için [netstat](https://www.netinternet.com.tr/bilgi-bankasi/netstat-nedir-nasil-kullanilir) komutunu kullanırız.

```bash
  $ sudo apt install net-tools # Netstat'ın bulunduğu paketi kur.
  $ sudo netstat –tlpn # Portları dinle.
```
Sistemimizin performansını artırmak için gerekli olan "Medya Kodekleri" ni yüklüyoruz.
```bash
  $ sudo apt install -y ubuntu-restricted-extras libavcodec-extra libdvd-pkg
```

*** Servisleri yeniden başlatmak; ***

```bash
  $ sudo service servisadi restart
```

*** Servisleri bilgisayar açıldığında aktif etmek; ***

```bash
  $ sudo systemctl enable servisadi
```

*** Php7 paketlerini görebilmek için; ***

```bash
  $ apt-cache search php7
```
# İŞE YARAR LİNUX KOMUTLARI

```bash
  # !!! Linux komutları ve dosya/klasör adları büyük-küçük harf duyarlıdır. !!!
```

## APT-GET

Ubuntu gibi Debian temelli Linux dağıtımlarında, tanımlanmış kaynaklardan yeni yazılım paketlerini indirme ve bağımlılıkları ile birlikte kurma, paketleri yükseltme, paket liste içeriklerini güncelleme gibi işlemleri yerine getirmek için kullanılan bir komut satırı arayüzüdür.

| Komut |Açıklama  |!!!|
|--|--|--|
| sudo apt-get install paket_adı | Paket kurmak | :green_heart: |
| sudo apt-get install paket1 paket2 paket3.... | Birden çok paket kurmak | :green_heart: |
| sudo apt-get remove paket_adı | Kurulu paketi kaldırmak | :broken_heart: |
| sudo apt-get purge paket_adı | Paketi dosyaları ile birlikte kaldırmak | :broken_heart: |
| sudo apt-get autoremove | Paketi bağımlılıkları ile birlikte kaldırmak | :broken_heart: |
| sudo apt-get update | Paket listesini güncellemek | :green_heart: |
| sudo apt-get upgrade | Kurulu paketleri güncellemek | :green_heart: |
| sudo apt-get dist-upgrade | Tüm sistemi yükseltmek | :broken_heart: |
| sudo add-apt-repository yeni_deponun_PPA_adresi | Yeni depo eklemek | :green_heart: |
| sudo apt-cache search paket_adı | Program aramak | :green_heart: |
| sudo apt-cache show paket_adı | Program hakkında bilgi almak | :green_heart: |
| sudo apt-get clean | Sistemde "/var/cache/apt/archives/" dizininde tutulan paketleri silmek | :broken_heart: |
| apt-get help | Apt komutları hakkında yardım almak | :green_heart: |

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

## FAYDALI KOMUTLAR

### Sistem sıcaklığını öğrenmek

İlgili paketin kurulması ve çalıştırılması;

```bash
apt-get install lm-sensors
sensors
```

### Sistemin kaç BİT olduğunu öğrenmek

```bash
uname -m
```

### Sistem hakkında detaylı bilgi almak

```bash
uname -a
```

### Donanım bilgisi almak

```bash
dmesg
```

### Donanım bilgisi hata aramak

```bash
dmesg -level=err,warn
```

### PCI aygıtlarını listeleme

PCI aygıtlar genelde sisteme bağlı ses, Ethernet kartı, RAID kontrol kartı ve ekran kartı gibi cihazları gösterir.
-vv parametresi ile daha detaylı gösterir.
-m daha okunaklı yapar.

```bash
lspci -v
```

### USB aygıtlarını listeleme

```bash
lsusb -v 
```

### CPU bilgisi almak

```bash
lscpu
```

### Hangi masaüstü ortamını kullandığımızı görmek

``bash
echo $DESKTOP_SESSION
```

### Hangi modüllerin yüklü olduğuna bakmak

```bash
lsmod
```

### Yüklü modüllerden herhangi birinin bilgilerini sorgulamak

-a komutu modülün yazarını gösterir(lsmod ile aldığımız modül adı kullanılır).

```bash
modinfo -d modülAdi
```

### Modül yüklemek 

```bash
modprobe modülAdi
```

### Modül kaldırmak 

Modül meşgul ise kaldırmaz!

```bash
rmmod modülAdi
```

Modülün bağımlılıkları varsa ve bundan dolayı hata alıyorsanız;

```bash
modprobe -r modülAdi
```

### Komut dosyalarının hangi adreste saklandığını öğrenmek

```bash
which komutadi
```

### Önyükleme günlüklerini görüntülemek

```bash
journalctl -b 
```

## KULLANICI İŞLEMLERİ

### Yeni kullanıcı eklemek

“-m” HOME klasörünün de oluşturmasını sağlar,
“-s” Shell olarak bash kabuğunu atar.

```bash
sudo useradd -m -s /bin/bash yeniKullaniciAdi
```

### Kullanıcıya şifre atamak

```bash
sudo usermod -p sifre kullaniciAdi
```

### Kullanıcı silmek

```bash
sudo userdel -r kullaniciAdi 
```

### Gruba kullanıcı eklemek

```bash
sudo usermod -G grupAdi eklenecekKullaniciAdi
```

### Kullanıcı gruplarını görmek 

```bash
cat /etc/group
```

### Kullanıcının dahil olduğu grupları görmek

```bash
cat /etc/group | grep "kullaniciAdi"
```

### Yeni kullanıcı grubu eklemek

```bash
sudo grupadd yeniGrupAdi
```

### Grup adını değiştirmek

```bash
sudo groupmod -p yeniGrupAdi eskiGrupAdi
```

## DOSYA İŞLEMLERİ

### Dosya sıkıştırmak

gzip dışında bzip2 vardır, biraz daha fazla şıkıştırabilir. bunzip ile çıkartılır.

```bash
gzip dosyaadi
```

### Dosyayı çıkarmak

```bash
gunzip dosyaAdi 
```

### Dosyaları arşivlemek

Birden fazla doysa için kullanılır.

"-c" yeni arşiv dosyası oluşturmak için,
"-v" işlenen dosyaların listelenmesi için,
"-f" ise çıktının bir dosya olacağını belirtmek için kullanılır.

```bash
tar -cvf dosya1.x dosya2.x dosya3.x
```

### Arşiv dosyasının içerisindeki dosyaları görüntülemek

Bu işlem dosyaları ayıklamaz sadece listeler!

```bash
tar -tf dosyaAdi
```

### Arşiv dosyasından dosyaları ayıklamak/çıkarmak

```bash
tar -xvf dosyaAdi
```

### Arşiv dosyasına yeni bir dosya ilave etmek

```bash
tar -rf dosyaAdi.tar yeniDosta.x 
```

### Dosyaları arşivlerken aynı anda sıkıştırmak

```bash
tar -zcvf arsiv.tar.gz dosya1 dosya2 dosya3 
```

### Arşivlenip sıkıştırılmış bir dosyayı ayıklamak

```bash
tar -zxvf arsiv.tar.gz
```






# Ubuntu-Php
Ubuntu'da PHP çalışma ortamı nasıl oluşturulur?

Karşılabileceğim sorunların çözümleri ne olacak?

Çözemediğiniz sorunlarınız bizlere referans olacaktır. Lütfen gönderin, sorun! Ama çözüm arayıp bulamadıktan sonra...

# UBUNTU KURULUM SONRASI YAPILACAKLAR

*Not: Konsol komutlarını kopyalarken

## SİSTEMİN GÜNCELLENMESİ
**Depo Listesinin Güncellenmesi:** Linux sistemi kendisini güncellemek için bir merkeze bakıp, kontrol yapmaya ihtiyacı vardır. Bu listelerin bakılacağı yerler /etc/apt/sources.list dosyasında tutulur. "update" komutu ile sistemde kurulu olan paketler, paket deposundaki versiyonları ile farkları araştırılır ve liste güncellenir. Bu komut kurulum yapmaz.

```bash
  $ sudo apt update # Depo listelerini güncelle.
```

**Paketlerin Güncellenmesi:** Sistemde kurulu olan paketler, "upgrade" komutu ile güncellenen listeye göre bulunan en son sürüme yükseltir.

```bash  
  $ sudo apt upgrade -y # Paketlerin yeni sürümleri varsa yükselt.
```

## PHP PAKETLERİNİN KURULMASI
### [Sunucunun  Kurulması]
Php için olmazsa olmaz, ***açık kaynak kodlu*** ve ücretsiz bir web sunucusu yazılımı olan *Apache* yi kuralım;

```bash
  $ sudo apt install -y apache2 apache2-utils # Apache kur, ve onay isterse "evet" de.
  $ sudo systemctl start apache2 # Apache2'yi yeniden başlat.
  $ sudo sudo systemctl enable apache2 # Apache2'yi açılışta otomatik başlat.
  $ systemctl status apache2 # Aşağıdaki çıktıyı verecektir! Vermezse telaşlanmayın!
```
**Örnek Çıktı:**
```bash
● apache2.service - The Apache HTTP Server
   Loaded: loaded (/lib/systemd/system/apache2.service; enabled; vendor preset: enabled)
  Drop-In: /lib/systemd/system/apache2.service.d
           └─apache2-systemd.conf
   Active: **active (running)** since Sat 2018-09-08 10:46:05 UTC; 3min 37s ago
 Main PID: 1610 (apache2)
    Tasks: 55 (limit: 505)
   CGroup: /system.slice/apache2.service
           ├─1610 /usr/sbin/apache2 -k start
           ├─1612 /usr/sbin/apache2 -k start
           └─1613 /usr/sbin/apache2 -k start
```
**Sunucuyu Test Etmek:** Taracımızın adres çubuğuna "127.0.0.1" veya "localhost" yazarak "*Apache2 Ubuntu Default Page*" sayfasını görebiliyorsak yani aşağıdaki resim gibi bir sayfa ile karşılaştıysak apache kurulmuş demektir.

![](https://lh3.googleusercontent.com/XNhp6I05Wy_eMVUEdGHid8CnD9tJeeY3DYaGaXJ8Ls_eLhbbow1Ck1LusT9T0uMKDKBEa39vSkE)

Resimdeki sayfayı göremiyorsak telaşlanmayın. Eğer güvenlik duvarı kullanıyorsanız 80 nolu TCP portu kapalı yada meşgul olabilir. Bunu açmak için aşağıdaki komutu gönderin ve tekrar tarayıcıdan deneyin.

```bash
  $ sudo iptables -I INPUT -p tcp --dport 80 -j ACCEPT
```

**Kök Klasörü Yetkilendirmesi:** Apache'nin kullandığı /var/www/html/ kök dizininde işlem yapabilmesi için, sahipliğini "apache" kullanıcısına veriyoruz.

```bash
  $ sudo chown www-data:www-data /var/www/html/ -R
```

### [Veritabanı Kurulumu]

MariaDB, GNU Genel Kamu Lisansı altında serbest olarak kullanılabilen, MySQL'in yaratıcısı olan *Monty Widenius*'un MySQL'in kodunu çatallayıp (fork) "çoğunlukla" MySQL ile aynı komutları, arayüzleri ve API'leri destekleyecek şekilde geliştirmeye başlanan, toplulukla iç içe hızlı ve verimli şekilde geliştirilmeye devam edilen MySQL ilişkisel veritabanı yönetim sistemidir.

```bash
  $ sudo apt install mariadb-server mariadb-client # Mariadb kurulum.
  $ sudo mariadb -u root # Mariadb'ye root şifresi istemeden girmek.
  $ sudo systemctl start mariadb # Mariadb yeniden başlat.
  $ sudo sudo systemctl enable mariadb # Açılışta otomatik başlatma.
  $ systemctl status mariadb # Hata verebilir, sorun yok devam!
```
**Örnek Çıktı:**

```bash
● mariadb.service - MariaDB 10.1.34 database server
   Loaded: loaded (/lib/systemd/system/mariadb.service; enabled; vendor preset: enabled)
   Active: active (running) since Sat 2018-09-08 11:13:27 UTC; 21s ago
     Docs: man:mysqld(8)
           https://mariadb.com/kb/en/library/systemd/
 Main PID: 3473 (mysqld)
   Status: "Taking your SQL requests now..."
    Tasks: 27 (limit: 505)
   CGroup: /system.slice/mariadb.service
           └─3473 /usr/sbin/mysqld
```

**Root kullanıcısı için parola belirleme:**

```bash
  $ sudo mysql -u root
      show databases;
      use mysql;
      update user set plugin='' where User='root';
      flush privileges;
      exit;
```

**MySql Parolası Belirleme:**
Not: Unutmayacağınız bir parola lütfen!

```bash
  $ sudo mysql_secure_installation   
```
Parolayı iki defa girmenizi ister. Parola ekranda görülmez ve aynı olmak zorundadır. Bu komuttan sonra gelen ekranda, sırasıyla aşağıda yer alan resimlerdeki adımları izleyin;

![](https://lh3.googleusercontent.com/doizwnivOhuJS2Ce7CTbsKNMbhAGt0If3Qw_jkyBPKIpIh_MX9Zt_P8fh2t0hrzg9ao04i_pkm4)
![](https://lh3.googleusercontent.com/9XvVC-PXnCQ3Qk9lSnJwbwKzamA_YsaUJ0KA56soR-lVmkzUygNNWWwf3EQCO_BOGV4RMeUrUFI)


### [Php7 Kurulumu]
*Not: Bu komuttaki kurulacak paketler temel ihtiyaçlar için zorunlu paketlerdir.*

```bash
  $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php-common php7.2-cli php7.2-common php7.2-json php7.2-opcache php7.2-readline # Php7'yi belirtilen paketlerle beraber kur.
  $ sudo a2enmod php7.2 # Apache php7.2 modülünü etkinleştir.  
  $ sudo systemctl restart apache2 # Apache Web sunucusunu yeniden başlat.  
  $ sudo php -v # Php versiyon kontrolu yap.
```

:four_leaf_clover: 10- PHP betiklerini Apache sunucusuyla test etmek;

```bash
  $ sudo nano /var/www/html/info.php
```
info.php dosyası oluşturulup konsolda açılır. İçerisine;

```php
  <?php phpinfo(); ?>
```
yazalım ve tarayıcı adres çubuğunda, "http://localhost/info.php" adresi ile test edelim.

![](https://lh3.googleusercontent.com/KULDQE1ANwu3I_KmpzT7G-N8RiuDfH-GjQxjHm0jH0BwwKJyiL1UXiPRG42lL8s7wL03AuQoRRg)

:four_leaf_clover: 11- html dizini için yetkilendirme

```bash
  $ sudo adduser $USER www-data
  $ sudo chown -R $USER:www-data /var/www/html/
```

:four_leaf_clover: 12- GİT Kurulumu

```bash
   $ sudo apt install git -y
   $ git config --global user.email badboy714@gmail.com
   $ git config --global user.name "Hasan Çiçek"
```

:four_leaf_clover: 13- Masaüzerine HTML klasörü kısayolunun açılması

```bash
  $ cd ~/Desktop # İngilizce kurulum yapıldıysa bu komut
  $ cd ~/Masaüstü # Türkçe kurulum yapıldıysa bu Komut
  $ ln -s /var/www/html/  
  $ git init # Git ile çalışabilmek için.
```

:four_leaf_clover: 14- Adminer Programı Kurulumu

```bash
  $ cd /var/www/html
  $ mkdir adminer
  $ cd adminer
  $ wget -O index.php https://www.adminer.org/latest.php
```

:four_leaf_clover: 15- ATOM Editörü Kurulumu

```bash
  $ wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -
  $ sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
  $ sudo apt update
  $ sudo apt install atom -y
```

### PÜF NOTLARI

:wink: 1- Uygulamalardan "*Yazılım Güncelleştirici*" yi açıp, ayarlar düğmesine basarak "*Yazılım ve Güncelleştirmeler*" ekranına geçiyoruz. "*Diğer Yazılımlar*" sekmesindeki kutuları işaretledikten sonra, "*Ek Sürücüler*" sekmesine geçerek sistemin tarama yapmasını bekliyoruz. Ek sürücü varsa ve sürücü gerekli ise kuruyoruz.

:wink: 2- Sistemimizin performansını artırmak için gerekli olan "Medya Kodekleri" ni yüklüyoruz.

```bash
  $ sudo apt install ubuntu-restricted-extras libavcodec-extra libdvd-pkg
```

:wink: 3- Tek tıkla pencereleri küçültmek için aşağıdaki komutları konsoldan yollayın!

```bash
  $ gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
```

:wink: 4- "*Ubuntu Yazılımlar*" uygulamasını açarak ihtiyacımız ve tercihimiz olan uygulamaları kuruyoruz. Bir kaç uygulama tavsiyesi;

- **Telegram:** Haberleşme için kullanabileceğiniz sosyal uygulamadır.
 - **Chromium:** Alternatif tarayıcı.
 - **Vlc:** Video oynatma uygulaması.
 - **Gimp:** Photoshop'ın linux tarafı alternatif resim işleme uygulaması.
 - **Kdenlive:** Video düzenleme uygulaması.
 - **FreeCad:** 3 boyutlu ve hareketli grafikler yapabileceğiniz Solid'in alternatifi uygulamadır.

:wink: 5- Php7 paketlerini görebilmek için;

```bash
  $ apt-cache search php7
```

:wink: 6- Servisleri yeniden başlatmak;

```bash
  $ sudo service servisadi restart
```

:wink: 7- Servisleri bilgisayar açıldığında aktif etmek;

```bash
  $ sudo systemctl enable servisadi
```

:wink: 8- Synaptic paket yükleyici-kaldırıcı kurmak;

```bash
   $ sudo apt --fix-broken install
   $ sudo apt install synaptic
```

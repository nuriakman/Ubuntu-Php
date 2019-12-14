# PHP ÇALIŞMA ORTAMI HAZIRLAMA (LAMP)

```bash
Not: Konsol komutlarını kopyalarken, "#" simgesi ile başlayan yerleri almayınız. Buralar açıklamadır. Komutların ne yaptığını, ne işe yaradığını anlamanız için yazılmıştır.
```

Kurulum komutlarının açıklamalı sade listesine [buradan](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/notlar/kurulum_kodlari.md) ulaşabilirsiniz.

## SİSTEMİN GÜNCELLENMESİ

**Depo Listesinin Güncellenmesi:** Linux sistemi kendisini güncellemek için bir merkeze bakıp, kontrol yapmaya ihtiyacı vardır. Bu listelerin bakılacağı yerler /etc/apt/sources.list dosyasında tutulur. "update" komutu ile sistemde kurulu olan paketler, paket deposundaki versiyonları ile farklarına bakılır ve fark varsa liste güncellenir. Bu komut kurulum yapmaz. Ubuntu paket listeleri hakkında detaylı bilgiye [buradan](https://wiki.ubuntu-tr.net/index.php?title=Yaz%C4%B1l%C4%B1m_ve_G%C3%BCncelle%C5%9Ftirmeler) ulaşabilirsiniz.

```bash
# Depo listelerini güncelle.
sudo apt update
```

**Paketlerin Güncellenmesi:** Sistemde kurulu olan paketler, "upgrade" komutu ile güncellenen listeye göre bulunan en son sürüme yükseltir.

```bash
# Paketlerin yeni sürümleri varsa yükselt.
sudo apt upgrade -y
```

Bu komuttan sonra ekranda aşağıdaki gibi bir komut görebiliriz. Bu komut gereksiz, kullanılmayan fazla paketlerinde olduğunu gösterir. Onları kaldırmak için bu komutu kullanırız.

```bash
sudo apt autoremove
```

## PHP ORTAMI İÇİN GEREKLİ PAKETLERİN KURULMASI

### WEB SUNUCUSUNUN (Apache) KURULMASI

Php için olmazsa olmaz, bir web sunucusu yazılımı olan *Apache* yi kuralım;

```bash
# Apache kur.
sudo apt install apache2 -y
# Apache2'yi açılışta otomatik başlat.
sudo sudo systemctl enable apache2
```

```bash
# Servisin çalıştığını kontrol etmek. Yeşil olacak.
sudo systemctl status apache2.service
```

**Örnek Ekran Görüntüsü:**

```bash
hasan@armada:/var/www/html$ sudo systemctl status apache2.service
[sudo] password for hasan:
● apache2.service - The Apache HTTP Server
   Loaded: loaded (/lib/systemd/system/apache2.service; enabled; vendor preset: enabled)
   Active: active (running) since Sat 2019-07-06 18:08:51 +03; 1min 58s ago
     Docs: https://httpd.apache.org/docs/2.4/
  Process: 898 ExecStart=/usr/sbin/apachectl start (code=exited, status=0/SUCCESS)
 Main PID: 1035 (apache2)
    Tasks: 6 (limit: 4566)
   Memory: 18.4M
   CGroup: /system.slice/apache2.service
           ├─1035 /usr/sbin/apache2 -k start
           ├─1187 /usr/sbin/apache2 -k start
           ├─1188 /usr/sbin/apache2 -k start
           ├─1189 /usr/sbin/apache2 -k start
           ├─1190 /usr/sbin/apache2 -k start
           └─1191 /usr/sbin/apache2 -k start
```

Çıkmak için ```:q``` yapın!

**Sunucuyu Test Etmek:** Taracımızın adres çubuğuna "127.0.0.1" veya "localhost" yazarak "*Apache2 Ubuntu Default Page*" sayfasını görebiliyorsak yani aşağıdaki resim gibi bir sayfa ile karşılaştıysak apache kurulmuş demektir. Testi buradan ( [localhost](http://localhost/)  yada [127.0.0.1](http://127.0.0.1/)  ) yapabilirsiniz.


![](https://lh3.googleusercontent.com/XNhp6I05Wy_eMVUEdGHid8CnD9tJeeY3DYaGaXJ8Ls_eLhbbow1Ck1LusT9T0uMKDKBEa39vSkE)

**Kök Klasörü Yetkilendirmesi:** Apache'nin kullandığı /var/www/html/ kök dizininde işlem yapabilmesi için, sahipliğini "apache" kullanıcısına veriyoruz.

```bash
# Html dizini için kullanıcıyı yetkilendir.
sudo adduser $USER www-data
# Html dizini ve alt elemanlarının sahibini ve grubunu www-data yap.
sudo chown -R $USER:www-data /var/www/html/
```

### VERİTABANI (MariaDB) KURULUMU

MariaDB, GNU Genel Kamu Lisansı altında serbest olarak kullanılabilen, MySQL'in yaratıcısı olan *Monty Widenius*'un MySQL'in kodunu çatallayıp (fork) "çoğunlukla" MySQL ile aynı komutları, arayüzleri ve API'leri destekleyecek şekilde geliştirmeye başlanan, toplulukla iç içe hızlı ve verimli şekilde geliştirilmeye devam edilen MySQL ilişkisel veritabanı yönetim sistemidir.

Version ve sürüme göre kodlara https://downloads.mariadb.org/mariadb/repositories/#mirror=nodesdirect

```sh
sudo apt-get install software-properties-common
sudo apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0xF1656F24C74CD1D8
sudo add-apt-repository 'deb [arch=amd64,arm64,ppc64el] http://mariadb.mirrors.ovh.net/MariaDB/repo/10.3/ubuntu bionic main'
sudo apt update
# Mariadb'yi kur.
sudo apt install mariadb-server
# Mariadb'yi açılışta otomatik başlat.
sudo systemctl restart mariadb
# Servisin çalıştığını kontrol etmek. Yeşil olacak.
systemctl status mariadb.service
```

Çıkmak için ise ```:q``` ya basın.

**Örnek Ekran Görüntüsü:**

```bash
hasan@armada:/var/www/html/Ubuntu-Php$ systemctl status mariadb.service
● mariadb.service - MariaDB 10.3.13 database server
   Loaded: loaded (/lib/systemd/system/mariadb.service; enabled; vendor preset: enabled)
   Active: active (running) since Sat 2019-07-06 18:27:03 +03; 5s ago
     Docs: man:mysqld(8)
           https://mariadb.com/kb/en/library/systemd/
  Process: 5812 ExecStartPre=/usr/bin/install -m 755 -o mysql -g root -d /var/run/mysqld (code=exited, status=0/SUCCESS)
  Process: 5823 ExecStartPre=/bin/sh -c systemctl unset-environment _WSREP_START_POSITION (code=exited, status=0/SUCCESS)
  Process: 5825 ExecStartPre=/bin/sh -c [ ! -e /usr/bin/galera_recovery ] && VAR= ||   VAR=`/usr/bin/galera_recovery`; [ $? -eq 0 ]   && systemctl set
  Process: 6091 ExecStartPost=/etc/mysql/debian-start (code=exited, status=0/SUCCESS)
  Process: 6094 ExecStartPost=/bin/sh -c systemctl unset-environment _WSREP_START_POSITION (code=exited, status=0/SUCCESS)
 Main PID: 6060 (mysqld)
   Status: "Taking your SQL requests now..."
    Tasks: 31 (limit: 4566)
   Memory: 74.5M
   CGroup: /system.slice/mariadb.service
           └─6060 /usr/sbin/mysqld
```

**Root Kullanıcısı İçin Parola Belirleme:**

```bash
# Bu komut ile mariadb ekranına geçelim.
sudo mysql -u root
```

**Örnek Ekran Görüntüsü:**

```sh
hasan@armada:~$ sudo mariadb -u root
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 47
Server version: 10.3.13-MariaDB-2 Ubuntu 19.04

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]>
```

Aşağıdaki komutları, satır satır gönderin.

```bash
show databases;
use mysql;
update user set plugin='' where User='root';
flush privileges;
# Mariadb'den çıkış.
exit;
```

**MySql Parolası Belirleme:**

Not: Unutmayacağınız bir parola lütfen!

```bash
sudo mysql_secure_installation   
```

**Parola** yı iki defa girmenizi ister.  **Parola** ekranda görülmez ve aynı olmak zorundadır. Bu komuttan sonra gelen ekranda, sırasıyla aşağıda yer alan resimlerdeki adımları izleyin;

![](https://lh3.googleusercontent.com/doizwnivOhuJS2Ce7CTbsKNMbhAGt0If3Qw_jkyBPKIpIh_MX9Zt_P8fh2t0hrzg9ao04i_pkm4)

![](https://lh3.googleusercontent.com/9XvVC-PXnCQ3Qk9lSnJwbwKzamA_YsaUJ0KA56soR-lVmkzUygNNWWwf3EQCO_BOGV4RMeUrUFI)


**my.cnf Ayarları:**

**my.cnf dosyası** sunucunuzda bulunan **veri tabanı yönetim sisteminin** ayar dosyasıdır ve oldukça önemlidir. my.cnf sunucuda varsayılan olarak /etc/my.cnf yolu ile erişilebilir ve düzenlenebilir şekilde kayıtlıdır. Ayrıca dosyanın yerini konsoldan aşağıdaki komutu yazarak bulabiliriz.

```bash
  sudo find / -name my.cnf
```

Ekran çıktısı:

```bash
  [sudo] password for ******:
  /var/lib/dpkg/alternatives/my.cnf
  /etc/mysql/my.cnf  # DOSYA ADRESİ BURADA
  /etc/alternatives/my.cnf
```

Dosyayı konsoldan açmak için (nano, via, gedit);

```bash
# Buraya Kendi dosya adresinizi girin!
  sudo gedit /etc/mysql/my.cnf
```

Aşağıdaki ayarları bir seferde kopyalayıp sayfanın en altına yapıştırabilirsiniz.

```bash
[client]
port = 3306
socket = /var/lib/mysql/mysql.sock
[mysqld-safe]
socket = /var/lib/mysql/mysql.sock
nice = 0
[mysqld]
# Basic
innodb_force_recovery = 1
bind-address = 127.0.0.1
datadir = /var/lib/mysql
lc-messages-dir = /usr/share/mysql
max-allowed-packet = 128M
max-connect-errors = 1000000
pid-file = /var/lib/mysql/mysql.pid
port = 3306
skip-external-locking
skip-name-resolve
socket = /var/lib/mysql/mysql.sock
tmpdir = /dev/shm/mysql/
user = mysql
# MyISAM Query Cache Settings
query-cache-limit = 1M
query-cache-size = 70M
query-cache-type = 1
key-buffer-size = 150M
low-priority-updates = 1
concurrent-insert = 2
# Common
max-connections = 100
back-log = 512
wait-timeout = 90
interactive-timeout = 90
join-buffer-size = 2M
read-buffer-size = 2M
read-rnd-buffer-size = 4M
sort-buffer-size = 4M
thread-cache-size = 16
thread-stack = 192K
max-heap-table-size = 50M
tmp-table-size = 50M
table-definition-cache = 8000
table-open-cache = 1000
open-files-limit = 24000
ft-min-word-len = 3
expire-logs-days = 2
log-error = /var/lib/mysql/mysql_error.log
log-queries-not-using-indexes = 1
long-query-time = 0.1
max-binlog-size = 100M
slow-query-log = 1
slow-query-log-file = /var/lib/mysql/mysql_slow.log
thread-cache-size = 16
thread-stack = 192K
max-heap-table-size = 50M
tmp-table-size = 50M
table-definition-cache = 8000
table-open-cache = 1000
open-files-limit = 24000
ft-min-word-len = 3
expire-logs-days = 2
log-error = /var/lib/mysql/mysql_error.log
log-queries-not-using-indexes = 1
long-query-time = 0.1
max-binlog-size = 100M
slow-query-log = 1
slow-query-log-file = /var/lib/mysql/mysql_slow.log
max_allowed_packet = 32M
open_files_limit = 50000
[mysqldump]
quick
quote-names
max-allowed-packet = 16M
[mysql]
[isamchk]
key-buffer-size = 150M
```

### PHP KURULUMU

*Not: Bu komutta kurulacak php7 paketleri temel ihtiyaçlar için zorunlu paketlerdir.*

```bash
# Php'yi belirtilen paketlerle beraber kur.    
sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc -y
sudo apt install php-gd php-mysql php-mbstring php-xml libapache2-mod-php -y
# Php versiyon kontrolu yap.
sudo php -v
# Apache Web sunucusunu yeniden başlat.
sudo systemctl restart apache2
```

**Html Dizini İçin Yetkilendirme:**

```bash
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
```

**Masaüstü'ne HTML Klasörü Kısayolunun Oluşturulması**

```bash
# Masaüstü dizinine geç.
cd ~/Masaüstü
# Masaüstü'ne kısayol oluştur.
ln -s /var/www/html/  
```

**PHP Betiklerini Apache Sunucusunda Test Etmek**

```bash
# html dizinine geç.
cd /var/www/html/
# info.php dosyasını oluştur ve konsolda aç.
sudo nano /var/www/html/info.php
```
İçerisine altta yer alan bir satırlık ilk php kodumuzu yazalım. Kopyala yapıştır.

```php
<?php phpinfo(); ?>
```

Kurulum testini [buradan](http://localhost/info.php) yapabilirsiniz. Eğer alt resim gibi bir ekran ile karşılaştıysanız, sorun yok yola devam.

![](https://lh3.googleusercontent.com/KULDQE1ANwu3I_KmpzT7G-N8RiuDfH-GjQxjHm0jH0BwwKJyiL1UXiPRG42lL8s7wL03AuQoRRg)


**php.ini Ayarları:**


php.ini dosyasının adresine [buradan](http://localhost/info.php) ulaşabilirsiniz. Aşağıdaki resimde işaretli olan yer (Loaded Configuration File).

![](https://lh3.googleusercontent.com/9hMuEXc8t5xR68WyPfND-H3N67p5ljGpChMIIx2j12u3oHHnVy42VcvSnM54J0EgkgsecCvsL9g1)

Dosyayı konsoldan açmak için;
```bash
# Kendi dosya adresinizi girin!
sudo nano /etc/php/7.2/apache2/php.ini
```

Aşağıdaki ayarları bir seferde kopyalayıp sayfanın en altına yapıştırabilirsiniz.

```bash
display_startup_errors = On
display_errors = On
short_open_tag = On
opcache.enable = Off
upload_max_filesize = 128M
post_max_size = 128M
max_input_vars = 5000
date.timezone = "Europe/Istanbul"
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
mbstring.language = Turkish
mbstring.internal_encoding = UTF-8
disable_functions = exec, passthru, shell_exec, system, proc_open, popen, curl_exec, curl_multi_exec, parse_ini_file, show_source
```

### Servislerin ve Bilgisayarın Tekrar Başlatılması

```sh
sudo systemctl start apache2 && sudo systemctl start mariadb && shutdown -r now
```

### GİT KURULUMU

**Git** , *Linus Torvalds* tarafından tasarlanıp geliştirilen, yazdığımız projeleri ve uygulamaları, bilgisayarımızda ya da harici disklerde değilde **internet üzerinde** tutmamızı ve yönetmemizi sağlayan ve GNU Genel Kamu Lisansı’nın 2. sürümüyle lisanslanmış bir **özgür versiyon kontrol sistemi** dir.

**Kurulum:**

```bash
# Git kurulumunu yap.
sudo apt install git -y
# Git versiyonunu gösterirse kurulum tamamdır.
git --version
```

**Kullanıcı Ayarlarının Yapılması:**

```bash
# Adını tanıt.
git config --global user.name "Hasan Çiçek"
# E-Postanı tanıt.
git config --global user.email badboy714@gmail.com
```

**_git init:** init komutu, bulunduğumuz dizini uzak bir sunucutaki bir sunucuya gönderebilmeniz için, bir Git repository’si haline getirip .git uzantılı bir dizin oluşturur.  Git/github kullanımı hakkında detaylı bilgiye [buradan](http://github.com) ulaşabilirsiniz.

```bash
# html dizinine geç.
cd /var/www/html/
# Git'i bu dizin için konuşlandır.
git init
```

### SSH KEY ÜRETME

```bash
cd ~/.ssh
ssh-keygen
```
Ekran çıktısı;
```bash
hasan@armada:~/.ssh$ ssh-keygen
Generating public/private rsa key pair.
Enter file in which to save the key (/home/hasan/.ssh/id_rsa):
Enter passphrase (empty for no passphrase):
Enter same passphrase again:
Your identification has been saved in /home/hasan/.ssh/id_rsa.
Your public key has been saved in /home/hasan/.ssh/id_rsa.pub.
The key fingerprint is:
SHA256:YwQ39WDGdTVSFiwUlGR5D+3Tfzgz5XFqGhIODecXb0c hasan@armada
The key's randomart image is:
+---[RSA 2048]----+
|      . oo=.=BBBo|
|       o.+ooo=+oE|
|        .=  .oo+o|
|       .. + . ooB|
|        So o . *=|
|       . .o . B +|
|           . + +.|
|            .    |
|                 |
+----[SHA256]-----+
```

**GitHub Sitesine SSH Key\'i Ekleme:**

```bash
# Ssh Key'in olduğu dosyayı aç.
cat ~/.ssh/id_rsa.pub
```

*Örnek Ssh Key görüntüsü;*

```sh
 ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAA21MYWNY5EDBPrfS34kHjcaB2Ez+HQPF0Fyt
 4PebOXaAsa YQfSs/kIcl03ez5XVgQjfAqgibKETUDSA1giNvSAF0ugxhe1nRbH5fVAhya
 1AfsmouRuQLH2PGOXVy8w8X7msa5Cf4AGzgBlOodvazV1gKO4fFAsUS32QF0i/A0s85Ly1
 WOskk2B3obiwvry765pN1P0M7EXqp3k4rLdsawsNzaFZJEqeSmAID+ETxzFLGN357qSrnz
 9buU3hiLyPosTv361DkcAVMi+S4BtBfJxGMdsdsvqy8xCTuOc X2fePCmGw55y0bDsfyug
 XUNd kullaniciadi@makinaadi
```

[github.com/settings/keys](https://github.com/settings/keys) sayfasına geçip, başlığı yazdıktan sonra **Key** bölümüne kopyaladığımız ssh key'i yapıştırıyoruz.

### ADMİNER VERİTABANI YÖNETİM ARACI KURULUMU

PHP ile yazılmış tam özellikli bir veritabanı yönetim aracıdır. PhpMyAdmin, Adminer tersine hedef sunucuya dağıtmak için hazır, tek bir dosya oluşur. Adminer MySQL, PostgreSQL, SQLite, MS SQL ve Oracle için kullanılabilir.

```bash
# html dizinine geç.
cd /var/www/html/
# Burada "adminer" adında bir dizin oluştur.
mkdir adminer
# adminer dizinine geç.
cd adminer
# latest.php dosyasını buraya indir.
wget -O index.php https://www.adminer.org/latest.php
```

Dosyayı indirdikten sonra dosyanın ismi "index.php" değilse "index.php" olarak değiştirmeyi unutmayın. html dizininin içerisindeki index.html dosyasını silin. Bundan sonra localhos'a girdiğimizde artık karımıza aşağıdaki resimde yer alan ekran çıkacaktır.

![](https://lh3.googleusercontent.com/7E-pqQXKG_4t0fa1avWXu7R0s0Y7y3mxKR5H6v4-66UaPsrgu6lPOtbxMBC8mwd3P0jdjGcCqs8)

Adminer [bağlantısını](http://localhost/adminer/)  seçtiğimizde ise aşağıdaki resimde gördüğümüz adminer giriş sayfasına ulaşırız. Parolayı unutmadıysanız kullanıcı adı ve parolayı girerek veritabanı oluşturmaya başlayabilirsiniz.

![](https://lh3.googleusercontent.com/zF0rA_zS5Tj7766qUSBqeHZODHEh5M2z8ORcT-74EuKI7xCS9AhmMmdjii-Ep7dC9xWVTO07FHC3)

Veritabanı işlemleri hakkında daha geniş bilgiye [buradan](https://www.php.net/manual/tr/book.mysql.php) ulaşabilirsiniz.

## SUBLİMETEXT 3  EDİTÖRÜNÜN KURULUMU
```bash
wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | sudo apt-key add -
sudo apt-get install apt-transport-https
echo "deb https://download.sublimetext.com/ apt/stable/" | sudo tee /etc/apt/sources.list.d/sublime-text.list
echo "deb https://download.sublimetext.com/ apt/dev/" | sudo tee /etc/apt/sources.list.d/sublime-text.list
sudo apt-get update
sudo apt-get install sublime-text
```

#### LİSANS İŞLEMLERİ
```~/.config/sublime-text-3/Local/``` adresinde "**License.sublime_license**" isimli dosya varmı kontrol edin. Aşağıdaki komutlaları sırası ile konoldan gönderin.

```bash
cd ~/.config/sublime-text-3/Local/
ls -al
# Varsa geditle aç içerisine anahtarı yapıştır.
sudo gedit License.sublime_license
# Dosya yoksa.
touch License.sublime_license
# Eğer değişiklik yapılamıyorsa salt okunur açılıyorsa,
sudo chattr -i License.sublime_license
#Gedit komutunu tekrar çalıştır.
# Yapıştırdıktan sonra kaydet ve kapat.
```

##### Lisans Anahtarı
```
----- BEGIN LICENSE -----
Member J2TeaM
Single User License
EA7E-1011316
D7DA350E 1B8B0760 972F8B60 F3E64036
B9B4E234 F356F38F 0AD1E3B7 0E9C5FAD
FA0A2ABE 25F65BD8 D51458E5 3923CE80
87428428 79079A01 AA69F319 A1AF29A4
A684C2DC 0B1583D4 19CBD290 217618CD
5653E0A0 BACE3948 BB2EE45E 422D2C87
DD9AF44B 99C49590 D2DBDEE1 75860FD2
8C8BB2AD B2ECE5A4 EFC08AF2 25A9B864
------ END LICENSE ------
```

Sonrasında dosya hakkında (içeriği, sahibi ve adı gb.) herhangi bir şeyin değiştirilememesi için aşağıdaki komutu uygulayın. İptal için +i yi -i yapın. +i yapıldısında sudo su bile işlemez :). Siz anladınız!

```bash
sudo chattr +i License.sublime_license
```

### SUBLİMETEXT 3 YARARLI EKLENTİLERİ
Sublimetext editöründe eklentileri "Package Control" üzerinden kolayca yapabiliriz. Bu Control'u çalıştırabilmemiz için öncelikle menüden View sekmesi altındaki "Show Console" seçeneğini tıklayarak Sublimetext Konsolunu açıyoruz. Buraya aşağıdaki kodları tek seferde yapıştırıp onaylayın.

```bash
import urllib.request,os,hashlib; h = '6f4c264a24d933ce70df5dedcf1dcaee' + 'ebe013ee18cced0ef93d5f746d80ef60'; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( 'http://packagecontrol.io/' + pf.replace(' ', '%20')).read(); dh = hashlib.sha256(by).hexdigest(); print('Error validating download (got %s instead of %s), please try manual install' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), 'wb' ).write(by) 
```

Konsoldaki işlem bittikten sonra CTRL+SHİFT+P tuş kombinasyonunu yapın. Açılan kutuya "install" yazdığınızda aşağıdalistelelen seçeneklerden "Package Control: Install Package" 'i seçin. Artık açılan ekrana yüklemek istediğiniz paket ismini yazarak ona ulaşıp kurabilirsiniz.

#### Yararlı Sublimetext Eklentileri
|Eklenti Adı | Açıklaması |
|---|---|
| Emmet | Kod kalıplarını hızlıca tanımlama. |
| HTML5 | HTML5'e ait yeni tag'leri tamamlar. |
| Inc-Dec-Value | Emmet'in yaptığı gibi rakamsal değerleri 0.1'er, 1'er, 10'ar, 100'er olarak artırıp eksiltebilir. |
| AdvancedNewFile | Yeni dosya ve klasör oluşturabilmemizi sağlar. |
| Alignment | Kodları hizaya getirir. |
| AutoSemiColon | CSS ve Javascript'te satır ve nitelik sonlarına ; otomatik olarak koyar. |
| AutoFileName | Dosya isimlerini otomatik tamamlar. |
| BracketHighlighter | Alanların başı ve sonunu belirginleştiriyor. |
| Case Conversion | Değişken isimlerini oluştururken kullandığımız metodlar arasında hızlı geçiş yapar. |
| ColorHighlighter | Renk kodlarının altına aynı renkte çizgi çeker. |
| CSS Extended Completions | Css, less ve scss dosyalarını tarayarak; bütün sınıfları, fonksiyonları ve id'leri belleğine alıp otomatik tamamlama olarak sunar. |
| DocBlockr | Kod bloklarına dökümantasyon oluşturur. |
| jQuery | jQuery'nin fonksiyonlarını otomatik tamamlar. |
| Monokai Extended | Sublime Text daha spesifik obje ve alt sınıfları renklendiriyor. |
| Quick File Open | Hızlı dosya ulaşma. |
| Random Everything | Random veriler üretir. |
| SFTP | Sunucu dosyalarında gezintiye çıkabilir, değişiklik yapabilir, silebilir, oluşturabilir, klasör ve dosyaların chmod değerlerini belirleyebilir, lokalden sunucuya (ya da tam tersi) senkronizasyon ve değişiklikleri gerçekleştirebilir ve en önemlisi dosyayı kaydeder kaydetmez sunucuya otomatik olarak upload edebilirsiniz. |
| SublimeCodeIntel | Otomatik tamamlama. |
| SublimeLinter | Hataları belirgin yapar. |
| SwapStrings | Yanlış yazılanı çapraz değiştirir. İki terimin yerlerini tek bir komut ile değiştirebilir. |
| Terminal | Bu eklenti ile proje'nin ana dizinini hedef göstererek, ya da aktif olarak açık dosyanın bulunduğu klasörü hedef göstererek terminal penceresi açabiliyorsunuz. |
| GitGutter | Projede yapılan değişiklikleri gösterir. |
| GitHubinator | Github da arama yapar. Nerede yazmıştım derdine son. |
| SidebarEnhancements | Sol taraftaki sidebarda sağ tık özellikleri katar. |
| AlignTab | Akıllı hizalama. |
| A File Icon | Dosya iconlarını getirir. |

## ATOM TEXT EDİTÖRÜNÜN KURULUMU
```bash
# Atom paketinin indirileceği depoyu sisteme eklemek.
wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -  
sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
# Yeni eklediğimiz depo listesinin tanınması için listeleri güncellemek.
sudo apt update
# Atom paketini kurmak.
sudo apt install atom -y
```

Atom Metin editörü hakkında bilgiye ve kullanışlı eklentilerine [buradan](https://emregeldegul.net/2017/10/kullanisli-atom-paketleri/) ulaşabilirsiniz.

### WORDPRESS KURULUMU

```sh
      cd ~
      wget --no-check-certificate https://wordpress.org/latest.tar.gz
      tar xzvf latest.tar.gz
      mv wordpress /var/www/html/
      cd /var/www/html/wordpress
      sudo chmod -R 777 ../wordpress
      cp wp-config-sample.php wp-config.php
      atom wp-config.php
```

Atom editör içinde DB_NAME, DB_USER, DB_PASSWORD, DB_HOST Sabitleri tanımlanır. Adminer’e geçip WordPress isminde Utf8 Turkish_ci dilinde bir database oluşturun.

http://localhost/wordpress adresinden wordpress sitesine girilebilir.

http://localhost/wordpress/wp-admin adresinden wordpress YÖNETİM sayfalarına girilebilir.

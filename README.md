# UBUNTU-PHP  

![](https://lh3.googleusercontent.com/cpTkZZTpSZunQ2sumhHyA0OFKMMmSJ4TjIcHzeJ9MuMUwGAEkizHpWVV0d_O5iDLkw8BKKrdshRI)

Yazık... Siz daha linux kullanmıyormusunuz. Linux kullanmıyorsanız lütfen sayfamdan ayrılın! Bizim bağımlı insanlarla işimiz olmaz. Biz özgürlüğümüzün peşindeyiz. Sizde özgür olmak istiyorsanız, buyurun ubuntu kurulumu hakkında [buradan](https://wiki.ubuntu-tr.net/index.php?title=Kurulum) bilgi alabilirsiniz.

Yalnız arkadaşlar, benim burada kısaca değinmeye çalışacağım konulara başlamadan önce bizim dünyamızda kullandığımız bazı terimler hakkında bilgi sahibi olmanız gerektiğini düşünüyorum. Bunlar;

-  [Linux](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/genel/linux.md)
-  [Özgür Yazılım](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/genel/ozgur_yazilim_nedir.md)
-  [Açık Kaynak Kod](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/genel/acik_kaynak_kod.md)
-  [Dns](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/genel/dns.md)
-  [Http Yaşam Döngüsü](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/genel/http_yasam_dongusu.md)

Ubuntu'da PHP çalışma ortamı nasıl oluşturulur? Karşılabileceğim sorunların çözümleri ne olacak?  Sorularınızı duyar gibi oluyorum. Sorularınızın çözümlerini burada bulacaksınız. Hoş, aşağıdaki adımları anlayarak, tane tane , sindire sindire yaparsanız sorunsuzca PHP çalışma ortamına kavuşacağınıza inanıyorum. İlk defa siyah ekranla tanışıp; Bu nedir? Bunlar ne işe yarar? Başka neler yapabilirim diyenler linux temel komutlarına [buradan](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/genel/linux_komutlari.md) ulaşabilirler.

**İpucu:**  *Ubuntu kurduktan sonra, pencereleri rıhtımdan tek tıkla açıp kapatmak için bir defaya mahsus aşağıdaki komutu konsoldan gönderin.*

```bash
  $ gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
```

# PHP ÇALIŞMA ORTAMI HAZIRLAMA

```bash
  Not: Konsol komutlarını kopyalarken, "#" simgesi ile başlayan yerleri almayınız.
       Buralar açıklamadır. Komutların ne yaptığını, ne işe yaradığını anlamanız için yazılmıştır.
```

## SİSTEMİN GÜNCELLENMESİ
**Depo Listesinin Güncellenmesi:** Linux sistemi kendisini güncellemek için bir merkeze bakıp, kontrol yapmaya ihtiyacı vardır. Bu listelerin bakılacağı yerler /etc/apt/sources.list dosyasında tutulur. "update" komutu ile sistemde kurulu olan paketler, paket deposundaki versiyonları ile farklarına bakılır ve fark varsa liste güncellenir. Bu komut kurulum yapmaz. Ubuntu paket listeleri hakkında detaylı bilgiye [buradan](https://wiki.ubuntu-tr.net/index.php?title=Yaz%C4%B1l%C4%B1m_ve_G%C3%BCncelle%C5%9Ftirmeler) ulaşabilirsiniz.

```bash
  $ sudo apt update # Depo listelerini güncelle.
```

**Paketlerin Güncellenmesi:** Sistemde kurulu olan paketler, "upgrade" komutu ile güncellenen listeye göre bulunan en son sürüme yükseltir.

```bash  
  $ sudo apt upgrade -y # Paketlerin yeni sürümleri varsa yükselt.
```

## PHP PAKETLERİNİN KURULMASI
### [Web Sunucusunun  Kurulması]
Php için olmazsa olmaz, ***açık kaynak kodlu*** ve ücretsiz bir web sunucusu yazılımı olan *Apache* yi kuralım;

```bash
  $ sudo apt install -y apache2 apache2-utils # Apache kur.
  $ sudo systemctl status apache2.service # Aşağıdaki çıktıyı verecektir!
  $ sudo systemctl start apache2 # Apache2'yi yeniden başlat.
  $ sudo sudo systemctl enable apache2 # Apache2'yi açılışta otomatik başlat.
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
**Sunucuyu Test Etmek:** Taracımızın adres çubuğuna "127.0.0.1" veya "localhost" yazarak "*Apache2 Ubuntu Default Page*" sayfasını görebiliyorsak yani aşağıdaki resim gibi bir sayfa ile karşılaştıysak apache kurulmuş demektir. Testi buradan ( [localhost](http://localhost/)  yada [127.0.0.1](http://127.0.0.1/)  ) yapabilirsiniz.


![](https://lh3.googleusercontent.com/XNhp6I05Wy_eMVUEdGHid8CnD9tJeeY3DYaGaXJ8Ls_eLhbbow1Ck1LusT9T0uMKDKBEa39vSkE)

**Kök Klasörü Yetkilendirmesi:** Apache'nin kullandığı /var/www/html/ kök dizininde işlem yapabilmesi için, sahipliğini "apache" kullanıcısına veriyoruz.

```bash
  # Html dizini ve alt elemanlarının sahibini ve grubunu www-data yap.
  $ sudo chown www-data:www-data /var/www/html/ -R
```

### [Veritabanı Kurulumu]

MariaDB, GNU Genel Kamu Lisansı altında serbest olarak kullanılabilen, MySQL'in yaratıcısı olan *Monty Widenius*'un MySQL'in kodunu çatallayıp (fork) "çoğunlukla" MySQL ile aynı komutları, arayüzleri ve API'leri destekleyecek şekilde geliştirmeye başlanan, toplulukla iç içe hızlı ve verimli şekilde geliştirilmeye devam edilen MySQL ilişkisel veritabanı yönetim sistemidir.

```bash
  $ sudo apt install -y mariadb-server mariadb-client # Mariadb'yi kur.
  $ sudo systemctl start mariadb # Mariadb'yi yeniden başlat.
  $ sudo sudo systemctl enable mariadb # Mariadb'yi açılışta otomatik başlat.
  $ systemctl status mariadb.service
  $ sudo mariadb -u root # Mariadb'ye root şifresi istemeden girmek.
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

**Root Kullanıcısı İçin Parola Belirleme:**

Aşağıdaki kodları, satır satır gönderin.
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
**Parola** yı iki defa girmenizi ister.  **Parola** ekranda görülmez ve aynı olmak zorundadır. Bu komuttan sonra gelen ekranda, sırasıyla aşağıda yer alan resimlerdeki adımları izleyin;

![](https://lh3.googleusercontent.com/doizwnivOhuJS2Ce7CTbsKNMbhAGt0If3Qw_jkyBPKIpIh_MX9Zt_P8fh2t0hrzg9ao04i_pkm4)
![](https://lh3.googleusercontent.com/9XvVC-PXnCQ3Qk9lSnJwbwKzamA_YsaUJ0KA56soR-lVmkzUygNNWWwf3EQCO_BOGV4RMeUrUFI)


**my.cnf Ayarları:**

**my.cnf dosyası** sunucunuzda bulunan **veri tabanı yönetim sisteminin** ayar dosyasıdır ve oldukça önemlidir. Dosyanın yerini konsoldan aşağıdaki komutu yazarak bulabiliriz.

```bash
  $ sudo find / -name my.cnf
```
Ekran çıktısı:
```bash
  [sudo] password for ******:
  /var/lib/dpkg/alternatives/my.cnf
  /etc/mysql/my.cnf  # DOSYA ADRESİ BURADA
  /etc/alternatives/my.cnf
```
Dosyayı konsoldan açmak için;
```bash
  $ sudo nano /etc/mysql/my.cnf # Kendi dosya adresinizi girin!
```
Aşağıdaki ayarları bir seferde kopyalayıp yapıştırabilirsiniz.
```bash
  Değişecek olan kodlar buraya yazılacak. Eskileri mariadb nin başlamasını engelliyor.
```


### [PHP7 Kurulumu]

*Not: Bu komutta kurulacak php7 paketleri temel ihtiyaçlar için zorunlu paketlerdir.*

```bash
  # Php7'yi belirtilen paketlerle beraber kur.
  $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php-common php7.2-cli php7.2-common php7.2-json php7.2-opcache php7.2-readline
  $ sudo php -v # Php versiyon kontrolu yap.
  $ sudo a2enmod php7.2 # Apache php7.2 modülünü etkinleştir.  
  $ sudo systemctl restart apache2 # Apache Web sunucusunu yeniden başlat.
```

**Html Dizini İçin Yetkilendirme:**

```bash
  $ sudo adduser $USER www-data
  $ sudo chown -R $USER:www-data /var/www/html/
```

**Masaüstü'ne HTML Klasörü Kısayolunun Oluşturulması:**

```bash
  $ cd ~/Masaüstü # Masaüstü dizinine geç.
  $ ln -s /var/www/html/ # Masaüstü'ne kısayol oluştur.  
```

**PHP Betiklerini Apache Sunucusunda Test Etmek:**

```bash
  $ cd /var/www/html/ # html dizinine geç.
  $ sudo nano /var/www/html/info.php # info.php dosyasını oluştur ve konsolda aç.
```
İçerisine altta yer alan bir satırlık ilk php kodumuzu yazalım.

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
  $ sudo nano /etc/php/7.2/apache2/php.ini # Kendi dosya adresinizi girin!
```

Aşağıdaki ayarları tek tek dikkatlice girmeniz gerekmektedir.
```bash
  display_startup_errors = On
  display_errors         = On
  short_open_tag         = On
  opcache.enable         = 0
  upload_max_filesize    = 128M
  post_max_size          = 128M
  max_input_vars         = 5000
  date.timezone          = "Europe/Istanbul"
  error_reporting        = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
  mbstring.language          = Turkish
  mbstring.internal_encoding = UTF-8
  disable_functions          = exec, passthru, shell_exec, system, proc_open, popen, curl_exec, curl_multi_
```


### [GİT Kurulumu]

**Git** , *Linus Torvalds* tarafından tasarlanıp geliştirilen, yazdığımız projeleri ve uygulamaları, bilgisayarımızda ya da harici disklerde değilde **internet üzerinde** tutmamızı ve yönetmemizi sağlayan ve GNU Genel Kamu Lisansı’nın 2. sürümüyle lisanslanmış bir **özgür versiyon kontrol sistemi** dir.

**Kurulum:**

```bash
   $ sudo apt install git -y # Git kurulumunu yap.
   $ git --version # Git versiyonunu gösterirse kurulum tamamdır.
```

**Kullanıcı Ayarlarının Yapılması:**

```bash
   $ git config --global user.name "kullaniciadi" # "kullaniciadi" kullanıcısını tanı.
   $ git config --global user.email eposta # eposta'yı tanı.
```

**_git init:** init komutu, bulunduğumuz dizini uzak bir sunucutaki bir sunucuya gönderebilmeniz için, bir Git repository’si haline getirip .git uzantılı bir dizin oluşturur.  Git/github kullanımı hakkında detaylı bilgiye [buradan](http://github.com) ulaşabilirsiniz.

```bash
  $ cd /var/www/html/ # html dizinine geç.
  $ git init # Git'i bu dizin için konuşlandır.
```

**SSH KEY Üretme:**

```bash
  $ cd ~/.ssh # Eğer hata verirse sorun yok alt satırdan devam edin.
  $ ssh-keygen
```
Ekran çıktısı;
```bash
  Generating public/private rsa key pair.
  Enter file in which to save the key (/home/nuri/.ssh/id_rsa): # ENTER BASIN!
  Enter passphrase (empty for no passphrase): # ENTER BASIN!
  Enter same passphrase again: # ENTER BASIN!
  Your identification has been saved in /home/nuri/.ssh/id_rsa.
  Your public key has been saved in /home/nuri/.ssh/id_rsa.pub. The key fingerprint is:
  SHA256:0EOJV1HNjSxnrDqZxiE6B9EyOwpf8w0vlAK5MHV7/Xo nuri@nuri-LIFEBOOK-S751 The key's randomart...
```
**GitHub Sitesine SSH Key'i Ekleme:**
```bash
  $ cat ~/.ssh/id_rsa.pub # Ssh Key'in olduğu dosyayı aç.
```
*Örnek Ssh Key görüntüsü;*

 ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDql21MYWNY5EDBPrfS34kHjcaB2Ez+HQPF0Fyt4PebOXaAsa YQfSs/kIcl03ez5XVgQjfAqgibDbgN6BKETUDA1giNvSAF0ugxhe1nRbH5fVAhya1AfsmouRuQL2PGOXVy8w8qXWN aX7msa5Cf4AGzgBlOodvazV1gKO4fFAsUS32QF0i/A0s85Ly1WOskk2B3obiwvry765pN1P0M7EXqp3k4rLHWntH/ rcXENzaFZJEqeSmAID+ETYZxzFLGN357qSrnz9buU3hiLyPosTv361DkcAVMi+S4BtBfJxGMdr98nFYxnmvqy8xCTuOc X2fePCmGw3Oy0bDsfyugXUNd kullaniciadi@makinaadi

[github.com/settings/keys](https://github.com/settings/keys) sayfasına geçip, başlığı yazdıktan sonra **Key** bölümüne kopyaladığımız ssh key'i yapıştırıyoruz.

### [Adminer Programı Kurulumu]

```bash
  $ cd /var/www/html/ # html dizinine geç.
  $ mkdir adminer # Burada "adminer" adında bir dizin oluştur.
  $ cd adminer # adminer dizinine geç.
  $ wget -O index.php https://www.adminer.org/latest.php # latest.php dosyasını buraya indir.
```

Dosyayı indirdikten sonra dosyanın ismi "index.php" değilse "index.php" olarak değiştirmeyi unutmayın. html dizininin içerisindeki index.html dosyasını silin. Bundan sonra localhos'a girdiğimizde artık karımıza aşağıdaki resimde yer alan ekran çıkacaktır.

![](https://lh3.googleusercontent.com/7E-pqQXKG_4t0fa1avWXu7R0s0Y7y3mxKR5H6v4-66UaPsrgu6lPOtbxMBC8mwd3P0jdjGcCqs8)

Adminer [bağlantısını](http://localhost/adminer/)  seçtiğimizde ise aşağıdaki resimde gördüğümüz adminer giriş sayfasına ulaşırız. Parolayı unutmadıysanız kullanıcı adı ve parolayı girerek veritabanı oluşturmaya başlayabilirsiniz.


![](https://lh3.googleusercontent.com/zF0rA_zS5Tj7766qUSBqeHZODHEh5M2z8ORcT-74EuKI7xCS9AhmMmdjii-Ep7dC9xWVTO07FHC3)

Veritabanı işlemleri hakkında daha geniş bilgiye [buradan](https://www.php.net/manual/tr/book.mysql.php) ulaşabilirsiniz.

## ATOM TEXT EDİTÖRÜ KURULUMU

### [Atom Paketi Deposunun Listeye Eklenmesi]

```bash
  # Atom paketinin indirileceği depoyu sisteme ekle.
  $ wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -
  $ sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
  $ sudo apt update
```

### [Atom Text Editörü'nün Kurulumu]

```bash
  $ sudo apt install atom -y  # Atom paketini kur.
```

Atom Metin editörü hakkında bilgiye ve kullanışlı eklentilerine [buradan](https://emregeldegul.net/2017/10/kullanisli-atom-paketleri/) ulaşabilirsiniz.

**SANIRIM ARTIK PHP İLE TANIŞMAYA HAZIRSINIZ, [HAYDE BURADAN](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/php) DEVAM EDELİM O ZAMAN.**

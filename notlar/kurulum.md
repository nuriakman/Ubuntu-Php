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

# PHP ÇALIŞMA ORTAMI HAZIRLAMA (LAMP KURULUMU)

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

### WEB SUNUCUSUNUN (Apache) KURULMASI

Php için olmazsa olmaz, ***açık kaynak kodlu*** ve ücretsiz bir web sunucusu yazılımı olan *Apache* yi kuralım;

```bash
  $ sudo apt install -y apache2 apache2-utils # Apache kur.
  $ sudo sudo systemctl enable apache2 # Apache2'yi açılışta otomatik başlat.
```

Apache kurulumunu test için aşağıdaki komutu gönderin. Çıkmak için ise `CTRL+C` ya da `q` ya basın.

```bash
  $ sudo systemctl status apache2.service # Aşağıdaki çıktıyı verecektir!
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

**Sunucuyu Test Etmek:** Taracımızın adres çubuğuna "127.0.0.1" veya "localhost" yazarak "*Apache2 Ubuntu Default Page*" sayfasını görebiliyorsak yani aşağıdaki resim gibi bir sayfa ile karşılaştıysak apache kurulmuş demektir. Testi buradan ( [localhost](http://localhost/)  yada [127.0.0.1](http://127.0.0.1/)  ) yapabilirsiniz.


![](https://lh3.googleusercontent.com/XNhp6I05Wy_eMVUEdGHid8CnD9tJeeY3DYaGaXJ8Ls_eLhbbow1Ck1LusT9T0uMKDKBEa39vSkE)

**Kök Klasörü Yetkilendirmesi:** Apache'nin kullandığı /var/www/html/ kök dizininde işlem yapabilmesi için, sahipliğini "apache" kullanıcısına veriyoruz.

```bash
  # Html dizini ve alt elemanlarının sahibini ve grubunu www-data yap.
  $ sudo chown www-data:www-data /var/www/html/ -R
```

### VERİTABANI (MariaDB) KURULUMU

MariaDB, GNU Genel Kamu Lisansı altında serbest olarak kullanılabilen, MySQL'in yaratıcısı olan *Monty Widenius*'un MySQL'in kodunu çatallayıp (fork) "çoğunlukla" MySQL ile aynı komutları, arayüzleri ve API'leri destekleyecek şekilde geliştirmeye başlanan, toplulukla iç içe hızlı ve verimli şekilde geliştirilmeye devam edilen MySQL ilişkisel veritabanı yönetim sistemidir.

```bash
  $ sudo apt install -y mariadb-server mariadb-client # Mariadb'yi kur.
  $ sudo sudo systemctl enable mariadb # Mariadb'yi açılışta otomatik başlat.
  $ systemctl status mariadb.service
```

Çıkmak için ise `CTRL+C` ya da `q` ya basın.

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
  $ sudo mysql -u root
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

Aşağıdaki kodları, satır satır gönderin.

```bash
      show databases;
      use mysql;
      update user set plugin='' where User='root';
      flush privileges;
      exit; # Mariadb'den çıkış.
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

**my.cnf dosyası** sunucunuzda bulunan **veri tabanı yönetim sisteminin** ayar dosyasıdır ve oldukça önemlidir. my.cnf sunucuda varsayılan olarak /etc/my.cnf yolu ile erişilebilir ve düzenlenebilir şekilde kayıtlıdır. Ayrıca dosyanın yerini konsoldan aşağıdaki komutu yazarak bulabiliriz.

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
      [client]
      port                            = 3306
      socket                          = /var/lib/mysql/mysql.sock

      [mysqld-safe]
      socket                          = /var/lib/mysql/mysql.sock
      nice                            = 0

      [mysqld]
      # Basic
      innodb_force_recovery = 1
      bind-address                    = 127.0.0.1 # Comment out if you want remote servers to connect to this server's MySQL instance
      datadir                         = /var/lib/mysql
      lc-messages-dir                 = /usr/share/mysql
      max-allowed-packet              = 128M
      max-connect-errors              = 1000000
      pid-file                        = /var/lib/mysql/mysql.pid
      port                            = 3306
      skip-external-locking
      skip-name-resolve
      socket                          = /var/lib/mysql/mysql.sock
      tmpdir                          = /dev/shm/mysql/
      user                            = mysql


      # MyISAM Query Cache Settings
      query-cache-limit               = 1M    # UPD
      query-cache-size                = 70M   # UPD
      query-cache-type                = 1

      key-buffer-size                 = 150M   # UPD

      low-priority-updates            = 1
      concurrent-insert               = 2

      # Common
      max-connections                 = 100   # UPD
      back-log                        = 512

      wait-timeout                    = 90
      interactive-timeout             = 90

      join-buffer-size                = 2M    # UPD
      read-buffer-size                = 2M    # UPD
      read-rnd-buffer-size            = 4M    # UPD
      sort-buffer-size                = 4M    # UPD

      thread-cache-size               = 16   # UPD (most of the times you probably won't need to change this)
      thread-stack                    = 192K

      max-heap-table-size             = 50M
      tmp-table-size                  = 50M

      table-definition-cache          = 8000  # UPD
      table-open-cache                = 1000  # UPD
      open-files-limit                = 24000 # UPD

      ft-min-word-len                 = 3     # Minimum length of words to be indexed for search results

      expire-logs-days                = 2
      log-error                       = /var/lib/mysql/mysql_error.log
      log-queries-not-using-indexes   = 1
      long-query-time                 = 0.1
      max-binlog-size                 = 100M
      slow-query-log                  = 1
      slow-query-log-file             = /var/lib/mysql/mysql_slow.log

      thread-cache-size               = 16   # UPD (most of the times you probably won't need to change this)
      thread-stack                    = 192K

      max-heap-table-size             = 50M
      tmp-table-size                  = 50M

      table-definition-cache          = 8000  # UPD
      table-open-cache                = 1000  # UPD
      open-files-limit                = 24000 # UPD

      ft-min-word-len                 = 3     # Minimum length of words to be indexed for search results

      expire-logs-days                = 2
      log-error                       = /var/lib/mysql/mysql_error.log
      log-queries-not-using-indexes   = 1
      long-query-time                 = 0.1
      max-binlog-size                 = 100M
      slow-query-log                  = 1
      slow-query-log-file             = /var/lib/mysql/mysql_slow.log

      max_allowed_packet=32M
      open_files_limit=50000
      [mysqldump]
      quick
      quote-names
      max-allowed-packet              = 16M

      [mysql]

      [isamchk]
      key-buffer-size                 = 150M
```

### PHP7 KURULUMU

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
İçerisine altta yer alan bir satırlık ilk php kodumuzu yazalım ve `CTRL+C` sonra `E` sonra `ENTER` şeklinde kayıt edep çıkalım.

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
      upload_max_size        = 128M
      post_max_size          = 128M
      max_input_vars         = 5000
      date.timezone          = "Europe/Istanbul"
      error_reporting        = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
      mbstring.language          = Turkish
      mbstring.internal_encoding = UTF-8
      disable_functions          = exec, passthru, shell_exec, system, proc_open, popen, curl_exec, curl_multi_exec, parse_ini_file, show_source
```

### Apache ve MariaDB Servislerinin Tekrar Başlatılması

```sh
      sudo systemctl start apache2
      sudo systemctl start mariadb
```

### GİT KURULUMU

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

### SSH KEY ÜRETME

```bash
  $ cd ~/.ssh # Eğer hata verirse sorun yok alt satırdan devam edin.
  $ ssh-keygen
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
  $ cat ~/.ssh/id_rsa.pub # Ssh Key'in olduğu dosyayı aç.
```

*Örnek Ssh Key görüntüsü;*

 ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDql21MYWNY5EDBPrfS34kHjcaB2Ez+HQPF0Fyt4PebOXaAsa YQfSs/kIcl03ez5XVgQjfAqgibDbgN6BKETUDSA1giNvSAF0ugxhe1nRbH5fVAhya1AfsmouRuQLH2PGOXVy8w8qXWN aX7msa5Cf4AGzgBlOodvazV1gKO4fFAsUS32QF0i/A0s85Ly1WOskk2B3obiwvry765pN1P0M7EXqp3k4rLHWntH/ rcXENzaFZJEqeSmAID+ETxzFLGN357qSrnz9buU3hiLyPosTv361DkcAVMi+S4BtBfJxGMdr98nFYxnmvqy8xCTuOc X2fePCmGw55y0bDsfyugXUNd kullaniciadi@makinaadi

[github.com/settings/keys](https://github.com/settings/keys) sayfasına geçip, başlığı yazdıktan sonra **Key** bölümüne kopyaladığımız ssh key'i yapıştırıyoruz.

### ADMİNER VERİTABANI YÖNETİM ARACI KURULUMU

PHP ile yazılmış tam özellikli bir veritabanı yönetim aracıdır. PhpMyAdmin, Adminer tersine hedef sunucuya dağıtmak için hazır, tek bir dosya oluşur. Adminer MySQL, PostgreSQL, SQLite, MS SQL ve Oracle için kullanılabilir.

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

### ATOM TEXT EDÜTÖRÜ\'NÜN KURULUMU

```bash
  $ sudo apt install atom -y  # Atom paketini kur.
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



[Php Nedir?](https://github.com/yeniceri1453/Ubuntu-Php/blob/master/notlar/php_nedir.md) :arrow_left: [ANASAYFA](https://github.com/yeniceri1453/Ubuntu-Php) :arrow_right: [Doğru Editör Seçimi](https://github.com/yeniceri1453/Ubuntu-Php/tree/master/notlar/editor_secimi.md)

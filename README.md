
# Ubuntu-Php
Ubuntu'da PHP çalışma ortamı nasıl oluşturulur?

Karşılabileceğim sorunların çözümleri ne olacak?

Çözemediğiniz sorunlarınız bizlere referans olacaktır. Lütfen gönderin, sorun! Ama çözüm arayıp bulamadıktan sonra...

# UBUNTU KURULUM SONRASI YAPILACAKLAR

:four_leaf_clover: 1-  Linux sistemi kendisini güncellemek için bir merkeze bakıp, kontrol yapmaya ihtiyacı vardır. Bu listelerin bakılacağı yerler /etc/apt/sources.list dosyasında tutulur. "update" komutu ile sistemde kurulu olan paketler, paket deposundaki versiyonları ile farkları araştırılır ve liste güncellenir. Bu komut kurulum yapmaz.

```bash
  $ sudo apt update
```

:four_leaf_clover: 2- Sistemde kurulu olan paketler, "upgrade" komutu ile güncellenen listeye göre bulunan en son sürüme yükseltir.

```bash  
  $ sudo apt upgrade -y
```

:four_leaf_clover: 3- Php için olmazsa olmaz, açık kaynak kodlu ve ücretsiz bir web sunucusu yazılımı olan *apache* yi kuralım;

```bash
  $ sudo apt install -y apache2 apache2-utils
  $ sudo systemctl start apache2 # apache2 yeniden başlat.
  $ sudo sudo systemctl enable apache2 # açılışta otomatik başlasın.
  $ apache2 -v # Hata verebilir, sorun yok devam!
  $ systemctl status apache2 # Hata verebilir, sorun yok devam!
```

Taracımızın adres çubuğuna "127.0.0.1" veya "localhost" yazarak "*Apache2 Ubuntu Default Page*" sayfasını görebiliyorsak apache kurulmuş demektir.

Eğer güvenlik duvarı kullanıyorsanız 80 nolu TCP portu kapalı olabilir. Bunu açmak için aşağıdaki komutu gönderin ve tekrar tarayıcıdan deneyin.

```bash
  $ sudo iptables -I INPUT -p tcp --dport 80 -j ACCEPT
```

:four_leaf_clover: 4- Apache'nin kullandığı /var/www/html/ kök dosyaya sahipliğini "apache" kullanıcısına veriyoruz.

```bash
  $ sudo chown www-data:www-data /var/www/html/ -R
```

:four_leaf_clover: 5- Şimdi "*MariaDB*" yükleyelim. MariaDB, GNU Genel Kamu Lisansı altında serbest olarak kullanılabilen, MySQL ilişkisel veritabanı yönetim sistemidir.

```bash
  $ sudo apt install mariadb-server mariadb-client
  $ sudo systemctl start mariadb # mariadb yeniden başlat.
  $ sudo sudo systemctl enable mariadb # açılışta otomatik başlasın.
  $ systemctl status mariadb # Hata verebilir, sorun yok devam!
```

:four_leaf_clover: 6- Root kullanıcısı için parola belirleme

```bash
  $ sudo mysql -u root
      show databases;
      use mysql;
      update user set plugin='' where User='root';
      flush privileges;
      exit;
```

:four_leaf_clover: 7- Güvenlik için, mysql parolamızı değiştirelim.

```bash
  $ sudo mysql_secure_installation   
```
Bu komuttan sonra gelen ekranda, sırasıylaaşağıdaki adımları izleyin;<br>

 1. Enter<br>
 2. y Enter
 3. Yeni veritabanı parolasını girin. Enter <br>
 4. Yeni veritabanı parolasını tekrar girin. Enter <br>
 5. Enter <br>
 6. Enter <br>
 7. Enter <br>
 8. Enter <br>

:four_leaf_clover: 8- Mariadb'ye root şifresi istemeden girmek için;

```bash
  $ sudo mariadb -u root
```

:four_leaf_clover: 9- Php7 kurulumu<br>
*Not: Bu komuttaki kurulacak paketler temel ihtiyaçlar için zorunlu paketlerdir.*

```bash
  $ sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php-common php7.2-cli php7.2-common php7.2-json php7.2-opcache php7.2-readline
  # Apache php7.2 modülünü etkinleştirme.
  $ sudo a2enmod php7.2
  # Apache Web sunucusunu yeniden başlatma.
  $ sudo systemctl restart apache2
  # Php versiyon kontrolu
  $ sudo php -v
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
  # Git ile çalışabilmek için.
  $ git init
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

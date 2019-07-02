# Ubuntu-Php
Ubuntu'da PHP çalışma ortamı nasıl oluşturulur?

Karşılabileceğim sorunların çözümleri ne olacak?

Çözemediğiniz sorunlarınız bizlere referans olacaktır. Lütfen gönderin, sorun! Ama çözüm arayıp bulamadıktan sonra...

# UBUNTU KURULUM SONRASI YAPILACAKLAR

1- Linux sistemi kendisini güncellemek için bir merkeze bakıp, kontrol yapmaya ihtiyacı vardır. Bu listelerin bakılacağı yerler /etc/apt/sources.list dosyasında tutulur. "update" komutu ile sistemde kurulu olan paketler, paket deposundaki versiyonları ile farkları araştırılır ve liste güncellenir. Bu komut kurulum yapmaz.

```bash
  $ sudo apt update
```

2- Sistemde kurulu olan paketler, "update" komutu ile güncellenen listeye göre bulunan en son sürüme yükseltir.

```bash  
  $ sudo apt upgrade -y
```

3- Uygulamalardan "*Yazılım Güncelleştirici*" yi açıp, ayarlar düğmesine basarak "*Yazılım ve Güncelleştirmeler*" ekranına geçiyoruz. "*Diğer Yazılımlar*" sekmesindeki kutuları işaretledikten sonra, "*Ek Sürücüler*" sekmesine geçerek sistemin tarama yapmasını bekliyoruz. Ek sürücü varsa ve sürücü gerekli ise kuruyoruz.

4- Sistemimizin performansını artırmak için gerekli olan "Medya Kodekleri" ni yüklüyoruz.

```bash
  $ sudo apt install ubuntu-restricted-extras libavcodec-extra libdvd-pkg
```

5- Tek tıkla pencereleri küçültmek için aşağıdaki komutları konsoldan yollayın!

```bash
  $ gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
```

6- "*Ubuntu Yazılımlar*" uygulamasını açarak ihtiyacımız ve tercihimiz olan uygulamaları kuruyoruz. Bir kaç uygulama tavsiyesi;

- **Telegram:** Haberleşme için kullanabileceğiniz sosyal uygulamadır.
 - **Chromium:** Alternatif tarayıcı.
 - **Vlc:** Video oynatma uygulaması.
 - **Gimp:** Photoshop'ın linux tarafı alternatif resim işleme uygulaması.
 - **Kdenlive:** Video düzenleme uygulaması.
 - **FreeCad:** 3 boyutlu ve hareketli grafikler yapabileceğiniz Solid'in alternatifi uygulamadır.

7- Php için olmazsa olmaz, açık kaynak kodlu ve ücretsiz bir web sunucusu yazılımı olan *apache* yi kuralım;

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

8- Apache'nin kullandığı /var/www/html/ kök dosyaya sahipliğini "apache" kullanıcısına veriyoruz.

```bash
  $ sudo chown www-data:www-data /var/www/html/ -R
```

9- Şimdi "*MariaDB*" yükleyelim. MariaDB, GNU Genel Kamu Lisansı altında serbest olarak kullanılabilen, MySQL ilişkisel veritabanı yönetim sistemidir.

```bash
  $ sudo apt install mariadb-server mariadb-client
  $ sudo systemctl start mariadb # mariadb yeniden başlat.
  $ sudo sudo systemctl enable mariadb # açılışta otomatik başlasın.
  $ systemctl status mariadb # Hata verebilir, sorun yok devam!
```

10- Root kullanıcısı için parola belirleme

```bash
  $ sudo mysql -u root
      show databases;
      use mysql;
      update user set plugin='' where User='root';
      flush privileges;
      exit;
```

11- Güvenlik için, mysql parolamızı değiştirelim.

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

12- Mariadb'ye root şifresi istemeden girmek için;

```bash
  $ sudo mariadb -u root
```

13- Php7 kurulumu<br>
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

14- PHP betiklerini Apache sunucusuyla test etmek;

```bash
  $ sudo nano /var/www/html/info.php
```
info.php dosyası oluşturulup konsolda açılır. İçerisine;

```php
  <?php phpinfo(); ?>
```
yazalım ve tarayıcı adres çubuğunda, "http://localhost/info.php" adresi ile test edelim.

15- html dizini için yetkilendirme

```bash
  $ sudo adduser $USER www-data
  $ sudo chown -R $USER:www-data /var/www/html/
```

16- GİT Kurulumu

```bash
   $ sudo apt install git -y
   $ git config --global user.email badboy714@gmail.com
   $ git config --global user.name "Hasan Çiçek"
```

17- Masaüzerine HTML klasörü kısayolunun açılması

```bash
  $ cd ~/Desktop # İngilizce kurulum yapıldıysa bu komut
  $ cd ~/Masaüstü # Türkçe kurulum yapıldıysa bu Komut
  $ ln -s /var/www/html/
  # Git ile çalışabilmek için.
  $ git init
```
18- Adminer Programı Kurulumu

```bash
  $ cd /var/www/html
  $ mkdir adminer
  $ cd adminer
  $ wget -O index.php https://www.adminer.org/latest.php
```

19- ATOM Editörü Kurulumu

```bash
  $ wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -
  $ sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
  $ sudo apt update
  $ sudo apt install atom -y
```
### NOTLAR

```bash
  # Php7 paketlerini görebilmek için;
  $ apt-cache search php7

  # Servisleri yeniden başlatmak;
  $ sudo service apache2 restart
  $ sudo service mariadb restart

  # Servislerin bilgisayar açıldığında aktif olmasını sağlamak;
  $ sudo systemctl enable mariadb
  $ sudo systemctl enable apache2

  # Synaptic paket yükleyici-kaldırıcı kurmak;
   $ sudo apt --fix-broken install
   $ sudo apt install synaptic
```

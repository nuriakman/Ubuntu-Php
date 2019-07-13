# PHP ÇALIŞMA ORTAMI KURULUM KODLARI

*Açıklama satırlarını okuyarak kodları konsolda satır satır çalıştırın!*

```sh
      # Ekranları araç çubuğundan tek tıkla aç-kapat özelliğini vermek.
      gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
      # Depo listelerinden versiyon kontrolünü yapmak.
      sudo apt update
      # Paketlerin yeni sürümleri varsa yükseltmek.
      sudo apt upgrade -y
      # Apache'yi kurmak.
      sudo apt install apache2-y
      # Apache2'yi açılışta otomatik başlaması için ayarlamak.
      sudo sudo systemctl enable apache2     
      # Html dizini ve alt elemanlarının sahibini ve grubunu www-data yapmak.
      sudo chown www-data:www-data /var/www/html/ -R
      # Mariadb'yi kurmak.
      sudo apt install mariadb-server mariadb-client -y
      # Mariadb'yi açılışta otomatik başlaması için ayarlamak.
      sudo sudo systemctl enable mariadb
      # Php'yi belirtilen paketlerle beraber kur.    
      $ sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc -y
      $ sudo apt install php-gd php-mysql php-mbstring php-xml libapache2-mod-php -y
      # Apache Web sunucusunu yeniden başlatmak.
      sudo systemctl restart apache2
      # Html dizini için kullanıcıyı yetkilendirmek.
      sudo adduser $USER www-data
      # Html dizini için grubu yetkilendirmek.
      sudo chown -R $USER:www-data /var/www/html/
      # Masaüstü dizinine geçmek.
      cd ~/Masaüstü
      # Masaüstü'ne kısayol oluşturmak.
      ln -s /var/www/html/
      # html dizinine geçmek.
      cd /var/www/html/
      sudo systemctl restart apache2
      # Mariadb'yi yeniden başlatmak.
      sudo systemctl restart mariadb
      # Git kurulumunu yapmak.
      sudo apt install git -y
      # Git'e "kullaniciadi" kullanıcısını tanıtmak. Adını ve Soyadını gir.
      git config --global user.name "kullaniciadi"
      # Git'e eposta'yı tanıtmak. E-Posta'nı gir.
      $ git config --global user.email eposta
      # Git init için "html" dizinine geç.
      cd /var/www/html/
      # Git'i bu dizin için konuşlandır.
      git init
      # Admineri kurmak için "html" dizinine geçmek.
      cd /var/www/html/
      # Burada "adminer" adında bir dizin oluşturmak.
      mkdir adminer
      # adminer dizinine geçmek.
      cd adminer
      # Adminer'in index.php dosyasını buraya indirmek.
      wget -O index.php https://www.adminer.org/latest.php
      # Atom paketinin indirileceği depoyu sisteme eklemek.
      wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -  
      sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
      # Yeni eklediğimiz depo listesinin tanınması için listeleri güncellemek.
      sudo apt update
      # Atom paketini kurmak.
      sudo apt install atom -y
```

*Bu satırı tek çalıştır.*

```sh
      # Root kullanıcısı için parola belirlemek. Mariadb konsoluna geçer.
      sudo mysql -u root
```
*Buradaki komutları tek tek mariadb ekranından gönderin!*

```sh
        show databases;
        use mysql;
        update user set plugin='' where User='root';
        flush privileges;
        exit;
```

```sh
      # Mysql parolası belirlemek.
      sudo mysql_secure_installation
```

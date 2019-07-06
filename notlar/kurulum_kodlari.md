# UBUNTU'DA PHP ÇALIŞMA ORTAMI KURULUM KODLARI

*Açıklama satırlarını okuyarak kodları konsolda satır satır çalıştırın!*

```sh
      # Ekranları araç çubuğundan tek tıkla aç-kapat özelliğini vermek.
      gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
      # Depo listelerinden versiyon kontrolünü yapmak.
      sudo apt update
      # Paketlerin yeni sürümleri varsa yükseltmek.
      sudo apt upgrade -y
      # Apache'yi kurmak.
      sudo apt install -y apache2 apache2-utils
      # Apache2'yi açılışta otomatik başlaması için ayarlamak.
      sudo sudo systemctl enable apache2
      # Apache'yi test etmek. "q" ile çıkılır.
      sudo systemctl status apache2.service      
      # Html dizini ve alt elemanlarının sahibini ve grubunu www-data yapmak.
      sudo chown www-data:www-data /var/www/html/ -R
      # Mariadb'yi kurmak.
      sudo apt install -y mariadb-server mariadb-client
      # Mariadb'yi açılışta otomatik başlaması için ayarlamak.
      sudo sudo systemctl enable mariadb
      # Mariadb'yi test etmek. "q" ile çıkılır.
      systemctl status mariadb.service
      # Root kullanıcısı için parola belirlemek. Mariadb konsoluna geçer.
      sudo mysql -u root
        show databases;
        use mysql;
        update user set plugin='' where User='root';
        flush privileges;
        exit;
      # Mysql parolası belirlemek.
      sudo mysql_secure_installation
      # Php7'yi belirtilen paketlerle beraber kur.
      sudo apt install php7.2 libapache2-mod-php7.2 php7.2-mysql php-common php7.2-cli php7.2-common php7.2-json php7.2-opcache php7.2-readline
      # Php versiyon kontrolu yapmak.
      sudo php -v
      # Apache php7.2 modülünü etkinleştirmek.
      sudo a2enmod php7.2  
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
      # info.php dosyasını oluştur ve konsolda aç.
      # İçerisine <?php phpinfo(); ?> yaz.
      # CTRL+C sonra E sonra ENTER yap ve çık.
      sudo nano /var/www/html/info.php
      # Apache'yi yeniden başlatmak.
      sudo systemctl start apache2
      # Mariadb'yi yeniden başlatmak.
      sudo systemctl start mariadb
      # Git kurulumunu yapmak.
      sudo apt install git -y
      # Git versiyonunu gösterirse kurulum tamamdır.
      git --version
      # Git'e "kullaniciadi" kullanıcısını tanıtmak. Adını ve Soyadını gir.
      git config --global user.name "kullaniciadi"
      # Git'e eposta'yı tanıtmak. E-Posta'nı gir.
      $ git config --global user.email eposta
      # Git init için "html" dizinine geç.
      cd /var/www/html/
      # Git'i bu dizin için konuşlandır.
      git init
      # SSH KEY üretmek için .ssh dosyasına geçmek.
      # Eğer hata verirse sorun yok alt satırdan devam edin.
      $ cd ~/.ssh
      # SSH KEY üretmek.
      ssh-keygen
      # Ssh Key'in olduğu dosyayı açmak.
      # Key'i kopyala ve sitesine yapıştır.
      cat ~/.ssh/id_rsa.pub
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

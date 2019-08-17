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

### LENOVO Z580 WİRELESS STA SÜRÜCÜLERİNİ YÜKLEME

*LENOVO Z580 Wireless KARTI WİFİ KABLOSUZ ALICI KART Broadcom BCM94313HMGB 802.11b/g Wireless LAN WiFi Card*


1- Sürücü tespiti yapalım,

```sh
lspci -vvnn | grep 14e4
```
Örnek Çıktı; Aşağıda *14e4:* ile başlayan yerler kablosuz ağ adaptörlerimizin kodlarını vermektedir.

```sh
04:00.0 Network controller [0280]: Broadcom Inc. and subsidiaries BCM4313 802.11bgn Wireless Network Adapter [14e4:4727] (rev 01)
	Subsystem: Broadcom Inc. and subsidiaries BCM4313 802.11bgn Wireless Network Adapter [14e4:0587]
```
2- Kablosuz ağ kartımızı görüntüleyelim,

```sh
iwconfig
```
Örnek Çıktı;

```sh
enp3s0    no wireless extensions.

lo        no wireless extensions.
```

3- Kablosuz aygıtları listeleme,

```sh
rfkill list all
```
Örnek Çıktı;

```sh
0: ideapad_wlan: Wireless LAN
	Soft blocked: no
	Hard blocked: no
1: ideapad_bluetooth: Bluetooth
	Soft blocked: no
	Hard blocked: no
5: hci0: Bluetooth
	Soft blocked: no
	Hard blocked: no
```

```sh     
      lspci -vnn | grep Network
      iwconfig
      lspci -nn -d 14e4:
      sudo apt-get purge bcmwl-kernel-source
      sudo apt update
      sudo update-pciids
      sudo apt install bcmwl-kernel-source
 ```
 *Kullanılabilecek paket listesi*
 
| PCI.ID          |    16.04 LTS          |              17.10+|
|-----------------|-----------------------|---------------------|
|14e4:0576           |Special Case #1                   |UNKNOWN      |
|14e4:1713           |firmware-b43-installer            |firmware-b43-installer|  
|14e4:4301           |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4306           |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4306 rev 02    |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4306 rev 03    |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4307           |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4311           |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4311 rev 01    |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4312           |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4313           |firmware-b43-installer            |firmware-b43-installer|               
|14e4:4315           |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4315 rev 01    |firmware-b43-installer            |firmware-b43-installer|
|14e4:4318           |firmware-b43-installer            |firmware-b43-installer|                
|14e4:4318 rev 02    |firmware-b43-installer            |firmware-b43-installer|                
|14e4:4319           |firmware-b43-installer            |firmware-b43-installer|               
|14e4:4320 rev 02    |firmware-b43-installer            |firmware-b43-installer|               
|14e4:4320 rev 03    |firmware-b43-installer            |firmware-b43-installer|            
|14e4:4321           |firmware-b43-installer            |firmware-b43-installer|  
|14e4:4324           |firmware-b43-installer            |firmware-b43-installer|        
|14e4:4325           |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4328           |firmware-b43-installer            |firmware-b43-installer|
|14e4:4328 rev 03    |bcmwl-kernel-source               |bcmwl-kernel-source|      
|14e4:4329           |bcmwl-kernel-source               |bcmwl-kernel-source|        
|14e4:432a           |bcmwl-kernel-source               |bcmwl-kernel-source|        
|14e4:432b           |bcmwl-kernel-source               |bcmwl-kernel-source|        
|14e4:432c           |bcmwl-kernel-source               |bcmwl-kernel-source|        
|14e4:432d           |bcmwl-kernel-source               |bcmwl-kernel-source|       
|14e4:4331           |firmware-b43-installer            |firmware-b43-installer|          
|14e4:4335           |firmware-b43-installer            |firmware-b43-installer|      
|14e4:4350           |firmware-b43-installer            |firmware-b43-installer|  
|14e4:4353           |Special Case #1                   |UNKNOWN|        
|14e4:4353 rev 01    |Special Case #1                   |UNKNOWN|                 
|14e4:4357           |Special Case #1                   |UNKNOWN|        
|14e4:4358           |bcmwl-kernel-source               |bcmwl-kernel-source|
|14e4:4359           |bcmwl-kernel-source               |bcmwl-kernel-source|       
|14e4:4360           |bcmwl-kernel-source               |bcmwl-kernel-source|    
|14e4:4365           |bcmwl-kernel-source               |bcmwl-kernel-source|      
|14e4:4365 rev 01    |bcmwl-kernel-source               |bcmwl-kernel-source|      
|14e4:43a0           |bcmwl-kernel-source               |bcmwl-kernel-source|
|14e4:43ae rev 02    |UNKNOWN                           |UNKNOWN  |   
|14e4:43b1           |bcmwl-kernel-source               |bcmwl-kernel-source|        
|14e4:43b1 rev 03    |bcmwl-kernel-source               |bcmwl-kernel-source|              
|14e4:43c3 rev 04    |UNKNOWN                           |Special Case #2 |                    
|14e4:4727           |bcmwl-kernel-source               |bcmwl-kernel-source |       
|14e4:4727 rev 01    |Special Case #1                   |Special Case #1 |       
|14e4:a962           |firmware-b43-installer            |firmware-b43-installer|
 
 
**2. YOL**

 ```sh
      # KABLOLU BAĞLANTI VARKEN YAP!
      sudo apt-get update
      sudo apt-get --reinstall install bcmwl-kernel-source
      # BİLGİSAYARI YENİDEN BAŞLATMADAN DEVREYE ALMA
      sudo modprobe -r b43 ssb wl brcmfmac brcmsmac bcma
      sudo modprobe wl
```

**3. YOL (Nuri Akman)**

```sh
      sudo apt update && sudo apt upgrade -y
      sudo service fwupd start
      sudo fwupdmgr refresh
      sudo fwupdmgr update
      # KAYNAK: https://itsfoss.com/update-firmware-ubuntu/
```

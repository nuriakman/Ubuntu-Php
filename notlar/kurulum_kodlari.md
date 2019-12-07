# PHP ÇALIŞMA ORTAMI KURULUM KODLARI

*Açıklama satırlarını okuyarak kodları konsolda satır satır çalıştırın!*

```sh
      # Ekranları araç çubuğundan tek tıkla aç-kapat özelliğini ver.
      # Kolay kullanım için bu önemli.
      gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
      # Depo listelerinden versiyon kontrolünü yap.
      sudo apt update
      # Paketlerin yeni sürümleri varsa yükselt.
      sudo apt upgrade -y
      # Apache'yi kur.
      sudo apt install apache2 -y
      # Apache2'yi açılışta otomatik başlaması için ayarla.
      sudo sudo systemctl enable apache2     
      # Html dizini ve alt elemanlarının sahibini ve grubunu www-data yap.
      sudo chown www-data:www-data /var/www/html/ -R
      # Mariadb'yi kur.
      sudo apt install mariadb-server mariadb-client -y
      # Mariadb'yi açılışta otomatik başlaması için ayarla.
      sudo sudo systemctl enable mariadb
      # Php'yi belirtilen paketlerle beraber kur.    
      sudo apt install php-pear php-fpm php-dev php-zip php-curl php-xmlrpc -y
      sudo apt install php-gd php-mysql php-mbstring php-xml libapache2-mod-php -y
      # Apache Web sunucusunu yeniden başlat.
      sudo systemctl restart apache2
      # Html dizini için kullanıcıyı yetkilendir.
      sudo adduser $USER www-data
      # Html dizini için grubu yetkilendir.
      sudo chown -R $USER:www-data /var/www/html/
      # Masaüstü dizinine geç.
      cd ~/Masaüstü
      # Masaüstü'ne kısayol oluştur.
      ln -s /var/www/html/
      # html dizinine geç.
      cd /var/www/html/
      # Apache ve Mariadb'yi yeniden başlat.
      sudo systemctl restart apache2
      sudo systemctl restart mariadb
      # Git kurulumunu yap "html" dizinide içinde yap.
      # Bu şekilde bütün projelerde kullanabilirsin.
      sudo apt install git -y
      # Git'e "kullaniciadi" kullanıcısını tanıtmak. Adını ve Soyadını gir.
      git config --global user.name "Adın Soyadın"
      # Git'e eposta'yı tanıtmak. E-Posta'nı gir.
      git config --global user.email epostan
      # /var/www/html/ dizini içerisinde Git init çalıştır.
      # Git'i bu dizin için konuşlandır.
      git init
      # /var/www/html/ dizin içinde "Adminer"i kur.
      # Burada "adminer" adında bir dizin oluştur.
      mkdir adminer
      # adminer dizinine geç.
      cd adminer
      # Adminer'in index.php dosyasını buraya indir.
      wget -O index.php https://www.adminer.org/latest.php
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

## SUBLİME TEXT 3 KURULUMU
```bash
wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | sudo apt-key add -
sudo apt-get install apt-transport-https
echo "deb https://download.sublimetext.com/ apt/stable/" | sudo tee /etc/apt/sources.list.d/sublime-text.list
echo "deb https://download.sublimetext.com/ apt/dev/" | sudo tee /etc/apt/sources.list.d/sublime-text.list
sudo apt-get update
sudo apt-get install sublime-text
```

#### LİSANS
~/.config/sublime-text-3/Local/ adresinde "**License.sublime_license**" isimli dosya varmı kontrol edin. Aşağıdaki komutlaları sırası ile konoldan gönderin.

```bash
cd ~/.config/sublime-text-3/Local/
ls -al
# Varsa geditle aç içerisine anahtarı yapıştır.
sudo gedit License.sublime_license
# Eğer değişiklik yapılamıyorsa salt okunur açılıyorsa,
sudo chattr -i License.sublime_license
#Gedit komutunu tekrar çalıştır.
# Yapıştırdıktan sonra kaydet ve kapat.
```

###### Lisans Anahtarı
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

## ATOM KURMAK
```bash
      # Atom paketinin indirileceği depoyu sisteme eklemek.
      wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -  
      sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
      # Yeni eklediğimiz depo listesinin tanınması için listeleri güncellemek.
      sudo apt update
      # Atom paketini kurmak.
      sudo apt install atom -y
 ```
 
### TERMİNALDEN BİR KAÇ PÜF
```bash
# Bilgisayarı kapatmak.
shutdown now
# Bilgisayarı yeniden başlatmak.
shutdown -r now
# Bilgisayarı uyutmak.
systemctl suspend
```
 
### LENOVO Z580 NUMLOCK AÇILIŞTA AKTİF ETMEK
GDM giriş pencresinde Numlock tuşunun otomatik açılması. Aşağıdaki komutları sırasıyla girdikten sonra bilgisayarı tekrar başlatırsanız aktif  oluyor.
```bash
sudo apt-get install numlockx
sudo -i
xhost +SI:localuser:gdm
su gdm -s /bin/bash
gsettings set org.gnome.settings-daemon.peripherals.keyboard numlock-state 'on'
gsettings set org.gnome.desktop.peripherals.touchpad tap-to-click true
exit
exit
shutdown -r now
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

3- Kablosuz aygıtları mevcut durumunu listeleme,

Herhangi bir "evet" varsa, ``rfkill``’ün wifi’nizin engellemesini engelleyen bir şey anlamına gelir; Bu servisi bulup durdurmalısın. ``sudo service {service} stop`` Genel olarak, bunlar diğer ağ araçlarıdır.

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
nmcli c
```
Örnek Çıktı;

```sh
NAME                UUID                                  TYPE      DEVICE 
Kablolu bağlantı 1  275520a7-0648-3a1c-9f0b-d2740923ddce  ethernet  enp3s0 
babaminyeri         857252a5-7b01-4888-a6a1-550221d3dca3  wifi      --   
```
```sh
nmcli d
```
Örnek Çıktı;

```sh
DEVICE  TYPE      STATE         CONNECTION         
enp3s0  ethernet  bağlandı      Kablolu bağlantı 1 
lo      loopback  yönetilmeyen  --       
```
#### nmcli komutları

```sh
# Bağlantı durumu görme
nmcli general status
nmcli c
nmcli d
# type:wifi
nmcli r wifi on
# Manuel bağlanma
nmcli d wifi connect "bağlantı adı" password "parola"
# Bağlantıyı ayağa kaldırma
nmcli c up <name>
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



```sh     
      lspci -vnn | grep Network
      iwconfig
      lspci -nn -d 14e4:
      sudo apt-get purge bcmwl-kernel-source
      sudo apt update
      sudo update-pciids
      sudo apt install bcmwl-kernel-source
 ```
 
 
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

## Terminus – A modern age terminal on Ubuntu

Terminus, Hyper’den esinlenerek tasarlanmış, zarif ve kullanımı kolay, web tabanlı bir linux terminalinden başka bir şey değildir. İşleri zamanında yapmak isteyen insanlar için tasarlanmıştır. Windows, MacOS yanı sıra Linux üzerinde çalışır ve çeşitli tema ve renk düzenleri ile birlikte gelir.

**Kurulum:**

```sh
sudo apt install gdebi
wget https://github.com/Eugeny/terminus/releases/download/v1.0.0-alpha.18/terminus_1.0.0-alpha.18_amd64.deb
sudo gdebi terminus_1.0.0-alpha.18_amd64.deb
```

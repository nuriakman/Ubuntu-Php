# PHP ÇALIŞMA ORTAMI KURULUM KODLARI

*Açıklama satırlarını okuyarak kodları konsolda satır satır çalıştırın!* 

```bash
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
 
### TERMİNALDEN BİR KAÇ PÜF
```bash
# Bilgisayarı kapatmak.
shutdown now
# Bilgisayarı yeniden başlatmak.
shutdown -r now
# Bilgisayarı uyutmak.
systemctl suspend
```
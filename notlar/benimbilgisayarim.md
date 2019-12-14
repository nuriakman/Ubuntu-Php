# BENİM BİLGİSAYARIM

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

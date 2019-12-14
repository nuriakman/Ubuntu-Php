# LİNUX FAYDALI KOMUTLAR

### Kaldırılmış paketlerin geride kalan ayar dosyalarını silme

*Sistemimizde kullanılmayan yapılandırma dosyalarını bulmak için;*

```sh
dpkg -l | awk '/^rc/ {print $2}'
```
*Yapılandırma dosyalarını kaldırmak için ise;*

```sh
sudo su
dpkg -l | awk '/^rc/ {print $2}' | xargs dpkg --purge
```

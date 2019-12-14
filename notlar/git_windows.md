# WİNDOWS GİT İLE GİTHUB ÇALIŞMA ORTAMI HAZIRLAMA

## KURULUM, ÇALIŞMA ORTAMININ HAZIRLANMASI VE SSH KEY TANITMA
Windows'da **GİT** kurmak oldukça kolaydır. Bunun için bu [adresten](https://git-scm.com/download/) size uygun olanı indirin ve kurun.

Git'i kurduktan sonra "GitBash" i açın. GitBash'den yapacaklarımızı aşağıda sıraladım. GitBash ekranına yapıştırma işlemini ``SHIFT+INS`` ile  kopyalama işini ise ``CTRL+INS`` ile yapıyoruz.

- Adımızı ve E-Posta adresimizi tanıtalım,

```bash
  git config --global user.name "Adınız ve soyadınız ya da kullanıcı adınız"
  git config --global user.email "E-Posta adresiniz"
```

- SSH KEY'i oluşturalım ve Github'a yükleyelim,
cat id_rsa.pub
```bash
  ssh-keygen -t rsa -C "E-Posta adresiniz"
```

- Şimdi oluşturduğumuz SSH Key'i kopyalayıp GitHub'a yapıştıralım.

```bash
  cd /c/Users/user/.ssh/
  cat id_rsa.pub
```

``cat`` komutu ile "id_rsa.pub" dosyasının içerisindeki keygeni "rsa" dan başlayıp "eposta" adresimiz dahil olacak şekilde kopyalıyoruz.

[github.com/settings/keys](https://github.com/settings/keys) github.com/settings/keys sayfasına geçip, başlığı yazdıktan sonra Key bölümüne kopyaladığımız ssh key'i yapıştırıyoruz. sayfasına geçip, başlığı yazdıktan sonra Key bölümüne kopyaladığımız ssh key'i yapıştırıyoruz.

Bu yaptığımız işlemler sonucunda github.com ile makinamız arasında güvenli bir  "GİT" çalışma ortamı oluşturmuş olduk.

## GİT İLE ÇALIŞMA

Yeni bir projeye başladığımızı varsayıyorum:

[github.com](https://github.com/new) sitesine giderek yeni bir proje (Repository) oluşturuyoruz. Bunun için ***repository name*** bölümüne proje adımızı yazıp, ***public*** i seçtikten sonra ***README*** kutucuğunu işaretleyip ***Create repository*** e basıyoruz. Yeni projemiz hazır. Bitti mi? Bitmedi;

Yeni projemize geçip yeşil renkte olan ***Clone or Download*** butonuna basıyoruz. Açılan kutunun sol üst köşesinde ya **Use SSH** yada **Use HTTPS** yazar. Bize lazım olan **Use HTTPS**. Eğer **Use SSH** varsa üzerine bir kez tıklayıp **Use HTTPS** yapıyoruz ve altındaki kopyalama düğmesine basarak projemizi klonlamak için gerekli bağlantıyı alıyoruz.

Şimdi devam edebilmemiz için /c/xampp/htdocs klasörüne geçmemiz gerekiyor. Bunun için;

```bash
  cd /c/xampp/htdocs/
```

Github'da bulunan projemizi lokalimize klonlamak için;

```bash
  git clone KOPYALADIĞINIZ_PROJE_ADRESİ
  cat id_rsa.pub
```

Şu ana kadar bir şeyleri unutmadıysak projemiz "HTDOCS" klasörü altına klonlanmaya başlamıştır. Klonlama işlemi bittikten sonra proje klasörünün içerisine geçiyoruz;

```bash
  cd /c/xampp/htdocs/proje_adi
```

Atom text editörde projemizi ekleyerek çalışmaya başlamak için;

```bash
  atom .
```

Komutunu gönderdikten sonra atom editörü projemizle beraber çalışmaya hazır şekilde açılacaktır. Artık çalışmaya hazırsınız.

Git kullanımı hakkında bilgiye [buradan](./git_kullanimi.md) ulaşabilirsiniz.

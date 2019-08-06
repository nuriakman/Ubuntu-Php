# WİNDOWS GİT-GİTHUB ÇALIŞMA ORTAMI HAZIRLAMA

Windows'da **GİT** kurmak oldukça kolaydır. Bunun için bu [adresten](https://git-scm.com/download/) size uygun olanı indirin ve kurun.

Git'i kurduktan sonra "GitBash" i açın. GitBash'den yapacaklarımızı aşağıda sıraladım. GitBash ekranına yapıştırma işlemini ``SHIFT+INS`` ile  kopyalama işini ise ``CTRL+INS`` ile yapıyoruz.

- Adımızı ve E-Posta adresimizi tanıtalım,

```bash
  $ git config --global user.name "Adınız ve soyadınız ya da kullanıcı adınız"
  $ git config --global user.email "E-Posta adresiniz"
```

- SSH KEY'i oluşturalım ve Github'a yükleyelim,
cat id_rsa.pub
```bash
  $ ssh-keygen -t rsa -C "E-Posta adresiniz"
```

- Şimdi oluşturduğumuz SSH Key'i kopyalayıp GitHub'a yapıştıralım.

```bash
  $ /c/Users/user/.ssh/
  cat id_rsa.pub
```

``cat`` komutu ile "id_rsa.pub" dosyasının içerisindeki keygeni "rsa" dan başlayıp "eposta" adresimiz dahil olacak şekilde kopyalıyoruz.

[github.com/settings/keys](https://github.com/settings/keys) github.com/settings/keys sayfasına geçip, başlığı yazdıktan sonra Key bölümüne kopyaladığımız ssh key'i yapıştırıyoruz. sayfasına geçip, başlığı yazdıktan sonra Key bölümüne kopyaladığımız ssh key'i yapıştırıyoruz.

Bu yaptığımız işlemler sonucunda github.com ile makinamız arasında güvenli bir  "GİT" çalışma ortamı oluşturmuş olduk.

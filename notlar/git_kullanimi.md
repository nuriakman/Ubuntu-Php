# GİT KOMUTLARI

# Git Nedir?

Git en temel mantığı ile versiyon kontrol sistemidir. Projelerimizde kodlarımızı, versiyonlarımızı ve yazdığımız yorumları vb. işlemleri tutmamıza ve geriye dönüp neler yapmışız bakabilmemize yarar.
Kendi bilgisayarımızda ya da gitlab, github ve bitbucket gibi projelerimizi barındırabileceğimiz bulut sistemlerinde rahatlıkla kullanabiliriz. Bir projede birden fazla kişinin çalışmasına olanak sağlar.

[Git komutları hakkında detaylı bilgi. (*****)](https://git-scm.com/docs)

### Hazırlık

Başlamadan önce hatırlatmak isterim ki; git kullanımı gerek ***gitBash***'de olsun, gerek ***linux*** kolsolda olsun ve gerekse ***osx*** sistemlerde olsun aynıdır. Sadece ***osx*** sistemlerde "***git***" yada herhangi bir terminal komutu yoksa bunu "***brew***" paket yöneticisini kurduktan sonra kullanabiliyorsunuz. ***Brew Paket Yöneticisi***'ni ve ***git***'i kurmak için aşağıdaki komutu osx terminalden gönderin. Git kolmutu genelde osx sistemlerde yüklü gelir, ben sadece sırası gelmişken osx sistemlere paket yöneticisi ve paketler nasıl yüklenir bilgi vermek istedim.

```bash
  /usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
  brew install git
```

#### Git'i nasıl oluştururum?

Mutlaka komutu terminalden ana klasör içerisinde göndermeniz gerekir.
Linux için; /var/www/html/
Windows için; /c/xampp/htdocs/
Osx için; /Application/MAMP/html/

```bash
  git init
```

#### Projem ile repository arasında fark var mı?

```bash
  git status
```

#### Lokalde projemi değiştirdim, repository'i nasıl eşitlerim?

Aşağıdaki üç satır komutların açıklaması;
- Önce yeni dosya yada klasör oluşturmuş isen onları ekle, buradaki . bulunduğumuz klasörü temsil eder.
- Yaptığın ekleme yada güncelleme hakkında not ilişkilendir,
- Github'da yer alan projeni güncelle yani gönder. Burada "master" bulunduğumuz dalı (branch) temsil eder. Varsayılan olarak "master" dır.

```bash
  git add .
  git commit -m "Güncelleme mesajını buraya yaz"
  git push -u origin master
```

#### Repository üzerinde güncelleme yaptım, lokaldeki projemi nasıl eşitlerim?

```bash
  git pull
```

#### Çalıştığım git bağlantı adresi ne?

Bağlantı adresinde sorun varsa ``fatal: No such remote 'Origin'`` hatası verir.

Biz herhangi bir projeyi bilgisayarımıza indirdikten sonra projenin url si değiştirilmiş olabilir. Yeniden klonlamamız gerekebilir. Url'yi kontrol etmemiz gerekebilir.

```bash
  git remote -v
```

Örnek Bağlantı adresi(git ile başlayıp git ile biten bölüm);

```bash
  origin  git@github.com:yeniceri1453/Ubuntu-Php.git (fetch)
  origin  git@github.com:yeniceri1453/Ubuntu-Php.git (push)
```

#### Klonladığım projenin bağlantı adresi değişmiş, nasıl düzeltirim?

```bash
  git remote set-url origin git@github.com:yeniceri1453/Ubuntu-Php.git
```

#### Yeni proje bağlantısı nasıl eklerim (Yeni depo nasıl oluştururum)?

Depo yoksa ``fatal: Not a git repository (or any of the parent directories): .git`` bu hatayı verir.

```bash
  git remote add origin git@github.com:yeniceri1453/Ubuntu-Php.git
```

#### Projemde yeni dal (branch) nasıl oluşturabilirim?

```bash
  git branch yeni_dal_ismi
```

#### İstediğim dala (branch) nasıl geçebilirim?

```bash
  git checkout dal_ismi
```

#### Projemde dalı (branch) nasıl silebilirim?

```bash
  git branch -D dal_ismi
```

#### Dalı (branch) gövdeye nasıl birleştirebilirim?

```bash
  git merge dal_ismi
```

#### Eski sürüme nasıl dönerim?

- Eski sürümleri (commit) nasıl görebilirim?

```bash
  git log
```

- Eski sürüme (commit) nasıl giderim?
  a1453 yazan yere gitmek istediğiniz commit anahtarının ilk 5 karakteridir.

```bash
  git checkout <commit - a1453..>
```

- Şimdiki zamana nasıl dönerim?

```bash
  git reset
```

Devam edecek........

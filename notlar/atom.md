# ATOM TEXT EDİTÖRÜ

## Kurulum

Atom Text Editörünü kurabilmek için ilk önce paketin bulunduğu listeyi sistemimize ekliyoruz.

```bash
  # Atom paketinin indirileceği depoyu sisteme ekle.
  $ wget -qO - https://packagecloud.io/AtomEditor/atom/gpgkey | sudo apt-key add -
  $ sudo sh -c 'echo "deb [arch=amd64] https://packagecloud.io/AtomEditor/atom/any/ any main" > /etc/apt/sources.list.d/atom.list'
  $ sudo apt update
```

Şimdi kurmaya hazırız...

```bash
  $ sudo apt install atom -y  # Atom paketini kur.
```

Atom Metin editörü hakkında bilgiye ve kullanışlı eklentilerine [buradan](https://emregeldegul.net/2017/10/kullanisli-atom-paketleri/) ulaşabilirsiniz.

## Önemli Eklentiler

| Eklenti Adı | Açıklama |
| ---- | ---- |
| atom-live-server | Değişiklikleri aynı anda lokalden görüntüleyebilmemize yarar. |
| emmet | Kodları otomatik tamamlar. |
| reindent | Kod girintilerini otomatik düzenliyerek, anlaşılır görünmelerini sağlar. |

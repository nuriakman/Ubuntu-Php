# SWITCH-CASE İFADESİ

Bir değişkene bağlı koşullu işlem yaparken IF, ELSEIF, ELSEIF ... şeklinde uzunca bir komut kullanmak hem zamanımızı alır, hem de php derleyiciyi yorar. Bu gibi durumlarda Switch kodu işimizi kolaylaştırır.

  ```php
    switch (koşul) {
      case 'koşulun değeri 1':
        Koşulun değeri doğruysa yapılacak olan.
        break;

      case 'koşulun değeri 2':
        Koşulun değeri doğruysa yapılacak olan.
        break;      

      case 'koşulun değeri 3':
        Koşulun değeri doğruysa yapılacak olan.
        break;      

      default:
        Koşulları karşılamıyorsa yapılacak olan.
        break;
    }
  ```

Not: Ufak işlemlerde ya da fonksiyon içlerinde daha çok switch-case kullanırız.

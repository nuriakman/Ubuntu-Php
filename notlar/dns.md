# DNS NEDİR?

DNS, Domain Name System’in kısaltılmış şeklidir. Türkçe karşılığı ise Alan İsimlendirme Sistemi olarak bilinir ve 256 karaktere kadar büyüyebilen host isimlerini IP’ye çevirmek için kullanılır. Yani internetin telefon rehberidir.

Host ismi, tümüyle tanımlanmış isim (**full qualified name**) olarak da bilinir ve hem bilgisayarın ismini hem de bilgisayarın bulunduğu internet domainini gösterir. **DNS**, verilen bir makina adının **IP** adresini çözerek makinaların internet üzerinde host isimleri ile haberleşmelerine olanak tanır.

![](https://lh3.googleusercontent.com/rlRZM1FQaFjZ_VMEsvZeKoa0IU2J9RAzgIK00iZXal6-_U-r_Jf_i0vPU2eWKQ6-woVq83HzhxsF)

**DNS’in Kullanım Amacı Nedir?**

DNS’in kullanım amacı son derece basittir, kolay anlaşılabilir ve kullanılabilir makine ve alan isimleri ile makine IP adresleri arasında çift taraflı dönüşümü sağlar. IP adreslerinin gündelik hayatta kullanımı ve hatırlanması pek pratik olmadığı için domain isimlendirme sistemi kullanılır.

Ana amacı, ağ üzerinden gelen alan adı veya IP numarası ile ilgili sorgulamalara yanıt vermektir. Bu amaç için çok yaygın olarak “Berkeley Internet Name Domain (BIND)” yazılımı kullanılmaktadır. Siz bir siteye erişmek istediğinizde, DNS sayesinde hangi site nerede, hangi IP hangi bilgisayara ait olduğu belirlenir ve istediğiniz yere erişirsiniz.

**DNS Nasıl Çalışır?**

DNS sistemi isim **sunucuları** ve **çözümleyicilerinden** oluşur. İsim sunucuları olarak düzenlenen bilgisayarlar host isimlerine karşılık gelen IP adresi bilgilerini tutarlar. Çözümleyiciler ise DNS istemcilerdir. DNS istemcilerde, DNS sunucu ya da sunucuların adresleri bulunur.

Bir DNS istemci bir bilgisayarın ismine karşılık IP adresini bulmak istediği zaman isim sunucuya başvurur. İsim sunucu, yani DNS sunucu da eğer kendi veri tabanında öyle bir isim varsa, bu isme karşılık gelen IP adresini istemciye gönderir.

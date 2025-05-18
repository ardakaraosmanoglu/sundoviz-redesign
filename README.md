# SunDoviz Yeniden Tasarım Projesi

## Proje Hakkında
# https://raxana.net/demos/sundoviz/Demo URL: 

Bu proje, https://sundoviz.com/ web sitesinin modern tasarım standartlarına uygun şekilde yeniden tasarlanmasını amaçlamaktadır. Sitenin görsel açıdan güncelliğini yitirdiğini tespit ederek, kullanıcı deneyimini iyileştirmek amacıyla bir yeniden tasarım çalışması gerçekleştirilmiştir. Projeyi beğendiğiniz takdirde, tüm kaynak kodlarına GitHub üzerinden ücretsiz olarak erişebilir ve kendi sitenizde uygulayabilirsiniz. Yapılan değişiklikleri incelemek için tanıtım videosunu izleyebilir, canlı demo sürümüne şu bağlantıdan ulaşabilirsiniz: https://raxana.net/demos/sundoviz/update.mp4

![before-after-comparison](https://github.com/user-attachments/assets/96121137-9232-436b-830f-a62060f095c5)


## Özellikler

### Çekirdek Uygulama
✅ Temel Yapı
  - Tek sayfa düzeni
  - Duyarlı tasarım (Responsive)
  - Sistem tabanlı karanlık mod
  - Özel stil

✅ Tema Sistemi
  - Sistem tercihine dayalı otomatik karanlık/açık mod
  - Gerçek zamanlı tema değişiklikleri
  - Özel renk paleti
  - Her iki mod için optimize edilmiş

✅ Döviz Kuru Gösterimi
  - Tablo düzeni
  - İkonlu başlıklar
  - Zebra şeritli tasarım
  - Zaman damgası gösterimi

✅ İletişim Entegrasyonu
  - Telefon çağrı butonu
  - WhatsApp entegrasyonu
  - İkon sistemi
  - Hover efektleri

✅ Çoklu Dil Desteği
  - 20+ dil çevirisi
  - Otomatik dil algılama
  - Kalıcı dil tercihleri
  - TR/EN dil değiştirici

✅ Performans Optimizasyonları
  - API yanıt önbelleği
  - Otomatik arka plan yenileme
  - Azaltılmış yükleme durumları
  - Geliştirilmiş kullanıcı deneyimi

### Görsel Öğeler
✅ Tasarım Sistemi
  - Özel gradyanlar
  - Arka plan bulanıklığı
  - Kenarlık stillemesi
  - Animasyon sistemi

✅ Tipografi
  - Montserrat yazı tipi
  - Duyarlı boyutlandırma
  - İkon entegrasyonu
  - Sayı biçimlendirme

✅ Arayüz İyileştirmeleri
  - Azaltılmış logo dolgusu
  - Sadeleştirilmiş arayüz
  - Gereksiz kontrollerin kaldırılması
  - Geliştirilmiş mobil deneyim

## Kurulum

1. Dosyaları sunucunuza yükleyin:
   - index.html
   - proxy.php
   - translations.js
   - backg.jpg
   - sun-logo.png

2. `proxy.php` dosyasının çalışabilmesi için PHP destekli bir sunucu gereklidir.

## Teknik Detaylar

### Teknoloji Yığını
- HTML5
- Tailwind CSS (CDN üzerinden)
- Vanilla JavaScript
- Özel CSS
- PHP (API proxy için)

### Çoklu Dil Sistemi
- Modüler translations.js dosyası
- Nesne tabanlı çeviri saklama
- Standartlaştırılmış dize anahtarları
- navigator.language ile dil algılama
- LocalStorage ile tercih kalıcılığı

### Veri Yönetimi
- CORS için PHP proxy
- Hata işleme ve günlükleme
- Yanıt ayrıştırma ve biçimlendirme
- Zaman aşımı işleme
- LocalStorage ile API yanıtlarının önbelleğe alınması
- TTL tabanlı önbellek süresi (5 dakika)
- API hatası durumunda önbelleğe alınmış verilere geri dönüş
- Arka plan yenileme mekanizması
- Sayfa yüklemede anında önbellek kullanımı

### Tema Sistemi
- window.matchMedia('(prefers-color-scheme: dark)') ile sistem tercihini algılama
- Gerçek zamanlı tercih değişikliği algılama
- Sınıf tabanlı tema uygulaması
- Tailwind karanlık mod entegrasyonu

## Sorunlar ve Geri Bildirim

Herhangi bir sorun bulursanız veya geri bildiriminiz varsa, lütfen GitHub üzerinden issue açın.

## Lisans

Bu proje MIT lisansı altında açık kaynak olarak sunulmuştur.

---

© 2023-24 Raxana.NET 

# Cursor Prompt — Saç Ekimi Simülasyonu Web Sitesi

Aşağıdaki prompt’u Cursor’a vererek saç ekimi simülasyonu için çalışan bir web uygulaması geliştirmesini isteyebilirsin. Prompt, tasarım, veri modeli, görsel/ grafik ihtiyaçları ve teknik detayları kapsar.

---

**Prompt (Cursor’a yapıştır):**

Sen deneyimli bir full‑stack web geliştiricisisin. Aşağıdaki gereksinimlere uygun bir **saç ekimi simülasyonu** web sitesi geliştir:

## Amaç
Kullanıcı saç tipini ve saç dökülme bölgesini seçtiğinde, ekim simülasyonu yapan, **grafikler ve görsellerle** zenginleştirilmiş bir arayüz sun.

## Temel Özellikler
1. **Saç Tipi Seçimi**
   - Düz, Dalgalı, Kıvırcık, Afro
   - Her saç tipi için kısa açıklama ve görsel küçük kartlar
2. **Dökülme Bölgesi Seçimi**
   - Ön çizgi (front line)
   - Tepe (vertex)
   - Orta alan (mid-scalp)
   - Yaygın dökülme (diffuse)
   - Seçim görsel bir kafa diyagramı üzerinde tıklanabilir alanlarla yapılmalı
3. **Simülasyon Sonucu**
   - “Öncesi / Sonrası” görselleştirme
   - Seçilen saç tipi ve bölgeye göre yoğunluk slider’ı (örn. %30, %50, %70)
   - Tahmini greft sayısı ve süre bilgisi
4. **Grafikler**
   - Bar chart: Bölgeye göre ortalama greft dağılımı
   - Line/area chart: Zaman içinde yoğunluk artışı
   - Grafikler statik veriyle (mock) olabilir ama dinamik görünmeli

## UI/UX
- Modern, temiz tasarım
- Mobil uyumlu (responsive)
- Adım adım ilerleyen akış: 1) saç tipi 2) bölge 3) yoğunluk
- Yumuşak geçişler ve animasyonlar

## Teknik Gereksinimler
- Sadece front-end (React + TypeScript önerilir)
- Chart için Recharts veya Chart.js kullan
- Basit state yönetimi (useState + context)
- Statik mock verileri JSON olarak organize et

## Teslim
- Çalışan bir demo sayfası
- Dosya yapısını açıkla
- Çalıştırma talimatları ekle

**Not:** Kullanıcı, seçim yaptığında simülasyon paneli anında güncellensin.

---

İstersen bu promptu projene göre özelleştirebilirsin.

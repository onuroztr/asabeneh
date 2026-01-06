# WordPress Mobil Uyumlu Navbar

Bu klasör, WordPress temanızda hızlıca kullanabileceğiniz minimalist ve mobil uyumlu bir navbar bileşeni içerir. Menü tamamen WordPress menü yönetimini kullanır ve küçük ekranlarda dokunmatik uyumlu bir aç/kapa butonu ile çalışır.

## 1) Menü konumunu tanımlayın
`functions.php` dosyanıza aşağıdaki kodu ekleyin. Tema zaten bir konum tanımlıyorsa bu adımı atlayabilirsiniz.

```php
function custom_register_navbar_menu() {
  register_nav_menus([
    'primary' => __('Primary Menu', 'your-theme'),
  ]);
}
add_action('after_setup_theme', 'custom_register_navbar_menu');
```

## 2) Stil ve script dosyalarını ekleyin
`navbar.css` ve `navbar.js` dosyalarını tema klasörünüze (örneğin `assets/css` ve `assets/js`) kopyalayın ve `functions.php` içinde enqueue edin.

```php
function custom_enqueue_navbar_assets() {
  $theme_version = wp_get_theme()->get('Version');

  wp_enqueue_style(
    'custom-navbar',
    get_template_directory_uri() . '/assets/css/navbar.css',
    [],
    $theme_version
  );

  wp_enqueue_script(
    'custom-navbar',
    get_template_directory_uri() . '/assets/js/navbar.js',
    [],
    $theme_version,
    true
  );
}
add_action('wp_enqueue_scripts', 'custom_enqueue_navbar_assets');
```

## 3) Markupu ekleyin
`header.php` içinde navbarın görünmesini istediğiniz yere `navbar.php` dosyasındaki markupu yerleştirin. Dosyayı doğrudan include edebilir veya kodu kopyalayabilirsiniz.

- Menü, admin panelinden atadığınız `primary` konumunu kullanır.
- `aria-expanded` ve dışarı tıklama desteği ile erişilebilir, kapanabilir bir mobil menü içerir.

## 4) Özelleştirme ipuçları
- Renkleri `navbar.css` dosyasındaki `:root` değişkenleri üzerinden güncelleyebilirsiniz.
- Varsayılan breakpoint 768px; farklı bir genişlik isterseniz `@media (max-width: 768px)` satırını güncelleyin.
- Menü maddeleri WordPress'in `current-menu-item` sınıfını otomatik alır, bu sayede aktif sayfa vurgulanır.

## Önizleme

```html
<nav class="wp-navbar" role="navigation" aria-label="Primary">
  <a class="wp-navbar__brand" href="#">Marka</a>
  <button class="wp-navbar__toggle" type="button" data-toggle="wp-navbar" aria-expanded="false">
    <span class="wp-navbar__icon">☰</span>
    <span class="wp-navbar__label">Menü</span>
  </button>
  <div class="wp-navbar__menu-wrapper">
    <ul class="wp-navbar__menu">
      <li class="menu-item current-menu-item"><a href="#">Ana Sayfa</a></li>
      <li class="menu-item"><a href="#">Hakkında</a></li>
      <li class="menu-item"><a href="#">İletişim</a></li>
    </ul>
  </div>
</nav>
```

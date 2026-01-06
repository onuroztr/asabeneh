(function () {
  const navbar = document.querySelector('.wp-navbar');
  const toggle = document.querySelector('[data-toggle="wp-navbar"]');

  if (!navbar || !toggle) return;

  toggle.addEventListener('click', () => {
    navbar.classList.toggle('is-open');
    const expanded = toggle.getAttribute('aria-expanded') === 'true';
    toggle.setAttribute('aria-expanded', (!expanded).toString());
  });

  document.addEventListener('click', (event) => {
    if (!navbar.classList.contains('is-open')) return;
    const isInside = navbar.contains(event.target);
    if (!isInside) {
      navbar.classList.remove('is-open');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });
})();

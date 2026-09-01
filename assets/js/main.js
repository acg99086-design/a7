document.addEventListener('DOMContentLoaded', () => {
  const header = document.querySelector('.site-header');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) { header.classList.add('scrolled'); }
    else { header.classList.remove('scrolled'); }
  });

  const toggleBtn = document.querySelector('.mobile-toggle');
  const mainNav = document.querySelector('.main-nav');
  if (toggleBtn && mainNav) {
    toggleBtn.addEventListener('click', () => {
      const isOpen = mainNav.style.display === 'flex';
      mainNav.style.display = isOpen ? 'none' : 'flex';
      if (!isOpen) {
        mainNav.style.flexDirection = 'column'; mainNav.style.position = 'absolute';
        mainNav.style.top = '100%'; mainNav.style.left = '0'; mainNav.style.right = '0';
        mainNav.style.background = 'rgba(18, 10, 14, 0.98)'; mainNav.style.padding = '24px';
      }
    });
  }

  const optionCards = document.querySelectorAll('.silk-option-card');
  const resultTitle = document.getElementById('silk-custom-title');
  const resultDesc = document.getElementById('silk-custom-desc');
  const resultBadge = document.getElementById('silk-custom-badge');

  const silkRobes = {
    'momme22': { title: 'The Grand Imperial 22-Momme Silk Satin Robe', desc: 'Crafted from 100% Grade 6A long-filament Mulberry silk satin with hand-rolled French seams, piped shawl collar, and liquid drape sash.', badge: 'Textile Density: 22-Momme Heavyweight Satin &bull; Grade 6A Mulberry Silk' },
    'jacquardkimono': { title: 'The Edo Heritage Silk Jacquard Kimono Robe', desc: 'Woven on Kyoto jacquard looms with subtle tone-on-tone botanical cherry blossom motifs and wide structured sleeves.', badge: 'Weave Architecture: Double-Weave Silk Jacquard &bull; Hand-Tied Obi Belt' },
    'boudoirwrap': { title: 'The Liquid Silk Georgette Boudoir Wrap', desc: 'Ultralight semi-sheer silk georgette lined with soft crepe de chine for featherweight luxury loungewear.', badge: 'Weight-to-Drape Ratio: 16-Momme Silk Georgette &bull; French Lace Insets' }
  };

  if (optionCards.length > 0 && resultTitle) {
    optionCards.forEach(card => {
      card.addEventListener('click', () => {
        optionCards.forEach(c => c.classList.remove('active'));
        card.classList.add('active');
        const type = card.getAttribute('data-robe');
        if (silkRobes[type]) {
          resultTitle.textContent = silkRobes[type].title;
          resultDesc.textContent = silkRobes[type].desc;
          if (resultBadge) resultBadge.textContent = silkRobes[type].badge;
        }
      });
    });
  }

  const faqItems = document.querySelectorAll('.faq-item');
  faqItems.forEach(item => {
    const header = item.querySelector('.faq-header');
    if (header) {
      header.addEventListener('click', () => {
        const isActive = item.classList.contains('active');
        faqItems.forEach(i => i.classList.remove('active'));
        if (!isActive) { item.classList.add('active'); }
      });
    }
  });
});
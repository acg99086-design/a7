<?php
$site_name = "Gloss Robe Peak";
$site_tagline = "Bespoke 22-Momme Mulberry Silk Robe & Loungewear Atelier";
$official_address = "181 Mercer Street, New York, NY 10012, United States";
$official_phone = "+1-888-777-5845";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gloss Robe Peak | Bespoke Mulberry Silk Robes & Haute Loungewear</title>
  <meta name="description" content="Discover Gloss Robe Peak: 22-momme pure Mulberry silk satin robes, hand-rolled French seams, Kyoto jacquard weaves, and bespoke loungewear in Manhattan.">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><circle cx='50' cy='50' r='45' fill='%23120A0E' stroke='%23F43F5E' stroke-width='4'/><path d='M30 35 Q50 65 70 35 Q50 80 30 35 Z' fill='%23FDA4AF'/><circle cx='50' cy='32' r='4' fill='%23F43F5E'/></svg>">
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-0LY0HY7L01"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'G-0LY0HY7L01');
  </script>
</head>
<body>
  <header class="site-header">
    <div class="container">
      <div class="header-inner">
        <a href="index.php" class="brand-container">
          <div class="brand-logo-icon">👘</div>
          <div class="brand-text-wrap">
            <span class="brand-logo-text"><?php echo $site_name; ?></span>
            <span class="brand-tagline"><?php echo $site_tagline; ?></span>
          </div>
        </a>
        <nav class="main-nav">
          <a href="index.php" class="nav-link active">Main</a>
          <a href="about.html" class="nav-link">Atelier</a>
          <a href="blog.html" class="nav-link">Journal</a>
          <a href="contact.html" class="nav-link">Silk Boudoir</a>
        </nav>
        <div class="nav-cta"><a href="contact.html" class="btn-silk btn-rose">Commission Robe</a></div>
        <button class="mobile-toggle" aria-label="Toggle Navigation"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>
  <main>
    <!-- Section 1: Hero Showcase -->
    <section class="hero-silk">
      <div class="container">
        <div class="hero-grid">
          <div>
            <span class="section-tag">Haute Couture Loungewear</span>
            <h1 class="hero-title">The Sensual Majesty of <span>Liquid Silk Satin.</span></h1>
            <p class="hero-subtitle">
              Handcrafting bespoke 22-momme Grade 6A Mulberry silk robes, hand-rolled French seams, and Kyoto jacquard kimonos in Manhattan.
            </p>
            <div style="display: flex; gap: 16px; flex-wrap: wrap;">
              <a href="contact.html" class="btn-silk btn-rose">Schedule Silk Fitting</a>
              <a href="about.html" class="btn-silk btn-outline">Explore Silk Sericulture</a>
            </div>
            <div class="hero-stats">
              <div class="stat-item"><h4>22 Momme</h4><p>Heavyweight Satin Density</p></div>
              <div class="stat-item"><h4>Grade 6A</h4><p>Long-Filament Mulberry Silk</p></div>
              <div class="stat-item"><h4>100%</h4><p>Hand-Rolled French Seams</p></div>
            </div>
          </div>
          <div class="hero-img-box">
            <img src="assets/images/hero-silk-robe.jpg" alt="Model wearing flowing champagne pink 22-momme Mulberry silk satin dressing robe with dramatic drape">
          </div>
        </div>
      </div>
    </section>

    <!-- Section 2: Three Pillars of Silk Robe Tailoring -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Atelier Pillars</span>
          <h2>The Architecture of Pure Silk Loungewear</h2>
          <p>Every robe is crafted around long-filament protein fibers, hand-rolled invisible seams, and fluid bias drapery.</p>
        </div>
        <div class="grid-3">
          <div class="silk-card">
            <div class="card-img-wrap"><img src="assets/images/craft-mulberry-silk.jpg" alt="Macro view of pure 22-momme Mulberry silk satin shimmering under warm light" loading="lazy"><span class="card-tag-pill">Sericulture Excellence</span></div>
            <div class="card-body"><h3>22-Momme Mulberry Silk</h3><p>Grade 6A unbroken filament silk providing liquid drape, high tensile durability, and natural skin hydration.</p><a href="about.html" class="card-link">Explore Silk Science &rarr;</a></div>
          </div>
          <div class="silk-card">
            <div class="card-img-wrap"><img src="assets/images/craft-french-seams.jpg" alt="Couturier stitching hand rolled French seams with ultra-fine silk thread" loading="lazy"><span class="card-tag-pill">Couture Craft</span></div>
            <div class="card-body"><h3>Hand-Rolled French Seams</h3><p>Completely enclosed internal seam junctions eliminating raw fabric edges for second-skin bedroom comfort.</p><a href="about.html" class="card-link">Explore Seam Architecture &rarr;</a></div>
          </div>
          <div class="silk-card">
            <div class="card-img-wrap"><img src="assets/images/craft-silk-jacquard.jpg" alt="Intricate botanical cherry blossom jacquard silk pattern woven on heritage looms" loading="lazy"><span class="card-tag-pill">Jacquard Weaving</span></div>
            <div class="card-body"><h3>Kyoto Jacquard Silks</h3><p>Custom tone-on-tone jacquard brocades woven on heritage looms in Japan for structured kimono silhouettes.</p><a href="about.html" class="card-link">Explore Jacquard Weaves &rarr;</a></div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 3: Signature Robe Collection Portfolio -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Loungewear Collection</span>
          <h2>The Gloss Robe Peak Portfolio</h2>
          <p>Hand-tailored in limited seasonal runs for bridal suites, luxury spa retreats, and intimate boudoir living.</p>
        </div>
        <div class="grid-3">
          <div class="silk-card"><div class="card-body"><h3>The Grand Imperial Silk Robe</h3><p>Floor-length 22-momme silk satin robe with piped shawl collar, wide French cuffs, and hand-stitched sash.</p><a href="contact.html" class="card-link">Commission Bespoke Robe &rarr;</a></div></div>
          <div class="silk-card"><div class="card-body"><h3>The Edo Heritage Jacquard Kimono</h3><p>Traditional T-silhouette robe in heavy silk jacquard with wide structured sleeves and hand-tied obi belt.</p><a href="contact.html" class="card-link">Commission Bespoke Robe &rarr;</a></div></div>
          <div class="silk-card"><div class="card-body"><h3>The Georgette Boudoir Wrap</h3><p>Featherweight 16-momme silk georgette robe with Chantilly lace insets and delicate satin ribbon closures.</p><a href="contact.html" class="card-link">Commission Bespoke Robe &rarr;</a></div></div>
        </div>
      </div>
    </section>

    <!-- Section 4: Interactive Silk Robe Configurator -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Interactive Silk Studio</span>
          <h2>Configure Your Bespoke Silk Robe</h2>
          <p>Select your desired momme weight, silk weave architecture, and customized monogramming.</p>
        </div>
        <div class="interactive-silk-tool">
          <div class="silk-selector-grid">
            <div class="silk-option-card active" data-robe="momme22"><h4>22-Momme Imperial Satin</h4><p>Heavyweight liquid drape, piped shawl collar, full-length silhouette.</p></div>
            <div class="silk-option-card" data-robe="jacquardkimono"><h4>Edo Jacquard Kimono</h4><p>Kyoto botanical brocade, structured wide sleeves, hand-tied obi.</p></div>
            <div class="silk-option-card" data-robe="boudoirwrap"><h4>Georgette Boudoir Wrap</h4><p>16-momme semi-sheer silk, French lace insets, featherweight drape.</p></div>
          </div>
          <div class="silk-result-box">
            <div>
              <div id="silk-custom-badge" style="color: var(--color-rose-gold); font-weight: 700; font-size: 0.88rem; margin-bottom: 6px;">Textile Density: 22-Momme Heavyweight Satin &bull; Grade 6A Mulberry Silk</div>
              <h3 id="silk-custom-title" style="margin-bottom: 8px;">The Grand Imperial 22-Momme Silk Satin Robe</h3>
              <p id="silk-custom-desc" style="color: var(--color-text-muted); font-size: 0.95rem;">Crafted from 100% Grade 6A long-filament Mulberry silk satin with hand-rolled French seams, piped shawl collar, and liquid drape sash.</p>
            </div>
            <a href="contact.html" class="btn-silk btn-rose" style="white-space: nowrap;">Commission This Custom Robe</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 5: The Couturier's Silk Manifesto -->
    <section class="section">
      <div class="container">
        <div class="grid-2">
          <div>
            <span class="section-tag">Couture Silk Manifesto</span>
            <h2 style="font-size: 2.3rem; margin-bottom: 20px;">The Master Couturier: Sericin Protein & Liquid Optical Luster</h2>
            <p style="color: var(--color-text-muted); margin-bottom: 16px;">
              In a marketplace flooded with synthetic polyester "satin" that generates static cling and suffocates the skin, Gloss Robe Peak crafts authentic, living luxury: pure Mulberry filament silk that breathes synchronously with your body.
            </p>
            <p style="color: var(--color-text-muted); margin-bottom: 24px;">
              Our triangular prism silk filaments refract light at multiple angles, casting a soft, pearlescent glow while natural amino acids soothe sensitive skin:
            </p>
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 16px; margin-bottom: 28px;">
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-rose-gold); font-size: 1.2rem; margin-bottom: 4px;">✨ Triangular Prism Fibers</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Natural fibroin protein filaments refracting light into a pearlescent optical luster.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-rose-gold); font-size: 1.2rem; margin-bottom: 4px;">🪡 Enclosed French Seams</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Zero raw edges touching the skin, preventing chafing during bedtime loungewear.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-rose-gold); font-size: 1.2rem; margin-bottom: 4px;">🌿 Botanical Pigments</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Dyed with madder root, logwood, and rose petals for luminous, chemical-free hues.</p>
              </div>
              <div style="background: var(--color-card-bg); padding: 16px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border);">
                <div style="color: var(--color-rose-gold); font-size: 1.2rem; margin-bottom: 4px;">💧 Natural Skin Hydration</div>
                <p style="font-size: 0.85rem; color: var(--color-text-muted); margin-bottom: 0;">Contains eighteen amino acids that preserve skin moisture balance overnight.</p>
              </div>
            </div>
            <div style="display: flex; gap: 16px; align-items: center; flex-wrap: wrap;">
              <a href="about.html" class="btn-silk btn-rose">Read Atelier Manifesto &rarr;</a>
              <a href="contact.html" class="btn-silk btn-outline">Schedule Fitting Salon</a>
            </div>
          </div>
          <div class="hero-img-box" style="position: relative;">
            <img src="assets/images/about-silk-couture.jpg" alt="Master couturier hand draping champagne Mulberry silk satin fabric on tailor mannequin" loading="lazy">
            <div style="position: absolute; bottom: 20px; left: 20px; right: 20px; background: rgba(18, 10, 14, 0.92); backdrop-filter: blur(10px); padding: 14px 20px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); display: flex; align-items: center; justify-content: space-between;">
              <span style="font-size: 0.82rem; color: var(--color-rose-gold); font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em;">Bespoke Silk Drapery</span>
              <span style="font-size: 0.78rem; color: var(--color-text-muted);">Manhattan Atelier &bull; 181 Mercer St</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 6: Verified Silk Performance Benchmarks -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Empirical Textile Metrics</span>
          <h2>Silk Textile Quality Benchmarks</h2>
          <p>Laboratory validated for momme density, tensile tear strength, and fiber purity.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-rose-gold); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">22 Momme</div>
            <h4 style="margin-bottom: 12px;">Fabric Weight (94.7 g/m²)</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Optimal luxury robe density providing fluid drape, zero sheer see-through, and longevity.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-rose-gold); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">18 Essential</div>
            <h4 style="margin-bottom: 12px;">Amino Acid Protein Complex</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Natural sericin and fibroin proteins soothing sensitive skin and regulating body heat.</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 36px; border-radius: var(--radius-md); border: 1px solid var(--color-border); text-align: center;">
            <div style="font-size: 2.8rem; color: var(--color-rose-gold); font-family: var(--font-serif); font-weight: 700; margin-bottom: 8px;">100% Grade 6A</div>
            <h4 style="margin-bottom: 12px;">Unbroken Long Filaments</h4>
            <p style="color: var(--color-text-muted); font-size: 0.92rem;">Sourced from Bombyx mori silkworms fed exclusively on organic white mulberry leaves.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 7: Manhattan Silk Boudoir Lookbook -->
    <section class="section">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Manhattan Fitting Salon</span>
          <h2>The Mercer Street Silk Boudoir</h2>
          <p>Experience private silk draping sessions, momme weight evaluations, and custom monogramming in SoHo.</p>
        </div>
        <div style="border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--color-border); position: relative;">
          <img src="assets/images/lookbook-mercer-boudoir.jpg" alt="Luxury silk loungewear boudoir salon with velvet seating, champagne robes, and fitting mirrors" style="width: 100%; height: 500px; object-fit: cover;">
          <div style="position: absolute; bottom: 32px; left: 32px; background: rgba(18, 10, 14, 0.92); backdrop-filter: blur(12px); padding: 24px 32px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); max-width: 500px;">
            <h3 style="font-size: 1.35rem; margin-bottom: 8px; color: var(--color-rose-gold);">The Mercer Silk Boudoir</h3>
            <p style="color: var(--color-text-muted); font-size: 0.9rem; margin-bottom: 16px;">Private bridal suite consultations, silk color matching, and bespoke sleeve length fittings.</p>
            <a href="blog.html" class="card-link">Read Silk Treatises &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 8: Patron & Bride Testimonials -->
    <section class="section" style="background: var(--color-subtle-bg);">
      <div class="container">
        <div class="section-header">
          <span class="section-tag">Patron Reflections</span>
          <h2>Testimonials from Our Silk Patrons</h2>
          <p>Couture brides, spa directors, and discerning loungewear collectors on Gloss Robe Peak.</p>
        </div>
        <div class="grid-3">
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-rose-gold); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FEE2E2; font-style: italic; margin-bottom: 20px;">"The 22-momme silk satin feels like liquid water against the skin. The hand-rolled French seams are completely imperceptible when resting."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Vivienne St. Claire</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Fashion Director, Paris</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-rose-gold); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FEE2E2; font-style: italic; margin-bottom: 20px;">"The Edo jacquard kimono robe was the crowning jewel of my wedding morning. The botanical cherry blossom brocade is a true work of art."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Seraphina Laurent</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Couture Bride & Art Curator, Manhattan</p>
          </div>
          <div style="background: var(--color-card-bg); padding: 32px; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
            <div style="color: var(--color-rose-gold); margin-bottom: 16px;">★★★★★</div>
            <p style="color: #FEE2E2; font-style: italic; margin-bottom: 20px;">"The thermoregulating qualities of pure Mulberry silk are astonishing—soothing and cool in summer yet warmly comforting in winter."</p>
            <strong style="color: var(--color-text-main); font-size: 0.95rem;">Dr. Emily Zhao</strong>
            <p style="font-size: 0.8rem; color: var(--color-text-muted);">Dermatologist & Wellness Specialist, San Francisco</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Section 9: Private Fitting & Bespoke Commission Inquiries -->
    <section class="section">
      <div class="container container-narrow">
        <div style="background: radial-gradient(circle at center, rgba(244, 63, 94, 0.15), transparent 70%), var(--color-card-bg); border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: 60px 48px; text-align: center;">
          <span class="section-tag">Bespoke Silk Commission</span>
          <h2 style="font-size: 2.3rem; margin-bottom: 16px;">Schedule Your Private Silk Consultation</h2>
          <p style="color: var(--color-text-muted); max-width: 560px; margin: 0 auto 32px;">
            Visit our Manhattan atelier at 181 Mercer Street, New York, NY 10012 to select custom silk color swatches, or request our confidential silk lookbook.
          </p>
          <div style="display: flex; gap: 12px; justify-content: center; max-width: 500px; margin: 0 auto 24px; flex-wrap: wrap;">
            <input type="email" placeholder="Enter your patron or bridal email" style="flex: 1; min-width: 240px; padding: 14px 18px; border-radius: var(--radius-sm); border: 1px solid var(--color-border); background: var(--color-subtle-bg); color: var(--color-text-main); font-size: 0.95rem;">
            <a href="contact.html" class="btn-silk btn-rose">Request Silk Lookbook</a>
          </div>
          <p style="font-size: 0.8rem; color: #9CA3AF;">Direct atelier appointments welcomed at +1-888-777-5845.</p>
        </div>
      </div>
    </section>
  </main>

  <!-- Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <div class="brand-container" style="margin-bottom: 1.2rem;">
            <div class="brand-logo-icon">👘</div>
            <div class="brand-text-wrap">
              <span class="brand-logo-text"><?php echo $site_name; ?></span>
              <span class="brand-tagline"><?php echo $site_tagline; ?></span>
            </div>
          </div>
          <p style="font-size: 0.92rem; color: #D1D5DB; line-height: 1.8;">
            Handcrafting bespoke 22-momme Grade 6A Mulberry silk robes, hand-rolled French seams, and luxury silk loungewear in Manhattan.
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul class="footer-links">
            <li><a href="index.php">Main</a></li>
            <li><a href="about.html">Atelier</a></li>
            <li><a href="blog.html">Journal</a></li>
            <li><a href="contact.html">Silk Boudoir</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal & Policies</h4>
          <ul class="footer-links">
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="terms.html">Terms & Conditions</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Atelier Disclaimer</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Manhattan Atelier</h4>
          <div class="footer-contact-item"><span class="icon">📍</span><span><?php echo $official_address; ?></span></div>
          <div class="footer-contact-item"><span class="icon">📞</span><span><?php echo $official_phone; ?></span></div>
        </div>
      </div>
      <div class="footer-bottom">
        <div>&copy; <?php echo date('Y'); ?> <?php echo $site_name; ?>. All Rights Reserved.</div>
        <div>22-Momme Mulberry Silk &bull; Hand-Rolled French Seams &bull; Bespoke Loungewear</div>
      </div>
    </div>
  </footer>
  <script src="assets/js/main.js"></script>
</body>
</html>
<?php
require_once __DIR__ . '/includes/config.php';
header('Content-Type: application/xml; charset=UTF-8');
header('X-Robots-Tag: noindex');
$base = rtrim(SITE_URL, '/');
$today = date('Y-m-d');
$pages = [
  ['loc' => $base . '/',                                              'lastmod' => $today, 'changefreq' => 'weekly',  'priority' => '1.0'],
  ['loc' => $base . '/segunda-via.php',                              'lastmod' => $today, 'changefreq' => 'weekly',  'priority' => '0.9'],
  ['loc' => $base . '/faq.php',                                      'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.8'],
  ['loc' => $base . '/blog/',                                        'lastmod' => $today, 'changefreq' => 'weekly',  'priority' => '0.8'],
  ['loc' => $base . '/blog/como-emitir-segunda-via-boleto-unimed.php','lastmod'=> $today, 'changefreq' => 'monthly', 'priority' => '0.8'],
  ['loc' => $base . '/blog/boleto-unimed-vencido.php',               'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.7'],
  ['loc' => $base . '/blog/perdi-boleto-unimed.php',                 'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.7'],
  ['loc' => $base . '/blog/segunda-via-boleto-unimed-pix.php',       'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.7'],
  ['loc' => $base . '/blog/portal-cliente-unimed.php',               'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.7'],
  ['loc' => $base . '/blog/carencia-unimed.php',                     'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.6'],
  ['loc' => $base . '/blog/cobertura-unimed.php',                    'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.6'],
  ['loc' => $base . '/blog/como-funciona-plano-unimed.php',          'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.6'],
  ['loc' => $base . '/sobre.php',                                    'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.5'],
  ['loc' => $base . '/contato.php',                                  'lastmod' => $today, 'changefreq' => 'monthly', 'priority' => '0.5'],
];
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"' . "\n";
echo '        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"' . "\n";
echo '        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . "\n";
foreach ($pages as $p) {
  echo "  <url>\n";
  echo "    <loc>" . htmlspecialchars($p['loc']) . "</loc>\n";
  echo "    <lastmod>" . $p['lastmod'] . "</lastmod>\n";
  echo "    <changefreq>" . $p['changefreq'] . "</changefreq>\n";
  echo "    <priority>" . $p['priority'] . "</priority>\n";
  echo "  </url>\n";
}
echo '</urlset>';

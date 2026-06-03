<?php
require_once __DIR__ . '/includes/config.php';
http_response_code(404);
$page_title       = 'Página não encontrada — 404';
$page_description = 'A página que você buscou não foi encontrada. Acesse o início ou entre em contato pelo WhatsApp.';
require_once __DIR__ . '/includes/header.php';
?>

<section class="section" style="text-align:center;min-height:60vh;display:flex;align-items:center;">
  <div class="container">
    <div style="font-size:5rem;margin-bottom:16px;">&#128269;</div>
    <h1 style="font-size:2.5rem;font-weight:800;color:var(--primary);margin-bottom:12px;">Página não encontrada</h1>
    <p style="font-size:1.1rem;color:var(--text-muted);margin-bottom:32px;max-width:480px;margin-left:auto;margin-right:auto;">Ops! A página que você buscou não existe ou foi movida. Mas podemos te ajudar de outras formas.</p>
    <div style="display:flex;flex-wrap:wrap;gap:14px;justify-content:center;">
      <a href="/" class="btn btn-primary">Voltar ao Início</a>
      <a href="/" class="btn btn-portal-blue">&#128187; Acessar Portal do Cliente</a>
    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

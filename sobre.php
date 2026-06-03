<?php
require_once __DIR__ . '/includes/config.php';
$page_title       = 'Sobre Nós — ' . SITE_NAME;
$page_description = 'Conheça o ' . SITE_NAME . ', portal independente de orientação para beneficiários Unimed. Saiba quem somos, nossa missão e como trabalhamos.';
$breadcrumbs = [
  ['name' => 'Início', 'url' => '/'],
  ['name' => 'Sobre', 'url' => '/sobre.php'],
];
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1>Sobre Nós</h1>
    <p>Conheça nossa história, missão e o compromisso com os beneficiários Unimed.</p>
  </div>
</div>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <a href="/">Início</a><span>›</span><span aria-current="page">Sobre Nós</span>
  </div>
</nav>

<section class="section">
  <div class="container">
    <div style="max-width:800px;margin:0 auto;">

      <h2 style="font-size:1.5rem;font-weight:800;margin-bottom:16px;">Quem somos</h2>
      <p>O <strong><?php echo SITE_NAME; ?></strong> é um portal independente de orientação criado para ajudar beneficiários de planos de saúde Unimed a resolverem questões relacionadas ao seu plano de forma rápida, simples e acessível.</p>
      <p>Sabemos que navegar pelos canais oficiais pode ser complicado. Por isso, criamos um espaço onde você encontra informações claras, orientação especializada e acesso direto ao portal do cliente.</p>

      <div style="background:var(--blue-lt);border-radius:var(--radius-lg);padding:28px;margin:32px 0;">
        <p style="font-size:1.05rem;font-style:italic;color:var(--blue-dk);line-height:1.8;margin:0;">
          "Nossa missão é simplificar o acesso dos beneficiários às informações e serviços do seu plano de saúde, com orientação clara e respeitosa."
        </p>
      </div>

      <h2 style="font-size:1.35rem;font-weight:800;margin:36px 0 14px;">Nossa missão</h2>
      <p>Acreditamos que todo beneficiário merece ter acesso fácil às informações sobre o seu plano de saúde. Não deveria ser difícil emitir um boleto, entender a cobertura ou saber o que fazer em caso de emergência.</p>
      <p>Nosso portal existe para preencher essa lacuna: fornecemos orientação clara e conteúdo informativo de qualidade para que você tome as melhores decisões para a sua saúde e o seu bolso.</p>

      <h2 style="font-size:1.35rem;font-weight:800;margin:36px 0 14px;">Como trabalhamos</h2>
      <div class="cards-grid">
        <div class="card">
          <div class="card-icon">&#128187;</div>
          <h3>Portal do Cliente</h3>
          <p>Direcionamos você ao portal oficial onde pode emitir a segunda via, consultar extrato e gerenciar seu plano com segurança.</p>
        </div>
        <div class="card">
          <div class="card-icon">&#128218;</div>
          <h3>Conteúdo Informativo</h3>
          <p>Produzimos artigos, guias e respostas para as perguntas mais comuns sobre planos de saúde Unimed, carência, cobertura e pagamento.</p>
        </div>
        <div class="card">
          <div class="card-icon">&#128274;</div>
          <h3>Privacidade e Segurança</h3>
          <p>Tratamos seus dados com total respeito e sigilo, em conformidade com a Lei Geral de Proteção de Dados (LGPD — Lei 13.709/2018).</p>
        </div>
        <div class="card">
          <div class="card-icon">&#127919;</div>
          <h3>Foco no Beneficiário</h3>
          <p>Todo o conteúdo é produzido pensando em você: linguagem simples, informações práticas e sem enrolação.</p>
        </div>
      </div>

      <h2 style="font-size:1.35rem;font-weight:800;margin:36px 0 14px;">Aviso importante</h2>
      <div class="tip-box"><?php echo DISCLAIMER; ?></div>

      <div style="margin-top:40px;text-align:center;padding:32px;background:var(--gray-50);border-radius:var(--radius-lg);border:1px solid var(--gray-200);">
        <p style="color:var(--gray-600);margin-bottom:18px;font-size:.95rem;">Tem alguma dúvida? Acesse o portal ou fale conosco.</p>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
          <a href="/" class="btn btn-portal-blue">&#128187; Acessar Portal do Cliente</a>
          <a href="/contato.php" class="btn btn-outline-dark">&#9993;&#65039; Formulário de Contato</a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

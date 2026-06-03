<?php
require_once __DIR__ . '/includes/config.php';
$page_title       = 'Termos de Uso — ' . SITE_NAME;
$page_description = 'Termos de uso do ' . SITE_NAME . '. Leia as condições de uso do portal antes de utilizar nossos serviços.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1>Termos de Uso</h1>
    <p>Última atualização: <?php echo date('d/m/Y'); ?>. Leia com atenção antes de usar nosso portal.</p>
  </div>
</div>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <a href="/">Início</a>
    <span>›</span>
    <span aria-current="page">Termos de Uso</span>
  </div>
</nav>

<section class="section">
  <div class="container">
    <div style="max-width:780px;margin:0 auto;" class="article-body">

      <h2>1. Aceitação dos Termos</h2>
      <p>Ao acessar e usar o portal <strong><?php echo SITE_NAME; ?></strong> (<a href="<?php echo SITE_URL; ?>"><?php echo SITE_URL; ?></a>), você concorda com estes Termos de Uso em sua totalidade. Se não concordar com alguma condição, não use este portal.</p>

      <h2>2. Sobre o Portal</h2>
      <p>O <?php echo SITE_NAME; ?> é um portal independente de orientação e atendimento a beneficiários de planos de saúde Unimed. <strong>Não somos a operadora Unimed e não temos vínculo institucional com ela.</strong></p>
      <p>Nosso portal fornece:</p>
      <ul>
        <li>Informações e orientações sobre como emitir segunda via de boleto Unimed;</li>
        <li>Conteúdo informativo sobre planos de saúde;</li>
        <li>Atendimento de orientação por WhatsApp;</li>
        <li>Respostas a dúvidas frequentes sobre o tema.</li>
      </ul>

      <h2>3. Uso Permitido</h2>
      <p>Você pode usar este portal para:</p>
      <ul>
        <li>Obter informações sobre segunda via de boleto Unimed;</li>
        <li>Tirar dúvidas sobre plano de saúde;</li>
        <li>Entrar em contato com nossa equipe de atendimento;</li>
        <li>Acessar o conteúdo informativo do blog.</li>
      </ul>

      <h2>4. Uso Proibido</h2>
      <p>É proibido usar este portal para:</p>
      <ul>
        <li>Praticar atos ilegais ou fraudulentos;</li>
        <li>Transmitir vírus, malware ou qualquer conteúdo prejudicial;</li>
        <li>Coletar dados de outros usuários sem autorização;</li>
        <li>Reproduzir, copiar ou redistribuir o conteúdo do portal sem autorização expressa;</li>
        <li>Fazer uso que viole a legislação brasileira vigente.</li>
      </ul>

      <h2>5. Limitação de Responsabilidade</h2>
      <p>As informações disponibilizadas neste portal têm caráter exclusivamente <strong>informativo e orientativo</strong>. Não nos responsabilizamos por:</p>
      <ul>
        <li>Decisões tomadas com base nas informações do portal;</li>
        <li>Eventuais imprecisões nas informações publicadas (que podem estar desatualizadas);</li>
        <li>Problemas técnicos com o portal que impeçam seu acesso temporariamente;</li>
        <li>Conteúdo de sites de terceiros linkados pelo portal;</li>
        <li>Perdas ou danos resultantes do uso ou impossibilidade de uso do portal.</li>
      </ul>
      <p>Para informações oficiais sobre seu plano de saúde, consulte sempre sua cooperativa Unimed regional ou o site oficial da operadora.</p>

      <h2>6. Propriedade Intelectual</h2>
      <p>Todo o conteúdo deste portal — textos, layout, design, código-fonte — é de propriedade exclusiva do <?php echo SITE_NAME; ?> e está protegido pelas leis de propriedade intelectual brasileiras. A reprodução total ou parcial sem autorização prévia é proibida.</p>
      <p>A marca "Unimed" é propriedade exclusiva da Unimed do Brasil. Seu uso neste portal é feito apenas para fins descritivos e informativos, sem qualquer intenção de associação, patrocínio ou endosso.</p>

      <h2>7. Links para Terceiros</h2>
      <p>Este portal pode conter links para sites externos. Não nos responsabilizamos pelo conteúdo, políticas de privacidade ou práticas de sites de terceiros.</p>

      <h2>8. Alterações nos Termos</h2>
      <p>Podemos modificar estes Termos de Uso a qualquer momento. As alterações entram em vigor na data de publicação. O uso contínuo do portal implica aceitação dos termos revisados.</p>

      <h2>9. Lei Aplicável e Foro</h2>
      <p>Estes Termos de Uso são regidos pela legislação brasileira. Para resolução de conflitos, fica eleito o foro da comarca de domicílio do responsável pelo portal, com renúncia a qualquer outro, por mais privilegiado que seja.</p>

      <h2>10. Contato</h2>
      <p>Dúvidas sobre estes Termos de Uso? Entre em contato:</p>
      <ul>
        <li><strong>E-mail:</strong> <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></li>
        <li><strong>Formulário:</strong> <a href="/contato.php">Página de Contato</a></li>
      </ul>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

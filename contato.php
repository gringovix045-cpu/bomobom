<?php
require_once __DIR__ . '/includes/config.php';
$page_title       = 'Contato — ' . SITE_NAME;
$page_description = 'Entre em contato com o ' . SITE_NAME . '. Use nosso formulário para tirar dúvidas sobre segunda via de boleto Unimed ou acesse o portal do cliente.';
$breadcrumbs = [
  ['name' => 'Início', 'url' => '/'],
  ['name' => 'Contato', 'url' => '/contato.php'],
];

$success = false;
$error   = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = trim(strip_tags($_POST['name']    ?? ''));
    $email   = trim(strip_tags($_POST['email']   ?? ''));
    $subject = trim(strip_tags($_POST['subject'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));
    if ($name && $email && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
        $to      = CONTACT_EMAIL;
        $headers = "From: $name <$email>\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";
        $body    = "Nome: $name\nE-mail: $email\nAssunto: $subject\n\nMensagem:\n$message";
        if (mail($to, '[Contato] ' . htmlspecialchars($subject ?: 'Mensagem via formulário'), $body, $headers)) {
            $success = true;
        } else { $error = true; }
    } else { $error = true; }
}
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1>Entre em Contato</h1>
    <p>Tem alguma dúvida sobre o seu boleto Unimed? Use o formulário abaixo ou acesse nosso portal.</p>
  </div>
</div>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <a href="/">Início</a><span>›</span><span aria-current="page">Contato</span>
  </div>
</nav>

<section class="section">
  <div class="container">
    <div class="contact-grid">

      <!-- INFO -->
      <div>
        <div class="contact-info-card">
          <h2 style="font-size:1.15rem;font-weight:800;margin-bottom:6px;">Canais de atendimento</h2>
          <p style="font-size:.85rem;color:var(--gray-600);margin-bottom:0;">Escolha a melhor forma de falar conosco.</p>

          <div class="contact-channel" style="margin-top:8px;">
            <div class="contact-channel-icon blue">&#128187;</div>
            <div>
              <h3>Portal do Cliente</h3>
              <p>Acesse o portal e resolva sua segunda via de boleto online, de forma rápida e segura.</p>
              <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode(WHATSAPP_MESSAGE); ?>" class="btn btn-whatsapp" target="_blank" rel="noopener noreferrer" style="font-size:.84rem;padding:9px 16px;">Solicitar Segunda Via</a>
            </div>
          </div>

          <div class="contact-channel">
            <div class="contact-channel-icon" style="background:#f1f3f5;">&#9993;&#65039;</div>
            <div>
              <h3>E-mail</h3>
              <p><?php echo CONTACT_EMAIL; ?><br><span style="font-size:.78rem;color:var(--gray-500);">Respondemos em até 24 horas úteis.</span></p>
            </div>
          </div>

          <div class="contact-channel">
            <div class="contact-channel-icon" style="background:#f1f3f5;">&#128336;</div>
            <div>
              <h3>Horário de atendimento</h3>
              <p style="margin:0;"><?php echo BUSINESS_HOURS_TEXT; ?></p>
            </div>
          </div>
        </div>

        <div class="contact-notice" style="margin-top:16px;">
          &#128276; <strong>Aviso:</strong> Para emissão de segunda via de boleto, acesse diretamente o portal do cliente — é o caminho mais rápido e seguro.
        </div>
      </div>

      <!-- FORM -->
      <div class="contact-form-box">
        <h2>Formulário de contato</h2>

        <?php if ($success): ?>
          <div class="alert-success">
            <strong>&#9989; Mensagem enviada com sucesso!</strong> Entraremos em contato em breve.
          </div>
        <?php elseif ($error): ?>
          <div class="alert-error">
            <strong>&#10060; Erro ao enviar.</strong> Verifique os campos e tente novamente.
          </div>
        <?php endif; ?>

        <?php if (!$success): ?>
        <form method="POST" action="contato.php" novalidate>
          <div class="form-group">
            <label for="name">Nome completo *</label>
            <input type="text" id="name" name="name" placeholder="Seu nome completo"
                   value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail *</label>
            <input type="email" id="email" name="email" placeholder="seu@email.com"
                   value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
          </div>
          <div class="form-group">
            <label for="subject">Assunto</label>
            <input type="text" id="subject" name="subject" placeholder="Sobre o que você quer falar?"
                   value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
          </div>
          <div class="form-group">
            <label for="message">Mensagem *</label>
            <textarea id="message" name="message" placeholder="Descreva sua dúvida ou solicitação..." required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
          </div>
          <div class="form-group" style="display:flex;align-items:flex-start;gap:10px;">
            <input type="checkbox" id="lgpd" name="lgpd" required style="width:18px;height:18px;margin-top:3px;flex-shrink:0;">
            <label for="lgpd" style="font-weight:400;font-size:.84rem;color:var(--gray-600);">
              Li e concordo com a <a href="/politica-de-privacidade.php">Política de Privacidade</a> e autorizo o tratamento dos meus dados para fins de atendimento.
            </label>
          </div>
          <button type="submit" class="btn btn-portal-blue" style="width:100%;justify-content:center;">
            Enviar Mensagem
          </button>
        </form>
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
require_once __DIR__ . '/includes/config.php';
$page_title       = 'Política de Privacidade — ' . SITE_NAME;
$page_description = 'Política de privacidade do ' . SITE_NAME . '. Saiba como coletamos, usamos e protegemos seus dados pessoais conforme a LGPD.';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1>Política de Privacidade</h1>
    <p>Última atualização: <?php echo date('d/m/Y'); ?>. Saiba como tratamos seus dados com transparência e segurança.</p>
  </div>
</div>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <a href="/">Início</a>
    <span>›</span>
    <span aria-current="page">Política de Privacidade</span>
  </div>
</nav>

<section class="section">
  <div class="container">
    <div style="max-width:780px;margin:0 auto;" class="article-body">

      <div style="background:var(--primary-light);border-radius:var(--radius);padding:20px 24px;margin-bottom:36px;">
        <p style="margin:0;font-size:.9rem;color:var(--primary-dark);">Esta Política de Privacidade foi elaborada em conformidade com a <strong>Lei Geral de Proteção de Dados Pessoais (LGPD — Lei nº 13.709/2018)</strong> e o <strong>Marco Civil da Internet (Lei nº 12.965/2014)</strong>.</p>
      </div>

      <h2>1. Quem somos</h2>
      <p>O <strong><?php echo SITE_NAME; ?></strong> (doravante "Portal", "nós" ou "nosso") é um portal independente de orientação e atendimento a beneficiários de planos de saúde Unimed, acessível em <a href="<?php echo SITE_URL; ?>"><?php echo SITE_URL; ?></a>.</p>
      <p>Este portal <strong>não possui vínculo institucional com a Unimed</strong> e não é operado por nenhuma cooperativa médica Unimed.</p>

      <h2>2. Dados que coletamos</h2>
      <p>Coletamos apenas os dados estritamente necessários para a prestação do nosso serviço de orientação:</p>
      <ul>
        <li><strong>Dados fornecidos pelo usuário:</strong> nome completo, CPF, e-mail, número de telefone/WhatsApp, mensagens enviadas pelo formulário de contato ou pelo WhatsApp.</li>
        <li><strong>Dados de navegação:</strong> endereço IP, tipo de navegador, páginas visitadas, tempo de permanência, referência de acesso. Esses dados são coletados de forma agregada e anônima por ferramentas de análise.</li>
        <li><strong>Cookies:</strong> utilizamos cookies técnicos (necessários para o funcionamento do site) e, se você aceitar, cookies analíticos para melhorar a experiência do usuário.</li>
      </ul>

      <h2>3. Como usamos seus dados</h2>
      <p>Usamos seus dados exclusivamente para:</p>
      <ul>
        <li>Prestar o serviço de orientação e atendimento solicitado por você;</li>
        <li>Responder dúvidas enviadas pelo formulário de contato;</li>
        <li>Melhorar a qualidade e a usabilidade do portal;</li>
        <li>Cumprir obrigações legais e regulatórias.</li>
      </ul>
      <p><strong>Não vendemos, alugamos nem compartilhamos seus dados pessoais com terceiros</strong> para fins de marketing ou publicidade.</p>

      <h2>4. Base legal para o tratamento</h2>
      <p>O tratamento dos seus dados pessoais é fundamentado nas seguintes bases legais previstas no Art. 7º da LGPD:</p>
      <ul>
        <li><strong>Consentimento</strong> (Art. 7º, I): quando você preenche nosso formulário de contato e aceita os termos;</li>
        <li><strong>Execução de contrato</strong> (Art. 7º, V): quando você solicita nosso serviço de orientação;</li>
        <li><strong>Interesse legítimo</strong> (Art. 7º, IX): para análise de dados de navegação de forma agregada e melhoria do serviço.</li>
      </ul>

      <h2>5. Compartilhamento de dados</h2>
      <p>Seus dados podem ser compartilhados apenas nas seguintes situações:</p>
      <ul>
        <li>Com prestadores de serviços que auxiliam nossa operação (hospedagem, e-mail), mediante acordos de confidencialidade;</li>
        <li>Quando exigido por ordem judicial, autoridade competente ou obrigação legal;</li>
        <li>Para proteger direitos, propriedade ou segurança do portal, dos usuários ou do público.</li>
      </ul>

      <h2>6. Retenção de dados</h2>
      <p>Mantemos seus dados pelo tempo necessário para a finalidade que motivou a coleta ou pelo prazo exigido por lei. Dados de formulário de contato são mantidos por até <strong>2 (dois) anos</strong>. Após esse prazo, são excluídos ou anonimizados.</p>

      <h2>7. Seus direitos como titular</h2>
      <p>Conforme a LGPD, você tem direito a:</p>
      <ul>
        <li>Confirmar a existência de tratamento dos seus dados;</li>
        <li>Acessar seus dados;</li>
        <li>Corrigir dados incompletos, inexatos ou desatualizados;</li>
        <li>Solicitar a anonimização, bloqueio ou eliminação de dados desnecessários;</li>
        <li>Revogar o consentimento a qualquer momento;</li>
        <li>Solicitar a portabilidade dos dados a outro fornecedor;</li>
        <li>Opor-se ao tratamento em caso de descumprimento da LGPD.</li>
      </ul>
      <p>Para exercer seus direitos, entre em contato pelo e-mail: <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a>.</p>

      <h2>8. Segurança dos dados</h2>
      <p>Adotamos medidas técnicas e organizacionais adequadas para proteger seus dados contra acesso não autorizado, perda, alteração ou divulgação indevida, incluindo o uso de conexão segura (HTTPS/SSL).</p>

      <h2>9. Cookies</h2>
      <p>Utilizamos cookies para melhorar sua experiência de navegação. Você pode configurar seu navegador para recusar cookies, mas isso pode impactar o funcionamento de algumas funcionalidades do site.</p>
      <ul>
        <li><strong>Cookies necessários:</strong> essenciais para o funcionamento do site;</li>
        <li><strong>Cookies analíticos:</strong> coletam dados de navegação de forma anônima para melhorar o site (ex.: Google Analytics, se ativado).</li>
      </ul>

      <h2>10. Links externos</h2>
      <p>Este portal pode conter links para sites de terceiros, incluindo portais oficiais da Unimed. Não nos responsabilizamos pelas práticas de privacidade desses sites. Recomendamos a leitura das respectivas políticas de privacidade.</p>

      <h2>11. Alterações nesta política</h2>
      <p>Podemos atualizar esta Política de Privacidade periodicamente. Qualquer alteração significativa será comunicada no site. O uso contínuo do portal após as alterações implica a aceitação da política atualizada.</p>

      <h2>12. Contato e Encarregado de Dados (DPO)</h2>
      <p>Para dúvidas, solicitações ou exercício dos seus direitos relacionados à privacidade de dados, entre em contato:</p>
      <ul>
        <li><strong>E-mail:</strong> <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></li>
        <li><strong>Formulário:</strong> <a href="/contato.php">Página de Contato</a></li>
      </ul>

    </div>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

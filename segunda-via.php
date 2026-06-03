<?php
require_once __DIR__ . '/includes/config.php';
$page_title       = 'Segunda Via de Boleto Unimed — Como Solicitar';
$page_description = 'Saiba como solicitar a segunda via do seu boleto Unimed de forma rápida e segura. Acesse o portal do cliente ou siga o passo a passo completo.';
$breadcrumbs = [
  ['name' => 'Início', 'url' => '/'],
  ['name' => 'Segunda Via de Boleto', 'url' => '/segunda-via.php'],
];
$schema = '<script type="application/ld+json">{"@context":"https://schema.org","@type":"HowTo","name":"Como emitir a segunda via do boleto Unimed","description":"Passo a passo para solicitar a segunda via do boleto Unimed pelo portal do cliente.","step":[{"@type":"HowToStep","position":1,"name":"Acesse o portal","text":"Acesse o portal do cliente Unimed com CPF e senha."},{"@type":"HowToStep","position":2,"name":"Área financeira","text":"Navegue até Financeiro > Boletos e selecione o mês."},{"@type":"HowToStep","position":3,"name":"Emita o boleto","text":"Clique em Emitir e baixe o PDF com o código de barras atualizado."}]}</script>';
require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1>Segunda Via de Boleto Unimed</h1>
    <p>Tudo o que você precisa saber para emitir a segunda via do seu boleto Unimed de forma rápida e segura.</p>
  </div>
</div>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <a href="/">Início</a><span aria-hidden="true">›</span>
    <span aria-current="page">Segunda Via de Boleto</span>
  </div>
</nav>

<!-- INTRO -->
<section class="section">
  <div class="container">
    <div style="max-width:800px;margin:0 auto;">
      <h2 style="font-size:1.5rem;font-weight:800;margin-bottom:18px;">O que é a segunda via do boleto Unimed?</h2>
      <p>A <strong>segunda via do boleto Unimed</strong> é uma nova cópia do documento de cobrança da sua mensalidade. Ela é necessária quando:</p>
      <ul style="margin:14px 0 20px;display:flex;flex-direction:column;gap:6px;">
        <li style="list-style:disc;margin-left:20px;">Você perdeu o boleto original ou foi extraviado</li>
        <li style="list-style:disc;margin-left:20px;">O prazo de vencimento já passou e o valor precisa ser atualizado</li>
        <li style="list-style:disc;margin-left:20px;">Não recebeu o boleto no endereço cadastrado</li>
        <li style="list-style:disc;margin-left:20px;">O código de barras do boleto original não está legível</li>
        <li style="list-style:disc;margin-left:20px;">Precisa de uma cópia para fins de comprovação ou contabilidade</li>
      </ul>
      <a href="/" class="btn btn-portal-blue">&#128187; Acessar Portal do Cliente</a>
    </div>
  </div>
</section>

<!-- PASSO A PASSO -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-eyebrow">Passo a Passo</span>
      <h2 class="section-title">Como emitir pelo portal oficial</h2>
      <p class="section-subtitle">Simples e rápido. Siga os passos abaixo no portal do cliente Unimed.</p>
    </div>
    <div class="cards-grid" style="max-width:860px;margin:0 auto;">
      <div class="card">
        <div class="card-icon">&#128187;</div>
        <h3>Passo 1 — Acesse o Portal</h3>
        <p>Entre no portal do cliente Unimed com seu CPF e senha cadastrada. Em caso de dúvida, use a opção "Esqueci minha senha".</p>
      </div>
      <div class="card">
        <div class="card-icon">&#128100;</div>
        <h3>Passo 2 — Área Financeira</h3>
        <p>No menu, acesse <strong>Financeiro &gt; Boletos</strong> ou <strong>Pagamentos</strong>. O sistema exibirá os boletos disponíveis.</p>
      </div>
      <div class="card">
        <div class="card-icon">&#128197;</div>
        <h3>Passo 3 — Selecione o Mês</h3>
        <p>Escolha o mês de referência do boleto que deseja emitir, incluindo parcelas em aberto ou vencidas.</p>
      </div>
      <div class="card">
        <div class="card-icon">&#128203;</div>
        <h3>Passo 4 — Baixe o Boleto</h3>
        <p>Clique em <strong>Emitir</strong> ou <strong>Baixar PDF</strong>. O boleto é gerado com código de barras atualizado, pronto para pagamento.</p>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px;">
      <a href="/" class="btn btn-portal-blue btn-lg">&#128187; Acessar Portal do Cliente</a>
    </div>
  </div>
</section>

<!-- DOCUMENTOS -->
<section class="section">
  <div class="container">
    <div style="max-width:800px;margin:0 auto;">
      <h2 style="font-size:1.4rem;font-weight:800;margin-bottom:20px;">Documentos necessários</h2>
      <div class="table-wrap">
        <table>
          <thead><tr><th>Documento</th><th>Obrigatório?</th><th>Para que serve</th></tr></thead>
          <tbody>
            <tr><td><strong>CPF</strong></td><td>&#9989; Sim</td><td>Login no portal do cliente</td></tr>
            <tr><td><strong>Senha do portal</strong></td><td>&#9989; Sim</td><td>Autenticação no sistema</td></tr>
            <tr><td><strong>Número do contrato</strong></td><td>&#128308; Às vezes</td><td>Para contratos empresariais ou coletivos</td></tr>
            <tr><td><strong>Número da carteirinha</strong></td><td>&#128308; Às vezes</td><td>Necessário para criar o cadastro inicial</td></tr>
          </tbody>
        </table>
      </div>
      <div class="info-box" style="margin-top:20px;">
        &#128161; <strong>Dica:</strong> Utilize sempre o CPF do <em>titular</em> do plano, mesmo que o pedido seja para um dependente.
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <span class="section-eyebrow">Dúvidas</span>
      <h2 class="section-title">Perguntas sobre a segunda via</h2>
    </div>
    <div class="faq-list">
      <?php
      $faqs = [
        ['Posso solicitar a segunda via se não sou o titular?',
         'Sim. Dependentes podem solicitar a segunda via, mas precisarão informar o CPF do titular do plano. Em alguns casos pode ser necessária autorização do titular.'],
        ['A segunda via tem valor diferente do original?',
         'O valor pode ser diferente se o boleto original estiver vencido, pois serão acrescidos juros e multa por atraso. Se não estiver vencido, o valor será o mesmo.'],
        ['Posso pagar a segunda via em qualquer banco?',
         'Sim. Boletos bancários podem ser pagos em qualquer banco, lotérica, caixa eletrônico ou aplicativo de internet banking, independentemente do banco emissor.'],
        ['E se eu receber o erro "boleto não encontrado" ao tentar pagar?',
         'Isso pode acontecer com boletos muito próximos ou depois do vencimento. Solicite uma segunda via atualizada pelo portal do cliente — ela já virá com código de barras válido para pagamento.'],
        ['Quanto tempo tenho para pagar após receber a segunda via?',
         'Boletos da Unimed vencem no dia especificado no contrato. Se receber a segunda via próximo ao vencimento, pague o quanto antes ou solicite um boleto com nova data de vencimento pelo portal.'],
      ];
      foreach ($faqs as $i => $faq): $id = 'faq-sv-' . $i; ?>
      <div class="faq-item-acc">
        <button class="faq-question" aria-expanded="false" aria-controls="<?php echo $id; ?>">
          <?php echo htmlspecialchars($faq[0]); ?>
          <span class="faq-icon" aria-hidden="true">+</span>
        </button>
        <div id="<?php echo $id; ?>" class="faq-answer" role="region" style="display:none;">
          <p><?php echo htmlspecialchars($faq[1]); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="cta-band">
  <div class="container">
    <h2>Precisa de ajuda com seu boleto?</h2>
    <p>Acesse o portal do cliente e resolva online de forma rápida e segura.</p>
    <a href="/" class="btn btn-portal btn-lg">&#128187; Acessar Portal do Cliente</a>
  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

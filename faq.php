<?php
require_once __DIR__ . '/includes/config.php';
$page_title       = 'Segunda Via de Boleto Unimed: 50 Dúvidas Respondidas (FAQ Completo)';
$page_description = 'Todas as dúvidas sobre segunda via de boleto Unimed respondidas: como emitir, boleto vencido, onde pagar, como acessar o portal, PIX e muito mais.';
$page_keywords    = 'segunda via boleto unimed faq, duvidas boleto unimed, boleto unimed vencido o que fazer, como emitir segunda via unimed, portal unimed segunda via';
$breadcrumbs = [
  ['name' => 'Início',           'url' => '/'],
  ['name' => 'Dúvidas Frequentes', 'url' => '/faq.php'],
];

// ===========================
// BASE DE FAQ (50+ perguntas)
// ===========================
$grupos = [

  'emissao' => [
    'titulo' => '&#128196; Como Emitir a Segunda Via do Boleto Unimed',
    'perguntas' => [
      ['Como emitir a segunda via do boleto Unimed?',
       'A forma mais rápida é pelo nosso WhatsApp: clique no botão verde, informe seu nome completo e CPF cadastrado no plano, e nossa equipe envia o boleto atualizado em minutos. Você também pode acessar o portal do beneficiário da sua cooperativa regional Unimed com CPF e senha, ou ligar para a central de atendimento da sua regional.'],
      ['Quais dados preciso informar para solicitar a segunda via?',
       'Nome completo do titular do plano e CPF são obrigatórios. Para contratos empresariais, pode ser necessário informar o número do contrato ou o CNPJ da empresa. Quanto mais informações você tiver em mãos, mais rápido o atendimento.'],
      ['Posso solicitar a segunda via pelo WhatsApp?',
       'Sim! Nosso portal oferece atendimento 100% pelo WhatsApp. Basta clicar no botão de contato, informar seus dados e receber o boleto diretamente no celular. É a forma mais rápida e prática.'],
      ['Quanto tempo leva para receber a segunda via pelo WhatsApp?',
       'Em média, menos de 5 minutos após o envio dos dados. O tempo pode variar um pouco fora do horário de atendimento (' . BUSINESS_HOURS_TEXT . ').'],
      ['A emissão da segunda via tem algum custo?',
       'Não. A segunda via do boleto Unimed é gratuita. Nosso portal de atendimento também não cobra nada para te ajudar a emitir o documento.'],
      ['Posso emitir a segunda via pelo celular?',
       'Sim! Pelo nosso WhatsApp, você faz tudo pelo celular mesmo, sem precisar acessar nenhum portal ou site. Basta mandar mensagem e receber o boleto.'],
      ['Como acessar o portal do cliente Unimed?',
       'Cada cooperativa regional da Unimed tem seu próprio portal. Para acessar, você precisa do CPF e da senha cadastrada. Se não lembrar a senha, pode redefinir pelo próprio portal ou entrar em contato com a central da sua regional. Caso tenha dificuldade, nosso WhatsApp também pode te orientar.'],
      ['E se eu não lembrar a senha do portal Unimed?',
       'Acesse o portal da sua regional e clique em "Esqueci minha senha". O sistema enviará um link para seu e-mail ou SMS cadastrado. Se o e-mail ou celular cadastrado estiver desatualizado, entre em contato com a central da cooperativa ou pelo nosso WhatsApp para atualizá-los.'],
      ['É possível emitir a segunda via sem acessar o portal?',
       'Sim! Justamente para isso existe nosso atendimento via WhatsApp. Você não precisa de senha, login ou acesso ao portal — basta informar seus dados e recebemos o boleto para você.'],
      ['Como recebo o boleto após solicitar a segunda via?',
       'Pelo nosso WhatsApp, o boleto é enviado diretamente no chat, como um arquivo PDF ou com a linha digitável para você copiar e pagar. Também pode ser enviado por e-mail se preferir.'],
    ],
  ],

  'vencido' => [
    'titulo' => '&#9201; Boleto Unimed Vencido: O Que Fazer',
    'perguntas' => [
      ['Posso pagar o boleto Unimed vencido?',
       'Boletos vencidos há mais de 3 dias geralmente são recusados pelos bancos. Por isso, você precisa solicitar uma segunda via atualizada. O novo boleto já vem com os encargos recalculados (multa + juros). Solicite pelo nosso WhatsApp agora.'],
      ['Quanto de juros é cobrado no boleto Unimed vencido?',
       'Em geral, são cobrados multa de 2% sobre o valor total e juros de mora de 1% ao mês (proporcional ao número de dias em atraso). Os percentuais exatos dependem do seu contrato e da cooperativa regional. A segunda via atualizada já vem com o valor correto.'],
      ['O que acontece se eu não pagar o boleto Unimed?',
       'Após o vencimento, o plano pode ser suspenso temporariamente. Se a inadimplência persistir por 60 dias consecutivos ou 90 dias não consecutivos em 12 meses, a Unimed pode cancelar o plano, conforme as regras da ANS. Regularize o quanto antes para não perder a cobertura.'],
      ['Meu plano foi suspenso por falta de pagamento. Como reativar?',
       'Você precisa quitar os boletos em atraso. Após confirmação do pagamento, a Unimed reativa o plano — geralmente em 1 a 3 dias úteis. Entre em contato pelo nosso WhatsApp para emitir os boletos atualizados e receber orientações sobre como regularizar.'],
      ['Posso negociar uma dívida de plano Unimed em atraso?',
       'Em muitos casos sim, dependendo da cooperativa regional. Algumas permitem parcelamento ou desconto de juros para quitação à vista. Contate nossa equipe pelo WhatsApp para orientação sobre o processo.'],
      ['Qual o prazo máximo para pagar o boleto sem ser cancelado?',
       'Conforme a Resolução Normativa 412 da ANS, o plano individual pode ser suspenso após 60 dias de atraso. Para planos coletivos, as regras variam conforme o contrato. Em qualquer caso, regularize o quanto antes.'],
      ['O banco pode recusar um boleto Unimed vencido?',
       'Sim. Boletos vencidos há mais de 3 dias costumam ser recusados nos caixas eletrônicos e aplicativos bancários. Você precisa de uma segunda via atualizada. Solicite agora pelo nosso WhatsApp.'],
      ['Posso pagar o boleto Unimed vencido em qualquer banco?',
       'Somente se ainda estiver dentro do prazo de tolerância (geralmente até 3 dias após o vencimento). Após isso, você precisará de uma nova via atualizada, que pode ser paga em qualquer banco, lotérica ou aplicativo.'],
      ['Como saber se meu boleto Unimed está vencido?',
       'A data de vencimento está impressa no próprio boleto, logo abaixo do código de barras. Se perdeu o boleto, solicite a segunda via pelo nosso WhatsApp — nossa equipe informa os valores e datas atualizados.'],
      ['O boleto Unimed vencido perde a linha digitável?',
       'Sim, a linha digitável original perde a validade após o vencimento. Você precisa de uma nova via atualizada para poder pagar. Solicite pelo nosso WhatsApp agora mesmo.'],
    ],
  ],

  'pagamento' => [
    'titulo' => '&#128176; Como e Onde Pagar o Boleto Unimed',
    'perguntas' => [
      ['Onde posso pagar o boleto Unimed?',
       'O boleto Unimed pode ser pago em qualquer banco (presencialmente ou pelo app/internet banking), casas lotéricas, caixas eletrônicos, aplicativos de pagamento (PicPay, Mercado Pago etc.) e em algumas farmácias e supermercados que aceitam boletos bancários.'],
      ['Posso pagar o boleto Unimed pelo PIX?',
       'Depende. Nem todos os boletos Unimed possuem chave PIX. Verifique se o boleto tem um QR Code para pagamento via PIX. Se não tiver, você precisará usar a linha digitável normalmente. Pergunte ao nosso WhatsApp se o boleto da sua regional aceita PIX.'],
      ['Posso pagar o boleto Unimed pelo aplicativo do banco?',
       'Sim! A maioria dos bancos aceita pagamento de boletos pelo aplicativo. Basta usar a câmera para ler o código de barras ou digitar a linha digitável manualmente. Certifique-se de que o boleto esteja dentro do prazo de validade.'],
      ['Posso pagar o boleto Unimed na lotérica?',
       'Sim! As casas lotéricas da Caixa Econômica Federal aceitam pagamento de boletos bancários, incluindo o boleto Unimed. Basta levar o boleto impresso ou o código de barras no celular.'],
      ['Existe desconto para pagar antes do vencimento?',
       'Alguns contratos Unimed oferecem desconto para pagamento antecipado. Verifique as condições no seu contrato ou pergunte à sua cooperativa regional. Em caso de dúvida, contate nosso WhatsApp.'],
      ['Posso pagar por débito automático?',
       'Sim. Muitas cooperativas regionais da Unimed oferecem a opção de débito automático em conta corrente. Você precisa solicitar o cadastro diretamente à cooperativa ou pelo banco. Consulte nosso WhatsApp para orientação.'],
      ['Como obter a linha digitável do boleto Unimed?',
       'A linha digitável está impressa no boleto, logo acima do código de barras. Se você perdeu o boleto, solicite a segunda via pelo nosso WhatsApp — a linha digitável já virá no novo documento.'],
      ['Posso pagar o boleto Unimed por transferência?',
       'Não diretamente. O pagamento deve ser feito via código de barras ou linha digitável do boleto. TED e PIX para o CNPJ da Unimed geralmente não são aceitos como forma de pagamento do plano.'],
    ],
  ],

  'portal' => [
    'titulo' => '&#128187; Portal do Cliente e Acesso Online Unimed',
    'perguntas' => [
      ['Como acessar o portal do beneficiário Unimed?',
       'Cada cooperativa regional tem seu próprio portal. Acesse o site da Unimed da sua cidade e procure a área de "Portal do Beneficiário" ou "Minha Unimed". Você precisará do CPF e senha cadastrada. Se tiver dificuldades, nosso WhatsApp pode te orientar.'],
      ['O que consigo fazer no portal do cliente Unimed?',
       'No portal do beneficiário você pode: emitir a segunda via do boleto, ver o histórico de pagamentos, acessar a carteirinha digital, verificar sua rede credenciada, checar autorizações e muito mais. O acesso varia conforme a cooperativa regional.'],
      ['Como cadastrar senha no portal Unimed?',
       'Acesse o site da sua cooperativa regional e clique em "Primeiro acesso" ou "Cadastrar senha". Normalmente você precisará do CPF e de um código enviado por e-mail ou SMS. Se tiver dificuldades, contate a central ou nosso WhatsApp.'],
      ['Por que não consigo acessar o portal Unimed?',
       'Os motivos mais comuns são: senha incorreta, CPF não cadastrado, sistema em manutenção, ou o navegador estar desatualizado. Tente redefinir a senha ou use nosso atendimento via WhatsApp, que é mais simples e direto.'],
      ['Como emitir a carteirinha digital Unimed?',
       'Acesse o portal do beneficiário da sua regional e procure a seção de carteirinha virtual. Também é possível pelo aplicativo Unimed, se disponível na sua regional. Caso não consiga, entre em contato com nossa equipe pelo WhatsApp para orientação.'],
      ['O aplicativo da Unimed emite segunda via de boleto?',
       'Alguns aplicativos de cooperativas regionais Unimed permitem emitir a segunda via. Verifique se a sua regional tem app disponível. Caso não funcione ou não tenha o recurso, solicite pelo nosso WhatsApp com facilidade.'],
      ['Qual é o site oficial da Unimed para segunda via?',
       'A Unimed é uma federação de cooperativas regionais — não há um site único. Cada cooperativa tem seu portal próprio (ex: Unimed BH, Unimed SP, Unimed Rio etc.). Caso não saiba qual acessar, nosso WhatsApp pode te indicar o portal correto da sua região.'],
    ],
  ],

  'suspensao' => [
    'titulo' => '&#128683; Suspensão, Cancelamento e Como Regularizar',
    'perguntas' => [
      ['Meu plano Unimed foi cancelado. Posso reativar?',
       'Depende do motivo e do tempo de cancelamento. Se foi por inadimplência e você quitar os valores em aberto, pode ser possível reativar ou contratar um novo plano. Cada regional tem suas políticas. Consulte nosso WhatsApp para orientação.'],
      ['Depois de pagar o boleto atrasado, o plano é reativado automaticamente?',
       'Geralmente sim, em 1 a 3 dias úteis após a confirmação do pagamento. Em alguns casos, pode ser necessário entrar em contato com a cooperativa para confirmar a reativação. Nosso WhatsApp pode te ajudar nesse processo.'],
      ['O que é a carência da Unimed e como ela funciona?',
       'Carência é o prazo que o plano aguarda antes de cobrir determinados procedimentos. Por lei (ANS), os prazos são: 24h para urgência/emergência, 30 dias para consultas, 90 dias para parto a termo, 180 dias para exames e cirurgias eletivas e 300 dias para internações planejadas. Esses prazos podem ser reduzidos por portabilidade.'],
      ['Fui demitido e perdi o plano Unimed empresarial. O que fazer?',
       'Em caso de demissão sem justa causa, você tem direito a manter o plano por até 1/3 do tempo em que era funcionário (mínimo 6 meses, máximo 24 meses), pagando a parte que o empregador pagava. Consulte um advogado ou a ANS para mais detalhes.'],
      ['Como cancelar o plano Unimed?',
       'O cancelamento deve ser solicitado diretamente à cooperativa regional por escrito. Guarde o protocolo. Planos individuais podem ser cancelados a qualquer momento pelo beneficiário. Certifique-se de não ter boletos em aberto.'],
      ['Posso usar o plano Unimed durante a suspensão?',
       'Não. Durante a suspensão por inadimplência, o plano fica inativo e você não tem direito a consultas, exames ou internações eletivas. Regularize os pagamentos o quanto antes para retomar a cobertura.'],
    ],
  ],

  'outros' => [
    'titulo' => '&#128220; Outras Dúvidas Sobre o Boleto Unimed',
    'perguntas' => [
      ['O boleto Unimed é o mesmo para todos os planos?',
       'Não. Cada titular tem um boleto individual gerado pela cooperativa regional. O valor varia conforme o plano contratado, a faixa etária dos beneficiários e os reajustes anuais.'],
      ['Por que o valor do meu boleto Unimed aumentou?',
       'O aumento pode ser por: reajuste anual autorizado pela ANS, mudança de faixa etária de algum beneficiário, inclusão de dependente ou alteração de plano. Verifique a discriminação de valores no seu boleto ou entre em contato pelo WhatsApp.'],
      ['Como contestar um valor errado no boleto Unimed?',
       'Entre em contato com a central da sua cooperativa regional por escrito. Guarde protocolos e documentos. Se não tiver retorno, você pode acionar a ANS (0800 701 9656). Nosso WhatsApp pode te orientar sobre o processo.'],
      ['Preciso da segunda via para usar o plano?',
       'Não. A segunda via do boleto serve apenas para pagamento. Para usar o plano, você precisa da carteirinha (física ou digital) e o plano deve estar em dia.'],
      ['Como saber se meu pagamento foi confirmado?',
       'A confirmação pode levar até 3 dias úteis para aparecer no sistema da Unimed. Verifique no portal do beneficiário ou entre em contato com a central. Se precisar de urgência, envie o comprovante de pagamento pelo nosso WhatsApp para agilizarmos a liberação.'],
      ['Existe isenção do boleto Unimed para aposentados?',
       'Alguns contratos e cooperativas oferecem condições especiais para aposentados e idosos. Consulte o seu contrato ou entre em contato com a cooperativa regional.'],
      ['O boleto Unimed tem código de barras e linha digitável?',
       'Sim! Todo boleto Unimed tem o código de barras (para leitura na câmera) e a linha digitável (para digitar manualmente). Se precisar só da linha digitável, solicite pelo nosso WhatsApp.'],
      ['Posso solicitar segunda via para um dependente?',
       'O boleto geralmente é emitido no nome do titular. Dependentes não têm boletos separados — todos estão incluídos na mesma cobrança. O titular pode solicitar a segunda via normalmente pelo nosso WhatsApp.'],
      ['Qual o CNPJ da Unimed para pagamento?',
       'Não existe um CNPJ único da Unimed — cada cooperativa regional tem seu próprio CNPJ. O CNPJ correto aparece no próprio boleto. Não faça transferência para CNPJ sem verificar o boleto original.'],
      ['Posso pagar o boleto Unimed de outra pessoa?',
       'Sim! Qualquer pessoa pode pagar um boleto bancário, independente de quem é o titular. O boleto não tem restrição de pagador.'],
    ],
  ],

];

// Build FAQPage Schema
$schema_items = [];
foreach ($grupos as $grupo) {
  foreach ($grupo['perguntas'] as $faq) {
    $schema_items[] = '{"@type":"Question","name":"' . addslashes($faq[0]) . '","acceptedAnswer":{"@type":"Answer","text":"' . addslashes(strip_tags($faq[1])) . '"}}';
  }
}
$schema = '<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [' . implode(',', $schema_items) . ']
}
</script>';

require_once __DIR__ . '/includes/header.php';
?>

<div class="page-hero">
  <div class="container">
    <h1>Segunda Via de Boleto Unimed: Dúvidas Frequentes</h1>
    <p>Mais de 50 respostas sobre como emitir, pagar, atualizar e resolver problemas com o boleto Unimed. Tudo que você precisa saber — e se não encontrar, fale conosco pelo WhatsApp!</p>
  </div>
</div>

<nav class="breadcrumb-nav" aria-label="Breadcrumb">
  <div class="container">
    <a href="/">Início</a>
    <span>›</span>
    <span aria-current="page">Dúvidas Frequentes (FAQ)</span>
  </div>
</nav>

<!-- FAQ ÍNDICE RÁPIDO -->
<section class="section" style="padding-bottom:0;">
  <div class="container">
    <p style="color:var(--text-muted);font-size:.9rem;margin-bottom:16px;">&#128073; Ir direto para:</p>
    <div class="faq-quick-nav">
      <a href="#emissao">&#128196; Como emitir</a>
      <a href="#vencido">&#9201; Boleto vencido</a>
      <a href="#pagamento">&#128176; Onde pagar</a>
      <a href="#portal">&#128187; Portal online</a>
      <a href="#suspensao">&#128683; Suspensão</a>
      <a href="#outros">&#128220; Outras dúvidas</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">

  <?php foreach ($grupos as $key => $grupo): ?>
    <div id="<?php echo $key; ?>" style="scroll-margin-top:90px;">
      <h2 class="faq-group-title"><?php echo $grupo['titulo']; ?></h2>
      <div class="faq-list" style="margin-bottom:48px;">
        <?php foreach ($grupo['perguntas'] as $i => $faq):
          $id = 'faq-' . $key . '-' . $i; ?>
        <div class="faq-item">
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
  <?php endforeach; ?>

    <!-- CTA -->
    <div class="faq-cta-box"><h2>Não encontrou sua dúvida aqui?</h2><p>Acesse o portal do cliente e resolva sua situação online, ou entre em contato conosco.</p><div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;"><a href="/" class="btn btn-portal-blue btn-lg">&#128187; Acessar Portal do Cliente</a><a href="/contato.php" class="btn btn-outline">&#9993;&#65039; Formulário de Contato</a></div></div>

  </div>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

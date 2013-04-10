<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'ERR_DELETE_RECORD' => 'Um número de registro deve ser especificado para excluir uma conta',
  'ERR_EMAIL_INCORRECT' => 'Providencie um email válido para criar e enviar uma senha.',
  'ERR_EMAIL_NOT_SENT_ADMIN' => 'Sistema não pode processar seu pedido. Favor checar:',
  'ERR_EMAIL_NO_OPTS' => 'Não foi possível encontrar configurações ideais para e-mail de entrada.',
  'ERR_ENTER_CONFIRMATION_PASSWORD' => 'Favor inserir sua confirmação de senha.',
  'ERR_ENTER_NEW_PASSWORD' => 'Favor entrar com sua nova senha',
  'ERR_ENTER_OLD_PASSWORD' => 'Favor entrar com sua senha atual',
  'ERR_IE_FAILURE1' => 'Clique aqui para voltar',
  'ERR_IE_FAILURE2' => 'Tivemos um problema para conectar com sua conta de e-mail. Favor verificar suas configuraçãoes e tentar novamente',
  'ERR_IE_MISSING_REQUIRED' => 'Estão faltando informações necessárias para configurações de e-mail de entrada . Por favor, verifique suas configurações e tente novamente. Se você não estiver configurando o e-mail de entrada, por favor limpar todos os campos nesta seção.',
  'ERR_INVALID_PASSWORD' => 'Você deve especificar um usuário e senha válidos',
  'ERR_LAST_ADMIN_1' => 'Nome do usuário',
  'ERR_LAST_ADMIN_2' => '" é o último a ter direitos de Administrador. Pelo menos um Usuário deve ter esses direitos.',
  'ERR_NO_LOGIN_MOBILE' => 'Seu primeiro login a esta aplicação deve ser completado com um navegador padrão ( no-Mobile ) ou no modo normal. Por favor, retorne com um navegador completo ou clique no link normal abaixo. Pedimos desculpas por qualquer inconveniente.',
  'ERR_PASSWORD_CHANGE_FAILED_1' => 'Alteração de senha do usuário falhou',
  'ERR_PASSWORD_CHANGE_FAILED_2' => 'Falha. Nova senha deve ser configurada',
  'ERR_PASSWORD_CHANGE_FAILED_3' => 'Nova senha está inválida',
  'ERR_PASSWORD_INCORRECT_OLD_1' => 'Senha atual incorreta para usuário',
  'ERR_PASSWORD_INCORRECT_OLD_2' => 'Redigite informação de senha',
  'ERR_PASSWORD_LINK_EXPIRED' => 'Seu link expirou, favor gerar novo.',
  'ERR_PASSWORD_MISMATCH' => 'As senhas não conferem',
  'ERR_PASSWORD_USERNAME_MISSMATCH' => 'Você deve especificar um número de usuário e endereço de e-mail',
  'ERR_REASS_DIFF_USERS' => 'Favor selecionar um destinatario diferente de um emissor.',
  'ERR_REASS_SELECT_MODULE' => 'Por favro volte e selecione ao menos um módulo.',
  'ERR_RECIPIENT_EMAIL' => 'Endereço de Email do Recipiente',
  'ERR_REENTER_PASSWORDS' => 'Nova senha e senha de confirmação não conferem',
  'ERR_REPORT_LOOP' => 'O sistema detectou um loop de relatórios. Um usuário não pode passar informação , nem qualquer de seus gerentes que reportam a eles.',
  'ERR_RULES_NOT_MET' => 'A senha digitada não tem os requisitos necessários. Favor tentar novamente.',
  'ERR_SERVER_SMTP_EMPTY' => 'Não foi possível enciar um Email para o usuário. Favor checar a configuração de saída de Emails em Configuração de Emails',
  'ERR_SERVER_STATUS' => 'Status do servidor',
  'ERR_SMTP_URL_SMTP_PORT' => 'SMTP Server URL and Port',
  'ERR_SMTP_USERNAME_SMTP_PASSWORD' => 'SMTP usuário e SMTP Senha',
  'ERR_USER_INFO_NOT_FOUND' => 'Informação do usuário não encontrada',
  'ERR_USER_IS_LOCKED_OUT' => 'Este usuário está bloqueadoe não pode ser logado no sista com a senha atual.',
  'ERR_USER_NAME_EXISTS_1' => 'Nome do usuário',
  'ERR_USER_NAME_EXISTS_2' => 'J;a existe. Nomes duplicados não são permitidos. Altere o nome do usuário para ser único.',
  'LBL_ACCOUNT_NAME' => 'Nome da Conta',
  'LBL_ADDRESS' => 'Endereço',
  'LBL_ADDRESS_CITY' => 'Cidade:',
  'LBL_ADDRESS_COUNTRY' => 'País',
  'LBL_ADDRESS_INFORMATION' => 'Dados de endereço',
  'LBL_ADDRESS_POSTALCODE' => 'Código Postal',
  'LBL_ADDRESS_STATE' => 'Estado',
  'LBL_ADDRESS_STREET' => 'Rua',
  'LBL_ADDRESS_STREET_2' => 'Rua 2',
  'LBL_ADDRESS_STREET_3' => 'Rua 3',
  'LBL_ADMIN' => 'Administrador do sistema',
  'LBL_ADMIN_DESC' => 'Usuário pode acessar a página de administração,independentemente da equipe de segurança .',
  'LBL_ADMIN_USER' => 'Usuário administrador do sistema',
  'LBL_ADVANCED' => 'Avançado',
  'LBL_AFFECTED' => 'Afetado',
  'LBL_ANY_ADDRESS' => 'Qualquer Endereço',
  'LBL_ANY_EMAIL' => 'E-mail Qualquer',
  'LBL_ANY_PHONE' => 'Outro Telefone',
  'LBL_APPLY_OPTIMUMS' => 'Apply Optimums',
  'LBL_ASSIGN_PRIVATE_TEAM' => 'Equipe Privada ao salvar',
  'LBL_ASSIGN_TEAM' => 'Atribuir a Equipe',
  'LBL_ASSIGN_TO_USER' => 'Atribuir ao Usuário',
  'LBL_AUTHENTICATE_ID' => 'ID Autenticação',
  'LBL_BASIC' => 'Configuração de entrada',
  'LBL_BUTTON_CREATE' => 'Criar',
  'LBL_BUTTON_EDIT' => 'Editar',
  'LBL_CALENDAR_OPTIONS' => 'Opções de Calendária',
  'LBL_CANCEL' => 'Cancelar',
  'LBL_CANNOT_SEND_PASSWORD' => 'Não pode enviar a senha',
  'LBL_CERT' => 'Validar Certificado',
  'LBL_CERT_DESC' => 'Forçar validação do Certificado de Segurança do mail server - não use se for auto-assinado.',
  'LBL_CHANGE_PASSWORD' => 'Alterar senha',
  'LBL_CHANGE_PASSWORD_TITLE' => 'senha:',
  'LBL_CHANGE_SYSTEM_PASSWORD' => 'Favor providenciar noa senha',
  'LBL_CHECKMARK' => 'Checkmark',
  'LBL_CHOOSE_A_KEY' => 'Escolha uma chave para impedir a publicação não autorizada de seu calendário',
  'LBL_CHOOSE_EMAIL_PROVIDER' => 'Escolha o seu fornecedor de e-mail',
  'LBL_CHOOSE_WHICH' => 'Selecione os módulos que são acessados ​​dentro da barra de navegação superior. Designar a ordem em que você gostaria que os módulos aparecessem.',
  'LBL_CITY' => 'Cidade',
  'LBL_CLEAR_BUTTON_TITLE' => 'Limpar',
  'LBL_CONFIRM_PASSWORD' => 'Confirmar Senha',
  'LBL_CONFIRM_REGULAR_USER' => 'Você mudou o tipo de usuário a partir de usuário administrador do sistema para o usuário regular. Depois de salvar essa alteração, o usuário não terá mais privilégios de administrador do sistema. \\ N \\ n Clique em OK para continuar. \\ NClique em Cancelar para retornar ao registro.',
  'LBL_COUNTRY' => 'País',
  'LBL_CREATED_BY_NAME' => 'Criado por',
  'LBL_CURRENCY' => 'Moeda',
  'LBL_CURRENCY_EXAMPLE' => 'Exemplo de exibição Moeda',
  'LBL_CURRENCY_SIG_DIGITS' => 'Dígitos Significativos da Moeda',
  'LBL_CURRENCY_SIG_DIGITS_DESC' => 'Número de casas decimais para mostrar para moeda',
  'LBL_CURRENCY_TEXT' => 'Selecione a moeda que será exibida por padrão quando você criar novos registros. Esta é também a moeda que será exibida nas colunas quantidade no ListView Oportunidades.',
  'LBL_DATE_ENTERED' => 'Data da Criação',
  'LBL_DATE_FORMAT' => 'Formato da Data:',
  'LBL_DATE_FORMAT_TEXT' => 'Definir o formato de exibição para estampa de datas',
  'LBL_DATE_MODIFIED' => 'Data da modificação',
  'LBL_DECIMAL_SEP' => 'Símbolo Decimal',
  'LBL_DECIMAL_SEP_TEXT' => 'Caractere utilizado para separar decimal',
  'LBL_DEFAULT_PRIMARY_TEAM' => 'Equipe Primária Padrão',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Usuários',
  'LBL_DEFAULT_TEAM' => 'Equipe Padrão',
  'LBL_DEFAULT_TEAM_TEXT' => 'Equipes disponíveis para visualização por padrão nos registros os quais você é membro',
  'LBL_DELETED' => 'Deletado',
  'LBL_DELETE_GROUP_CONFIRM' => 'Tem certeza que deseja excluir este grupo de usuários? Clique OK para excluir o registro deste usuário. <br />Depois de clicar OK, você terá a capacidade de reatribuir registros atribuídos ao Grupo de Usuários para outro usuário.',
  'LBL_DELETE_PORTAL_CONFIRM' => 'Tem certeza que deseja excluir este API de usuário? Clique ok para excluir o registro do usuário',
  'LBL_DELETE_USER' => 'Deletar usuário',
  'LBL_DELETE_USER_CONFIRM' => 'Quando um registro de usuário é deletado, o registro correspondente ao funcion;ario será também excluído. Após a exclusão de um usuário, qualquer definição de workflow e relatório referente a este usuário deverão ser atualizadas.<br /><br />Após Excluir um registro de Usuário o mesmo não poderá ser recuperado',
  'LBL_DEPARTMENT' => 'Departamento',
  'LBL_DESCRIPTION' => 'Descrição',
  'LBL_DISPLAY_TABS' => 'Exibir Módulos',
  'LBL_DOWNLOADS' => 'Downloads',
  'LBL_DST_INSTRUCTIONS' => '(+ DST) indica a observância do horário de verão',
  'LBL_EAPM_SUBPANEL_TITLE' => 'Contas Externas',
  'LBL_EDIT' => 'Editar',
  'LBL_EDITLAYOUT' => 'Editar Layout',
  'LBL_EDIT_TABS' => 'Editar Tabs',
  'LBL_EMAIL' => 'Endereço de Email',
  'LBL_EMAILS' => 'Emails',
  'LBL_EMAIL_CHARSET' => 'Conjunto de caracteres de saída',
  'LBL_EMAIL_EDITOR_OPTION' => 'Compor Formato',
  'LBL_EMAIL_GMAIL_DEFAULTS' => 'Preencher Padrões de Gmail',
  'LBL_EMAIL_INBOUND_TITLE' => 'CAixa de Entrada Configurações',
  'LBL_EMAIL_LINK_TYPE' => 'Cliente de Email',
  'LBL_EMAIL_LINK_TYPE_HELP' => 'Cliente SugarMail: Enviar Emails usando o cliente de Email no aplicativo do SugarCRM<br />Cliente de Correio Externo: Enviar e-mail usando um cliente de e-mail fora do aplicativo SugarCRM, como o Microsoft Outlook.',
  'LBL_EMAIL_NOT_SENT' => 'O sistema não é capaz de processar sua requisição. Por favor Contate o administrador do sistema.',
  'LBL_EMAIL_OTHER' => 'Email 2',
  'LBL_EMAIL_OUTBOUND_TITLE' => 'Definições de E-mail de Saída',
  'LBL_EMAIL_PROVIDER' => 'Provedor de Email',
  'LBL_EMAIL_SHOW_COUNTS' => 'Mostra contagem de Email?',
  'LBL_EMAIL_SIGNATURE_ERROR1' => 'Esta assinatura requer um nome',
  'LBL_EMAIL_SMTP_SSL' => 'Permitir SMTP sobre SSL',
  'LBL_EMAIL_TEMPLATE_MISSING' => 'Nenhum modelo de e-mail está selecionado para o e-mail contendo a senha que será enviada para o usuário. Por favor selecione um modelo de e-mail na página de Gerenciamento de senha.',
  'LBL_EMPLOYEE_INFORMATION' => 'Dados do Funcionário',
  'LBL_EMPLOYEE_STATUS' => 'Status do Funcionário',
  'LBL_ERROR' => 'Erro',
  'LBL_EXCHANGE_SMTPPASS' => 'Senha Exchange',
  'LBL_EXCHANGE_SMTPPORT' => 'Porta Servidor Exchange',
  'LBL_EXCHANGE_SMTPSERVER' => 'Servidor Exchange',
  'LBL_EXCHANGE_SMTPUSER' => 'Usuário Exchange',
  'LBL_EXPORT_CHARSET' => 'Importar/Exportar:  Ajuste de Caractere',
  'LBL_EXPORT_CHARSET_DESC' => 'Escolha o conjunto de caracteres usado na sua região. Esta propriedade será utilizada para a importação de dados. Exportações CSV e para a geração de vCard.',
  'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',
  'LBL_EXPORT_DELIMITER' => 'Delimitador de Exportação',
  'LBL_EXPORT_DELIMITER_DESC' => 'Especificar o caractere (s) utilizado para delimitar dados exportados.',
  'LBL_EXTERNAL_AUTH_ONLY' => 'Autenticar esse usuário somente através de conexão externa',
  'LBL_EXT_AUTHENTICATE' => 'Autenticação Externa',
  'LBL_FAX' => 'Fax',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_FDOW' => '1o Dia da Semana',
  'LBL_FDOW_TEXT' => '1o Dia exibido nas visualizações de Semana, Mês e Ano',
  'LBL_FIND_OPTIMUM_KEY' => 'f',
  'LBL_FIND_OPTIMUM_MSG' => 'A procurar as variáveis ideais da conexão.',
  'LBL_FIND_OPTIMUM_TITLE' => 'Procurar a Configuração Ideal',
  'LBL_FIRST_NAME' => 'Primeiro Nome',
  'LBL_FORCE' => 'Forçar Negativo',
  'LBL_FORCE_DESC' => 'Alguns servidores IMAP e POP3 exigem switches especiais. Tenta forçar o switch negativo para conetar (ou seja, /notls)',
  'LBL_FORECASTS' => 'Previsões',
  'LBL_FOUND_OPTIMUM_MSG' => 'Encontrei a configuração ideal. Clique o botão para a aplicar na sua caixa de e-mail.',
  'LBL_GENERATE_PASSWORD' => 'Redefinir Senha',
  'LBL_GENERATE_PASSWORD_BUTTON_KEY' => 'Criar Chave do botão de senha',
  'LBL_GENERATE_PASSWORD_BUTTON_LABEL' => 'Redefinir Senha',
  'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Redefinir Senha',
  'LBL_GMAIL_SMTPPASS' => 'Senha Gmail',
  'LBL_GMAIL_SMTPUSER' => 'Endereço de e-mail Gmail',
  'LBL_GROUP_DESC' => 'Use para atribuição de itens a um grupo (exemplo: para e-mail de entrada). Este tipo não pode fazer o login através da interface SugarCRM.',
  'LBL_GROUP_USER' => 'Usuário do Grupo',
  'LBL_GROUP_USER_STATUS' => 'Usuário do Grupo',
  'LBL_HELP' => 'Ajuda',
  'LBL_HIDEOPTIONS' => 'Esconder opções',
  'LBL_HIDE_TABS' => 'Ocultar Módulos',
  'LBL_HOME_PHONE' => 'Telefone Residencial',
  'LBL_ICAL_PUB_URL' => 'URL de integração Ical',
  'LBL_ICAL_PUB_URL_HELP' => 'Utilize esta URL para subscrever o calendário do SugarC dentro de iCal.',
  'LBL_INBOUND_TITLE' => 'Dados da Conta',
  'LBL_IS_ADMIN' => 'É Administrador',
  'LBL_IS_GROUP' => 'grupo',
  'LBL_LANGUAGE' => 'Idioma',
  'LBL_LAST_ADMIN_NOTICE' => 'Você se auto selecionou. Você não pode alterar o tipo de usuário ou status de si mesmo.',
  'LBL_LAST_NAME' => 'Sobrenome',
  'LBL_LAST_NAME_SLASH_NAME' => 'Sobrenome / Nome',
  'LBL_LAYOUT_OPTIONS' => 'Opções de Layout',
  'LBL_LDAP' => 'LDAP',
  'LBL_LDAP_AUTHENTICATION' => 'Autenticação LDAP',
  'LBL_LDAP_ERROR' => 'LDAP Erro: Favor contatar o administrador',
  'LBL_LDAP_EXTENSION_ERROR' => 'LDAP erro: Extensões não carregaram',
  'LBL_LIST_ACCEPT_STATUS' => 'Aceitar Status',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'Departamento',
  'LBL_LIST_DESCRIPTION' => 'Descrição',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_FORM_TITLE' => 'Usuários',
  'LBL_LIST_GROUP' => 'Grupo',
  'LBL_LIST_LAST_NAME' => 'Sobrenome',
  'LBL_LIST_MEMBERSHIP' => 'Associado',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_PASSWORD' => 'Senha',
  'LBL_LIST_PRIMARY_PHONE' => 'Telefone (principal)',
  'LBL_LIST_STATUS' => 'Status',
  'LBL_LIST_TITLE' => 'Título',
  'LBL_LIST_USER_NAME' => 'Nome do Usuário',
  'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Formato de Exibição do Nome',
  'LBL_LOCALE_DESC_FIRST' => '[Primeiro]',
  'LBL_LOCALE_DESC_LAST' => '[Último]',
  'LBL_LOCALE_DESC_SALUTATION' => '[Saudação]',
  'LBL_LOCALE_DESC_TITLE' => '[Título]',
  'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Exemplo',
  'LBL_LOCALE_NAME_FORMAT_DESC' => 'Confirgure como nomes irão aparecer',
  'LBL_LOCALE_NAME_FORMAT_DESC_2' => '"s"Saudação<br />"&#39;f" first name (primeiro nome)<br />"l"last name ( sobrenome)',
  'LBL_LOGGED_OUT_1' => 'Você foi deslogado. Para logar novamente clique',
  'LBL_LOGGED_OUT_2' => 'aqui',
  'LBL_LOGGED_OUT_3' => '.',
  'LBL_LOGIN' => 'Nome do Usuário',
  'LBL_LOGIN_ADMIN_CALL' => 'Favor contatar administrador do sistema',
  'LBL_LOGIN_ATTEMPTS_OVERRUN' => 'Muitas tentativas de login falharam',
  'LBL_LOGIN_BUTTON_KEY' => 'L',
  'LBL_LOGIN_BUTTON_LABEL' => 'Logar',
  'LBL_LOGIN_BUTTON_TITLE' => 'Logar',
  'LBL_LOGIN_FORGOT_PASSWORD' => 'Esqueceu sua senha',
  'LBL_LOGIN_LOGIN_TIME_ALLOWED' => 'Você pode tentar novamente em',
  'LBL_LOGIN_LOGIN_TIME_DAYS' => 'dias',
  'LBL_LOGIN_LOGIN_TIME_HOURS' => 'horas',
  'LBL_LOGIN_LOGIN_TIME_MINUTES' => 'Minutos',
  'LBL_LOGIN_LOGIN_TIME_SECONDS' => 'Segundos',
  'LBL_LOGIN_OPTIONS' => 'Opções',
  'LBL_LOGIN_SUBMIT' => 'Submeter',
  'LBL_LOGIN_WELCOME_TO' => 'Benvindo',
  'LBL_MAILBOX' => 'Pasta Monitorada',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_SSL_DESC' => 'Usar SSL na conexão. Se isto não funcionar, verifique se sua instalação PHP incluiu"--with-imap-ssl" na configuração.',
  'LBL_MAILBOX_TYPE' => 'Ações Possíveis',
  'LBL_MAILMERGE' => 'Mala direta',
  'LBL_MAILMERGE_TEXT' => 'Ativar mala direta (mala direta também deve ser ativado pelo administrador do sistema em configurar as definições)',
  'LBL_MAIL_FROMADDRESS' => 'Responder para endereço',
  'LBL_MAIL_FROMNAME' => 'Responder para o Nome',
  'LBL_MAIL_OPTIONS_TITLE' => 'Configuração de Email',
  'LBL_MAIL_SENDTYPE' => 'Agente de Transferência de Correio:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Utilize Autenticação SMTP?',
  'LBL_MAIL_SMTPPASS' => 'Senha SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Porta SMTP',
  'LBL_MAIL_SMTPSERVER' => 'Servidor SMTP:',
  'LBL_MAIL_SMTPTYPE' => 'Tipo de servidor SMTP:',
  'LBL_MAIL_SMTPUSER' => 'Usuário SMTP:',
  'LBL_MAIL_SMTP_SETTINGS' => 'Especificação servidor SMTP',
  'LBL_MARK_READ' => 'Deixar Mensagens no Servidor',
  'LBL_MARK_READ_DESC' => 'Marcar mensagens como lidas no mail server ao importar; não eliminar.',
  'LBL_MARK_READ_NO' => 'E-mail marcado para eliminação após importação',
  'LBL_MARK_READ_YES' => 'E-mail deixado no servidor após importação',
  'LBL_MAX_SUBTAB' => 'Numero de Sub-Seções',
  'LBL_MAX_SUBTAB_DESCRIPTION' => 'Número de sub-seções mostrado por guia antes de um menu sobreposto aparecer.',
  'LBL_MAX_TAB' => 'Número máximo de Módulos',
  'LBL_MAX_TAB_DESCRIPTION' => 'Selecione o número máximo de módulos que podem ser exibidos na barra de navegação. O número de módulos que serão exibidos depende da largura do navegador. Os módulos que não são exibidos aparecerá no Menu Mais.',
  'LBL_MESSENGER_ID' => 'Nome IM:',
  'LBL_MESSENGER_TYPE' => 'Tipo de IM:',
  'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'O administrador ainda não configurou a conta padrão de saída. Não é possível enviar e-mail de teste.',
  'LBL_MOBILE_PHONE' => 'Mobile:',
  'LBL_MODIFIED_BY' => 'Modificado Por',
  'LBL_MODIFIED_BY_ID' => 'Modificado Por ID',
  'LBL_MODIFIED_USER_ID' => 'Id do Usuário  Modificado',
  'LBL_MODULE_NAME' => 'Usuários',
  'LBL_MODULE_NAME_SINGULAR' => 'Usuário',
  'LBL_MODULE_TITLE' => 'Usuários: Tela Principal',
  'LBL_MY_TEAMS' => 'Minhas Equipes',
  'LBL_NAME' => 'Nome Completo',
  'LBL_NAVIGATION_PARADIGM' => 'Navegação',
  'LBL_NAVIGATION_PARADIGM_DESCRIPTION' => 'Selecione para poder visualizar módulos na barra de navegação com base em grupos pré-definidos. Quando selecionado, o "Menu Filtrar por" recurso aparecerá no menu "Mais".',
  'LBL_NEW_FORM_TITLE' => 'Novo Usuário',
  'LBL_NEW_PASSWORD' => 'Nova Senha',
  'LBL_NEW_PASSWORD1' => 'Senha',
  'LBL_NEW_PASSWORD2' => 'Confirmar Senha',
  'LBL_NEW_USER_BUTTON_KEY' => 'N',
  'LBL_NEW_USER_BUTTON_LABEL' => 'Novo Usuário',
  'LBL_NEW_USER_BUTTON_TITLE' => 'Novo Usuário',
  'LBL_NEW_USER_PASSWORD_1' => 'Senha alterada com sucesso',
  'LBL_NEW_USER_PASSWORD_2' => 'Um email foi enviado ao usuário contendo a senha originada pelo sisttema',
  'LBL_NEW_USER_PASSWORD_3' => 'Senha foi criada com sucesso',
  'LBL_NORMAL_LOGIN' => 'Mudar para visualização normal',
  'LBL_NOTES' => 'Notas',
  'LBL_NO_KEY' => 'Chave não está configurada. Favor configurar a chave para habilitar publicação.',
  'LBL_NUMBER_GROUPING_SEP' => 'Separador 1000s',
  'LBL_NUMBER_GROUPING_SEP_TEXT' => 'Caracter utilizado para separar milhar',
  'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
  'LBL_OAUTH_TOKENS_SUBPANEL_TITLE' => 'OAuth Access Tokens',
  'LBL_OFFICE_PHONE' => 'Telefone Comercia',
  'LBL_OK' => 'OK',
  'LBL_OLD_PASSWORD' => 'Senha Atual',
  'LBL_ONLY' => 'Apenas',
  'LBL_ONLY_SINCE' => 'Importar Apenas a Partir da Última Verificação:',
  'LBL_ONLY_SINCE_DESC' => 'Quando a utilizar POP3, o PHP não pode filtrar mensagens Novas/Não Lidas.  Esta opção permite verificar mensagens DESDE a última vez que a caixa de correio foi acessada.  Isto melhora significativamente a performance se o seu mail server não suporta IMAP.',
  'LBL_ONLY_SINCE_NO' => 'Não. Verificar todos os e-mails no servidor de mail.',
  'LBL_ONLY_SINCE_YES' => 'Sim.',
  'LBL_OTHER' => 'Outro',
  'LBL_OTHER_EMAIL' => 'Outro Email',
  'LBL_OTHER_PHONE' => 'Outro Telefone',
  'LBL_OWN_OPPS' => 'Oportunidades',
  'LBL_OWN_OPPS_DESC' => 'Selecione se o usuário não será atribuído oportunidades. Utilize esta definição para os usuários que são gerentes que não estão envolvidos em atividades de vendas. A configuração é usada para o módulo de previsão de metas.',
  'LBL_PASSWORD' => 'Senha',
  'LBL_PASSWORD_EXPIRATION_GENERATED' => 'Sua senha é gerada pelo sistema',
  'LBL_PASSWORD_EXPIRATION_LOGIN' => 'Sua senha expirou. Favor providenciar outra',
  'LBL_PASSWORD_EXPIRATION_TIME' => 'Sua senha expirou. Favor providenciar nova senha.',
  'LBL_PASSWORD_GENERATED' => 'Nova senha gerada',
  'LBL_PASSWORD_SENT' => 'senha atualizada',
  'LBL_PDF_FONT_NAME_DATA' => 'Fonte para o Rodapé',
  'LBL_PDF_FONT_NAME_DATA_TEXT' => 'A fionte selecionada será aplicada no texto do rodapé no Documento PDF',
  'LBL_PDF_FONT_NAME_MAIN' => 'Fonte para Cabeçalho e Corpo',
  'LBL_PDF_FONT_NAME_MAIN_TEXT' => 'A fonte selecionada será aplicada no texto do Cabeçalho e corpo do documento PDF',
  'LBL_PDF_FONT_SIZE_DATA' => 'Dados Tamanho da fonte',
  'LBL_PDF_FONT_SIZE_DATA_TEXT' => '',
  'LBL_PDF_FONT_SIZE_MAIN' => 'Tamanho Finbte Principal',
  'LBL_PDF_FONT_SIZE_MAIN_TEXT' => '',
  'LBL_PDF_MARGIN_BOTTOM' => 'Margem base',
  'LBL_PDF_MARGIN_BOTTOM_TEXT' => '',
  'LBL_PDF_MARGIN_FOOTER' => 'Margem Rodapé',
  'LBL_PDF_MARGIN_FOOTER_TEXT' => '',
  'LBL_PDF_MARGIN_HEADER' => 'MArgem Cabeçalho',
  'LBL_PDF_MARGIN_HEADER_TEXT' => '',
  'LBL_PDF_MARGIN_LEFT' => 'Margem esquerda',
  'LBL_PDF_MARGIN_LEFT_TEXT' => '',
  'LBL_PDF_MARGIN_RIGHT' => 'Margem direita',
  'LBL_PDF_MARGIN_RIGHT_TEXT' => '',
  'LBL_PDF_MARGIN_TOP' => 'Margem topo',
  'LBL_PDF_MARGIN_TOP_TEXT' => '',
  'LBL_PDF_PAGE_FORMAT' => 'Formato de Página',
  'LBL_PDF_PAGE_FORMAT_TEXT' => 'Formato PDF para páginas',
  'LBL_PDF_PAGE_ORIENTATION' => 'Orientação para página PDF',
  'LBL_PDF_PAGE_ORIENTATION_L' => 'Paisagem',
  'LBL_PDF_PAGE_ORIENTATION_P' => 'Porta Retrato',
  'LBL_PDF_PAGE_ORIENTATION_TEXT' => '',
  'LBL_PDF_SETTINGS' => 'Configurações de PDF',
  'LBL_PHONE' => 'Telefone',
  'LBL_PHONE_FAX' => 'Fax:',
  'LBL_PHONE_HOME' => 'Telefone Residencial',
  'LBL_PHONE_MOBILE' => 'Mobile',
  'LBL_PHONE_OTHER' => 'Outro Telefone',
  'LBL_PHONE_WORK' => 'Telefone Comercial',
  'LBL_PICK_TZ_DESCRIPTION' => 'Antes de continuar, por favor, confirme o seu fuso horário. Selecione o fuso horário na lista abaixo e clique em Salvar para continuar. O fuso horário pode ser alterado a qualquer momento nas configurações do seu usuário.',
  'LBL_PICK_TZ_WELCOME' => 'Bem Vindo ao Sugar',
  'LBL_PICTURE_FILE' => 'Fotografia',
  'LBL_PORT' => 'Porta do Servidor de Correio',
  'LBL_PORTAL_ONLY' => 'Apenas Usuário do Portal',
  'LBL_PORTAL_ONLY_DESC' => 'Use para a API Portal. Este tipo não pode fazer o login através da interface web do Sugar.',
  'LBL_PORTAL_ONLY_USER' => 'usuário do Portal API',
  'LBL_POSTAL_CODE' => 'Código Postal',
  'LBL_PRIMARY_ADDRESS' => 'Endereço Principal',
  'LBL_PRIVATE_TEAM_FOR' => 'Equipe Privada para',
  'LBL_PROCESSING' => 'Processando',
  'LBL_PROMPT_TIMEZONE' => 'Assistente de usuário Prompt',
  'LBL_PROMPT_TIMEZONE_TEXT' => 'Selecione para que novos usuários percorram o Assistente de Novo Usuário após primeiro login',
  'LBL_PROSPECT_LIST' => 'Lista de Prospectos',
  'LBL_PROVIDE_USERNAME_AND_EMAIL' => 'Providenciar nome de usuário e endereço de email',
  'LBL_PSW_MODIFIED' => 'Última senha alterada.',
  'LBL_PUBLISH_KEY' => 'chave púPegueoutra blica',
  'LBL_QUOTAS' => 'Cotas',
  'LBL_REASS_ASSESSING' => 'Acessando',
  'LBL_REASS_BUTTON_CLEAR' => 'Limpar [Alt+C]',
  'LBL_REASS_BUTTON_CONTINUE' => 'Próximo >',
  'LBL_REASS_BUTTON_GO_BACK' => 'Voltar',
  'LBL_REASS_BUTTON_REASSIGN' => 'Reatribuir',
  'LBL_REASS_BUTTON_RESTART' => 'Reiniciar',
  'LBL_REASS_BUTTON_RETURN' => 'Retornar',
  'LBL_REASS_BUTTON_SUBMIT' => 'Submeter',
  'LBL_REASS_CANNOT_PROCESS' => 'não foi possível processar:',
  'LBL_REASS_CONFIRM_REASSIGN' => 'Gostaria de reatribuir todos os rgistros deste usuário?',
  'LBL_REASS_CONFIRM_REASSIGN_NO' => 'Não',
  'LBL_REASS_CONFIRM_REASSIGN_TITLE' => 'Reatribuir',
  'LBL_REASS_CONFIRM_REASSIGN_YES' => 'Sim',
  'LBL_REASS_DESC_PART1' => 'Selecione os módulos que contêm os registros a transferir de um usuário específico para outro usuário.<br /><br />Clique em Avançar para exibir o número de registros que serão atualizados em cada módulo selecionado. Clique em Cancelar para sair da página sem reatribuir nenhum registro.',
  'LBL_REASS_DESC_PART2' => 'Selecione quais módulos quer executar fluxos de trabalho, envio de notificações de atribuição, e de auditoria de monitoramento durante a transferência. Clique em Avançar para continuar e transferir registros. Clique em Reiniciar para começar de novo.',
  'LBL_REASS_FAILED' => 'Falhou',
  'LBL_REASS_FAILED_SAVE' => 'Falha ao salvar o registro',
  'LBL_REASS_FILTERS' => 'Filtros',
  'LBL_REASS_FROM' => 'de',
  'LBL_REASS_HAVE_BEEN_UPDATED' => 'foi atualizado:',
  'LBL_REASS_MOD_REASSIGN' => 'Módulos a incluir na reatribuição',
  'LBL_REASS_NONE' => 'Nenhum',
  'LBL_REASS_NOTES_ONE' => 'Executando workflows irá fazer com que o processo de transferência possa ser significativamente mais lento.',
  'LBL_REASS_NOTES_THREE' => 'Registros atribuindo a si mesmo não vai disparar notificações de atribuição.',
  'LBL_REASS_NOTES_TITLE' => 'Anotaçãoes:',
  'LBL_REASS_NOTES_TWO' => 'Mesmo que você não selecione para fazer o acompanhamento de auditoria, a data de modificação e o campo Modificado por  nos registros ainda serão atualizados em conformidade.',
  'LBL_REASS_NOT_PROCESSED' => 'Não foi possível processar',
  'LBL_REASS_RECORDS_FROM' => 'Registros para',
  'LBL_REASS_SCRIPT_TITLE' => 'Reatribuir Registros',
  'LBL_REASS_STEP2_DESC' => 'As equipes listadas abaixo estavam disponíveis na equipe de usuários, mas não para a equipe de usuário. Todos os registros da equipe de Usuário não será visível para equipe do usuário ao menos que os valores de equipe sejam mapeados.',
  'LBL_REASS_STEP2_TITLE' => 'Reatribuição de Times',
  'LBL_REASS_SUCCESSFUL' => 'Bem Sucedido',
  'LBL_REASS_SUCCESS_ASSIGN' => 'Atribuido com sucesso',
  'LBL_REASS_TEAMS_GOOD_MSG' => 'Para o usuário ter acesso a todas as equipes de usuário. Nenhum mapeamento necessário. Redirecionando para a próxima página em 5 segundos.',
  'LBL_REASS_TEAM_NO_CHANGE' => 'Nenhuma alteração',
  'LBL_REASS_TEAM_SET_TO' => 'e os times forma ajustados para',
  'LBL_REASS_TEAM_TO' => 'Ajuste Times para:',
  'LBL_REASS_THE_FOLLOWING' => 'A seguir',
  'LBL_REASS_TO' => 'para',
  'LBL_REASS_UPDATE_COMPLETE' => 'Atualização completa',
  'LBL_REASS_USER_FROM' => 'Do usuário:',
  'LBL_REASS_USER_FROM_TEAM' => 'Do Time de usuários',
  'LBL_REASS_USER_TO' => 'Para usuário',
  'LBL_REASS_USER_TO_TEAM' => 'Para o Time de usuários',
  'LBL_REASS_VERBOSE_HELP' => 'Selecione esta opção para visualizar informações detalhadas sobre as tarefas de  reatribuição que envolvem workflows.',
  'LBL_REASS_VERBOSE_OUTPUT' => 'Verbose Output',
  'LBL_REASS_WILL_BE_UPDATED' => 'serão atualizados',
  'LBL_REASS_WORK_NOTIF_AUDIT' => 'Incluir Workflow/Notifications/Audit (significativamente mais lento)',
  'LBL_RECAPTCHA_FILL_FIELD' => 'Entre com o texto que aparece na imagem',
  'LBL_RECAPTCHA_IMAGE' => 'Alterar para imagem',
  'LBL_RECAPTCHA_INSTRUCTION' => 'entre as duas palavras abaixo',
  'LBL_RECAPTCHA_INSTRUCTION_OPPOSITE' => 'Entre as duas palavras para direita',
  'LBL_RECAPTCHA_INVALID_PRIVATE_KEY' => 'Chave privada do Recaptcha inválida',
  'LBL_RECAPTCHA_INVALID_REQUEST_COOKIE' => 'O parâmetro do script do Código de verificação estava incorreto.',
  'LBL_RECAPTCHA_NEW_CAPTCHA' => 'Pegue outr CAPTCHA',
  'LBL_RECAPTCHA_SOUND' => 'alterar para som',
  'LBL_RECAPTCHA_UNKNOWN' => 'Erro Código Desconhecido',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notificar na Atribuição',
  'LBL_RECEIVE_NOTIFICATIONS_TEXT' => 'Receba uma notificação por e-mail quando um registro é atribuído a você.',
  'LBL_REGISTER' => 'Novo usu;ario? Por favor registre-se',
  'LBL_REGULAR_DESC' => 'Usuários regulares podem acessar modulos e relatórios conforme as equipes e perfis',
  'LBL_REGULAR_USER' => 'usuário Regular',
  'LBL_REMINDER' => 'Avisos',
  'LBL_REMINDER_EMAIL' => 'Email',
  'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email para todos os convidados',
  'LBL_REMINDER_POPUP' => 'Popup',
  'LBL_REMINDER_TEXT' => 'Definir um padrão para os lembretes de chamadas e reuniões. Notificações pop-up aparecerão para todos os convidados utilizando Sugar. Lembretes de e-mail são enviados para todos os convidados.',
  'LBL_REMOVED_TABS' => 'Administrador remover guias',
  'LBL_REPORTS_TO' => 'Reporta a:',
  'LBL_REPORTS_TO_ID' => 'Reporta ao ID',
  'LBL_REPORTS_TO_NAME' => 'Reporta a:',
  'LBL_REQUEST_SUBMIT' => 'Sua requisição foi submetida',
  'LBL_RESET_DASHBOARD' => 'Restabelecer Dashboard',
  'LBL_RESET_HOMEPAGE' => 'Restabelecer página principal',
  'LBL_RESET_HOMEPAGE_WARNING' => 'Você tem certeza que deseja restabelecer sua página principal?',
  'LBL_RESET_HOMEPAGE_WARNING_USER' => 'Você tem certeza que deseja restabelecer a página principal deste usuário?',
  'LBL_RESET_PREFERENCES' => 'Restaurar preferencias de usuário',
  'LBL_RESET_PREFERENCES_WARNING' => 'Tem certeza que deseja restabelecer todas as suas preferencias de usuário? Advertência: Isto irá também realizar o log out do sistema',
  'LBL_RESET_PREFERENCES_WARNING_USER' => 'Você tem certeza que deseja restabelecer todas as preferências deste usuário?',
  'LBL_RESET_TO_DEFAULT' => 'Restaurar para Padrão',
  'LBL_RESOURCE_NAME' => 'Nome',
  'LBL_RESOURCE_TYPE' => 'Tipo:',
  'LBL_ROLES_SUBPANEL_TITLE' => 'Funções',
  'LBL_SALUTATION' => 'Saudação',
  'LBL_SAVED_SEARCH' => 'Pesquisa Gravada & Layout',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisa do Usuário',
  'LBL_SEARCH_URL' => 'Pesquisar Região',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar Usuários Marcados',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar Usuários Marcados',
  'LBL_SERVER_OPTIONS' => 'Opções Avançadas',
  'LBL_SERVER_TYPE' => 'Protocolo de Servidor de Correio',
  'LBL_SERVER_URL' => 'Endereço do Mail Server',
  'LBL_SESSION_EXPIRED' => 'Você foi deslogado porque sua sessão expirou',
  'LBL_SETTINGS_URL' => 'URL',
  'LBL_SETTINGS_URL_DESC' => 'Use esta URL ao estabelecer configurações de login para o Sugar Plug-in para o Microsoft ® Outlook ® e do Sugar Plug-in para o Microsoft Word ® ®.',
  'LBL_SHOWOPTIONS' => 'Mostrar Opções',
  'LBL_SHOW_ON_EMPLOYEES' => 'Mostrar registros dos Funcionários',
  'LBL_SIGNATURE' => 'Assinatura',
  'LBL_SIGNATURES' => 'Assinaturas',
  'LBL_SIGNATURE_DEFAULT' => 'Assinatura de usuário?',
  'LBL_SIGNATURE_HTML' => 'Assinatura HTML',
  'LBL_SIGNATURE_NAME' => 'Nome',
  'LBL_SIGNATURE_PREPEND' => 'Assinatura acima da resposta?',
  'LBL_SMTP_SERVER_HELP' => 'Este servidor SMTP pode ser usado para mensagens de saída. Forneça um nome de usuário e senha da sua conta de e-mail para usar o servidor.',
  'LBL_SSL' => 'Utilizar SSL',
  'LBL_SSL_DESC' => 'Utilize Secure Socket Layer quando estiver conectando com o servidor de e-mails',
  'LBL_STATE' => 'Estado',
  'LBL_STATUS' => 'Status',
  'LBL_SUBPANEL_LINKS' => 'Links de Sub-Painéis',
  'LBL_SUBPANEL_LINKS_DESCRIPTION' => 'Na visualização de detalhes, exibir uma linha com links de atalho para sub-painel.',
  'LBL_SUBPANEL_TABS' => 'Sub-Painéis das Guias',
  'LBL_SUBPANEL_TABS_DESCRIPTION' => 'Na visualização de detalhes, grupos de SubPaineis nas abas e mostrar uma guia de cada vez.',
  'LBL_SUGAR_LOGIN' => 'É usuário Sugar',
  'LBL_SUPPORTED_THEME_ONLY' => 'Afeta apenas temas que suportam essa opção.',
  'LBL_SWAP_LAST_VIEWED_DESCRIPTION' => 'Exibir a barra da última visualização ao lado após verificado. Caso contrário, ele vai para o topo.',
  'LBL_SWAP_LAST_VIEWED_POSITION' => 'última visualização ao lado',
  'LBL_SWAP_SHORTCUT_DESCRIPTION' => 'Exibir a barra de atalhos no topo se verificado. Caso contrário, ele vai para o lado.',
  'LBL_SWAP_SHORTCUT_POSITION' => 'Atalhos no topo',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'senha Gerada pelo Sistema',
  'LBL_TAB_TITLE_EMAIL' => 'Configuração de E-mail',
  'LBL_TAB_TITLE_USER' => 'Configurações de Usuários',
  'LBL_TEAMS' => 'Equipes',
  'LBL_TEAM_MEMBERSHIP' => 'Membros da Equipe',
  'LBL_TEAM_SET' => 'Configuração de Equipe',
  'LBL_TEAM_UPLINE' => 'Membros reportam para',
  'LBL_TEAM_UPLINE_EXPLICIT' => 'Membro',
  'LBL_TEST_BUTTON_KEY' => 't',
  'LBL_TEST_BUTTON_TITLE' => 'Teste',
  'LBL_TEST_SETTINGS' => 'Testar Configurações',
  'LBL_TEST_SUCCESSFUL' => 'Conexão finalizada com sucesso.',
  'LBL_THEME' => 'Temas',
  'LBL_THEMEPREVIEW' => 'Pré-Visualização',
  'LBL_THEME_COLOR' => 'Cor',
  'LBL_THEME_FONT' => 'Fonte',
  'LBL_TIMEZONE' => 'Horário Local',
  'LBL_TIMEZONE_DST' => 'Horeario de Verão',
  'LBL_TIMEZONE_DST_TEXT' => 'Observar o horário de verão',
  'LBL_TIMEZONE_TEXT' => 'Definir o fuso horário atual',
  'LBL_TIME_FORMAT' => 'Formato da hora:',
  'LBL_TIME_FORMAT_TEXT' => 'Set the display format for time stamps',
  'LBL_TITLE' => 'Título',
  'LBL_TLS' => 'Usar TLS',
  'LBL_TLS_DESC' => 'Usar Transport Layer Security na conexão com mail server - use apenas esta opção se o seu mail server suportar este protocolo.',
  'LBL_TOGGLE_ADV' => 'Opções Avançadas',
  'LBL_TOO_MANY_CONCURRENT' => 'Esta sessÃo encerrou porque outra sessão começou com o mesmo usuário.',
  'LBL_UPDATE_FINISH' => 'Update Completo',
  'LBL_USER' => 'Usuários',
  'LBL_USER_ACCESS' => 'Acessar',
  'LBL_USER_HASH' => 'Senha',
  'LBL_USER_HOLIDAY_SUBPANEL_TITLE' => 'Férias do Usuário',
  'LBL_USER_INFORMATION' => 'Perfil do USuário',
  'LBL_USER_LOCALE' => 'Definições Locais',
  'LBL_USER_NAME' => 'Nome do Usuário',
  'LBL_USER_NAME_FOR_ROLE' => 'Usuários/Equipes/Perfis',
  'LBL_USER_PREFERENCES' => 'Preferências do Usuário',
  'LBL_USER_SETTINGS' => 'Configuração dos Usuários',
  'LBL_USER_TYPE' => 'Tipo de usuário',
  'LBL_USE_GROUP_TABS' => 'Módulo de filtros do Menu',
  'LBL_USE_REAL_NAMES' => 'Mostra nome completo',
  'LBL_USE_REAL_NAMES_DESC' => 'Mostrar o nome completo dos Usuários ao invés do nome de Usuário',
  'LBL_WIZARD_BACK_BUTTON' => 'Voltar',
  'LBL_WIZARD_FINISH' => 'Click <b>Finish</b> below to save your settings and to begin using Sugar. For more information on using Sugar:<br /><br /><br /><table cellpadding=0 cellspacing=0><br /><tr><td><!--not_in_theme!--><img src=include/images/university.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/university" target="_blank"><b>Sugar University</b></a><br>End-user and System Administrator Training and Resources</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/docs.png style="margin-right: 5px;"></td><td><a href="http://docs.sugarcrm.com/" target="_blank"><b>Documentation</b></a><br>Product Guides and Release Notes</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/kb.png style="margin-right: 5px;"></td><td><a href="http://kb.sugarcrm.com/" target="_blank"><b>Knowledge Base</b></a><br>Tips from SugarCRM Support for performing common tasks and processes in Sugar</td></tr><br /><tr><td colspan=2><hr style="margin: 5px 0px;"></td></tr><br /><tr><td><!--not_in_theme!--><img src=include/images/forums.png style="margin-right: 5px;"></td><td><a href="http://www.sugarcrm.com/forums" target="_blank"><b>Forums</b></a><br>Forums dedicated to the Sugar Community to discuss topics of interest with each other and with SugarCRM Developers</td></tr><br /></table>',
  'LBL_WIZARD_FINISH1' => 'O que gostaria de fazer?',
  'LBL_WIZARD_FINISH10' => 'Utilize o Studio para criar e gerenciar os campos e layout da aplicação',
  'LBL_WIZARD_FINISH11' => 'Visite Sugar University',
  'LBL_WIZARD_FINISH12' => 'Ache material de treinamento e classes que irão ajudar a iniciar no SugarCRM como administrador ou usuário final',
  'LBL_WIZARD_FINISH14' => 'Documentação',
  'LBL_WIZARD_FINISH15' => 'Guias do Produto e Releases',
  'LBL_WIZARD_FINISH16' => 'Base de Conhecimento',
  'LBL_WIZARD_FINISH17' => 'Dicas do Support SugarCRM para tarefas e processos comuns no Sugar',
  'LBL_WIZARD_FINISH18' => 'Forums',
  'LBL_WIZARD_FINISH19' => 'Forums dedicados a Comunidade SugarCRM para discutir tópicos de interesses com desenvolvedores SugarCRM e entre membros da comunidade',
  'LBL_WIZARD_FINISH2' => 'Utilizando Sugar Inicio',
  'LBL_WIZARD_FINISH2DESC' => 'Vá direto a Página inicial da aplicação',
  'LBL_WIZARD_FINISH3' => 'Importar Registros',
  'LBL_WIZARD_FINISH4' => 'Importar dados de um recurso externo ao da aplicação',
  'LBL_WIZARD_FINISH5' => 'Criar usuários',
  'LBL_WIZARD_FINISH6' => 'Criar novas contas para que pessoas utilizem  o acesso a aplicacão',
  'LBL_WIZARD_FINISH7' => 'Ver e gerenciar as configurações da aplicação',
  'LBL_WIZARD_FINISH8' => 'Gerenciar configurações avançadas, incluindo as configurações padrão da aplicação',
  'LBL_WIZARD_FINISH9' => 'Configure a aplicação',
  'LBL_WIZARD_FINISH_BUTTON' => 'Concluir',
  'LBL_WIZARD_FINISH_TAB' => 'Terminar',
  'LBL_WIZARD_FINISH_TITLE' => 'Você está pronto para usar o Sugar!',
  'LBL_WIZARD_LOCALE' => 'Seu Local',
  'LBL_WIZARD_LOCALE_DESC' => 'Especifique o fuso horário e a forma como deseja que datas, moedas e nomes apareçam no Sugar.',
  'LBL_WIZARD_NEXT_BUTTON' => 'Próximo >',
  'LBL_WIZARD_PERSONALINFO' => 'Seus dados',
  'LBL_WIZARD_PERSONALINFO_DESC' => 'Procidencie informações a seu respeito. Suas informações serão visíveis aos usuários SugarCRM. Campos marcados com  * são obrigatórios.',
  'LBL_WIZARD_SKIP_BUTTON' => 'Pular',
  'LBL_WIZARD_SMTP' => 'Seu email',
  'LBL_WIZARD_SMTP_DESC' => 'Forneça dados da sua conta de e-mail e Senha para o servidor de e-mail de saída padrão.',
  'LBL_WIZARD_TITLE' => 'Wizard - Usuário',
  'LBL_WIZARD_WELCOME' => 'Clique em <b>Próximo</b> para configurar algumas configurações básicas para o uso do Sugar.',
  'LBL_WIZARD_WELCOME_NOSMTP' => 'Wizard - Welcome',
  'LBL_WIZARD_WELCOME_TAB' => 'Bem-vindo',
  'LBL_WIZARD_WELCOME_TITLE' => 'Bem-vindo ao Sugar!',
  'LBL_WORKSHEETS' => 'Planilhas',
  'LBL_WORK_PHONE' => 'Telefone Comercial:',
  'LBL_YAHOOMAIL_SMTPPASS' => 'Senha Yahoo! Mail',
  'LBL_YAHOOMAIL_SMTPUSER' => 'ID Yahoo! Mail',
  'LBL_YOUR_PUBLISH_URL' => 'Publicar minha localização',
  'LBL_YOUR_QUERY_URL' => 'Sua Query URL',
  'LNK_EDIT_TABS' => 'Editar Tabs',
  'LNK_IMPORT_USERS' => 'Importar usuários',
  'LNK_NEW_GROUP_USER' => 'Criar Novo Grupo de usuário',
  'LNK_NEW_PORTAL_USER' => 'Criar API usuário Portal',
  'LNK_NEW_USER' => 'Criar Novo usuário',
  'LNK_REASSIGN_RECORDS' => 'Reatribuir Registros',
  'LNK_USER_LIST' => 'Ver Usuários',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Tem a certeza que pretende remover este usuário desta Equipe?',
);


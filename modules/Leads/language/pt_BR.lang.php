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
  'ERR_DELETE_RECORD' => 'Um número de registro deve ser especificado para eliminar Potencial.',
  'LBL_ACCOUNT_DESCRIPTION' => 'Descrição da conta',
  'LBL_ACCOUNT_ID' => 'ID da conta',
  'LBL_ACCOUNT_NAME' => 'Nome da conta:',
  'LBL_ACTIVITIES_COPY' => 'Copiar Atividades para',
  'LBL_ACTIVITIES_COPY_HELP' => 'Selecionar o registro (s) para o qual criar cópias das atividades do Lead. Tarefas novas, ligações, reuniões e anotações será criado para cada um dos registro selecionado (s). E-mails serão relacionadas com o registro selecionado (s).',
  'LBL_ACTIVITIES_MOVE' => 'MOver Atividades para',
  'LBL_ACTIVITIES_MOVE_HELP' => 'Selecionar o registro para o qual mover as atividades do Lead . Tarefas, ligações, reuniões, anotações  e e-mails serão movidos para o registro selecionado (s).',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
  'LBL_ADDRESS_INFORMATION' => 'Informação do Endereço',
  'LBL_ADD_BUSINESSCARD' => 'Adicionar Cartão de Visita',
  'LBL_ALTERNATE_ADDRESS' => 'Outro Endereço:',
  'LBL_ALT_ADDRESS' => 'Outro Endereço:',
  'LBL_ALT_ADDRESS_CITY' => 'Cidade Endereço Alternativo',
  'LBL_ALT_ADDRESS_COUNTRY' => 'País Endereço Alternativo',
  'LBL_ALT_ADDRESS_POSTALCODE' => 'Código Postal Endereço Alternativo',
  'LBL_ALT_ADDRESS_STATE' => 'Estado',
  'LBL_ALT_ADDRESS_STREET' => 'Rua',
  'LBL_ALT_ADDRESS_STREET_2' => 'Rua',
  'LBL_ALT_ADDRESS_STREET_3' => 'Rua',
  'LBL_ANY_ADDRESS' => 'Endereço:',
  'LBL_ANY_EMAIL' => 'Email:',
  'LBL_ANY_PHONE' => 'Telefone:',
  'LBL_ASSIGNED_TO_ID' => 'Atribuído a',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuí­do a',
  'LBL_ASSISTANT' => 'Assistente',
  'LBL_ASSISTANT_PHONE' => 'Telefone do Assistente',
  'LBL_BACKTOLEADS' => 'Voltar aos Potenciais',
  'LBL_BIRTHDATE' => 'Data de Nascimento:',
  'LBL_BUSINESSCARD' => 'Converter Potencial',
  'LBL_CAMPAIGN' => 'Campanha',
  'LBL_CAMPAIGNS' => 'Campanhas',
  'LBL_CAMPAIGNS_SUBPANEL_TITLE' => 'Campanhas',
  'LBL_CAMPAIGN_ID' => 'Id de Campanha',
  'LBL_CAMPAIGN_LEAD' => 'Campanhas',
  'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campanhas',
  'LBL_CITY' => 'Cidade',
  'LBL_CLICK_TO_RETURN' => 'Regressar ao Portal',
  'LBL_CONTACT' => 'Contato',
  'LBL_CONTACT_ID' => 'ID do contato',
  'LBL_CONTACT_INFORMATION' => 'Informação Potencial',
  'LBL_CONTACT_NAME' => 'Nome do Potencial',
  'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencial-oportunidade',
  'LBL_CONTACT_ROLE' => 'Perfil',
  'LBL_CONVERTED' => 'Convertido',
  'LBL_CONVERTED_ACCOUNT' => 'Conta Convertida',
  'LBL_CONVERTED_CONTACT' => 'Contato Convertido',
  'LBL_CONVERTED_OPP' => 'Oportunidade Convertida',
  'LBL_CONVERTLEAD' => 'Converter Potencial',
  'LBL_CONVERTLEAD_BUTTON_KEY' => 'Converter Potencial',
  'LBL_CONVERTLEAD_TITLE' => 'Converter Potencial [Alt+V]',
  'LBL_CONVERTLEAD_WARNING' => 'Atenção: O status do Potencial que está prestes a converter é "Convertido". registros de contato e/ou conta podem já ter sido criado a partir do potencial. Se quiser continuar com a conversão do Potencial, clique em Gravar. Para voltar ao potencial sem a converter, clique em Cancelar.',
  'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => 'contato possível:',
  'LBL_CONVERT_ADD_MODULE' => 'Adicionar Módulo',
  'LBL_CONVERT_COPY' => 'Copiar dados',
  'LBL_CONVERT_DELETE' => 'Eliminar',
  'LBL_CONVERT_EDIT' => 'Editar',
  'LBL_CONVERT_EDIT_LAYOUT' => 'Editar layout de conversão',
  'LBL_CONVERT_MODULE_NAME' => 'Módulo',
  'LBL_CONVERT_MODULE_NAME_SINGULAR' => 'Módulo',
  'LBL_CONVERT_REQUIRED' => 'Obrigatório',
  'LBL_CONVERT_SELECT' => 'Permitir a selecção',
  'LBL_COPY_TIP' => 'Quando selecionado, campos do potencial serão copiados para campos com o mesmo nome nos registros a criar.',
  'LBL_COUNTRY' => 'País:',
  'LBL_CREATE' => 'Criar',
  'LBL_CREATED' => 'Criado por',
  'LBL_CREATED_ACCOUNT' => 'Nova conta criada',
  'LBL_CREATED_CALL' => 'Nova ligação criada',
  'LBL_CREATED_CONTACT' => 'Novo contato criado',
  'LBL_CREATED_ID' => 'Criado Por ID',
  'LBL_CREATED_MEETING' => 'Nova reunião criada',
  'LBL_CREATED_NEW' => 'Criou um novo registro em',
  'LBL_CREATED_OPPORTUNITY' => 'Nova oportunidade criada',
  'LBL_CREATED_USER' => 'Usuário Criado',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potenciais',
  'LBL_DELETE_TIP' => 'Remover este módulo do layout de conversão.',
  'LBL_DEPARTMENT' => 'Departamento:',
  'LBL_DESCRIPTION' => 'Descrição:',
  'LBL_DESCRIPTION_INFORMATION' => 'Informação de Descrição',
  'LBL_DO_NOT_CALL' => 'Não Telefonar:',
  'LBL_DUPLICATE' => 'Potenciais Semelhantes',
  'LBL_EDITLAYOUT' => 'Editar Layout',
  'LBL_EDIT_INLINE' => 'Editar',
  'LBL_EDIT_TIP' => 'Modificar o layout de conversão para este módulo.',
  'LBL_EMAIL_ADDRESS' => 'E-mail:',
  'LBL_EMAIL_OPT_OUT' => 'Não deseja receber E-mails:',
  'LBL_ENTERDATE' => 'Introduza uma Data',
  'LBL_EXISTING_ACCOUNT' => 'Usada uma conta existente',
  'LBL_EXISTING_CONTACT' => 'Usado um contato existente',
  'LBL_EXISTING_OPPORTUNITY' => 'Usada uma oportunidade existente',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'ID usuário Atribuído',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'nome de usuário atribuído',
  'LBL_EXPORT_CREATED_BY' => 'Criado pelo ID',
  'LBL_EXPORT_EMAIL2' => 'Outro E-mail',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modificado Por ID',
  'LBL_EXPORT_PHONE_MOBILE' => 'Telefone Móvel',
  'LBL_FAX_PHONE' => 'Fax:',
  'LBL_FIRST_NAME' => 'Nome:',
  'LBL_FULL_NAME' => 'Nome Completo:',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
  'LBL_HOME_PHONE' => 'Telefone residencial:',
  'LBL_IMPORT_VCARD' => 'Importar a partir de um vCard',
  'LBL_IMPORT_VCARDTEXT' => 'Criar nova lead automaticamente importando um vCard do seu sistema de ficheiros.',
  'LBL_INVALID_EMAIL' => 'E-mail Inválido:',
  'LBL_INVITEE' => 'Relatórios',
  'LBL_LAST_NAME' => 'Último Nome:',
  'LBL_LEAD_SOURCE' => 'Fonte do Potencial:',
  'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrição da Fonte do potencial:',
  'LBL_LIST_ACCEPT_STATUS' => 'Status de Aceitação',
  'LBL_LIST_ACCOUNT_NAME' => 'Nome da conta',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuído a',
  'LBL_LIST_CONTACT_NAME' => 'Nome do Potencial',
  'LBL_LIST_CONTACT_ROLE' => 'Função',
  'LBL_LIST_DATE_ENTERED' => 'Data de Criação',
  'LBL_LIST_EMAIL_ADDRESS' => 'E-mail',
  'LBL_LIST_FIRST_NAME' => 'Primeiro Nome',
  'LBL_LIST_FORM_TITLE' => 'Lista de Potenciais',
  'LBL_LIST_LAST_NAME' => 'Último Nome:',
  'LBL_LIST_LEAD_SOURCE' => 'Origem da Lead',
  'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrição da Fonte da Lead',
  'LBL_LIST_MY_LEADS' => 'Meus Potenciais',
  'LBL_LIST_NAME' => 'Nome',
  'LBL_LIST_PHONE' => 'Telefone Comercial',
  'LBL_LIST_REFERED_BY' => 'Indicado Por',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_TITLE' => 'Título',
  'LBL_LOADING' => 'Carregando ...',
  'LBL_MESSAGE' => 'Por favor introduza a sua informação abaixo. Informação e/ou uma conta será criada para a sua aprovação pendente.',
  'LBL_MOBILE_PHONE' => 'Mobile:',
  'LBL_MODIFIED' => 'Modificado por',
  'LBL_MODIFIED_ID' => 'Modificado por Id',
  'LBL_MODIFIED_USER' => 'Usuário Modificado',
  'LBL_MODULE_NAME' => 'Potenciais',
  'LBL_MODULE_NAME_SINGULAR' => 'Potencial',
  'LBL_MODULE_TIP' => 'O módulo no qual será criado um novo registro',
  'LBL_MODULE_TITLE' => 'Potenciais: Tela Principal',
  'LBL_NAME' => 'Nome:',
  'LBL_NEW_FORM_TITLE' => 'Novo Potencial',
  'LBL_NEW_PORTAL_PASSWORD' => 'Nova Senha para o Portal:',
  'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => 'Aviso: Tela de conversão actual contém campos personalizados. Quando personalizar a tela de conversão no Studio pela primeira vez, vai precisar adicionar campos personalizados para o layout, quando necessário. Os campos personalizados não aparecerão automaticamente no layout, como faziam anteriormente.',
  'LBL_OFFICE_PHONE' => 'Telefone do Escritório:',
  'LBL_OPPORTUNITY_AMOUNT' => 'Valor da Oportunidade:',
  'LBL_OPPORTUNITY_ID' => 'ID da Oportunidade',
  'LBL_OPPORTUNITY_NAME' => 'Nome da Oportunidade:',
  'LBL_OPP_NAME' => 'Nome da Oportunidade:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Outro E-mail:',
  'LBL_OTHER_PHONE' => 'Outro Telefone:',
  'LBL_PHONE' => 'Telefone:',
  'LBL_PHONE_FAX' => 'Fax:',
  'LBL_PHONE_HOME' => 'Telefone Residencial',
  'LBL_PHONE_MOBILE' => 'Mobile',
  'LBL_PHONE_OTHER' => 'Outro Telefone',
  'LBL_PHONE_WORK' => 'Telefone Comercial',
  'LBL_PORTAL_ACTIVE' => 'Portal Ativo:',
  'LBL_PORTAL_APP' => 'Aplicação do Portal',
  'LBL_PORTAL_INFORMATION' => 'Informação do Portal',
  'LBL_PORTAL_NAME' => 'Nome no Portal:',
  'LBL_PORTAL_PASSWORD_ISSET' => 'Senha do Portal está definida:',
  'LBL_POSTAL_CODE' => 'Código Postal:',
  'LBL_PRIMARY_ADDRESS' => 'Endereço Principal:',
  'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade Endereço Principal',
  'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País Endereço Principal',
  'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código Postal Endereço Principal',
  'LBL_PRIMARY_ADDRESS_STATE' => 'Estado Endereço Principal',
  'LBL_PRIMARY_ADDRESS_STREET' => 'Rua Endereço Principal',
  'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rua Endereço Principal 2',
  'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rua Endereço Principal 3',
  'LBL_PROSPECT_LIST' => 'Lista de Potenciais Clientes',
  'LBL_REFERED_BY' => 'Indicado Por:',
  'LBL_REGISTRATION' => 'registro',
  'LBL_REPORTS_FROM' => 'Relatórios de',
  'LBL_REPORTS_TO' => 'Reporta a:',
  'LBL_REPORTS_TO_ID' => 'Reporta ao ID',
  'LBL_REQUIRED_TIP' => 'Todos os módulos obrigatórios devem ser criados ou selecionados para o potencial poder ser convertido.',
  'LBL_SALUTATION' => 'Saudação',
  'LBL_SAVED' => 'Obrigado pelo seu registro. A sua conta será criada e alguém irá contactá-lo brevemente.',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Lead',
  'LBL_SELECT' => '<b>OU</b> Selecione',
  'LBL_SELECTION_TIP' => 'Módulos com um campo relate nos contatos podem ser seleccionados em vez de criados durante o processo de conversão.',
  'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar as Potenciais Marcadas',
  'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar as Potenciais Marcadas',
  'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' => 'Pedimos desculpa, de momento o servidor está indisponível, por favor tente novamente mais tarde.',
  'LBL_STATE' => 'Estado:',
  'LBL_STATUS' => 'Status:',
  'LBL_STATUS_DESCRIPTION' => 'Descrição do Status:',
  'LBL_STREET' => 'Rua',
  'LBL_TARGET_BUTTON_KEY' => 'Target',
  'LBL_TARGET_BUTTON_LABEL' => 'Definir como Target',
  'LBL_TARGET_BUTTON_TITLE' => 'Definir como Target',
  'LBL_TARGET_OF_CAMPAIGNS' => 'Campanhas com Sucesso:',
  'LBL_THANKS_FOR_SUBMITTING_LEAD' => 'Obrigado Pela Sua Inscrição.',
  'LBL_TITLE' => 'Cargo:',
  'LBL_VCARD' => 'vCard',
  'LBL_VIEW_FORM_TITLE' => 'Visualização da Lead',
  'LBL_WEBSITE' => 'Site Internet',
  'LNK_IMPORT_LEADS' => 'Importar Potenciais',
  'LNK_IMPORT_VCARD' => 'Criar a partir de um vCard',
  'LNK_LEAD_LIST' => 'Potenciais',
  'LNK_LEAD_REPORTS' => 'Relatórios de Potenciais',
  'LNK_NEW_ACCOUNT' => 'Nova conta',
  'LNK_NEW_APPOINTMENT' => 'Novo Compromisso',
  'LNK_NEW_CALL' => 'Nova Ligação',
  'LNK_NEW_CASE' => 'Nova Ocorrência',
  'LNK_NEW_CONTACT' => 'Novo contato',
  'LNK_NEW_LEAD' => 'Novo Potencial',
  'LNK_NEW_MEETING' => 'Nova Reunião',
  'LNK_NEW_NOTE' => 'Nova Nota',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LNK_NEW_TASK' => 'Nova Tarefa',
  'LNK_SELECT_ACCOUNTS' => '<b>OU</b> Selecione uma conta',
  'LNK_SELECT_CONTACTS' => 'OU selecione contato',
  'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiar endereço alternativo para endereço principal',
  'NTC_COPY_PRIMARY_ADDRESS' => 'Copiar endereço principal para endereço alternativo',
  'NTC_DELETE_CONFIRMATION' => 'Tem a certeza que pretende eliminar este registro?',
  'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'A criação de uma Oportunidade requer uma conta. Por favor crie uma nova ou Selecione uma já existente.',
  'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza que pretende remover este potencial desta ocorrência?',
  'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Tem a certeza que pretende remover este registro como um relatório?',
  'db_account_name' => 'Nome da conta',
  'db_email1' => 'E-mail',
  'db_email2' => 'E-mail 2',
  'db_first_name' => 'Nome',
  'db_last_name' => 'Sobenome',
  'db_title' => 'Título',
);


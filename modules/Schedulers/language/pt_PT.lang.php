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
  'ERR_CRON_SYNTAX' => 'Sintaxe Cron inválida',
  'ERR_DELETE_RECORD' => 'Um número de registo deve ser especificado para eliminar a calendarização.',
  'LBL_ADV_OPTIONS' => 'Opções Avançadas',
  'LBL_ALL' => 'Todos os Dias',
  'LBL_ALWAYS' => 'Sempre',
  'LBL_AND' => 'e',
  'LBL_AT' => 'às',
  'LBL_AT_THE' => 'às',
  'LBL_BASIC_OPTIONS' => 'Configuração Básica',
  'LBL_CATCH_UP' => 'Executar Se Falhar',
  'LBL_CATCH_UP_WARNING' => 'Desmarque se esta Tarefa levar mais do que um momento para se executada.',
  'LBL_CLEANJOBQUEUE' => 'Limpar a Fila de Trabalhos',
  'LBL_CRONTAB_EXAMPLES' => 'A lista acima usa notações crontab padrão.',
  'LBL_CRONTAB_SERVER_TIME_POST' => '). Por favor especifique a execução do calendarizador tendo isto em conta.',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'As especificações de cron são executadas com base na zona horária (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para configurar o Crontab',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para configurar o Calendarizador do Windows',
  'LBL_CRON_LINUX_DESC' => 'Adicione esta linha ao crontab:',
  'LBL_CRON_WINDOWS_DESC' => 'Crie um ficheiro batch com os seguintes comandos:',
  'LBL_DATE_TIME_END' => 'Data e Hora de Fim',
  'LBL_DATE_TIME_START' => 'Data e Hora de Início',
  'LBL_DAY_OF_MONTH' => 'data',
  'LBL_DAY_OF_WEEK' => 'dia',
  'LBL_EVERY' => 'Todo(a)',
  'LBL_EVERY_DAY' => 'Todos os dias',
  'LBL_EXECUTE_TIME' => 'Tempo de Execução',
  'LBL_FRI' => 'Sexta',
  'LBL_FROM' => 'De',
  'LBL_HOUR' => 'horas',
  'LBL_HOURS' => 'hrs',
  'LBL_HOUR_SING' => 'hora',
  'LBL_IN' => 'em',
  'LBL_INTERVAL' => 'Intervalo',
  'LBL_JOB' => 'Tarefa',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Tarefas Activas',
  'LBL_JOB_URL' => 'URL da Tarefa',
  'LBL_LAST_RUN' => 'Última Execução com Sucesso',
  'LBL_LIST_EXECUTE_TIME' => 'Horário de Execução:',
  'LBL_LIST_JOB_INTERVAL' => 'Intervalo:',
  'LBL_LIST_LIST_ORDER' => 'Calendarizadores:',
  'LBL_LIST_NAME' => 'Calendarizador:',
  'LBL_LIST_RANGE' => 'Intervalo:',
  'LBL_LIST_REMOVE' => 'Remover:',
  'LBL_LIST_STATUS' => 'Estado:',
  'LBL_LIST_TITLE' => 'Lista de Tarefas Calendarizadas:',
  'LBL_MINS' => 'min',
  'LBL_MINUTES' => 'minutos',
  'LBL_MIN_MARK' => 'marca de minuto',
  'LBL_MODULE_NAME' => 'Calendarizador Sugar',
  'LBL_MODULE_NAME_SINGULAR' => 'Calendarizador Sugar',
  'LBL_MODULE_TITLE' => 'Calendarizadores',
  'LBL_MON' => 'Segunda',
  'LBL_MONTH' => 'mês',
  'LBL_MONTHS' => 'meses',
  'LBL_NAME' => 'Nome da Tarefa',
  'LBL_NEVER' => 'Nunca',
  'LBL_NEW_FORM_TITLE' => 'Nova Tarefa Calendarizada',
  'LBL_NO_PHP_CLI' => 'Se o seu host não tiver o binário PHP disponível, poderá usar o wget ou o curl para lançar as suas Tarefas.<br>for wget: <b>*    *    *    *    *    wget --quiet --non-verbose /cron.php > /dev/null 2>&1</b><br>for curl: <b>*    *    *    *    *    curl --silent /cron.php > /dev/null 2>&1',
  'LBL_OFTEN' => 'Tão frequente quanto possível.',
  'LBL_ON_THE' => 'No(a)',
  'LBL_OOTB_BOUNCE' => 'Executar toda a noite o Processamento de E-mails Retornados de Campanhas',
  'LBL_OOTB_CAMPAIGN' => 'Executar toda a noite o Envio Massivo de E-mail de Campanha',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Limpar a Fila de Trabalhos',
  'LBL_OOTB_CREATE_NEXT_TIMEPERIOD' => 'Criar Períodos de Tempo Futuros',
  'LBL_OOTB_IE' => 'Verificar Caixa de Entrada de E-mails',
  'LBL_OOTB_PRUNE' => 'Remover Apagados da Base de Dados no primeiro dia do Mês',
  'LBL_OOTB_REPORTS' => 'Executar tarefas criadas de execução de relatórios',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Correr os Lembretes de Emails a Enviar',
  'LBL_OOTB_TRACKER' => 'Remover apagados das tabelas de trackers',
  'LBL_OOTB_WORKFLOW' => 'Processar Tarefas de Workflow',
  'LBL_PERENNIAL' => 'perpétua',
  'LBL_PERFORMFULLFTSINDEX' => 'Sistema de Indexação de Pesquisa de Texto Completo',
  'LBL_POLLMONITOREDINBOXES' => 'Verificar Contas de Entrada de E-mail',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Executar toda a noite o Processamento de E-mails Retornados de Campanhas',
  'LBL_PROCESSQUEUE' => 'Executar tarefas criadas de execução de relatórios',
  'LBL_PROCESSWORKFLOW' => 'Processar Tarefas de Workflow',
  'LBL_PRUNEDATABASE' => 'Remover Apagados da Base de Dados no primeiro dia do Mês',
  'LBL_RANGE' => 'a',
  'LBL_REFRESHJOBS' => 'Actualizar Tarefas',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Executar toda a noite campanhas de e-mail massivo',
  'LBL_SAT' => 'Sábado',
  'LBL_SCHEDULER' => 'Calendarizador:',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Calendarizador',
  'LBL_SENDEMAILREMINDERS' => 'Correr os Lembretes de Emails a Enviar',
  'LBL_STATUS' => 'Estado',
  'LBL_SUGARJOBCREATENEXTTIMEPERIOD' => 'Criar Períodos de Tempo Futuros',
  'LBL_SUN' => 'Domingo',
  'LBL_THU' => 'Quinta',
  'LBL_TIME_FROM' => 'Activo Desde',
  'LBL_TIME_TO' => 'Activo Até',
  'LBL_TOGGLE_ADV' => 'Opções Avançadas',
  'LBL_TOGGLE_BASIC' => 'Opções Básicas',
  'LBL_TRIMTRACKER' => 'Remover Apagados das Tabelas de Trackers',
  'LBL_TUE' => 'Terça',
  'LBL_UPDATETRACKERSESSIONS' => 'Actualizar Tabelas de Sessões de Trackers',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Actualizar tabela tracker_sessions',
  'LBL_WARN_CURL' => 'Aviso:',
  'LBL_WARN_CURL_TITLE' => 'Aviso cURL:',
  'LBL_WARN_NO_CURL' => 'Este sistema não possui as bibliotecas cURL habilitadas/compiladas no módulo PHP (--with-curl=/path/to/curl_library).  Por favor contacte o seu administrador de sistemas para resolver esta questão.  Sem a funcionalidade cURL, o Calendarizador não pode executar as suas tarefas.',
  'LBL_WED' => 'Quarta',
  'LNK_LIST_SCHEDULED' => 'Tarefas Calendarizadas',
  'LNK_LIST_SCHEDULER' => 'Calendarizador',
  'LNK_NEW_SCHEDULER' => 'Nova Tarefa Calendarizada',
  'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registo?',
  'NTC_LIST_ORDER' => 'Configure a ordem pela qual esta Calendarização aparecerá nas listas de valores possíveis do campo Calendarizador',
  'NTC_STATUS' => 'Configure o estado como Inactivo para excluir esta Calendarização das listas de valores possíveis do Calendarizador',
  'SOCK_GREETING' => 'Esta é a interface para o Serviço de Calendarização do SugarCRM.',
);


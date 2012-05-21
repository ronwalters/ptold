<?php 
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point'); 
require_once('include/json_config.php'); 
require_once('include/MVC/View/views/view.detail.php'); 
class AccountsViewDetail extends ViewDetail 
{ 
    function AccountsViewDetail() 
	{ 
		parent::ViewDetail(); 
	}
	function display() 
	{
		$this->dv->defs['templateMeta']['form']['buttons'] = array (
		  0 => 'EDIT',
		  1 => 'DUPLICATE',
		  2 => 'DELETE',
		  3 => 'FIND_DUPLICATES',
		  4 => 'CONNECTOR',
		  5 => array(
			'customCode' => "
<input type='hidden' value='pt' name='query'>
<input type='hidden' value='false' name='to_pdf'>
<input onclick=\"this.form.to_pdf.value='true';this.form.action.value='CsvExport';SUGAR.ajaxUI.submitForm(this.form);this.form.to_pdf.value='false';\" type='button' name='csv_export' value='Export to CSV' />",
		  ),
		);
		$sql = "
SELECT YEAR(av_net_worth.date_entered) AS year, SUM(av_accounts.value) AS worth
FROM `accounts`
LEFT JOIN accounts_av_net_worth_c 
	ON 
	(
		accounts_av_net_worth_c.deleted=0 
		AND 
		accounts_av_net_worth_c.accounts_av_net_worthaccounts_ida = '{$this->bean->id}'
	)
LEFT JOIN av_net_worth
	ON
	(
		av_net_worth.deleted=0
		AND
		av_net_worth.id = accounts_av_net_worth_c.accounts_av_net_worthav_net_worth_idb
	)
LEFT JOIN av_net_worth_av_accounts_c 
	ON 
	(
		av_net_worth_av_accounts_c.deleted=0 
		AND 
		av_net_worth_av_accounts_c.av_net_worth_av_accountsav_net_worth_ida = accounts_av_net_worth_c.accounts_av_net_worthav_net_worth_idb
	)
LEFT JOIN av_accounts
	ON
	(
		av_accounts.deleted=0
		AND
		av_accounts.id = av_net_worth_av_accounts_c.av_net_worth_av_accountsav_accounts_idb
	)
WHERE accounts.deleted=0 AND accounts.id='{$this->bean->id}'
GROUP BY YEAR(av_net_worth.date_entered)
		";

		$sql_result = $this->bean->db->query($sql);
		$graph_data = array();
		while($graph_data_row = $this->bean->db->fetchByAssoc($sql_result))
		{
			$graph_data[$graph_data_row['year']] = $graph_data_row['worth'];
		}
		$theData = '<pre>'.print_r($graph_data, true).'</pre>';
		$theData = "<div style='margin:5px;padding:5px;'><div id='divForGraph'></div></div>";
		$this->dv->ss->assign('theGraph', $theData);
		
		$this->dv->defs['panels']['LBL_GRAPH'] = array(
		  array(
		  	array(
			  'hideLabel' => true,
			  'customCode' => '{$theGraph}',
			)
		  )
		);
		parent::display();
		$jsRow = '';
		//the javascript things for the graphs go here...
		echo "
		<script type='text/javascript' src='custom/include/js/jquery/jquery-1.7.2.js'></script>
		<script type='text/javascript' src='custom/include/js/jquery/jqBarGraph.1.1.js'></script>
		<script type='text/javascript'>
		arrayOfData = new Array(
		";
		foreach($graph_data as $year=>$worth)
		{
			$year = empty($year)? 0 : $year;
			$worth = empty($year)? 0 : $worth;
			echo $jsRow."\r\n";
			$jsRow = "[{$worth},'{$year}','#666666'],";
		}
		echo rtrim($jsRow, ',');
		echo "
		);
		$('#divForGraph').jqBarGraph({ data: arrayOfData });
		</script>";
		
	}
} 
?>

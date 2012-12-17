<?php
$module_name = 'av_Accounts';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" id="name" name="name" value="Account">',
        ),
      ),
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => true,
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'account_number',
            'comment' => '',
            'label' => 'LBL_ACCOUNT_NUMBER',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'ownership',
            'comment' => '',
            'label' => 'LBL_OWNERSHIP',
          ),
          1 => 
          array (
            'name' => 'Contacts_name',
            'label' => 'LBL_CONTACTS_NAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'av_Account_Types_name',
            'label' => 'LBL_AV_ACCOUNT_TYPES_NAME',
          ),
          1 => 
          array (
            'name' => 'ownership_type',
            'comment' => '',
            'label' => 'LBL_OWNERSHIP_TYPE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'custodian',
            'comment' => '',
            'label' => 'LBL_CUSTODIAN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'value_date',
            'comment' => '',
            'label' => 'LBL_VALUE_DATE',
          ),
          1 => 
          array (
            'name' => 'value',
            'label' => 'LBL_VALUE',
          ),
        ),
        5 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'team_name',
            'displayParams' => 
            array (
              'display' => true,
            ),
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
      'lbl_editview_panel3' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is_aum',
            'comment' => '',
            'label' => 'LBL_IS_AUM',
          ),
          1 => 
          array (
            'name' => 'is_rmd',
            'comment' => '',
            'label' => 'LBL_IS_RMD',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'is_discretionary',
            'comment' => '',
            'label' => 'LBL_IS_DISCRETIONARY',
          ),
          1 => 
          array (
            'name' => 'is_withdrawal_asset',
            'comment' => '',
            'label' => 'LBL_IS_WITHDRAWAL_ASSET',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'is_lpoa',
            'comment' => '',
            'label' => 'LBL_IS_LPOA',
          ),
          1 => 
          array (
            'name' => 'is_fpoa',
            'comment' => '',
            'label' => 'LBL_IS_FPOA',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'include_on_ips',
            'comment' => '',
            'label' => 'LBL_INCLUDE_ON_IPS',
          ),
          1 => 
          array (
            'name' => 'is_margin',
            'comment' => '',
            'label' => 'LBL_IS_MARGIN',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'is_billed',
            'comment' => '',
            'label' => 'LBL_IS_BILLED',
          ),
          1 => 
          array (
            'name' => 'reinvest_capital_gains',
            'comment' => '',
            'label' => 'LBL_REINVEST_CAPITAL_GAINS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'is_eft',
            'comment' => '',
            'label' => 'LBL_IS_EFT',
          ),
          1 => 
          array (
            'name' => 'is_checkwriting',
            'comment' => '',
            'label' => 'LBL_IS_CHECKWRITING',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'reinvest_dividends',
            'comment' => '',
            'label' => 'LBL_REINVEST_DIVIDENDS',
          ),
          1 => 
          array (
            'name' => 'reinvest_interest',
            'comment' => '',
            'label' => 'LBL_REINVEST_INTEREST',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'investment_policy',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_POLICY',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'policy_date',
            'comment' => '',
            'label' => 'LBL_POLICY_DATE',
          ),
          1 => 
          array (
            'name' => 'investment_objective',
            'comment' => '',
            'label' => 'LBL_INVESTMENT_OBJECTIVE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'risk_tolerance',
            'comment' => '',
            'label' => 'LBL_RISK_TOLERANCE',
          ),
          1 => 
          array (
            'name' => 'withdrawal_requirement',
            'comment' => '',
            'label' => 'LBL_WITHDRAWAL_REQUIREMENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'target_return',
            'comment' => '',
            'label' => 'LBL_TARGET_RETURN',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'allocation_stocks',
            'comment' => '',
            'label' => 'LBL_ALLOCATION_STOCKS',
          ),
          1 => 
          array (
            'name' => 'target_stocks',
            'comment' => '',
            'label' => 'LBL_TARGET_STOCKS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'allocation_bonds',
            'comment' => '',
            'label' => 'LBL_ALLOCATION_BONDS',
          ),
          1 => 
          array (
            'name' => 'target_bonds',
            'comment' => '',
            'label' => 'LBL_TARGET_BONDS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'allocation_cash',
            'comment' => '',
            'label' => 'LBL_ALLOCATION_CASH',
          ),
          1 => 
          array (
            'name' => 'target_cash',
            'comment' => '',
            'label' => 'LBL_TARGET_CASH',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cash_balance',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE',
          ),
          1 => 
          array (
            'name' => 'cash_balance_date',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_DATE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cash_balance_high',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_HIGH',
          ),
          1 => 
          array (
            'name' => 'cash_balance_high_percent',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_HIGH_PERCENT',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cash_balance_low',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_LOW',
          ),
          1 => 
          array (
            'name' => 'cash_balance_low_percent',
            'comment' => '',
            'label' => 'LBL_CASH_BALANCE_LOW_PERCENT',
          ),
        ),
      ),
      'lbl_editview_panel4' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'url',
            'comment' => '',
            'label' => 'LBL_URL',
          ),
          1 => 
          array (
            'name' => 'rep_name',
            'comment' => '',
            'label' => 'LBL_REP_NAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'username',
            'comment' => '',
            'label' => 'LBL_USERNAME',
          ),
          1 => 
          array (
            'name' => 'rep_phone',
            'comment' => '',
            'label' => 'LBL_REP_PHONE',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'password',
            'comment' => '',
            'label' => 'LBL_PASSWORD',
          ),
          1 => 
          array (
            'name' => 'rep_email',
            'comment' => '',
            'label' => 'LBL_REP_EMAIL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'pin',
            'comment' => '',
            'label' => 'LBL_PIN',
          ),
          1 => 
          array (
            'name' => 'rep_fax',
            'comment' => '',
            'label' => 'LBL_REP_FAX',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'routing_number',
            'comment' => '',
            'label' => 'LBL_ROUTING_NUMBER',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'master_account',
            'comment' => '',
            'label' => 'LBL_MASTER_ACCOUNT',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel5' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_policy_date',
            'comment' => '',
            'label' => 'LBL_BILLING_POLICY_DATE',
          ),
          1 => '',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'billed_amount',
            'comment' => '',
            'label' => 'LBL_BILLED_AMOUNT',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'billed_percent',
            'comment' => '',
            'label' => 'LBL_BILLED_PERCENT',
          ),
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'billing_policy',
            'comment' => '',
            'label' => 'LBL_BILLING_POLICY',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'billing_exceptions',
            'comment' => '',
            'label' => 'LBL_BILLING_EXCEPTIONS',
          ),
          1 => '',
        ),
      ),
      'lbl_editview_panel8' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'apr',
            'comment' => '',
            'label' => 'LBL_APR',
          ),
          1 => 
          array (
            'name' => 'apy',
            'comment' => '',
            'label' => 'LBL_APY',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'maturity_date',
            'comment' => '',
            'label' => 'LBL_MATURITY_DATE',
          ),
          1 => 
          array (
            'name' => 'pmi',
            'comment' => '',
            'label' => 'LBL_PMI',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'payment_frequency',
            'comment' => '',
            'label' => 'LBL_PAYMENT_FREQUENCY',
          ),
          1 => 
          array (
            'name' => 'payment',
            'comment' => '',
            'label' => 'LBL_PAYMENT',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'term',
            'comment' => '',
            'label' => 'LBL_TERM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'is_qualified_plan',
            'comment' => '',
            'label' => 'LBL_IS_QUALIFIED_PLAN',
          ),
          1 => 
          array (
            'name' => 'asset_class',
            'comment' => '',
            'label' => 'LBL_ASSET_CLASS',
          ),
        ),
      ),
      'lbl_editview_panel6' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'date_opened',
            'comment' => '',
            'label' => 'LBL_DATE_OPENED',
          ),
          1 => 
          array (
            'name' => 'initial_amount',
            'comment' => '',
            'label' => 'LBL_INITIAL_AMOUNT',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'source_of_funds',
            'comment' => '',
            'label' => 'LBL_SOURCE_OF_FUNDS',
          ),
          1 => '',
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'cost_basis_date',
            'comment' => '',
            'label' => 'LBL_COST_BASIS_DATE',
          ),
          1 => 
          array (
            'name' => 'cost_basis',
            'comment' => '',
            'label' => 'LBL_COST_BASIS',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'original_owner_name',
            'comment' => '',
            'label' => 'LBL_ORIGINAL_OWNER_NAME',
          ),
          1 => '',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'original_owner_birthdate',
            'comment' => '',
            'label' => 'LBL_ORIGINAL_OWNER_BIRTHDATE',
          ),
          1 => 
          array (
            'name' => 'original_owner_date_of_death',
            'comment' => '',
            'label' => 'LBL_ORIGINAL_OWNER_DATE_OF_DEATH',
          ),
        ),
      ),
      'lbl_editview_panel7' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'is_closed',
            'comment' => '',
            'label' => 'LBL_IS_CLOSED',
          ),
          1 => 
          array (
            'name' => 'date_closed',
            'comment' => '',
            'label' => 'LBL_DATE_CLOSED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'Users_name',
            'label' => 'LBL_USERS_NAME',
          ),
          1 => '',
        ),
      ),
    ),
  ),
);
?>

<?php

return [
	'dateformat' => ENV('NUSP_DATEFORMAT', 'dd-mm-yyyy'),
	'phpdateformat' => ENV('NUSP_PHPDATEFORMAT', 'd-m-Y'),
	'phpdatetimeformat' => ENV('NUSP_PHPDATETIMEFORMAT', 'd-m-Y H:i:s'),
    'subfolder' => ENV('NUSP_SUBFOLDER', ''),
    'useremail' => ENV('NUSP_USEREMAIL', true),
    'frontend' => ENV('NUSP_FRONTEND', false),
    'salt' => ENV('NUSP_SALT', '##SALT##__password__##SALT##'), //this_just_example_salt__password__to_make_strong    
    'theme' => ENV('NUSP_THEME', 'AdminLTE'),
    'company' => ENV('NUSP_COMPANY', 'Neighborhood Upgrading and Shelter Project Phase 2'),
    'companyaddress' => ENV('NUSP_COMPANY_ADDRESS', ''),
    'title' => ENV('NUSP_TITLE', '<b>NUSP 2 - 2015</b>'),
    'shorttitle' => ENV('NUSP_SHORTTITLE', '<b>NUSP</b>'),
    
];
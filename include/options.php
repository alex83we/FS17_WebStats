<?php
/**
 *
 * This file is part of the "FS17 Webstats" package.
 * Copyright (C) 2017-2018 John Hawk <john.hawk@gmx.net>
 *
 * "FS17 Webstats" is free software: you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "FS17 Webstats" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
if (! defined ( 'IN_NFMWS' )) {
	exit ();
}
$smarty->assign ( 'maps', getMaps () );
$smarty->assign ( 'languages', getLanguages () );
$smarty->assign ( 'styles', $styles );
$error = false;

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
	// var_dump ( $_POST );
	switch ($_POST ['submit']) {
		case 'options' :
			$options ['version'] = $cookieVersion;
			$options ['general'] ['reload'] = filter_var ( GetParam ( 'g_reload', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			$options ['general'] ['language'] = GetParam ( 'g_language', 'P', 'de' );
			$options ['general'] ['style'] = GetParam ( 'g_style', 'P', 'smallSlate' );
			$options ['storage'] ['sortByName'] = filter_var ( GetParam ( 's_sortByName', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			$options ['storage'] ['showVehicles'] = filter_var ( GetParam ( 's_showVehicles', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			$options ['storage'] ['onlyPallets'] = filter_var ( GetParam ( 's_onlyPallets', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			$options ['storage'] ['hideZero'] = filter_var ( GetParam ( 's_hideZero', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			$options ['storage'] ['3column'] = filter_var ( GetParam ( 's_3column', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			$options ['production'] ['sortByName'] = filter_var ( GetParam ( 'p_sortByName', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			$options ['production'] ['sortFullProducts'] = filter_var ( GetParam ( 'p_sortFullProducts', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			$options ['production'] ['showTooltip'] = filter_var ( GetParam ( 'p_showTooltip', 'P', 1 ), FILTER_VALIDATE_BOOLEAN );
			setcookie ( 'nfmarsch', json_encode ( $options ), time () + 31536000 );
			header ( "Refresh:0" );
			break;
		case 'password' :
			$adminpass1 = GetParam ( 'adminpass1', 'P' );
			if (! password_verify ( $adminpass1, $serverConfig [6] )) {
				$error .= '<div class="alert alert-danger"><strong>##ERROR##</strong> ##PASSWORD_ERROR##</div>';
			} else {
				@unlink('./config/server.conf'); 
				header ( "Refresh:0" );
			}			
			break;
	}
}
$smarty->assign ( 'options', $options );
$smarty->assign ( 'error', $error );
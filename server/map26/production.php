<?php
/**
 *
 * This file is part of the "NF Marsch Webstats" package.
 * Copyright (C) 2017  John Hawk <john.hawk@gmx.net>
 *
 * "NF Marsch Webstats" is free software: you can redistribute it and/or
 * modify it under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * "NF Marsch Webstats" is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Foobar.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
$mapVersion = '2.6';
$mapconfig = array (
		'FabrikScript_KraftFutterHerstellung' => array (
				'ProdPerHour' => 60000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Stroh' => array (
								'capacity' => 300000,
								'factor' => 0.3,
								'fillTypes' => 'straw',
								'showInStorage' => false 
						),
						'Silage' => array (
								'capacity' => 300000,
								'factor' => 0.4,
								'fillTypes' => 'silage',
								'showInStorage' => false 
						),
						'Gras' => array (
								'capacity' => 300000,
								'factor' => 0.3,
								'fillTypes' => 'grass_windrow dryGrass_windrow',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'Mischfutter' => array (
								'capacity' => 300000,
								'factor' => 1,
								'fillType' => 'forage',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_Fabrik' => array (
				'ProdPerHour' => 16000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Brennstoffe' => array (
								'capacity' => 75000,
								'factor' => 0.4,
								'fillTypes' => 'straw woodChips wool',
								'showInStorage' => false 
						),
						'Holz' => array (
								'capacity' => 400000,
								'factor' => 1,
								'fillTypes' => 'woodChips',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'woodChips' => array (
								'capacity' => 150000,
								'factor' => 0.9,
								'fillType' => 'woodChips',
								'showInStorage' => true 
						),
						'boardwood' => array (
								'capacity' => 8000,
								'factor' => 1,
								'fillType' => 'woodChips',
								'palettPlaces' => 10,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Holzhacker' => array (
				'ProdPerHour' => 50000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Holz' => array (
								'capacity' => 400000,
								'factor' => 1,
								'fillTypes' => 'woodChips',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'woodChips' => array (
								'capacity' => 150000,
								'factor' => 0.9,
								'fillType' => 'woodChips',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_compostMaster2k17' => array (
				'ProdPerHour' => 50000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'cm_inputWaste' => array (
								'capacity' => 200000,
								'factor' => 2,
								'fillTypes' => 'compost potato sugarBeet chaff silage grass grass_windrow dryGrass_windrow woodChips manure straw',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'cm_outputCompost' => array (
								'capacity' => 200000,
								'factor' => 1,
								'fillType' => 'compost',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_Oel_Raffinerie_Raps' => array (
				'ProdPerHour' => 20000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RS' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'rape sunflower',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 120000,
								'factor' => 0.15,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'palette_karton' => array (
								'capacity' => 100000,
								'factor' => 0.15,
								'fillTypes' => 'karton',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'RS_compost' => array (
								'capacity' => 500000,
								'factor' => 0.3,
								'fillType' => 'compost',
								'showInStorage' => true 
						),
						'RM_Output' => array (
								'capacity' => 300000,
								'factor' => 0.6,
								'fillType' => 'fuel',
								'showInStorage' => true 
						),
						'palettespeiseoel' => array (
								'capacity' => 5000,
								'factor' => 0.4,
								'fillType' => 'oel',
								'palettPlaces' => 21,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Klaerwerk' => array (
				'ProdPerHour' => 40000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RS1' => array (
								'capacity' => 600000,
								'factor' => 1,
								'fillTypes' => 'liquidManure digestate',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'RS_compost1' => array (
								'capacity' => 400000,
								'factor' => 0.26,
								'fillType' => 'compost',
								'showInStorage' => true 
						),
						'RM_Output2' => array (
								'capacity' => 400000,
								'factor' => 0.65,
								'fillType' => 'water',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_WeizenMehlfabrik' => array (
				'ProdPerHour' => 5000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RSwheat' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'wheat',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'mehlpalette' => array (
								'capacity' => 5000,
								'factor' => 0.5,
								'fillType' => 'mehl',
								'palettPlaces' => 8,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_GersteMehlfabrik' => array (
				'ProdPerHour' => 5000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RSbarley' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'barley',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'mehlpalette' => array (
								'capacity' => 5000,
								'factor' => 0.5,
								'fillType' => 'mehl',
								'palettPlaces' => 8,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_RoggenMehlfabrik' => array (
				'ProdPerHour' => 5000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RSrye' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'rye',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'mehlpalette' => array (
								'capacity' => 5000,
								'factor' => 0.5,
								'fillType' => 'mehl',
								'palettPlaces' => 8,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Zuckerfabrik' => array (
				'ProdPerHour' => 15000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RSzucker' => array (
								'capacity' => 2000000,
								'factor' => 1,
								'fillTypes' => 'sugarBeet',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'water',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'zuckerpalette' => array (
								'capacity' => 5000,
								'factor' => 0.5,
								'fillType' => 'zucker',
								'palettPlaces' => 21,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Backerei' => array (
				'ProdPerHour' => 5000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_mehl' => array (
								'capacity' => 120000,
								'factor' => 1,
								'fillTypes' => 'mehl',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 200000,
								'factor' => 1,
								'fillTypes' => 'water',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'brotpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'brot',
								'palettPlaces' => 8,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Paletten_Fabrik' => array (
				'ProdPerHour' => 20000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'boardwood' => array (
								'capacity' => 352000,
								'factor' => 0.5,
								'fillTypes' => 'woodChips',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'woodChips' => array (
								'capacity' => 150000,
								'factor' => 0.25,
								'fillType' => 'woodChips',
								'showInStorage' => true 
						),
						'emptypallet' => array (
								'capacity' => 7000,
								'factor' => 1,
								'fillType' => 'emptypallet',
								'palettPlaces' => 15,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_BrauereiKasten' => array (
				'ProdPerHour' => 5000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RSbarley' => array (
								'capacity' => 500000,
								'factor' => 0.8,
								'fillTypes' => 'barley',
								'showInStorage' => false 
						),
						'hops' => array (
								'capacity' => 500000,
								'factor' => 0.8,
								'fillTypes' => 'hops',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 100000,
								'factor' => 0.25,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 200000,
								'factor' => 0.4,
								'fillTypes' => 'water',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'bierpalettekasten' => array (
								'capacity' => 5000,
								'factor' => 0.5,
								'fillType' => 'beer',
								'palettPlaces' => 21,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_BrauereiFass' => array (
				'ProdPerHour' => 5000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RSwheat' => array (
								'capacity' => 500000,
								'factor' => 0.8,
								'fillTypes' => 'wheat',
								'showInStorage' => false 
						),
						'hops' => array (
								'capacity' => 500000,
								'factor' => 0.8,
								'fillTypes' => 'hops',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 100000,
								'factor' => 0.25,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 200000,
								'factor' => 0.4,
								'fillTypes' => 'water',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'bierpalettefass' => array (
								'capacity' => 5000,
								'factor' => 0.5,
								'fillType' => 'beerf',
								'palettPlaces' => 21,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Molkerei' => array (
				'ProdPerHour' => 5000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tip_RSmilk' => array (
								'capacity' => 300000,
								'factor' => 0.75,
								'fillTypes' => 'milk',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 200000,
								'factor' => 0.3,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 100000,
								'factor' => 0.25,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'palettepapier' => array (
								'capacity' => 100000,
								'factor' => 0.5,
								'fillTypes' => 'papier',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'palettebutter' => array (
								'capacity' => 5000,
								'factor' => 0.25,
								'fillType' => 'butter',
								'palettPlaces' => 16,
								'showInStorage' => false 
						),
						'palettemilch' => array (
								'capacity' => 5000,
								'factor' => 0.25,
								'fillType' => 'milch',
								'palettPlaces' => 16,
								'showInStorage' => false 
						),
						'palettesahne' => array (
								'capacity' => 5000,
								'factor' => 0.25,
								'fillType' => 'sahne',
								'palettPlaces' => 16,
								'showInStorage' => false 
						),
						'palettequark' => array (
								'capacity' => 5000,
								'factor' => 0.25,
								'fillType' => 'quark',
								'palettPlaces' => 16,
								'showInStorage' => false 
						),
						'paletteyogurt' => array (
								'capacity' => 5000,
								'factor' => 0.25,
								'fillType' => 'yogurt',
								'palettPlaces' => 16,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Zellstoff_Fabrik' => array (
				'ProdPerHour' => 12500,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Hackschnitzel' => array (
								'capacity' => 500000,
								'factor' => 0.5,
								'fillTypes' => 'woodChips',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 200000,
								'factor' => 0.3,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 150000,
								'factor' => 0.25,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'palettepapier' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'papier',
								'palettPlaces' => 15,
								'showInStorage' => false 
						),
						'palette_karton' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'karton',
								'palettPlaces' => 15,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_obst_apfel' => array (
				'ProdPerHour' => 600,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Compost' => array (
								'capacity' => 100000,
								'factor' => 0.3,
								'fillTypes' => 'compost',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'palette_karton' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'karton',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'Apfelpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'apfel',
								'palettPlaces' => 15,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_obst_birne' => array (
				'ProdPerHour' => 600,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Compost' => array (
								'capacity' => 100000,
								'factor' => 0.3,
								'fillTypes' => 'compost',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'palette_karton' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'karton',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'Birnenpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'birne',
								'palettPlaces' => 15,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_obst_kirsche' => array (
				'ProdPerHour' => 600,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Compost' => array (
								'capacity' => 100000,
								'factor' => 0.3,
								'fillTypes' => 'compost',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'palette_karton' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'karton',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'Kirschpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'kirsche',
								'palettPlaces' => 15,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_obst_pflaume' => array (
				'ProdPerHour' => 600,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Compost' => array (
								'capacity' => 100000,
								'factor' => 0.3,
								'fillTypes' => 'compost',
								'showInStorage' => false 
						),
						'Tip_RSwater' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'palette_karton' => array (
								'capacity' => 100000,
								'factor' => 0.2,
								'fillTypes' => 'karton',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'Pflaumenpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'pflaume',
								'palettPlaces' => 15,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Kartoffelfabrik' => array (
				'ProdPerHour' => 10000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'washedPotato' => array (
								'capacity' => 600000,
								'factor' => 0.6,
								'fillTypes' => 'washedPotato',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 280000,
								'factor' => 0.25,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'palette_karton' => array (
								'capacity' => 175000,
								'factor' => 0.15,
								'fillTypes' => 'karton',
								'showInStorage' => false 
						),
						'palettespeiseoel' => array (
								'capacity' => 225000,
								'factor' => 0.15,
								'fillTypes' => 'oel',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'palettechips' => array (
								'capacity' => 5000,
								'factor' => 0.35,
								'fillType' => 'chips',
								'palettPlaces' => 15,
								'showInStorage' => false 
						),
						'palettepommes' => array (
								'capacity' => 5000,
								'factor' => 0.35,
								'fillType' => 'pommes',
								'palettPlaces' => 15,
								'showInStorage' => false 
						),
						'palettekartoffelsack' => array (
								'capacity' => 5000,
								'factor' => 0.35,
								'fillType' => 'kartoffelsack',
								'palettPlaces' => 15,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Papier' => array (
				'ProdPerHour' => 50000000,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettepapier' => array (
								'capacity' => 340000,
								'factor' => 1,
								'fillTypes' => 'papier',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettepapier' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'papier',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Karton' => array (
				'ProdPerHour' => 50000000,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palette_karton' => array (
								'capacity' => 330000,
								'factor' => 1,
								'fillTypes' => 'karton',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palette_karton' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'karton',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Leerpaletten' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'emptypallet' => array (
								'capacity' => 335000,
								'factor' => 1,
								'fillTypes' => 'emptypallet',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'emptypallet' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'emptypallet',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Apfel' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'Apfelpalette' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'apfel',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'Apfelpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'apfel',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Birne' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'Birnenpalette' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'birne',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'Birnenpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'birne',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Kirsche' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'Kirschpalette' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'kirsche',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'Kirschpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'kirsche',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Pflaume' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'Pflaumenpalette' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'pflaume',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'Pflaumenpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'pflaume',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Bierkasten' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'bierpalettekasten' => array (
								'capacity' => 465000,
								'factor' => 1,
								'fillTypes' => 'beer',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'bierpalettekasten' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'beer',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Bierfass' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'bierpalettefass' => array (
								'capacity' => 465000,
								'factor' => 1,
								'fillTypes' => 'beerf',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'bierpalettefass' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'beerf',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Zucker' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'zuckerpalette' => array (
								'capacity' => 355000,
								'factor' => 1,
								'fillTypes' => 'zucker',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'zuckerpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'zucker',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Mehl' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'mehlpalette' => array (
								'capacity' => 355000,
								'factor' => 1,
								'fillTypes' => 'mehl',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'mehlpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'mehl',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Milch' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettemilch' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'milch',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettemilch' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'milch',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Butter' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettebutter' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'butter',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettebutter' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'butter',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Quark' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettequark' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'quark',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettequark' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'quark',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Sahne' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettesahne' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'sahne',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettesahne' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'sahne',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Yogurt' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'paletteyogurt' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'yogurt',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'paletteyogurt' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'yogurt',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Brot' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'brotpalette' => array (
								'capacity' => 480000,
								'factor' => 1,
								'fillTypes' => 'brot',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'brotpalette' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'brot',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_kartoffelsack' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettekartoffelsack' => array (
								'capacity' => 355000,
								'factor' => 1,
								'fillTypes' => 'kartoffelsack',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettekartoffelsack' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'kartoffelsack',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Chips' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettechips' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'chips',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettechips' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'chips',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_pommes' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettepommes' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'pommes',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettepommes' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'pommes',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_washedPotato' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'washedPotato' => array (
								'capacity' => 660000,
								'factor' => 1,
								'fillTypes' => 'washedPotato',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'washedPotato' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'washedPotato',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_oel' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'palettespeiseoel' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'oel',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'palettespeiseoel' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'oel',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Wurst' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'Wurst' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'sausage',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'Wurst' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'sausage',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Lager_Fleisch' => array (
				'ProdPerHour' => 14400001,
				'showInProduction' => false,
				'rawMaterial' => array (
						'Fleisch' => array (
								'capacity' => 625000,
								'factor' => 1,
								'fillTypes' => 'meat',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'Fleisch' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'meat',
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Duenger_Prod' => array (
				'ProdPerHour' => 10000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'manure' => array (
								'capacity' => 100000,
								'factor' => 1,
								'fillTypes' => 'manure',
								'showInStorage' => false 
						),
						'liquidManure' => array (
								'capacity' => 100000,
								'factor' => 1,
								'fillTypes' => 'liquidManure',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'fertilizer' => array (
								'capacity' => 100000,
								'factor' => 1,
								'fillType' => 'fertilizer',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_Saat_Prod' => array (
				'ProdPerHour' => 10000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'grain' => array (
								'capacity' => 100000,
								'factor' => 1,
								'fillTypes' => 'wheat maize barley rape',
								'showInStorage' => false 
						),
						'fertilizer' => array (
								'capacity' => 100000,
								'factor' => 1,
								'fillTypes' => 'fertilizer',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'seeds' => array (
								'capacity' => 100000,
								'factor' => 1,
								'fillType' => 'seeds',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_Fertilizer' => array (
				'ProdPerHour' => 2147483647,
				'showInProduction' => false,
				'rawMaterial' => array (
						'FS_fertilizer' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'fertilizer',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'FS_fertilizer' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillType' => 'fertilizer',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_Saatgut' => array (
				'ProdPerHour' => 2147483647,
				'showInProduction' => false,
				'rawMaterial' => array (
						'FS_Seeds' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'seeds',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'FS_Seeds' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillType' => 'seeds',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_Schweinefutter' => array (
				'ProdPerHour' => 2147483647,
				'showInProduction' => false,
				'rawMaterial' => array (
						'Schweinefutter' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'pigFood',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'Schweinefutter' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillType' => 'pigFood',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_kartoffellager' => array (
				'ProdPerHour' => 1000000000,
				'showInProduction' => false,
				'rawMaterial' => array (
						'potato' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'potato',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'potato' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillType' => 'potato',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_kartoffellager2' => array (
				'ProdPerHour' => 1000000000,
				'showInProduction' => false,
				'rawMaterial' => array (
						'potato' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillTypes' => 'potato',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'potato' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillType' => 'potato',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_zuckerrueben' => array (
				'ProdPerHour' => 1000000000,
				'showInProduction' => false,
				'rawMaterial' => array (
						'sugarBeet' => array (
								'capacity' => 600000,
								'factor' => 1,
								'fillTypes' => 'sugarBeet',
								'showInStorage' => true 
						) 
				),
				'product' => array (
						'sugarBeet' => array (
								'capacity' => 500000,
								'factor' => 1,
								'fillType' => 'sugarBeet',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_Schweinefutterstation' => array (
				'ProdPerHour' => 30000,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Getreide' => array (
								'capacity' => 100000,
								'factor' => 0.6,
								'fillTypes' => 'wheat barley maize oat rye',
								'showInStorage' => false 
						),
						'Proteine' => array (
								'capacity' => 100000,
								'factor' => 0.3,
								'fillTypes' => 'rape sunflower soybean',
								'showInStorage' => false 
						),
						'Erdfruechten' => array (
								'capacity' => 100000,
								'factor' => 0.1,
								'fillTypes' => 'potato sugarBeet',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'Schweinefutter' => array (
								'capacity' => 250000,
								'factor' => 0.935,
								'fillType' => 'pigFood',
								'showInStorage' => true 
						) 
				) 
		),
		'FabrikScript_potatoWasher' => array (
				'ProdPerHour' => 7500,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Kartoffeln' => array (
								'capacity' => 75000,
								'factor' => 1,
								'fillTypes' => 'potato',
								'showInStorage' => false 
						),
						'Wasser' => array (
								'capacity' => 25000,
								'factor' => 0.01,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'Diesel' => array (
								'capacity' => 5000,
								'factor' => 0.01,
								'fillTypes' => 'fuel',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'washedPotato' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'washedPotato',
								'palettPlaces' => 6,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_potatoWasher2' => array (
				'ProdPerHour' => 7500,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Kartoffeln' => array (
								'capacity' => 75000,
								'factor' => 1,
								'fillTypes' => 'potato',
								'showInStorage' => false 
						),
						'Wasser' => array (
								'capacity' => 25000,
								'factor' => 0.01,
								'fillTypes' => 'water',
								'showInStorage' => false 
						),
						'Diesel' => array (
								'capacity' => 5000,
								'factor' => 0.01,
								'fillTypes' => 'fuel',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'washedPotato' => array (
								'capacity' => 5000,
								'factor' => 1,
								'fillType' => 'washedPotato',
								'palettPlaces' => 6,
								'showInStorage' => false 
						) 
				) 
		),
		'FabrikScript_Schlachterei' => array (
				'ProdPerHour' => 50,
				'showInProduction' => true,
				'rawMaterial' => array (
						'Tier_Anlieferung' => array (
								'capacity' => 400,
								'factor' => 0.4,
								'fillTypes' => 'pig cow sheep',
								'showInStorage' => false 
						),
						'emptypallet' => array (
								'capacity' => 260000,
								'factor' => 3,
								'fillTypes' => 'emptypallet',
								'showInStorage' => false 
						),
						'palette_karton' => array (
								'capacity' => 170000,
								'factor' => 3,
								'fillTypes' => 'karton',
								'showInStorage' => false 
						) 
				),
				'product' => array (
						'Wurst' => array (
								'capacity' => 5000,
								'factor' => 200,
								'fillType' => 'sausage',
								'palettPlaces' => 15,
								'showInStorage' => false 
						),
						'Fleisch' => array (
								'capacity' => 5000,
								'factor' => 200,
								'fillType' => 'meat',
								'palettPlaces' => 15,
								'showInStorage' => false 
						) 
				) 
		) 
);

function getLocation($position) {
	list ( $posx, $posy, $posz ) = explode ( ' ', $position );
	if ($posx < - 1071 || $posx > 1071 || $posy < 0 || $posy > 255 || $posz < - 1071 || $posz > 1071)
		return 'outOfMap';
	if ($posx > - 970.0 && $posx < - 967.0 && $posz > - 829.0 && $posz < - 814.0)
		return 'FabrikScript_Zellstoff_Fabrik';
	if ($posx > - 970.0 && $posx < - 967.0 && $posz > - 852.0 && $posz < - 837.0)
		return 'FabrikScript_Zellstoff_Fabrik';
	if ($posx > - 942.1 && $posx < - 939.9 && $posz > - 35.8 && $posz < - 19.6)
		return 'FabrikScript_Backerei';
	if ($posx > - 578.2 && $posx < - 568.0 && $posz > 264.0 && $posz < 272.0)
		return 'FabrikScript_Molkerei';
	if ($posx > - 566.0 && $posx < - 556.0 && $posz > 264.0 && $posz < 272.0)
		return 'FabrikScript_Molkerei';
	if ($posx > - 553.8 && $posx < - 543.8 && $posz > 264.0 && $posz < 272.0)
		return 'FabrikScript_Molkerei';
	if ($posx > - 542.4 && $posx < - 531.4 && $posz > 264.0 && $posz < 272.0)
		return 'FabrikScript_Molkerei';
	if ($posx > - 529.4 && $posx < - 519.4 && $posz > 264.0 && $posz < 272.0)
		return 'FabrikScript_Molkerei';
	if ($posx > - 945.5 && $posx < - 935.3 && $posz > 417.6 && $posz < 427.7)
		return 'FabrikScript_BrauereiKasten';
	if ($posx > - 923.3 && $posx < - 913.0 && $posz > 457.0 && $posz < 467.3)
		return 'FabrikScript_BrauereiFass';
	if ($posx > - 932.1 && $posx < - 921.8 && $posz > 585.7 && $posz < 595.9)
		return 'FabrikScript_Oel_Raffinerie_Raps';
	if ($posx > - 772.2 && $posx < - 710.0 && $posz > 765.5 && $posz < 767.8)
		return 'FabrikScript_potatoWasher';
	if ($posx > - 721.4 && $posx < - 709.1 && $posz > 751.5 && $posz < 753.9)
		return 'FabrikScript_potatoWasher2';
	if ($posx > - 713.2 && $posx < - 709.0 && $posz > 807.4 && $posz < 823.5)
		return 'FabrikScript_Kartoffelfabrik';
	if ($posx > - 695.1 && $posx < - 690.8 && $posz > 807.4 && $posz < 823.6)
		return 'FabrikScript_Kartoffelfabrik';
	if ($posx > - 675.9 && $posx < - 671.7 && $posz > 807.4 && $posz < 823.6)
		return 'FabrikScript_Kartoffelfabrik';
	if ($posx > - 853.8 && $posx < - 852.2 && $posz > - 98.8 && $posz < - 82.7)
		return 'FabrikScript_RoggenMehlfabrik';
	if ($posx > - 845.7 && $posx < - 844.2 && $posz > - 98.8 && $posz < - 82.7)
		return 'FabrikScript_GersteMehlfabrik';
	if ($posx > - 837.7 && $posx < - 836.2 && $posz > - 98.8 && $posz < - 82.7)
		return 'FabrikScript_WeizenMehlfabrik';
	if ($posx > 578.5 && $posx < 592.7 && $posz > - 25.3 && $posz < - 23.4)
		return 'Schafweide';
	if ($posx > 866.4 && $posx < 882.6 && $posz > 618.5 && $posz < 622.7)
		return 'FabrikScript_Paletten_Fabrik';
	if ($posx > 960.1 && $posx < 961.7 && $posz > 663.1 && $posz < 683.3)
		return 'FabrikScript_Fabrik';
	if ($posx > 877.6 && $posx < 893.8 && $posz > - 880.3 && $posz < - 876.1)
		return 'FabrikScript_obst_apfel';
	if ($posx > 877.5 && $posx < 893.8 && $posz > - 893.1 && $posz < - 888.9)
		return 'FabrikScript_obst_birne';
	if ($posx > 877.6 && $posx < 893.8 && $posz > - 906.3 && $posz < - 902.0)
		return 'FabrikScript_obst_kirsche';
	if ($posx > 877.6 && $posx < 893.8 && $posz > - 918.4 && $posz < - 914.2)
		return 'FabrikScript_obst_pflaume';
	if ($posx > - 618.0 && $posx < - 601.8 && $posz > - 118.4 && $posz < - 114.2)
		return 'FabrikScript_Schlachterei';
	if ($posx > - 618.0 && $posx < - 601.8 && $posz > - 113.0 && $posz < - 108.8)
		return 'FabrikScript_Schlachterei';
	if ($posx > - 774.6 && $posx < - 752.4 && $posz > - 929.4 && $posz < - 925.2)
		return 'FabrikScript_Zuckerfabrik';
	return 'onMap';
}
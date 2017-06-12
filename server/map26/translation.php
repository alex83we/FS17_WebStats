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
if (! defined ( 'IN_NFMWS' )) {
	exit ();
}

if (empty ( $lang ) || ! is_array ( $lang )) {
	$lang = array ();
}

$lang = array_merge ( $lang, array (
		'cm_inputWaste' => 'Abfall',
		'Apfelpalette' => 'Apfel',
		'palette_apfel' => 'Apfel',
		'bierpalettefass' => 'Bierfass',
		'bierpalettekasten' => 'Bierkasten',
		'Birnenpalette' => 'Birnen',
		'palette_birne' => 'Birnen',
		'Brennstoffe' => 'Brennstoffe',
		'boardPallet' => 'Bretter',
		'boardwood' => 'Bretter',
		'brotpalette' => 'Brot',
		'palettebrod' => 'Brot',
		'palettebutter' => 'Butter',
		'palettechips' => 'Chips',
		'palette_chips' => 'Chips',
		'RM_Output' => 'Diesel',
		'Diesel' => 'Diesel',
		'fuel' => 'Diesel',
		'bigBagContainerFertilizer' => 'Dünger',
		'FS_fertilizer' => 'Dünger',
		'fertilizer' => 'Dünger',
		'Erdfruechten' => 'Erdfrüchte',
		'palette_fleisch' => 'Fleisch',
		'Fleisch' => 'Fleisch',
		'liquidFertilizer' => 'Flüssigdünger',
		'fertilizerTank' => 'Flüssigdünger',
		'Tip_RS1' => 'Gärreste oder Gülle',
		'Tip_RSbarley' => 'Gerste',
		'barley' => 'Gerste',
		'grain' => 'Getreide',
		'Getreide' => 'Getreide',
		'washedPotato' => 'Gewaschene Kartoffeln',
		'palette_washedPotato' => 'Gewaschene Kartoffeln',
		'grass_windrow' => 'Gras',
		'baleGrass240' => 'Gras',
		'Gras' => 'Gras',
		'liquidManure' => 'Gülle',
		'woodChips' => 'Hackschnitzel',
		'Hackschnitzel' => 'Hackschnitzel',
		'chaff' => 'Häckselgut',
		'Holz' => 'Holzstämme',
		'oat' => 'Hafer',
		'dryGrass_windrow' => 'Heu',
		'baleHay240' => 'Heu',
		'hops' => 'Hopfen',
		'paletteyogurt' => 'Joghurt',
		'palette_karton' => 'Karton',
		'potato' => 'Kartoffeln',
		'Kartoffeln' => 'Kartoffeln',
		'palettekartoffelsack' => 'Kartoffelsack',
		'palette_kartoffeln' => 'Kartoffelsack',
		'Kirschpalette' => 'Kirschen',
		'palette_kirsche' => 'Kirschen',
		'compost' => 'Kompost',
		'RS_compost1' => 'Kompost',
		'cm_outputCompost' => 'Kompost',
		'RS_compost' => 'Kompost',
		'Compost' => 'Kompost',
		'maize' => 'Körnermais',
		'emptypallet' => 'Leere Paletten',
		'palletPallet' => 'Leere Paletten',
		'mehlpalette' => 'Mehl',
		'palettemehlgerste1' => 'Mehl',
		'palettemehlroggen1' => 'Mehl',
		'palettemehlweizen1' => 'Mehl',
		'Tip_mehl' => 'Mehl',
		'Tip_RSmilk' => 'Milch',
		'milk' => 'Milch',
		'forage' => 'Mischfutter',
		'Mischfutter' => 'Mischfutter',
		'manure' => 'Mist',
		'palettepapier' => 'Papier',
		'palletPoplar' => 'Pappelsetzlinge',
		'Pflaumenpalette' => 'Pflaumen',
		'palette_pflaume' => 'Pflaumen',
		'Proteine' => 'Proteeine',
		'palettepommes' => 'Pommes',
		'palette_pommes' => 'Pommes',
		'palettequark' => 'Quark',
		'rape' => 'Raps',
		'Tip_RS' => 'Raps oder Sonnenblumen',
		'rye' => 'Roggen',
		'Tip_RSrye' => 'Roggen',
		'FS_Seeds' => 'Saatgut',
		'seeds' => 'Saatgut',
		'bigBagContainerSeeds' => 'Saatgut',
		'palettesahne' => 'Sahne',
		'bigBagContainerPigFood' => 'Schweinefutter',
		'pigFood' => 'Schweinefutter',
		'Schweinefutter' => 'Schweinefutter',
		'treeSaplings' => 'Setzlinge',
		'treeSaplingPallet' => 'Setzlinge',
		'Silage' => 'Silage',
		'silage' => 'Silage',
		'soybean' => 'Sojabohnen',
		'sunflower' => 'Sonnenblumen',
		'palettespeiseoel' => 'Speiseöl',
		'palette_oel' => 'Speiseöl',
		'straw' => 'Stroh',
		'Stroh' => 'Stroh',
		'baleStraw240' => 'Stroh',
		'Tier_Anlieferung' => 'Vieh',
		'palettemilch' => 'Vollmilch',
		'RM_Output2' => 'Wasser',
		'Tip_RSwater' => 'Wasser',
		'Wasser' => 'Wasser',
		'water' => 'Wasser',
		'wheat' => 'Weizen',
		'Tip_RSwheat' => 'Weizen',
		'woolPallet' => 'Wolle',
		'palette_wurst' => 'Wurst',
		'Wurst' => 'Wurst',
		'palettezucker' => 'Zucker',
		'zuckerpalette' => 'Zucker',
		'sugarBeet' => 'Zuckerrüben',
		'Tip_RSzucker' => 'Zuckerrüben' 
) );

$lang = array_merge ( $lang, array (
		'FabrikScript_Backerei' => 'Bäckerei',
		'FabrikScript_BrauereiFass' => 'Brauerei Fass',
		'FabrikScript_BrauereiKasten' => 'Brauerei Kasten',
		'FabrikScript_compostMaster2k17' => 'compostMaster 2k17',
		'FabrikScript_Duenger_Prod' => 'Düngerproduktion',
		'FabrikScript_Fabrik' => 'Sägewerk',
		'FabrikScript_GersteMehlfabrik' => 'Mehlfabrik (Gerste)',
		'FabrikScript_Holzhacker' => 'Holzhacker',
		'FabrikScript_Kartoffelfabrik' => 'Kartoffelfabrik',
		'FabrikScript_Klaerwerk' => 'Klärwerk',
		'FabrikScript_KraftFutterHerstellung' => 'Futterfabrik',
		'FabrikScript_Molkerei' => 'Molkerei',
		'FabrikScript_obst_apfel' => 'Obstfarm (Äpfel)',
		'FabrikScript_obst_birne' => 'Obstfarm (Birnen)',
		'FabrikScript_obst_kirsche' => 'Obstfarm (Kirschen)',
		'FabrikScript_obst_pflaume' => 'Obstfarm (Pflaumen)',
		'FabrikScript_Oel_Raffinerie_Raps' => 'Biodiesel Raffinerie',
		'FabrikScript_Paletten_Fabrik' => 'Palettenwerk',
		'FabrikScript_potatoWasher' => 'Kartoffelwaschanlage 1',
		'FabrikScript_potatoWasher2' => 'Kartoffelwaschanlage 2',
		'FabrikScript_RoggenMehlfabrik' => 'Mehlfabrik (Roggen)',
		'FabrikScript_Saat_Prod' => 'Saatgutproduktion',
		'FabrikScript_Schweinefutterstation' => 'Schweinefutterstation',
		'FabrikScript_Schweinefutter' => 'Schweinefutterlager',
		'FabrikScript_WeizenMehlfabrik' => 'Mehlfabrik (Weizen)',
		'FabrikScript_Zellstoff_Fabrik' => 'Zellstofffabrik',
		'FabrikScript_Zuckerfabrik' => 'Zuckerfabrik',
		'FabrikScript_Saatgut' => 'Saatgutlager',
		'FabrikScript_zuckerrueben' => 'Zuckerrübenlager (Hof)',
		'FabrikScript_kartoffellager' => 'Lagerhalle (Hof)',
		'FabrikScript_kartoffellager2' => 'Lagerhalle (Waschanlage)',
		'FabrikScript_Fertilizer' => 'Düngerlager',
		'FabrikScript_Lager_Papier' => 'Palettenlager',
		'FabrikScript_Lager_Karton' => 'Palettenlager',
		'FabrikScript_Lager_Leerpaletten' => 'Palettenlager',
		'FabrikScript_Lager_Apfel' => 'Palettenlager',
		'FabrikScript_Lager_Birne' => 'Palettenlager',
		'FabrikScript_Lager_Kirsche' => 'Palettenlager',
		'FabrikScript_Lager_Pflaume' => 'Palettenlager',
		'FabrikScript_Lager_Bierkasten' => 'Palettenlager',
		'FabrikScript_Lager_Bierfass' => 'Palettenlager',
		'FabrikScript_Lager_Zucker' => 'Palettenlager',
		'FabrikScript_Lager_Mehl' => 'Palettenlager',
		'FabrikScript_Lager_Milch' => 'Palettenlager',
		'FabrikScript_Lager_Butter' => 'Palettenlager',
		'FabrikScript_Lager_Quark' => 'Palettenlager',
		'FabrikScript_Lager_Sahne' => 'Palettenlager',
		'FabrikScript_Lager_Yogurt' => 'Palettenlager',
		'FabrikScript_Lager_Brot' => 'Palettenlager',
		'FabrikScript_Lager_kartoffelsack' => 'Palettenlager',
		'FabrikScript_Lager_Chips' => 'Palettenlager',
		'FabrikScript_Lager_pommes' => 'Palettenlager',
		'FabrikScript_Lager_washedPotato' => 'Palettenlager',
		'FabrikScript_Lager_oel' => 'Palettenlager',
		'FabrikScript_Lager_Wurst' => 'Palettenlager',
		'FabrikScript_Lager_Fleisch' => 'Palettenlager',
		'Storage_storage1' => 'Hofsilo',
		'onMap' => 'Landschaft',
		'Schafweide' => 'Schafweide',
		'HayLoftPlaceable' => 'Wurzelfruchtlager (platzierbar)',
		'FabrikScript_Schlachterei' => 'Schlachter',
		'Animals_cow' => 'Kuhstall',
		'Animals_pig' => 'Schweinestall',
		'Animals_sheep' => 'Schafweide',
		'fuelStation_Tankstelle_Raffinerie' => 'Tankstelle Raffinerie',
		'fuelStation_Hoftankstelle' => ' Hoftankstelle',
		'fuelStation_Tankstelle_BGA_Nord' => 'Tankstelle BGA Nord',
		'fuelStation_Tankstelle_BGA_Sued' => 'Tankstelle BGA süd' 
) );

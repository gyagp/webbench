<!DOCTYPE html>
<?php

/**
 * Template HTML for installer
 *
 * @version 2.0
 * @package Configuration
 * @author Jouni Tuovinen <jouni.tuovinen@rightware.com>
 * @copyright 2012 Rightware Oy
 **/

print <<<HEADER
<html>
    <head>
        <meta    charset="utf-8">
        <meta    name="viewport"    content="width=1024">
        <title>Browsermark - Install</title>
        <link href="/general.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="/install/install.js"></script>
    </head>

    <body>
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- Header -->
            <div id="header-wrapper">
                <div id="header">
                    <!-- Logo -->
                    <div id="logo">
                        <img src="/images/logo.png" alt="Rightware" />
                    </div>
                    <!-- /Logo -->
                    <!-- Versioning -->
                    <div id="version">
                        <span>2.1</span>
                    </div>
                    <!-- /Versioning -->
                    <!-- Brand -->
                    <div id="brand">
                        <img src="/images/brand.png" alt="Browsermark" />
                    </div>
                    <!-- /Brand -->
                    <!-- Some -->
                    <div id="header-some">
                    </div>
                    <!-- /Some -->
                </div>
            </div>
            <!-- /Header -->
            <!-- Exposure -->
            <div id="exposure">
                <!-- Content Wrapper -->
                <div id="content-wrapper">
                    <!-- Content -->
                    <div id="content">
                        <h2>Installation</h2>
                        <h3>{$sSubTitle}</h3>
                        <p>
{$sCheckStrings}
                        </p>

HEADER;

if ($bContinue)
{
    $aUseDB = array(
        "yes" => ($bDatabase ? '<input type="radio" name="use_db" value="1"' . $aValues['use_db_1'] . '> Yes' : ''),
        "no" => ($bDatabase ? '<input type="radio" name="use_db" value="0"' . $aValues['use_db_0'] . '> No' : '<input type="radio" name="use_db" value="0" checked="checked"> No'),
    );
    print <<<FORM_START
                        <h3>Define configuration settings</h3>
                        <p><i>Hover over <a href="#">?</a> for more info
                            <br><span class="inverse-color">*</span> Required</i></p>
                        <form method="post" action="{$_SERVER['REQUEST_URI']}">
                            <h4>General settings</h4>
                            <div>
                                <label for="mode">
                                    Mode
                                    <a href="#" title="Full mode list automatically all details from current benchmark, public mode shows these details only for logged in users">?</a>:
                                </label>
                                <input type="radio" name="mode" value="1"{$aValues['mode_1']}> Full mode
                                <input type="radio" name="mode" value="0"{$aValues['mode_0']}> Public mode
                            </div>
                            <div>
                                <label for="debug">
                                    Debug
                                    <a href="#" title="Debug mode output details to console.log and requires clicking continue button after each benchmark">?</a>:
                                </label>
                                <input type="radio" name="debug" value="1"{$aValues['debug_1']}> On
                                <input type="radio" name="debug" value="0"{$aValues['debug_0']}> Off
                            </div>
                            <div>
                                <label for="salt">Salt
                                    <a href="#" title="Salt is used when encrypting certain sensitive data, like passwords. Leave empty if you wish to Browsermark generate salt for you">?</a>:
                                </label>
                                <input type="text" name="salt" value="{$aValues['salt']}">
                            </div>
                            <div>
                                <label for="timezone">Timezone
                                    <a href="#" title="Timezone is needed to synchronize database times to your local time. Please use format Continent/Area and only values autocomplete suggest">?</a>:
                                </label>
                                <input type="text" name="timezone" value="{$aValues['timezone']}" list="timezone_list">
                                <datalist id="timezone_list">
                                    <option value="Africa/Abidjan">
                                    <option value="Africa/Accra">
                                    <option value="Africa/Addis_Ababa">
                                    <option value="Africa/Algiers">
                                    <option value="Africa/Asmara">
                                    <option value="Africa/Asmera">
                                    <option value="Africa/Bamako">
                                    <option value="Africa/Bangui">
                                    <option value="Africa/Banjul">
                                    <option value="Africa/Bissau">
                                    <option value="Africa/Blantyre">
                                    <option value="Africa/Brazzaville">
                                    <option value="Africa/Bujumbura">
                                    <option value="Africa/Cairo">
                                    <option value="Africa/Casablanca">
                                    <option value="Africa/Ceuta">
                                    <option value="Africa/Conakry">
                                    <option value="Africa/Dakar">
                                    <option value="Africa/Dar_es_Salaam">
                                    <option value="Africa/Djibouti">
                                    <option value="Africa/Douala">
                                    <option value="Africa/El_Aaiun">
                                    <option value="Africa/Freetown">
                                    <option value="Africa/Gaborone">
                                    <option value="Africa/Harare">
                                    <option value="Africa/Johannesburg">
                                    <option value="Africa/Juba">
                                    <option value="Africa/Kampala">
                                    <option value="Africa/Khartoum">
                                    <option value="Africa/Kigali">
                                    <option value="Africa/Kinshasa">
                                    <option value="Africa/Lagos">
                                    <option value="Africa/Libreville">
                                    <option value="Africa/Lome">
                                    <option value="Africa/Luanda">
                                    <option value="Africa/Lubumbashi">
                                    <option value="Africa/Lusaka">
                                    <option value="Africa/Malabo">
                                    <option value="Africa/Maputo">
                                    <option value="Africa/Maseru">
                                    <option value="Africa/Mbabane">
                                    <option value="Africa/Mogadishu">
                                    <option value="Africa/Monrovia">
                                    <option value="Africa/Nairobi">
                                    <option value="Africa/Ndjamena">
                                    <option value="Africa/Niamey">
                                    <option value="Africa/Nouakchott">
                                    <option value="Africa/Ouagadougou">
                                    <option value="Africa/Porto-Novo">
                                    <option value="Africa/Sao_Tome">
                                    <option value="Africa/Timbuktu">
                                    <option value="Africa/Tripoli">
                                    <option value="Africa/Tunis">
                                    <option value="Africa/Windhoek">
                                    <option value="America/Adak">
                                    <option value="America/Anchorage">
                                    <option value="America/Anguilla">
                                    <option value="America/Antigua">
                                    <option value="America/Araguaina">
                                    <option value="America/Argentina/Buenos_Aires">
                                    <option value="America/Argentina/Catamarca">
                                    <option value="America/Argentina/ComodRivadavia">
                                    <option value="America/Argentina/Cordoba">
                                    <option value="America/Argentina/Jujuy">
                                    <option value="America/Argentina/La_Rioja">
                                    <option value="America/Argentina/Mendoza">
                                    <option value="America/Argentina/Rio_Gallegos">
                                    <option value="America/Argentina/Salta">
                                    <option value="America/Argentina/San_Juan">
                                    <option value="America/Argentina/San_Luis">
                                    <option value="America/Argentina/Tucuman">
                                    <option value="America/Argentina/Ushuaia">
                                    <option value="America/Aruba">
                                    <option value="America/Asuncion">
                                    <option value="America/Atikokan">
                                    <option value="America/Atka">
                                    <option value="America/Bahia">
                                    <option value="America/Bahia_Banderas">
                                    <option value="America/Barbados">
                                    <option value="America/Belem">
                                    <option value="America/Belize">
                                    <option value="America/Blanc-Sablon">
                                    <option value="America/Boa_Vista">
                                    <option value="America/Bogota">
                                    <option value="America/Boise">
                                    <option value="America/Buenos_Aires">
                                    <option value="America/Cambridge_Bay">
                                    <option value="America/Campo_Grande">
                                    <option value="America/Cancun">
                                    <option value="America/Caracas">
                                    <option value="America/Catamarca">
                                    <option value="America/Cayenne">
                                    <option value="America/Cayman">
                                    <option value="America/Chicago">
                                    <option value="America/Chihuahua">
                                    <option value="America/Coral_Harbour">
                                    <option value="America/Cordoba">
                                    <option value="America/Costa_Rica">
                                    <option value="America/Creston">
                                    <option value="America/Cuiaba">
                                    <option value="America/Curacao">
                                    <option value="America/Danmarkshavn">
                                    <option value="America/Dawson">
                                    <option value="America/Dawson_Creek">
                                    <option value="America/Denver">
                                    <option value="America/Detroit">
                                    <option value="America/Dominica">
                                    <option value="America/Edmonton">
                                    <option value="America/Eirunepe">
                                    <option value="America/El_Salvador">
                                    <option value="America/Ensenada">
                                    <option value="America/Fort_Wayne">
                                    <option value="America/Fortaleza">
                                    <option value="America/Glace_Bay">
                                    <option value="America/Godthab">
                                    <option value="America/Goose_Bay">
                                    <option value="America/Grand_Turk">
                                    <option value="America/Grenada">
                                    <option value="America/Guadeloupe">
                                    <option value="America/Guatemala">
                                    <option value="America/Guayaquil">
                                    <option value="America/Guyana">
                                    <option value="America/Halifax">
                                    <option value="America/Havana">
                                    <option value="America/Hermosillo">
                                    <option value="America/Indiana/Indianapolis">
                                    <option value="America/Indiana/Knox">
                                    <option value="America/Indiana/Marengo">
                                    <option value="America/Indiana/Petersburg">
                                    <option value="America/Indiana/Tell_City">
                                    <option value="America/Indiana/Vevay">
                                    <option value="America/Indiana/Vincennes">
                                    <option value="America/Indiana/Winamac">
                                    <option value="America/Indianapolis">
                                    <option value="America/Inuvik">
                                    <option value="America/Iqaluit">
                                    <option value="America/Jamaica">
                                    <option value="America/Jujuy">
                                    <option value="America/Juneau">
                                    <option value="America/Kentucky/Louisville">
                                    <option value="America/Kentucky/Monticello">
                                    <option value="America/Knox_IN">
                                    <option value="America/Kralendijk">
                                    <option value="America/La_Paz">
                                    <option value="America/Lima">
                                    <option value="America/Los_Angeles">
                                    <option value="America/Louisville">
                                    <option value="America/Lower_Princes">
                                    <option value="America/Maceio">
                                    <option value="America/Managua">
                                    <option value="America/Manaus">
                                    <option value="America/Marigot">
                                    <option value="America/Martinique">
                                    <option value="America/Matamoros">
                                    <option value="America/Mazatlan">
                                    <option value="America/Mendoza">
                                    <option value="America/Menominee">
                                    <option value="America/Merida">
                                    <option value="America/Metlakatla">
                                    <option value="America/Mexico_City">
                                    <option value="America/Miquelon">
                                    <option value="America/Moncton">
                                    <option value="America/Monterrey">
                                    <option value="America/Montevideo">
                                    <option value="America/Montreal">
                                    <option value="America/Montserrat">
                                    <option value="America/Nassau">
                                    <option value="America/New_York">
                                    <option value="America/Nipigon">
                                    <option value="America/Nome">
                                    <option value="America/Noronha">
                                    <option value="America/North_Dakota/Beulah">
                                    <option value="America/North_Dakota/Center">
                                    <option value="America/North_Dakota/New_Salem">
                                    <option value="America/Ojinaga    America/Panama">
                                    <option value="America/Pangnirtung">
                                    <option value="America/Paramaribo">
                                    <option value="America/Phoenix">
                                    <option value="America/Port-au-Prince">
                                    <option value="America/Port_of_Spain">
                                    <option value="America/Porto_Acre">
                                    <option value="America/Porto_Velho">
                                    <option value="America/Puerto_Rico">
                                    <option value="America/Rainy_River">
                                    <option value="America/Rankin_Inlet">
                                    <option value="America/Recife">
                                    <option value="America/Regina">
                                    <option value="America/Resolute">
                                    <option value="America/Rio_Branco">
                                    <option value="America/Rosario">
                                    <option value="America/Santa_Isabel">
                                    <option value="America/Santarem">
                                    <option value="America/Santiago">
                                    <option value="America/Santo_Domingo">
                                    <option value="America/Sao_Paulo">
                                    <option value="America/Scoresbysund">
                                    <option value="America/Shiprock">
                                    <option value="America/Sitka">
                                    <option value="America/St_Barthelemy">
                                    <option value="America/St_Johns">
                                    <option value="America/St_Kitts">
                                    <option value="America/St_Lucia">
                                    <option value="America/St_Thomas">
                                    <option value="America/St_Vincent">
                                    <option value="America/Swift_Current">
                                    <option value="America/Tegucigalpa">
                                    <option value="America/Thule">
                                    <option value="America/Thunder_Bay">
                                    <option value="America/Tijuana">
                                    <option value="America/Toronto">
                                    <option value="America/Tortola">
                                    <option value="America/Vancouver">
                                    <option value="America/Virgin">
                                    <option value="America/Whitehorse">
                                    <option value="America/Winnipeg">
                                    <option value="America/Yakutat">
                                    <option value="America/Yellowknife">
                                    <option value="Antarctica/Casey">
                                    <option value="Antarctica/Davis">
                                    <option value="Antarctica/DumontDUrville">
                                    <option value="Antarctica/Macquarie">
                                    <option value="Antarctica/Mawson">
                                    <option value="Antarctica/McMurdo">
                                    <option value="Antarctica/Palmer">
                                    <option value="Antarctica/Rothera">
                                    <option value="Antarctica/South_Pole">
                                    <option value="Antarctica/Syowa">
                                    <option value="Antarctica/Vostok">
                                    <option value="Arctic/Longyearbyen">
                                    <option value="Asia/Aden">
                                    <option value="Asia/Almaty">
                                    <option value="Asia/Amman">
                                    <option value="Asia/Anadyr">
                                    <option value="Asia/Aqtau">
                                    <option value="Asia/Aqtobe">
                                    <option value="Asia/Ashgabat">
                                    <option value="Asia/Ashkhabad">
                                    <option value="Asia/Baghdad">
                                    <option value="Asia/Bahrain">
                                    <option value="Asia/Baku">
                                    <option value="Asia/Bangkok">
                                    <option value="Asia/Beirut">
                                    <option value="Asia/Bishkek">
                                    <option value="Asia/Brunei">
                                    <option value="Asia/Calcutta">
                                    <option value="Asia/Choibalsan">
                                    <option value="Asia/Chongqing">
                                    <option value="Asia/Chungking">
                                    <option value="Asia/Colombo">
                                    <option value="Asia/Dacca">
                                    <option value="Asia/Damascus">
                                    <option value="Asia/Dhaka">
                                    <option value="Asia/Dili">
                                    <option value="Asia/Dubai">
                                    <option value="Asia/Dushanbe">
                                    <option value="Asia/Gaza">
                                    <option value="Asia/Harbin">
                                    <option value="Asia/Hebron">
                                    <option value="Asia/Ho_Chi_Minh">
                                    <option value="Asia/Hong_Kong">
                                    <option value="Asia/Hovd">
                                    <option value="Asia/Irkutsk">
                                    <option value="Asia/Istanbul">
                                    <option value="Asia/Jakarta">
                                    <option value="Asia/Jayapura">
                                    <option value="Asia/Jerusalem">
                                    <option value="Asia/Kabul">
                                    <option value="Asia/Kamchatka">
                                    <option value="Asia/Karachi">
                                    <option value="Asia/Kashgar">
                                    <option value="Asia/Kathmandu">
                                    <option value="Asia/Katmandu">
                                    <option value="Asia/Kolkata">
                                    <option value="Asia/Krasnoyarsk">
                                    <option value="Asia/Kuala_Lumpur">
                                    <option value="Asia/Kuching">
                                    <option value="Asia/Kuwait">
                                    <option value="Asia/Macao">
                                    <option value="Asia/Macau">
                                    <option value="Asia/Magadan">
                                    <option value="Asia/Makassar">
                                    <option value="Asia/Manila">
                                    <option value="Asia/Muscat">
                                    <option value="Asia/Nicosia">
                                    <option value="Asia/Novokuznetsk">
                                    <option value="Asia/Novosibirsk">
                                    <option value="Asia/Omsk">
                                    <option value="Asia/Oral">
                                    <option value="Asia/Phnom_Penh">
                                    <option value="Asia/Pontianak">
                                    <option value="Asia/Pyongyang">
                                    <option value="Asia/Qatar">
                                    <option value="Asia/Qyzylorda">
                                    <option value="Asia/Rangoon">
                                    <option value="Asia/Riyadh">
                                    <option value="Asia/Saigon">
                                    <option value="Asia/Sakhalin">
                                    <option value="Asia/Samarkand">
                                    <option value="Asia/Seoul">
                                    <option value="Asia/Shanghai">
                                    <option value="Asia/Singapore">
                                    <option value="Asia/Taipei">
                                    <option value="Asia/Tashkent">
                                    <option value="Asia/Tbilisi">
                                    <option value="Asia/Tehran">
                                    <option value="Asia/Tel_Aviv">
                                    <option value="Asia/Thimbu">
                                    <option value="Asia/Thimphu">
                                    <option value="Asia/Tokyo">
                                    <option value="Asia/Ujung_Pandang">
                                    <option value="Asia/Ulaanbaatar">
                                    <option value="Asia/Ulan_Bator">
                                    <option value="Asia/Urumqi">
                                    <option value="Asia/Vientiane">
                                    <option value="Asia/Vladivostok">
                                    <option value="Asia/Yakutsk">
                                    <option value="Asia/Yekaterinburg">
                                    <option value="Asia/Yerevan">
                                    <option value="Atlantic/Azores">
                                    <option value="Atlantic/Bermuda">
                                    <option value="Atlantic/Canary">
                                    <option value="Atlantic/Cape_Verde">
                                    <option value="Atlantic/Faeroe">
                                    <option value="Atlantic/Faroe">
                                    <option value="Atlantic/Jan_Mayen">
                                    <option value="Atlantic/Madeira">
                                    <option value="Atlantic/Reykjavik">
                                    <option value="Atlantic/South_Georgia">
                                    <option value="Atlantic/St_Helena">
                                    <option value="Atlantic/Stanley">
                                    <option value="Australia/ACT">
                                    <option value="Australia/Adelaide">
                                    <option value="Australia/Brisbane">
                                    <option value="Australia/Broken_Hill">
                                    <option value="Australia/Canberra">
                                    <option value="Australia/Currie">
                                    <option value="Australia/Darwin">
                                    <option value="Australia/Eucla">
                                    <option value="Australia/Hobart">
                                    <option value="Australia/LHI">
                                    <option value="Australia/Lindeman">
                                    <option value="Australia/Lord_Howe">
                                    <option value="Australia/Melbourne">
                                    <option value="Australia/North">
                                    <option value="Australia/NSW">
                                    <option value="Australia/Perth">
                                    <option value="Australia/Queensland">
                                    <option value="Australia/South">
                                    <option value="Australia/Sydney">
                                    <option value="Australia/Tasmania">
                                    <option value="Australia/Victoria">
                                    <option value="Australia/West">
                                    <option value="Australia/Yancowinna">
                                    <option value="Europe/Amsterdam">
                                    <option value="Europe/Andorra">
                                    <option value="Europe/Athens">
                                    <option value="Europe/Belfast">
                                    <option value="Europe/Belgrade">
                                    <option value="Europe/Berlin">
                                    <option value="Europe/Bratislava">
                                    <option value="Europe/Brussels">
                                    <option value="Europe/Bucharest">
                                    <option value="Europe/Budapest">
                                    <option value="Europe/Chisinau">
                                    <option value="Europe/Copenhagen">
                                    <option value="Europe/Dublin">
                                    <option value="Europe/Gibraltar">
                                    <option value="Europe/Guernsey">
                                    <option value="Europe/Helsinki">
                                    <option value="Europe/Isle_of_Man">
                                    <option value="Europe/Istanbul">
                                    <option value="Europe/Jersey">
                                    <option value="Europe/Kaliningrad">
                                    <option value="Europe/Kiev">
                                    <option value="Europe/Lisbon">
                                    <option value="Europe/Ljubljana">
                                    <option value="Europe/London">
                                    <option value="Europe/Luxembourg">
                                    <option value="Europe/Madrid">
                                    <option value="Europe/Malta">
                                    <option value="Europe/Mariehamn">
                                    <option value="Europe/Minsk">
                                    <option value="Europe/Monaco">
                                    <option value="Europe/Moscow">
                                    <option value="Europe/Nicosia">
                                    <option value="Europe/Oslo">
                                    <option value="Europe/Paris">
                                    <option value="Europe/Podgorica">
                                    <option value="Europe/Prague">
                                    <option value="Europe/Riga">
                                    <option value="Europe/Rome">
                                    <option value="Europe/Samara">
                                    <option value="Europe/San_Marino">
                                    <option value="Europe/Sarajevo">
                                    <option value="Europe/Simferopol">
                                    <option value="Europe/Skopje">
                                    <option value="Europe/Sofia">
                                    <option value="Europe/Stockholm">
                                    <option value="Europe/Tallinn">
                                    <option value="Europe/Tirane">
                                    <option value="Europe/Tiraspol">
                                    <option value="Europe/Uzhgorod">
                                    <option value="Europe/Vaduz">
                                    <option value="Europe/Vatican">
                                    <option value="Europe/Vienna">
                                    <option value="Europe/Vilnius">
                                    <option value="Europe/Volgograd">
                                    <option value="Europe/Warsaw">
                                    <option value="Europe/Zagreb">
                                    <option value="Europe/Zaporozhye">
                                    <option value="Europe/Zurich">
                                    <option value="Indian/Antananarivo">
                                    <option value="Indian/Chagos">
                                    <option value="Indian/Christmas">
                                    <option value="Indian/Cocos">
                                    <option value="Indian/Comoro">
                                    <option value="Indian/Kerguelen">
                                    <option value="Indian/Mahe">
                                    <option value="Indian/Maldives">
                                    <option value="Indian/Mauritius">
                                    <option value="Indian/Mayotte">
                                    <option value="Indian/Reunion">
                                    <option value="Pacific/Apia">
                                    <option value="Pacific/Auckland">
                                    <option value="Pacific/Chatham">
                                    <option value="Pacific/Chuuk">
                                    <option value="Pacific/Easter">
                                    <option value="Pacific/Efate">
                                    <option value="Pacific/Enderbury">
                                    <option value="Pacific/Fakaofo">
                                    <option value="Pacific/Fiji">
                                    <option value="Pacific/Funafuti">
                                    <option value="Pacific/Galapagos">
                                    <option value="Pacific/Gambier">
                                    <option value="Pacific/Guadalcanal">
                                    <option value="Pacific/Guam">
                                    <option value="Pacific/Honolulu">
                                    <option value="Pacific/Johnston">
                                    <option value="Pacific/Kiritimati">
                                    <option value="Pacific/Kosrae">
                                    <option value="Pacific/Kwajalein">
                                    <option value="Pacific/Majuro">
                                    <option value="Pacific/Marquesas">
                                    <option value="Pacific/Midway">
                                    <option value="Pacific/Nauru">
                                    <option value="Pacific/Niue">
                                    <option value="Pacific/Norfolk">
                                    <option value="Pacific/Noumea">
                                    <option value="Pacific/Pago_Pago">
                                    <option value="Pacific/Palau">
                                    <option value="Pacific/Pitcairn">
                                    <option value="Pacific/Pohnpei">
                                    <option value="Pacific/Ponape">
                                    <option value="Pacific/Port_Moresby">
                                    <option value="Pacific/Rarotonga">
                                    <option value="Pacific/Saipan">
                                    <option value="Pacific/Samoa">
                                    <option value="Pacific/Tahiti">
                                    <option value="Pacific/Tarawa">
                                    <option value="Pacific/Tongatapu">
                                    <option value="Pacific/Truk">
                                    <option value="Pacific/Wake">
                                    <option value="Pacific/Wallis">
                                    <option value="Pacific/Yap">
                                    <option value="Brazil/Acre">
                                    <option value="Brazil/DeNoronha">
                                    <option value="Brazil/East">
                                    <option value="Brazil/West">
                                    <option value="Canada/Atlantic">
                                    <option value="Canada/Central">
                                    <option value="Canada/East-Saskatchewan">
                                    <option value="Canada/Eastern">
                                    <option value="Canada/Mountain">
                                    <option value="Canada/Newfoundland">
                                    <option value="Canada/Pacific">
                                    <option value="Canada/Saskatchewan">
                                    <option value="Canada/Yukon">
                                    <option value="CET">
                                    <option value="Chile/Continental">
                                    <option value="Chile/EasterIsland">
                                    <option value="CST6CDT">
                                    <option value="Cuba">
                                    <option value="EET">
                                    <option value="Egypt">
                                    <option value="Eire">
                                    <option value="EST">
                                    <option value="EST5EDT">
                                    <option value="Etc/GMT">
                                    <option value="Etc/GMT+0">
                                    <option value="Etc/GMT+1">
                                    <option value="Etc/GMT+10">
                                    <option value="Etc/GMT+11">
                                    <option value="Etc/GMT+12">
                                    <option value="Etc/GMT+2">
                                    <option value="Etc/GMT+3">
                                    <option value="Etc/GMT+4">
                                    <option value="Etc/GMT+5">
                                    <option value="Etc/GMT+6">
                                    <option value="Etc/GMT+7">
                                    <option value="Etc/GMT+8">
                                    <option value="Etc/GMT+9">
                                    <option value="Etc/GMT-0">
                                    <option value="Etc/GMT-1">
                                    <option value="Etc/GMT-10">
                                    <option value="Etc/GMT-11">
                                    <option value="Etc/GMT-12">
                                    <option value="Etc/GMT-13">
                                    <option value="Etc/GMT-14">
                                    <option value="Etc/GMT-2">
                                    <option value="Etc/GMT-3">
                                    <option value="Etc/GMT-4">
                                    <option value="Etc/GMT-5">
                                    <option value="Etc/GMT-6">
                                    <option value="Etc/GMT-7">
                                    <option value="Etc/GMT-8">
                                    <option value="Etc/GMT-9">
                                    <option value="Etc/GMT0">
                                    <option value="Etc/Greenwich">
                                    <option value="Etc/UCT">
                                    <option value="Etc/Universal">
                                    <option value="Etc/UTC">
                                    <option value="Etc/Zulu">
                                    <option value="Factory">
                                    <option value="GB">
                                    <option value="GB-Eire">
                                    <option value="GMT">
                                    <option value="GMT+0">
                                    <option value="GMT-0">
                                    <option value="GMT0">
                                    <option value="Greenwich">
                                    <option value="Hongkong">
                                    <option value="HST">
                                    <option value="Iceland">
                                    <option value="Iran">
                                    <option value="Israel">
                                    <option value="Jamaica">
                                    <option value="Japan">
                                    <option value="Kwajalein">
                                    <option value="Libya">
                                    <option value="MET">
                                    <option value="Mexico/BajaNorte">
                                    <option value="Mexico/BajaSur">
                                    <option value="Mexico/General">
                                    <option value="MST">
                                    <option value="MST7MDT">
                                    <option value="Navajo">
                                    <option value="NZ">
                                    <option value="NZ-CHAT">
                                    <option value="Poland">
                                    <option value="Portugal">
                                    <option value="PRC">
                                    <option value="PST8PDT">
                                    <option value="ROC">
                                    <option value="ROK">
                                    <option value="Singapore">
                                    <option value="Turkey">
                                    <option value="UCT">
                                    <option value="Universal">
                                    <option value="US/Alaska">
                                    <option value="US/Aleutian">
                                    <option value="US/Arizona">
                                    <option value="US/Central">
                                    <option value="US/East-Indiana">
                                    <option value="US/Eastern">
                                    <option value="US/Hawaii">
                                    <option value="US/Indiana-Starke">
                                    <option value="US/Michigan">
                                    <option value="US/Mountain">
                                    <option value="US/Pacific">
                                    <option value="US/Pacific-New">
                                    <option value="US/Samoa">
                                    <option value="UTC    W-SU">
                                    <option value="WET">
                                    <option value="Zulu">
                                </datalist>
                            </div>
                            <div>
                                <label for="http_host"><span class="inverse-color">*</span> HTTP Host
                                    <a href="#" title="http address that this Browsermark use. If modified, remember to not add a trailing slash!">?</a>:
                                </label>
                                <input type="text" name="http_host" value="{$aValues['http_host']}" required="required">
                            </div>
                            <h4>Database settings</h4>
                            <div>
                                <label for="mode">
                                    Use database
                                    <a href="#" title="If database is not in use, results are viewable only while benchmarking browser (aka. Session mode)">?</a>:
                                </label>
                                {$aUseDB['yes']}
                                {$aUseDB['no']}
                            </div>

FORM_START;

    if ($bDatabase)
    {
        print <<<DATABASE_FORM
                            <div>
                                <label for="db_host"><span class="inverse-color">*</span> Database host:</label>
                                <input type="text" name="db_host" value="{$aValues['db_host']}" required="required">
                            </div>
                            <div>
                                <label for="db_port">Database port:</label>
                                <input type="text" name="db_port" value="{$aValues['db_port']}">
                            </div>
                            <div>
                                <label for="db_name"><span class="inverse-color">*</span> Database name:</label>
                                <input type="text" name="db_name" value="{$aValues['db_name']}" required="required">
                            </div>
                            <div>
                                <label for="db_user"><span class="inverse-color">*</span> Database user
                                    <a href="#" title="This user have to have at least following rights for selected database: CREATE, INSERT, SELECT, UPDATE">?</a>:
                                </label>
                                <input type="text" name="db_user" value="{$aValues['db_user']}" required="required">
                            </div>
                            <div>
                                <label for="db_pass">User password
                                    <a href="#" title="Please note that this is written in configuration/production.php as plain text">?</a>:
                                </label>
                                <input type="password" name="db_pass" value="{$aValues['db_pass']}">
                            </div>
                            <div>
                                <label>Engine:</label>
                                <span>Only MySQL supported</span>
                            </div>
                            <div>
                                <label></label>
                                <input type="button" id="db_con_test" value="Test connection">
                                <span id="db_con_result"></span>
                            </div>

DATABASE_FORM;
    }
    print <<<FORM_END
                            <h4>Administrator details</h4>
                            <div>
                                <label for="admin_name"><span class="inverse-color">*</span> Username:</label>
                                <input type="text" name="admin_name" value="admin" value="{$aValues['admin_name']}" required="required">
                            </div>
                            <div>
                                <label for="admin_pass"><span class="inverse-color">*</span> Password:</label>
                                <input type="password" name="admin_pass" value="password" value="{$aValues['admin_pass']}" required="required">
                            </div>
                            <div>
                                <label></label>
                                <span><i>Default is admin : password</i></span>
                            </div>
                            <h4>Ready?</h4>
                            <div>
                                <input type="submit" value="Save settings">
                            </div>
                        </form>

FORM_END;
}
else if ($bDone == false)
{
    echo '                        <h3>Installation script cannot be used because of errors.</h3>' . "\n";
}

print <<<FOOTER
                    </div>
                    <!-- /Content -->
                </div>
                <!-- /Content Wrapper -->
                <!-- Footer Shadow -->
                <div id="footer" class="group">
                    <a href="/disclaimer">
                    <!-- Footer content -->
	                    </a><div id="footer-content">
	                    	<div id="footerLogo">
	                        	<img src="/images/newLogoFooter.png" alt="Rightware">
	                   		 </div>
	                       <ul class="crumb_path"><a href="/disclaimer">
	                        
	                    </ul>
                    	<div class="footer-left"></div>
                    	<div class="footer-right">Copyright © Rightware. All rights reserved.</div>
                    </div>
                    <!-- /Footer content -->
                </div>
            </div>
            <!-- /Exposure -->
        </div>
        <!-- /Wrapper -->
    </body>
</html>
FOOTER;

?>
<?php /* Smarty version Smarty-3.1.12, created on 2015-04-29 04:00:11
         compiled from "/home2/jwbecher/www/jwebgen/smarty/templates/starterOO.tpl" */ ?>
<?php /*%%SmartyHeaderCode:845448408554098c266c608-85929399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2ac5c52dc207c7841738dfdbfb64345e850cc9f' => 
    array (
      0 => '/home2/jwbecher/www/jwebgen/smarty/templates/starterOO.tpl',
      1 => 1401812504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '845448408554098c266c608-85929399',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_554098c26c6820_15892213',
  'variables' => 
  array (
    'bodyID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554098c26c6820_15892213')) {function content_554098c26c6820_15892213($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JWebGen Pony Generator; Test Generate a SOO pony</title>
        <meta name="Keywords" content="pony generator, dream generator, starter, pony, generator">
        <meta name="Description" content="This pony generator lets you create dream ponies, starter ponies, or test breed between two existing ponies. This pony generator uses images from PonyIsland.">
        <meta name="Author" content="jwbecher@jwebnet.net">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="StyleSheet" href="/assets/screen.css" type="text/css" media="screen">
        <script type="text/javascript" src="/assets/js.php?page=starterOO"></script>
        <script type="text/javascript" src="/assets/google_analytics.js"></script>
        <script type="text/javascript" src="/assets/support_banner.js"></script>
    </head>

    <body id="<?php echo $_smarty_tpl->tpl_vars['bodyID']->value;?>
" onload="placeIt();">

        <?php echo $_smarty_tpl->getSubTemplate ('disclamer_ad_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div id="content">
            <div><span style="color: #ff0000;">The images used on this site are owned and copyrighted by <a href="http://ponyisland.net">ponyisland.net</a> and are used with permission.<br> Any use of these images outside of this site requires permission from ponyisland.net.</span></div>
            <div>
                <form name="trmStarter" method="get" action="controller.php" onsubmit="return ajaxQuery('GET', generateStarterOOURL(), 'ponyStarterOOZone');
                        return false;">
                    <table id="tblStarter">
                        <tr>
                            <th style="text-align: center;" colspan="4">Starter offspring offspring (SOO) Test Breeding</th>
                        </tr>
                        <tr>
                            <th>Father Pony 1</th>
                            <th>Mother Pony 2</th>
                            <th>Father Pony 2</th>
                            <th>Mother Pony 2</th>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>Breed </td>
                                        <td>
                                            <select name="S1breed">
                                                <option value="EarthPony" selected="selected">EarthPony</option>
                                                <option value="Unicorn">Unicorn</option>
                                                <option value="MerPony">MerPony</option>
                                                <option value="SeaPony">SeaPony</option>
                                                <option value="ShellPony">ShellPony</option>
                                                <option value="FairyPony">FairyPony</option>
                                                <option value="FlutterPony">FlutterPony</option>
                                                <option value="Pegasus">Pegasus</option>
                                                <option value="WingedUnicorn">WingedUnicorn</option>
                                                <option value="DragonPony">DragonPony</option>
                                                <option value="PhoenixPony">PhoenixPony</option>
                                                <option value="Valkyrie">Valkyrie</option>
                                                <option value="KirinPony">KirinPony</option>
                                                <option value="MerDragon">MerDragon</option>
                                                <option value="WishingPony">WishingPony</option>
                                                <option value="PurrPony">PurrPony</option>
                                                <option value="ReindeerPony">ReindeerPony</option>
                                                <option value="MountainPony">MountainPony</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Eyes </td>
                                        <td>
                                            <select name="S1eyes" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hair </td>
                                        <td>
                                            <select name="S1hair" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hair 2 </td>
                                        <td>
                                            <select name="S1hair2" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Body </td>
                                        <td>
                                            <select name="S1body" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Extra 1 </td>
                                        <td>
                                            <select name="S1extra1" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Extra 2 </td>
                                        <td>
                                            <select name="S1extra2" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Father's S-Gene
                                        </td>
                                        <td>
                                            <select name="S1sgene">
                                                <option value="++" selected="selected">None</option>
                                                <optgroup label="[Pattern]">
                                                    <option value="pattern_PP">Paint</option>
                                                    <option value="pattern_ZZ">ZigZag</option>
                                                    <option value="pattern_LL">Light Dapple</option>
                                                    <option value="pattern_HH">Heavy Dapple</option>
                                                    <option value="pattern_DD">Body Fade</option>
                                                    <option value="pattern_WW">Clownfish</option>
                                                    <option value="pattern_EE">Zebra</option>
                                                    <option value="pattern_TT">Tarantula</option>
                                                    <option value="pattern_MM">Monarch</option>
                                                    <option value="pattern_FF">Fawn</option>
                                                    <option value="pattern_KK">Koi</option>
                                                    <option value="pattern_AA">Appaloosa</option>
                                                    <option value="pattern_GG">Gemsbok</option>
                                                    <option value="pattern_NN">Numbat</option>
                                                    <option value="pattern_BB">Bioluminescence</option>
                                                    <option value="pattern_CC">Pattern Colorized</option>
                                                </optgroup>
                                                <optgroup label="[Socks]">
                                                    <option value="socks_HH">Socks</option>
                                                    <option value="socks_FF">Stockings</option>
                                                    <option value="socks_DD">Faded</option>
                                                    <option value="socks_OO">Okapi</option>
                                                    <option value="socks_CC">Colorized</option>
                                                </optgroup>
                                                <optgroup label="[Hair]">
                                                    <option value="hair_SS">Stripe</option>
                                                    <option value="hair_RR">Rainbow</option>
                                                    <option value="hair_TT">Tips</option>
                                                    <option value="hair_MM">MStripes</option>
                                                    <option value="hair_QQ">QStripes</option>
                                                    <option value="hair_DD">Faded</option>
                                                </optgroup>
                                                <optgroup label="[Face]">
                                                    <option value="face_SS">Star</option>
                                                    <option value="face_FF">Freckles</option>
                                                    <option value="face_BB">Blaze</option>
                                                    <option value="face_DD">Faded</option>
                                                    <option value="face_KK">Skull</option>
                                                    <option value="face_CC">Colorized</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>Breed </td>
                                        <td>
                                            <select name="S2breed">
                                                <option value="EarthPony" selected="selected">EarthPony</option>
                                                <option value="Unicorn">Unicorn</option>
                                                <option value="MerPony">MerPony</option>
                                                <option value="SeaPony">SeaPony</option>
                                                <option value="ShellPony">ShellPony</option>
                                                <option value="FairyPony">FairyPony</option>
                                                <option value="FlutterPony">FlutterPony</option>
                                                <option value="Pegasus">Pegasus</option>
                                                <option value="WingedUnicorn">WingedUnicorn</option>
                                                <option value="DragonPony">DragonPony</option>
                                                <option value="PhoenixPony">PhoenixPony</option>
                                                <option value="Valkyrie">Valkyrie</option>
                                                <option value="KirinPony">KirinPony</option>
                                                <option value="MerDragon">MerDragon</option>
                                                <option value="WishingPony">WishingPony</option>
                                                <option value="PurrPony">PurrPony</option>
                                                <option value="ReindeerPony">ReindeerPony</option>
                                                <option value="MountainPony">MountainPony</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Eyes </td>
                                        <td>
                                            <select name="S2eyes" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hair </td>
                                        <td>
                                            <select name="S2hair" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hair 2 </td>
                                        <td>
                                            <select name="S2hair2" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Body </td>
                                        <td>
                                            <select name="S2body" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Extra 1 </td>
                                        <td>
                                            <select name="S2extra1" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Extra 2 </td>
                                        <td>
                                            <select name="S2extra2" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mother's S-Gene
                                        </td>
                                        <td>
                                            <select name="S2sgene">
                                                <option value="++" selected="selected">None</option>
                                                <optgroup label="[Pattern]">
                                                    <option value="pattern_PP">Paint</option>
                                                    <option value="pattern_ZZ">ZigZag</option>
                                                    <option value="pattern_LL">Light Dapple</option>
                                                    <option value="pattern_HH">Heavy Dapple</option>
                                                    <option value="pattern_DD">Body Fade</option>
                                                    <option value="pattern_WW">Clownfish</option>
                                                    <option value="pattern_EE">Zebra</option>
                                                    <option value="pattern_TT">Tarantula</option>
                                                    <option value="pattern_MM">Monarch</option>
                                                    <option value="pattern_FF">Fawn</option>
                                                    <option value="pattern_KK">Koi</option>
                                                    <option value="pattern_AA">Appaloosa</option>
                                                    <option value="pattern_GG">Gemsbok</option>
                                                    <option value="pattern_NN">Numbat</option>
                                                    <option value="pattern_BB">Bioluminescence</option>
                                                    <option value="pattern_CC">Pattern Colorized</option>
                                                </optgroup>
                                                <optgroup label="[Socks]">
                                                    <option value="socks_HH">Socks</option>
                                                    <option value="socks_FF">Stockings</option>
                                                    <option value="socks_DD">Faded</option>
                                                    <option value="socks_OO">Okapi</option>
                                                    <option value="socks_CC">Colorized</option>
                                                </optgroup>
                                                <optgroup label="[Hair]">
                                                    <option value="hair_SS">Stripe</option>
                                                    <option value="hair_RR">Rainbow</option>
                                                    <option value="hair_TT">Tips</option>
                                                    <option value="hair_MM">MStripes</option>
                                                    <option value="hair_QQ">QStripes</option>
                                                    <option value="hair_DD">Faded</option>
                                                </optgroup>
                                                <optgroup label="[Face]">
                                                    <option value="face_SS">Star</option>
                                                    <option value="face_FF">Freckles</option>
                                                    <option value="face_BB">Blaze</option>
                                                    <option value="face_DD">Faded</option>
                                                    <option value="face_KK">Skull</option>
                                                    <option value="face_CC">Colorized</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>Breed </td>
                                        <td>
                                            <select name="S3breed">
                                                <option value="EarthPony" selected="selected">EarthPony</option>
                                                <option value="Unicorn">Unicorn</option>
                                                <option value="MerPony">MerPony</option>
                                                <option value="SeaPony">SeaPony</option>
                                                <option value="ShellPony">ShellPony</option>
                                                <option value="FairyPony">FairyPony</option>
                                                <option value="FlutterPony">FlutterPony</option>
                                                <option value="Pegasus">Pegasus</option>
                                                <option value="WingedUnicorn">WingedUnicorn</option>
                                                <option value="DragonPony">DragonPony</option>
                                                <option value="PhoenixPony">PhoenixPony</option>
                                                <option value="Valkyrie">Valkyrie</option>
                                                <option value="KirinPony">KirinPony</option>
                                                <option value="MerDragon">MerDragon</option>
                                                <option value="WishingPony">WishingPony</option>
                                                <option value="PurrPony">PurrPony</option>
                                                <option value="ReindeerPony">ReindeerPony</option>
                                                <option value="MountainPony">MountainPony</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Eyes </td>
                                        <td>
                                            <select name="S3eyes" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hair </td>
                                        <td>
                                            <select name="S3hair" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hair 2 </td>
                                        <td>
                                            <select name="S3hair2" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Body </td>
                                        <td>
                                            <select name="S3body" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Extra 1 </td>
                                        <td>
                                            <select name="S3extra1" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Extra 2 </td>
                                        <td>
                                            <select name="S3extra2" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Father's S-Gene
                                        </td>
                                        <td>
                                            <select name="S3sgene">
                                                <option value="++" selected="selected">None</option>
                                                <optgroup label="[Pattern]">
                                                    <option value="pattern_PP">Paint</option>
                                                    <option value="pattern_ZZ">ZigZag</option>
                                                    <option value="pattern_LL">Light Dapple</option>
                                                    <option value="pattern_HH">Heavy Dapple</option>
                                                    <option value="pattern_DD">Body Fade</option>
                                                    <option value="pattern_WW">Clownfish</option>
                                                    <option value="pattern_EE">Zebra</option>
                                                    <option value="pattern_TT">Tarantula</option>
                                                    <option value="pattern_MM">Monarch</option>
                                                    <option value="pattern_FF">Fawn</option>
                                                    <option value="pattern_KK">Koi</option>
                                                    <option value="pattern_AA">Appaloosa</option>
                                                    <option value="pattern_GG">Gemsbok</option>
                                                    <option value="pattern_NN">Numbat</option>
                                                    <option value="pattern_BB">Bioluminescence</option>
                                                    <option value="pattern_CC">Pattern Colorized</option>
                                                </optgroup>
                                                <optgroup label="[Socks]">
                                                    <option value="socks_HH">Socks</option>
                                                    <option value="socks_FF">Stockings</option>
                                                    <option value="socks_DD">Faded</option>
                                                    <option value="socks_OO">Okapi</option>
                                                    <option value="socks_CC">Colorized</option>
                                                </optgroup>
                                                <optgroup label="[Hair]">
                                                    <option value="hair_SS">Stripe</option>
                                                    <option value="hair_RR">Rainbow</option>
                                                    <option value="hair_TT">Tips</option>
                                                    <option value="hair_MM">MStripes</option>
                                                    <option value="hair_QQ">QStripes</option>
                                                    <option value="hair_DD">Faded</option>
                                                </optgroup>
                                                <optgroup label="[Face]">
                                                    <option value="face_SS">Star</option>
                                                    <option value="face_FF">Freckles</option>
                                                    <option value="face_BB">Blaze</option>
                                                    <option value="face_DD">Faded</option>
                                                    <option value="face_KK">Skull</option>
                                                    <option value="face_CC">Colorized</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td>
                                <table>
                                    <tr>
                                        <td>Breed </td>
                                        <td>
                                            <select name="S4breed">
                                                <option value="EarthPony" selected="selected">EarthPony</option>
                                                <option value="Unicorn">Unicorn</option>
                                                <option value="MerPony">MerPony</option>
                                                <option value="SeaPony">SeaPony</option>
                                                <option value="ShellPony">ShellPony</option>
                                                <option value="FairyPony">FairyPony</option>
                                                <option value="FlutterPony">FlutterPony</option>
                                                <option value="Pegasus">Pegasus</option>
                                                <option value="WingedUnicorn">WingedUnicorn</option>
                                                <option value="DragonPony">DragonPony</option>
                                                <option value="PhoenixPony">PhoenixPony</option>
                                                <option value="Valkyrie">Valkyrie</option>
                                                <option value="KirinPony">KirinPony</option>
                                                <option value="MerDragon">MerDragon</option>
                                                <option value="WishingPony">WishingPony</option>
                                                <option value="PurrPony">PurrPony</option>
                                                <option value="ReindeerPony">ReindeerPony</option>
                                                <option value="MountainPony">MountainPony</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Eyes </td>
                                        <td>
                                            <select name="S4eyes" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hair </td>
                                        <td>
                                            <select name="S4hair" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hair 2 </td>
                                        <td>
                                            <select name="S4hair2" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Body </td>
                                        <td>
                                            <select name="S4body" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Extra 1 </td>
                                        <td>
                                            <select name="S4extra1" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FF0000" style="background-color: #FF0000" selected="selected">FF0000</option>
                                                <option value="00FF00" style="background-color: #00FF00">00FF00</option>
                                                <option value="0000FF" style="background-color: #0000FF">0000FF</option>
                                                <option value="AA0000" style="background-color: #AA0000">AA0000</option>
                                                <option value="00AA00" style="background-color: #00AA00">00AA00</option>
                                                <option value="0000AA" style="background-color: #0000AA">0000AA</option>
                                                <option value="000000" style="background-color: #000000">000000</option>
                                                <option value="666666" style="background-color: #666666">666666</option>
                                                <option value="888888" style="background-color: #888888">888888</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Extra 2 </td>
                                        <td>
                                            <select name="S4extra2" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
                                                <option value="FFFF00" style="background-color: #FFFF00" selected="selected">FFFF00</option>
                                                <option value="FF00FF" style="background-color: #FF00FF">FF00FF</option>
                                                <option value="00FFFF" style="background-color: #00FFFF">00FFFF</option>
                                                <option value="AAAA00" style="background-color: #AAAA00">AAAA00</option>
                                                <option value="AA00AA" style="background-color: #AA00AA">AA00AA</option>
                                                <option value="00AAAA" style="background-color: #00AAAA">00AAAA</option>
                                                <option value="BBBBBB" style="background-color: #BBBBBB">BBBBBB</option>
                                                <option value="DDDDDD" style="background-color: #DDDDDD">DDDDDD</option>
                                                <option value="FFFFFF" style="background-color: #FFFFFF">FFFFFF</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Mother's S-Gene
                                        </td>
                                        <td>
                                            <select name="S4sgene">
                                                <option value="++" selected="selected">None</option>
                                                <optgroup label="[Pattern]">
                                                    <option value="pattern_PP">Paint</option>
                                                    <option value="pattern_ZZ">ZigZag</option>
                                                    <option value="pattern_LL">Light Dapple</option>
                                                    <option value="pattern_HH">Heavy Dapple</option>
                                                    <option value="pattern_DD">Body Fade</option>
                                                    <option value="pattern_WW">Clownfish</option>
                                                    <option value="pattern_EE">Zebra</option>
                                                    <option value="pattern_TT">Tarantula</option>
                                                    <option value="pattern_MM">Monarch</option>
                                                    <option value="pattern_FF">Fawn</option>
                                                    <option value="pattern_KK">Koi</option>
                                                    <option value="pattern_AA">Appaloosa</option>
                                                    <option value="pattern_GG">Gemsbok</option>
                                                    <option value="pattern_NN">Numbat</option>
                                                    <option value="pattern_BB">Bioluminescence</option>
                                                    <option value="pattern_CC">Pattern Colorized</option>
                                                </optgroup>
                                                <optgroup label="[Socks]">
                                                    <option value="socks_HH">Socks</option>
                                                    <option value="socks_FF">Stockings</option>
                                                    <option value="socks_DD">Faded</option>
                                                    <option value="socks_OO">Okapi</option>
                                                    <option value="socks_CC">Colorized</option>
                                                </optgroup>
                                                <optgroup label="[Hair]">
                                                    <option value="hair_SS">Stripe</option>
                                                    <option value="hair_RR">Rainbow</option>
                                                    <option value="hair_TT">Tips</option>
                                                    <option value="hair_MM">MStripes</option>
                                                    <option value="hair_QQ">QStripes</option>
                                                    <option value="hair_DD">Faded</option>
                                                </optgroup>
                                                <optgroup label="[Face]">
                                                    <option value="face_SS">Star</option>
                                                    <option value="face_FF">Freckles</option>
                                                    <option value="face_BB">Blaze</option>
                                                    <option value="face_DD">Faded</option>
                                                    <option value="face_KK">Skull</option>
                                                    <option value="face_CC">Colorized</option>
                                                </optgroup>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;">
                                Surprise Me
                                <input id="surprise" name="surprise" type="checkbox" value="true"></td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;">
                                <select name="gender">
                                    <optgroup label="Gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;">
                                <select name="age">
                                    <option value="Baby">Baby</option>
                                    <option value="Adult">Adult</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center;">
                                <input name="nextAction" value="ponyStarterOO" type="hidden">
                                <input name="Starter" value="Test SOO" type="submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="ponyStarterOOZone"></div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.12, created on 2015-04-29 03:47:37
         compiled from "/home2/jwbecher/www/jwebgen/smarty/templates/starter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:864381543554098baabee64-84838052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c404216d42a16b76b7be3264e50dc54fbde2700f' => 
    array (
      0 => '/home2/jwbecher/www/jwebgen/smarty/templates/starter.tpl',
      1 => 1402096044,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '864381543554098baabee64-84838052',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_554098bab400b2_62212103',
  'variables' => 
  array (
    'bodyID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_554098bab400b2_62212103')) {function content_554098bab400b2_62212103($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JWebGen Pony Generator; Test Generate a starter pony</title>
        <meta name="Keywords" content="pony generator, dream generator, starter, pony, generator">
        <meta name="Description" content="This pony generator lets you create dream ponies, starter ponies, or test breed between two existing ponies. This pony generator uses images from PonyIsland.">
        <meta name="Author" content="jwbecher@jwebnet.net">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="StyleSheet" href="/assets/screen.css" type="text/css" media="screen">
        <script type="text/javascript" src="/assets/js.php?page=starter"></script>
        <script type="text/javascript" src="/assets/google_analytics.js"></script>
        <script type="text/javascript" src="/assets/support_banner.js"></script>
    </head>

    <body id="<?php echo $_smarty_tpl->tpl_vars['bodyID']->value;?>
" onload="placeIt();">

        <?php echo $_smarty_tpl->getSubTemplate ('disclamer_ad_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div id="content">
            <div><span style="color: #ff0000;">The images used on this site are owned and copyrighted by <a href="http://ponyisland.net">ponyisland.net</a> and are used with permission.<br> Any use of these images outside of this site requires permission from ponyisland.net.</span></div>
            <div>
                <form name="trmStarter" method="get" action="controller.php" onsubmit="return ajaxQuery('GET', generateStarterURL(), 'ponyStarterZone');
                        return false;">
                    <table id="tblStarter">
                        <tr>
                            <th style="text-align: center;" colspan="2">Starter Generator Test Breeding</th>
                        </tr>
                        <tr>
                            <th>Father Pony</th>
                            <th>Mother Pony</th>
                        </tr>
                        <tr>
                            <td>
                                <table>
                                    <tr>
                                        <td>Breed </td>
                                        <td>
                                            <select name="Mbreed">
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
                                            <select name="Meyes" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Mhair" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Mhair2" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Mbody" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Mextra1" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Mextra2" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Msgene">
                                                <option value="++" selected="selected">None</option>
                                                <optgroup label="[Pattern]">
                                                    <option value="pattern_PP">Paint</option>
                                                    <option value="pattern_ZZ">ZigZag</option>
                                                    <option value="pattern_LL">Light Dapple</option>
                                                    <option value="pattern_HH">Heavy Dapple</option>
                                                    <option value="pattern_DD">Body Fade</option>
                                                    <option value="pattern_WW">ClownFish</option>
                                                    <option value="pattern_EE">Zebra</option>
                                                    <option value="pattern_TT">Tarantula</option>
                                                    <option value="pattern_MM">Monarch</option>
                                                    <option value="pattern_FF">Fawn</option>
                                                    <option value="pattern_II">ZebraFinch</option>
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
                                            <select name="Fbreed">
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
                                            <select name="Feyes" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Fhair" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Fhair2" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Fbody" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Fextra1" style="background-color: #FF0000;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Fextra2" style="background-color: #FFFF00;" onchange="this.style.background = '#' + this.value;">
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
                                            <select name="Fsgene">
                                                <option value="++" selected="selected">None</option>
                                                <optgroup label="[Pattern]">
                                                    <option value="pattern_PP">Paint</option>
                                                    <option value="pattern_ZZ">ZigZag</option>
                                                    <option value="pattern_LL">Light Dapple</option>
                                                    <option value="pattern_HH">Heavy Dapple</option>
                                                    <option value="pattern_DD">Body Fade</option>
                                                    <option value="pattern_WW">ClownFish</option>
                                                    <option value="pattern_EE">Zebra</option>
                                                    <option value="pattern_TT">Tarantula</option>
                                                    <option value="pattern_MM">Monarch</option>
                                                    <option value="pattern_FF">Fawn</option>
                                                    <option value="pattern_II">ZebraFinch</option>
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
                            <td colspan="2" style="text-align: center;">
                                Surprise Me
                                <input id="surprise" name="surprise" type="checkbox" value="true"></td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <select name="gender">
                                    <optgroup label="Gender">
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </optgroup>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <select name="age">
                                    <option value="Baby">Baby</option>
                                    <option value="Adult">Adult</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align: center;">
                                <input name="nextAction" value="ponyStarter" type="hidden">
                                <input name="Starter" value="Test Starter" type="submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="ponyStarterZone"></div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
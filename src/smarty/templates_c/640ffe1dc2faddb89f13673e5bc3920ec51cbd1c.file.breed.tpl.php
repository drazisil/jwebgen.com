<?php /* Smarty version Smarty-3.1.12, created on 2015-04-29 04:00:18
         compiled from "/home2/jwbecher/www/jwebgen/smarty/templates/breed.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1754056132527ccd79095a22-70739769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '640ffe1dc2faddb89f13673e5bc3920ec51cbd1c' => 
    array (
      0 => '/home2/jwbecher/www/jwebgen/smarty/templates/breed.tpl',
      1 => 1402181815,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1754056132527ccd79095a22-70739769',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_527ccd790d9855_71614741',
  'variables' => 
  array (
    'bodyID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527ccd790d9855_71614741')) {function content_527ccd790d9855_71614741($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JWebGen Pony Generator; Test breed a pony</title>
        <meta name="Keywords" content="pony generator, dream generator, starter, pony, generator">
        <meta name="Description" content="This pony generator lets you create dream ponies, starter ponies, or test breed between two existing ponies. This pony generator uses images from PonyIsland.">
        <meta name="Author" content="jwbecher@jwebnet.net">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="StyleSheet" href="/assets/screen.css" type="text/css" media="screen">
        <script type="text/javascript" src="/assets/js.php?page=breed"></script>
        <script type="text/javascript" src="/assets/google_analytics.js"></script>
        <script type="text/javascript" src="/assets/support_banner.js"></script>
    </head>

    <body id="<?php echo $_smarty_tpl->tpl_vars['bodyID']->value;?>
" onload="placeIt();">

        <?php echo $_smarty_tpl->getSubTemplate ('disclamer_ad_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div id="content">
            <div>
                <form name="form" method="get" action="<?php echo $_smarty_tpl->tpl_vars['bodyID']->value;?>
.php" onSubmit="return ajaxQuery('GET', generateBreedURL(), 'ponyBreedZone');
                    return false;">
                    <table id="tblBreed">
                        <tr>
                            <th colspan="3" style="text-align: center;">Breed a Pony Baby</th>
                        </tr>
                        <tr>
                            <td>Daddy URL<br>
                                <input type="text" size="20" maxlength="255" name="DadURL"><br>
                                - OR -<br>
                                Daddy ID<br>
                                <input type="text" size="10" maxlength="20" name="DadID">
                            </td>
                            <td></td>
                            <td>Mommy URL<br>
                                <input type="text" size="20" maxlength="255" name="MomURL"><br>
                                - OR -<br>
                                Mommy ID<br>
                                <input type="text" size="10" maxlength="20" name="MomID">
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Age<br>
                                <select name="age" id="age">
                                    <option value="Baby">Baby</option>
                                    <option value="Adult">Adult</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><br>Select the baby's S-Genes<br>
                                <select name="bspattern">
                                    <option value="none" selected="selected">--[Pattern S-Gene]--</option>
                                    <option value="NN">Numbat</option>
                                    <option value="NC">Colorized Numbat</option>
                                    <option value="GG">Gemsbok</option>
                                    <option value="GC">Colorized Gemsbok</option>
                                    <option value="AA">Appaloosa</option>
                                    <option value="AC">Colorized Appaloosa</option>
                                    <option value="KK">Koi</option>
                                    <option value="KC">Colorized Koi</option>
                                    <option value="II">ZebraFinch</option>
                                    <option value="IC">Colorized ZebraFinch</option>
                                    <option value="FF">Fawn</option>
                                    <option value="FC">Colorized Fawn</option>
                                    <option value="MM">Monarch</option>
                                    <option value="MC">Colorized Monarch</option>
                                    <option value="TT">Tarantula</option>
                                    <option value="TC">Colorized Tarantula</option>
                                    <option value="EE">Zebra</option>
                                    <option value="EC">Colorized Zebra</option>
                                    <option value="WW">ClownFish</option>
                                    <option value="WC">ClownFish Color</option>
                                    <option value="DD">Body Fade</option>
                                    <option value="DC">Colorized Fade</option>
                                    <option value="LL">Light Dapple</option>
                                    <option value="LC">Light Dapple Color</option>
                                    <option value="HH">Heavy Dapple</option>
                                    <option value="HC">Heavy Dapple Color</option>
                                    <option value="PP">Paint</option>
                                    <option value="PC">Color Paint</option>
                                    <option value="ZZ">ZigZag</option>
                                    <option value="ZC">Color ZZ</option>
                                    <option value="BB">Bioluminescence</option>
                                    <option value="BC">Bioluminescence Color</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <select name="bssocks">
                                    <option value="none" selected="selected">--[Socks S-Gene]--</option>
                                    <option value="HH">Socks</option>
                                    <option value="HC">Color Socks</option>
                                    <option value="FF">Stockings</option>
                                    <option value="FC">Color Stockings</option>
                                    <option value="DD">Faded</option>
                                    <option value="DC">Color Fade</option>
                                    <option value="OO">Okapi</option>
                                    <option value="OC">Color Okapi</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <select name="bshair">
                                    <option value="none" selected="selected">--[Hair S-Gene]--</option>
                                    <option value="RR">Rainbow</option>
                                    <option value="SS">Stripe</option>
                                    <option value="TT">Tips</option>
                                    <option value="MM">MStripes</option>
                                    <option value="QQ">QStripes</option>
                                    <option value="DD">Faded</option>
                                </select>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <select name="bsface">
                                    <option value="none" selected="selected">--[Face S-Gene]--</option>
                                    <option value="SS">Star</option>
                                    <option value="FF">Freckles</option>
                                    <option value="BB">Blaze</option>
                                    <option value="DD">Faded</option>
                                    <option value="SC">Star Color</option>
                                    <option value="FC">Freckles Color</option>
                                    <option value="BC">Blaze Color</option>
                                    <option value="DC">Faded Color</option>
                                    <option value="KK">Skull</option>
                                    <option value="KC">Skull Color</option>
                                </select>
                            </td>
                            <td></td>
                        <tr>
                            <td></td>
                            <td>
                                <input name="nextAction" value="ponyBreed" type="hidden">
                                <input name="BreedUs" value="Test Breed" type="submit">
                            </td>
                            <td></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="ponyBreedZone"></div>
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
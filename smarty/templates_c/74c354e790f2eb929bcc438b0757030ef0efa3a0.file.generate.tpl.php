<?php /* Smarty version Smarty-3.1.12, created on 2015-04-29 03:47:39
         compiled from "/home2/jwbecher/www/jwebgen/smarty/templates/generate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:871625357527cd04cec3960-55263424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74c354e790f2eb929bcc438b0757030ef0efa3a0' => 
    array (
      0 => '/home2/jwbecher/www/jwebgen/smarty/templates/generate.tpl',
      1 => 1402209831,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '871625357527cd04cec3960-55263424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_527cd04cf22a49_56899153',
  'variables' => 
  array (
    'bodyID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527cd04cf22a49_56899153')) {function content_527cd04cf22a49_56899153($_smarty_tpl) {?><!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JWebGen Pony Generator; Generate a dream pony</title>
        <meta name="Keywords" content="pony generator, dream generator, starter, pony, generator">
        <meta name="Description" content="This pony generator lets you create dream ponies, starter ponies, or test breed between two existing ponies. This pony generator uses images from PonyIsland.">
        <meta name="Author" content="jwbecher@jwebnet.net">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="StyleSheet" href="/assets/screen.css" type="text/css" media="screen">
        <link rel="StyleSheet" href="/assets/color_picker.css" type="text/css" media="screen">
        <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="/assets/logger.js"></script>
        <script type="text/javascript" src="/assets/js.php?page=generate"></script>
        <script type="text/javascript" src="/assets/support_banner.js"></script>
        <script type="text/javascript" src="/assets/google_analytics.js"></script>
    </head>

    <body id="<?php echo $_smarty_tpl->tpl_vars['bodyID']->value;?>
" onload="placeIt();">

        <?php echo $_smarty_tpl->getSubTemplate ('disclamer_ad_nav.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


        <div id="content">
            Generate your own dream pony. Mix and match the colors and S-Genes together, or check Surprise me for, well, a surprise.
            <span style="color: #ff0000;">The images used on this site are owned and copyrighted by <a href="http://ponyisland.net">ponyisland.net</a> and are used with permission.<br> Any use of these images outside of this site requires permission from ponyisland.net.</span>
            <div>
                <table>
                    <tr>
                        <th>Make Your Own Pony<a href="http://jwebgen.com/continuousferry.php"></a></th>
                        <th></th>
                    </tr>
                    <tr>
                        <td>
                            <form name="form1" method="post" action="ponydo.php" onSubmit="return genponyjs();
                                                return false;">
                                <table>
                                    <tr>
                                        <td>Breed </td>
                                        <td>
                                            <select name="breed">
                                                <option value="4" selected="selected">EarthPony</option>
                                                <option value="5">Unicorn</option>
                                                <option value="8">MerPony</option>
                                                <option value="1">SeaPony</option>
                                                <option value="6">ShellPony</option>
                                                <option value="7">FairyPony</option>
                                                <option value="3">FlutterPony</option>
                                                <option value="2">Pegasus</option>
                                                <option value="10">WingedUnicorn</option>
                                                <option value="9">DragonPony</option>
                                                <option value="11">PhoenixPony</option>
                                                <option value="12">Valkyrie</option>
                                                <option value="13">KirinPony</option>
                                                <option value="14">MerDragon</option>
                                                <option value="15">WishingPony</option>
                                                <option value="16">PurrPony</option>
                                                <option value="17">ReindeerPony</option>
                                                <option value="18">MountainPony</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Gender </td>
                                        <td>
                                            <select name="gender">
                                                <option value="Male" selected="selected">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Age </td>
                                        <td>
                                            <select name="age">
                                                <option value="Baby" selected="selected">Baby</option>
                                                <option value="Adult">Adult</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Body </td>
                                        <td><input type="text" size="10" maxlength="7" id="body" name="body"> 
                                            <span id="bodyColor" class="colorPicker">&nbsp;</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Hair </td>
                                        <td><input type="text" size="10" maxlength="7" id="hair" name="hair"> 
                                            <span id="hairColor" class="colorPicker">&nbsp;</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Hair 2 </td>
                                        <td><input type="text" size="10" maxlength="7" id="hair2" name="hair2"> 
                                            <span id="hair2Color" class="colorPicker">&nbsp;</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Eyes </td>
                                        <td><input type="text" size="10" maxlength="7" id="eyes" name="eyes"> 
                                            <span id="eyesColor" class="colorPicker">&nbsp;</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Extra 1 </td>
                                        <td><input type="text" size="10" maxlength="7" id="extra1" name="extra1"> 
                                            <span id="extra1Color" class="colorPicker">&nbsp;</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Extra 2</td>
                                        <td><input type="text" size="10" maxlength="7" id="extra2" name="extra2"> 
                                            <span id="extra2Color" class="colorPicker">&nbsp;</span></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Pattern </td>
                                        <td>
                                            <select name="spattern">
                                                <option value="" selected="selected">[Pattern]</option>
                                                <option value="1">Paint</option>
                                                <option value="1|17">Paint Color</option>
                                                <option value="2">ZigZag</option>
                                                <option value="2|17">ZigZag Color</option>
                                                <option value="3">Light Dapple</option>
                                                <option value="3|17">Light Dapple Color</option>
                                                <option value="4">Heavy Dapple</option>
                                                <option value="4|17">Heavy Dapple Color</option>
                                                <option value="5">Body Fade</option>
                                                <option value="5|17">Body Fade Color</option>
                                                <option value="6">Clownfish</option>
                                                <option value="6|17">Clownfish Color</option>
                                                <option value="7">Zebra</option>
                                                <option value="7|17">Zebra Color</option>
                                                <option value="8">Tarantula</option>
                                                <option value="8|17">Tarantula Color</option>
                                                <option value="9">Monarch</option>
                                                <option value="9|17">Monarch Color</option>
                                                <option value="10">Fawn</option>
                                                <option value="10|17">Fawn Color</option>
                                                <option value="11">ZebraFinch</option>
                                                <option value="11|17">ZebraFinch Color</option>
                                                <option value="12">Koi</option>
                                                <option value="12|17">Koi Color</option>
                                                <option value="13">Appaloosa</option>
                                                <option value="13|17">Appaloosa Color</option>
                                                <option value="14">Gemsbok</option>
                                                <option value="14|17">Gemsbok Color</option>
                                                <option value="15">Numbat</option>
                                                <option value="15|17">Numbat Color</option>
                                                <option value="16">Bioluminescence</option>
                                                <option value="16|17">Bioluminescence Color</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Socks </td>
                                        <td>
                                            <select name="ssocks">
                                                <option value="" selected="selected">[Socks]</option>
                                                <option value="18">Socks</option>
                                                <option value="18|22">Color Socks</option>
                                                <option value="19">Stockings</option>
                                                <option value="19|22">Color Stockings</option>
                                                <option value="20">Faded</option>
                                                <option value="20|22">Color Fade</option>
                                                <option value="21">Okapi</option>
                                                <option value="21|22">Color Okapi</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Hair </td>
                                        <td>
                                            <select name="shair">
                                                <option value="" selected="selected">[Hair]</option>
                                                <option value="23">Stripe</option>
                                                <option value="24">Rainbow</option>
                                                <option value="25">Tips</option>
                                                <option value="26">MStripes</option>
                                                <option value="27">QStripes</option>
                                                <option value="28">Faded</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    <tr>
                                        <td>Face </td>
                                        <td>
                                            <select name="sface">
                                                <option value="" selected="selected">[Face]</option>
                                                <option value="29">Star</option>
                                                <option value="29|34">Star Color</option>
                                                <option value="30">Freckles</option>
                                                <option value="30|34">Freckles Color</option>
                                                <option value="31">Blaze</option>
                                                <option value="31|34">Blaze Color</option>
                                                <option value="32">Faded</option>
                                                <option value="32|34">Faded Color</option>
                                                <option value="33">Skull</option>
                                                <option value="33|34">Skull Colored</option>
                                            </select>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Surprise Me</td>
                                        <td><input id="surprise" name="surprise" type="checkbox" value="true"></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><input name="Generate" value="Generate" type="submit"></td>
                                        <td></td>
                                    </tr>
                                </table>
                            </form>
                        </td>
                        <td>
                            <div id="genpony"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
<?php echo $_smarty_tpl->getSubTemplate ('footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>
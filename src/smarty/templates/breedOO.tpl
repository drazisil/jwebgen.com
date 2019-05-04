<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>JWebGen Pony Generator; Test breed a pony offspring offspring</title>
        <meta name="Keywords" content="pony generator, dream generator, starter, pony, generator">
        <meta name="Description" content="This pony generator lets you create dream ponies, starter ponies, or test breed between two existing ponies. This pony generator uses images from PonyIsland.">
        <meta name="Author" content="jwbecher@jwebnet.net">
        <link rel="shortcut icon" href="/assets/favicon.ico">
        <link rel="StyleSheet" href="/assets/screen.css" type="text/css" media="screen">
        <script type="text/javascript" src="/assets/js.php?page=breedOO"></script>
        <script type="text/javascript" src="/assets/google_analytics.js"></script>
        <script type="text/javascript" src="/assets/support_banner.js"></script>
    </head>

<body id="{$bodyID}" onload="placeIt();">

{include file='disclamer_ad_nav.tpl'}

        <div id="content">
            <div>
                <form name="form" method="get" action="{$bodyID}.php" onSubmit="return ajaxQuery('GET', generateBreedOOURL(), 'ponyBreedOOZone');
                        return false;">
                    <table id="tblBreed">
                        <tr>
                            <th colspan="3" style="text-align: center;">Breed a Pony Baby</th>
                        </tr>
                        <tr>
                            <td>Father 1 URL<br>
                                <input type="text" size="20" maxlength="255" name="P1URL"><br>
                                - OR -<br>
                                Father 1 ID<br>
                                <input type="text" size="10" maxlength="20" name="P1ID">
                            </td>
                            <td>Mother 1 URL<br>
                                <input type="text" size="20" maxlength="255" name="P2URL"><br>
                                - OR -<br>
                                Mother 1 ID<br>
                                <input type="text" size="10" maxlength="20" name="P2ID">
                            </td>
                            <td>Father 2 URL<br>
                                <input type="text" size="20" maxlength="255" name="P3URL"><br>
                                - OR -<br>
                                Father 2 ID<br>
                                <input type="text" size="10" maxlength="20" name="P3ID">
                            </td>
                            <td>Mother 2 URL<br>
                                <input type="text" size="20" maxlength="255" name="P4URL"><br>
                                - OR -<br>
                                Mother 2 ID<br>
                                <input type="text" size="10" maxlength="20" name="P4ID">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Age<br>
                                <select name="age" id="age">
                                    <option value="Baby">Baby</option>
                                    <option value="Adult">Adult</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <br>Select the baby's S-Genes<br>
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
                                    <option value="FT">Fawn</option>
                                    <option value="FC">Colorized Fawn</option>
                                    <option value="MM">Monarch</option>
                                    <option value="MC">Colorized Monarch</option>
                                    <option value="TT">Tarantula</option>
                                    <option value="TC">Colorized Tarantula</option>
                                    <option value="EE">Zebra</option>
                                    <option value="EC">Colorized Zebra</option>
                                    <option value="WW">ClownFish</option>
                                    <option value="WC">Colorized ClownFish Color</option>
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
                                </select><br>
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
                                </select><br>
                                <select name="bshair">
                                    <option value="none" selected="selected">--[Hair S-Gene]--</option>
                                    <option value="RR">Rainbow</option>
                                    <option value="SS">Stripe</option>
                                    <option value="TT">Tips</option>
                                    <option value="MM">MStripes</option>
                                    <option value="QQ">QStripes</option>
                                    <option value="DD">Faded</option>
                                </select><br>
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
                        <tr>
                            <td colspan="4">
                                <input name="nextAction" value="ponyBreed" type="hidden">
                                <input name="BreedUs" value="Test Breed" type="submit">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
            <div id="ponyBreedOOZone"></div>
        </div>
{include file='footer.tpl'}
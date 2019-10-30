<style>
    #IdTitle {padding-left: 120px;}
    ul.menu, ul.menu li{margin:0px;padding:0px;list-style:none;position:relative;}
    ul.menu li{width: 134px; height: 70px; margin-left: -15px; margin-top: 165px; margin-right: 0px; float:left;}
    ul.menu div{display:none;position:absolute;top:50px;left:0px}
    ul.menu div a{display:block}
    ul.menu li:hover div{display:block;}
    ul.menu area:hover div{display:block;}
    #Level2-1 {margin-left: 14px; margin-top: 20px;}
    #Level2-2 {margin-left: -122px; margin-top: 20px;}
    #Level2-3 {margin-left: -218px; margin-top: 20px;}
    #Level2-4 {margin-left: -292px; margin-top: 20px;}
    #Level2-5 {margin-left: -292px; margin-top: 20px;}
</style>
<div id="IdTitle" style=" color: #ffffff; opacity:0.9">
    <h1>Online Grocery Store</h1>
</div>
<div style="height:236px; width: 600px; margin-left: 10px; margin-top: 50px;
     background-image:url('../images/MapLv1.png'); background-size: 565px 236px; background-repeat: no-repeat;">
    <ul id="IdMenu" class="menu">
        <li>
            <a href="#"></a>
            <div id="Level2-1">
                <img src="../images/MapLv2-1.png" width="440" height="300" usemap="#iMapLevel1-1" hidefocus="true" />
            </div>
            <map name="iMapLevel1-1" id="productmap">
                <area shape="rect" coords="5,95,80,140"     href ="#" onclick="ShowData(1002)" onfocus="blur(this)"/>
                <area shape="rect" coords="60,250,140,310"  href ="#" onclick="ShowData(1000)" onfocus="blur(this)"/>
                <area shape="rect" coords="150,250,240,310" href ="#" onclick="ShowData(1001)" onfocus="blur(this)"/>
                <area shape="rect" coords="210,90,290,150"  href ="#" onclick="ShowData(1003)" onfocus="blur(this)"/>
                <area shape="rect" coords="270,245,350,310" href ="#" onclick="ShowData(1004)" onfocus="blur(this)"/>
                <area shape="rect" coords="360,245,455,310" href ="#" onclick="ShowData(1005)" onfocus="blur(this)"/>
            </map>
        </li>
        <li>
            <a href="#"></a>
            <div id="Level2-2">
                <img src="../images/MapLv2-2.png" width="590" height="315" usemap="#iMapLevel1-2" hidefocus="true" />
            </div>
            <map name="iMapLevel1-2" id="productmap2">
                <area shape="rect" coords="0,95,80,150"     href ="#" onclick="ShowData(3002)" onfocus="blur(this)"/>
                <area shape="rect" coords="30,255,140,310"  href ="#" onclick="ShowData(3000)"onfocus="blur(this)"/>
                <area shape="rect" coords="150,255,260,310" href ="#" onclick="ShowData(3001)" onfocus="blur(this)"/>
                <area shape="rect" coords="165,90,246,150"  href ="#" onclick="ShowData(3003)" onfocus="blur(this)"/>
                <area shape="rect" coords="250,90,332,150"  href ="#" onclick="ShowData(3004)" onfocus="blur(this)"/>
                <area shape="rect" coords="335,90,420,150"  href ="#" onclick="ShowData(3006)" onfocus="blur(this)"/>
                <area shape="rect" coords="425,90,500,150"  href ="#" onclick="ShowData(3007)" onfocus="blur(this)"/>
                <area shape="rect" coords="505,90,590,150"  href ="#" onclick="ShowData(3005)" onfocus="blur(this)"/>
            </map>
        </li>
        <li>
            <a href="#"></a>
            <div id="Level2-3">
                <img src="../images/MapLv2-3.png" width="565" height="305" usemap="#iMapLevel1-3" hidefocus="true" />
            </div>
            <map name="iMapLevel1-3" id="productmap3">
                <area shape="rect" coords="0,245,80,305"    href ="#" onclick="ShowData(4003)" onfocus="blur(this)"/>
                <area shape="rect" coords="90,245,170,305"  href ="#" onclick="ShowData(4004)" onfocus="blur(this)"/>
                <area shape="rect" coords="170,245,253,305" href ="#" onclick="ShowData(4000)" onfocus="blur(this)"/>
                <area shape="rect" coords="269,245,342,305" href ="#" onclick="ShowData(4001)" onfocus="blur(this)"/>
                <area shape="rect" coords="355,245,445,305" href ="#" onclick="ShowData(4002)" onfocus="blur(this)"/>
                <area shape="rect" coords="475,90,555,150"  href ="#" onclick="ShowData(4005)"onfocus="blur(this)"/>
            </map>
        </li>
        <li>
            <a href="#"></a>
            <div id="Level2-4">
                <img src="../images/MapLv2-4.png" width="500" height="310" usemap="#iMapLevel1-4" hidefocus="true" />
            </div>
            <map name="iMapLevel1-4" id="productmap4">
                <area shape="rect" coords="0,95,80,150"     href ="#" onclick="ShowData(2002)" onfocus="blur(this)"/>
                <area shape="rect" coords="55,250,150,420"  href ="#" onclick="ShowData(2000)" onfocus="blur(this)"/>
                <area shape="rect" coords="160,250,250,420" href ="#" onclick="ShowData(2001)" onfocus="blur(this)"/>
                <area shape="rect" coords="205,90,285,150"  href ="#" onclick="ShowData(2005)" onfocus="blur(this)"/>
                <area shape="rect" coords="265,250,355,420" href ="#" onclick="ShowData(2003)" onfocus="blur(this)"/>
                <area shape="rect" coords="360,250,460,420" href ="#" onclick="ShowData(2004)" onfocus="blur(this)"/>
                <area shape="rect" coords="415,90,500,150"  href ="#" onclick="ShowData(2006)" onfocus="blur(this)"/>
            </map>
        </li>
        <li>
            <a href="#"></a>
            <div id="Level2-5">
                <img src="../images/MapLv2-5.png" width="390" height="310" usemap="#iMapLevel1-5" hidefocus="true" />
            </div>
            <map name="iMapLevel1-5" id="productmap5">
                <area shape="rect" coords="0,85,80,145"     href ="#" onclick="ShowData(5002)" onfocus="blur(this)"/>
                <area shape="rect" coords="100,85,180,145"  href ="#" onclick="ShowData(5003)" onfocus="blur(this)"/>
                <area shape="rect" coords="155,250,240,310" href ="#" onclick="ShowData(5000)" onfocus="blur(this)"/>
                <area shape="rect" coords="260,250,340,310" href ="#" onclick="ShowData(5001)"onfocus="blur(this)"/>
                <area shape="rect" coords="310,85,390,145"  href ="#" onclick="ShowData(5004)" onfocus="blur(this)"/>
            </map>
        </li>
    </ul>
</div>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript">
function ShowData(productID) {
// define ShowData function;
var frameid = parent.document.getElementById("IdTopRight");
frameid.src = "src/showproduct.php?product_id="+ productID;
}
</script>

<?php
    session_start();
    
?>
<html>
    <head>
        <title>Работа</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head>

    <body topmargin="0" bottommargin="0" rightmargin="0"  leftmargin="0"   background="../images/back_main.gif">

    <form id="order-form" method="post" action="bill.php">
        <table cellpadding="0" cellspacing="0" border="0"  align="center" width="583" height="614">
            <tr>
                <td valign="top" width="583" height="208" background="../images/row1.gif">
                    <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif">    </div>
                    <div style="margin-left:50px; margin-top:69px ">
                        <a href="../index.php">Главная<img src="../images/m1.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="20" height="10">
                        <a href="order.php">Заказ<img src="../images/m2.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="basket.php">Корзина<img src="../images/m3.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="index-3.php">О компании<img src="../images/m4.gif" border="0" ></a>
                        <img src="../images/spacer.gif" width="5" height="10">
                        <a href="index-4.php">Контакты<img src="../images/m5.gif" border="0" ></a>
                        
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="583" height="338"  bgcolor="#FFFFFF">
                <?if(isset($_SESSION['authorized'])):?>
                    <?//$_SESSION = array();?>
                    <table cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td valign="top" height="338" width="42"></td>
                            <td valign="top" height="338" width="492">
                                <table cellpadding="0" cellspacing="0" border="0">
                                    <tr>
                                        <td width="492" valign="top" height="106">

                                            <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                                <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                                <div style="margin-left:95px "><font class="title">Выберите услугу</font><br>

                                                
                                                <!--(1-1)-->
                                                    
                                                <select value=""  name="type" id="type"><div>
                                                   <option value="Круиз" >Круиз (2000р, на большом теплоходе)</option>
                                                    <option value="Сафари" >Сафари (3000р, в жаркой пустные)</option>
                                                    <option value="Гастротур">Гастротур (1000р, этнические рестораны)</option> </div>
                                                     </select>
                                                </div> 
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="492" valign="top" height="232">
                                            <table cellpadding="0" cellspacing="0" border="0">
                                                <tr>
                                                    <td valign="top" height="232" width="248">
                                                        <div style="margin-left:6px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:6px; margin-top:7px; "><img src="../images/1_w2.gif"></div>

                                                        <!--   (1-3)-->
                                                        <div>
                                                        <p>Вид питания:</p>
                                                                <p><input type="radio" name="hero" id="hero"  value="Завтрак" checked>Завтрак - 10р (с 8-00 до 10-00)</input></p>
                                                                <p><input type="radio" name="hero" id="hero"  value="Ужин">Ужин - 20р (с 19-00 до 22-00)</input></p>
                                                                <p><input type="radio" name="hero" id="hero"  value="Пансион">Пансион - 50р (+обед с 13-00 до 15-00)</input></p>
                                        
                                                       
                                                
                                                        <div style="margin-top:6px; margin-left:6px "><img src="../images/pointer.gif"><img src="../images/spacer.gif" width="3">

                                                        </div>
                                                        <div style="margin-top:6px; margin-left:6px "><img src="../images/pointer.gif"><img src="../images/spacer.gif" width="3">

                                                        </div> 
                                                 

                                                    <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                                    <td valign="top" height="215" width="243">
                                                        <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                                        <div style="margin-left:22px; margin-top:13px; ">
                                                         
                                                            <label for="name">Имя</label><br>
                                                            <input id="name" type="text" name="name"><br>
                                                            <label for="email">Электронная почта</label>
                                                            <input id="email" type="email" name="email"><br>
                                                            <label for="phone">Номер телефона +7</label>
                                                            <input id="phone" type="tel" id="phone" name="phone"
                                                                
                                                                required><br>
                       
<br><br><br><br>
                                                            <div style="margin-left:67px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>
                                                        </div>
                                                        <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                                        <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w4.gif"></div>
                                                        <div style="margin-left:22px; margin-top:9px; ">

                                                        <button type="submit" form="order-form" name="next">Далее</button>
                                                                </div> 
                                                            </div>

                                                            <div style="margin-left:0px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td valign="top" height="338" width="49"></td>
                        </tr>
                    </table>
                </td>
            </tr>
            </form>
            <? endif?>
            <tr>
                <td valign="top" width="583" height="68" background="../images/row3.gif">
                    <div style="margin-left:51px; margin-top:31px ">
                        <a href="#"><img src="../images/p1.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="26" height="9">
                        <a href="#"><img src="../images/p2.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="30" height="9">
                        <a href="#"><img src="../images/p3.gif" border="0"></a>
                        <img src="../images/spacer.gif" width="149" height="9">
                        <a href="index-5.php"><img src="../images/copyright.gif" border="0"></a>
                    </div>
                </td>
            </tr>

        </table>
    </body>
</html>

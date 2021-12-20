<?php
    session_start();
   //  echo "<pre>";
   //  var_dump($_POST);
   //  echo "<pre>";
   //  echo "<pre>";
   //  var_dump($_SESSION);
   //  echo "<pre>";

   $_SESSION['data']['type'] =  $_POST['type']  ;
   $_SESSION['data']['hero'] =  $_POST['hero']  ;
     
      $_SESSION['data']['name'] =  $_POST['name']  ;
      $_SESSION['data']['email'] =  $_POST['email'];
      $_SESSION['data']['phone'] =  $_POST['phone'];
    
?>
<html>
   <head>
      <title>Работа</title>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
      <link href="../css/style.css" rel="stylesheet" type="text/css">
   </head>

   <body topmargin="0" bottommargin="0" rightmargin="0"  leftmargin="0"   background="../images/back_main.gif">
   <form action="basket.php" method="post">
      <table cellpadding="0" cellspacing="0" border="0"  align="center" width="583" height="614">
         <tr>
            <td valign="top" width="583" height="208" background="../images/row1.gif">
               <div style="margin-left:88px; margin-top:57px "><img src="../images/w1.gif"></div>

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
               <div style="margin-left:400px; margin-top:10px "></div>       
            </td>
         </tr>
         <tr>
            <td valign="top" width="583" height="338"  bgcolor="#FFFFFF">
               <table cellpadding="0" cellspacing="0" border="0">
                  <tr>
                     <td valign="top" height="338" width="42"></td>
                     <td valign="top" height="338" width="492">
                        <table cellpadding="0" cellspacing="0" border="0">
                           <tr>
                              <td width="492" valign="top" height="106">


                                 <div style="margin-left:1px; margin-top:2px; margin-right:10px "><br>
                                    <div style="margin-left:5px "><img src="../images/1_p1.gif" align="left"></div>
                                    <div style="margin-left:95px "><font class="title"> Страна:  </font>
                                    <br>
                                     <?php
                                           
                                       switch($_POST['type'])
                                       {
                                          case "Круиз":
                                             {
                                                $_SESSION['data']['pricetype'] =2000;
                                                echo     '<p><input name="country" type="radio" value="Италия">Италия</p>';
                                                echo     '<p><input name="country" type="radio" value="Хорватия">Хорватия</p>';
                                                echo     '<p><input name="country" type="radio" value="Швеция">Швеция</p>';
                                                $mas = array("Италия" => 200,"Хорватия" => 100,"Швеция" => 300);
                                                break;
                                             }
                                             case "Сафари":
                                             {
                                                  
                                                   $_SESSION['data']['pricetype'] =3000;
                                                echo     '<p><input name="country" type="radio" value="Кения">Кения</p>';
                                                echo     '<p><input name="country" type="radio" value="Марокко">Марокко</p>';
                                                echo     '<p><input name="country" type="radio" value="ЮАР">ЮАР</p>';
                                                $mas = array("Кения" => 500,"Марокко" => 300,"ЮАР" => 800);
                                                break;
                                             }
                                             case "Гастротур":
                                             {
                                                
                                                $_SESSION['data']['pricetype'] =1000;
                                                echo     '<p><input name="country" type="radio" value="Дания">Дания</p>';
                                                echo     '<p><input name="country" type="radio" value="Норвегия">Норвегия</p>';
                                                echo     '<p><input name="country" type="radio" value="Франция">Франция</p>';
                                                $mas = array("Дания" => 50,"Норвегия" => 100,"Франция" => 80);
                                                break;
                                             }
                                             default: break;
                                       }
                                       $_SESSION['data']['priceofcountry'] =$mas;
                                       ?>
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
                                          <div style="margin-left:6px; margin-top:11px; margin-right:0px "><font class="title">
                                         
                                           </font></div>
                                          <div style="margin-top:10px; margin-left:6px ">
                                           
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                          

                                    <p>Дополнительные услуги:</p>
                                    <!--(2-2)-->
                                    <?php
                                     
                                     $priceofdop = array(0,0,0);
                                     switch($_POST['type'])
                                     {
                                          case "Круиз":
                                          {
                                                echo     '<p>Развлечения:</p>';
                                                echo    '<input name="check" value="Сауна" type="checkbox"/>Сауна</br></br>';
                                                echo    '<input name="check1" value="Бассейн" type="checkbox"/>Бассейн</br></br>';
                                                echo    '<input name="check2" value="Бар" type="checkbox"/>Бар</br></br>';
                                                $priceofdop[0]=50; $priceofdop[1]=100; $priceofdop[2]=200;
                                                break;
                                          }
                                          case "Сафари":
                                          {
                                                echo     '<p>Экскурсии:</p>';
                                                echo    '<input name="check" value="Кормление животных" type="checkbox"/>Кормление животных</br></br>';
                                                echo    '<input name="check1" value="Фотоохота" type="checkbox"/>Фотоохота</br></br>';
                                                echo    '<input name="check2" value="Разделывание туши" type="checkbox"/>Разделывание туши</br></br>';
                                                $priceofdop[0]=100; $priceofdop[1]=50; $priceofdop[2]=200;
                                                break;
                                          }
                                          case "Гастротур":
                                          {
                                                echo     '<p>Места:</p>';
                                                echo    '<input name="check" value="Местный рынок" type="checkbox"/>Местный рынок</br></br>';
                                                echo    '<input name="check1" value="Приготовление еды" type="checkbox"/>Приготовление еды</br></br>';
                                                echo    '<input name="check2" value="Виноферма" type="checkbox"/>Виноферма</br></br>';
                                                $priceofdop[0]='50'; $priceofdop[1]='200'; $priceofdop[2]='100';
                                                break;
                                          }
                                          default: break;
                                     } 
                                     $_SESSION['data']['priceofdop'] =$priceofdop;
                                    ?>

                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                           
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                            
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                          
                                          </div> 

                                       <td valign="top" height="215" width="1" background="../images/tal.gif" style="background-repeat:repeat-y"></td>
                                       <td valign="top" height="215" width="243">
                                          <div style="margin-left:22px; margin-top:2px; "><img src="../images/hl.gif"></div>
                                          <div style="margin-left:22px; margin-top:7px; "><img src="../images/1_w2.gif"></div>
                                          <div style="margin-left:22px; margin-top:13px; ">

                                             <div style="margin-left:0px; margin-top:0px; margin-right:0px "><font class="title">  Количество дней: </font></div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                            <input type="text" name="days"></input>
                                          </div> 
                                          <div style="margin-top:6px; margin-left:6px ">
                                             
                                          </div>
                                          <div style="margin-top:6px; margin-left:6px ">
                                             
                                          </div>

                                             <div style="margin-left:67px; margin-top:7px; margin-right:10px "><img src="../images/pointer.gif"><a href="#"><img src="../images/read_more.gif" border="0"></a></div>
                                          </div>
                                          <div style="margin-left:22px; margin-top:16px; "><img src="../images/hl.gif"></div>
                                          
                                          <div style="margin-left:22px; margin-top:9px; ">
                                          <button type="submit" name="next" onclick="document.location='/pages/order.php'">Назад</button>
                                          <button type="submit" name="next">Далее</button>
                                             

    
                                             
                                             
                                             <div style="margin-left:67px; margin-top:0px; margin-right:0px ">
<font class="title">

</font><br>

<div> 

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
   </form>
   </body>
</html>

<?php include('server-members.php') ?>

<!DOCTYPE html>
<html lang="en" >

<head>
	<script type="text/javascript">
        if (screen.width <= 720) {
        window.location = "/member/register_mobileview.php";
    }
</script>
  <meta charset="UTF-8">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      html {
  height: 100%;
  background: radial-gradient(ellipse at bottom, #1b2735 0%, #090a0f 100%);
  overflow: hidden;
}

#stars {
  width: 1px;
  height: 1px;
  box-shadow: 1800px 451px #FFF , 1918px 538px #FFF , 1292px 689px #FFF , 1346px 793px #FFF , 350px 773px #FFF , 1420px 741px #FFF , 175px 222px #FFF , 710px 1366px #FFF , 1732px 112px #FFF , 898px 751px #FFF , 35px 422px #FFF , 197px 882px #FFF , 1907px 501px #FFF , 570px 815px #FFF , 751px 859px #FFF , 1865px 1327px #FFF , 1328px 873px #FFF , 1661px 478px #FFF , 436px 830px #FFF , 726px 859px #FFF , 489px 1787px #FFF , 1151px 1051px #FFF , 1160px 304px #FFF , 137px 1149px #FFF , 1210px 701px #FFF , 1428px 1365px #FFF , 213px 1065px #FFF , 1032px 1961px #FFF , 721px 552px #FFF , 679px 303px #FFF , 515px 1988px #FFF , 1780px 1100px #FFF , 894px 1534px #FFF , 1788px 1208px #FFF , 1883px 1989px #FFF , 398px 849px #FFF , 1238px 1520px #FFF , 749px 428px #FFF , 1210px 1456px #FFF , 1765px 349px #FFF , 1934px 780px #FFF , 572px 1601px #FFF , 1770px 1279px #FFF , 1520px 1298px #FFF , 1757px 487px #FFF , 1842px 931px #FFF , 253px 383px #FFF , 967px 195px #FFF , 1368px 729px #FFF , 1303px 209px #FFF , 1392px 1241px #FFF , 95px 410px #FFF , 629px 1454px #FFF , 1991px 1182px #FFF , 1321px 1928px #FFF , 1176px 300px #FFF , 707px 1335px #FFF , 1293px 1324px #FFF , 1354px 1394px #FFF , 1730px 988px #FFF , 761px 852px #FFF , 562px 846px #FFF , 1806px 1285px #FFF , 991px 1430px #FFF , 1198px 617px #FFF , 916px 91px #FFF , 692px 767px #FFF , 1664px 80px #FFF , 1832px 1319px #FFF , 1840px 1241px #FFF , 872px 1483px #FFF , 202px 1973px #FFF , 24px 365px #FFF , 692px 1420px #FFF , 1880px 1182px #FFF , 116px 1802px #FFF , 1474px 10px #FFF , 386px 1404px #FFF , 1386px 224px #FFF , 504px 786px #FFF , 735px 710px #FFF , 600px 1267px #FFF , 973px 917px #FFF , 176px 1336px #FFF , 153px 792px #FFF , 1236px 627px #FFF , 1889px 1820px #FFF , 1069px 331px #FFF , 1779px 1883px #FFF , 1598px 51px #FFF , 1579px 898px #FFF , 763px 1972px #FFF , 1077px 1375px #FFF , 1861px 883px #FFF , 341px 1125px #FFF , 1163px 1251px #FFF , 1473px 1811px #FFF , 1310px 1082px #FFF , 631px 1552px #FFF , 189px 1146px #FFF , 870px 1923px #FFF , 1201px 1586px #FFF , 69px 1094px #FFF , 442px 1535px #FFF , 1645px 1448px #FFF , 711px 953px #FFF , 1300px 1027px #FFF , 1181px 373px #FFF , 1857px 1513px #FFF , 842px 1520px #FFF , 1943px 1439px #FFF , 1616px 1216px #FFF , 907px 1608px #FFF , 1874px 939px #FFF , 1191px 614px #FFF , 942px 1736px #FFF , 893px 997px #FFF , 1691px 1962px #FFF , 1940px 1229px #FFF , 469px 1573px #FFF , 388px 1122px #FFF , 476px 1882px #FFF , 426px 185px #FFF , 217px 1546px #FFF , 647px 324px #FFF , 677px 1825px #FFF , 712px 23px #FFF , 337px 1361px #FFF , 1161px 350px #FFF , 536px 931px #FFF , 1209px 1891px #FFF , 592px 1155px #FFF , 448px 1126px #FFF , 1909px 806px #FFF , 877px 860px #FFF , 1038px 295px #FFF , 759px 395px #FFF , 1576px 1733px #FFF , 1467px 335px #FFF , 79px 262px #FFF , 683px 472px #FFF , 643px 1365px #FFF , 333px 1482px #FFF , 1026px 1230px #FFF , 168px 1153px #FFF , 417px 624px #FFF , 246px 1517px #FFF , 824px 547px #FFF , 1475px 133px #FFF , 1884px 186px #FFF , 1367px 222px #FFF , 1084px 927px #FFF , 1875px 232px #FFF , 574px 1847px #FFF , 1570px 1598px #FFF , 988px 307px #FFF , 1422px 194px #FFF , 1053px 1875px #FFF , 974px 388px #FFF , 562px 655px #FFF , 1895px 658px #FFF , 1030px 1748px #FFF , 1820px 970px #FFF , 1745px 595px #FFF , 1843px 762px #FFF , 1080px 991px #FFF , 337px 816px #FFF , 1653px 897px #FFF , 591px 722px #FFF , 1007px 1895px #FFF , 265px 725px #FFF , 482px 1386px #FFF , 1300px 1208px #FFF , 1247px 1704px #FFF , 1133px 801px #FFF , 1747px 584px #FFF , 636px 388px #FFF , 1949px 1779px #FFF , 682px 1880px #FFF , 1010px 850px #FFF , 1424px 1949px #FFF , 643px 906px #FFF , 710px 1391px #FFF , 1501px 1913px #FFF , 1611px 29px #FFF , 450px 553px #FFF , 321px 1490px #FFF , 485px 1451px #FFF , 383px 752px #FFF , 1343px 253px #FFF , 255px 56px #FFF , 1046px 860px #FFF , 1725px 1501px #FFF , 650px 1736px #FFF , 335px 437px #FFF , 68px 1982px #FFF , 118px 713px #FFF , 818px 1042px #FFF , 1362px 787px #FFF , 521px 189px #FFF , 1544px 1780px #FFF , 1425px 1993px #FFF , 504px 1243px #FFF , 191px 318px #FFF , 1974px 780px #FFF , 1187px 1802px #FFF , 1072px 981px #FFF , 1236px 798px #FFF , 1706px 911px #FFF , 1585px 1377px #FFF , 490px 929px #FFF , 100px 599px #FFF , 1860px 885px #FFF , 1664px 1945px #FFF , 745px 814px #FFF , 862px 1182px #FFF , 3px 1778px #FFF , 1355px 1008px #FFF , 1215px 321px #FFF , 660px 1601px #FFF , 264px 1139px #FFF , 696px 1357px #FFF , 403px 1209px #FFF , 43px 633px #FFF , 1717px 1480px #FFF , 5px 619px #FFF , 1545px 295px #FFF , 1000px 468px #FFF , 468px 1224px #FFF , 851px 1650px #FFF , 295px 435px #FFF , 158px 1795px #FFF , 837px 552px #FFF , 1178px 1389px #FFF , 99px 1916px #FFF , 185px 1648px #FFF , 813px 1228px #FFF , 856px 384px #FFF , 354px 406px #FFF , 668px 1714px #FFF , 1764px 1011px #FFF , 1896px 1480px #FFF , 1134px 1941px #FFF , 363px 1782px #FFF , 1571px 1048px #FFF , 232px 1554px #FFF , 1565px 1925px #FFF , 349px 262px #FFF , 1922px 1865px #FFF , 1010px 862px #FFF , 1176px 641px #FFF , 359px 1661px #FFF , 1711px 1511px #FFF , 1554px 1964px #FFF , 37px 801px #FFF , 1275px 568px #FFF , 1902px 1419px #FFF , 776px 1544px #FFF , 1382px 237px #FFF , 1255px 778px #FFF , 1877px 1858px #FFF , 46px 598px #FFF , 1894px 67px #FFF , 1514px 105px #FFF , 660px 1181px #FFF , 308px 1566px #FFF , 1655px 1882px #FFF , 1686px 1525px #FFF , 157px 1985px #FFF , 1359px 1439px #FFF , 449px 1631px #FFF , 346px 1566px #FFF , 451px 1460px #FFF , 806px 511px #FFF , 842px 1132px #FFF , 569px 1740px #FFF , 1305px 819px #FFF , 1986px 1316px #FFF , 975px 726px #FFF , 663px 819px #FFF , 1493px 1832px #FFF , 1987px 797px #FFF , 951px 881px #FFF , 1998px 1901px #FFF , 472px 1829px #FFF , 1493px 1858px #FFF , 1756px 1647px #FFF , 652px 1903px #FFF , 863px 1794px #FFF , 63px 1984px #FFF , 379px 799px #FFF , 501px 1582px #FFF , 793px 292px #FFF , 190px 1846px #FFF , 620px 1776px #FFF , 234px 349px #FFF , 453px 1860px #FFF , 99px 1756px #FFF , 715px 1290px #FFF , 1957px 134px #FFF , 1099px 1030px #FFF , 1051px 1093px #FFF , 613px 500px #FFF , 955px 196px #FFF , 242px 976px #FFF , 1020px 191px #FFF , 370px 347px #FFF , 1481px 621px #FFF , 1959px 1450px #FFF , 743px 1178px #FFF , 73px 597px #FFF , 499px 645px #FFF , 769px 1635px #FFF , 1663px 291px #FFF , 1738px 1729px #FFF , 646px 832px #FFF , 1750px 609px #FFF , 1047px 1379px #FFF , 127px 1893px #FFF , 1949px 1890px #FFF , 1347px 914px #FFF , 323px 361px #FFF , 918px 1330px #FFF , 347px 184px #FFF , 1262px 1201px #FFF , 1563px 906px #FFF , 1996px 1168px #FFF , 1302px 1251px #FFF , 148px 247px #FFF , 38px 1523px #FFF , 1706px 1070px #FFF , 1031px 758px #FFF , 656px 201px #FFF , 473px 1830px #FFF , 1292px 1445px #FFF , 1807px 589px #FFF , 929px 157px #FFF , 1936px 569px #FFF , 762px 1469px #FFF , 55px 435px #FFF , 260px 428px #FFF , 1945px 1411px #FFF , 103px 224px #FFF , 998px 1164px #FFF , 1479px 1757px #FFF , 302px 741px #FFF , 1895px 15px #FFF , 11px 801px #FFF , 565px 1178px #FFF , 1628px 1464px #FFF , 99px 1357px #FFF , 563px 569px #FFF , 1359px 376px #FFF , 1420px 1723px #FFF , 821px 1851px #FFF , 1860px 429px #FFF , 1947px 132px #FFF , 1236px 1380px #FFF , 906px 593px #FFF , 1320px 1689px #FFF , 100px 1529px #FFF , 1292px 258px #FFF , 934px 1482px #FFF , 1779px 1205px #FFF , 1378px 1429px #FFF , 1563px 816px #FFF , 852px 1084px #FFF , 1292px 1200px #FFF , 1996px 611px #FFF , 1249px 971px #FFF , 114px 1272px #FFF , 1557px 1495px #FFF , 693px 22px #FFF , 1937px 873px #FFF , 364px 1909px #FFF , 1012px 471px #FFF , 982px 1606px #FFF , 426px 1px #FFF , 703px 687px #FFF , 1488px 230px #FFF , 1876px 209px #FFF , 839px 558px #FFF , 670px 840px #FFF , 1242px 1302px #FFF , 207px 558px #FFF , 721px 186px #FFF , 451px 1318px #FFF , 119px 1877px #FFF , 106px 898px #FFF , 1552px 463px #FFF , 132px 1475px #FFF , 1466px 1324px #FFF , 1731px 1849px #FFF , 1039px 1978px #FFF , 1321px 977px #FFF , 915px 1681px #FFF , 272px 1057px #FFF , 550px 1983px #FFF , 1167px 1119px #FFF , 1413px 320px #FFF , 1809px 929px #FFF , 1659px 621px #FFF , 742px 321px #FFF , 343px 624px #FFF , 1280px 1491px #FFF , 873px 1367px #FFF , 810px 1664px #FFF , 1382px 1856px #FFF , 1220px 622px #FFF , 1151px 780px #FFF , 1391px 1235px #FFF , 1203px 461px #FFF , 1304px 8px #FFF , 1208px 464px #FFF , 375px 1838px #FFF , 1483px 875px #FFF , 1964px 1785px #FFF , 776px 1544px #FFF , 1542px 1320px #FFF , 403px 1694px #FFF , 576px 159px #FFF , 484px 1528px #FFF , 1390px 150px #FFF , 509px 106px #FFF , 888px 20px #FFF , 173px 305px #FFF , 1671px 379px #FFF , 1452px 437px #FFF , 417px 1255px #FFF , 1818px 31px #FFF , 465px 476px #FFF , 1583px 196px #FFF , 1242px 657px #FFF , 156px 1903px #FFF , 912px 382px #FFF , 482px 1693px #FFF , 1720px 390px #FFF , 361px 800px #FFF , 163px 326px #FFF , 1289px 317px #FFF , 65px 1625px #FFF , 114px 421px #FFF , 1918px 1745px #FFF , 1997px 198px #FFF , 1718px 255px #FFF , 1595px 685px #FFF , 1601px 1724px #FFF , 28px 730px #FFF , 1566px 200px #FFF , 1171px 1332px #FFF , 44px 599px #FFF , 1803px 676px #FFF , 1875px 41px #FFF , 904px 1204px #FFF , 1135px 1468px #FFF , 1654px 353px #FFF , 1682px 535px #FFF , 1269px 1329px #FFF , 706px 944px #FFF , 1246px 304px #FFF , 1946px 313px #FFF , 750px 1843px #FFF , 1345px 1531px #FFF , 1980px 757px #FFF , 494px 907px #FFF , 639px 1370px #FFF , 815px 1939px #FFF , 1765px 1469px #FFF , 385px 1976px #FFF , 1144px 983px #FFF , 1805px 246px #FFF , 976px 1018px #FFF , 655px 460px #FFF , 1910px 1428px #FFF , 1607px 1641px #FFF , 239px 1189px #FFF , 18px 1601px #FFF , 1338px 570px #FFF , 1677px 1050px #FFF , 1133px 1502px #FFF , 1465px 350px #FFF , 1411px 1289px #FFF , 274px 554px #FFF , 412px 448px #FFF , 870px 1878px #FFF , 1483px 590px #FFF , 776px 1902px #FFF , 698px 1905px #FFF , 43px 685px #FFF , 309px 1607px #FFF , 1085px 182px #FFF , 344px 693px #FFF , 1389px 114px #FFF , 927px 1087px #FFF , 758px 1904px #FFF , 1401px 1327px #FFF , 492px 1391px #FFF , 1994px 566px #FFF , 1098px 724px #FFF , 266px 1360px #FFF , 28px 841px #FFF , 1482px 1893px #FFF , 126px 1045px #FFF , 1772px 648px #FFF , 1427px 1769px #FFF , 870px 1946px #FFF , 1804px 1215px #FFF , 368px 910px #FFF , 1267px 1371px #FFF , 1589px 857px #FFF , 1265px 1830px #FFF , 1286px 1388px #FFF , 1962px 794px #FFF , 452px 53px #FFF , 431px 1582px #FFF , 715px 951px #FFF , 1495px 17px #FFF , 1772px 1807px #FFF , 639px 747px #FFF , 1427px 1832px #FFF , 1300px 7px #FFF , 443px 1536px #FFF , 516px 1367px #FFF , 106px 303px #FFF , 671px 807px #FFF , 248px 1800px #FFF , 735px 689px #FFF , 101px 596px #FFF , 923px 978px #FFF , 1076px 454px #FFF , 1774px 1542px #FFF , 1427px 1867px #FFF , 479px 920px #FFF , 985px 684px #FFF , 1673px 1274px #FFF , 322px 889px #FFF , 1572px 1996px #FFF , 437px 1673px #FFF , 550px 800px #FFF , 1489px 1049px #FFF , 247px 1977px #FFF , 1076px 85px #FFF , 393px 429px #FFF , 644px 571px #FFF , 1487px 55px #FFF , 552px 1523px #FFF , 1468px 506px #FFF , 1593px 1524px #FFF , 581px 1055px #FFF , 249px 1300px #FFF , 703px 583px #FFF , 775px 1468px #FFF , 383px 636px #FFF , 689px 1764px #FFF , 19px 1601px #FFF , 1031px 27px #FFF , 818px 106px #FFF , 1690px 155px #FFF , 1132px 927px #FFF , 119px 122px #FFF , 1694px 1171px #FFF , 1187px 1560px #FFF , 606px 159px #FFF , 621px 765px #FFF , 331px 200px #FFF , 1369px 1099px #FFF , 1717px 1396px #FFF , 1303px 986px #FFF , 473px 1555px #FFF , 1697px 1078px #FFF , 444px 543px #FFF , 1078px 1828px #FFF , 374px 1115px #FFF , 494px 958px #FFF , 24px 1568px #FFF , 1178px 436px #FFF , 22px 1518px #FFF , 1536px 1973px #FFF , 217px 597px #FFF , 204px 214px #FFF , 792px 1090px #FFF , 1176px 491px #FFF , 1674px 1342px #FFF , 1367px 911px #FFF , 1640px 357px #FFF , 1522px 1889px #FFF , 331px 1337px #FFF , 1522px 1448px #FFF , 1749px 940px #FFF , 1176px 203px #FFF , 966px 1962px #FFF , 58px 574px #FFF , 912px 1839px #FFF , 515px 363px #FFF , 529px 895px #FFF , 762px 1649px #FFF , 1512px 180px #FFF , 1808px 1238px #FFF , 1090px 671px #FFF , 699px 1107px #FFF , 887px 145px #FFF , 1335px 1808px #FFF , 589px 523px #FFF , 1759px 1498px #FFF , 1544px 1444px #FFF , 667px 279px #FFF , 1757px 1501px #FFF , 793px 222px #FFF , 391px 1244px #FFF , 332px 761px #FFF , 1271px 490px #FFF , 1991px 1408px #FFF , 719px 1917px #FFF , 1180px 659px #FFF , 275px 1634px #FFF , 1763px 471px #FFF , 144px 757px #FFF , 668px 12px #FFF , 1291px 912px #FFF , 62px 422px #FFF , 93px 1577px #FFF , 860px 664px #FFF , 1283px 787px #FFF , 964px 1635px #FFF , 1249px 1324px #FFF , 30px 179px #FFF , 1548px 1082px #FFF , 1436px 1868px #FFF , 1409px 245px #FFF , 709px 1101px #FFF , 248px 676px #FFF , 97px 187px #FFF , 1329px 1010px #FFF , 1919px 1489px #FFF , 1589px 1912px #FFF , 1966px 1939px #FFF , 273px 559px #FFF , 291px 1433px #FFF , 1632px 1763px #FFF , 829px 1701px #FFF , 1174px 799px #FFF , 1046px 1379px #FFF , 1353px 68px #FFF , 268px 1594px #FFF , 425px 797px #FFF , 58px 29px #FFF , 1776px 345px #FFF , 1839px 1854px #FFF , 970px 145px #FFF , 1258px 1298px #FFF , 1006px 1872px #FFF , 896px 1752px #FFF , 992px 1633px #FFF , 888px 183px #FFF , 1218px 587px #FFF , 1253px 1366px #FFF , 1689px 65px #FFF , 686px 80px #FFF , 1243px 1797px #FFF , 1460px 493px #FFF , 1731px 40px #FFF , 1050px 36px #FFF , 1948px 1379px #FFF , 307px 1941px #FFF , 359px 1065px #FFF , 1620px 592px #FFF , 1832px 1368px #FFF , 1764px 1005px #FFF , 1818px 1368px #FFF , 1381px 164px #FFF , 941px 387px #FFF , 148px 105px #FFF , 1116px 801px #FFF , 638px 1562px #FFF , 1228px 1712px #FFF , 1130px 1201px #FFF , 79px 413px #FFF , 978px 1741px #FFF , 1479px 211px #FFF , 1634px 507px #FFF , 691px 1992px #FFF , 718px 1061px #FFF , 1131px 1152px #FFF , 896px 1523px #FFF , 1932px 858px #FFF , 1644px 221px #FFF , 1236px 816px #FFF , 1056px 1897px #FFF , 1323px 1406px #FFF , 298px 770px #FFF , 542px 1897px #FFF , 834px 443px #FFF , 610px 14px #FFF , 379px 47px #FFF , 1681px 1412px #FFF , 1546px 281px #FFF , 248px 411px #FFF , 919px 436px #FFF , 1865px 1255px #FFF , 198px 711px #FFF;
  animation: animStar 50s linear infinite;
}
#stars:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 1px;
  height: 1px;
  box-shadow: 1800px 451px #FFF , 1918px 538px #FFF , 1292px 689px #FFF , 1346px 793px #FFF , 350px 773px #FFF , 1420px 741px #FFF , 175px 222px #FFF , 710px 1366px #FFF , 1732px 112px #FFF , 898px 751px #FFF , 35px 422px #FFF , 197px 882px #FFF , 1907px 501px #FFF , 570px 815px #FFF , 751px 859px #FFF , 1865px 1327px #FFF , 1328px 873px #FFF , 1661px 478px #FFF , 436px 830px #FFF , 726px 859px #FFF , 489px 1787px #FFF , 1151px 1051px #FFF , 1160px 304px #FFF , 137px 1149px #FFF , 1210px 701px #FFF , 1428px 1365px #FFF , 213px 1065px #FFF , 1032px 1961px #FFF , 721px 552px #FFF , 679px 303px #FFF , 515px 1988px #FFF , 1780px 1100px #FFF , 894px 1534px #FFF , 1788px 1208px #FFF , 1883px 1989px #FFF , 398px 849px #FFF , 1238px 1520px #FFF , 749px 428px #FFF , 1210px 1456px #FFF , 1765px 349px #FFF , 1934px 780px #FFF , 572px 1601px #FFF , 1770px 1279px #FFF , 1520px 1298px #FFF , 1757px 487px #FFF , 1842px 931px #FFF , 253px 383px #FFF , 967px 195px #FFF , 1368px 729px #FFF , 1303px 209px #FFF , 1392px 1241px #FFF , 95px 410px #FFF , 629px 1454px #FFF , 1991px 1182px #FFF , 1321px 1928px #FFF , 1176px 300px #FFF , 707px 1335px #FFF , 1293px 1324px #FFF , 1354px 1394px #FFF , 1730px 988px #FFF , 761px 852px #FFF , 562px 846px #FFF , 1806px 1285px #FFF , 991px 1430px #FFF , 1198px 617px #FFF , 916px 91px #FFF , 692px 767px #FFF , 1664px 80px #FFF , 1832px 1319px #FFF , 1840px 1241px #FFF , 872px 1483px #FFF , 202px 1973px #FFF , 24px 365px #FFF , 692px 1420px #FFF , 1880px 1182px #FFF , 116px 1802px #FFF , 1474px 10px #FFF , 386px 1404px #FFF , 1386px 224px #FFF , 504px 786px #FFF , 735px 710px #FFF , 600px 1267px #FFF , 973px 917px #FFF , 176px 1336px #FFF , 153px 792px #FFF , 1236px 627px #FFF , 1889px 1820px #FFF , 1069px 331px #FFF , 1779px 1883px #FFF , 1598px 51px #FFF , 1579px 898px #FFF , 763px 1972px #FFF , 1077px 1375px #FFF , 1861px 883px #FFF , 341px 1125px #FFF , 1163px 1251px #FFF , 1473px 1811px #FFF , 1310px 1082px #FFF , 631px 1552px #FFF , 189px 1146px #FFF , 870px 1923px #FFF , 1201px 1586px #FFF , 69px 1094px #FFF , 442px 1535px #FFF , 1645px 1448px #FFF , 711px 953px #FFF , 1300px 1027px #FFF , 1181px 373px #FFF , 1857px 1513px #FFF , 842px 1520px #FFF , 1943px 1439px #FFF , 1616px 1216px #FFF , 907px 1608px #FFF , 1874px 939px #FFF , 1191px 614px #FFF , 942px 1736px #FFF , 893px 997px #FFF , 1691px 1962px #FFF , 1940px 1229px #FFF , 469px 1573px #FFF , 388px 1122px #FFF , 476px 1882px #FFF , 426px 185px #FFF , 217px 1546px #FFF , 647px 324px #FFF , 677px 1825px #FFF , 712px 23px #FFF , 337px 1361px #FFF , 1161px 350px #FFF , 536px 931px #FFF , 1209px 1891px #FFF , 592px 1155px #FFF , 448px 1126px #FFF , 1909px 806px #FFF , 877px 860px #FFF , 1038px 295px #FFF , 759px 395px #FFF , 1576px 1733px #FFF , 1467px 335px #FFF , 79px 262px #FFF , 683px 472px #FFF , 643px 1365px #FFF , 333px 1482px #FFF , 1026px 1230px #FFF , 168px 1153px #FFF , 417px 624px #FFF , 246px 1517px #FFF , 824px 547px #FFF , 1475px 133px #FFF , 1884px 186px #FFF , 1367px 222px #FFF , 1084px 927px #FFF , 1875px 232px #FFF , 574px 1847px #FFF , 1570px 1598px #FFF , 988px 307px #FFF , 1422px 194px #FFF , 1053px 1875px #FFF , 974px 388px #FFF , 562px 655px #FFF , 1895px 658px #FFF , 1030px 1748px #FFF , 1820px 970px #FFF , 1745px 595px #FFF , 1843px 762px #FFF , 1080px 991px #FFF , 337px 816px #FFF , 1653px 897px #FFF , 591px 722px #FFF , 1007px 1895px #FFF , 265px 725px #FFF , 482px 1386px #FFF , 1300px 1208px #FFF , 1247px 1704px #FFF , 1133px 801px #FFF , 1747px 584px #FFF , 636px 388px #FFF , 1949px 1779px #FFF , 682px 1880px #FFF , 1010px 850px #FFF , 1424px 1949px #FFF , 643px 906px #FFF , 710px 1391px #FFF , 1501px 1913px #FFF , 1611px 29px #FFF , 450px 553px #FFF , 321px 1490px #FFF , 485px 1451px #FFF , 383px 752px #FFF , 1343px 253px #FFF , 255px 56px #FFF , 1046px 860px #FFF , 1725px 1501px #FFF , 650px 1736px #FFF , 335px 437px #FFF , 68px 1982px #FFF , 118px 713px #FFF , 818px 1042px #FFF , 1362px 787px #FFF , 521px 189px #FFF , 1544px 1780px #FFF , 1425px 1993px #FFF , 504px 1243px #FFF , 191px 318px #FFF , 1974px 780px #FFF , 1187px 1802px #FFF , 1072px 981px #FFF , 1236px 798px #FFF , 1706px 911px #FFF , 1585px 1377px #FFF , 490px 929px #FFF , 100px 599px #FFF , 1860px 885px #FFF , 1664px 1945px #FFF , 745px 814px #FFF , 862px 1182px #FFF , 3px 1778px #FFF , 1355px 1008px #FFF , 1215px 321px #FFF , 660px 1601px #FFF , 264px 1139px #FFF , 696px 1357px #FFF , 403px 1209px #FFF , 43px 633px #FFF , 1717px 1480px #FFF , 5px 619px #FFF , 1545px 295px #FFF , 1000px 468px #FFF , 468px 1224px #FFF , 851px 1650px #FFF , 295px 435px #FFF , 158px 1795px #FFF , 837px 552px #FFF , 1178px 1389px #FFF , 99px 1916px #FFF , 185px 1648px #FFF , 813px 1228px #FFF , 856px 384px #FFF , 354px 406px #FFF , 668px 1714px #FFF , 1764px 1011px #FFF , 1896px 1480px #FFF , 1134px 1941px #FFF , 363px 1782px #FFF , 1571px 1048px #FFF , 232px 1554px #FFF , 1565px 1925px #FFF , 349px 262px #FFF , 1922px 1865px #FFF , 1010px 862px #FFF , 1176px 641px #FFF , 359px 1661px #FFF , 1711px 1511px #FFF , 1554px 1964px #FFF , 37px 801px #FFF , 1275px 568px #FFF , 1902px 1419px #FFF , 776px 1544px #FFF , 1382px 237px #FFF , 1255px 778px #FFF , 1877px 1858px #FFF , 46px 598px #FFF , 1894px 67px #FFF , 1514px 105px #FFF , 660px 1181px #FFF , 308px 1566px #FFF , 1655px 1882px #FFF , 1686px 1525px #FFF , 157px 1985px #FFF , 1359px 1439px #FFF , 449px 1631px #FFF , 346px 1566px #FFF , 451px 1460px #FFF , 806px 511px #FFF , 842px 1132px #FFF , 569px 1740px #FFF , 1305px 819px #FFF , 1986px 1316px #FFF , 975px 726px #FFF , 663px 819px #FFF , 1493px 1832px #FFF , 1987px 797px #FFF , 951px 881px #FFF , 1998px 1901px #FFF , 472px 1829px #FFF , 1493px 1858px #FFF , 1756px 1647px #FFF , 652px 1903px #FFF , 863px 1794px #FFF , 63px 1984px #FFF , 379px 799px #FFF , 501px 1582px #FFF , 793px 292px #FFF , 190px 1846px #FFF , 620px 1776px #FFF , 234px 349px #FFF , 453px 1860px #FFF , 99px 1756px #FFF , 715px 1290px #FFF , 1957px 134px #FFF , 1099px 1030px #FFF , 1051px 1093px #FFF , 613px 500px #FFF , 955px 196px #FFF , 242px 976px #FFF , 1020px 191px #FFF , 370px 347px #FFF , 1481px 621px #FFF , 1959px 1450px #FFF , 743px 1178px #FFF , 73px 597px #FFF , 499px 645px #FFF , 769px 1635px #FFF , 1663px 291px #FFF , 1738px 1729px #FFF , 646px 832px #FFF , 1750px 609px #FFF , 1047px 1379px #FFF , 127px 1893px #FFF , 1949px 1890px #FFF , 1347px 914px #FFF , 323px 361px #FFF , 918px 1330px #FFF , 347px 184px #FFF , 1262px 1201px #FFF , 1563px 906px #FFF , 1996px 1168px #FFF , 1302px 1251px #FFF , 148px 247px #FFF , 38px 1523px #FFF , 1706px 1070px #FFF , 1031px 758px #FFF , 656px 201px #FFF , 473px 1830px #FFF , 1292px 1445px #FFF , 1807px 589px #FFF , 929px 157px #FFF , 1936px 569px #FFF , 762px 1469px #FFF , 55px 435px #FFF , 260px 428px #FFF , 1945px 1411px #FFF , 103px 224px #FFF , 998px 1164px #FFF , 1479px 1757px #FFF , 302px 741px #FFF , 1895px 15px #FFF , 11px 801px #FFF , 565px 1178px #FFF , 1628px 1464px #FFF , 99px 1357px #FFF , 563px 569px #FFF , 1359px 376px #FFF , 1420px 1723px #FFF , 821px 1851px #FFF , 1860px 429px #FFF , 1947px 132px #FFF , 1236px 1380px #FFF , 906px 593px #FFF , 1320px 1689px #FFF , 100px 1529px #FFF , 1292px 258px #FFF , 934px 1482px #FFF , 1779px 1205px #FFF , 1378px 1429px #FFF , 1563px 816px #FFF , 852px 1084px #FFF , 1292px 1200px #FFF , 1996px 611px #FFF , 1249px 971px #FFF , 114px 1272px #FFF , 1557px 1495px #FFF , 693px 22px #FFF , 1937px 873px #FFF , 364px 1909px #FFF , 1012px 471px #FFF , 982px 1606px #FFF , 426px 1px #FFF , 703px 687px #FFF , 1488px 230px #FFF , 1876px 209px #FFF , 839px 558px #FFF , 670px 840px #FFF , 1242px 1302px #FFF , 207px 558px #FFF , 721px 186px #FFF , 451px 1318px #FFF , 119px 1877px #FFF , 106px 898px #FFF , 1552px 463px #FFF , 132px 1475px #FFF , 1466px 1324px #FFF , 1731px 1849px #FFF , 1039px 1978px #FFF , 1321px 977px #FFF , 915px 1681px #FFF , 272px 1057px #FFF , 550px 1983px #FFF , 1167px 1119px #FFF , 1413px 320px #FFF , 1809px 929px #FFF , 1659px 621px #FFF , 742px 321px #FFF , 343px 624px #FFF , 1280px 1491px #FFF , 873px 1367px #FFF , 810px 1664px #FFF , 1382px 1856px #FFF , 1220px 622px #FFF , 1151px 780px #FFF , 1391px 1235px #FFF , 1203px 461px #FFF , 1304px 8px #FFF , 1208px 464px #FFF , 375px 1838px #FFF , 1483px 875px #FFF , 1964px 1785px #FFF , 776px 1544px #FFF , 1542px 1320px #FFF , 403px 1694px #FFF , 576px 159px #FFF , 484px 1528px #FFF , 1390px 150px #FFF , 509px 106px #FFF , 888px 20px #FFF , 173px 305px #FFF , 1671px 379px #FFF , 1452px 437px #FFF , 417px 1255px #FFF , 1818px 31px #FFF , 465px 476px #FFF , 1583px 196px #FFF , 1242px 657px #FFF , 156px 1903px #FFF , 912px 382px #FFF , 482px 1693px #FFF , 1720px 390px #FFF , 361px 800px #FFF , 163px 326px #FFF , 1289px 317px #FFF , 65px 1625px #FFF , 114px 421px #FFF , 1918px 1745px #FFF , 1997px 198px #FFF , 1718px 255px #FFF , 1595px 685px #FFF , 1601px 1724px #FFF , 28px 730px #FFF , 1566px 200px #FFF , 1171px 1332px #FFF , 44px 599px #FFF , 1803px 676px #FFF , 1875px 41px #FFF , 904px 1204px #FFF , 1135px 1468px #FFF , 1654px 353px #FFF , 1682px 535px #FFF , 1269px 1329px #FFF , 706px 944px #FFF , 1246px 304px #FFF , 1946px 313px #FFF , 750px 1843px #FFF , 1345px 1531px #FFF , 1980px 757px #FFF , 494px 907px #FFF , 639px 1370px #FFF , 815px 1939px #FFF , 1765px 1469px #FFF , 385px 1976px #FFF , 1144px 983px #FFF , 1805px 246px #FFF , 976px 1018px #FFF , 655px 460px #FFF , 1910px 1428px #FFF , 1607px 1641px #FFF , 239px 1189px #FFF , 18px 1601px #FFF , 1338px 570px #FFF , 1677px 1050px #FFF , 1133px 1502px #FFF , 1465px 350px #FFF , 1411px 1289px #FFF , 274px 554px #FFF , 412px 448px #FFF , 870px 1878px #FFF , 1483px 590px #FFF , 776px 1902px #FFF , 698px 1905px #FFF , 43px 685px #FFF , 309px 1607px #FFF , 1085px 182px #FFF , 344px 693px #FFF , 1389px 114px #FFF , 927px 1087px #FFF , 758px 1904px #FFF , 1401px 1327px #FFF , 492px 1391px #FFF , 1994px 566px #FFF , 1098px 724px #FFF , 266px 1360px #FFF , 28px 841px #FFF , 1482px 1893px #FFF , 126px 1045px #FFF , 1772px 648px #FFF , 1427px 1769px #FFF , 870px 1946px #FFF , 1804px 1215px #FFF , 368px 910px #FFF , 1267px 1371px #FFF , 1589px 857px #FFF , 1265px 1830px #FFF , 1286px 1388px #FFF , 1962px 794px #FFF , 452px 53px #FFF , 431px 1582px #FFF , 715px 951px #FFF , 1495px 17px #FFF , 1772px 1807px #FFF , 639px 747px #FFF , 1427px 1832px #FFF , 1300px 7px #FFF , 443px 1536px #FFF , 516px 1367px #FFF , 106px 303px #FFF , 671px 807px #FFF , 248px 1800px #FFF , 735px 689px #FFF , 101px 596px #FFF , 923px 978px #FFF , 1076px 454px #FFF , 1774px 1542px #FFF , 1427px 1867px #FFF , 479px 920px #FFF , 985px 684px #FFF , 1673px 1274px #FFF , 322px 889px #FFF , 1572px 1996px #FFF , 437px 1673px #FFF , 550px 800px #FFF , 1489px 1049px #FFF , 247px 1977px #FFF , 1076px 85px #FFF , 393px 429px #FFF , 644px 571px #FFF , 1487px 55px #FFF , 552px 1523px #FFF , 1468px 506px #FFF , 1593px 1524px #FFF , 581px 1055px #FFF , 249px 1300px #FFF , 703px 583px #FFF , 775px 1468px #FFF , 383px 636px #FFF , 689px 1764px #FFF , 19px 1601px #FFF , 1031px 27px #FFF , 818px 106px #FFF , 1690px 155px #FFF , 1132px 927px #FFF , 119px 122px #FFF , 1694px 1171px #FFF , 1187px 1560px #FFF , 606px 159px #FFF , 621px 765px #FFF , 331px 200px #FFF , 1369px 1099px #FFF , 1717px 1396px #FFF , 1303px 986px #FFF , 473px 1555px #FFF , 1697px 1078px #FFF , 444px 543px #FFF , 1078px 1828px #FFF , 374px 1115px #FFF , 494px 958px #FFF , 24px 1568px #FFF , 1178px 436px #FFF , 22px 1518px #FFF , 1536px 1973px #FFF , 217px 597px #FFF , 204px 214px #FFF , 792px 1090px #FFF , 1176px 491px #FFF , 1674px 1342px #FFF , 1367px 911px #FFF , 1640px 357px #FFF , 1522px 1889px #FFF , 331px 1337px #FFF , 1522px 1448px #FFF , 1749px 940px #FFF , 1176px 203px #FFF , 966px 1962px #FFF , 58px 574px #FFF , 912px 1839px #FFF , 515px 363px #FFF , 529px 895px #FFF , 762px 1649px #FFF , 1512px 180px #FFF , 1808px 1238px #FFF , 1090px 671px #FFF , 699px 1107px #FFF , 887px 145px #FFF , 1335px 1808px #FFF , 589px 523px #FFF , 1759px 1498px #FFF , 1544px 1444px #FFF , 667px 279px #FFF , 1757px 1501px #FFF , 793px 222px #FFF , 391px 1244px #FFF , 332px 761px #FFF , 1271px 490px #FFF , 1991px 1408px #FFF , 719px 1917px #FFF , 1180px 659px #FFF , 275px 1634px #FFF , 1763px 471px #FFF , 144px 757px #FFF , 668px 12px #FFF , 1291px 912px #FFF , 62px 422px #FFF , 93px 1577px #FFF , 860px 664px #FFF , 1283px 787px #FFF , 964px 1635px #FFF , 1249px 1324px #FFF , 30px 179px #FFF , 1548px 1082px #FFF , 1436px 1868px #FFF , 1409px 245px #FFF , 709px 1101px #FFF , 248px 676px #FFF , 97px 187px #FFF , 1329px 1010px #FFF , 1919px 1489px #FFF , 1589px 1912px #FFF , 1966px 1939px #FFF , 273px 559px #FFF , 291px 1433px #FFF , 1632px 1763px #FFF , 829px 1701px #FFF , 1174px 799px #FFF , 1046px 1379px #FFF , 1353px 68px #FFF , 268px 1594px #FFF , 425px 797px #FFF , 58px 29px #FFF , 1776px 345px #FFF , 1839px 1854px #FFF , 970px 145px #FFF , 1258px 1298px #FFF , 1006px 1872px #FFF , 896px 1752px #FFF , 992px 1633px #FFF , 888px 183px #FFF , 1218px 587px #FFF , 1253px 1366px #FFF , 1689px 65px #FFF , 686px 80px #FFF , 1243px 1797px #FFF , 1460px 493px #FFF , 1731px 40px #FFF , 1050px 36px #FFF , 1948px 1379px #FFF , 307px 1941px #FFF , 359px 1065px #FFF , 1620px 592px #FFF , 1832px 1368px #FFF , 1764px 1005px #FFF , 1818px 1368px #FFF , 1381px 164px #FFF , 941px 387px #FFF , 148px 105px #FFF , 1116px 801px #FFF , 638px 1562px #FFF , 1228px 1712px #FFF , 1130px 1201px #FFF , 79px 413px #FFF , 978px 1741px #FFF , 1479px 211px #FFF , 1634px 507px #FFF , 691px 1992px #FFF , 718px 1061px #FFF , 1131px 1152px #FFF , 896px 1523px #FFF , 1932px 858px #FFF , 1644px 221px #FFF , 1236px 816px #FFF , 1056px 1897px #FFF , 1323px 1406px #FFF , 298px 770px #FFF , 542px 1897px #FFF , 834px 443px #FFF , 610px 14px #FFF , 379px 47px #FFF , 1681px 1412px #FFF , 1546px 281px #FFF , 248px 411px #FFF , 919px 436px #FFF , 1865px 1255px #FFF , 198px 711px #FFF;
}

#stars2 {
  width: 2px;
  height: 2px;
  box-shadow: 553px 1424px #FFF , 612px 376px #FFF , 722px 680px #FFF , 1821px 146px #FFF , 589px 459px #FFF , 500px 1533px #FFF , 1715px 68px #FFF , 1171px 1048px #FFF , 1642px 1470px #FFF , 1580px 819px #FFF , 1753px 210px #FFF , 334px 1893px #FFF , 1765px 1321px #FFF , 1035px 1064px #FFF , 539px 1028px #FFF , 619px 572px #FFF , 912px 643px #FFF , 733px 1134px #FFF , 1357px 1725px #FFF , 949px 1311px #FFF , 1577px 1767px #FFF , 1135px 730px #FFF , 839px 26px #FFF , 716px 735px #FFF , 1898px 446px #FFF , 1469px 1366px #FFF , 674px 785px #FFF , 914px 618px #FFF , 1500px 632px #FFF , 1697px 1392px #FFF , 152px 1994px #FFF , 1854px 1805px #FFF , 1791px 237px #FFF , 839px 844px #FFF , 282px 1377px #FFF , 993px 1847px #FFF , 1181px 926px #FFF , 1445px 183px #FFF , 1537px 1770px #FFF , 1930px 1512px #FFF , 1954px 676px #FFF , 963px 116px #FFF , 1190px 504px #FFF , 954px 841px #FFF , 697px 1318px #FFF , 1914px 107px #FFF , 1833px 8px #FFF , 746px 647px #FFF , 147px 299px #FFF , 937px 948px #FFF , 1529px 539px #FFF , 26px 1175px #FFF , 730px 384px #FFF , 230px 1073px #FFF , 660px 1012px #FFF , 682px 625px #FFF , 1005px 921px #FFF , 1973px 503px #FFF , 284px 1995px #FFF , 629px 851px #FFF , 275px 364px #FFF , 1848px 49px #FFF , 1009px 1775px #FFF , 1594px 1779px #FFF , 323px 853px #FFF , 1330px 1089px #FFF , 365px 259px #FFF , 360px 232px #FFF , 443px 1478px #FFF , 1455px 489px #FFF , 1096px 742px #FFF , 1156px 861px #FFF , 628px 430px #FFF , 1352px 705px #FFF , 1637px 19px #FFF , 1736px 1671px #FFF , 419px 1146px #FFF , 732px 576px #FFF , 1506px 1891px #FFF , 1466px 1546px #FFF , 545px 805px #FFF , 1439px 1422px #FFF , 418px 452px #FFF , 1041px 1372px #FFF , 629px 196px #FFF , 1428px 1400px #FFF , 711px 1986px #FFF , 157px 892px #FFF , 1759px 1305px #FFF , 1257px 1844px #FFF , 1910px 1694px #FFF , 1667px 590px #FFF , 1180px 1098px #FFF , 261px 1727px #FFF , 714px 1995px #FFF , 1307px 1216px #FFF , 1957px 577px #FFF , 1675px 1819px #FFF , 1722px 1376px #FFF , 685px 1749px #FFF , 1748px 1113px #FFF , 1100px 564px #FFF , 1502px 970px #FFF , 425px 9px #FFF , 824px 619px #FFF , 1972px 755px #FFF , 1358px 529px #FFF , 931px 980px #FFF , 280px 1872px #FFF , 1912px 753px #FFF , 1095px 1233px #FFF , 47px 1095px #FFF , 161px 417px #FFF , 407px 371px #FFF , 1131px 985px #FFF , 452px 772px #FFF , 1961px 1578px #FFF , 671px 1950px #FFF , 270px 597px #FFF , 926px 1592px #FFF , 1275px 1054px #FFF , 1403px 692px #FFF , 1310px 193px #FFF , 895px 110px #FFF , 1290px 113px #FFF , 1165px 545px #FFF , 1295px 1553px #FFF , 1679px 273px #FFF , 624px 792px #FFF , 357px 1497px #FFF , 981px 1895px #FFF , 593px 999px #FFF , 982px 1310px #FFF , 1543px 1365px #FFF , 1577px 649px #FFF , 126px 739px #FFF , 1637px 1066px #FFF , 93px 1269px #FFF , 1927px 70px #FFF , 519px 272px #FFF , 1630px 806px #FFF , 1707px 1579px #FFF , 1679px 1560px #FFF , 710px 473px #FFF , 1398px 795px #FFF , 1669px 1633px #FFF , 1904px 407px #FFF , 915px 575px #FFF , 856px 777px #FFF , 182px 541px #FFF , 81px 1682px #FFF , 1000px 1863px #FFF , 1593px 728px #FFF , 1004px 1795px #FFF , 1342px 1382px #FFF , 22px 51px #FFF , 686px 447px #FFF , 1512px 1316px #FFF , 892px 714px #FFF , 1422px 1516px #FFF , 17px 157px #FFF , 213px 272px #FFF , 1095px 180px #FFF , 1849px 322px #FFF , 1391px 1602px #FFF , 1659px 1684px #FFF , 868px 1428px #FFF , 494px 772px #FFF , 1231px 968px #FFF , 96px 1033px #FFF , 1496px 934px #FFF , 929px 806px #FFF , 1325px 1713px #FFF , 687px 1095px #FFF , 88px 1620px #FFF , 1089px 360px #FFF , 264px 1102px #FFF , 612px 234px #FFF , 641px 943px #FFF , 1330px 1129px #FFF , 231px 366px #FFF , 120px 220px #FFF , 1817px 987px #FFF , 1308px 59px #FFF , 426px 1538px #FFF , 15px 1936px #FFF , 1508px 1854px #FFF , 1847px 1331px #FFF , 1816px 143px #FFF , 1884px 1478px #FFF , 1782px 575px #FFF , 1080px 1522px #FFF , 359px 135px #FFF , 1430px 1642px #FFF , 1391px 1271px #FFF , 127px 743px #FFF , 94px 772px #FFF , 1509px 1894px #FFF , 1258px 1347px #FFF , 482px 582px #FFF;
  animation: animStar 100s linear infinite;
}
#stars2:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 2px;
  height: 2px;
  box-shadow: 553px 1424px #FFF , 612px 376px #FFF , 722px 680px #FFF , 1821px 146px #FFF , 589px 459px #FFF , 500px 1533px #FFF , 1715px 68px #FFF , 1171px 1048px #FFF , 1642px 1470px #FFF , 1580px 819px #FFF , 1753px 210px #FFF , 334px 1893px #FFF , 1765px 1321px #FFF , 1035px 1064px #FFF , 539px 1028px #FFF , 619px 572px #FFF , 912px 643px #FFF , 733px 1134px #FFF , 1357px 1725px #FFF , 949px 1311px #FFF , 1577px 1767px #FFF , 1135px 730px #FFF , 839px 26px #FFF , 716px 735px #FFF , 1898px 446px #FFF , 1469px 1366px #FFF , 674px 785px #FFF , 914px 618px #FFF , 1500px 632px #FFF , 1697px 1392px #FFF , 152px 1994px #FFF , 1854px 1805px #FFF , 1791px 237px #FFF , 839px 844px #FFF , 282px 1377px #FFF , 993px 1847px #FFF , 1181px 926px #FFF , 1445px 183px #FFF , 1537px 1770px #FFF , 1930px 1512px #FFF , 1954px 676px #FFF , 963px 116px #FFF , 1190px 504px #FFF , 954px 841px #FFF , 697px 1318px #FFF , 1914px 107px #FFF , 1833px 8px #FFF , 746px 647px #FFF , 147px 299px #FFF , 937px 948px #FFF , 1529px 539px #FFF , 26px 1175px #FFF , 730px 384px #FFF , 230px 1073px #FFF , 660px 1012px #FFF , 682px 625px #FFF , 1005px 921px #FFF , 1973px 503px #FFF , 284px 1995px #FFF , 629px 851px #FFF , 275px 364px #FFF , 1848px 49px #FFF , 1009px 1775px #FFF , 1594px 1779px #FFF , 323px 853px #FFF , 1330px 1089px #FFF , 365px 259px #FFF , 360px 232px #FFF , 443px 1478px #FFF , 1455px 489px #FFF , 1096px 742px #FFF , 1156px 861px #FFF , 628px 430px #FFF , 1352px 705px #FFF , 1637px 19px #FFF , 1736px 1671px #FFF , 419px 1146px #FFF , 732px 576px #FFF , 1506px 1891px #FFF , 1466px 1546px #FFF , 545px 805px #FFF , 1439px 1422px #FFF , 418px 452px #FFF , 1041px 1372px #FFF , 629px 196px #FFF , 1428px 1400px #FFF , 711px 1986px #FFF , 157px 892px #FFF , 1759px 1305px #FFF , 1257px 1844px #FFF , 1910px 1694px #FFF , 1667px 590px #FFF , 1180px 1098px #FFF , 261px 1727px #FFF , 714px 1995px #FFF , 1307px 1216px #FFF , 1957px 577px #FFF , 1675px 1819px #FFF , 1722px 1376px #FFF , 685px 1749px #FFF , 1748px 1113px #FFF , 1100px 564px #FFF , 1502px 970px #FFF , 425px 9px #FFF , 824px 619px #FFF , 1972px 755px #FFF , 1358px 529px #FFF , 931px 980px #FFF , 280px 1872px #FFF , 1912px 753px #FFF , 1095px 1233px #FFF , 47px 1095px #FFF , 161px 417px #FFF , 407px 371px #FFF , 1131px 985px #FFF , 452px 772px #FFF , 1961px 1578px #FFF , 671px 1950px #FFF , 270px 597px #FFF , 926px 1592px #FFF , 1275px 1054px #FFF , 1403px 692px #FFF , 1310px 193px #FFF , 895px 110px #FFF , 1290px 113px #FFF , 1165px 545px #FFF , 1295px 1553px #FFF , 1679px 273px #FFF , 624px 792px #FFF , 357px 1497px #FFF , 981px 1895px #FFF , 593px 999px #FFF , 982px 1310px #FFF , 1543px 1365px #FFF , 1577px 649px #FFF , 126px 739px #FFF , 1637px 1066px #FFF , 93px 1269px #FFF , 1927px 70px #FFF , 519px 272px #FFF , 1630px 806px #FFF , 1707px 1579px #FFF , 1679px 1560px #FFF , 710px 473px #FFF , 1398px 795px #FFF , 1669px 1633px #FFF , 1904px 407px #FFF , 915px 575px #FFF , 856px 777px #FFF , 182px 541px #FFF , 81px 1682px #FFF , 1000px 1863px #FFF , 1593px 728px #FFF , 1004px 1795px #FFF , 1342px 1382px #FFF , 22px 51px #FFF , 686px 447px #FFF , 1512px 1316px #FFF , 892px 714px #FFF , 1422px 1516px #FFF , 17px 157px #FFF , 213px 272px #FFF , 1095px 180px #FFF , 1849px 322px #FFF , 1391px 1602px #FFF , 1659px 1684px #FFF , 868px 1428px #FFF , 494px 772px #FFF , 1231px 968px #FFF , 96px 1033px #FFF , 1496px 934px #FFF , 929px 806px #FFF , 1325px 1713px #FFF , 687px 1095px #FFF , 88px 1620px #FFF , 1089px 360px #FFF , 264px 1102px #FFF , 612px 234px #FFF , 641px 943px #FFF , 1330px 1129px #FFF , 231px 366px #FFF , 120px 220px #FFF , 1817px 987px #FFF , 1308px 59px #FFF , 426px 1538px #FFF , 15px 1936px #FFF , 1508px 1854px #FFF , 1847px 1331px #FFF , 1816px 143px #FFF , 1884px 1478px #FFF , 1782px 575px #FFF , 1080px 1522px #FFF , 359px 135px #FFF , 1430px 1642px #FFF , 1391px 1271px #FFF , 127px 743px #FFF , 94px 772px #FFF , 1509px 1894px #FFF , 1258px 1347px #FFF , 482px 582px #FFF;
}

#stars3 {
  width: 3px;
  height: 3px;
  box-shadow: 571px 173px #FFF , 1732px 143px #FFF , 1745px 454px #FFF , 234px 784px #FFF , 1793px 1123px #FFF , 1076px 504px #FFF , 633px 601px #FFF , 350px 630px #FFF , 1164px 782px #FFF , 76px 690px #FFF , 1825px 701px #FFF , 1646px 578px #FFF , 544px 293px #FFF , 445px 1061px #FFF , 928px 47px #FFF , 168px 1410px #FFF , 777px 782px #FFF , 1235px 1941px #FFF , 104px 1690px #FFF , 1167px 1338px #FFF , 345px 1652px #FFF , 1682px 1196px #FFF , 1995px 494px #FFF , 428px 798px #FFF , 340px 1623px #FFF , 605px 349px #FFF , 1339px 1344px #FFF , 1102px 1745px #FFF , 1592px 1676px #FFF , 419px 1024px #FFF , 630px 1033px #FFF , 1995px 1644px #FFF , 1092px 712px #FFF , 1355px 606px #FFF , 622px 1881px #FFF , 1481px 621px #FFF , 19px 1348px #FFF , 864px 1780px #FFF , 442px 1136px #FFF , 67px 712px #FFF , 89px 1406px #FFF , 275px 321px #FFF , 592px 630px #FFF , 1012px 1690px #FFF , 1749px 23px #FFF , 94px 1542px #FFF , 1201px 1657px #FFF , 1505px 692px #FFF , 1799px 601px #FFF , 656px 811px #FFF , 701px 597px #FFF , 1202px 46px #FFF , 890px 569px #FFF , 1613px 813px #FFF , 223px 252px #FFF , 983px 1093px #FFF , 726px 1029px #FFF , 1764px 778px #FFF , 622px 1643px #FFF , 174px 1559px #FFF , 212px 517px #FFF , 340px 505px #FFF , 1700px 39px #FFF , 1768px 516px #FFF , 849px 391px #FFF , 228px 1824px #FFF , 1119px 1680px #FFF , 812px 1480px #FFF , 1438px 1585px #FFF , 137px 1397px #FFF , 1080px 456px #FFF , 1208px 1437px #FFF , 857px 281px #FFF , 1254px 1306px #FFF , 987px 990px #FFF , 1655px 911px #FFF , 1102px 1216px #FFF , 1807px 1044px #FFF , 660px 435px #FFF , 299px 678px #FFF , 1193px 115px #FFF , 918px 290px #FFF , 1447px 1422px #FFF , 91px 1273px #FFF , 108px 223px #FFF , 146px 754px #FFF , 461px 1446px #FFF , 1004px 391px #FFF , 1529px 516px #FFF , 1206px 845px #FFF , 347px 583px #FFF , 1102px 1332px #FFF , 709px 1756px #FFF , 1972px 248px #FFF , 1669px 1344px #FFF , 1132px 406px #FFF , 320px 1076px #FFF , 126px 943px #FFF , 263px 604px #FFF , 1546px 692px #FFF;
  animation: animStar 150s linear infinite;
}
#stars3:after {
  content: " ";
  position: absolute;
  top: 2000px;
  width: 3px;
  height: 3px;
  box-shadow: 571px 173px #FFF , 1732px 143px #FFF , 1745px 454px #FFF , 234px 784px #FFF , 1793px 1123px #FFF , 1076px 504px #FFF , 633px 601px #FFF , 350px 630px #FFF , 1164px 782px #FFF , 76px 690px #FFF , 1825px 701px #FFF , 1646px 578px #FFF , 544px 293px #FFF , 445px 1061px #FFF , 928px 47px #FFF , 168px 1410px #FFF , 777px 782px #FFF , 1235px 1941px #FFF , 104px 1690px #FFF , 1167px 1338px #FFF , 345px 1652px #FFF , 1682px 1196px #FFF , 1995px 494px #FFF , 428px 798px #FFF , 340px 1623px #FFF , 605px 349px #FFF , 1339px 1344px #FFF , 1102px 1745px #FFF , 1592px 1676px #FFF , 419px 1024px #FFF , 630px 1033px #FFF , 1995px 1644px #FFF , 1092px 712px #FFF , 1355px 606px #FFF , 622px 1881px #FFF , 1481px 621px #FFF , 19px 1348px #FFF , 864px 1780px #FFF , 442px 1136px #FFF , 67px 712px #FFF , 89px 1406px #FFF , 275px 321px #FFF , 592px 630px #FFF , 1012px 1690px #FFF , 1749px 23px #FFF , 94px 1542px #FFF , 1201px 1657px #FFF , 1505px 692px #FFF , 1799px 601px #FFF , 656px 811px #FFF , 701px 597px #FFF , 1202px 46px #FFF , 890px 569px #FFF , 1613px 813px #FFF , 223px 252px #FFF , 983px 1093px #FFF , 726px 1029px #FFF , 1764px 778px #FFF , 622px 1643px #FFF , 174px 1559px #FFF , 212px 517px #FFF , 340px 505px #FFF , 1700px 39px #FFF , 1768px 516px #FFF , 849px 391px #FFF , 228px 1824px #FFF , 1119px 1680px #FFF , 812px 1480px #FFF , 1438px 1585px #FFF , 137px 1397px #FFF , 1080px 456px #FFF , 1208px 1437px #FFF , 857px 281px #FFF , 1254px 1306px #FFF , 987px 990px #FFF , 1655px 911px #FFF , 1102px 1216px #FFF , 1807px 1044px #FFF , 660px 435px #FFF , 299px 678px #FFF , 1193px 115px #FFF , 918px 290px #FFF , 1447px 1422px #FFF , 91px 1273px #FFF , 108px 223px #FFF , 146px 754px #FFF , 461px 1446px #FFF , 1004px 391px #FFF , 1529px 516px #FFF , 1206px 845px #FFF , 347px 583px #FFF , 1102px 1332px #FFF , 709px 1756px #FFF , 1972px 248px #FFF , 1669px 1344px #FFF , 1132px 406px #FFF , 320px 1076px #FFF , 126px 943px #FFF , 263px 604px #FFF , 1546px 692px #FFF;
}

#title {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  color: #FFF;
  text-align: center;
  font-family: "lato", sans-serif;
  font-weight: 300;
  font-size: 50px;
  letter-spacing: 10px;
  margin-top: -60px;
  padding-left: 10px;
}
#title span {
  background: -webkit-linear-gradient(white, #38495a);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

@keyframes animStar {
  from {
    transform: translateY(0px);
  }
  to {
    transform: translateY(-2000px);
  }
}

body{

background: transparent !important;

}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>

  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>



	<head>
    
	<title>Registrations</title>
</head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
	<div class="header">
		<h1><strong>Register for ACUMEN ECE 2K18</strong></h1>
	</div>
	
	<form class="form-horizontal" method="post" action="register.php">
    <?php include('errors.php'); ?>
	
    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">First Name</label>  
  <div class="col-md-4">
  <input id="name" name="First_Name" type="text" placeholder="" maxlength="15"class="form-control input-md" required="">
    
  </div>
</div>
	    <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Last Name</label>  
  <div class="col-md-4">
  <input id="name" name="Last_Name" type="text" placeholder="" maxlength="15"class="form-control input-md" required="">
    
  </div>
</div>

	    
     <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Mobile</label>  
  <div class="col-md-4">
  <input id="name" name="Mobile_Number" type="text" placeholder="" maxlength="10"class="form-control input-md" required="">
    
  </div>
</div>
		
		<!-- Select Basic Gender -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Gender">Gender</label>
  <div class="col-md-4">
    <select id="Gender" name="Gender" class="form-control">
      <option value="Male">Male</option>
      <option value="Female">Female</option>
    </select>
  </div>
</div>

     <!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">College</label>  
  <div class="col-md-4">
  <input id="name" name="college" type="text" placeholder="" maxlength="35"class="form-control input-md" required="">
    
  </div>
</div>

		

		<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="branch">Branch</label>
  <div class="col-md-4">
    <select id="branch" name="BRANCH" class="form-control">
      <option value="ECE">ECE</option>
      <option value="CSE">CSE</option>
      <option value="IT">IT</option>
      <option value="EEE">EEE</option>
      <option value="MECH">MECH</option>
      <option value="CIVIL">CIVIL</option>
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">Roll No</label>  
  <div class="col-md-4">
  <input id="name" name="rollno" type="text" placeholder="" maxlength="35"class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Name">E-Mail</label>  
  <div class="col-md-4">
  <input id="name" name="email" type="text" placeholder="" maxlength="35"class="form-control input-md" required="">
    
  </div>
</div>
	

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>
  <div class="col-md-4">
    <input id="password" name="password_1" type="password" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="password">Confirm Password</label>
  <div class="col-md-4">
    <input id="password" name="password_2" type="password"  placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-4">
    <button id="login" name="reg_member" class="btn btn-primary" >Sign Up</button>
  
	
</form>
  <a href="https://www.acumenece.info" class="btn btn-primary" class="btn btn-primary">Home</a><br>
			Already a member? <a class="btn btn-primary btn-block" href="login.php">Sign in</a><br><br>

		</p></body>

</div>
</div>
</body>
</html>
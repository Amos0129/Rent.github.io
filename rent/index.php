<!DOCTYPE html>
	<html lang="en">
	<head>       
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>致理i租屋</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
	<body>
        <header class="main-header">
            <div class="container">
                <a href="" class="logo">
                    <img src="img/logo.png" alt="">
                </a>
            <nav class="main-nav">
                <a href="index.php">首頁</a>
                <a href="">諮詢中心</a>
                <a href="">租屋管理區</a>
                <a href="login.php">登入</a>
            </nav>
        </div>
        </header>

        <form action="">
            <table>
                <div>
                    <tr>
                        <td>
                            <h3>位置：</h3>
                        </td>
                        <td>
                            <input type="checkbox" id="local-1" name="local-1" value="Banqiao District">
                            <label>板橋區</label>
                        </td>
                        <td>
                            <input type="checkbox" id="local-2" name="local-2" value="Triple District">
                            <label>三重區</label>
                        </td>
                        <td>
                            <input type="checkbox" id="local-3" name="local-3" value="Xinzhuang District">
                            <label>新莊區</label>
                        </td>
                        <td>
                            <input type="checkbox" id="local-4" name="local-4" value="woods area">
                            <label>樹林區</label>
                        </td>
                        <td>
                            <input type="checkbox" id="local-5" name="local-5" value="Tucheng District">
                            <label>土城區</label>
                        </td>
                        <td>
                            <input type="checkbox" id="local-6" name="local-6" value="Zhonghe District">
                            <label>中和區</label>
                        </td>
                        <td>
                            <input type="checkbox" id="local-7" name="local-7" value="Wanhua District">
                            <label>萬華區</label>
                        </td>          
                    </tr>
                        
                    <tr>
                        <td>
                            <h3>類型：</h3>
                        </td>
                        <td>
                            <select>
                                <option>請選擇類型</option>
                                <option>整層住家</option>
                                <option>獨立套房</option>
                                <option>分租套房</option>
                                <option>雅房</option>
                            </select>
                        </td>
                        <td>
                            <h3>房數：</h3>
                        </td>
                        <td>
                            <select>
                                <option>請選擇房數</option>
                                <option>一房</option>
                                <option>二房</option>
                                <option>三房</option>
                                <option>四房</option>
                            </select>
                        </td>
                        <td>
                            <h3>租金：</h3>
                        </td>
                        <td>
                            <select>
                                <option>請選擇租金</option>
                                <option>0-5000元</option>
                                <option>5000-10000元</option>
                                <option>10000-20000元</option>
                                <option>20000元以上</option>
                            </select>
                        </td>              
                    </tr>                                                                  
                </div>
                <div>
                    <tr>
                        <td>
                            <h3>坪數：</h3>
                        </td>
                        <td>
                            <input type="checkbox" id="10 ping or less" name="10 ping or less" value="10 ping or less">
                            <label>10坪以下</label>
                        </td>
                        <td>
                            <input type="checkbox" id="10-20 ping" name="10-20 ping" value="10-20 ping">
                            <label>10-20坪</label>
                        </td>
                        <td>
                            <input type="checkbox" id="20-30 ping" name="20-30 ping" value="20-30 ping">
                            <label>20-30坪</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>樓層：</h3>
                        </td>
                        <td>
                            <input type="checkbox" id="1 story" name="1 story" value="1 story">
                            <label>1層</label>
                        </td>
                        <td>
                            <input type="checkbox" id="2-6 story" name="2-6 story" value="2-6 story">
                            <label>2-6層</label>
                        </td>
                        <td>
                            <input type="checkbox" id="6-12 story" name="6-12 story" value="6-12 story">
                            <label>6-12層</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>設備：</h3>
                        </td>
                        <td>
                            <input type="checkbox" id="air conditioner" name="air conditioner" value="air conditioner">
                            <label>有冷氣</label>
                        </td>
                        <td>
                            <input type="checkbox" id="washing machine" name="washing machine" value="washing machine">
                            <label>有洗衣機</label>
                        </td>
                        <td>
                            <input type="checkbox" id="refrigerator" name="refrigerator" value="refrigerator">
                            <label>有冰箱</label>
                        </td>
                        <td>
                            <input type="checkbox" id="water heater" name="water heater" value="water heater">
                            <label>有熱水器</label>
                        </td>
                        <td>
                            <input type="checkbox" id="natural gas" name="natural gas" value="natural gas">
                            <label>有天然瓦斯</label>
                        </td>
                        <td>
                            <input type="checkbox" id="network" name="network" value="network">
                            <label>有網路</label>
                        </td>
                        <td>
                            <input type="checkbox" id="Exclude roof caps" name="Exclude roof caps" value="Exclude roof caps">
                            <label>排除頂樓加蓋</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>須知：</h3>
                        </td>
                        <td>
                            <input type="checkbox" id="unisex" name="unisex" value="unisex">
                            <label>男女皆可</label>
                        </td>
                        <td>
                            <input type="checkbox" id="boy" name="boy" value="boy">
                            <label>限男生</label>
                        </td>
                        <td>
                            <input type="checkbox" id="girl" name="girl" value="girl">
                            <label>限女生</label>
                        </td>
                    </tr>
                </div>
            </table>
            <div class="btn">
                <input type="button" value="搜尋🔍" name="按鈕名稱" onclick="欲連結到的網址" style="width:100px;height:40px">
            </div>
        </form>
        <div class="wrap">
            <div class="items">
                <img src="https://fakeimg.pl/250x200/ff0000,128/000,255" alt="">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam harum consequuntur est fuga eveniet similique ipsa, sequi nulla eaque quidem magnam asperiores facilis deserunt exercitationem neque. Nesciunt aut ducimus perferendis.</p>
            </div>
            <div class="items">
            <img src="https://fakeimg.pl/250x200/ff0000,128/000,255" alt="">
                <h3>title</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis non veritatis quaerat doloremque, aliquam maiores sed porro dignissimos, fugiat perferendis, atque architecto debitis alias qui asperiores voluptatum! Asperiores, voluptas natus?</p>
            </div>
            <div class="items">
            <img src="https://fakeimg.pl/250x200/ff0000,128/000,255" alt="">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur omnis placeat totam repellendus fuga temporibus vitae mollitia maxime et, officia, hic perspiciatis, odit voluptates explicabo ipsa nihil. Corporis, quos quod!</p>
            </div>
            <div class="items">
                <img src="https://fakeimg.pl/250x200/ff0000,128/000,255" alt="">
                <h3>title</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur omnis placeat totam repellendus fuga temporibus vitae mollitia maxime et, officia, hic perspiciatis, odit voluptates explicabo ipsa nihil. Corporis, quos quod!</p>
            </div>
            <div class="clear-fix"></div>
        </div>
        
        <footer>
            <div class="footer">
                <p> 
                    220305 新北市板橋區文化路1段313號<br>
                    No.313, Sec. 1, Wenhua Rd., Banqiao Dist., New Taipei City 220305, Taiwan (R.O.C.)<br>
                    TEL：(02)2257-6167 │ (02)2257-6168 │ FAX：(02)2258-3710
                </p>
            </div>
        </footer>
    </body>
</html>
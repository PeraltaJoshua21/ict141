<?php include ("memberheader.php"); ?>
    <script src="js/formcalculations.js"></script>
    <link href="css/cakeform.css" rel="stylesheet" type="text/css" />
</head>
<body onload='hideTotal()'>
    <div id="wrap">
        <form action="" id="bingsuform" onsubmit="return false;">
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Make your own Bingsu!</legend>
                <label >Size of the Bingsu</label>
                <label class='radiolabel'><input type="radio"  name="selectedbingsu" value="small" onclick="calculateTotal()" />Small</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedbingsu" value="medium" onclick="calculateTotal()" />Medium</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedbingsu" value="large" onclick="calculateTotal()" />Large</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedbingsu" value="extralarge" onclick="calculateTotal()" />Extra Large</label><br/>
                <br/>
                <label >Filling</label>
         
                <select id="filling" name='filling' onchange="calculateTotal()">
                <option value="None">Select Filling</option>
                <option value="Lemon">Lemon</option>
                <option value="Custard">Custard</option>
                <option value="Fudge">Fudge</option>
                <option value="Mocha">Mocha</option>
                <option value="Raspberry">Raspberry</option>
                <option value="Pineapple">Pineapple</option>
                <option value="Dobash">Dobash</option>
                <option value="Mint">Mint</option>
                <option value="Cherry">Cherry</option>
                <option value="Apricot">Apricot</option>
                <option value="Buttercream">Buttercream</option>
                <option value="Chocolate Mousse">Chocolate Mousse</option>
               </select>
                <br/><br>
                <label>Toppings</label>
               
                <input id="chocolatesyrup" type="checkbox" name="chocolatesyrup" onclick="calculateTotal()"/> Chocolate Syrup
                <input id="redbeans" type="checkbox" name="redbeans" onclick="calculateTotal()"/> Red Beans
                <input id="sprinkles" style="margin-left: 1px;" type="checkbox" name="sprinkles" onclick="calculateTotal()"/> Sprinkles<br>
                <input id="caramelsyrup" type="checkbox" name="caramelsyrup" onclick="calculateTotal()"/> Caramel Syrup
                <input id="sticko" style="margin-left: 9px;" type="checkbox" name="sticko" onclick="calculateTotal()"/> Stick-O!
                <input id="cornflakes" style="margin-left: 19px;" type="checkbox" name="cornflakes" onclick="calculateTotal()"/> Corn Flakes<br>
                <input id="blueberrysyrup" type="checkbox" name="blueberrysyrup"  onclick="calculateTotal()"/> Blueberry Syrup
                <input id="almonds" style="margin-left: 2px;" type="checkbox" name="almonds" onclick="calculateTotal()"/> Almonds
                <input id="marshmallows" style="margin-left: 15px;" type="checkbox" name="marshmallows" onclick="calculateTotal()"/> Marshmallows
             
                <br><br><br>
                <div id="totalPrice"></div>
                
                </fieldset>
            </div>
            
        </div>  
       </form>
	</div><!--End of wrap-->

</body>
</html>
<?php include("footer.php"); ?>
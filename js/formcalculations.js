 var bingsu_prices = new Array();
 bingsu_prices["small"]=180;
 bingsu_prices["medium"]=200;
 bingsu_prices["large"]=250;
 bingsu_prices["extralarge"]=300;
 
 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["Lemon"]=25;
 filling_prices["Custard"]=25;
 filling_prices["Fudge"]=30;
 filling_prices["Mocha"]=30;
 filling_prices["Raspberry"]=45;
 filling_prices["Pineapple"]=40;
 filling_prices["Dobash"]=40;
 filling_prices["Mint"]=40;
 filling_prices["Cherry"]=45;
 filling_prices["Apricot"]=40;
 filling_prices["Buttercream"]=45;
 filling_prices["Chocolate Mousse"]=50;
	 
function getBingsuSizePrice()
{  
    var bingsuSizePrice=0;
    var theForm = document.forms["bingsuform"];
    var selectedBingsu = theForm.elements["selectedbingsu"];

    for(var i = 0; i < selectedBingsu.length; i++)
    {
        if(selectedBingsu[i].checked)
        {
            bingsuSizePrice = bingsu_prices[selectedBingsu[i].value];
            break;
        }
    }
    return bingsuSizePrice;
}

function getFillingPrice()
{
    var cakeFillingPrice=0;
    var theForm = document.forms["bingsuform"];
    var selectedFilling = theForm.elements["filling"];
    cakeFillingPrice = filling_prices[selectedFilling.value];
    return cakeFillingPrice;
}

function chocosyrupPrice()
{
    var chocosyrupPrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["chocolatesyrup"];
    if(include.checked==true){
        chocosyrupPrice=20;
    }
    return chocosyrupPrice;
}
    

function redbeansPrice()
{
    var redbeansPrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["redbeans"];
    if(include.checked==true){
        redbeansPrice=15;
    }
    return redbeansPrice;
}

function sprinklePrice()
{
    var sprinklePrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["sprinkles"];
    if(include.checked==true){
        sprinklePrice=15;
    }
    return sprinklePrice;
}
function caramelsyrupPrice()
{
    var caramelsyrupPrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["caramelsyrup"];
    if(include.checked==true){
        caramelsyrupPrice=25;
    }
    return caramelsyrupPrice;
}

function stickoPrice()
{
    var stickoPrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["sticko"];
    if(include.checked==true){
        stickoPrice=10;
    }
    return stickoPrice;
}

function cornflakesPrice()
{
    var cornflakesPrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["cornflakes"];
    if(include.checked==true){
        cornflakesPrice=20;
    }
    return cornflakesPrice;
}

function blueberrysyrupPrice()
{
    var blueberryPrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["blueberrysyrup"];
    if(include.checked==true){
        blueberryPrice=20;
    }
    return blueberryPrice;
}

function almondsPrice()
{
    var almondsPrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["almonds"];
    if(include.checked==true){
        almondsPrice=20;
    }
    return almondsPrice;
}

function marshmallowsPrice()
{
    var marshmallowsPrice=0;
    var theForm = document.forms["bingsuform"];
    var include = theForm.elements["marshmallows"];
    if(include.checked==true){
        marshmallowsPrice=15;
    }
    return marshmallowsPrice;
}
        
function calculateTotal()
{
    //Here we get the total price by calling our function
    //Each function returns a number so by calling them we add the values they return together
    var bingsuPrice = getBingsuSizePrice() + getFillingPrice() + chocosyrupPrice() + redbeansPrice() + sprinklePrice()
    + caramelsyrupPrice() + stickoPrice() + cornflakesPrice() + blueberrysyrupPrice() + almondsPrice() + marshmallowsPrice();
    
    //display the result
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='block';
    divobj.innerHTML = "Total Price For the Bingsu P"+bingsuPrice;

}

function hideTotal()
{
    var divobj = document.getElementById('totalPrice');
    divobj.style.display='none';
}
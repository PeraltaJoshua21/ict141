var binsgu_prices = new Array();
binsgu_prices['Small'] = 80;
binsgu_prices['Medium'] = 100;
binsgu_prices['Large'] = 130;
binsgu_prices['ExtraLarge'] = 180;

 var filling_prices= new Array();
 filling_prices["None"]=0;
 filling_prices["Lemon"]=5;
 filling_prices["Custard"]=5;
 filling_prices["Fudge"]=7;
 filling_prices["Mocha"]=8;
 filling_prices["Raspberry"]=10;
 filling_prices["Pineapple"]=5;
 filling_prices["Dobash"]=9;
 filling_prices["Mint"]=5;
 filling_prices["Cherry"]=5;
 filling_prices["Apricot"]=8;
 filling_prices["Buttercream"]=7;
 filling_prices["Chocolate Mousse"]=12;
 
function getBinsguPrice{

	var bingsuSizePrice = 0;
	var form = document.form('bingsuForm');
	var selected = form.elements['bingsuSize'];

	for (var i = 0; i < bingsuSize.length; i++) {
		if(bingsuSize[i].checked){
			bingsuSizePrice = binsgu_prices[binsguSize[i].value];
			break;
		}
	}
	return bingsuSizePrice;

}
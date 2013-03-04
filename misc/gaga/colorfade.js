////////////////////////////// Colour Functions /////////////////////////////////////
//Convert a hex value to its decimal value - the inputed hex must be in the
// format of a hex triplet - the kind we use for HTML colours. The function
// will return an array with three values.
function hex2num(hex) {
 if(hex.charAt(0) == "#") { 
  hex = hex.slice(1);
 }
 hex = hex.toUpperCase();
 var hex_alphabets = "0123456789ABCDEF";
 var value = new Array(3);
 var k = 0;
 var int1,int2;
 for(var i=0;i<6;i+=2) {
  int1 = hex_alphabets.indexOf(hex.charAt(i));
  int2 = hex_alphabets.indexOf(hex.charAt(i+1));
  value[k] = (int1 * 16) + int2;
  k++;
 }
 return(value);
}
//Give a array with three values as the argument and the function will return
// the corresponding hex triplet.
function num2hex(triplet) {
 var hex_alphabets = "0123456789ABCDEF";
 var hex = "#";
 var int1,int2;
 for(var i=0;i<3;i++) {
  int1 = triplet[i] / 16;
  int2 = triplet[i] % 16;

  hex += hex_alphabets.charAt(int1) + hex_alphabets.charAt(int2);
 }
 return(hex);
}

//Function that fades the color.
//Arguments...
//id  - ID of the element whose colour must be faded.
//start_hex - The initial color of the element.
//stop_hex - The final color. The element will fade from the initial color to the final color.
//difference- The colour values will be incremented by this number
//delay  - The speed of the the effect - higher delay means slower effect.
//color_background- The fade must be for the color of the element or for its background.
//      Allowed values are 'c'(Color of element) and 'b'(Background)
function fadeColor(id,start_hex,stop_hex,difference,delay,color_background) {
 //Default values...
 if(!difference) difference = 20;
 if(!delay) delay = 100;
 if(!start_hex) start_hex = "#FFFFFF";
 if(!stop_hex) stop_hex = "#000000";
 if(!color_background) color_background = "c";
 
 var ele = document.getElementById(id);
 if(!ele) return;
 var start= hex2num(start_hex);
 var stop = hex2num(stop_hex);
 
 //Make it numbers rather than strings.
 for(var i=0;i<3;i++) {
  start[i] = Number(start[i]);
  stop[i] = Number(stop[i]);
 }

 //Morph one colour to the other. If the start color is greater than the stop colour, start color will
 // be decremented till it reaches the stop color. If it is lower, it will incremented.
 for(var i=0;i<3;i++) {
  if (start[i] < stop[i]) {
   start[i] += difference;
   if(start[i] > stop[i]) start[i] = stop[i];//If we have overshot our target, make it equal - or it won't stop.
  }
  else if(start[i] > stop[i]) {
   start[i] -= difference;
   if(start[i] < stop[i]) start[i] = stop[i];
  }
 }

 //Change the color(or the background color).
 var color = "rgb("+start[0]+","+start[1]+","+start[2]+")";
 if(color_background == "b") {
  ele.style.backgroundColor = color;
 } else {
  ele.style.color = color;
 }

 //Stop if we have reached the target.
 if((start[0] == stop[0]) && (start[1] == stop[1]) && (start[2] == stop[2]))
 {
 	return;
 }
 
 start_hex = num2hex(start);
 //Keep calling this function
 window.setTimeout("fadeColor('"+id+"','"+start_hex+"','"+stop_hex+"',"+difference+","+delay+",'"+color_background+"')",delay);
}
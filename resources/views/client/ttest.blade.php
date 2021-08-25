<form action="{{ route('client.ttest.tstore') }}" name="cartCheckout" id="cartCheckout" method="post"> 
@csrf
<input type="text" name="tname">
<button type="submit">submit</button>

 </form>     
 <script>
//   window.onload=function(){ 
//    // alert('hello');
//     var counter = 5;
//     var interval = setInterval(function() {
//         counter--;
//         // $("#seconds").text(counter);
//         if (counter == 0) {
//             redirect();
//             clearInterval(interval);
//         }
//     }, 1000);

// };
window.onload=function(){ 
    window.setTimeout(function() { document.cartCheckout.submit(); }, 5000);
};
function redirect() {
    document.checkout_paypal.submit();
}
 </script>
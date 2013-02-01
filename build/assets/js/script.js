function getCreditCardType() {

    var accountNumber = document.getElementById("cc-num").value;
    
    //check card type  
    if (/^5[1-5]/.test(accountNumber)) {
      document.getElementById("mastercard").checked=true;
    }

    else if (/^4/.test(accountNumber)) {
      document.getElementById("visa").checked=true;
    }

    else if (/^3[47]/.test(accountNumber)) {

      document.getElementById("amex").checked=true;
    }

     else if (/^6/.test(accountNumber)) {

      document.getElementById("discover").checked=true;
    }
    
    //Reset to unchecked
    else {  
        document.getElementById("mastercard").setAttribute("unchecked");
        document.getElementById("visa").setAttribute("unchecked");
        document.getElementById("amex").setAttribute("unchecked");  
        document.getElementById("discover").setAttribute("unchecked");
  }
}
document.getElementById("cardNum").addEventListener('keyup',getCreditCardType);


Modernizr.load({
  test: Modernizr.input.required,
  nope: 'lib/parsley-standalone.min.js'
});
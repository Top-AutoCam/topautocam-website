
function update(e) {
    console.log(e.target.value);
}

var radioMakes = document.getElementsByName("make-radio");
console.debug(radioMakes.length);

if(radioMakes != null && radioMakes.length > 0) {
    console.debug('add event listener1111');
    for(var i = 0; i < radioMakes.length; i++) {
        console.debug('add event listener');
        radioMakes[i].addEventListener('change', update);
    }
}

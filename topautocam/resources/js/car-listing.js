/*
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
*/

document.addEventListener("DOMContentLoaded", function() {
  
    var filterByMake = document.getElementById("filter-by-make");
    if(!filterByMake) return;
    filterByMake.addEventListener("change", onFilterByMake);

    var inputFilterByMake = document.getElementById("input-filter-by-make");
    if(!inputFilterByMake) return;
    
    function onFilterByMake() {
        //alert(filterByMake.value);
        inputFilterByMake.value = filterByMake.value;
    }
});
  
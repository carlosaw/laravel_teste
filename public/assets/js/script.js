const selector = null;
const input = selector || {};

// ✔️ This will work, as even if `selector` is null, we will assign an empty object
input.value = 'new value';

setTimeout(function() { 
    if (document.getElementById('alert')){
        document.getElementById("alert").style.display = "none";
    }   
}, 5000);    
        function hide(){
        if(document.getElementById('alert')) {
            document.getElementById("alert-success").style.display = "none";
    }
}
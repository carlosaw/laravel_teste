setTimeout(async function() { 
    if (document.getElementById('alert')){
        document.getElementById("alert").style.display = "none";
    }   
}, 5000);    
        async function hide(){
        if(document.getElementById('alert')) {
            document.getElementById("alert-success").style.display = "none";
    }
}
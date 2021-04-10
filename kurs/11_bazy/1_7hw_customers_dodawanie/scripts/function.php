<?php 
function year($getYear){
    return substr($getYear, 0, 4);
}

function txtformat($txtinput){
    return (ucfirst(mb_strtolower($txtinput)));
}

?>  
<script>
function allLetter(inputtxt){ 
        var letters = /^[A-Za-z]+$/;
    if (inputtxt.value.match(letters)){
        alert('Dane wprowadzone poprawnie!');
        return true;
          
    }else{
        alert('Proszę wprowadzić tylko znaki alfabetu!');
        return false;
    }
}
</script>
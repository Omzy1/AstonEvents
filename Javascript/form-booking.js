
//this disable some dropdown options when the the dropdown category is selected
function disableDrop() {
    //declaring variables
    var category = document.getElementById('category');
    var organiser = document.getElementById('organise');
    var url = document.getElementById('url');
    var location = document.getElementById('place');
    var events = document.getElementById('events');
    var dates = document.getElementById('date');
    var one = document.getElementById('one');
    var two = document.getElementById('two');
    var three = document.getElementById('three');
    var four = document.getElementById('four');
    var five = document.getElementById('five');
    var six = document.getElementById('six');
    var res= category.options[category.selectedIndex].value;
    // if category is equal to sport then display spcific informations
    if (res =='sport') {
   organiser.value = "EmilyDayna@Aston.ac.uk";
    url.value = "sport.php";
    location.value = "Ellis Woodcock Sports Centre";
    dates.value = "2021/04/23";
    dates.style.color = "grey";
     //displaying specific options
    three.style.display = 'none';
    four.style.display = 'none';
    five.style.display = 'none';
    six.style.display = 'none'; 
    //styling the texts
   organiser.style.color = "grey";  
   url.style.color = "grey";
     location.style.color = "grey"  
    }else if(res == 'culture'){
     organiser.value = "YasminaLarson@Aston.ac.uk";
     url.value = "culture.php";
     location.value = " Aston university in the history/art department";
    dates.value = "2021/04/24";
    dates.style.color = "grey";
    //displaying specific options
    three.style.display ='block';
    four.style.display ='block';
    one.style.display = 'none';
    two.style.display = 'none';
    five.style.display = 'none';
    six.style.display = 'none';
    //styling the texts
     organiser.style.color = "grey";
     url.style.color = "grey";
     location.style.color = "grey";
      // if category is equal to sport then display spcific informations
    }else if(res =='others'){
        organiser.value = "LauraLao@Aston.ac.uk";
        url.value = "others.php";
        location.value = "Birmingham City Centre at the O2 institute";
        dates.value = "2021/04/25";
        dates.style.color = "grey";
 //displaying specific options
        five.style.display ='block';
    six.style.display ='block';
        one.style.display = 'none';
    two.style.display = 'none';
    three.style.display = 'none';
    four.style.display = 'none';
    //styling the texts
        organiser.style.color = "grey";
        url.style.color = "grey";
     location.style.color = "grey"
    //otherwise dont show anything
    }else{
        organiser.value = "";
        url.value = "";
        location.value = "";
        events.value ="";
        dates.value = "";
    }
}
//description validation
function validateDescr() {
    var descrip = document.getElementById('describe');
    if (descrip.value.replace(/ /g,'').length) {
        document.getElementById("describe-error").innerHTML = "";
        return true;
    }
    else{
        document.getElementById("describe-error").innerHTML = "**Description is required**";
        document.getElementById("describe-error").style.color = "red";
        // alert("**Description is required**");
        return false;
    }
}







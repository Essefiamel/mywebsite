$( function() {
   
    $( "#date" ).datepicker();
  } );
  $("#b1").click(function () {
       var test=false;
while (test==false ){
    if ($("#date").val() =="") {
        alert("saisir la date SVP");
    }
    else if((($("#time").val().length >5) && (isNaN($("#tel").val())==true) ) || ($("#time").val().length <=0))
        {
            alert("saisir votre temps SVP");
        }
        else
        
            if ($("#pays").val() == '-1') {
                alert("Veuillez sélectionner une pays");
            }
    test=true;
   }
        var pays = $("#pays").val();
       // var temp = $("#time").val();
        var tableau = $('#time').val().split(':');
        var date = $("#date").val();

       var temp=parseInt(tableau[0])+parseInt(pays);
        if (temp>24){ //30-24=6
            temp=temp-24;
                var plus=date.split("/");
                plus[1]=parseInt(plus[1])+1;
                if (plus[1]==31){
                    if (parseInt(plus[0]) %2 ==0){
                    plus[0]=parseInt(plus[0])-29;  
                    }
                }

        }
        
    
        alert(" le meeting à "+temp+"h"+tableau[1]+" le "+date);
       
    });
    
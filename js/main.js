var result;
$(document).ready(function(){
    $("#vermieter-btn").click(function(){
        $(".main").css("display","none");
        $(".menuVermieter").css("display","block");
    });
    $("#qm-btn").click(function(){
        $(".calculator").css("display", "block");
        $(".menuVermieter").css("display","none");
    });
    $("#calc-btn").click(function(){
        qmCalc();
        alert(result);
    });

});


function qmCalc(){
    var value = $("#qm-val").val();
    var preis = 12;

    result = value * preis; 


}
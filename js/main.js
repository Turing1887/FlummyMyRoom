var result;
$(document).ready(function(){
  $(".event1").fadeOut();
    $("#vermieter-btn").click(function(){
        // $(".main").css("display","none");
        // $(".menuVermieter").css("display","block");
        window.location.href = "vermieter.php";

    });
    $(".mieterBtn").click(function(){
      window.location.href = "event.php";
    });
    $("#qm-btn").click(function(){
        // $(".calculator").css("display", "block");
        // $(".menuVermieter").css("display","none");
        window.location.href = "calculator.php";
    });
    $("#calc-btn").click(function(){
        qmCalc();
        $("#qm-val-out").val(result);
    });
    $("#exitBtn").click(function(){
      window.close();
    });
    $("#flummi-btn").click(function(){
      window.location.href = "flummi.php";
    });
    $("#burgermenu-btn").click(function(){

    });
    $("#calendar-btn").click(function(){
      window.location.href = "event.php";

    });
    $("#nextbtn").click(function(){
      $(".event1").fadeOut();
      $(".event2").fadeIn();
    });
    $("#backbtn").click(function(){
      $(".event2").fadeOut();
      $(".event1").fadeIn();
    });
    $(".back2menu").click(function(){
      window.location.href = "vermieter.php";
    });


});


function qmCalc(){
    var value = $("#qm-val").val();
    var preis = 12;

    result = value * preis;


}

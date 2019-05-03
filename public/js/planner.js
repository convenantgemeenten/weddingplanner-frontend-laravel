$( ".plannerOptions .col-1" ).mouseover(function() {
    var timeslot = $(this).attr("class").match(/Timeslot[\w-]*\b/);
    $( "."+timeslot ).each(function(index){
        $( "."+timeslot ).addClass("TimeslotHover");
      });
  });
  $( ".plannerOptions .col-1" ).mouseout(function() {
    var timeslot = $(this).attr("class").match(/Timeslot[\w-]*\b/);
    $( "."+timeslot ).each(function(index){
        $( "."+timeslot ).removeClass("TimeslotHover");
      });
  });
  
    $(".plannerOptions .col-1").click(function(){
      var timeslot = $(this).attr("class").match(/Timeslot[\w-]*\b/);
      if($(this).find("input").prop('checked')==true){
        $(this).find("input").prop('checked', false);
        $(this).removeClass("TimeslotItemSelected");
        $( "."+timeslot ).removeClass("TimeslotSelected");
      }else{
        $(this).find("input").prop('checked', true);
        $(this).addClass("TimeslotItemSelected");
        $( "."+timeslot ).addClass("TimeslotSelected");
      }
    });
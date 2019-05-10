var selDate;var selLoc;var selTS;var selAmbt;
var selTSLoc;var selTSAmbt;var freeWedding=false;

$( document ).ready(function() {
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
      if($(this).find("input").prop('checked')==true){//manual reset current selection
        $(this).find("input").prop('checked', false);
        $(this).removeClass("TimeslotItemSelected");
        $( "."+timeslot ).removeClass("TimeslotSelected");
        if($(this).parent().hasClass('location')){//location, so reset all locations
          selTSLoc=null;
        }
        if($(this).parent().hasClass('ambt')){//location, so reset all locations
          selTSAmbt=null;
        }
      }else{
        //reset selection
        if($(this).parent().hasClass('location')){//location, so reset all locations
          $('.plannerOptions.location input').each(function(){$(this).prop('checked',false);});
          $('.plannerOptions.location .col-1').each(function(){$(this).removeClass("TimeslotSelected");$(this).removeClass("TimeslotItemSelected");});
          selTSLoc=timeslot.toString();
        }
        if($(this).parent().hasClass('ambt')){//ambt, so reset all locations
          $('.plannerOptions.ambt input').each(function(){$(this).prop('checked',false);});
          $('.plannerOptions.ambt .col-1').each(function(){$(this).removeClass("TimeslotSelected");$(this).removeClass("TimeslotItemSelected");});
          selTSAmbt=timeslot.toString();
          $('#functionaryFirst').val($(this).attr("data-ambt")).change();//set firstFunctionary
        }
        //new selection
        if(selDate != ''){//only select if date is selected
          //get selections
          ts = $(this).attr("data-timeslot");loc = $(this).attr("data-location");ambt = $(this).attr("data-ambt");
          //fill global vars
          selTS=ts;if($(this).parent().hasClass('location')){selLoc=loc;}if($(this).parent().hasClass('ambt')){selAmbt=ambt;}
          //check timeslots location & ambt
          if(selTSLoc!=null && selTSAmbt!=null && selTSLoc!=selTSAmbt){
            alert('tijdkeuze locatie en ambtenaar komen niet overeen');
          }else{
            $(this).find("input").prop('checked', true);
            $(this).addClass("TimeslotItemSelected");
            $( "."+timeslot ).addClass("TimeslotSelected");
            //show selection
            $('#selectedDateTimeslot').html($('#selectedDate').html()+': tijdslot: '+ts + ' ');
            //if(loc){$('#selectedDateTimeslot').html($('#selectedDateTimeslot').html()+' Locatie: '+loc);}
            //if(ambt){$('#selectedDateTimeslot').html($('#selectedDateTimeslot').html()+' Ambtenaar: '+ambt);}
            $('#selectedDateTimeslot').html($('#selectedDateTimeslot').html()+' Locatie: '+selLoc);
            $('#selectedDateTimeslot').html($('#selectedDateTimeslot').html()+' Ambtenaar: '+selAmbt);
          }
        }else{//no date so no selection
          alert('selecteer eerst een dag');
        }
      }
    });

  $('#cbFreeWedding').change(function() {
    freeWedding = $(this).prop('checked');
    if($(this).prop('checked')){
        //true
    }else{
        //false
    }
  });
});

function selectedDate(date){
  mm=date.getMonth()+1;dd=date.getDate();yyyy=date.getFullYear();
  $('#selectedDate').html(''+dd+'-'+mm+'-'+yyyy);
  selDate=date;
}
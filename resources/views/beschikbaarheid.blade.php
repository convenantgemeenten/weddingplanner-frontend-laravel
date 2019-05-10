@extends('layouts.app')

@section('title', 'Beschikbaarheid controleren')

@section('price', '€ 0,00')

@section('header')
    @parent
    <script src='/js/planner.js'></script>
    <script src='/weddingplanner-frontend-laravel/public/js/planner.js'></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar')
      var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [ 'interaction', 'dayGrid' ],
        editable: true,
        locale: 'nl',   
        firstDay:1,  
        buttonText:{today: 'vandaag'}, 
        //selectable: true,  
        events: [
          {
            title: 'Bevrijdingsdag',
            start: '2019-05-05'
          },
          {
            title: 'Verbouwing raadzaal',
            start: '2019-05-07',
            end: '2019-05-10'
          },
          {
            title: 'Gratis trouwdag',
            start: '2019-05-06',
            end: '2019-05-06'
          },
          {
            title: 'Gratis trouwdag',
            start: '2019-05-13',
            end: '2019-05-13'
          },
          {
            title: 'Gratis trouwdag',
            start: '2019-05-20',
            end: '2019-05-20'
          },
          {
            title: 'Gratis trouwdag',
            start: '2019-05-27',
            end: '2019-05-27'
          },
        ]
      });
      calendar.render();

      calendar.on('dateClick', function(info) {
        console.log('clicked on ' + info.dateStr);
        $('.fc-day').removeClass('selectedDate');
        $('*[data-date="'+info.dateStr+'"]').addClass('selectedDate');
        selectedDate(info.date);
      });
    });
    </script>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <form method="POST" action="/beschikbaarheid">
        @csrf

      <div id="freeWedding">
          <div class="form-check">
              <input class="form-check-input @error('cbFreeWedding') is-invalid @enderror" data-toggle="toggle" data-on="Ja" data-off="Nee" data-onstyle="success" data-offstyle="light" type="checkbox" id="cbFreeWedding">
              <label class="form-check-label" for="cbFreeWedding">
              Betreft het een gratis huwelijk?
              </label>
              @error('cbFreeWedding')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
          </div>
      </div>

      <div id="calendarHolder">
          <h2>Agenda</h2>
          <div id='calendar'></div>
      </div>
      <h2>Planner <span id="selectedDate"></h2>
        <div id='planner'>
          <div id="plannerHeader">
            <div class="row">
              <div class="col-2 plannerIntro">&nbsp;</div>
              <div class="col-10">
                  <div class="row">
                    <div class="col-1 Timeslot1">9:15<br>10:30</div>
                    <div class="col-1 Timeslot2">10:30<br>11:45</div>
                    <div class="col-1 Timeslot3">11:45<br>13:00</div>
                    <div class="col-1 Timeslot4">13:00<br>14:15</div>
                    <div class="col-1 Timeslot5">14:15<br>15:30</div>
                    <div class="col-1 Timeslot6">15:30<br>16:45</div>
                    <div class="col-1 Timeslot7">16:45<br>18:00</div>
                    <div class="col-1 Timeslot8">18:00<br>19:15</div>
                    <div class="col-1 Timeslot9">19:15<br>20:30</div>
                    <div class="col-1 Timeslot10">20:30<br>21:45</div>
                    <div class="col-1 Timeslot11">21:45<br>23:00</div>
                  </div>
              </div>
            </div>
            <div class="row grey">
              <div class="col-2 plannerIntro">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-10 plannerTitle textRight">locaties</div>
                </div>
              </div>
              <div class="col-10">
                  <div class="row">
                    <div class="col-12"></div>
                  </div>
              </div>
            </div>
          </div><!-- /plannerHeader-->
          <div id="plannerContent">

            <div class="row"><!--Locatie 1-->
                <div class="col-2 plannerIntro">
                  <div class="row">
                    <div class="col-2"><a href="#" data-toggle="modal" data-target="#modal_l1"><div>i</div></a></div>
                    <div class="col-10 textRight">Gemeentehuis</div>
                  </div>
                </div>
                <div class="col-10">
                    <div class="row plannerOptions l1 location">
                      <div class="col-1 Timeslot1" data-location="1" data-timeslot="1"><input type="checkbox" name="ts1l1" />&nbsp;</div>
                      <div class="col-1 Timeslot2" data-location="1" data-timeslot="2"><input type="checkbox" name="ts2l1" />&nbsp;</div>
                      <div class="col-1 Timeslot3" data-location="1" data-timeslot="3"><input type="checkbox" name="ts3l1" />&nbsp;</div>
                      <div class="col-1 Timeslot4" data-location="1" data-timeslot="4"><input type="checkbox" name="ts4l1" />&nbsp;</div>
                      <div class="col-1 Timeslot5" data-location="1" data-timeslot="5"><input type="checkbox" name="ts5l1" />&nbsp;</div>
                      <div class="col-1 Timeslot6" data-location="1" data-timeslot="6"><input type="checkbox" name="ts6l1" />&nbsp;</div>
                      <div class="col-1 Timeslot7" data-location="1" data-timeslot="7"><input type="checkbox" name="ts7l1" />&nbsp;</div>
                      <div class="col-1 Timeslot8" data-location="1" data-timeslot="8"><input type="checkbox" name="ts8l1" />&nbsp;</div>
                      <div class="col-1 Timeslot9" data-location="1" data-timeslot="9"><input type="checkbox" name="ts9l1" />&nbsp;</div>
                      <div class="col-1 Timeslot10" data-location="1" data-timeslot="10"><input type="checkbox" name="ts10l1" />&nbsp;</div>
                      <div class="col-1 Timeslot11" data-location="1" data-timeslot="11"><input type="checkbox" name="ts11l1" />&nbsp;</div>
                    </div>
                </div>
            </div>

            <div class="row"><!--Locatie 2-->
                <div class="col-2 plannerIntro">
                  <div class="row">
                    <div class="col-2"><a href="#" data-toggle="modal" data-target="#modal_l2"><div>i</div></a></div>
                    <div class="col-10 textRight">Eigen locatie</div>
                  </div>
                </div>
                <div class="col-10">
                    <div class="row plannerOptions l2 location">
                      <div class="col-1 Timeslot1" data-location="2" data-timeslot="1"><input type="checkbox" name="ts1l2" />&nbsp;</div>
                      <div class="col-1 Timeslot2" data-location="2" data-timeslot="2"><input type="checkbox" name="ts2l2" />&nbsp;</div>
                      <div class="col-1 Timeslot3" data-location="2" data-timeslot="3"><input type="checkbox" name="ts3l2" />&nbsp;</div>
                      <div class="col-1 Timeslot4" data-location="2" data-timeslot="4"><input type="checkbox" name="ts4l2" />&nbsp;</div>
                      <div class="col-1 Timeslot5" data-location="2" data-timeslot="5"><input type="checkbox" name="ts5l2" />&nbsp;</div>
                      <div class="col-1 Timeslot6" data-location="2" data-timeslot="6"><input type="checkbox" name="ts6l2" />&nbsp;</div>
                      <div class="col-1 Timeslot7" data-location="2" data-timeslot="7"><input type="checkbox" name="ts7l2" />&nbsp;</div>
                      <div class="col-1 Timeslot8" data-location="2" data-timeslot="8"><input type="checkbox" name="ts8l2" />&nbsp;</div>
                      <div class="col-1 Timeslot9" data-location="2" data-timeslot="9"><input type="checkbox" name="ts9l2" />&nbsp;</div>
                      <div class="col-1 Timeslot10" data-location="2" data-timeslot="10"><input type="checkbox" name="ts10l2" />&nbsp;</div>
                      <div class="col-1 Timeslot11" data-location="2" data-timeslot="11"><input type="checkbox" name="ts11l2" />&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="row grey">
              <div class="col-2 plannerIntro">
                <div class="row">
                  <div class="col-2"></div>
                  <div class="col-10 plannerTitle textRight">ambtenaren</div>
                </div>
              </div>
              <div class="col-10">
                  <div class="row">
                    <div class="col-12"></div>
                  </div>
              </div>
            </div>
            <div class="row"><!--Ambtenaar 1-->
                <div class="col-2 plannerIntro">
                  <div class="row">
                    <div class="col-2"><a href="#"  data-toggle="modal" data-target="#modal_a1"><div>i</div></a></div>
                    <div class="col-10 textRight">Geen voorkeur</div>
                  </div>
                </div>
                <div class="col-10">
                    <div class="row plannerOptions a1 ambt">
                      <div class="col-1 Timeslot1" data-ambt="1" data-timeslot="1"><input type="checkbox" name="ts1a1" />&nbsp;</div>
                      <div class="col-1 Timeslot2" data-ambt="1" data-timeslot="2"><input type="checkbox" name="ts2a1" />&nbsp;</div>
                      <div class="col-1 Timeslot3" data-ambt="1" data-timeslot="3"><input type="checkbox" name="ts3a1" />&nbsp;</div>
                      <div class="col-1 Timeslot4" data-ambt="1" data-timeslot="4"><input type="checkbox" name="ts4a1" />&nbsp;</div>
                      <div class="col-1 Timeslot5" data-ambt="1" data-timeslot="5"><input type="checkbox" name="ts5a1" />&nbsp;</div>
                      <div class="col-1 Timeslot6" data-ambt="1" data-timeslot="6"><input type="checkbox" name="ts6a1" />&nbsp;</div>
                      <div class="col-1 Timeslot7" data-ambt="1" data-timeslot="7"><input type="checkbox" name="ts7a1" />&nbsp;</div>
                      <div class="col-1 Timeslot8" data-ambt="1" data-timeslot="8"><input type="checkbox" name="ts8a1" />&nbsp;</div>
                      <div class="col-1 Timeslot9" data-ambt="1" data-timeslot="9"><input type="checkbox" name="ts9a1" />&nbsp;</div>
                      <div class="col-1 Timeslot10" data-ambt="1" data-timeslot="10"><input type="checkbox" name="ts10a1" />&nbsp;</div>
                      <div class="col-1 Timeslot11" data-ambt="1" data-timeslot="11"><input type="checkbox" name="ts11a1" />&nbsp;</div>
                    </div>
                </div>
            </div>
          <div id="selectedDateTimeslot"></div>
          </div><!-- /plannerContent-->

          <!--MODALS-->
          <div class="modal" id="modal_l1" tabindex="-1" role="dialog"><!--Locatie 1-->
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Gemeentehuis</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Gemeentehuis info.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="modal" id="modal_l2" tabindex="-1" role="dialog"><!--Locatie 2-->
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Eigen locatie</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Eigen locatie info.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="modal" id="modal_a1" tabindex="-1" role="dialog"><!--Ambtenaar 1-->
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Ambtenaar 1</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Ambtenaar 1 info.</p>
                </div>
              </div>
            </div>
          </div>
          <!--/MODALS-->
          
        </div>
      </div>
      
      <div id="functionaryHolder">
        <div class="row">
          <div class="col-sm-12 col-md-8">
            <h2>Ambtenaar voorkeur</h2>
            <p>Indien de geselecteerde Buitengewoon Ambtenaar van de Burgerlijke Stand (BABS) niet beschikbaar is, zullen wij een andere BABS toewijzen.<br>
            Selecteer hieronder je voorkeur:</p>
            <div class="row form-">
              <div class="col-6">
                <label for="functionaryFirst">Ambtenaar eerste keuze</label>
              </div>
              <div class="col-6">
                <select id="functionaryFirst" class="@error('functionaryFirst') is-invalid @enderror">
                  <option value="0">Geen keuze</option>
                  <option value="1">Babs een</option>
                  <option value="2">Babs twee</option>
                  <option value="3">Babs drie</option>
                </select>
                @error('functionaryFirst')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row form-">
              <div class="col-6">
                <label for="functionarySecond">Ambtenaar tweede keuze</label>
              </div>
              <div class="col-6">
                <select id="functionarySecond" class="@error('functionarySecond') is-invalid @enderror">
                  <option value="0">Geen keuze</option>
                  <option value="1">Babs een</option>
                  <option value="2">Babs twee</option>
                  <option value="3">Babs drie</option>
                </select>
                @error('functionarySecond')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="row form-">
              <div class="col-6">
                <label for="functionaryThird">Ambtenaar derde keuze</label>
              </div>
              <div class="col-6">
                <select id="functionaryThird" class="@error('functionaryThird') is-invalid @enderror">
                  <option value="0">Geen keuze</option>
                  <option value="1">Babs een</option>
                  <option value="2">Babs twee</option>
                  <option value="3">Babs drie</option>
                </select>
                @error('functionaryThird')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
          </div>
          <div class="col-sm-0 col-md-4"></div>
      </div>

      <div id="bottomButtonRow" class="row">
        <div class="col-6">
          <input type="button" class="btn btn-info" value="Ik wil mijn reservering bij de gemeente starten"/>
        </div>
        <div class="col-6">
          <input type="button" class="btn btn-info" value="Ik heb al een reservering gedaan bij de gemeente en wil starten met mijn melding"/>
        </div>
      </div>
    </form>
  </div>    
</div>

@endsection
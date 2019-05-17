@extends('layouts.app')

@section('title', 'Melding')

@section('header')
    @parent
    <script src='/js/melding.js'></script>
    <script src='/weddingplanner-frontend-laravel/public/js/melding.js'></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection

@section('content')
    
<div class="row melding">
  <div class="col-12">
    <div class="col-lg-6">
    <form method="POST" action="/melding">
        @csrf
        

        <h2>Eerste partner gegevens</h2>
        <input type="button" id="btnDigiD" class="button-digid-icon" name="digid_icon_placeholder" value="Login met DigiD" />
        <div class="col-lg-6">
            <div id="1stpartner" style="display:none;">
                <div class="row">
                    <div class="col-6">
                        <div>BSN</div>
                    </div>
                    <div class="col-6">
                        <div>99997865</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Naam</div>
                    </div>
                    <div class="col-6">
                        <div>Clinton Gavey</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Adres</div>
                    </div>
                    <div class="col-6">
                        <div>Hoflandstraat 12, 1234BB Emmeloord</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Burgelijke staat</div>
                    </div>
                    <div class="col-6">
                        <div>ongehuwd</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Nationaliteit</div>
                    </div>
                    <div class="col-6">
                        <div>Nederlandse</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Geboortedatum</div>
                    </div>
                    <div class="col-6">
                        <div>24-11-1977</div>
                    </div>
                </div>
                <h3>Contactgegevens</h3>
                <div class="row">
                    <div class="col-lg-8 col-sm-6">
                        <div>Telefoonnummer (verplicht)</div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div  class="form-group"><input type="text" name="" value="" class="form-control @error('Phone1') is-invalid @enderror"/></div>
                        @error('Phone1')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-sm-6">
                        <div>E-mailadres (verplicht)</div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div  class="form-group"><input type="text" name="" value="" class="form-control @error('Email1') is-invalid @enderror"/></div>
                        @error('Email1')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div id="1stpartnerInfo">
                Log in met DigiD om uw gegevens op te halen.
            </div>
        </div>

        <h2>Tweede partner gegevens</h2>
        <input type="button" id="btnDigiD2" class="button-digid-icon" name="digid_icon_placeholder" value="Login met DigiD" />
        <div class="col-lg-6">
            <div id="1stpartner2" style="display:none;">
                <div class="row">
                    <div class="col-6">
                        <div>BSN</div>
                    </div>
                    <div class="col-6">
                        <div>99997865</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Naam</div>
                    </div>
                    <div class="col-6">
                        <div>Renate van der Heijden</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Adres</div>
                    </div>
                    <div class="col-6">
                        <div>Hoflandstraat 12, 1234BB Emmeloord</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Burgelijke staat</div>
                    </div>
                    <div class="col-6">
                        <div>ongehuwd</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Nationaliteit</div>
                    </div>
                    <div class="col-6">
                        <div>Nederlandse</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div>Geboortedatum</div>
                    </div>
                    <div class="col-6">
                        <div>06-04-1982</div>
                    </div>
                </div>
                <h3>Contactgegevens</h3>
                <div class="row">
                    <div class="col-lg-8 col-sm-6">
                        <div>Telefoonnummer (verplicht)</div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div  class="form-group"><input type="text" name="" value="" class="form-control @error('Phone1') is-invalid @enderror"/></div>
                        @error('Phone1')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-sm-6">
                        <div>E-mailadres (verplicht)</div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div  class="form-group"><input type="text" name="" value="" class="form-control @error('Email1') is-invalid @enderror"/></div>
                        @error('Email1')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div id="1stpartnerInfo2">
                Log in met DigiD om uw gegevens op te halen.
            </div>
        </div>

        <h2>Extra informatie</h2>

        <div class="row">
            <div class="col-lg-8 col-sm-6">
                <div>Bent u bloedverwanten?</div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div  class="form-check">
                    <input type="radio" name="radBloedverw" id="radBloedverw1" value="Ja" class="form-check-input @error('bloedverwant') is-invalid @enderror"/>
                    <label class="form-check-label" for="radBloedverw1">Ja</label>
                </div>
                <div  class="form-check">
                    <input type="radio" name="radBloedverw" id="radBloedverw0" value="Nee" class="form-check-input @error('bloedverwant') is-invalid @enderror"/>
                    <label class="form-check-label" for="radBloedverw0">Nee</label>
                </div>
                @error('bloedverwant')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-6">
                <div>Staat een van u onder curatele?</div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div  class="form-check">
                    <input type="radio" name="radCuratele" id="radCuratele1" value="Ja" class="form-check-input @error('curatele') is-invalid @enderror"/>
                    <label class="form-check-label" for="radCuratele1">Ja</label>
                </div>
                <div  class="form-check">
                    <input type="radio" name="radCuratele" id="radCuratele0" value="Nee" class="form-check-input @error('curatele') is-invalid @enderror"/>
                    <label class="form-check-label" for="radCuratele0">Nee</label>
                </div>
                @error('curatele')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-sm-6">
                <div>Is een van u al eerder getrouwd of gepartnerd geweest, in Nederland of in het buitenland?</div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div  class="form-check">
                    <input type="radio" name="radEerderGetrouwd" id="radEerderGetrouwd1" value="Ja" class="form-check-input @error('EerderGetrouwd') is-invalid @enderror"/>
                    <label class="form-check-label" for="radEerderGetrouwd1">Ja</label>
                </div>
                <div  class="form-check">
                    <input type="radio" name="radEerderGetrouwd" id="radEerderGetrouwd0" value="Nee" class="form-check-input @error('EerderGetrouwd') is-invalid @enderror"/>
                    <label class="form-check-label" for="radEerderGetrouwd0">Nee</label>
                </div>
                @error('EerderGetrouwd')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div id="tempError"></div>

        <div id="bottomButtonRow" class="row">
        <div class="col-6">
          <input type="button" class="btn btn-info" value="Ga door naar het overzicht"/>
        </div>
        <div class="col-6">
          
        </div>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection
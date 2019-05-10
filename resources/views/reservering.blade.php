@extends('layouts.app')

@section('title', 'Reservering')

@section('price', '€ 0,00')

@section('header')
    @parent
    <script src='/js/reservering.js'></script>
    <script src='/weddingplanner-frontend-laravel/public/js/reservering.js'></script>
@endsection

@section('content')
<div class="row">
  <div class="col-12">
    <form method="POST" action="/reservering">
        @csrf
        <h2>Eerste partner gegevens</h2>
        <input type="button" value="DigiD" />
        <div class="col-lg-6">
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
            <h2>Tweede partner gegevens</h2>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>Voornamen</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div  class="form-group"><input type="text" name="" value="" class="form-control"/></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>Tussenvoegsel</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div  class="form-group"><input type="text" name="" value="" class="form-control"/></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>Achternaam</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div  class="form-group"><input type="text" name="" value="" class="form-control"/></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>Geboortedatum</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div  class="form-group"><input type="text" name="" value="" class="form-control"/></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>Woont u op hetzelfde adres? (verplicht)</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div  class="form-group form-check"><input type="checkbox" name="" value="" class="form-control @error('SameAddress') is-invalid @enderror"/></div>
                    @error('SameAddress')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <h4>Adresgegevens</h4>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>Postcode (verplicht)</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div  class="form-group"><input type="text" name="" value="" class="form-control @error('Postcode') is-invalid @enderror"/></div>
                    @error('Postcode')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>Huisnummer (verplicht) + toevoeging</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-5"><input type="text" name="" value="" class="form-control @error('houseNr') is-invalid @enderror"/></div>
                            <div class="col-1">-</div>
                            <div class="col-5"><input type="text" name="" value="" class="form-control"/></div>
                        </div>
                    </div>
                    @error('houseNr')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <h4>Contactgegevens</h4>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>Telefoonnummer (verplicht)</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div  class="form-group"><input type="text" name="" value="" class="form-control @error('Phone2') is-invalid @enderror"/></div>
                    @error('Phone2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-sm-6">
                    <div>E-mailadres (verplicht)</div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div  class="form-group"><input type="text" name="" value="" class="form-control @error('Email2') is-invalid @enderror"/></div>
                    @error('Email2')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div id="bottomButtonRow" class="row">
        <div class="col-6">
          <input type="button" class="btn btn-info" value="Ik wil nu reserveren en later een melding doen"/>
        </div>
        <div class="col-6">
          <input type="button" class="btn btn-info" value="Ik wil nu reserveren en direct een melding doen"/>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
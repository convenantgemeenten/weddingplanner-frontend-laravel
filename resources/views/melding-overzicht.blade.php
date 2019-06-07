@extends('layouts.app')

@section('title', 'Meldingg overzicht')

@section('header')
    @parent

@endsection

@section('content')
<div class="row melding">
    <div class="col-12">
        <div class="col-lg-6">
            <h2>Eerste partner gegevens</h2>
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
                <div class="col-6">
                    <div>Telefoonnummer</div>
                </div>
                <div class="col-6">
                    <div>06-87654321</div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div>E-mailadres</div>
                </div>
                <div class="col-6">
                    <div>CGy@email.com</div>
                </div>
            </div>
        </div>      

        <div class="col-lg-6">
            <h2>Tweede partner gegevens</h2>
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
                <div class="col-6">
                    <div>Telefoonnummer</div>
                </div>
                <div class="col-6">
                    <div>06-12345678</div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div>E-mailadres</div>
                </div>
                <div class="col-6">
                    <div>R.vdHeijden@email.com</div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <h2>Betaling</h2>
            <div class="row">
                <div class="col-6">
                    <div>Totaal</div>
                </div>
                <div class="col-6">
                    <div>&euro; 0.00</div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div id="bottomButtonRow" class="row">
                <div class="col-6">
                    <input type="submit" class="btn btn-info" value="Betalen en melding plaatsen"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
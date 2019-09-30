@extends('layouts.app')

@section('content')

    <div class="img-banner">
        <div class="uk-grid">
            <div class="uk-width-1-2@m">

                <h1 class="uk-margin-large-top uk-padding-large">About Us </h1>
                <p class="uk-text-center">CMS Ready</p>

            </div>
            <div class="uk-width-1-2@m">

                <img src="{{asset('/images/about.svg')}}" alt="" class="uk-padding-large">
            </div>


        </div>

    </div>
@endsection

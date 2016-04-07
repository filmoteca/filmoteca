@extends('layouts.default')

@section('sidebar')

    @include('exhibitions.frontend.exhibitions.partials.programming')

    @include('exhibitions.frontend.exhibitions.partials.billboard-subscription-form')

    <br><br>

    <div class="fb-page"
         data-href="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts"
         data-tabs="timeline"
         data-small-header="true"
         data-adapt-container-width="true"
         data-hide-cover="false"
         data-show-facepile="true">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts">
                <a href="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts">
                    @lang('exhibitions.frontend.exhibition.show.unam_cinemas_community')
                </a>
            </blockquote>
        </div>
    </div>
@stop

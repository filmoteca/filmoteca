<!-- @section('scripts')
    {{ HTML::script('/assets/js/facebook.js')}}
@stop -->


@section('sidebar')
    
    <span class="glyphicon glyphicon-search pull-left"></span>

        <div class="search-autocomplete pull-right">
            <angucomplete-alt class="ng-isolate-scope" input-class="form-control form-control-small" text-no-results="Ninguna exhibición encontrada" text-searching="Buscando..." minlength="1" image-field="thumbnail" search-fields="title,director" description-field="director" title-field="title" local-data="advices" selected-object="adviceSelected" pause="0" place-holder="Buscar por título o director">
                <div class="angucomplete-holder">
                    <input id="_value" class="form-control form-control-small" type="text" ng-change="inputChangeHandler(searchStr)" autocomplete="off" autocorrect="off" autocapitalize="off" ng-blur="hideResults()" ng-focus="resetHideResults()" placeholder="" ng-model="searchStr">
                </div>
            </angucomplete-alt>
        </div>


    <br><br><br>


    <div class="flm-section programming">
        <div class="content">

            <div class="well-sm">

                <div class="flm-section flm-subsection carrousel">
                    <div class="calendar">
                        <div class="header">
                            <h3 align="center">@lang('exhibitions.frontend.calendar.title')</h3>
                            <h4 align="center">@lang('exhibitions.frontend.calendar.subtitle')</h4>
                        </div>
                        <table align="center">
                            <tr>
                                <th>
                                    @lang('dates.week-days-abbreviations.Su')
                                </th>
                                <th>
                                    @lang('dates.week-days-abbreviations.Mo')
                                </th>
                                <th>
                                    @lang('dates.week-days-abbreviations.Tu')
                                </th>
                                <th>
                                    @lang('dates.week-days-abbreviations.We')
                                </th>
                                <th>
                                    @lang('dates.week-days-abbreviations.Th')
                                </th>
                                <th>
                                    @lang('dates.week-days-abbreviations.Fr')
                                </th>
                                <th>
                                    @lang('dates.week-days-abbreviations.Sa')
                                </th>
                            </tr>
                            @foreach ($calendar->getWeeks() as $week)
                                <tr>
                                    @foreach($week->getDays() as $day)
                                        <td>
                                            @if ($day->getDate()->month === $date->month)
                                                @if ($day->hasExhibitions())
                                                    <a class="active"
                                                       title="@lang('exhibitions.frontend.calendar.exhibitions-in-the-day', ['number' => $day->getExhibitionsNumber()]) "
                                                       href="{{ $day->getDateInFormatToUrl() }}">{{ $day->getNumber() }}</a>
                                                @else
                                                    <a class="active">{{ $day->getNumber() }}</a>
                                                @endif
                                            @else
                                                <span class="disabled">{{ $day->getNumber() }}</span>
                                            @endif
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

             <!-- Esta sección se agergara en un advertisement
                 
            <div class="film-subsection queries">
                <div class="content">
                
                        <div class="link">
                            <a href="http://www.filmoteca.unam.mx/exhibition">
                                <span class="icon icon-cinemas"></span>Salas de cine
                            </a>
                        </div>
                        <div class="link">
                            <a href="http://www.filmoteca.unam.mx/exhibition">
                                <span class="icon icon-ciclos"></span>Ciclos y funciones especiales
                            </a>
                        </div>

                    <style>
                        .responsiveImage {max-width: 100%; width: auto; height: auto;}
                    </style>
                    <div class="image pull-left img-responsive" width="600" height="800">
                        <a href="http://www.filmoteca.unam.mx/pages/programacion/invitaciones">
                            <img src="/imgs/home/invitaciones/descarga-invitaciones.gif" class="responsiveImage">
                        </a>
                    </div>

                    <div class="flm-section flm-subsection digital-billboard">
                        <div class="image pull-left">
                            <img src="/imgs/home/cartelera/cartelera-home-marzo2016.jpg">
                        </div>
                            <div class="caption pull-right">
                                <a target="_blank" alt="Consulta la cartelera digital de marzo 2016" title="Consulta la cartelera digital" href="https://issuu.com/filmotecaunam/docs/cartelera.digital.marzo.2016/1">
                                Consulta
                                <span class="icon icon-download pull-right"></span>
                                </a>
                            </div>
                            <div class="caption pull-right">
                                <a target="_blank" alt="Descarga la cartelera digital" title="Descarga la cartelera digital" href="/pdf/cartelera/Cartelera.Digital.Marzo.2016.pdf">
                                Descarga
                                <span class="icon icon-download pull-right"></span>
                                </a>
                            </div>
                    </div>
                </div>
            </div>--> 
            
        </div>
    </div>

    <div class="subscribe-box hidden-xs">
           <br><br><br><br><br><br><br>      
        <p>Recibe nuestra cartelera digital</p>

         <div class="input-group input-group-sm">
            <input type="email" name="email" placeholder="Ingresa tu correo electrónico" class="form-control">
            <span class="input-group-addon">@</span>
        </div>

        <button type="button" class="btn btn-success">Enviar</button>
    </div>

    <br><br>
            
    <div class="fb-page" data-href="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
        <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts">
                <a href="https://www.facebook.com/Comunidad.Cines.UNAM/?fref=ts">Comunidad  Cines UNAM</a>
            </blockquote>
        </div>
    </div>


@stop
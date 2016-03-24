
@section('sidebar')
    
    <span class="glyphicon glyphicon-search pull-left"></span>

        <div class="search-autocomplete pull-right">
            <angucomplete-alt class="ng-isolate-scope" input-class="form-control form-control-small" text-no-results="Ninguna exhibición encontrada" text-searching="Buscando..." minlength="1" image-field="thumbnail" search-fields="title,director" description-field="director" title-field="title" local-data="advices" selected-object="adviceSelected" pause="0" place-holder="Buscar película">
                <div class="angucomplete-holder">
                    <input id="_value" class="form-control form-control-small" type="text" ng-change="inputChangeHandler(searchStr)" autocomplete="off" autocorrect="off" autocapitalize="off" ng-blur="hideResults()" ng-focus="resetHideResults()" placeholder="Buscar película" ng-model="searchStr">
                </div>
            </angucomplete-alt>
        </div>


    <div class="flm-section programming">
        <div class="content">

            <div class="well-sm">

                <div class="flm-section flm-subsection carrousel">
                    <div class="calendar">
                        <div class="header">
                            <h2 class="text-center">@lang('exhibitions.frontend.calendar.title')</h2>
                            <h5 class="text-center">@lang('exhibitions.frontend.calendar.subtitle')</h5>
                        </div>
                        <table class="text-center">
                        <caption>Aqui va el mes</caption>
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
            
        </div>
    </div>

    <div class="subscribe-box hidden-xs">
   
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
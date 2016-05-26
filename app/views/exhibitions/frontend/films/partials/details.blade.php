<div class="row">
    <!-- Imagen de película y me gusta -->
    <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <img src="{{ $film->getCover()->getMediumImageUrl() }}">
        @include(
            'elements.facebook.like-button', [
                'url' => URL::route('exhibitions.frontend.film.show', ['slug' => $film->getSlug()])
            ]
        )
    </div>
    <!-- Panel pestañas -->
    <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
        <a class="hidden-title" href="{{ URL::route('exhibitions.frontend.film.show', ['slug' => $film->getSlug()]) }}">
            <h2 class="text-center">
                {{ $film->getTitle() }}
            </h2>
        </a>

        <!-- Texto que mostrará duración, fecha y año -->
        <h6 class="text-center">
            <p class="margin">
                <strong>
                    {{ HTML::summaryTechnicalCard($film) }}
                </strong>
            </p>
        </h6>

        <!-- Pestañas de horarios, sinopsis, fiche técnica, trailer y notas -->
        <div class="content size-tab-show">
            <!-- Nav tabs -->
            <div role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active border" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-schedules-' . $film->getId() }}">
                            @lang('exhibitions.frontend.exhibition.show.schedules')
                        </a>
                    </li>
                    <li class="border" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-synopsis-' . $film->getId() }}">
                            @lang('exhibitions.frontend.film.show.fields.synopsis')
                        </a>
                    </li>
                    <li class="border" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-technical-card-' . $film->getId() }}">
                            @lang('exhibitions.frontend.film.show.fields.technical_card')
                        </a>
                    </li>
                    <li class="border" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-trailer-' . $film->getId() }}">
                            @lang('exhibitions.frontend.film.show.fields.trailer')
                        </a>
                    </li>
                    <li class="border" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-notes-' . $film->getId() }}">
                            @lang('exhibitions.frontend.film.show.fields.notes')
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    @if (isset($exhibition))
                    <!-- Pestaña Horarios -->
                    <div id="{{ 'tab-schedules-' . $film->getId() }}" class="tab-pane active" role="tabpanel">
                        <li class="list-group-item margin scroll-over">

                            <div class="panel panel-default no-line">
                                <table class="table table-responsive">

                                    <!-- Se presenta en las salas, fechas y horarios -->
                                    @foreach ($exhibition->getSchedules()->only($date)->groupByAuditorium() as $schedules)

                                        <tr>
                                            <td class="col-md-4 bold">
                                                <a href="{{ URL::route('exhibition.auditorium.index') }}">
                                                   {{ $schedules->first()->getAuditorium()->getName() }}
                                                </a>
                                            </td>
                                            <td class="col-md-3">
                                                @lang('exhibitions.frontend.exhibition.show.date',
                                                    [
                                                        'numeric_day' => $schedules->first()->getEntry()->day,
                                                        'textual_month' => trans('dates.months.' . $schedules->first()->getEntry()->format('F')),
                                                        'year' => $schedules->first()->getEntry()->year
                                                    ])
                                            </td>
                                            <td class="col-md-5">
                                                {{ HTML::schedulesTimeAsList($schedules) }} hrs.
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>

                                <!-- Botón que desplegará más horarios -->
                                <div class="row">
                                    <button type="button"
                                            class="btn btn-default loading-xsm more-schedules"
                                            data-href="{{ URL::route('exhibition.schedule.search', ['exhibitionId' => $exhibition->getId()]) }}"
                                            data-since="{{ isset($date) ? $date->copy()->addDay()->format(MYSQL_DATE_FORMAT) : ''  }}"
                                            title="@lang('exhibitions.frontend.exhibition.show.see_more_schedules')">
                                            @lang('exhibitions.frontend.exhibition.show.see_more_schedules')
                                    </button>
                                    <div align="left" class="collapse">
                                        {{-- This content is loaded with AJAX and it is located in --}}
                                        {{-- views/frontend/exhibitions/partials/more-schedules    --}}
                                    </div>
                                </div>

                            </div>
                        </li>
                    </div>
                    @endif

                    <!-- Pestaña Sinopsis -->
                    <div id="{{ 'tab-synopsis-' . $film->getId() }}" class="tab-pane" role="tabpanel">
                        <li class="list-group-item margin scroll-over">
                            <p>{{ $film->getSynopsis() }}</p>
                        </li>
                    </div>

                    <!-- Pestaña Ficha técnica -->
                    <div id="{{ 'tab-technical-card-' . $film->getId() }}" class="tab-pane" role="tabpanel" >
                        <li class="list-group-item margin scroll-over">
                            <table class="table table-bordered">
                                {{ HTML::technicalCard($film) }}
                            </table>
                        </li>
                    </div>

                    <!-- Pestaña Trailer /4by3 -->
                    <div id="{{ 'tab-trailer-' . $film->getId() }}" class="tab-pane" role="tabpanel" >
                        <li class="list-group-item embed-responsive embed-responsive-16by9">
                            <p>{{ $film->getTrailer() }}</p>
                        </li>
                    </div>

                    <!-- Pestaña Notas -->
                    <div id="{{ 'tab-notes-' . $film->getId() }}" class="tab-pane" role="tabpanel" >
                        <li class="list-group-item margin scroll-over">
                            <p>
                                <strong>
                                    @lang('exhibitions.frontend.exhibition.show.film_notes')
                                </strong>
                                :
                                {{ $film->getNotes() }}
                            </p>
                            @if (isset($exhibition) && !empty($exhibition->getNotes()))
                                <p>
                                    <strong>
                                        @lang('exhibitions.frontend.exhibition.show.exhibition_notes')
                                    </strong>
                                    : {{ $exhibition->getNotes() }}
                                </p>
                            @endif
                        </li>
                    </div>

                </div><!-- End Tab panes -->

            </div><!--End Nav tabs -->
        </div>
    </div>
</div>

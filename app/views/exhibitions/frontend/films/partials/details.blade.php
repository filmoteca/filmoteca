<div class="row">
    <div class="col-md-4">

        @include(
            'elements.facebook.like-button', [
                'url' => Url::route('exhibitions.frontend.film.show', ['slug', $film->getSlug()])
            ]
        )

        <img src="{{ $film->getCover()->getMediumImageUrl() }}">
    </div>
    <div class="col-md-8">
        <a href="{{ URL::route('exhibitions.frontend.film.show', ['slug' => $film->getSlug()]) }}">
            <h2 class="text-center">
                {{ $film->getTitle() }}
            </h2>
        </a>

        <!-- Texto que mostrará duración, fecha y año -->
        <h6 class="text-center">
            <p class= "margin">
                <strong>
                    {{ HTML::summaryTechnicalCard($film) }}
                </strong>
            </p>
        </h6>

        <!-- Pestañas de sinopsis, fiche técnica, trailer y notas-->
        <div class="content">
            <!-- Nav tabs -->
            <div role="tabpanel">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="active" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-synopsis-' . $film->getId() }}">
                            @lang('exhibitions.frontend.film.show.fields.synopsis')
                        </a>
                    </li>
                    <li class="" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-technical-card-' . $film->getId() }}">
                            @lang('exhibitions.frontend.film.show.fields.technical_card')
                        </a>
                    </li>
                    <li class="" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-trailer-' . $film->getId() }}">
                            @lang('exhibitions.frontend.film.show.fields.trailer')
                        </a>
                    </li>
                    <li class="" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-notes-' . $film->getId() }}">
                            @lang('exhibitions.frontend.film.show.fields.notes')
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="{{ 'tab-synopsis-' . $film->getId() }}" class="tab-pane active" role="tabpanel">
                        <li class="list-group-item margin scroll-over">
                            <p>{{ $film->getSynopsis() }}</p>
                        </li>
                    </div>

                    <!-- Ficha técnica que se muestra en la pestaña Ficha técnica(tab-2) -->
                    <div id="{{ 'tab-technical-card-' . $film->getId() }}" class="tab-pane" role="tabpanel" >
                        <li class="list-group-item margin scroll-over embed-responsive embed-responsive-16by9">
                            <table class="table table-bordered">
                                {{ HTML::technicalCard($film) }}
                            </table>
                        </li>
                    </div>

                    <!-- Video que se muestra en la pestaña Trailer(tab-3) /4by3-->
                    <div id="{{ 'tab-trailer-' . $film->getId() }}" class="tab-pane" role="tabpanel" >
                        <li class="list-group-item embed-responsive embed-responsive-16by9">
                            <p>{{ $film->getTrailer() }}</p>
                        </li>
                    </div>

                    <!-- Notas que se muestran en la pestaña Notas(tab-4) -->
                    <div id="{{ 'tab-notes-' . $film->getId() }}" class="tab-pane" role="tabpanel" >
                        <li class="list-group-item margin scroll-over embed-responsive embed-responsive-16by9">
                            <p><strong>@lang('exhibitions.frontend.exhibition.show.film_notes')</strong>:
                                {{ $film->getNotes() }}</p>
                            @if (isset($exhibitionNotes))
                                <p>
                                    <strong>
                                        @lang('exhibitions.frontend.exhibition.show.exhibition_notes')
                                    </strong>
                                    : {{ $exhibitionNotes }}
                                </p>
                            @endif
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Content --}}
<div class="modal-header consulta-libro-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
</div>
<div class="modal-body">
  <div class="row consulta-libro">
      <div class="col-xs-5 col-sm-5 col-md-5 col-lg-3">
          <img src="{{ $book->image->url('thumbnail') }}" class="img-responsive thumbnail">
      </div>
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-8">
        <a class="libro-title">
            <h2 class="text-center">
                {{ $book->title }}
            </h2>
        </a>
        <!-- Pestañas de sinopsis e indice -->
        <div class="content">
            <!-- Nav tabs -->
            <div role="tabpanel">
                <ul class="nav nav-tabs consulta-libro" role="tablist">

                   <!-- Pestaña Sinopsis -->
                    <li class="active border" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-synopsis-' . $book->id }}">
                            <div class="row tab-icon">
                                <div class="col-md-5">
                                    <div class="link">
                                        <img src="/imgs/programacion/iconos/synopsis.png"
                                         title="@lang('exhibitions.frontend.film.show.fields.synopsis')"
                                         alt="@lang('exhibitions.frontend.film.show.fields.synopsis')">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <p>
                                      @lang('exhibitions.frontend.film.show.fields.synopsis')
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- Pestaña Indice -->
                    <li class="border" role="presentation">
                        <a data-toggle="tab" role="tab" href="{{ '#tab-indice-' . $book->id }}">
                           <div class="row tab-icon">
                                <div class="col-md-5">
                                  <div class="link">
                                        <img src="/imgs/programacion/iconos/technical-card.png"
                                         title="@lang('exhibitions.frontend.book.index.indice')"
                                         alt="@lang('exhibitions.frontend.book.index.indice')">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <p>
                                      @lang('exhibitions.frontend.book.index.indice')
                                    </p>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content tab-consulta-libro">
                    <!-- Contenedor de la pestaña Sinopsis -->
                    <div id="{{ 'tab-synopsis-' . $book->id }}" class="tab-pane active" role="tabpanel">
                        <li class="list-group-item synopsis-margin margin-consulta-libro">
                        		<p><?php
                                $titulo = $book->title;
                            		$año = $book->year;
                            		$pages = $book->pages;
                            		$pagesaño = "$pages" . "$año";

                            		{if (empty($pagesaño)){echo " <p><strong>". Lang::get('exhibitions.frontend.book.index.title') . ': '. "</strong>". $titulo."</p>";}
                                  else{echo " <p><strong>". Lang::get('exhibitions.frontend.book.index.title') . ': '. "</strong>". $titulo."</p>";}}
                                {if (empty($año)){echo $año;}
                                  else{echo " <p><strong>". Lang::get('exhibitions.frontend.book.index.edition') . ': '. "</strong>". $año."</p>";}}
                            		{if (empty($pages)){echo $pages;}
                            			else{echo " <p><strong>". Lang::get('exhibitions.frontend.book.index.pages') . ': '. "</strong>". $pages."</p>";}}
                                ?>
                            </p>
                          <p class="normal">{{ $book->sinopsis }}</p>
                        </li>
                    </div>

                    <!-- Contenedor de la pestaña Indice -->
                    <div id="{{ 'tab-indice-' . $book->id }}" class="tab-pane" role="tabpanel" >
                        <li class="list-group-item margin-consulta-libro">
                            <p class="normal">
                                {{ $book->indice }}
                            </p>
                        </li>
                    </div>
                </div><!-- End Tab panes -->

            </div><!--End Nav tabs -->
        </div>
      </div>
  </div>
</div>
<div class="modal-footer"></div>

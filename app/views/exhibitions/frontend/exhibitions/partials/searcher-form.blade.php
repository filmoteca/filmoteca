{{ Form::open(['route' => 'exhibitions.frontend.exhibitions.index', 'method' => 'GET']) }}
<div class="input-group">
    <label class="hidden" for="name">
        @lang('exhibitions.frontend.exhibition.index.search')
    </label>
    <input type="text"
           class="form-control"
           id="films-searcher"
           name="title"
           placeholder="@lang('exhibitions.frontend.exhibition.index.search')">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-search"></span>
    </div>
</div>
{{ Form::close() }}

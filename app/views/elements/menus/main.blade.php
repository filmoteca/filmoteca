{{-- Required bootstrap.js--}}
<div class="main-menu-wrapper navbar-inverse">
    <nav class="navbar navbar-inverse main-menu" role="navigation">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand-logo" href="/pages/aniversario55/index" title="55 Aniversario Filmoteca UNAM"><img
                        src="/assets/imgs/filmo55aniversario.png" alt="logo 55aniversario"></a>
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            @if ($mainMenu !== null)
                {{ HTML::menu($mainMenu->getEntries(), 'nav navbar-nav', '','', 'dropdown-menu' ) }}
            @endif
        </div>
    </nav>
</div>

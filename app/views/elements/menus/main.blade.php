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
      </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">

            {{ HTML::menu($mainMenu->getEntries(), 'nav navbar-nav', '','', 'dropdown-menu' ) }}

        </div>
    </nav>
</div>

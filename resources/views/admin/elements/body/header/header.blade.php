<header class="header">
    @include('admin.elements.body.header.logo.logo')

    <!-- start: search & user box -->
    <div class="header-right">

        <span class="separator"></span>

        @include('admin.elements.body.header.form_search.search')

        <span class="separator"></span>

        <span class="separetor-end"></span>

        @include('admin.elements.body.header.account.account')
    </div>
    <!-- end: search & user box -->
</header>
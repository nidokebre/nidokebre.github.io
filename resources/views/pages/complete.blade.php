@extends("index")
@section("body")
    @include("blocks.topmenu")
    @include("blocks.projectsbanner")


    

    <main id="main" class="site-main">

        @include("blocks.projectsitems")

        

    </main>

    @include("blocks.footer")



@endsection

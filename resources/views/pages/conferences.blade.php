@extends("index")
@section("body")
    @include("blocks.topmenu")

    @include("blocks.publicationsbanner")
    

    <main id="main" class="site-main">

    @include("blocks.conferences")

        

    </main>


    @include("blocks.footer")


@endsection
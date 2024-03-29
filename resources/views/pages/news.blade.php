@extends("index")
@section("body")
    @include("blocks.topmenu")
    @include("blocks.newsbanner")


    

    <main id="main" class="site-main">

        @include("blocks.news")

        

    </main>

    @include("blocks.footer")



@endsection

@extends("index")
@section("body")
    @include("blocks.topmenu")

    @include("blocks.banner")

    <main id="main" class="site-main">

        @include("blocks.section")
        @include("blocks.services")
        @include("blocks.section1")
        @include("blocks.designshowcase")
          

        
        
        
        

    </main>

    @include("blocks.footer")



@endsection

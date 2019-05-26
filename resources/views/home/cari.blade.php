@extends('home.layout')
@section('title')
Search For {{$query}} - ZIAGA
@endsection
@section('content')
<!-- Start ARTIKEL Area -->
<section id="berita" style="margin-top:80px">
    <div class="container berita">
        <div class="row">
          @if(isset($details))
          <p>the search result for your query <b>{{$query}}</b> are : </p>
            <div class="card-list">
                @foreach($details as $content)

                <!-- card -->
                <a href="{{url('/berita')}}">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('/images/'.$content->thumbnail)}}" alt="Card image cap">
                        <div class="card-overlay"></div>
                        <div class="card-body">
                            <div class="kategori"><span>{{$content -> category -> kategori }}</span></div>
                            <h5 class="card-title">{{$content -> title }}</h5>
                            <p class="card-text">{!! str_limit($content -> isi_artikel, 150, '. . .') !!}</p>
                            <div class="more"><a href="#" class="btn">Selengkapnya</a></div>
                        </div>
                    </div>
                </a>
                <!--  -->

                <!--  -->
                @endforeach
            </div>
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
        </div>
    </div>
</section>
<!-- END ARTIKEL AREA -->
@endsection
@section('custom-js')
<script type="text/javascript">
    $(document).ready(function() {
        $(".fixed-woy").css("background", "#ffffff");
    });
</script>
@endsection

<style>
    @if(count($sliders) > 0)
               @foreach($sliders as $key => $slider)
        
        .owl-carousel .owl-wrapper, .owl-carousel .owl-item:nth-child({{ $key }}) .item{
        background: url({{ asset($slider->image) }});
        background-size: cover;
    }
        @endforeach
    @endif
</style>

<section id="header-slider" class="owl-carousel">
   @if(count($sliders) > 0)
       @foreach($sliders as $key => $slider)
    <div class="item">
        <div class="container">
            <div class="header-content">
                <h1 class="header-title">{{ $slider->title }}</h1>
                <p class="header-sub-title">{{ $slider->sub_title }}</p>
            </div> <!-- /.header-content -->
        </div>
    </div>
    @endforeach
    @endif

</section>
@include('frontend.layout.headertest')
<link rel="stylesheet" href="{{asset('css/stylerst.css')}}?v=1.3" type="text/css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<style>
 .ap-img-content .video_play {
    /* background: #f59622; */
    padding-top: 15px;
    width: 50px;
    height: 50px;
    display: block;
    margin: 0 auto;
    border-radius: 50%;
    position: absolute;
    left: 0px;
    right: 0px;
    top: 44px;
}

.w-100 {
    width: 100%!important;
    max-width: inherit;
}
</style>
<script>
    $(document).ready(function() {
        $('.video_play').click(function() {
            var videoUrl = $(this).closest('.ap-slide-content').find('iframe').attr('src');
            $('#exampleModal iframe').attr('src', videoUrl);
        });

        $('#exampleModal').on('hidden.bs.modal', function() {
            $('#exampleModal iframe').removeAttr('src');
        });
    });
</script>

<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<h2> Videos </h2> 
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>

        <section class="latest_news">
                <div class="container-fluid mt-4">
                <div class="row">
               
                    <div class="col-md-12 ">
                        <div class="row mb-4">
                           
                            @foreach ($youtubevideos as $video)
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal{{ $video->id }}">
                                        <div class="ap-slide-content relative">
                                            <div class="ap-img-box relative">
                                                <img src="{{ asset('/youtube/gallery/' . $video->image) }}" class="img-fluid">
                                            </div>
                                            <div class="ap-img-content">
                                                <span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
                                                <div class="ap-date-wrp row">
                                                    {{-- <span class="col-sm-6 col-xs-6 text-left">5 June 2023</span>
                                                    <span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i></span> --}}
                                                </div>
                                                <h5 class="ap-slide-title">{{ $video->description }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            @endforeach


                         
                        

                        </div>

                    
                    </div>
                </div>
            </div>
        </section>

 
@foreach ($youtubevideos as $video)
<div class="modal fade" id="exampleModal{{ $video->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background:#f37224;">
                    <h5 class="modal-title text-white" id="exampleModalLabel">{{ $video->description }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="background: #000000;">
                    <div class="video-section">
                        <div class="video-player w-100">
                            <iframe width="100%" height="500" src="https://www.youtube.com/embed/{{ $video->video_id }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
        @include('frontend.layout.partners_logo')
@include('frontend.layout.footertest')
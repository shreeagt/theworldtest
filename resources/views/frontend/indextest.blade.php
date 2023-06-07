@include('frontend.layout.headertest')
<link rel="stylesheet" href="{{asset('css/stylerst.css')}}?v=1.3" type="text/css">
<style>
   @media (max-width:675px){
    .wrapper{
        max-width: 300px;
}
}

/* .owl-prev {
    position: absolute;
    top: 50%;
    left: 1%;
} */

/* .owl-next {
    position: absolute;
    top: 50%;
    right: 1%;
} */

.owl-buttons .owl-prev,
.owl-buttons .owl-next {
  width: 60px;
  height: 10px;
  /* background-color: #000; */
  /* border-radius: 50%; */
  border-radius: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #817464;
}

.owl-buttons .owl-prev:before,
.owl-buttons .owl-next:before {
   content: '';
  width: 10px;
  font-size: 15px;
  height: 10px;
  /* background-color: #fff; */
  border-radius: 50%;
  /* Add your arrow icon styles (e.g., background-image, background-position) */
}

.owl-buttons .owl-prev:before {
  /* Add styles for the left arrow icon */
  content: '<';
}

.owl-buttons .owl-next:before {
  /* Add styles for the right arrow icon */
  content: '>';
}


.wrapper header{
  font-size: 22px;
  font-weight: 600;
}
.wrapper .poll-area{
  margin: 20px 0 15px 0;
}
.poll-area label{
  display: block;
  background: #817464;
  margin-bottom: 10px;
  padding: 8px 15px;
  border: 2px solid #e6e6e6;
  transition: all 0.2s ease;
}

label.opt-1.selected {
    border: 2px solid #FFCD00;
}

label.opt-2.selected {
    border: 2px solid #01638c;
}

label.opt-3.selected {
    border: 2px solid #AA4A44;
}

label.opt-4.selected {
    border: 2px solid #01638c;
}

div#pstyle1::after {
    background: #FFCD00 !important;
}

div#pstyle2::after {
    background: #01638c !important;
}

div#pstyle3::after {
    background:  #AA4A44 !important;
}

div#pstyle4::after {
    background: #01638c !important;
}

label.opt-1.selected .row .circle{
    border-color: #FFCD00 !important;
  }

  label.opt-2.selected .row .circle{
    border-color: #01638c !important;
  }

  label.opt-3.selected .row .circle{
    border-color: #AA4A44 !important;
  }

  label.opt-4.selected .row .circle{
    border-color: #01638c !important;
  }


label.opt-1 .row .circle::after{
    background: #FFCD00 !important;
  }

  label.opt-2 .row .circle::after{
    background: #01638c !important;
}

  label.opt-3 .row .circle::after{
    background: #AA4A44 !important;
  }

  label.opt-4 .row .circle::after{
    background: #01638c !important;
  }

  label .row {
    margin: 10px;
    display: flex;
    pointer-events: none;
    justify-content: space-between;
}
label .row .column{
  display: flex;
  align-items: center;
}
label .row .circle{
  height: 19px;
  width: 19px;
  display: block;
  border: 2px solid #ccc;
  border-radius: 50%;
  margin-right: 10px;
  position: relative;
}
label .row .circle::after {
    content: "";
    height: 50%;
    width: 50%;
    border-radius: inherit;
    position: absolute;
    left: 25%;
    top: 25%;
    display: none;
}
.poll-area label:hover .row .circle::after{
  display: block;
  background: #e6e6e6;
}
label.selected .row .circle::after{
  display: block;
}
label .row span{
  font-size: 16px;
  font-weight: 500;
}
label .row .percent{
  display: none;
}
label .progress{
  height: 7px;
  width: 100%;
  position: relative;
  background: #f0f0f0;
  margin: 8px 0 3px 0;
  border-radius: 30px;
  display: none;
  pointer-events: none;
}
label .progress:after{
  position: absolute;
  content: "";
  height: 100%;
  background: #ccc;
  width: calc(1% * var(--w));
  border-radius: inherit;
  transition: all 0.2s ease;
}
label.selectall .progress,
label.selectall .row .percent{
  display: block;
}
input[type="radio"],
input[type="checkbox"]{
  display: none;
}
</style>
<section id="">
   <main class="banner">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div >
               <div class="card banner_card" class="col-lg-12 col-md-12">
                  <div id="demo" class="carousel slide" data-ride="carousel">
                     
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <img src="/img/homeslider/slide_1.jpg" class="img-fluid mx-auto w-100 d-none d-lg-block" alt=""/>
                           <img src="/img/homeslider/slide_1_mob.jpg" class="img-fluid mx-auto  w-100 d-block d-lg-none  " alt="banner"/>
                         
                        </div>
                        <div class="carousel-item">
                           <img src="/img/homeslider/slide_1.jpg" class="img-fluid mx-auto w-100 d-none d-lg-block" alt=""/>
                           <img src="/img/homeslider/slide_1_mob.jpg" class="img-fluid mx-auto  w-100 d-block d-lg-none  " alt="banner"/>
                          
                        </div>
                        <div class="carousel-item">
                           <img src="/img/homeslider/slide_1.jpg" class="img-fluid mx-auto w-100 d-none d-lg-block" alt=""/>
                           <img src="/img/homeslider/slide_1_mob.jpg" class="img-fluid mx-auto  w-100 d-block d-lg-none  " alt="banner"/>
                           
                        </div>
                     </div>
                    
                  </div>
               </div>
            </div>
         
         </div>
      </div>
   </main>
   {{-- <main class="match_scores">
      <div class="container-fluid">
         <div class="row justify-content-md-center align-items-center">
            <div class="col-lg-6">
               <h1 class="text-center">Test Cricket Goes live in</h1>
          
            </div>
             <div class="col-lg-6">
               <div id="countdown">
                  <ul class="text-center">
                     <li><span id="days"></span><span>days</span></li>
                     <li><span id="hours"></span><span>Hours</span></li>
                     <li><span id="minutes"></span><span>Minutes</span></li>
                     
                  </ul>
               </div>
            </div> 
           
         </div>
      </div>
   </main> --}}
   <main class="features_interviews">
      <!-- <div class="container"> -->
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-12 text-left">
               <!-- <h3 class="mb-30"> Features & Interviews  </h3>    -->
               
               <h3 class="mb-30"> News & Updates  </h3>
            </div>
            <div class="col-md-12">
               <div class="row mb-3">
                   @foreach ($blogs as $blog)
                   <div class="col-md-3 mb-4">
                       <a href="{{ route('blogs.show', $blog->id) }}">
                       <div class="card">
                           <div class="ap-slide-content relative">
                               <div class="ap-img-box relative">
                                   <img src="{{ $blog->blog_thumbnail }}" class="img-fluid" />
                               </div>
                               <div class="ap-img-content">
                                  
                                   <h5 class="ap-slide-title">{{ $blog->blog_title }}</h5>
                                   <a href="{{ route('blogs.show', ['id' => $blog->id]) }}">Read More</a>
                               </div>
                           </div>
                       </div>
                   </div>
               @endforeach
               </div>

            </div>
         </div>
      </div>
   </main>


   <main class="latest_video">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-12 text-left">
               <h3 class="white mb-30"> #VIDEO </h3>
            </div>
            <div class="col-lg-12">
               <div class="video-section">
                  <div class="video-player" >
       

                     <iframe  id="mainVideo" width="100%" height="100%" src="<?(isset($video[0]) && !empty( $video[0]->videourl) )
                     echo $video[0]->videourl  ?>" title="<?(isset($video[0]) && !empty( $video[0]->videotitle) )
                     echo $video[0]->videotitle  ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" autoplay allowfullscreen></iframe>
                     
                    
                  </div>
                  <div class="recommended-videos">
                     <div class="video_header">
                        <h2>Videos</h2>
                        
                     </div>
                     <div class="video_cover">
                       
                       
                        {{-- <div class="video-thumbnail" onclick="changeVideo('Dy8hv0XrPWM')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>All seven of Kyle Jamieson's WTC21 Final wickets</p>
                              {{-- <p>Tue 6 Jul</p> --}}
                           {{-- </div> --}}
                        {{-- </div> --}} 
                        
                       @foreach ($video as $item)
                              
                       <div class="video-thumbnail" onclick="changeVideo('<?php echo  $item->video_id ?>')">
                        <img src="{{ asset('/youtube/gallery/' . $item->image) }}" alt="Video Thumbnail" >
                        <div>
                           <p>All seven of Kyle Jamieson's WTC21 Final wickets</p>
                           
                        </div>
                     </div>
                           
                       @endforeach

                        
                     </div>
                     
                  </div>
               </div>
            </div>
           
         </div>
      </div>
   </main>


   <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/h6Mv2RHqkpI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->


   <main class="latest_news">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-6">
               <h3 class="text-center mb-30"> TRIVIA OF THE DAY</h3>
               <div id="q-cont">
                  <div class="slide" id="slide1">
                     <div class="question">
                       @if(isset($question1) && !empty($question1->question))
                        {{$question1->question}}
                       @endif
                     </div>
                     <div class="options">
                        <span class="op" for="q1op1" data-text="{{$question1->quize_id."-".$question1->option1}}">
                           @if(isset($question1) && !empty($question1->option1))
                           {{$question1->option1}}
                          @endif</span>
                          <span class="op op2" for="q1op2"  data-text="{{$question1->quize_id."-".$question1->option2}}">@if(isset($question1) && !empty($question1->option2))
                           {{$question1->option2}}
                          @endif</span><br /><span class="op" for="q1op3" data-text="{{$question1->quize_id."-".$question1->option3}}" >@if(isset($question1) && !empty($question1->option3))
                           {{$question1->option3}}
                          @endif</span><span class="op op2" for="q1op4" data-text="{{$question1->quize_id."-".$question1->option4}}">@if(isset($question1) && !empty($question1->option4))
                           {{$question1->option4}}
                          @endif</span>
                     </div>
                  </div>
                  <div class="slide" id="slide4">
                     <div class="re trivia_button" onclick="submitquestion()">
                        Submit
                     </div>
                     <span class="success_comment" style="display: none;">
                        @if(isset($question1) && !empty($question1->question))
                        {{$question1->success_comment}}
                        @endif
                     </span>
                     <span class="failure_comment" style="display: none;">
                        @if(isset($question1) && !empty($question1->question))
                        {{$question1->failure_comment}}
                        @endif
                     </span>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <h3 class="text-center mb-30 pt60"> POLL OF THE DAY</h3>
               <div id="q-cont">
                  <div class="wrapper">
                           <header> @if(isset($question2) && !empty($question2->question))
                              {{$question2->question}}
                             @endif <br>
                           </header>
                            <div class="poll-area">
                            
                            <label for="opt-1" class="opt-1 question2_label">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text question2" data-options="{{$question2->poll_id."-".$question2->option1}}">
                                       @if(isset($question2) && !empty($question2->option1))
                                       {{$question2->option1}}
                                      @endif
                                    </span>
                                </div>
                                <span class="percent option1"></span>
                                </div>
                                <div class="progress" id="pstyle1" ></div>
                            </label>
                            <label for="opt-2" class="opt-2 question2_label">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text question2" data-options="{{$question2->poll_id."-".$question2->option2}}"> @if(isset($question2) && !empty($question2->option2))
                                       {{$question2->option2}}
                                      @endif</span>
                                </div>
                                <span class="percent option2"></span>
                                </div>
                                <div class="progress" id="pstyle2" ></div>
                            </label>
                            <label for="opt-3" class="opt-3 question2_label">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text question2" data-options="{{$question2->poll_id."-".$question2->option3}}"> @if(isset($question2) && !empty($question2->option3))
                                       {{$question2->option3}}
                                      @endif</span>
                                </div>
                                <span class="percent option3"></span>
                                </div>
                                <div class="progress" id="pstyle3"></div>
                            </label>
                            <span class="question2answer"></span>
                            </div>
                        </div>

               </div>
            </div>
         </div>
      </div>
   </main>

   <main class="">
      <div class="container">
         <div class="row justify-content-md-center">
            <div class="col-lg-12">
               <h1>Test Team Rankings</h1>
               <div class="row">
                  <div class="col-md-12">
                     <div class="card stats_board">
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <ul class="head_title">
                                 <li> <b class="desk_text"> POS </b><b class="mob_text"> # </b>  </li>
            
                                 <li> <b class="desk_text"> TEAM </b> <b class="mob_text"> T </b> </li>
                                 <li> <b class="desk_text"> MATCHES </b> <b class="mob_text"> M </b> </li>
                                 <li> <b class="desk_text"> POINTS  </b> <b class="mob_text"> P </b> </li>
                                 <li> <b class="desk_text"> RATING  </b><b class="mob_text"> R </b>  </li>
                                 <div class="clear"></div>
                              </ul>
                              <ul class="stats_list">
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">1</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/ind.jpg" class="img-fluid" />  India </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/ind.jpg" class="img-fluid" />  IND</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">25</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">3,031</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">121</p>
                                       </li>
                     
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">2</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/aus.jpg" class="img-fluid" /> Australia </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/aus.jpg" class="img-fluid" />  AUS</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">23</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">2,679</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">116</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">3</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/eng.jpg" class="img-fluid" /> <a href="#"> England </a> </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/eng.jpg" class="img-fluid" />  ENG</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">36</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">4,103</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">114</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">4</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/sa.jpg" class="img-fluid" /> <a href="#"> South Africa </a> </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/sa.jpg" class="img-fluid" />  SA</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">21</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">2,182</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">104</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">5</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/nz.jpg" class="img-fluid" /> <a href="#"> New Zealand </a> </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/nz.jpg" class="img-fluid" /> <a href="#"> NZ </a> </p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">23</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">2,291</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">100</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">6</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/pak.jpg" class="img-fluid" /> <a href="#"> Pakistan </a> </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/pak.jpg" class="img-fluid" /> <a href="#"> PAK </a> </p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">22</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">1,902</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">86</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">7</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/srl.jpg" class="img-fluid" /> <a href="#"> Sri Lanka </a> </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/srl.jpg" class="img-fluid" /> <a href="#"> SL</a> </p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">25</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">3,031</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">121</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">8</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/wid.jpg" class="img-fluid" /> <a href="#"> West Indies </a> </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/wid.jpg" class="img-fluid" /> <a href="#"> WI </a> </p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">25</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">1,906</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">76</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">9</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/bang.jpg" class="img-fluid" /> <a href="#"> Bangladesh </a> </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/bang.jpg" class="img-fluid" /> <a href="#"> BAN </a> </p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">18</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">805</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">99</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                                 <li>
                                    <ul class="sub_stats head_title">
                                       <li class="pld">
                                          <p class="ap-team-name">10</p>
                                       </li>
                                       <li>
                                          <p class="ap-team-name desk_text"> <img src="/img/zim.jpg" class="img-fluid" /> <a href="#"> Zimbabwe </a> </p>
                                          <p class="ap-team-name mob_text"> <img src="/img/zim.jpg" class="img-fluid" /> <a href="#"> ZIM</a> </p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">25</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">223</p>
                                       </li>
                                       <li class="pts">
                                          <p class="ap-team-name">32</p>
                                       </li>
                                    </ul>
                                    <div class="clear"></div>
                                 </li>
                                 <!-- -->
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>


            </div>
         </div>
      </div>
   </main>

 

   <main class="in_numbers">
      <div class="container">
         <div class="row justify-content-md-center text-center">
    
            <div class="col-lg-8 col-md-8 col-sm-6 eight_bg">
               <div class="card card-upcomming">
                  <h5 class="card-header white bg-dark">FINAL</h5>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-6 ">
                           <div class="text-left">
                              <h3 class="text-left main_up">Wednesday 07 June</h3>
                              <span class="time_upcomming">15:00</span><span class="text_upcomming">(YOUR TIME)</span>
                           </div>
                           <div class="text-left mt-4">
                              <p class="text-left">The Oval, London</p>
                              <span class="tl_upcomming">10:30</span><span class="text_upcomming">WED 07 JUNE(LOCAL)</span>
                           </div>
                        </div>
                        <div class="col-sm-6 text-left">
                           <div class="flag_cover">
                              <img src="/img/aus.jpg" class="img-upcomming" alt="flag">
                              <span class="co_name time_upcomming">AUSTRALIA</span>
                           </div>
                           <div class="flag_cover">
                              <img src="/img/ind.jpg" class="img-upcomming" alt="flag">
                              <span class="co_name time_upcomming">INDIA</span>
                           </div>
                        </div>
                     </div>
                     {{-- <a href="#" class="btn btn-primary bg-dark">READ MORE</a> --}}
                  </div>
               </div>
            </div>

         </div>
      </div>
   </main>

</section>
@include('frontend.layout.footertest')
<script>
   $(document).ready(function () {
       var owl = $("#match_scores");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 3,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#features_interviews");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 4,
           pagination: false,
           stopOnHover: true,
            navigation:true,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#latest_video");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 4,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#latest_news");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 4,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#top_highlights");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 4,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#2021_leaders");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 6,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 7],
           itemsDesktopSmall: [979, 3],
           itemsTablet: [600, 3], //3 items between 600 and 0
           itemsMobile: [480, 2], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   (function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
   
    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "06/12/",
        birthday = dayMonth + yyyy;
    
    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = dayMonth + nextYear;
    }
    //end
    
    const countDown = new Date(birthday).getTime(),
        x = setInterval(function() {    
   
          const now = new Date().getTime(),
                distance = countDown - now;
   
          document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
   
          //do something later when date is reached
          if (distance < 0) {
            document.getElementById("headline").innerText = "The final day";
            document.getElementById("countdown").style.display = "none";
            document.getElementById("content").style.display = "block";
            clearInterval(x);
          }
          //seconds
        }, 0)
    }());
</script>
<!-- <script>
   function changeVideo(videoSrc) {
   const mainVideo = document.getElementById('mainVideo');
   mainVideo.src = videoSrc;
   mainVideo.load();
   }
   </script> -->
<script>
   function changeVideo(videoSrc) {
       const mainVideo = document.getElementById('mainVideo');
       mainVideo.src = "https://www.youtube.com/embed" + '/' + videoSrc + "?autoplay=1";
       mainVideo.load();
      
     }
   
   
   
   
   $(window).ready(function(){
   	var left, width, cont = "#q-cont";
   	$('.op').click(function(){
   		$('.op').css("background","#f37224");
         $('.op').removeClass("question1");
   		$(this).css("background","#192462");
         $(this).addClass("question1");
   	});
   });
   
   $(window).ready(function(){
   	var left, width, cont = "#q-cont";
   	$('.po').click(function(){
   		$('.po').css("background","#817464");
   		$(this).css("background","#192462");
        
   	});
   });
     
</script>
<script>
   const tabs = document.querySelectorAll(".tab");
   
   function tabify(tab) {
   const tabList = tab.querySelector(".tab__list");
   
   if (tabList) {
   const tabItems = [...tabList.children];
   const tabContent = tab.querySelector(".tab__content");
   const tabContentItems = [...tabContent.children];
   let tabIndex = 0;
   
   tabIndex = tabItems.findIndex((item, index) => {
   return [...item.classList].indexOf("is--active") > -1;
   });
   
   tabIndex > -1 ? (tabIndex = tabIndex) : (tabIndex = 0);
   
   function setTab(index) {
   tabItems.forEach((x, index) => x.classList.remove("is--active"));
   tabContentItems.forEach((x, index) => x.classList.remove("is--active"));
   
   tabItems[index].classList.add("is--active");
   tabContentItems[index].classList.add("is--active");
   }
   
   tabItems.forEach((x, index) =>
   x.addEventListener("click", () => setTab(index))
   );
   setTab(tabIndex);
   tab.querySelectorAll(".tab").forEach((tabContent) => tabify(tabContent));
   }
   }
   
   tabs.forEach(tabify);
</script>

<script>
    const options = document.querySelectorAll("label");
for (let i = 0; i < options.length; i++) {
  options[i].addEventListener("click", ()=>{
    for (let j = 0; j < options.length; j++) {
      if(options[j].classList.contains("selected")){
        options[j].classList.remove("selected");
      }
    }

    options[i].classList.add("selected");
    for (let k = 0; k < options.length; k++) {
      options[k].classList.add("selectall");
    }

    let forVal = options[i].getAttribute("for");
    let selectInput = document.querySelector("#"+forVal);
    let getAtt = selectInput.getAttribute("type");
    if(getAtt == "checkbox"){
      selectInput.setAttribute("type", "radio");
    }else if(selectInput.checked == true){
      options[i].classList.remove("selected");
      selectInput.setAttribute("type", "checkbox");
    }

    let array = [];
    for (let l = 0; l < options.length; l++) {
      if(options[l].classList.contains("selected")){
        array.push(l);
      }
    }
    if(array.length == 0){
      for (let m = 0; m < options.length; m++) {
        options[m].removeAttribute("class");
      }
    }
  });
}



document.addEventListener('DOMContentLoaded', function() {
  var prevButton = document.querySelector('.owl-prev');
  var nextButton = document.querySelector('.owl-next');

  // Replace text with arrow icons
  prevButton.innerHTML = '<span class="arrow-left"></span>';
  nextButton.innerHTML = '<span class="arrow-right"></span>';
});


</script>
<script>
   // localStorage.clear();
   var APP_URL = {!! json_encode(url('/')) !!};
 
    $(document).ready(function() {
         $('.question2_label').click(function(){
            var question2_local = localStorage.getItem('question2');
               var question2_answer = localStorage.getItem('question2');
            if(question2_local!="1"){  
               localStorage.setItem('question2', 1);
               var dataOptions = $(this).find('.question2').data('options');       
            
               $.ajax
               ({ 
                  headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  type: "POST",
                  url: APP_URL+"/resultstorequestion2", 
                  // url: "https://icc-wtc.matrixpanel.in/resultstorequestion2", // Replace with the appropriate URL of your server-side endpoint
                  dataType: 'json',
                  data:{"dataOptions":dataOptions},
                  success: function(result)
                  {
                     $(".option1").text(result.australia_per+"%");
                     $("#pstyle1")[0].style.setProperty("--w", result.australia_per);
                     $(".option2").text(result.india_per+"%");
                     $("#pstyle2")[0].style.setProperty("--w", result.india_per);
                     $(".option3").text(result.draw_per+"%");
                     $("#pstyle3")[0].style.setProperty("--w", result.draw_per);
                     $(".circle").css('display', 'none');
                    
                     localStorage.setItem('question2_answer',result.answer);
                     $(".question2answer").text("Your answer is "+result.answer);
                  }
               });
            }
               
         });

         function makeAjaxCall() {            
            // Perform your Ajax call here
            $id={{$question2->poll_id}};
            $.ajax({
               url: APP_URL+"/report/"+$id,
               // url: "https://icc-wtc.matrixpanel.in/report",
               method: 'GET',
               dataType:"json",
               success: function(response) {                 
                  // Handle the Ajax response
                  $(".option1").text(response.australia_per+"%");
                  $("#pstyle1")[0].style.setProperty("--w", response.australia_per);
                  $(".option2").text(response.india_per+"%");
                  $("#pstyle2")[0].style.setProperty("--w", response.india_per);
                  $(".option3").text(response.draw_per+"%");
                  $("#pstyle3")[0].style.setProperty("--w", response.draw_per);
               },
               error: function(error) {
                  // Handle any errors that occur during the Ajax call
                  console.error(error);
               }
            });
         }

         // Call the Ajax function every 5 seconds (5000 milliseconds)
         setInterval(makeAjaxCall, 5000);
    });
  

   function submitquestion(){
      
      var data = localStorage.getItem('checking');
      
      if(data!="1"){       
        
            var answer = $('.question1').data('text'); 
            var text = $('.question1').text();        
            $.ajax({
               headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               type: "POST",
               // url: "https://icc-wtc.matrixpanel.in/resultstore", // Replace with the appropriate URL of your server-side endpoint
               url: APP_URL+"/resultstore",
               dataType: 'json',
               data:{"answer":answer},
               success: function(data) {
                  
                  if(data==1){
                     localStorage.setItem('checking', 1);
                     localStorage.setItem('selectvalue',text);
                     $(".success_comment").css('display', 'block');
                     $(".failure_comment").css('display', 'none');
                   
                  }else{
                     localStorage.setItem('selectvalue',text);
                     localStorage.setItem('checking', 2);
                     $(".success_comment").css('display', 'none');
                     $(".failure_comment").css('display', 'block');;
                    
                  }  
                  $(".trivia_button").hide();
               },
               error: function() {
                  
               }
            });   
      }
      // else{
      //    alert("6");
      // }
      
     
   }

   var result = localStorage.getItem('checking');  
   var selectvalue = localStorage.getItem('selectvalue'); 
   if(result==1){ 
      if(selectvalue!=''){
         $(".op").each(function() {
            var text = $(this).text();

            // Check the text condition and add background color if it is correct
            if (text === selectvalue) {
               $(this).css("background", "#192462");
            } 
         });
      }
     
      // $(this).css("background","#192462");
      $(".trivia_button").hide();   
      $(".success_comment").css('display', 'block');
      $(".failure_comment").css('display', 'none');
   }else if(result==2){
      if(selectvalue!=''){
         $(".op").each(function() {
            var text = $(this).text();

            // Check the text condition and add background color if it is correct
            if (text === selectvalue) {
               $(this).css("background", "#192462");
            } 
         });
      }
      // $(this).css("background","#192462");
      $(".trivia_button").hide();
      $(".success_comment").css('display', 'none');
      $(".failure_comment").css('display', 'block');;
   }

   var question2_local = localStorage.getItem('question2');
   if(question2_local==1){
      $(".circle").css('display', 'none');
   }
   let question2_text_local = localStorage.getItem('question2_answer');
   if(question2_text_local!="" && question2_text_local!=null){
      $(".question2answer").text("Your answer is "+question2_text_local);
   }

   
                     
</script>

@extends('header_footer')

@section('content')

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Events</h3>
          	<hr>
          	@foreach ($categories as $category)
          		<h4>{{ $category->name }}</h2>
	          	<div class="row mt">
	          	@if(!empty($events))
	          		@foreach ($events as $event)
	          			@if($category->id == $event->category_id)
	          				@foreach ($users as $user) 
	                            @if($event->user_id == $user->id)
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc event_pictures">
											<div class="project-wrapper">
							                    <div class="project">
							                        <div class="photo-wrapper">
							                            <div class="photo">
							                            	<a class="fancybox" href="/event_details/{{$event->id}}"><img class="img-responsive" src="{{$event->image}}" alt="" style="max-height:200px"></a><br>Event Name: {{$event->name}}<br>Description: {{$event->description}}<br>Event starts at: {{$event->time}}<br>City: {{$event->city}}<br>Country: {{$event->country}}<br>Price: {{$event->price}}€
							                            </div>						                            
						                        	</div>
						                    	</div>
						                	</div>
										</div><!-- col-lg-4 -->
	                            @else
	                            @endif
	                        @endforeach
	          			@endif
	          		@endforeach 
	          	@endif
	          	</div><!-- /row -->
	          	<hr>
          	@endforeach

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

@endsection

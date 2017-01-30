@extends('header_footer')

@section('content')


    <section id="main-content">
        <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Event</h3>
          	<hr>

          	<div class="row mt">         	
          		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc event_pictures">
          			<div class="project-wrapper">
          				<div class="project">
          					<div class="photo-wrapper">
          						<div class="photo">
          							<a class="fancybox"><img class="img-responsive" src="{{$events->image}}" alt="" style="max-height:400px"></a>

          							<h4>
          								<br>Event Name: {{$events->name}}<br>Description: {{$events->description}}<br>Event starts at: {{$events->time}}<br>City: {{$events->city}}<br>Country: {{$events->country}}<br>Price: {{$events->price}}€
          							</h4>

          							<br><br>

          							<button type="button" class="btn btn-default btn-md"><i class="fa fa-plus" aria-hidden="true"></i><a href="/going/{{$events->id}}" style="color: #333; text-decoration: none;"> GOING</a></button>
          							<button type="button" class="btn btn-default btn-md"><i class="fa fa-star" aria-hidden="true"></i><a href="/interested/{{$events->id}}" style="color: #333; text-decoration: none;"> INTERESTED</a></button>

          						</div>						                            
          					</div>
          				</div>
          			</div>
          		</div><!-- col-lg-4 -->

          		@if(!isset($events->video))	          		
	          		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc event_pictures">
	          			<div class="project-wrapper">
	          				<div class="project">
	          					<div class="photo-wrapper">
	          						<div class="photo">
	          								No Video is added
	          								<br>
	          									<form role="form" method="POST" enctype="multipart/form-data" action="{{ url('/insert_video') }}">
	          										{{ csrf_field() }}
	          										<input type="file" name="file">
	          										<br>
	          										Add Title <input type="text" name="title">
	          										<br><br>
	          										<input type="submit" value="Add Video" name="submit">
	          									</form> 
	          						</div>						                            
	          					</div>
	          				</div>
	          			</div>
	          		</div><!-- col-lg-4 -->  
	          	@else
	          		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc event_video">
	          			<div class="project-wrapper">
	          				<div class="project">
	          					<div class="photo-wrapper">
	          						<div class="photo">
						          		<video width="520" height="340" controls>
					  						<source src="{{$events->video}}" type="video/mp4">
										</video>
									</div>						                            
	          					</div>
	          				</div>
	          			</div>
	          		</div><!-- col-lg-4 -->	
	          	@endif    

          	</div><!-- /row -->

          	<div class="row mt">
          		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc event_pictures">
          			<div class="project-wrapper">
          				<div class="project">
          					<div class="photo-wrapper">
          						<div class="photo">
						          	<h3> ADD COMMENT </h3>
									<form action="/add_comment" method="post">
								        <input type="text" name="text" required="required" style="width:300px;"><br>

								        <input type="hidden" name="_token" value="{{ csrf_token() }}">

								        <input type="hidden" name="event_id" value="{{ $events->id }}">
								        <br>

										<input type="submit" name ="add" value="Dodaj komentar"> 
									</form> 
								</div>
							</div>
						</div>
					</div>			
				</div>	

          		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc event_pictures">
          			<div class="project-wrapper">
          				<div class="project">
          					<div class="photo-wrapper">
          						<div class="photo">
									<h3> COMMENTS </h3>

									@foreach($comments as $comment)
										<h4>{{ $comment->text }}</h4>
										<h4><b>{{ $comment->user->name }}</b></h4>
									@endforeach

								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>		

		</section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

@endsection

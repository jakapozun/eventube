@extends('header_footer')

@section('content')

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Profile</h3>
          	<hr>
            <div class="container" style="text-align:center;">
            @if($user->avatar == NULL)
              You don't have a profile chosen.
              <br>
              Would you like to choose a profile picture?
              <br>
              <form enctype="multipart/form-data" action="/profile" method="POST">
                {{ csrf_field() }}
                <br>
                <center>
                  <input type="file" name="avatar" />
                  <br>
                  <input type="submit" name="avatar" class="btn btn-round btn-warning" />
                </center>
              </form>
            @else
              <img src="avatars/{{ $user->avatar }}" class="img-circle" width="130">
              <br>
            @endif
              <br>
              <h4>Name:  {{ strtoupper($user->name) }}</h4>
              <h4>Email:  {{ strtoupper($user->email) }}</h4>
            </div>
				<div class="row mt">
					
				</div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

@endsection
@extends('header_footer')

@section('content')

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
      	<section class="wrapper site-min-height">
      		<h3><i class="fa fa-angle-left"></i> Contact</h3>
      		<hr>



      		<div class="row">
      			<div class="col-md-7">
      				<form>
      					<div class="form-group">
      						<div class="input-group">
      							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      							<input name="email" placeholder="E-Mail" class="form-control" type="email">
      						</div>
      					</div>
      					<div class="form-group">
      					  <div class="input-group">
      						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input name="name" placeholder="Name" class="form-control" type="text">
                          </div>
      					</div>
      					<div class="form-group">
      						<div class="input-group">
      							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
      							<textarea class="form-control"  name="message" placeholder="Message"></textarea>
      						</div>
      					</div>
      					<button type="submit" class="btn btn-warning pull-lefz">Send <span class="glyphicon glyphicon-send"></span></button>
      				</form>

      			</div>
      			<div class="col-md-3">
      			<div class="btn-group btn-group-sm">
      				<h3>Contact info</h3>
      			</div>
      				<p>Mobile: 041 522 586</p><hr>
      				<p>Email: eventube@gmail.com</p><hr>
      				<p>Address: Velenje</p><hr>
      			</div>
      		</div>


      	</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      @endsection
@extends('header_footer')

@section('content')

<!-- **********************************************************************************************************************************************************
MAIN CONTENT
*********************************************************************************************************************************************************** -->
<!--main content start-->
<section id="main-content">
    <section class="wrapper site-min-height">
      	<h3><i class="fa fa-angle-right"></i> Add Event</h3>
      	<hr>

      	<div class="container">
            <form role="form" method="POST" action="{{ url('/insert_event') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
				<h4>Name of Event:</h4>
				<input type="text" name="name" />
				<br>
				<h4>Event Photo:</h4>
				<input type="file" name="file">
				<br>
				<h4>Description:</h4>
				<input type="text" name="description" />
				<br>
				<h4>Date/Time:</h4>
				<input type="date" name="datetime">
				<br>
				<h4>City:</h4>
				<input type="text" name="city" />
				<br>
				<h4>Country:</h4>
				<input type="text" name="country" />
				<br>
				<h4>Price:</h4>
				<input type="number" min="0.00" step="0.01" max="2500" value="0.00" name="price"/> €
				<br>
				<h4>Event Category:</h4>
				<select name="choose_category">
                    @foreach ($categories as $category) 
            			<option value="{{ $category->id }}">{{ $category->name }}</option>
        			@endforeach  
                </select>
                <br><br>
				<input type="submit" value="Add Event" name="submit">
            </form> 
      	</div>
    </section>
</section>

@endsection
@extends('layouts.master')
@section('title','Welcome to jobportal')
@section('content')
<!-- Banner-->
<div class="banner">
	<div class="container">
		<div id="search_wrapper">
		 <div id="search_form" class="clearfix">
		 <h1>Start your job search</h1>
		    <p>
			 <input class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}" type="text">
			 <input class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}" type="text">
			 <label class="btn2 btn-2 btn2-1b"><input value="Find Jobs" type="submit"></label>
			</p>
            <h2 class="title">top Countries &amp; searches</h2>
         </div>
		 <div id="city_1" class="clearfix">
			 <ul class="orange">
			 <li>
			 <a href="#">Japan</a>
			 </li>
			 <li>
			 <a href="#" title="Kenya Jobs">Kenya</a>
			 </li>
			 <li>
			 <a href="#" title="Australia Jobs">Australia</a>
			 </li>
			 <li>
			 <a href="#" title="Poland Jobs">Poland</a>
			 </li>
			 <li>
			 <a href="#" title="Oman Jobs">Oman</a>
			 </li>
			 <li>
			 <a href="#" title="Pakistan jobs">Pakistan</a>
			 </li>
			 <li>
			 <a href="#" title="Saudi Arbia Jobs">Saudi Arbia</a>
			 </li>
			 <li>
			 <a href="#" title="Doha Jobs">Doha</a>
			 </li>
			 </ul>
			 <ul class="orange">
			 <li>
			 <a href="#" title="Russia Jobs">Russia</a>
			 </li>
			 <li>
			 <a href="#" title="Germany Jobs">Germany</a>
			 </li>
			 <li>
			 <a href="#" title="Canada Jobs">Canada</a>
			 </li>
			 <li>
			 <a href="#" title="Hong Kong Jobs">Hong Kong</a>
			 </li>
			 <li>
			 <a href="#" title="Spain Jobs">Spain</a>
			 </li>
			 <li>
			 <a href="#" title="Thailand Jobs">Thailand</a>
			 </li>
			 <li>
			 <a href="#" title="Norway Jobs">Norway</a>
			 </li>
			 <li>
			 <a href="#" title="Srilanka Jobs">Srilanka</a>
			 </li>
			 </ul>
			 <ul class="blue">
			 <li>
			 <a href="#" title="Information Technology">Mexico</a>
			 </li>
			 <li>
			 <a href="#" title="Fresher">Fresher</a>
			 </li>
			 <li>
			 <a href="#" title="Engineering">Engineering</a>
			 </li>
			 <li>
			 <a href="#" title="Finance Jobs">Finance</a>
			 </li>
			 <li>
			 <a href="#" title="Teaching">Teaching</a>
			 </li>
			 <li>
			 <a href="#" title="Software">Software</a>
			 </li>
			 <li>
			 <a href="#" title="Accounting">Accounting</a>
			 </li>
			 <li>
			 <a href="#" title="Data Entry">Data Entry</a>
			 </li>
			 </ul>
			 <ul class="blue">
			 <li>
			 <a href="#" title="Marketing Jobs">Marketing </a>
			 </li>
			 <li>
			 <a href="#" title="Freelancer">Freelancer</a>
			 </li>
			 <li>
			 <a href="#" title="Internet Jobs">Internet</a>
			 </li>
			 <li>
			 <a href="#" title="Sales">Sales</a>
			 </li>
			  <li>
			 <a href="#" title="Legal">Legal</a>
			 </li>
			 <li>
			 <a href="#" title="HR">HR</a>
			 </li>
			 <li>
			 <a href="#" title="MBA">MBA</a>
			 </li>
			 <li>
			 <a href="#" title="Pharma">Pharma</a>
			 </li>
			 </ul>
	     </div>
       </div>
   </div> 
</div>
<!--Banner/-->

<!-- Feature jobs-->
<div class="container">
  <div class="grid_1">
	 <h3>Featured Employers</h3>
	   <div class="nbs-flexisel-container">
	   		<div class="nbs-flexisel-inner">
	   			<ul id="flexiselDemo3" class="nbs-flexisel-ul" style="left: -153.833px;">
	      			<li class="nbs-flexisel-item" style="width: 153.833px;">
	      				{!! Html::image('assets/images/c6.gif') !!}</li>
	      			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/	images/c1.gif') !!}</li>
		  			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c2.gif') !!}</li>
		  			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c3.gif') !!}</li>
		  			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c4.gif') !!}</li>
		  			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c5.gif') !!}</li>
		  			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c6.gif') !!}</li>	
	    			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c1.gif') !!}</li><li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c2.gif') !!}</li>
	    			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c3.gif') !!}</li>
	    			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c4.gif') !!}</li>
	    			<li class="nbs-flexisel-item" style="width: 153.833px;">{!! Html::image('assets/images/c5.gif') !!}</li>
	    		</ul>
	    	</div>
	    </div>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	  {!! Html::script('assets/js/jquery.flexisel.js') !!}
	 </div>
	 <div class="single">  
	   <div class="col-md-4">
	   	  <div class="col_3">
	   	  	<h3>Todays Jobs</h3>
	   	  	<ul class="list_1">
	   	  		<li><a href="#">Department of Health - Western Australia</a></li>
	   	  		<li><a href="#">Australian Nursing Agency currently require experiences</a></li>		
	   	  		<li><a href="#">Russia Nursing Agency currently require experiences</a></li>
	   	  		<li><a href="#">The Government of Western Saudi Arbia</a></li>		
	   	  		<li><a href="#">Department of Health - Western Australia</a></li>
	   	  		<li><a href="#">Australian Nursing Agency currently require experiences</a></li>		
	   	  		<li><a href="#">Russia Nursing Agency currently require experiences</a></li>
	   	  		<li><a href="#">The Scientific Publishing Services in Saudi Arbia</a></li>	
	   	  		<li><a href="#">BPO Private Limited in Canada</a></li>		
	   	  		<li><a href="#">Executive Tracks Associates in Pakistan</a></li>
	   	  		<li><a href="#">Pyramid IT Consulting Pvt. Ltd. in Pakistan</a></li>						
	   	  	</ul>
	   	  </div>
	   	  <div class="col_3">
	   	  	<h3>Jobs by Category</h3>
	   	  	<ul class="list_2">
	   	  		<li><a href="#">Railway Recruitment</a></li>
	   	  		<li><a href="#">Air Force Jobs</a></li>		
	   	  		<li><a href="#">Police Jobs</a></li>
	   	  		<li><a href="#">Intelligence Bureau Jobs</a></li>		
	   	  		<li><a href="#">Army Jobs</a></li>
	   	  		<li><a href="#">Navy Jobs</a></li>		
	   	  		<li><a href="#">BSNL Jobs</a></li>
	   	  		<li><a href="#">Software Jobs</a></li>	
	   	  		<li><a href="#">Research Jobs</a></li>								
	   	  	</ul>
	   	  </div>
	   	  <div class="widget">
	        <h3>Take The Seeking Poll!</h3>
    	        <div class="widget-content"> 
                 <div class="seeking-answer">
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Frequently</span>
		    			</label>
		    		</span>
			    	<span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Interviewing</span>
		    			</label>
		    		</span>
			        <span class="seeking-answer-group">
		    			<span class="seeking-answer-input">
		    			   <input class="seeking-radiobutton" type="radio">
		    			</span>
		    			<label for="" class="seeking-input-label">
		    				<span class="seeking-answer-span">Leaving a familiar workplace</span>
		    			</label>
		    		</span>
		    		<div class="seeking_vote">
		    		  <a class="seeking-vote-button">Vote</a>
		    		</div>
			     </div>
    	       </div>
    	</div>
	 </div>

	   <div class="col-md-8">
	   		@foreach($jobs as $job)
		   		<div class="col_1">
		   	        <div class="col-sm-4 row_2">
						<a href="single.html"><img src="http://www.jobportal.dev/assets/images/a{!! rand(1,6);!!}.jpg" class="img-responsive" alt=""></a>
					</div>
					<div class="col-sm-8 row_1">
						<h4><a href="{!! url("job/".$job->job_id) !!}">{!! $job->jobtitle !!}</a></h4>
						<h6>Deadline <span class="dot">·</span> {!! $job->deadline !!}</h6>
						<p>{!! $job->jobdescription !!}</p>
						<div class="social">	
							<a class="btn_1" href="#">
								<i class="fa fa-facebook fb"></i>
								<span class="share1 fb">Share</span>								
							</a>
							<a class="btn_1" href="#">
								<i class="fa fa-twitter tw"></i>
								<span class="share1">Tweet</span>								
							</a>
							<a class="btn_1" href="#">
								<i class="fa fa-google-plus google"></i>
								<span class="share1 google">Share</span>
							</a>
					   </div>
					</div>
					<div class="clearfix"> </div>
			   </div>
			@endforeach
	   </div>
	   <div class="clearfix"> </div>
	 </div>
</div>
<!-- Feature jobs/-->
@endsection
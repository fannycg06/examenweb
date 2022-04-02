@extends('template.layout')
	@section('seccion1')




				<!-- Main -->

					<div id="main">
						@foreach ($virus as $viru)
							
						
						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<span class="date">NOMBRE DEL VIRUS</span>
									<h2><a href="#">{{$viru->nombre}}<br />
									</a></h2>
									<p>{{$viru->daño}}</p>
								</header>
									
							
								
								<a href="#" class="image main"><img src="{{$viru->imagen}}" alt="" /></a>
									
								</ul>
								
							</article>
							
							
@endforeach
							
@foreach($virus as $info)

						<!-- Posts -->
					
							<section class="posts">
								
								@endforeach
								
									
						

					</div>

@endsection
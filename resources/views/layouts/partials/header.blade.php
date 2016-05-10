		<header id="header">
		
			<nav id="topnav">
			
				<ul>
				
					<li class="topli">
						<a class="topa" href="{{ languages(HOME, HOME_FR) }}">{{ languages(HOME, HOME_FR) }}</a>
					</li>
					
					<li class="topli">
						<a class="topa" href="{{ languages(BRANDS, BRANDS_FR) }}">{{ languages(BRANDS, BRANDS_FR) }}</a>
					</li>

					<li class="topli">
						<a class="topa" href="javascript:void(0);">
							{{ languages(JOURNAL, JOURNAL_FR) }}
						</a>
						<ul class="submenu">
							<li>
								<a href="{{ languages(ANNOUNCEMENTSURL, ANNOUNCEMENTSURL_FR) }}">{{ languages(ANNOUNCEMENTS, ANNOUNCEMENTS_FR) }}</a>
							</li>
							<li>
								<a href="{{ languages(EVENTSURL, EVENTSURL_FR) }}">{{ languages(EVENTS, EVENTS_FR) }}</a>
							</li>
							<li>
								<a href="{{ languages(EDITORIALSURL, EDITORIALSURL_FR) }}">{{ languages(EDITORIALS, EDITORIALS_FR) }}</a>
							</li>
						</ul>
					</li>
					
					<li class="topli">
						<a class="topa" href="javascript:void(0);">{{ languages(ABOUTUS, ABOUTUS_FR) }}</a>
						<ul class="submenu">
							<li>
								<a href="{{ languages(CULTUREURL, CULTUREURL_FR) }}">
									{{ languages(CULTURE, CULTURE_FR) }}
								</a>
							</li>
							<li>
								<a href="{{ languages(EXPERIENCEURL, EXPERIENCEURL_FR) }}">
									{{ languages('Experience','Expérience') }}
								</a>
							</li>
							<li>
								<a href="{{ languages(STUDIOSRERVICESURL, STUDIOSRERVICESURL_FR) }}">
									{{ languages('Studio and Services','Studio et Services') }}
								</a>
							</li>
							<li>
								<a href="{{ languages(TEAMURL, TEAMURL_FR) }}">
									{{ languages('Team','Équipe') }}
								</a>
							</li>
						</ul>
					</li>
					
					<li class="topli">
						<a href="{{ $urlol }}">{{ languages('FRANCAIS','ENGLISH') }}</a>
					</li>					
					
				</ul>
				
			</nav>

			<div id="cdf">			
				<div id="logo"><img src="images/logo.png"></div>				
				<div id="companyname">Coup de Foudre</div>				
				<div id="cdfinfo">					
					<p>6644 Clark</p>					
					<p>Mtl, Qc H2S-3E7</p>					
					<p>(514) 788-5066</p>									
				</div>						
			</div>
			
			<nav id="bottomnav">
				<ul>			
					@foreach($Products as $Product)
					<li class="bottomli">
						<a href="{{ $Product->href }}">
							{{ languages($Product->product, $Product->product_fr) }}
						</a>
						<ul class="submenu">
							@foreach ($Product->ProductTypes as $ProductType)
							<li>
								<a href="{{ $ProductType->href }}">
									{{ languages($ProductType->type, $ProductType->type_fr) }}
								</a>
							</li>
							@endforeach
						</ul>						
					</li>
					@endforeach					
				</ul>
			</nav>			
		</header>
		
		<script src="js/header.js" type="text/javascript"></script>
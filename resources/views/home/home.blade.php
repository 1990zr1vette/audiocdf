@extends('layouts/default')

@section('title'){{ languages('HOME', 'ACCEUIL') }}@endsection

@section('description'){{ languages('Being fiercely independent has allowed Coup de Foudre to curate a selection of the finest electronics and loudspeakers, sold at our hifi audio store in Montreal.', 'Découvrir, mettre à votre disposition des produits uniques et proposer les meilleurs systèmes audio, accessoires et vidéo haut de gamme disponibles.') }}@endsection

@section('keywords'){{ languages('audio, video, audio equipment, video equipment, high end audio equipment, high end video equipment', 'audio, vidéo, équipement audio, équipement vidéo, équipement audio haut de gamme, l\'équipement vidéo haut de gamme') }}@endsection

@section('main')

			<!-- ***** SLIDER ***** -->
			<div id="homeslider">
				<img src="images/slider/homeslider1.jpg" />
				<img src="images/slider/homeslider2.jpg" />
				<img src="images/slider/homeslider3.jpg" />
				<img src="images/slider/homeslider4.jpg" />
				<div class="banner_overlay"></div>
			</div>

			<div id="messages">
				<span class="messagetitle">COUP DE FOUDRE</span>
				<span class="message">The discerning be at ease... We see no reason to accept mediocrity.</span>
				<span class="message">Coup de foudre literally means clap of thunder, the expression is used to describe love at first sight.</span>
				<span class="message">We are a small boutique, owned by dedicated individuals, professionals with great skill and experience.</span>
				<span class="message">Being fiercely independent has allowed us to curate a selection of the world’s finest electronics and loudspeakers.</span>
			</div>
			
			<script src="js/homeslider.js" type="text/javascript"></script>
			<!-- ***** SLIDER ***** -->			

			<!-- ***** ANNOUNCEMENTS ***** -->
			<div id="announcements">
				<div class="spacer85"></div>
				<img id="announcementsicon" src="images/icon_announcements.png" />
				<div id="announcementsinfo">
					<p>{{ languages($Announcement->announcement, $Announcement->announcement_fr) }}</p>
				</div>
				<div id="announcementsread">
					<span>>&nbsp;</span>
						<a href="{{ languages(ANNOUNCEMENTSURL, ANNOUNCEMENTSURL_FR) }}">{{ languages('SEE ALL ANNOUNCEMENTS', 'VOIR TOUS LES ANNONCES') }}
					</a>				
				</div>
			</div>
			<!-- ***** ANNOUNCEMENTS ***** -->
			
			<!-- ***** BRANDS ***** -->
			<div id="brands">
				<div class="spacer20"></div>
				<h3>{{ languages('OUR BRANDS', 'NOS MARQUES') }}</h3>
				<div class="spacer10"></div>
@foreach($Brands as $Brand)
					<div class="brandcolumn">
						<a href="{{ languages('brands','marques') }}/{{ fixSegment($Brand->brand) }}/{{ $Brand->id}}">{{ $Brand->brand }}</a>
					</div>
@endforeach
				<div class="spacer20"></div>
			</div>
			
			<script src="js/wrap.js" type="text/javascript"></script>
			<script>$('.brandcolumn').wrapEvery(4, '<div class="brandRow">');</script>
			<!-- ***** BRANDS ***** -->			
			
			<!-- ***** EDITORIAL ***** -->
			<div id="editorial">
				<div class="spacer30"></div>
				<div id="editorialinfo">
					<h3>{{ languages('EDITORIAL', 'ÉDITORIAL') }}</h3>
					<h2>{{ languages($Editorial->title, $Editorial->title_fr) }}</h2>				
					<div class="editorialdate">{{ date('F j, Y', strtotime($Editorial->created_at)) }}</div>
					<p>{{ languages($Editorial->editorial, $Editorial->editorial_fr) }}</p>					
					<div id="editorialreadmore">
						<span>>&nbsp;</span>
						<a href="{{ languages(EDITORIALSURL, EDITORIALSURL_FR) }}/{{ $Editorial->id }}">
							{{ languages('READ MORE', 'EN SAVOIR PLUS') }}
						</a>
						&nbsp;&nbsp;<span>>&nbsp;</span>
						<a href="{{ languages(EDITORIALSURL, EDITORIALSURL_FR) }}">
							{{ languages('ALL EDITORIALS', 'TOUS LES EDITORIAUX') }}
						</a>
					</div>					
				</div>
				<div id="editorialimg">
					<img src="images/{{ $Editorial->image }}" />
				</div>	
			</div>
			<!-- ***** EDITORIAL ***** -->
			
			<!-- ***** EVENT ***** -->
			<div id="event">
				<div class="spacer30"></div>
				<div id="eventimage">
					<img src="images/{{ $Event->image }}" />
				</div>
				<div id="eventinfo">
					<h3>{{ languages('EVENT', 'ÉVÉNEMENT') }}</h3>
					<h3>{{ languages($Event->title, $Event->title_fr) }}</h3>
					<h4>{{ languages($Event->dates, $Event->dates_fr) }}</h4>
					<div class="spacer10"></div>
					<p>{{ languages($Event->event, $Event->event_fr) }}</p>					
					<div id="eventmore">
						<span>>&nbsp;</span>
						<a href="{{ languages(EDITORIALSURL, EDITORIALSURL_FR) }}/{{ $Editorial->id }}">
							{{ languages('READ MORE', 'EN SAVOIR PLUS') }}
						</a>
						&nbsp;&nbsp;<span>>&nbsp;</span>
						<a href="{{ languages(EDITORIALSURL, EDITORIALSURL_FR) }}">
							{{ languages('ALL EVENTS', 'TOUS LES ÉVÉNEMENTS') }}
						</a>				
					</div>					
				</div>
			</div>			
			<!-- ***** EVENT ***** -->			
@endsection

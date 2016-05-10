
		<footer>
			<div id="info" style="color:#fff;" class="spacer20"></div>
			
			<h2>
				<a href="">
					{{ languages("> Subscribe to our newsletter, stay connected to events and promotions reserved for our clients", "> Abonnez-vous à notre lettre d'information pour être tenu au courant de l'actualité, bénéficiez des offres et d'invitations à des évènements réservées à nos abonnés.") }}
				</a>
			</h2>
			
			<div class="spacer20"></div>
			
			<div style="height:425px; width:100%;">
			
				<div style="height:1px; width:90%; margin:0 auto; background-color:#fff;"></div>
				
				<div class="spacer20"></div>
				
				<div style="width:90%; margin:0 auto;">
				
					<div class="footercolumn">
						<h3>Coup De Foudre</h3>
						<span>
							<a href="{{ languages(CULTUREURL, CULTUREURL_FR) }}">
								{{ languages('Culture', 'Culture') }}
							</a>
						</span>
						<span>
							<a href="{{ languages(EXPERIENCEURL, EXPERIENCEURL_FR) }}">
								{{ languages('Experience', 'Expérience') }}
							</a>
						</span>
						<span>
							<a href="{{ languages(STUDIOSRERVICESURL, STUDIOSRERVICESURL_FR) }}">
								{{ languages('Studio & Services', 'Studio et Services') }}
							</a>
						</span>
						<span>
							<a href="{{ languages(TEAMURL, TEAMURL_FR) }}">
								{{ languages('Team', 'Équipe') }}
							</a>
						</span>
					</div>
					
					<div class="footercolumn">
						<h3>{{ languages('Products', 'Produits') }}</h3>
@foreach($Products as $Product)
						<span>
							<a href="{{ $Product->href }}">
								{{ languages($Product->product, $Product->product_fr) }}
							</a>
						</span>
@endforeach
					</div>
					<div class="footercolumn">
						<h3>Journal</h3>
						<span>
							<a href="{{ languages(ANNOUNCEMENTSURL, ANNOUNCEMENTSURL_FR) }}">
								{{ titles(ANNOUNCEMENTS, ANNOUNCEMENTS_FR) }}
							</a>
						</span>
						<span>
							<a href="{{ languages(EVENTSURL, EVENTSURL_FR) }}">
								{{ titles(EVENTS, EVENTS_FR) }}
							</a>
						</span>
						<span>
							<a href="{{ languages(EDITORIALSURL, EDITORIALSURL_FR) }}">
								{{ titles(EDITORIALS, EDITORIALS_FR) }}
							</a>						
						</span>
						<span></span>
						<h3>{{ titles('Contact Us', 'Nous contacter') }}</h3>
						<span>
							<a href="">
								{{ titles('General Inquiry', 'renseignement') }}
							</a>
						</span>
						<span>
							<a href="">
								{{ titles('Submit a Review', 'Envoyer une critique') }}
							</a>
						</span>
						<span>
							<a href="">
								{{ titles('Book a Consultation', 'Réserver une consultation') }}
							</a>
						</span>
					</div>
					<div class="footercolumn">
						<h3><a id="findusbutton" href="javascript:void(0);">{{ titles('Find Us', 'Nous trouver') }}</a></h3>
						<span>6644 Clark, Montreal</span>
						<span>Quebec H2S-3E7</span>
						<span>514-788-5066</span>						
					</div>
					<div class="footercolumn">
						<h3>{{ languages('Store Hours' , 'Heures d\'ouverture') }}</h3>
                        <span>{{ languages('Monday' , 'Lundi') }}</span>
						<span>{{ languages('Closed' , 'Fermé') }}</span>
						<div class="spacer10"></div>
						<span>{{ languages('Tuesday - Wednesday' , 'Mardi - Mercredi') }}</span>
						<span>{{ languages('11 am - 5 pm' , '11h - 17h') }}</span>
						<div class="spacer10"></div>
						<span>{{ languages('Thursday - Friday' , 'Jeudi - Vendredi') }}</span>
						<span>{{ languages('10 am - 8 pm' , '10h - 20h') }}</span>								
						<div class="spacer10"></div>
						<span>{{ languages('Saturday' , 'Samedi') }}</span>
						<span>{{ languages('10 am - 5 pm' , '10h - 17h') }}</span>
						<div class="spacer10"></div>
						<span>{{ languages('Sunday' , 'Dimanche') }}</span>
						<span>{{ languages('12 pm - 5 pm' , '12h - 17h') }}</span>
					</div>
					<div class="footercolumn" style="text-align:right;">
						<a target="_blank" href="https://www.facebook.com/coupdefoudre.montreal">
							<img class="socialimg" src="images/social_facebook.png" />
						</a>
						<a target="_blank" href="https://www.youtube.com/user/cdfaudio">
							<img class="socialimg" src="images/social_youtube.png" />
						</a>
						<a target="_blank" href="https://instagram.com/cdfaudio/">
							<img class="socialimg" src="images/social_instagram.png" />
						</a>
						<span>© 2016 CDFAudio</span>
					</div>				
					
				</div>
					
			</div>		
		</footer>

		<script>
			$('footer').css('top',$('main').offset().top + $('main').height());
		</script>
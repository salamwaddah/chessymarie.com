<paper>
	title: Chessy Marie - Registered Nurse
</paper>

@extends('layouts.default')

@section('content')
	<div itemscope="itemscope" itemtype="http://schema.org/Person">
		<section id="schema" style="display: none;"><b itemprop="additionalName">Maryam</b>
			<b itemprop="gender">Female</b> <b itemprop="familyName">Calunsag</b>
		</section>
		<nav class="navbar page-navbar gradient navbar-dark fixed-top navbar-expand-lg">
			<div class="container">
				<a href="/" target="_self" class="navbar-brand nuxt-link-exact-active nuxt-link-active">Chessy Marie</a>
				<button type="button" aria-label="Toggle navigation" aria-controls="nav-collapse" aria-expanded="false" class="navbar-toggler">
					<span class="navbar-toggler-icon"></span></button>
				<div id="nav-collapse" class="navbar-collapse collapse" style="display:none;">
					<ul class="navbar-nav m-auto">
						<li class="nav-item"><a target="_self" href="#work-experience" class="nav-link">Experience</a>
						</li>
						<li class="nav-item"><a target="_self" href="#education" class="nav-link">Education</a></li>
						<li class="nav-item"><a target="_self" href="#skills" class="nav-link">Skills</a></li>
					</ul>
				</div>
				<a href="/resumes/1709.pdf" target="_blank" role="button" aria-disabled="true" class="btn btn-danger download-template">Download CV</a>
			</div>
		</nav>
		<main class="page cv-page">
			<section class="cv-block block-intro border-bottom">
				<div class="container">
					<div class="avatar"><img src="/img/chessy.jpg" alt="Chessy Marie" class="img-fluid rounded-circle">
					</div>
					<p>
						Hello! I am
						<strong>Chessy Marie</strong>. I have solid hospital nursing experience; a professional nurse with strong Emergency Room ER background.
					</p>
					<a href="https://www.linkedin.com/in/chessymarie/" target="_blank" rel="nofollow" class="btn btn-outline-primary">Contact Me</a>
				</div>
			</section>
			<section class="cv-block info">
				<div class="container">
					<div id="work-experience" class="group"><h2 class="text-center">Work Experience</h2>
						<div class="item">
							<div class="row">
								<div itemprop="worksFor" itemscope="itemscope" itemtype="http://schema.org/Organization" class="col-12">
									<h4 itemprop="name">Dubai Health Authority</h4>
									<p itemprop="description" class="text-muted">
										The Dubai Health Authority is a government organization overseeing the health system of Dubai.
									</p>
									<meta itemprop="url" content="https://www.dha.gov.ae/">
									<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
										<meta itemprop="addressLocality" content="Dubai">
										<meta itemprop="addressRegion" content="Dubai">
										<meta itemprop="addressCountry" content="AE">
									</address>
									<div itemprop="event" itemscope="itemscope" itemtype="http://schema.org/Event">
										<div class="row">
											<div class="col-8">
												<h3 itemprop="name" class="organization">General Nurse</h3></div>
											<div class="col-4 period">
												<time itemprop="startDate" content="2018-12-31" class="text-muted">Dec 2018 -
												</time>
												<time itemprop="endDate" content="2019-12-31" class="text-muted">Present</time>
											</div>
											<div itemprop="location" itemscope="itemscope" itemtype="http://schema.org/Place">
												<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
													<meta itemprop="addressLocality" content="Al Lussaily">
													<meta itemprop="addressRegion" content="Dubai">
													<meta itemprop="addressCountry" content="AE">
												</address>
											</div>
										</div>
										<div itemprop="description"><p class="text-muted">
												I am a nurse general
											</p></div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div itemprop="worksFor" itemscope="itemscope" itemtype="http://schema.org/Organization" class="col-12">
									<h4 itemprop="name">Al Garhoud Private Hospital</h4>
									<p itemprop="description" class="text-muted">
										Garhoud Private Hospital is regionally known for its advanced service offering and departmental specialities with 72 private bed capacity, luxurious labour suites and state-of-the-art physical therapy facilities.
									</p>
									<meta itemprop="url" content="https://www.gph.ae/">
									<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
										<meta itemprop="streetAddress" content="Al Garhoud, behind Millenium Hotel">
										<meta itemprop="addressLocality" content="Dubai">
										<meta itemprop="addressRegion" content="Dubai">
										<meta itemprop="addressCountry" content="AE">
									</address>
									<div itemprop="event" itemscope="itemscope" itemtype="http://schema.org/Event">
										<div class="row">
											<div class="col-8">
												<h3 itemprop="name" class="organization">Emergency Room Registered Nurse</h3>
											</div>
											<div class="col-4 period">
												<time itemprop="startDate" content="2016-11-20" class="text-muted">Nov 2016 -
												</time>
												<time itemprop="endDate" content="2018-11-18" class="text-muted">Nov 2018</time>
											</div>
											<div itemprop="location" itemscope="itemscope" itemtype="http://schema.org/Place">
												<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
													<meta itemprop="streetAddress" content="Al Garhoud, behind Millenium Hotel">
													<meta itemprop="addressLocality" content="Dubai">
													<meta itemprop="addressRegion" content="Dubai">
													<meta itemprop="addressCountry" content="AE">
												</address>
											</div>
										</div>
										<div itemprop="description"><p class="text-muted">
												Be part of specialised high qualified ER physicians with well trained ER-specialized nurses to deliver 24/7 emergency services.
											</p></div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div itemprop="worksFor" itemscope="itemscope" itemtype="http://schema.org/Organization" class="col-12">
									<h4 itemprop="name">Lifeline Healthcare UAE</h4>
									<p itemprop="description" class="text-muted">
										Lifeline Hospital, Jebel Ali is the first luxury boutique hospital in the UAE and the first full-fledged hospital in New Dubai.
									</p>
									<meta itemprop="url" content="http://www.lifeline.ae/">
									<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
										<meta itemprop="addressLocality" content="Dubai">
										<meta itemprop="addressRegion" content="Dubai">
										<meta itemprop="addressCountry" content="AE">
									</address>
									<div itemprop="event" itemscope="itemscope" itemtype="http://schema.org/Event">
										<div class="row">
											<div class="col-8"><h3 itemprop="name" class="organization">ER Nurse</h3>
											</div>
											<div class="col-4 period">
												<time itemprop="startDate" content="2016-06-28" class="text-muted">June 2016 -
												</time>
												<time itemprop="endDate" content="2016-10-22" class="text-muted">October 2016
												</time>
											</div>
											<div itemprop="location" itemscope="itemscope" itemtype="http://schema.org/Place">
												<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
													<meta itemprop="streetAddress" content="Muntazah Complex">
													<meta itemprop="addressLocality" content="Jabel Ali">
													<meta itemprop="addressRegion" content="Dubai">
													<meta itemprop="addressCountry" content="AE">
												</address>
											</div>
										</div>
										<div itemprop="description"><p class="text-muted">
												Work as part of a team with physicians, other nurses and healthcare professionals to provide care, monitor health conditions, plan long-term care needs, administer medicine, use medical equipment, perform minor medical operations, and advise patients and their families on illness, care and continued care after a hospital stay.
											</p></div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div itemprop="worksFor" itemscope="itemscope" itemtype="http://schema.org/Organization" class="col-12">
									<h4 itemprop="name">Babies &amp; Beyond UAE</h4>
									<p itemprop="description" class="text-muted">
										Babies and Beyond Health Care offers a unique and personal partnership with parents in Dubai, to assist you every step of the way along your journey from pregnancy to parenthood.
									</p>
									<meta itemprop="url" content="http://www.babiesandbeyond.ae/">
									<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
										<meta itemprop="streetAddress" content="Al Bourooj St, Concord Tower">
										<meta itemprop="addressLocality" content="Dubai">
										<meta itemprop="addressRegion" content="Dubai">
										<meta itemprop="addressCountry" content="AE">
									</address>
									<div itemprop="event" itemscope="itemscope" itemtype="http://schema.org/Event">
										<div class="row">
											<div class="col-8">
												<h3 itemprop="name" class="organization">Pediatric Nurse</h3></div>
											<div class="col-4 period">
												<time itemprop="startDate" content="2016-03-08" class="text-muted">March 2016 -
												</time>
												<time itemprop="endDate" content="2016-05-24" class="text-muted">May 2016</time>
											</div>
											<div itemprop="location" itemscope="itemscope" itemtype="http://schema.org/Place">
												<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
													<meta itemprop="streetAddress" content="Al Bourooj St, Concord Tower">
													<meta itemprop="addressLocality" content="Dubai">
													<meta itemprop="addressRegion" content="Dubai">
													<meta itemprop="addressCountry" content="AE">
												</address>
											</div>
										</div>
										<div itemprop="description">
											<ul>
												<li>Implement prescribed occupational, physical therapies.</li>
												<li>Administer medications orally, intramuscularly, and by gastrointestinal tube.</li>
												<li>Perform patient and family education on the special care children.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div itemprop="worksFor" itemscope="itemscope" itemtype="http://schema.org/Organization" class="col-12">
									<h4 itemprop="name">Prince Abdul Mohsin General Hospital</h4>
									<p itemprop="description" class="text-muted">
										Prince Abdul Mohsin General Hospital is a government hospital with 250-bed capacity located in Madinah, Saudi Arabia.
									</p>
									<meta itemprop="url" content="https://www.moh.gov.sa/">
									<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
										<meta itemprop="streetAddress" content="Al Ula">
										<meta itemprop="addressLocality" content="Al Ula">
										<meta itemprop="addressRegion" content="Medina">
										<meta itemprop="postalCode" content="53543">
										<meta itemprop="addressCountry" content="SA">
									</address>
									<div itemprop="event" itemscope="itemscope" itemtype="http://schema.org/Event">
										<div class="row">
											<div class="col-8">
												<h3 itemprop="name" class="organization">ER Staff Nurse</h3></div>
											<div class="col-4 period">
												<time itemprop="startDate" content="2008-02-01" class="text-muted">February 2008 -
												</time>
												<time itemprop="endDate" content="2014-12-05" class="text-muted">December 2014
												</time>
											</div>
											<div itemprop="location" itemscope="itemscope" itemtype="http://schema.org/Place">
												<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
													<meta itemprop="streetAddress" content="Al Ula">
													<meta itemprop="addressLocality" content="Al Ula">
													<meta itemprop="addressRegion" content="Medina">
													<meta itemprop="postalCode" content="53543">
													<meta itemprop="addressCountry" content="SA">
												</address>
											</div>
										</div>
										<div itemprop="description"><p class="text-muted">
												I am responsible for the nursing management of an average of nine patients per shift with medical, surgical, and pediatric concerns such as uncontrolled hypertension, diabetes, gastrointestinal disorders, vehicular accidents, cardiac arrest, post-operative complications, neonatal and pediatric disorders.
											</p></div>
									</div>
									<div itemprop="event" itemscope="itemscope" itemtype="http://schema.org/Event">
										<div class="row">
											<div class="col-8">
												<h3 itemprop="name" class="organization">Pediatric Staff Nurse</h3>
											</div>
											<div class="col-4 period">
												<time itemprop="startDate" content="2007-03-01" class="text-muted">March 2007 -
												</time>
												<time itemprop="endDate" content="2008-02-01" class="text-muted">February 2008
												</time>
											</div>
											<div itemprop="location" itemscope="itemscope" itemtype="http://schema.org/Place">
												<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
													<meta itemprop="streetAddress" content="Al Ula">
													<meta itemprop="addressLocality" content="Al Ula">
													<meta itemprop="addressRegion" content="Medina">
													<meta itemprop="postalCode" content="53543">
													<meta itemprop="addressCountry" content="SA">
												</address>
											</div>
										</div>
										<div itemprop="description">
											<ul>
												<li>Identify changes in a child’s symptoms.</li>
												<li>Detect the abnormal physical findings.</li>
												<li>Administer medication using age-appropriate guidelines.</li>
												<li>Determine a child’s needs related to pain management.</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="education" class="group"><h2 class="text-center">Education</h2>
						<div class="item">
							<div class="row">
								<div itemprop="alumniOf" itemscope="itemscope" itemtype="http://schema.org/CollegeOrUniversity" class="col-12">
									<h4 itemprop="name">Western Mindanao State University</h4>
									<meta itemprop="url" content="https://wmsu.edu.ph/">
									<address itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
										<meta itemprop="streetAddress" content="Normal Rd">
										<meta itemprop="addressLocality" content="Zamboanga">
										<meta itemprop="postalCode" content="7000">
										<meta itemprop="addressCountry" content="PH">
									</address>
									<div itemprop="event" itemscope="itemscope" itemtype="http://schema.org/Event" class="row">
										<div class="col-8">
											<h3 itemprop="name" class="organization">Bachelor's Degree, Nursing Science</h3>
										</div>
										<div class="col-4 period">
											<time itemprop="startDate" content="2003-01-01" class="text-muted">2003 -</time>
											<time itemprop="endDate" content="2005-01-01" class="text-muted">2005</time>
										</div>
										<div itemprop="location" itemscope="itemscope" itemtype="http://schema.org/Place">
											<meta itemprop="name" content="Bachelor's Degree">
											<div itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
												<meta itemprop="addressLocality" content="Zamboanga">
												<meta itemprop="addressCountry" content="PH">
											</div>
										</div>
									</div>
									<div itemprop="event" itemscope="itemscope" itemtype="http://schema.org/Event" class="row">
										<div class="col-8">
											<h3 itemprop="name" class="organization">Associate's Degree, Health Sciences</h3>
										</div>
										<div class="col-4 period">
											<time itemprop="startDate" content="2003-01-01" class="text-muted">2001 -</time>
											<time itemprop="endDate" content="2005-01-01" class="text-muted">2003</time>
										</div>
										<div itemprop="location" itemscope="itemscope" itemtype="http://schema.org/Place">
											<meta itemprop="name" content="Associate's Degree">
											<div itemprop="address" itemscope="itemscope" itemtype="http://schema.org/PostalAddress">
												<meta itemprop="addressLocality" content="Zamboanga">
												<meta itemprop="addressCountry" content="PH">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="personal" class="group">
						<div class="row">
							<div class="col-md-6">
								<div class="contact-info info-card"><h2>Contact Info</h2>
									<div class="row">
										<div class="col-1">
											<div title="Md Person Icon" name="md-person-icon" class="ion  ">
												<svg viewBox="0 0 512 512" width="1em" height="1em" class="ion__svg">
													<path d="M256 256c52.805 0 96-43.201 96-96s-43.195-96-96-96-96 43.201-96 96 43.195 96 96 96zm0 48c-63.598 0-192 32.402-192 96v48h384v-48c0-63.598-128.402-96-192-96z"></path>
												</svg>
											</div>
										</div>
										<div class="col-9"><span itemprop="name">Chessy Marie</span></div>
									</div>
									<div class="row">
										<div class="col-1">
											<div title="Md Call Icon" name="md-call-icon" class="ion  ">
												<svg viewBox="0 0 512 512" width="1em" height="1em" class="ion__svg">
													<path d="M426.666 330.667a250.385 250.385 0 0 1-75.729-11.729c-7.469-2.136-16-1.073-21.332 5.333l-46.939 46.928c-60.802-30.928-109.864-80-140.802-140.803l46.939-46.927c5.332-5.333 7.462-13.864 5.332-21.333-8.537-24.531-12.802-50.136-12.802-76.803C181.333 73.604 171.734 64 160 64H85.333C73.599 64 64 73.604 64 85.333 64 285.864 226.136 448 426.666 448c11.73 0 21.334-9.604 21.334-21.333V352c0-11.729-9.604-21.333-21.334-21.333z"></path>
												</svg>
											</div>
										</div>
										<div class="col-9">
											<a rel="me" href="tel:+971568856434" title="+971568856434" itemprop="telephone">+971568856434</a>
										</div>
									</div>
									<div class="row">
										<div class="col-1">
											<div title="Ios At Icon" name="ios-at-icon" class="ion  ">
												<svg width="1em" height="1em" viewBox="0 0 512 512" class="ion__svg">
													<path d="M448 234.3c0 74.1-34.7 120.8-89.6 120.8-28.1 0-49.5-15-53.2-37.3h-4c-9.9 23.2-30.3 35.9-57.7 35.9-48.8 0-81.4-39.1-81.4-97.3 0-55.9 32.8-94.8 80.7-94.8 24.6 0 45.5 12.4 54.7 32.7h4v-27.8h39.9v129.3c0 16.1 8.9 25.8 24.9 25.8 27.7 0 45.3-33.6 45.3-85.8 0-83.3-62.4-139-154.6-139-91.2 0-156.2 66.5-156.2 160.6 0 96.2 64.3 157.6 164.4 157.6 19.6 0 39.3-1.7 54.4-4.6 9.8-1.8 18.8 5.6 18.8 15.5 0 7.3-5 13.7-12.1 15.4-18.2 4.3-40.1 6.8-62.7 6.8C141.9 448 64 372.8 64 256.1 64 142.2 143.5 64 259.4 64 370.8 64 448 133.5 448 234.3zm-242.8 23c0 37 17.4 59.4 45.7 59.4 29.8 0 48.6-23 48.6-59.4s-18.8-58.9-48.1-58.9c-29.1 0-46.2 21.8-46.2 58.9z"></path>
												</svg>
											</div>
										</div>
										<div class="col-9">
											<a rel="me" href="mailto:chessyakiko@gmail.com" title="chessyakiko@gmail.com" itemprop="email">chessyakiko@gmail.com</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="contact-info info-card"><h2>Languages</h2>
									<div class="row">
										<ul>
											<li>English</li>
											<li>Arabic <span class="badge badge-danger">Speaking Only</span></li>
											<li>Filipino</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="skills" class="group">
						<div class="row">
							<div class="col">
								<div class="skills info-card"><h2>Skills</h2>
									<div class="row">
										<div class="col-md-6"><h3>Nursing</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:100%"></div>
											</div>
											<h3>Pediatrics</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:94%"></div>
											</div>
											<h3>Emergency</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:100%"></div>
											</div>
											<h3>Inpatient</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:92%"></div>
											</div>
											<h3>Treatment</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:100%"></div>
											</div>
										</div>
										<div class="col-md-6"><h3>Healthcare Managment</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:100%"></div>
											</div>
											<h3>Emergency Medicine</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:100%"></div>
											</div>
											<h3>Medical Education</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:94%"></div>
											</div>
											<h3>Patient Safety</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:100%"></div>
											</div>
											<h3>Vital Signs</h3>
											<div class="progress">
												<div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar" style="width:100%"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div id="licensing" class="group">
						<div class="row">
							<div class="col-md-6">
								<div class="contact-info info-card"><h2>Licenses</h2>
									<div class="row">
										<ul>
											<li>DHA - Dubai Health Authority</li>
											<li>PRC - Philippines Nursing License</li>
											<li>Saudi Nusing License <span class="badge badge-danger">Expired</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="contact-info info-card"><h2>Certificates</h2>
									<div class="row">
										<ul>
											<li>ACLS - Advanced Cardiovascular</li>
											<li>BLS - Basic Life Support</li>
											<li>Basic Electrocardiography</li>
											<li>Cardiovascular Pharmacology</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer class="page-footer">
				<div class="container">
					<div class="social-icons">
						<a href="https://www.linkedin.com/in/chessymarie/" target="_blank" rel="nofollow">
							<div title="Logo Linkedin Icon" name="logo-linkedin-icon" class="ion  ">
								<svg viewBox="0 0 512 512" width="1em" height="1em" class="ion__svg">
									<path d="M417.2 64H96.8C79.3 64 64 76.6 64 93.9V415c0 17.4 15.3 32.9 32.8 32.9h320.3c17.6 0 30.8-15.6 30.8-32.9V93.9C448 76.6 434.7 64 417.2 64zM183 384h-55V213h55v171zm-25.6-197h-.4c-17.6 0-29-13.1-29-29.5 0-16.7 11.7-29.5 29.7-29.5s29 12.7 29.4 29.5c0 16.4-11.4 29.5-29.7 29.5zM384 384h-55v-93.5c0-22.4-8-37.7-27.9-37.7-15.2 0-24.2 10.3-28.2 20.3-1.5 3.6-1.9 8.5-1.9 13.5V384h-55V213h55v23.8c8-11.4 20.5-27.8 49.6-27.8 36.1 0 63.4 23.8 63.4 75.1V384z"></path>
								</svg>
							</div>
						</a></div>
				</div>
			</footer>
		</main>
	</div>
@endsection

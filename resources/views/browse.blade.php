@extends('layouts.front')
@section('content')
    <style>
        a.button62 {
            display: inline-block;
            padding: 0.7em 1.4em;
            margin: 0 02em 0.3em 0;
            border-radius: 0.15em;
            box-sizing: border-box;
            text-decoration: none;
            font-family: 'Roboto', sans-serif;
            text-transform: uppercase;
            font-weight: 400;
            color: #FFFFFF;
            background-color: #b99663;
            box-shadow: inset 0 -0.6em 0 -0.35em rgba(0, 0, 0, 0.17);
            text-align: center;
            position: relative;
        }

        a.button6:active {
            top: 0.1em;
        }

        @media all and (max-width:30em) {
            a.button6 {
                display: block;
                margin: 0.4em auto;
            }
        }
    </style>
    <div class="wm-main-content">
        <div class="wm-main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wm-search-courses">
                            <h5 class="wm-color-three">Search Course</h5>
                            <form>
                                <ul>
                                    <li>
                                        <div class="wm-apply-select">
                                            <select>
                                                <option>Category</option>
                                                <option>Category</option>
                                                <option>Category</option>
                                                <option>Category</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="wm-apply-select">
                                            <select>
                                                <option>SubCategory</option>
                                                <option>SubCategory</option>
                                                <option>SubCategory</option>
                                                <option>SubCategory</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li>
                                        <label><input type="submit" value="" class="wm-bgcolor-three"> <i
                                                class="wmicon-search"></i></label>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <div class="wm-courses wm-courses-medium">
                            <ul class="row">
                                <aside class="col-md-3">
                                    <div class="widget widget_categories">
                                        <div class="wm-widget-title">
                                            <h2>Filter by category</h2>
                                        </div>
                                        <ul>
                                            <li><a href="#">Chemistry</a></li>
                                            <li><a href="#">Classical Archaeology </a></li>
                                            <li><a href="#">Classics & English</a></li>
                                            <li><a href="#">Materials Science</a></li>
                                            <li><a href="#">Mathematics</a></li>
                                            <li><a href="#">Physics & Philosophy</a></li>
                                            <li><a href="#">Theology & Religion</a></li>
                                            <li><a href="#">Law</a></li>
                                            <li><a href="#">Chemistry</a></li>
                                            <li><a href="#">Classical Archaeology </a></li>
                                            <li><a href="#">Classics & English</a></li>
                                            <li><a href="#">Materials Science</a></li>
                                            <li><a href="#">Mathematics</a></li>
                                            <li><a href="#">Physics & Philosophy</a></li>
                                            <li><a href="#">Theology & Religion</a></li>
                                            <li><a href="#">Law</a></li>
                                        </ul>
                                    </div>
                                </aside>

                                <li class="col-md-9">

                                    <div class="courses-medium-text">
                                        <h5><a href="{{ url('single') }}" class="wm-color-three">Data Science &
                                                Engineering</a></h5>
                                        <p>You will be introduced to the study of human physiology, human anatomy,
                                            pharmacology and neuroscience.</p>
                                        <ul class="courses-options">
                                            <li><i class="wmicon-social7"></i> <a href="#">342</a></li>
                                            <li><i class="wmicon-social6"></i> <a href="#">10</a></li>
                                            <li><i class="wmicon-black"></i> <a href="#">Anne J.</a></li>
                                            <li><i class="wmicon-time2"></i> <a href="#">1 year</a></li>
                                            <li><i class="wmicon-location"></i> <a href="#">Campus L2</a></li>
                                        </ul>
                                    </div>
                                    <div class="wm-pagination">
                                        <ul>
                                            <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i>
                                                    Previous</a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>...</li>
                                            <li><a href="#">18</a></li>
                                            <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <div class="container">
					<div class="row">
						<aside class="col-md-4">
							<div class="wm-student-dashboard-nav">
								<div class="wm-student-nav">
									<figure>
										<a href="#"><img src="extra-images/students-setting-1.jpg" alt=""></a>
									</figure>
									<div class="wm-student-nav-text">
										<h6>Kevin Nickols</h6>
										<a href="#">update image</a>
									</div>
									<ul>
										<li>
											<a href="#">
												<i class="wmicon-avatar"></i>
												Profile Details
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-book"></i>
												My Courses
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-favorite"></i>
												Favorites
											</a>
										</li>
										<li class="active">
											<a href="#">
												<i class="wmicon-paper"></i>
												Statement
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-three"></i>
												Settings
											</a>
										</li>
										<li>
											<a href="#">
												<i class="wmicon-arrow"></i>
												Logout
											</a>
										</li>
									</ul>
								</div>
							</div>							
						</aside>
						<div class="col-md-8">
							<div class="wm-student-dashboard-statement wm-dashboard-statement">
								<div class="wm-plane-title">
									<h2>Statement</h2>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-statement-start wm-student">
											<span>Course Name</span>
										</li>
										<li class="wm-student">
											<span>Course ID</span>
										</li>
										<li class="wm-student">
											<span>Invoice</span>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-statement-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Archaeology and Anthropology</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$25.99</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">16/05/2016 - 17/06/2016</time></span>																							
											</div>
										</li>
										<li>
											<small>#234758</small>
										</li>
										<li>
											<a class="wm-dowmload" href="#"><i class="fa fa-download"></i>Download</a>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-statement-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Biochemistry (Molecular and Cellular)</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$34</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">9/04/2016 - 10/05/2016</time></span>																							
											</div>
										</li>
										<li>
											<small>#117539</small>
										</li>
										<li>
											<a class="wm-dowmload" href="#"><i class="fa fa-download"></i>Download</a>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-statement-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Mathematics and Statistics</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$30.50</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">20/06/2016 - 24/07/2016</time></span>																							
											</div>
										</li>
										<li>
											<small>#034578</small>
										</li>
										<li>
											<a class="wm-dowmload" href="#"><i class="fa fa-download"></i>Download</a>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-statement-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Materials Science</a></h6>
												<span><a href="#" class="wmicon-tag"></a>Free</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">5/04/2016 - 11/05/2016</time></span>																							
											</div>
										</li>
										<li>
											<small>#177652</small>
										</li>
										<li>
											<a class="wm-dowmload" href="#"><i class="fa fa-download"></i>Download</a>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-statement-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Modern Languages and Linguistics</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$34.00</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">9/04/2016 - 10/05/2016</time></span>																							
											</div>
										</li>
										<li>
											<small>#332789</small>
										</li>
										<li>
											<a class="wm-dowmload" href="#"><i class="fa fa-download"></i>Download</a>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-statement-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Computer Science and Philosophy</a></h6>
												<span><a href="#" class="wmicon-tag"></a>$30.50</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">20/06/2016 - 24/07/2016</time></span>																							
											</div>
										</li>
										<li>
											<small>#459987</small>
										</li>
										<li>
											<a class="wm-dowmload" href="#"><i class="fa fa-download"></i>Download</a>
										</li>
									</ul>									
								</div>
								<div class="wm-article">
									<ul>
										<li class="wm-statement-start">
											<div class="wm-statement-started-text">
												<h6><a href="#">Medicines</a></h6>
												<span><a href="#" class="wmicon-tag"></a>Free</span>
												<span><a href="#" class="wmicon-time2"></a><time datetime="2017-02-14">5/04/2016 - 11/05/2016</time></span>																							
											</div>
										</li>
										<li>
											<small>#288756</small>
										</li>
										<li>
											<a class="wm-dowmload" href="#"><i class="fa fa-download"></i>Download</a>
										</li>
									</ul>									
								</div>
							</div>										
						</div>
					</div>
				</div>
        </div>
        <!--// Main Section \\-->
  <div class="wm-main-section">
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <div class="wm-filterable-link">
                            <ul>
                                <li><a href="#" data-filter="*" class="active">Latest Events</a></li>
                                <li><a href="#" data-filter=".php">Upcoming Events</a></li>
                                <li><a href="#" data-filter=".wordpress">Expired Events</a></li>
                            </ul>
                        </div>
                        <div class="wm-event wm-latest-event wm-filter-event">
                            <ul class="row">
                                <li class="col-md-3 php">
                                    <figure><a href="#"><img src="extra-images/latest-event-1.png" alt="">
                                            <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                    <div class="wm-latest-event-text">
                                        <h6><a href="#" class="wm-color">Out of This World: The Family Fun Day</a>
                                        </h6>
                                        <time datetime="2008-02-14 20:00">21/04/2016 <span><i class="wmicon-clock"></i>
                                                8:00am - 10:30am</span></time>
                                        <p>Join us for outer-space themed games, prizes, science & talks about careers in
                                            the UK.</p>
                                        <a href="#" class="wm-banner-btn">check event</a>
                                    </div>
                                </li>
                                <li class="col-md-3 php">
                                    <figure><a href="#"><img src="extra-images/latest-event-2.png" alt="">
                                            <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                    <div class="wm-latest-event-text">
                                        <h6><a href="#" class="wm-color">Shakespeare at Balliol in those five acts</a>
                                        </h6>
                                        <time datetime="2008-02-14 20:00">19/04/2016 <span><i class="wmicon-clock"></i>
                                                8:00am - 10:30am</span></time>
                                        <p>A.C. Bradley and J.C. Maxwell get down to serious criticism; another Balliol
                                            writer launches the.</p>
                                        <a href="#" class="wm-banner-btn">check event</a>
                                    </div>
                                </li>
                                <li class="col-md-3 wordpress">
                                    <figure><a href="#"><img src="extra-images/latest-event-3.jpg" alt="">
                                            <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                    <div class="wm-latest-event-text">
                                        <h6><a href="#" class="wm-color">Modern ephemera sit alongside 400-year-old
                                                rolls</a></h6>
                                        <time datetime="2008-02-14 20:00">18/04/2016 <span><i class="wmicon-clock"></i>
                                                9:00am - 11:00am</span></time>
                                        <p>Events listed here are open to every one. Whether you want to listen to a
                                            lecture, learn a new skill.</p>
                                        <a href="#" class="wm-banner-btn">check event</a>
                                    </div>
                                </li>
                                <li class="col-md-3 wordpress">
                                    <figure><a href="#"><img src="extra-images/latest-event-4.jpg" alt="">
                                            <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                    <div class="wm-latest-event-text">
                                        <h6><a href="#" class="wm-color">Bodleian's & uniquely displays these
                                                treasures</a></h6>
                                        <time datetime="2008-02-14 20:00">17/04/2016 <span><i class="wmicon-clock"></i>
                                                9:30am - 11:15am</span></time>
                                        <p>An exhibition, see a play staged by Oxford University students or attend one of
                                            our sporting events.</p>
                                        <a href="#" class="wm-banner-btn">check event</a>
                                    </div>
                                </li>
                                <li class="col-md-3 php">
                                    <figure><a href="#"><img src="extra-images/latest-event-5.jpg" alt="">
                                            <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                    <div class="wm-latest-event-text">
                                        <h6><a href="#" class="wm-color">Bodleian Treasures: 24 Pairs of Shoes</a>
                                        </h6>
                                        <time datetime="2008-02-14 20:00">16/04/2016 <span><i class="wmicon-clock"></i>
                                                8:00am - 10:30am</span></time>
                                        <p>If you're thinking about applying for an undergraduate degree at Enroll, please
                                            also see the information.</p>
                                        <a href="#" class="wm-banner-btn">check event</a>
                                    </div>
                                </li>
                                <li class="col-md-3 wordpress">
                                    <figure><a href="#"><img src="extra-images/latest-event-6.jpg" alt="">
                                            <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                    <div class="wm-latest-event-text">
                                        <h6><a href="#" class="wm-color">An exhibition displaying a large
                                                selection</a></h6>
                                        <time datetime="2008-02-14 20:00">15/04/2016 <span><i class="wmicon-clock"></i>
                                                8:00am - 10:30am</span></time>
                                        <p>Online and part-time courses at the University, as well as weekly classes, are
                                            offered at the Department.</p>
                                        <a href="#" class="wm-banner-btn">check event</a>
                                    </div>
                                </li>
                                <li class="col-md-3 php">
                                    <figure><a href="#"><img src="extra-images/latest-event-7.jpg" alt="">
                                            <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                    <div class="wm-latest-event-text">
                                        <h6><a href="#" class="wm-color">The exhibition presents some of the best of
                                                the 12 million</a></h6>
                                        <time datetime="2008-02-14 20:00">14/04/2016 <span><i class="wmicon-clock"></i>
                                                9:00am - 11:00am</span></time>
                                        <p>Leading researchers will present their latest projects and help us understand the
                                            unique and.</p>
                                        <a href="#" class="wm-banner-btn">check event</a>
                                    </div>
                                </li>
                                <li class="col-md-3 wordpress">
                                    <figure><a href="#"><img src="extra-images/latest-event-8.jpg" alt="">
                                            <span class="wm-event-transparent-hover wm-bgcolor"></span></a></figure>
                                    <div class="wm-latest-event-text">
                                        <h6><a href="#" class="wm-color">Rare books are joined together with
                                                manuscripts</a></h6>
                                        <time datetime="2008-02-14 20:00">13/04/2016 <span><i class="wmicon-clock"></i>
                                                9:30am - 11:15am</span></time>
                                        <p>We’ll explore how innovative research and multi-disciplinary can combine to
                                            support our global.</p>
                                        <a href="#" class="wm-banner-btn">check event</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="wm-pagination">
                            <ul>
                                <li><a href="#" aria-label="Previous"> <i class="wmicon-arrows4"></i> Previous</a>
                                </li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li>...</li>
                                <li><a href="#">18</a></li>
                                <li><a href="#" aria-label="Next"> <i class="wmicon-arrows4"></i> Next</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

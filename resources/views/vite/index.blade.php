<!DOCTYPE html>
<html lang="en" class="no-js">

<!-- Mirrored from lmpixels.com/demo/breezycv/darkfw/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2021 10:29:53 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BreezyCV - Resume / CV / vCard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="{{ asset('cv/favicon.ico') }}">


    <link rel="stylesheet" href="{{ asset('cv/css/reset.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cv/css/bootstrap-grid.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cv/css/animations.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cv/css/perfect-scrollbar.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cv/css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cv/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cv/css/main.css') }}" type="text/css">

    <script src="{{ asset('cv/js/modernizr.custom.js') }}"></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url({{ asset('cv/img/main_bg.png') }});"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    @foreach($profiles as $profile)
    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="{{ asset('profile_photo/'.$profile->photo) }}" alt="Alex Smith">
              </div>
              <div class="header-titles">
                <h2>{{ $profile->name }}</h2>
                <h4>{{ $profile->role }}</h4>
              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
            </ul>

              @foreach($socials as $social)
            <div class="social-links">
              <ul>
                <li><a href="{{ $social->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="{{ $social->facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{ $social->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="{{ $social->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </div>
              @endforeach

            <div class="header-buttons">
              <a href="#" target="_blank" class="btn btn-primary">Download CV</a>
            </div>

            <div class="copyrights">© 2020 All rights reserved.</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2>{{ $profile->name }}</h2>
                          <div class="owl-carousel text-rotation">
                            <div class="item">
                              <div class="sp-subtitle">{{ $profile->role }}</div>
                            </div>

                            <div class="item">
                              <div class="sp-subtitle">{{ $profile->role }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2>About <span>Me</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <p>{{ $profile->about }}</p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Age</span>
                            <span class="value">{{ $profile->age }}</span>
                          </li>

                          <li>
                            <span class="title">Residence</span>
                            <span class="value">{{ $profile->nation }}</span>
                          </li>

                          <li>
                            <span class="title">Address</span>
                            <span class="value">{{ $profile->address }}</span>
                          </li>

                          <li>
                            <span class="title">e-mail</span>
                            <span class="value">{{ $profile->email }}</span>
                          </li>

                          <li>
                            <span class="title">Phone</span>
                            <span class="value">{{ $profile->phone }}</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-50"></div>

                  <!-- Services -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>What <span>I Do</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-store"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Ecommerce</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-laptop-phone"></i>
                            </div><div class="ci-text">
                              <h4>Web Design</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-pencil"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Copywriting</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-flag"></i>
                            </div><div class="ci-text">
                              <h4>Management</h4>
                              <p>Pellentesque pellentesque, ipsum sit amet auctor accumsan, odio tortor bibendum massa, sit amet ultricies ex lectus scelerisque nibh. Ut non sodales.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Services -->

                  <div class="white-space-30"></div>

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Resume</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Education</h3>
                      </div>
                        @foreach($educations as $edu)
                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">{{ $edu->year_start }}</h5>
                            <span class="item-company">{{ $edu->name }}</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                              @if($edu->grade == 1)
                                  <h4 class="item-title">Elementary School</h4>
                              @elseif($edu->grade == 2)
                                  <h4 class="item-title">Junior High School</h4>
                              @elseif($edu->grade == 3)
                                  <h4 class="item-title">Senior High School</h4>
                              @elseif($edu->grade == 3)
                                  <h4 class="item-title">University</h4>
                              @endif
                            <p>{{ $edu->descriptions }}</p>
                          </div>
                        </div>
                      </div>
                        @endforeach

                      <div class="white-space-50"></div>

                      <div class="block-title">
                        <h3>Experience</h3>
                      </div>

                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2016 - Current</h5>
                            <span class="item-company">Google</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Lead Ui/Ux Designer</h4>
                            <p>Praesent dignissim sollicitudin justo, sed elementum quam lacinia quis. Phasellus eleifend tristique posuere. Sed vitae dui nec magna.</p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2013 - 2016</h5>
                            <span class="item-company">Adobe</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Senior Ui/Ux Designer</h4>
                            <p>Maecenas tempus faucibus rutrum. Duis eu aliquam urna. Proin vitae nulla tristique, ornare felis id, congue libero. Nam volutpat euismod quam.</p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2011 - 2013</h5>
                            <span class="item-company">Google</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">Junior Ui/Ux Designer</h4>
                            <p>Duis mollis nunc quis quam viverra venenatis. Nulla nulla arcu, congue vitae nunc ac, sodales ultricies diam. Nullam justo leo, tincidunt sit amet.</p>
                          </div>
                        </div>
                      </div>

                    </div>

                    <!-- Skills & Certificates -->
                    <div class="col-xs-12 col-sm-5">
                      <!-- Design Skills -->
                      <div class="block-title">
                        <h3>Design <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 1 -->
                        <div class="skill clearfix">
                          <h4>Web Design</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-1">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 1 -->

                        <!-- Skill 2 -->
                        <div class="skill clearfix">
                          <h4>Print Design</h4>
                          <div class="skill-value">65%</div>
                        </div>
                        <div class="skill-container skill-2">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 2 -->

                        <!-- Skill 3 -->
                        <div class="skill clearfix">
                          <h4>Logo Design</h4>
                          <div class="skill-value">80%</div>
                        </div>
                        <div class="skill-container skill-3">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 3 -->

                        <!-- Skill 4 -->
                        <div class="skill clearfix">
                          <h4>Graphic Design</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-4">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 4 -->

                      </div>
                      <!-- End of Design Skills -->

                      <div class="white-space-10"></div>

                      <!-- Coding Skills -->
                      <div class="block-title">
                        <h3>Coding <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 5 -->
                        <div class="skill clearfix">
                          <h4>JavaScript</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 5 -->

                        <!-- Skill 6 -->
                        <div class="skill clearfix">
                          <h4>PHP</h4>
                          <div class="skill-value">85%</div>
                        </div>
                        <div class="skill-container skill-6">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 6 -->

                        <!-- Skill 7 -->
                        <div class="skill clearfix">
                          <h4>HTML/CSS</h4>
                          <div class="skill-value">100%</div>
                        </div>
                        <div class="skill-container skill-7">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 7 -->

                        <!-- Skill 8 -->
                        <div class="skill clearfix">
                          <h4>Smarty/Twig</h4>
                          <div class="skill-value">75%</div>
                        </div>
                        <div class="skill-container skill-8">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 8 -->

                        <!-- Skill 9 -->
                        <div class="skill clearfix">
                          <h4>Perl</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-9">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 9 -->
                      </div>
                      <!-- End of Coding Skills -->

                      <div class="white-space-10"></div>

                      <!-- Knowledges -->
                      <div class="block-title">
                        <h3>Knowledges</h3>
                      </div>

                      <ul class="knowledges">
                        <li>Marketing</li>
                        <li>Print</li>
                        <li>Digital Design</li>
                        <li>Social Media</li>
                        <li>Time Management</li>
                        <li>Communication</li>
                        <li>Problem-Solving</li>
                        <li>Social Networking</li>
                        <li>Flexibility</li>
                      </ul>
                      <!-- End of Knowledges -->
                    </div>
                    <!-- End of Skills & Certificates -->
                  </div>

                  <div class="white-space-50"></div>

                  <!-- Certificates -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Certificates</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <!-- Certificate 1 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="{{ asset('cv/img/clients/client-1.png') }}" alt="logo">
                        </div>

                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Psyhology of Intertnation Design</h4>
                          </div>
                          <div class="certi-id">
                            <span>Membership ID: XXXX</span>
                          </div>
                          <div class="certi-date">
                            <span>19 April 2018</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 1 -->

                    <!-- Certificate 2 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="{{ asset('cv/img/clients/client-1.png') }}" alt="logo">
                        </div>

                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Psyhology of Intertnation Design</h4>
                          </div>
                          <div class="certi-id">
                            <span>Membership ID: XXXX</span>
                          </div>
                          <div class="certi-date">
                            <span>19 April 2018</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 2 -->

                  </div>
                  <!-- End of Certificates -->
                </div>
              </section>
              <!-- End of Resume Subpage -->

              <!-- Portfolio Subpage -->
              <section data-id="portfolio" class="animated-section">
                <div class="page-title">
                  <h2>Portfolio</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_detailed">Detailed</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_mockups">Mockups</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_soundcloud">SoundCloud</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_vimeo-videos">Vimeo Videos</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>
                          </li>
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid three-columns">

                          <figure class="item lbaudio" data-groups='["category_all", "category_soundcloud"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('cv/img/portfolio/1.jpg') }}" alt="SoundCloud Audio" title="" />
                              <a href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/221650664&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true" class="lightbox mfp-iframe" title="SoundCloud Audio"></a>
                            </div>

                            <i class="fa fa-volume-up"></i>
                            <h4 class="name">SoundCloud Audio</h4>
                            <span class="category">SoundCloud</span>
                          </figure>

                          <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('cv/img/portfolio/2.jpg') }}" alt="Media Project 2" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Detailed Project 2</h4>
                            <span class="category">Detailed</span>
                          </figure>

                          <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('cv/img/portfolio/3.jpg') }}" alt="Vimeo Video 1" title="" />
                              <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">Vimeo Video 1</h4>
                            <span class="category">Vimeo Videos</span>
                          </figure>

                          <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('cv/img/portfolio/4.jpg') }}" alt="Media Project 1" title="" />
                              <a href="portfolio-1.html" class="ajax-page-load"></a>
                            </div>

                            <i class="far fa-file-alt"></i>
                            <h4 class="name">Detailed Project 1</h4>
                            <span class="category">Detailed</span>
                          </figure>

                          <figure class="item lbimage" data-groups='["category_all", "category_mockups"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('cv/img/portfolio/5.jpg') }}" alt="Mockup Design 1" title="" />
                              <a class="lightbox" title="Mockup Design 1" href="img/portfolio/full/5.jpg"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">Mockup Design 1</h4>
                            <span class="category">Mockups</span>
                          </figure>

                          <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('cv/img/portfolio/6.jpg') }}" alt="YouTube Video 1" title="" />
                              <a href="https://www.youtube.com/embed/bg0gv2YpIok" class="lightbox mfp-iframe" title="YouTube Video 1"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">YouTube Video 1</h4>
                            <span class="category">YouTube Videos</span>
                          </figure>
                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              <!-- Blog Subpage -->
              <section data-id="blog" class="animated-section">
                <div class="page-title">
                  <h2>Blog</h2>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="blog-masonry two-columns clearfix">

                        <!-- Blog Post 1 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_1.jpg" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">05 Mar 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 1 -->

                        <!-- Blog Post 2 -->
                        <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in UI">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_2.jpg" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">23 Feb 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 2 -->

                        <!-- Blog Post 3 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_3.jpg" class="size-blog-masonry-image-two-c" alt="Designing the Perfect Feature Comparison Table" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Feb 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 3 -->

                        <!-- Blog Post 4 -->
                        <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in E-Commerce">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_4.jpg" class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">07 Jan 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 4 -->
                      </div>
                    </div>
                  </div>
                </div>


              </section>
              <!-- End of Blog Subpage -->

              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>Contact</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>Surabaya</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>082225950655</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4>tnybaskoro@gmail.com</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>Freelance Available</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      <div id="map" class="map"></div>
                      <div class="block-title">
                        <h3>How Can I <span>Help You?</span></h3>
                      </div>

                      <form id="contact_form" class="contact-form" action="https://lmpixels.com/demo/breezycv/darkfw/1/contact_form/contact_form.php" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Full Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                <label>Email Address</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                                <label>Subject</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <label>Message</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI" data-theme="dark"></div>

                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                    <!-- End of Contact Form -->
                  </div>

                </div>
              </section>
              <!-- End of Contact Subpage -->
            </div>
          </div>

      </div>
    </div>
    @endforeach

    <script data-cfasync="false" src="{{ asset('cv/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="{{ asset('cv/js/jquery-2.1.3.min.js') }}"></script>
    <script src="{{ asset('cv/js/modernizr.custom.js') }}"></script>
    <script src="{{ asset('cv/js/animating.js') }}"></script>

    <script src="{{ asset('cv/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src='{{ asset('cv/www.google.com/recaptcha/api.js') }}'></script>

    <script src='{{ asset('cv/js/perfect-scrollbar.min.js') }}'></script>
    <script src='{{ asset('cv/js/jquery.shuffle.min.js') }}'></script>
    <script src='{{ asset('cv/js/masonry.pkgd.min.js') }}'></script>
    <script src='{{ asset('cv/js/owl.carousel.min.js') }}'></script>
    <script src="{{ asset('cv/js/jquery.magnific-popup.min.js') }}"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="{{ asset('cv/js/jquery.googlemap.js') }}"></script>
    <script src="{{ asset('cv/js/validator.js') }}"></script>
    <script src="{{ asset('cv/js/main.js') }}"></script>
  </body>

<!-- Mirrored from lmpixels.com/demo/breezycv/darkfw/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 23 Jan 2021 10:30:21 GMT -->
</html>

@include('sites.layouts.header')
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(/img/background/page-title-1.jpg);">
        <div class="auto-container">
            <h1>Product Details Page</h1>
            
            <ul class="bread-crumb">
            	<li><a href="index-1.html">Home</a></li>
                <li><a href="#">Shop</a></li>
                <li><a href="#">Single Product Page</a></li>
            </ul>
            
        </div>
        
        <!--Go Down Button-->
        <div class="go-down">
            <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
        </div>
        
    </section>
    
    <!--Sidebar Section-->
    <div class="sidebar-section no-bg" id="sidebar-section">
    	
        <div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side-->
                <div class="col-md-9 col-sm-8 col-xs-12 content-side pull-right">
    				<!--Services Section-->
                    <!-- .product-details-page-content -->
                    <div class="product-details-page-content">
                        
                        <div class="row product-details-box">
                            <div class="col-lg-12 img-holder">
                                <form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
                                    @csrf
                                    <!-- /.box-header -->
                                    <div class="form-group">
                                        <label for="avatar">Avatar:</label>
                                        <input type="file" accept="image/*" onchange="loadFile(event)" id="avatar" name="avatar">
                                        <img id="output" />
                                        <script>
                                          var loadFile = function(event) {
                                            var output = document.getElementById('output');
                                            output.src = URL.createObjectURL(event.target.files[0]);
                                          };
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <textarea class="form-control" rows="4" id="title" name="title"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="comment">Sologan:</label>
                                        <textarea class="form-control" rows="4" id="comment" name="sologan"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="comment">Content:</label>
                                        <textarea name="content" style="height: 400px" id="content">
                                
                                        </textarea>
                                    </div>
                                        
                                    <button class="btn btn-primary" style="margin-top: 30px"> Submit </button>
                                </form>
                            </div>
                        </div>
                        

                    </div> <!-- /.product-details-page-content -->
                </div>
                
                
                <!--Sidebar-->
                <div class="col-md-3 col-sm-4 col-xs-12 pull-left">
                	<aside class="sidebar">
                    	
                        <!-- Search Form -->
                        <div class="widget search-form">
                        	<h3>Search</h3>
                            
                            <form method="post" action="http://vision.to/garden-plant/blog.html">
                                <div class="form-group">
                                    <input type="search" name="search" value="" placeholder="Search">
                                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                                </div>
                            </form>
                            
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="sidebar-title"><h3>Recent Posts</h3></div>
                            
                            <div class="post">
                                <div class="post-thumb"><a href="#"><img src="/img/resource/thumb-1.jpg" alt=""></a></div>
                                <h4><a href="#">Fusce in odio ac diam finibus tempus.</a></h4>
                            </div>
                            
                             <div class="post">
                                <div class="post-thumb"><a href="#"><img src="/img/resource/thumb-2.jpg" alt=""></a></div>
                                <h4><a href="#">Massa sem dignissim elit: Sit amet cursus massa</a></h4>
                            </div>
                            
                             <div class="post">
                                <div class="post-thumb"><a href="#"><img src="/img/resource/thumb-3.jpg" alt=""></a></div>
                                <h4><a href="#">Ellentesque non laoreet risus, id elementum purus. </a></h4>
                            </div>
                            
                        </div>
                        
                        <!--Categories-->
                        <div class="widget links-widget">
                        	<h3>CATEGORIES</h3>
                            <ul>
                            	<li><a href="#">Logistics Management</a></li>
                                <li><a href="#">Cargo Transport</a></li>
                                <li><a href="#">Chain Supply Management</a></li>
                                <li><a href="#">Warehouse</a></li>
                                <li><a href="#">Distribution Network</a></li>
                            </ul>
                        </div>
                        
                        
                        <!--Links Widget-->
                        <div class="widget popular-tags">
                        	<h3>popular Tags</h3>
                            <div class="tags">
                            	<a href="#">transport</a>
                                <a href="#">Frieght</a>
                                <a href="#">Warehouse</a>
                                <a href="#">Logistics</a>
                                <a href="#">Cargo</a>
                                <a href="#">GARDEN CARE</a>
                                <a href="#">Warehouse</a>
                                <a href="#">Security</a>
                            </div>
                        </div>
                        
                        
                        <!--Reviews Widget-->
                        <div class="widget review-widget">
                        	<h3>Testimonials</h3>
                        	<!--Testimonials Slider-->
                            <div class="testimonial-slider">
                                <div class="slider">
                                    
                                    <article class="slide-item">
                                        <div class="slide-content">
                                            <p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris ultricies nisi eget velit bibendum, sit amet euismod mi gravida.”</p>
                                        </div>
                                        <div class="slide-info">
                                            <figure class="author-thumb img-circle"><a href="#"><img class="img-circle" src="/img/resource/author-thumb-2.jpg" alt=""></a></figure>
                                            <div class="author-info">
                                                <h5>William Perez</h5>
                                                <p>Melbourne</p>
                                            </div>
                                        </div>
                                    </article>
                                    
                                    <article class="slide-item">
                                        <div class="slide-content">
                                            <p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris, sit amet euismod mi gravida.”</p>
                                        </div>
                                        <div class="slide-info">
                                            <figure class="author-thumb img-circle"><a href="#"><img class="img-circle" src="/img/resource/author-thumb-3.jpg" alt=""></a></figure>
                                            <div class="author-info">
                                                <h5>Sara Millin</h5>
                                                <p>Melbourne</p>
                                            </div>
                                        </div>
                                    </article>
                                    
                                    <article class="slide-item">
                                        <div class="slide-content">
                                            <p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. Cras quis consequat nisl, at malesuada sapien. Mauris ultricies nisi eget velit bibendum, sit gravida.”</p>
                                        </div>
                                        <div class="slide-info">
                                            <figure class="author-thumb img-circle"><a href="#"><img class="img-circle" src="/img/resource/author-thumb-2.jpg" alt=""></a></figure>
                                            <div class="author-info">
                                                <h5>William Perez</h5>
                                                <p>Melbourne</p>
                                            </div>
                                        </div>
                                    </article>
                                    
                                    <article class="slide-item">
                                        <div class="slide-content">
                                            <p>“Pellentesque a massa risus. Cras convallis finibus porta. Integer in ligula leo. velit bibendum, sit amet euismod mi gravida. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.”</p>
                                        </div>
                                        <div class="slide-info">
                                            <figure class="author-thumb img-circle"><a href="#"><img class="img-circle" src="/img/resource/author-thumb-3.jpg" alt=""></a></figure>
                                            <div class="author-info">
                                                <h5>Sara Millin</h5>
                                                <p>Melbourne</p>
                                            </div>
                                        </div>
                                    </article>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                    </aside>
                </div>
                
    		</div>
        </div>
    </div>
    
    
    <!--Main Footer-->
    <footer class="main-footer">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
        	<!--Go Up Button-->
            <div class="go-up">
            	<div class="curve scroll-to-target" data-target="#main-header"><span class="icon fa fa-arrow-up"></span></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget about-widget">
                            <h2>About GARDEN PLATN</h2>
                            <div class="text">
                                <p>Phasellus at quam tristique, cursus tellus vitae, convallis neque. Sed a lacinia sapien. Etiam dignissim sit amet felis ac sagittis. Sed libero arcu, pharetra et ante in elementum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae.</p>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget links">
                            <h2>Useful Links</h2>   
                            <ul>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Services</a></li>
                                <li><a href="#">Garden &amp; Care Guide</a></li>
                                <li><a href="#">Special Services</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget twitter-feed">
                            <h2>Twitter Feed</h2>
                            <div class="twitter" 
                                data-twitter-query-count="3" 
                                data-twitter-name="envato" 
                                data-slide-count="2" 
                                data-enable-slide="true">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 column">
                        <div class="footer-widget newsletter-widget">
                            <h2>Newsletter Subscribe</h2>
                            <div class="text"><p>Vivamus consequat, felis at aliquam elementum, massa sem dignissim elit, sit amet cursus massa tortor eget ante.</p>
                            </div>
                            <br>                            
                            <div class="form-box">
                                <form method="post" action="http://vision.to/garden-plant/index-1.html">
                                    <div class="form-group">
                                        <input type="email" name="email" value="" placeholder="Enter your email here..." required>                                                
                                        <button type="submit" class="btn-submit"><span class="icon fa fa-long-arrow-right"></span></button>
                                    </div>
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="contact-info">
                        <ul>
                            <li><div class="info-title"><span class="fa fa-phone"></span> Call Us Anytime</div><p class="info">(+064)-342-68372</p></li>
                            <li><div class="info-title"><span class="fa fa-clock-o"></span> Opening Hours</div><p class="info">8:00 am - 6:00 pm</p></li>
                            <li><div class="info-title"><span class="fa fa-at"></span> Email Us At</div><p class="info"><a href="mailto:info@garden-care.com">info@garden-care.com</a></p></li>
                        </ul>
                    </div>                
                </div>
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
                <!--Copyright-->
                <div class="copyright">2016 &copy; Garden-Plants Service. </div>
                <div class="social-links">
                    <a href="#" class="icon fa fa-facebook-f"></a>
                    <a href="#" class="icon fa fa-twitter"></a>
                    <a href="#" class="icon fa fa-pinterest"></a>
                    <a href="#" class="icon fa fa-youtube-play"></a>
                    <a href="#" class="icon fa fa-envelope"></a>
                </div>
            </div>
        </div>
        
    </footer>
    
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="#main-header"><span class="fa fa-arrow-up"></span></div>

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/revolution.min.js"></script>
<script src="/js/js-collection.js"></script>
<script src="/js/script.js"></script>


<script src="{{ asset('js/app.js') }}"></script>
<script src='https://devpreview.tiny.cloud/demo/tinymce.min.js'></script>
<meta name="csrf-token" content="{{ csrf_token() }}">

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script type="text/javascript">
    tinymce.init({
      selector: '#content',
      plugins: 'image code',
      toolbar: 'undo redo | image code',
      images_upload_handler: function (blobInfo, success, failure) {
           var xhr, formData;
           xhr = new XMLHttpRequest();
           xhr.withCredentials = false;
           xhr.open('POST', '/articles/uploadImage');
           var token = '{{ csrf_token() }}';
           xhr.setRequestHeader("X-CSRF-Token", token);
           xhr.onload = function() {
               var json;
               if (xhr.status != 200) {
                   failure('HTTP Error: ' + xhr.status);
                   return;
               }
               json = JSON.parse(xhr.responseText);

               if (!json || typeof json.location != 'string') {
                   failure('Invalid JSON: ' + xhr.responseText);
                   return;
               }
               success(json.location);
           };
           formData = new FormData();
           formData.append('file', blobInfo.blob(), blobInfo.filename());
           xhr.send(formData);
       }
    });
</script>

</body>

<!-- Mirrored from vision.to/garden-plant/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 May 2018 04:54:40 GMT -->
</html>

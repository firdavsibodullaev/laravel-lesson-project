<div id="fh5co-offcanvas">
    <a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
    <div class="fh5co-bio">
        <figure>
            <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive">
        </figure>
        <h3 class="heading">About Me</h3>
        <h2>Emily Tran Le</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
        <ul class="fh5co-social">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook"></i></a></li>
            <li><a href="#"><i class="icon-instagram"></i></a></li>
        </ul>
    </div>
    <div class="fh5co-menu">
        <div class="fh5co-box">
            <h3 class="heading">Categories</h3>
            <ul>
                @foreach($categories as $category)
                <li><a href="{{route('frontend.index', ['category' => $category->id])}}">{{$category->title}}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="fh5co-box">
            <h3 class="heading">Search</h3>
            <form action="#">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Type a keyword">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- END #fh5co-offcanvas -->
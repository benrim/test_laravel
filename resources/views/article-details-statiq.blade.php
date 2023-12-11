@extends('layouts.main')

@section('content')
<div>  
    <div class="title-article-details">
        <h1>A few words about this blog platform, Ghost, and how this site was made</h1>
    </div>
    <div class="banner-description-article-details">
        <p>Why Ghost (& Figma) instead of Medium, WordPress or other options?</p>
    </div>
    <div class="banner-article-details">
        <img src="{{ asset('img/banner.png') }}" alt="Bannière">
    </div>
 </div>
 <div class="article-details">
    <div>
        <div class="author-section section-border">
           <div class="author-info">
             <div class="author-img">
                <img src="{{ asset('img/auther.png') }}" alt="">
             </div>
             <div>
                <div class="author-name">
                  <p >Mika MAtikainen</p>
                </div>
                <div class="blog-date">
                   <p >Apr 15, 2020 · 4 min read</p>
                </div>
              </div> 
            </div>
            <div class="author-section-rs">
                <div >
                    <img src="{{ asset('img/iconfb.png') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('img/icontwitter.png') }}" alt="">
                </div>   
            </div>
        </div>
        <div class="article-content">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu velit tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce a nunc eget ligula suscipit finibus. Aenean pharetra quis lacus at viverra. 
            </p>
            <p>
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis posuere ligula. In eu dui molestie, molestie lectus eu, semper lectus. 
            </p>
            <h2>Next on the pipeline</h2>
            <p>
            Duis eu velit tempus erat egestas efficitur. In hac habitasse platea dictumst. Fusce a nunc eget ligula suscipit finibus. Aenean pharetra quis lacus at viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. 
            </p>
            <p>
            Morbi efficitur auctor metus, id mollis lorem pellentesque id. Nullam posuere maximus dui et fringilla. 
            </p>
        </div>  
    </div>
    
   </div>
        <div class="blog-img">
            <img src="{{ asset('img/blog-img.png') }}" alt="">
            <p>Image caption centered this way and I’ll make this a bit longer </br> to indicate the amount of line-height. </p>
        </div>
   </div>
   <div class="article-details">
    <div >
        
            <div class="article-content">
            <p>
             Aenean pharetra quis lacus at viverra. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis posuere ligula. 
            </p>
            <p>
            In eu dui molestie, molestie lectus eu, semper lectus. Proin at justo lacinia, auctor nisl et, consequat ante. Donec sit amet nisi arcu. Morbi efficitur auctor metus, id mollis lorem pellentesque id. Nullam posuere maximus dui et fringilla. Nulla non volutpat leo. 
            </p>
            <p>
            A list looks like this:
            </p>
            <p>
            First item in the list</br> 
            Second item in the list lorem ipsum dolor sit amet nunc felis dolor lorem ipsum sit amet</br>
            Third item in the list
            </p>
            <p>
            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam quis posuere ligula. 
            </p>
            <p>Thanks for reading,
             Mika
            </p>
            <div class="rs-article-content">
                <div>
                    <img src="{{ asset('img/iconfb.png') }}" alt="">
                    <p>Share on Facebook</p>
                </div>
                <div>
                    <img src="{{ asset('img/icontwitter.png') }}" alt="">
                    <p>Share on Facebook</p>
                </div> 
           </div>
           <div>
             tags:
             <a href="#">product design</a>, <a href="#"> culture</a>
           </div>
           
           <div class="auther-descrip">
              <div class="auther-descrip-img">
                <img src="{{ asset('img/auther.png') }}" alt="">
             </div>
             <div class="auther-descrip-p">
                <p> <span class="name-bold">Mika Matikainen </span>Mika Matikainen is a Design Founder & Advisor, Berlin School of Creative Leadership Executive MBA participant, Zippie advisor, Wolt co-founder, and Nordic Rose stakeholder.  </p>
             </div>
          </div>
           </div>
           
        
    </div>
    
</div>
<div class="section-divider">
    <div class="divider-content">
        <img src="{{ asset('img/eyes.png') }}" alt="">
    </div>
</div>
<div class="title-other-blog">
        <h1>What to read next</h1>
</div>
<div class="other-blog">
    
    <div class="other-blog-img">
    <img src="{{ asset('img/article2.png') }}" alt="">
    <p>Connecting artificial intelligence with digital product design</p>
    </div>
    <div class="other-blog-img">
    <img src="{{ asset('img/article3.png') }}" alt="">
    <p>Hello world, or, in other words, why this blog exists</p>
    </div>
    <div class="other-blog-img">
    <img src="{{ asset('img/article1.png') }}" alt="">
    <p>Here are some things you should know regarding how we work </p>
    </div>
    <div class="other-blog-img">
    <img src="{{ asset('img/article4.png') }}" alt="">
    <p>A few words about this blog platform, Ghost, and how this site was made</p>
    </div>
    <div class="other-blog-img">
    <img src="{{ asset('img/article5.png') }}" alt="">
    <p>Updating list of 50+ sources on distributed teams, remote work, and how to make it all work better</p>
    </div>
    <div class="other-blog-img">
    <img src="{{ asset('img/article12.png') }}" alt="">
    <p>How modern remote working tools get along with Old School Cowboy's methods</p>
    </div>

</div>
<div class="newsletter">
    <h1>Sign up for the newsletter</h1>
    <p>If you want relevant updates occasionally, sign up for the private newsletter. Your email is never shared.</p>
    <div class="signup-container">
        <input type="text" placeholder="Enter your email...">
        <button type="submit">SIGN UP</button>
    </div>
</div>



@endsection

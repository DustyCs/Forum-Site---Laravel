<x-head/>
<body>
    <div class="container">
        <div class="main-segment">
            <div class="logo-profile">
                <div class="logo">
                   <h1>Forum Site</h1>
                </div>
                <div class="user-profile">
                    <div class="user-photo-name">
                        <div class="user-photo">
                            <img src="../images/Anon.png">
                        </div>
                        <div class="user-name">
                            <h3>John Doe</h3>
                        </div>
                    </div>
                    <div class="user-border"><div class="small-border"></div></div>
                    <div class="user-recent-activities">
                        <div class="small-title">
                            Recent Activies
                        </div>
                        <div class="recent-activity-container">
                            <div class="recent-activity"><a href="{{ url('/Forum/show') }}">Why you should do this</a></div>
                            <div class="recent-activity"><a href="{{ url('/Forum/show') }}">The time has come</a></div>
                            <div class="recent-activity"><a href="{{ url('/Forum/show') }}">Check this out!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="forum-posts">
                <div class="posts">
                    @for ($i = 0; $i < 10; $i++)  
                        <div class="post">          
                            <div class="post-title">
                            <h4>Why you should do this</h4>  
                            </div>
                            <div class="post-description">
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur, vero! Quia laborum aperiam natus sint!</p>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        <div class="side-segment index-side">
            <div class="previous-posts">
                <div class="side-title">Latest Posts</div>
                <div class="previous-post"></div>
            </div>
        </div>
    </div>
</body>
</html>
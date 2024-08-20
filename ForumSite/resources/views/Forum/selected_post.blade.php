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
                            <div class="recent-activity"><a href="">Why you should do this</a></div>
                            <div class="recent-activity"><a href="">The time has come</a></div>
                            <div class="recent-activity"><a href="">Check this out!</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="selected-post">
                <div class="post-container">
                    <div class="post-title">
                        <h4>{{ dd($forum_post) }} 1</h4>
                    </div>
                    <div class="post-description">
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima odio consequatur optio exercitationem soluta porro id dolore magni a dignissimos numquam animi hic doloribus, eum at neque eaque, accusantium incidunt!</p>
                    </div>
                    <div class="post-photo">img not found</div>
                </div>
            </div>
            <div class="user-comments">
                <div class="comment-container">
                    <div class="user-comment">
                        <div class="user-comment-profile-photo"><img src="../images/Anon.png"></div>
                        <div class="user-comment-text"><p>Hello World Lorem....</p></div>
                    </div>
                    <div class="user-comment">
                        <div class="user-comment-profile-photo"><img src="../images/Anon.png"></div>
                        <div class="user-comment-text"><p>Hello World Lorem....</p></div>
                    </div>
                    <div class="user-comment">
                        <div class="user-comment-profile-photo"><img src="../images/Anon.png"></div>
                        <div class="user-comment-text"><p>Hello World Lorem....</p></div>
                    </div>
                    <div class="user-comment">
                        <div class="user-comment-profile-photo"><img src="../images/Anon.png"></div>
                        <div class="user-comment-text"><p>Hello World Lorem....</p></div>
                    </div>
                </div> 
            </div>
        </div>
        <div class="side-segment">
            <div class="previous-posts">
                <div class="side-title">Previous Posts</div>
                <div class="previous-post"></div>
            </div>
        </div>
    </div>
</body>
</html>
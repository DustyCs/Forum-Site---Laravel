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
                    {{--
                    @for ($i = 0; $i < 10; $i++)  
                        <div class="post">          
                            <div class="post-title">
                            <h4>{{ $posts[$i]['title'] }}</h4>  
                            </div>
                            <div class="post-description">
                                <p>{{ $posts[$i]['description'] }}</p> 
                                @php $test = 'Hello World'  @endphp
                                <a href="{{ route('Forum.show', $test) }}" class="note-edit-button">View</a> {{-- works finally the route but now its not passing any data...--}}
                                {{-- {{ dd($posts) }} 
                            </div>
                        </div>
                    @endfor
                    --}}
                    {{-- Switching to Foreach --}}
                    @foreach ($posts as $post)  
                        <div class="post">          
                            <div class="post-title">
                            <h4>{{ $post->title }}</h4>  {{-- Okay so $post['title'] does the same thing as $post->title --}}
                            </div>
                            <div class="post-description">
                                <p>{{ $post['description'] }}</p> 
                                {{ get_class($post) }}
                                <a href="{{ route('Forum.show', $post) }}" class="note-edit-button">View</a> {{-- works finally the route but now its not passing any data...--}}
                                {{-- {{ dd($posts) }} --}}
                            </div>
                        </div>
                    @endforeach
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
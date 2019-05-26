<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item ">
      <a class="nav-link create-post has-gradient-green text-white" href="{{url('/kontributor/posts/create')}}">
        <i class="material-icons text-white">create</i>
        <p>Create Posts</p>
      </a>
    </li>
    <li class="nav-item dashboard">
      <a class="nav-link" href="{{url('/kontributor/dashboard')}}">
        <i class="material-icons">dashboard</i>
        <p>Dashboard Kontributor</p>
      </a>
    </li>
    <li class="nav-item posts">
      <a class="nav-link" href="{{url('/kontributor/posts')}}">
      <img src="{{asset('/assets/img/blog.svg')}}">
        <p>Posts</p>
      </a>
    </li>
    <li class="nav-item archive">
      <a class="nav-link" href="{{url('/kontributor/archives')}}">
        <img src="{{asset('/assets/img/checking.svg')}}">
        <p>Archive</p>
      </a>
    </li>
    <li class="nav-item trash">
      <a class="nav-link" href="{{url('/kontributor/trash')}}">
        <img src="{{asset('/assets/img/recycle-bin.svg')}}">
        <p>Trash</p>
      </a>
    </li>
    <li class="nav-item settings">
      <a class="nav-link" href="{{url('/kontributor/settings')}}">
        <img src="{{asset('/assets/img/gear.svg')}}">
        <p>Settings</p>
      </a>
    </li>
    <li class="nav-item logout">
      <a class="nav-link" href="{{url('/keluar')}}">
        <p>Logout</p>
      </a>
    </li>
  </ul>
</div>

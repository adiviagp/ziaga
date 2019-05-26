<div class="sidebar-wrapper">
  <ul class="nav">
    <li class="nav-item ">
      <a class="nav-link create-post has-gradient-green text-white" href="{{url('/bnpb/posts/create')}}">
        <i class="material-icons text-white">create</i>
        <p>Create Posts</p>
      </a>
    </li>
    <li class="nav-item dashboard">
      <a class="nav-link" href="{{url('/bnpb/dashboard')}}">
        <i class="material-icons">dashboard</i>
        <p>Dashboard Admin</p>
      </a>
    </li>
    <li class="nav-item contributors">
      <a href="{{url('/bnpb/kontributor')}}" class="nav-link">
      <img src="{{asset('/assets/img/user.svg')}}">
      <p>Contributors</p>
      </a>
    </li>
    <li class="nav-item pending-posts">
      <a class="nav-link" href="{{url('/bnpb/pending-posts')}}">
      <img src="{{asset('/assets/img/blog.svg')}}">
        <p>Pending Posts</p>
      </a>
    </li>
    <li class="nav-item posts">
      <a class="nav-link" href="{{url('/bnpb/posts')}}">
      <img src="{{asset('/assets/img/blog.svg')}}">
        <p>Published Posts</p>
      </a>
    </li>
    <li class="nav-item category">
      <a class="nav-link" href="{{url('/bnpb/kategori')}}">
      <img src="{{asset('/assets/img/tag.svg')}}">
        <p>Category</p>
      </a>
    </li>
    <li class="nav-item archive">
      <a class="nav-link" href="{{url('/bnpb/archives')}}">
        <img src="{{asset('/assets/img/checking.svg')}}">
        <p>Archive</p>
      </a>
    </li>
    <li class="nav-item trash">
      <a class="nav-link" href="{{url('/bnpb/trash')}}">
        <img src="{{asset('/assets/img/recycle-bin.svg')}}">
        <p>Trash</p>
      </a>
    </li>
    <li class="nav-item settings">
      <a class="nav-link" href="{{url('/bnpb/settings')}}">
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

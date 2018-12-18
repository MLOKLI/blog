@foreach ($categories as $category)
  @if ($category->children->where('published', 1)->count())
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> {{$category->title}} </a>
    <ul class="dropdown-menu" role="menu">
      @include('layouts.top_menu', [
        'categories' => $category->children
      ])
    </ul>
  </li>
  @else
  <li>
    <a href="{{url("/blog/сategory/$category->slug")}}">{{$category->title}}</a>
  </li>
  @endif
@endforeach

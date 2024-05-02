<div class="left_content">
    <div class="title_box">Categories</div>
    <ul class="left_menu">
        @foreach ( $categories as $category )
        <li class="odd"><a href="{{ route('product_category', $category) }}">{{ $category->name }}</a></li>
        @endforeach


    </ul>
    


  </div>



<div style="background-color: black; padding: 10px 0; display: flex; justify-content: center; gap: 20px; align-items: center;">
    <!-- Link "Tất cả" -->
    <a href="{{ route('category.list') }}"
        style="color: {{ request()->routeIs('category.list') ? 'gray' : 'white' }}; text-decoration: none; font-size: 16px; cursor: pointer; transition: transform 0.3s ease, color 0.3s ease;"
        onmouseover="this.style.color='gray'; this.style.transform='scale(1.1)';"
        onmouseout="this.style.color='{{ request()->routeIs('category.list') ? 'gray' : 'white' }}'; this.style.transform='scale(1)';">
        Tất cả
    </a>

    @foreach ($categories as $category)
    <a href="{{ route('category.show', $category->id) }}"
        style="color: {{ request()->is('category/'.$category->id) ? 'gray' : 'white' }}; text-decoration: none; font-size: 16px; cursor: pointer; transition: transform 0.3s ease, color 0.3s ease;"
        onmouseover="this.style.color='gray'; this.style.transform='scale(1.1)';"
        onmouseout="this.style.color='{{ request()->is('category/'.$category->id) ? 'gray' : 'white' }}'; this.style.transform='scale(1)';">
        {{ $category->name }}
    </a>
    @endforeach
</div>
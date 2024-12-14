<div style="background-color: black; padding: 10px 0; display: flex; justify-content: center; gap: 40px; align-items: center; flex-wrap: wrap; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);">
    <!-- Link "Tất cả" -->
    <a href="{{ route('category.list') }}"
        style="color: {{ request()->routeIs('category.list') ? '#bdc3c7' : 'white' }}; text-decoration: none; font-size: 20px; font-weight: 600; cursor: pointer; padding: 12px 25px; border-radius: 5px; transition: transform 0.3s ease, color 0.3s ease, background-color 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.color='white'; this.style.backgroundColor='#34495e'; this.style.transform='scale(1.1)';"
        onmouseout="this.style.color='{{ request()->routeIs('category.list') ? '#bdc3c7' : 'white' }}'; this.style.backgroundColor='transparent'; this.style.transform='scale(1)';">
        Tất cả
    </a>

    @foreach ($categories as $category)
    <a href="{{ route('category.show', $category->id) }}"
        style="color: {{ request()->is('category/'.$category->id) ? '#bdc3c7' : 'white' }}; text-decoration: none; font-size: 20px; font-weight: 600; cursor: pointer; padding: 12px 25px; border-radius: 5px; transition: transform 0.3s ease, color 0.3s ease, background-color 0.3s ease; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);"
        onmouseover="this.style.color='white'; this.style.backgroundColor='#34495e'; this.style.transform='scale(1.1)';"
        onmouseout="this.style.color='{{ request()->is('category/'.$category->id) ? '#bdc3c7' : 'white' }}'; this.style.backgroundColor='transparent'; this.style.transform='scale(1)';">
        {{ $category->name }}
    </a>
    @endforeach
</div>
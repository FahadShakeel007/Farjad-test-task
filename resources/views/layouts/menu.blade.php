<li class="nav-item">
    <a href="{{ route('brands.index') }}"
       class="nav-link {{ Request::is('brands*') ? 'active' : '' }}">
        <p>Brands</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('products.index') }}"
       class="nav-link {{ Request::is('products*') ? 'active' : '' }}">
        <p>Products</p>
    </a>
</li>



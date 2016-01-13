<ul class="main-navigation-menu">
@include('admin.partials.menu.items', ['items'=> $menu_example->roots()])
</ul>
{!! $menu_example->asUl() !!}
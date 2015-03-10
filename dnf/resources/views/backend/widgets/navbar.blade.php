@foreach($mainMenus as $mainMenu)
<li class="mm-dropdown @if(App\Component\Helper::menuTopSite($mainMenu->module)) open active @endif">
    <a href="#"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text">{{{ $mainMenu->name }}}</span></a>
    @if(!empty($mainMenu['sub']))
    <ul>
        @foreach($mainMenu['sub'] as $mainSubMenu)
        <li class="@if(App\Component\Helper::menuTopSite($mainSubMenu->module, $mainSubMenu->class)) active @endif">
            <a tabindex="-1" href="{{ App\Component\Helper::routeByAcl('backend', $mainSubMenu) }}"><span class="mm-text">{{{ $mainSubMenu->name }}}</span></a>
        </li>
        @endforeach
    </ul>
    @endif
</li>
@endforeach

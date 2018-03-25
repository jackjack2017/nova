<div class="header">
    <div class="header-container">
        <div class="header-mob-blk">
            <a href="/" class="header-logo __mob">Nova</a>
            <a href="#" class="header-mob-menu-btn fa fa-bars fa-3x js_mob-menu-btn"></a>
            <div class="header-mob-menu js_mob-menu-blk">
                <ul class="header-mob-menu-lst">
                    @foreach($categories as $category)
                        <li class="header-mob-menu-i">
                            <a href="#" class="header-mob-menu-lnk js_submenu-btn">{{$category->name}}</a>
                            <ul class="header-mob-submenu-lst js_submenu-cnt">
                                @foreach($category->subCategories as $sub)
                                    <li class="header-mob-submenu-i"><a href="#">{{$sub->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                    <li class="header-mob-menu-i"><a href="#">Sale</a></li>
                    <li class="header-mob-menu-i"><a href="#">Блог</a></li>
                </ul>
            </div>
        </div>

        <div class="header-row">
            <div class="header-col ">
                <a href="/" class="header-logo">Nova</a>
                <div class="header-l">
                    <div class="header-tel">
                        <a href="tel:+380939200290" class="header-tel-i tel">0939200290</a>
                        <a href="tel:+380635825870" class="header-tel-i tel">0635825870</a>
                    </div>
                    <div class="header-soc-blk">
                        <a href="#" class="header-soc fa fa-vk fa-2x" target="blank"></a>
                        <a href="#" class="header-soc fa fa-facebook-square fa-2x" target="blank"></a>
                        <a href="#" class="header-soc fa fa-instagram fa-2x" target="blank"></a>
                    </div>
                </div>
            </div>
            <div class="header-col __r">
                <div class="header-r">
                    <form action="{{url('search')}}" class="header-search-form">
                        <input type="text" placeholder="Найти товары" class="header-search-form-inp">
                        <input type="hidden" name="form_type" value="Поиск">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <button type="submit" class="header-search-form-ic fa fa-search"></button>
                    </form>
                    <a href="{{route('favourite')}}" class="header-like"><span
                                class="header-like-txt">Избранное</span>(<span
                                class="header-like-num js_like-count">{{$wishlist_count}}</span>)</a>
                    <div class="header-basket-blk">
                        <a href="{{route('cart')}}" class="header-basket-lnk"><span class="header-basket-txt">Корзина</span>(<span
                                    class="header-basket-num js_cart-count">{{$cart_count}}</span>)</a>
                        <div class="header-basket-inner js_header-cart-blk">
                            @include('/parts/_header-cart')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="header-b">
            <ul class="header-menu">
                @foreach($categories as $category)
                    <li class="header-menu-i">
                        <a href="{{route('page', $category->id)}}" class="header-menu-lnk">{{$category->name}}</a>
                        <div class="header-submenu">
                            <ul class="header-submenu-lst default-cnt">
                                <li><a href="#"><span>Новые поступления</span></a></li>
                                <li><a href="#"><span>Акции</span></a></li>
                                <li><a href="#">
                                        <span>Хиты продаж</span>
                                    </a></li>
                                @foreach($category->subCategories as $sub)
                                    <li><a href="{{route('category', $sub->id)}}">{{$sub->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach
                <li class="header-menu-i"><a href="#" class="header-menu-lnk">Sale</a></li>
                <li class="header-menu-i"><a href="#" class="header-menu-lnk">Блог</a></li>
            </ul>
        </nav>
    </div>
</div>
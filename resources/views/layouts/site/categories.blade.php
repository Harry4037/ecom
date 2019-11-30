<nav  class="navbar navbar-expand-lg navbar-light bg-white pt-0 pb-0">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="dropdown-custom">
                <button class="dropbtn"><i class="fa fa-bars" aria-hidden="true"></i> Shop by Department</button>
                <div class="dropdown-content">
                    @if($categories)
                    @foreach($categories as $category)
                    <a href="/">{{$category->name}}</a>
                    @endforeach
                    @endif
                </div>
            </div>                  	
            <ul class="navbar-nav mr-auto main-nav-left">
                @if($categories)
                @foreach($categories as $category)

                @if(count($category->subcategories) > 0)
                <li class="nav-item dropdown mega-drop-main">
                    <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{$category->name}}
                    </a>
                    <div class="dropdown-menu mega-drop  shadow-sm border-0" aria-labelledby="navbarDropdown">
                        <div class="row ml-0 mr-0">
                            @foreach($category->subcategories as $sub)
                            <div class="col-lg-2 col-md-2">
                                <div class="mega-list">
                                    <a class="mega-title" href="/">{{$sub->name}}</a>
                                    @if($sub->subsubcategories->count() > 0)
                                    @foreach($sub->subsubcategories as $subsub)
                                    <a href="/">{{$subsub->name}}</a>
                                    @endforeach
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </li> 
                @else
                <li class="nav-item">
                    <a class="nav-link" href="/">{{$category->name}}</a>
                </li>
                @endif
                @endforeach
                @endif                      
            </ul>
        </div>
    </div>
</nav> 
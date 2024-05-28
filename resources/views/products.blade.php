@include('header')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-gear-wide-connected" viewBox="0 0 16 16">
                <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5m0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78zM5.048 3.967l-.087.065zm-.431.355A4.98 4.98 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8zm.344 7.646.087.065z"/>
              </svg>

            Product Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                
                <li class="nav-item">
                    <a class="btn btn-outline-dark" href="/userprofile">
                        profile
                    </a>&nbsp
                </li>


                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input type="submit"class="btn btn-outline-danger" value="Logout">
                       
                    </form>

                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header -->
<header class="bg-dark text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Our Products</h1>
        <p class="lead">Browse and buy our exclusive collection</p>
    </div>
</header>

<!-- Product Listing -->
<div class="row">
    @foreach ($inventry_news as $inventry_new)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ asset('images/Inventory_new/' . $inventry_new->image) }}" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">{{ $inventry_new->toolName }}</h5>
                    <p class="card-text">This is a short description of the product.</p>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#buyModal{{ $inventry_new->id }}">
                        Buy Now
                    </button>
                </div>
                <div class="card-footer">
                    <small class="text-muted">${{ $inventry_new->price }}</small>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Purchase Modals -->
@foreach ($inventry_news as $inventry_new)
    <div class="modal fade" id="buyModal{{ $inventry_new->id }}" tabindex="-1" aria-labelledby="buyModalLabel{{ $inventry_new->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="buyModalLabel{{ $inventry_new->id }}">Purchase {{ $inventry_new->toolName }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to purchase {{ $inventry_new->toolName }} for ${{ $inventry_new->price }}?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary">Confirm Purchase</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

@include('footer')
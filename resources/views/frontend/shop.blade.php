@extends('layouts.frontend')

@section('title', 'Shop')

@section('content')

<!-- Page Header -->
<div class="container-fluid bg-primary py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-4 text-white mb-3">Shop</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Shop</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Shop Content -->
<div class="container py-5">
    <div class="row">

        <!-- Sidebar Category -->
        <div class="col-lg-3 mb-4">
            <h5 class="mb-3">Categories</h5>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Accessories <span class="badge bg-primary">3</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Electronics & Computer <span class="badge bg-primary">5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Laptops & Desktops <span class="badge bg-primary">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Mobiles & Tablets <span class="badge bg-primary">8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    SmartPhone & Smart TV <span class="badge bg-primary">5</span>
                </li>
            </ul>
        </div>

        <!-- Product Grid -->
        <div class="col-lg-9">
            <div class="row g-4">

                <!-- Product Item -->
                @foreach([1,2,3,4,5,6,7,8] as $item)
                <div class="col-md-4">
                    <div class="card shadow-sm border-0 h-100">
                        <img src="https://via.placeholder.com/350x250?text=Product+{{ $item }}" 
                             class="card-img-top" alt="Product {{ $item }}">

                        <div class="card-body">
                            <h5 class="card-title">Product {{ $item }}</h5>
                            <p class="card-text text-muted">Short description of the product...</p>

                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-primary">$99.00</span>

                                <a href="#" class="btn btn-sm btn-secondary">
                                    <i class="fa fa-shopping-cart me-1"></i> Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="mt-4 d-flex justify-content-center">
                <nav>
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</div>

@endsection

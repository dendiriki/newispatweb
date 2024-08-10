@extends('layout.tools.main')

@section('content')

<style>
        .product-box {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px;
            transition: transform 0.2s;
        }

        .product-box:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .product-img {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .product-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-description {
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1rem;
            color: #e67e22;
            margin-bottom: 10px;
        }

        @media (max-width: 576px) {
            .product-title, .product-description, .product-price {
                text-align: center;
            }
        }
    </style>
    <section class="job_section layout_padding bahaw-minus">
    <div class="container">
        <div class="heading_container col-md-12">
            <div class="col row sub-heading">
                <h2 class="text-left">
                    <!-- AVAILABLE POSITIONS -->
                    Lelang
                </h2>
            </div>
        </div>
    </div>
    </section>

    <br><br>
    <section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>
            <!-- You can duplicate the above col-md-4 col-sm-6 div for more products -->
            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-sm-6">
                <a href="{{route('detail-lelang')}}" class="text-decoration-none">
                    <div class="product-box">
                        <img src="{{ asset('assets/img/anjik.jpg') }}" alt="Product Image" class="product-img">
                        <div class="product-title">Product Title</div>
                        <div class="product-description">Short description of the product. This is a placeholder text.</div>
                        <div class="product-price">$19.99</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    </section>
    <script src="path/to/jquery.min.js"></script>
    <script src="path/to/bootstrap.bundle.min.js"></script>

@endsection

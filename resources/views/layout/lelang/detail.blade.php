@extends('layout.tools.main')

@section('content')
<style>
    .detail-container {
        padding: 20px;
    }

    .detail-header {
        margin-bottom: 20px;
        text-align: center;
    }

    .product-image {
        max-width: 100%;
        height: auto;
    }

    .product-info {
        margin-top: 20px;
    }

    .product-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .product-description {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }

    .product-price {
        font-size: 1.5rem;
        color: #e67e22;
        margin-bottom: 20px;
    }

    .btn-submit {
        background-color: #ff5722;
        color: white;
        font-size: 1.2rem;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #e64a19;
    }

    @media (max-width: 576px) {
        .product-title, .product-description, .product-price {
            text-align: center;
        }

        .btn-submit {
            width: 100%;
        }
    }
</style>

<section class="job_section layout_padding bahaw-minus">
    <div class="container">
        <div class="heading_container col-md-12">
            <div class="col row sub-heading">
                <h2 class="text-left">
                    Detail Lelang
                </h2>
            </div>
        </div>
    </div>
</section>

<br><br><br>
<div class="container detail-container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset($lelang->picture) }}" alt="Product Image" class="product-image">
        </div>
        <div class="col-md-6 product-info">
            <div class="product-title">{{ $lelang->title }}</div> <!-- Menampilkan judul produk -->
            <div class="product-description">{!! $lelang->content !!}</div> <!-- Menampilkan deskripsi produk -->
            <button class="btn btn-submit">Submit Lelang</button>
        </div>
    </div>
</div>

<script src="path/to/jquery.min.js"></script>
<script src="path/to/bootstrap.bundle.min.js"></script>
@endsection
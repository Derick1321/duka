<x-app-layout>
    <div class="page-content-wrapper">
        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            <div id="addproduct-nav-pills-wizard" class="twitter-bs-wizard">
                                <ul class="twitter-bs-wizard-nav">
                                    <li class="nav-item">
                                        <a href="#basic-info" class="nav-link" data-toggle="tab">
                                            <span class="step-number">01. Basic Info</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#product-img" class="nav-link" data-toggle="tab">
                                            <span class="step-number">02. Product Img</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- ebd ul -->
                                <div class="tab-content twitter-bs-wizard-tab-content">
                                    <div class="tab-pane" id="basic-info">
                                        @isset($product)
                                            <form action="{{ route('product.products.update', ['product' => $product]) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @method('patch')
                                            @else
                                                <form action="{{ route('product.products.store') }}" method="POST"
                                                    enctype="multipart/form-data">
                                                @endisset

                                                @csrf
                                                <div class="row">
                                                     <div class="col-lg-4">
                                                        <label for="" class="label-control">Select Shop</label>
                                                           <select name="shop_id" id="shop_id"
                                                       class="form-control  @error('shop_id') is-invalid @enderror">
                                                          <option value="">Choose...</option>
                                                             @foreach ($shops as $shop)
                                                        <option
                                                        value="{{ old('shop_id') ?? isset($shop->id) ? $shop->id : '' }}"
                                                        {{ isset($shop) && $shop->id != $shop->shop_id ? 'selected' : null }}>
                                                        {{ $shop->name }}
                                                          </option>
                                                          @endforeach
                                                         </select>

                                                       </div>
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="productname">Product Name</label>
                                                            <input id="name" name="name" type="text"
                                                                class="form-control @error('name') is-invalid @enderror " placeholder="Enter your name">
                                                            @error("name")
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <!-- end col -->
                                                    <div class="col-lg-4">
                                                        <div class="mb-3">
                                                            <label class="form-label" for="price">Price</label>
                                                            <input id="price" name="price" type="text"
                                                                class="form-control @error('price') is-invalid @enderror" placeholder="Enter Price">
                                                            @error("price")
                                                            <p class="invalid-feedback">{{ $message }}</p>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                    <!-- end col -->
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="productdesc">Product Description</label>
                                                    <textarea class="form-control" id="description" name="description" rows="3" placeholder="Enter Description"></textarea>
                                                </div>


                                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                                    <li class="next"><a href="#"> Product Img <i
                                                                class="mdi mdi-arrow-right ms-1"></i></a></li>
                                                </ul>
                                    </div>
                                    <!-- end tabpane -->
                                    <div class="tab-pane" id="product-img">
                                        <h4 class="header-title">Product Images</h4>
                                        <p class="card-title-desc">Upload product image</p>

                                        <div class="fallback">
                                            <input name="featured_image" class="form-control" type="file" multiple />
                                        </div>



                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="previous"><a href="#"><i class="mdi mdi-arrow-left me-1"></i>
                                                    Basic Info</a></li>
                                            <li class="float-end"><button class="btn btn-outline-success"
                                                    type="submit">Save Changes <i
                                                        class="mdi mdi-arrow-right ms-1"></i></button></li>
                                        </ul>
                                    </div>
                                    </form>

                                    <!-- end tabpane -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->

        </div>

    </div>
</x-app-layout>

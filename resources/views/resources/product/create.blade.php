<x-app-layout>
    <div class="page-content-wrapper">
        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Product Details</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Product Images</button>
    
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
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
                                                        {{ $shop->shop_name }}
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


                                                
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

       
                                        <p class="card-title-desc">Upload product image</p>

                                        <div class="fallback">
                                            <input name="featured_image" class="form-control" type="file" multiple />
                                        </div>



                                        <div class="p-2">
                                            
                                            <div class="float-end"><button class="btn btn-outline-success"
                                                    type="submit">Save Changes <i
                                                        class="mdi mdi-arrow-right ms-1"></i></button></div>
                                        </div>
                                    </form>
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

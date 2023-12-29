<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="product-detail">
                                    <div class="row">
                                        <div class="card bg-dark text-white">
                                            <img class="img-thumbnail" width="400" height="350" src="{{ $productSku->featured_image }}"
                                                alt="Card image">
                                            <div class="card-img-overlay">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end product img -->
                            </div>
                            <div class="col-xl-2">
                                <div class="mt-4 mt-xl-3">
                                    <a href="#" class="text-primary">{{ __('Product Details') }}</a>
                                    <h5 class="mt-1 mb-3">{{ $product->name }}</h5>

                                    <hr class="my-4">

                                </div>
                            </div>
                            <div class="col-xl-5">
                                <div class="mt-4 mt-xl-3">
                                    <a href="#" class="text-primary">{{ __('Product Skus Details') }}</a>
                                    <h5 class="mt-1 mb-3">{{ $productSku->name }}</h5>

                                    <div class="d-inline-flex">
                                        <div class="text-muted me-3">
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star text-warning"></span>
                                            <span class="mdi mdi-star-half text-warning"></span>
                                        </div>
                                    </div>

                                    <h5 class="mt-2">TSH :{{ $productSku->price }} </h5>

                                    <hr class="my-4">

                                    <div class="mt-4">
                                        <h6>Description :</h6>

                                        <div class="mt-4">
                                            <p class="text-muted mb-2"><i
                                                    class="mdi mdi-check-bold text-success me-2"></i>{{ $productSku->description }}.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-4">
                            <h4 class="header-title flex-grow-1"> Skus Values </h4>
                            <a href="{{ route('product.products.productSkus.productSkusValue.create', ['product' => $product->id, 'productSku' => $productSku->id]) }}"
                                class="btn btn-success waves-effect waves-light mt-2">
                                <i class="mdi mdi-plus me-2"></i> Add Skus Value
                            </a>
                        </div>

                        <div class="col-xl-12">
                            <div class="table-responsive mt-3">
                                <table class="table table-centered datatable dt-responsive nowrap "
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="customercheck">
                                                    <label class="form-check-label" for="customercheck">&nbsp;</label>
                                                </div>
                                            </th>
                                            <th>Option</th>
                                            <th>Option Value</th>
                                            <th style="width: 120px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productSku->values as $item)
                                            <tr>
                                                <td>
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="customercheck1">
                                                        <label class="form-check-label" for="customercheck1">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td>{{ $item->productOption->name }}</td>
                                                <td>{{ $item->productOptionValue->name }}</td>
                                                <td id="tooltip-container0">
                                                    <div class="btn-group" role="group">

                                                        <a href="" class="text-danger"
                                                            data-bs-container="#tooltip-container0" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete"><i
                                                                class="mdi mdi-trash-can font-size-18"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>






            </div>
        </div>
        <!-- end card -->
    </div>
    </div>
    <!-- end row -->
    </div>
</x-app-layout>

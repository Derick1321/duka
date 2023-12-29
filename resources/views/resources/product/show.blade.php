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
                                            {{-- <img cclass="img-thumbnail" width="400" height="350" src="..."
                                                alt="Card image"> --}}
                                            <div class="card-img-overlay">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end product img -->
                            </div>
                            <div class="col-xl-7">
                                <div class="mt-4 mt-xl-3">
                                    <a href="#" class="text-primary">{{ $product->name }}</a>


                                    <hr class="my-4">

                                    <div class="mt-4">



                                    </div>

                                    <div class="mt-4">



                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <div class="d-flex  mb-4">
                            <h4 class="header-title flex-grow-1">Product SKU List </h4>
                            <a href="{{ route('product.products.productSkus.create', ['product' => $product->id]) }}"
                                class="btn btn-success waves-effect waves-light mt-2">
                                <i class="mdi mdi-plus me-2"></i> Add Product Skus
                            </a>
                        </div>
                        <div class="row">
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
                                                <th>Product Name</th>
                                                <th>SKU</th>
                                                <th>Price</th>


                                                <th style="width: 120px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product->skus as $productSk)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="customercheck1">
                                                            <label class="form-check-label"
                                                                for="customercheck1">&nbsp;</label>
                                                        </div>
                                                    </td>
                                                    <td>{{ $productSk->products->name }}</td>
                                                    <td>{{ $productSk->name }}</td>
                                                    <td>{{ $productSk->price }}</td>


                                                    <td id="tooltip-container0">
                                                        <div class="btn-group" role="group">
                                                            <a href="{{ route('product.products.productSkus.edit', ['product' => $product->id, 'productSku' => $productSk->id]) }}"
                                                                class="me-3 text-primary"
                                                                data-bs-container="#tooltip-container0"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Edit"><i
                                                                    class="mdi mdi-pencil font-size-18"></i></a>

                                                            <a href="{{ route('product.products.productSkus.show', ['product' => $product->id, 'productSku' => $productSk->id]) }}"
                                                                class="me-3 text-primary" title="Show"><i
                                                                    class="mdi mdi-eye-plus font-size-18"></i></a>
                                                            <form
                                                                action="{{ route('product.products.productSkus.destroy', ['product' => $product->id, 'productSku' => $productSk->id]) }}"
                                                                method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit"
                                                                    class="me-3 btn btn-outline-danger"><i
                                                                        class="mdi mdi-trash-can font-size-18"></i></button>

                                                            </form>
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


                <div class="card">
                    <div class="card-body">
                        <div class="d-flex mb-4">
                            <h4 class="header-title flex-grow-1">Product Option</h4>
                            <a href="{{ route('product.products.productOptions.create', ['product' => $product->id]) }}"
                                class="btn btn-success"><i class="mdi mdi-plus me-2"></i> Add
                                Product Option</a>
                        </div>

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="table-responsive mt-3">
                                            <table class="table table-centered datatable dt-responsive nowrap "
                                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th style="width: 20px;">
                                                            <div class="form-check">
                                                                <input type="checkbox" class="form-check-input"
                                                                    id="customercheck">
                                                                <label class="form-check-label"
                                                                    for="customercheck">&nbsp;</label>
                                                            </div>
                                                        </th>
                                                        <th>Name</th>
                                                        <th>Option Values</th>
                                                        <th>Product Name</th>

                                                        <th style="width: 120px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($product->options as $productOption)
                                                        <tr>
                                                            <td>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        id="customercheck1">
                                                                    <label class="form-check-label"
                                                                        for="customercheck1">&nbsp;</label>
                                                                </div>
                                                            </td>

                                                            <td>{{ $productOption->name }}</td>
                                                            <td>{{ $productOption->values->pluck('name')->join(', ', ' & ') }}</td>
                                                            <td>{{ $productOption->productOptionVal->name }}</td>


                                                            <td id="tooltip-container0">
                                                                <div class="btn-group" role="group">
                                                                    <a href="{{ route('product.products.productOptions.edit', ['product' => $product->id, 'productOption' => $productOption]) }}"
                                                                        class="me-3 text-primary"
                                                                        data-bs-container="#tooltip-container0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Edit"><i
                                                                            class="mdi mdi-pencil font-size-18"></i></a>
                                                                    <a href="{{ route('product.products.productOptions.show', ['product' => $product->id, 'productOption' => $productOption]) }}"
                                                                        class="me-3 text-primary"
                                                                        data-bs-container="#tooltip-container0"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="show"><i
                                                                            class="mdi  mdi-plus font-size-18"></i></a>

                                                                    <form
                                                                        action="{{ route('product.products.productOptions.destroy', ['product' => $product->id, 'productOption' => $productOption]) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit"
                                                                            class="me-3 btn btn-outline-danger"><i
                                                                                class="mdi mdi-trash-can font-size-18"></i></button>

                                                                    </form>


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
                </div>



            </div>
        </div>
        <!-- end card -->
    </div>
    </div>
    <!-- end row -->



    </div>
</x-app-layout>

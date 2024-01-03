<x-app-layout>
    <div class="page-content-wrapper">

        <div class="row">
            <div class="col-lg-4">



                <div class="card">
               

                    <div class="card-body">

                        <h4 class="header-title">Product Categories</h4>




                        <div class="border p-3 rounded mt-4">
                            <div class="md-4">
                                {{-- <div class="float-end d-none d-sm-block">
                                    <a href="{{ route('product.products.productOptions.create') }}"
                                        class="btn btn-success"><i class="mdi mdi-plus me-2"></i></a>
                                </div> --}}

                                <h5 class="font-size-16">Categories</h5>
                            </div>


                            <br />
                            <br />
                            <div id="accordion" class="custom-accordion categories-accordion">

                                @foreach ($categories as $category)
                                    <div class="categories-group-card">

                                        <a href="#collapseTwo" class="categories-group-list" data-bs-toggle="collapse"
                                            aria-expanded="true" aria-controls="collapseTwo">
                                            <i class="ti-archive font-size-16 align-middle me-2"></i>
                                            {{ $category->name }}
                                            <i class="mdi mdi-minus float-end accor-plus-icon"></i>
                                        </a>

                                        <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                                            <div>
                                                <ul class="list-unstyled categories-list mb-0">

                                                    <li class="active"><a href="#"><i
                                                                class="mdi mdi-circle-medium me-1"></i>
                                                            {{-- {{ $category->product->name ?? null }} --}}
                                                        </a>

                                                    </li>

                                                </ul>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach


                            </div>

                        </div>




                    </div>
                </div>
            </div>


            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <a href="{{ route('product.products.create') }}" class="btn btn-success mb-2">
                                product</a>
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped">
                                <thead class="thead-light">
                                    <tr>
                                       
                                        <th>Name</th>


                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                           
                                            <td>{{ $product->name }}</td>


                                            <td id="tooltip-container0">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('product.products.edit', ['product' => $product->id]) }}"
                                                        class="text-primary">Edit</a>

                                                    <a href="{{ route('product.products.show', ['product' => $product->id]) }}"
                                                        class="text-secondary" >Show</a>
                                                    <form
                                                        action="{{ route('product.products.destroy', ['product' => $product->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="me-3 btn btn-outline-danger">Delete</button>

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
</x-app-layout>

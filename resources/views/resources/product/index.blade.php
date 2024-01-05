<x-app-layout>
    <div class="page-content-wrapper">

        <div class="row">
          


            <div class="col-lg-12">
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
                                        <th>Category</th>


                                        <th style="width: 120px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                           
                                            <td>{{ $product->name }}</td>
                                            @foreach ($product->categories as $category )
                                                <td>{{$category->name}}</td>

                                            @endforeach
                                            

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

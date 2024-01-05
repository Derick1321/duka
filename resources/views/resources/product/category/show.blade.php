<x-app-layout>
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('product.assignProduct', ['productCategory' => $productCategory]) }}"
                            method="post">
                            @csrf
                            <div>
                                <button type="submit" class="btn btn-primary mb-2"><i class="mdi mdi-plus me-2"></i> Assign
                                    Product</button>
                            </div>
                            <div class="table-responsive mt-3">
                                <table class="table table-centered datatable dt-responsive nowrap "
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 20px;">
                                                S/N
                                            </th>
                                            <th>Name</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>

                                                <td>{{ $product->name }}</td>
                                                <td>
                                                    <div class="form-check mb-3">
                                                        {{-- {{ $product->category->contains('product_id', $product->id) ? 'checked' : '' }} --}}
                                                        <input class="form-check-input" value="{{ $product->id }}"
                                                            name="product_id[]"  type="checkbox"
                                                            id="formCheck1">
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                        </form>
                    </div>
                </div>
            </div>

        </div><!-- end row -->

    </div>
</x-app-layout>

<x-app-layout>
    
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @isset($region)
                            <h5 class="mt-3 font-size-16">{{ __('Update') }} {{ $country->name }} {{ __('Region') }}</h5>
                        @else
                            <h5 class="mt-3 font-size-16">{{ __('Add') }} {{ $country->name }} {{ __('Region') }}</h5>
                        @endisset
                    </div>
                    <div class="card-body">
                                @isset($region)
                                    <form action="{{ route('location.countries.regions.update', ['country' => $country, 'region' => $region]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('patch')
                                    @else
                                        <form action="{{ route('location.countries.regions.store', ['country' => $country]) }}" method="POST"
                                            enctype="multipart/form-data">
                                        @endisset
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="country_name"
                                                        label="Country Name" placeholder="Country"
                                                        value="{{  $country->name }}" readonly/>
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="name"
                                                        label="Region Name" placeholder="Region"
                                                        value="{{ isset($region) ? $region->name : old('name') }}" />
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="description"
                                                        label="Description" placeholder="Description"
                                                        value="{{ isset($region) ? $region->description : old('description') }}" />
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-lg-6">
                                                <x-form.coordinates-input 
                                                    latitude="{{ isset($region) && $region->latitude ? $region->latitude : old('latitude') }}" 
                                                    longitude="{{ isset($region) && $region->longitude ? $region->longitude : old('longitude') }}" 
                                                    zoom="{{ isset($region) && $region->zoom ? $region->zoom : old('zoom') }}" 
                                                />
                                            </div>
                                        </div>

                                        <hr />
                                        <div>
                                            @isset($region)
                                                <div class="float-end"><button type="submit" class="btn btn-primary">Update
                                                        Info<i class="mdi mdi-arrow-right ms-1"></i></button></div>
                                            @else
                                                <div class="float-end"><button type="submit" class="btn btn-success">Save
                                                        Info<i class="mdi mdi-arrow-right ms-1"></i></button>
                                                </div>
                                            @endisset
                                        </div>

                                        
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
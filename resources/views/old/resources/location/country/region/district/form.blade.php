<x-app-layout>
    
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @isset($district)
                            <h5 class="mt-3 font-size-16">{{ __('Update') }} {{ $region->name }} {{ __('District') }}</h5>
                        @else
                            <h5 class="mt-3 font-size-16">{{ __('Add') }} {{ $region->name }} {{ __('District') }}</h5>
                        @endisset
                    </div>
                    <div class="card-body">
                                @isset($district)
                                    <form action="{{ route('location.countries.regions.districts.update', ['country' => $country, 'region' => $region->id, 'district' => $district]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('patch')
                                    @else
                                        <form action="{{ route('location.countries.regions.districts.store', ['country' => $country, 'region' => $region]) }}" method="POST"
                                            enctype="multipart/form-data">
                                        @endisset
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="country_name"
                                                        label="Country Name" placeholder="Country"
                                                        value="{{  $region->country->name }}" readonly/>
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="region_name"
                                                        label="Region Name" placeholder="Country"
                                                        value="{{  $region->name }}" readonly/>
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="name"
                                                        label="District Name" placeholder="District"
                                                        value="{{ isset($district) ? $district->name : old('name') }}" />
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="description"
                                                        label="Description" placeholder="Description"
                                                        value="{{ isset($district) ? $district->description : old('description') }}" />
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-lg-6">
                                                <x-form.coordinates-input 
                                                    latitude="{{ isset($district) && $district->latitude ? $district->latitude : (old('latitude') ? old('latitude') : $region->latitude) }}" 
                                                    longitude="{{ isset($district) && $district->longitude ? $district->longitude : (old('longitude') ? old('longitude') : $region->longitude) }}" 
                                                    zoom="{{ isset($district) && $district->zoom ? $district->zoom : (old('zoom') ? old('zoom') : $region->zoom) }}" 
                                                />
                                            </div>
                                        </div>

                                        <hr />
                                        <div>
                                            @isset($district)
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
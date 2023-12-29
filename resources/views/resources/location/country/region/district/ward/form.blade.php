<x-app-layout>
    
    <div class="page-content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        @isset($ward)
                            <h5 class="mt-3 font-size-16">{{ __('Update') }} {{ $region->name }} - {{ $district->name }} {{ __('Ward') }}</h5>
                        @else
                            <h5 class="mt-3 font-size-16">{{ __('Add') }} {{ $region->name }} - {{ $district->name }} {{ __('Ward') }}</h5>
                        @endisset
                    </div>
                    <div class="card-body">
                                @isset($ward)
                                    <form action="{{ route('location.countries.regions.districts.wards.update', ['country' => $country, 'region' => $region->id, 'district' => $district, 'ward' => $ward]) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('patch')
                                    @else
                                        <form action="{{ route('location.countries.regions.districts.wards.store', ['country' => $country, 'region' => $region, 'district' => $district]) }}" method="POST"
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
                                                    <x-form.customer-input type="text" name="district_name"
                                                        label="District Name" placeholder="District"
                                                        value="{{ isset($district) ? $district->name : old('name') }}" readonly/>
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="name"
                                                        label="Ward Name" placeholder="Ward Name"
                                                        value="{{ isset($ward) ? $ward->name : old('name') }}" />
                                                </div>

                                                <div class="mb-4">
                                                    <x-form.customer-input type="text" name="description"
                                                        label="Description" placeholder="Description"
                                                        value="{{ isset($ward) ? $ward->description : old('description') }}" />
                                                </div>
                                            </div><!-- end col -->

                                            <div class="col-lg-6">
                                                <x-form.coordinates-input 
                                                    latitude="{{ isset($ward) && $ward->latitude ? $ward->latitude : (old('latitude') ? old('latitude') : $district->latitude) }}" 
                                                    longitude="{{ isset($ward) && $ward->longitude ? $ward->longitude : (old('longitude') ? old('longitude') : $district->longitude) }}" 
                                                    zoom="{{ isset($ward) && $ward->zoom ? $ward->zoom : (old('zoom') ? old('zoom') : $district->zoom) }}" 
                                                />
                                            </div>
                                        </div>

                                        <hr />
                                        <div>
                                            @isset($ward)
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
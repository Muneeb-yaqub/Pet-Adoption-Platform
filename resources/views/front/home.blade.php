@extends('front.layouts.app')

@section('main')
<section class="section-0 lazy d-flex bg-image-style dark align-items-center" data-bg="{{ asset('assets/images/banner7.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1>Find Your Perfect Pet</h1>
                <p>Thousands of pets looking for loving homes.</p>
                <div class="banner-btn mt-5">
                    <a href="" class="btn btn-primary mb-4 mb-sm-0">Adopt Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-1 py-5"> 
    <div class="container">
        <div class="card border-0 shadow p-5">
            <form action="{{ route('pets') }}" method="GET">
                @csrf
                <div class="row">
                    <!-- Search by pet name -->
                    <div class="col-md-3 mb-3">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Pet Name">
                    </div>
                    
                    <!-- Search by type -->
                    <div class="col-md-3 mb-3">
                        <input type="text" class="form-control" name="type" id="type" placeholder="Type (e.g., Dog, Cat)">
                    </div>

                    <!-- Search by location -->
                    <div class="col-md-3 mb-3">
                        <input type="text" class="form-control" name="location" id="location" placeholder="Location">
                    </div>
                    
                    <!-- Search button -->
                    <div class="col-md-3">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Search</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>


<section class="section-2 bg-2 py-5">
    <div class="container">
        <h2>Popular Pet Type</h2>
        <div class="row pt-5">
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_category">
                    <a href="pets.html?type=dog"><h4 class="pb-2">Dogs</h4></a>
                    <p class="mb-0"> <span>150</span> Available for adoption</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_category">
                    <a href="pets.html?type=cat"><h4 class="pb-2">Cats</h4></a>
                    <p class="mb-0"> <span>100</span> Available for adoption</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_category">
                    <a href="pets.html?type=rabbit"><h4 class="pb-2">Rabbits</h4></a>
                    <p class="mb-0"> <span>30</span> Available for adoption</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_category">
                    <a href="pets.html?type=hamster"><h4 class="pb-2">Hamsters</h4></a>
                    <p class="mb-0"> <span>20</span> Available for adoption</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_category">
                    <a href="pets.html?type=bird"><h4 class="pb-2">Birds</h4></a>
                    <p class="mb-0"> <span>15</span> Available for adoption</p>
                </div>
            </div>
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_category">
                    <a href="pets.html?type=reptile"><h4 class="pb-2">Reptiles</h4></a>
                    <p class="mb-0"> <span>10</span> Available for adoption</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-3 py-5">
    <div class="container">
        <h2>Featured Pets</h2>
        <div class="row pt-5">
            <div class="pet_listing_area">                    
                <div class="pet_lists">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Golden Retriever</h3>
                                    <p>Friendly and energetic. Looking for a loving home.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: New York</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-heart"></i></span>
                                            <span class="ps-1">Age: 2 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Breed: Golden Retriever</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Siamese Cat</h3>
                                    <p>Playful and affectionate. Great with families.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: California</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-heart"></i></span>
                                            <span class="ps-1">Age: 1 year</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Breed: Siamese</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Bulldog</h3>
                                    <p>Calm and loving. Perfect companion for families.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Texas</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-heart"></i></span>
                                            <span class="ps-1">Age: 3 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Breed: Bulldog</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Beagle</h3>
                                    <p>Curious and friendly. Great for active families.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Florida</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-heart"></i></span>
                                            <span class="ps-1">Age: 4 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Breed: Beagle</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Persian Cat</h3>
                                    <p>Calm and gentle. Perfect for a quiet home.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Illinois</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-heart"></i></span>
                                            <span class="ps-1">Age: 5 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Breed: Persian</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Rottweiler</h3>
                                    <p>Strong and loyal. Great guard dog and companion.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Ohio</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-heart"></i></span>
                                            <span class="ps-1">Age: 6 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Breed: Rottweiler</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-3 bg-2 py-5">
    <div class="container">
        <h2>Latest Pets</h2>
        <div class="row pt-5">
            <div class="pet_listing_area">                    
                <div class="pet_lists">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Bella</h3>
                                    <p>A friendly Golden Retriever looking for a loving home.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Type: Dog</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-birthday-cake"></i></span>
                                            <span class="ps-1">Age: 2 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Noida</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Max</h3>
                                    <p>Energetic Beagle in need of an active family.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Type: Dog</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-birthday-cake"></i></span>
                                            <span class="ps-1">Age: 1 year</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Noida</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Kitty</h3>
                                    <p>Cuddly Persian cat waiting for a warm lap.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Type: Cat</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-birthday-cake"></i></span>
                                            <span class="ps-1">Age: 3 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Noida</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Charlie</h3>
                                    <p>Playful Labrador looking for a fun-loving home.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Type: Dog</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-birthday-cake"></i></span>
                                            <span class="ps-1">Age: 4 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Noida</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Lucy</h3>
                                    <p>Sweet Ragdoll cat looking for her forever home.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Type: Cat</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-birthday-cake"></i></span>
                                            <span class="ps-1">Age: 2 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Noida</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3 shadow mb-4">
                                <div class="card-body">
                                    <h3 class="border-0 fs-5 pb-2 mb-0">Rocky</h3>
                                    <p>Charming Bulldog ready for a new adventure.</p>
                                    <div class="bg-light p-3 border">
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-paw"></i></span>
                                            <span class="ps-1">Type: Dog</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-birthday-cake"></i></span>
                                            <span class="ps-1">Age: 5 years</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                            <span class="ps-1">Location: Noida</span>
                                        </p>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <a href="pet-detail.html" class="btn btn-primary btn-lg">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
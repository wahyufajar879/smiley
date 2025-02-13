@extends('layouts.app')

@section('content')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">
                    <div class="banner_text text-center">
                        <div class="banner_text_iner">
                            <h1>Smiley</h1>
                            <p>Let's start your Nusa Penida journey with us, your dreams will come true</p>
                            <a href="#" class="btn_1">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- booking part start-->
    <section class="booking_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking_menu">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="snorkling-tab" data-toggle="tab" href="#snorkling" role="tab" aria-controls="snorkling" aria-selected="true">Snorkling</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rent-schooter-tab" data-toggle="tab" href="#rent-scooter" role="tab" aria-controls="rent-scooter" aria-selected="false">Rent Scooter</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="ticket-tab" data-toggle="tab" href="#ticket" role="tab" aria-controls="ticket" aria-selected="false">Ticket</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tour-island-tab" data-toggle="tab" href="#tour-island" role="tab" aria-controls="tour-island" aria-selected="false">Tour Island</a>
                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link" id="place-tab" data-toggle="tab" href="#place" role="tab" aria-controls="place" aria-selected="false">Place</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="booking_content">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="snorkling" role="tabpanel" aria-labelledby="snorkling-tab">
                                @include('form.snorkling')
                            </div>
                            <div class="tab-pane fade" id="rent-scooter" role="tabpanel" aria-labelledby="rent-scooter-tab">
                                 @include('form.rent_scooter')
                            </div>
                            <div class="tab-pane fade" id="ticket" role="tabpanel" aria-labelledby="ticket-tab">
                                  @include('form.ticket')
                             </div>
                            <div class="tab-pane fade" id="tour-island" role="tabpanel" aria-labelledby="tour-island-tab">
                                @include('form.tour_island')
                            </div>
                             {{-- <div class="tab-pane fade" id="place" role="tabpanel" aria-labelledby="place-tab">
                                 @include('form.place')
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Header part end-->

    <!--top place start-->
    <section class="top_place section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Top Places to visit</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="{{ asset('assets/img/image1.png') }}" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn">travel</a>
                                <h3>Kelingking Beach</h3>
                                <p>Technaf, Bangladesh</p>
                                <div class="place_review">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <span>(210 review)</span>
                                </div>
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="{{ asset('assets/img/image2.png') }}" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn">travel</a>
                                <h3>Diamond Beach</h3>
                                <p>Technaf, Bangladesh</p>
                                <div class="place_review">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <span>(210 review)</span>
                                </div>
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="row">
                 <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="{{ asset('assets/img/image3.png') }}" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn">travel</a>
                                <h3>Kristal Bay</h3>
                                <p>Technaf, Bangladesh</p>
                                <div class="place_review">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <span>(210 review)</span>
                                </div>
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6 col-md-6">
                    <div class="single_place">
                        <img src="{{ asset('assets/img/image4.png') }}" alt="">
                        <div class="hover_Text d-flex align-items-end justify-content-between">
                            <div class="hover_text_iner">
                                <a href="#" class="place_btn">travel</a>
                                <h3>Broken Beach</h3>
                                <p>Technaf, Bangladesh</p>
                                <div class="place_review">
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <a href="#"><i class="fas fa-star"></i></a>
                                    <span>(210 review)</span>
                                </div>
                            </div>
                            <div class="details_icon text-right">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn_1 text-cnter">Discover more</a>
            </div>
        </div>
    </section>
    <!--top place end-->

    {{-- <!--top place start-->
    <section class="event_part section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="event_slider owl-carousel" >
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="col-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="ol-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single_event_slider">
                            <div class="row justify-content-end">
                                <div class="ol-lg-6 col-md-6">
                                    <div class="event_slider_content">
                                        <h5>Upcoming Event</h5>
                                        <h2>Maldeve - Asia</h2>
                                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.
                                        </p>
                                        <p>date: <span>12 Aug 2019</span> </p>
                                        <p>Cost: <span>Start from $820</span> </p>
                                        <p>Organizer: <span> Martine Agency</span> </p>
                                        <div class="rating">
                                            <span>Rating:</span>
                                            <div class="place_review">
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                                <a href="#"><i class="fas fa-star"></i></a>
                                            </div>
                                        </div>
                                        <a href="#" class="btn_1">Plan Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top place end--> --}}

    <!--::industries start::-->
    <section class="hotel_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section_tittle text-center">
                        <h2>Top Destination Snorkling</h2>
                        <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{ asset('assets/img/ind/snorkling1.png') }}" alt="">
                        <div class="hover_text">
                            <div class="hotel_social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="share_icon">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Manta Point</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>Nusa Penida</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{ asset('assets/img/ind/snorkling2.png') }}" alt="">
                        <div class="hover_text">
                            <div class="hotel_social_icon">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="share_icon">
                                <i class="ti-share"></i>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Gamat Bay</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>Nusa Penida</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_ihotel_list">
                        <img src="{{ asset('assets/img/ind/snorkling3.png') }}" alt="">
                        <div class="hover_text">
                            <div class="hover_text">
                                <div class="hotel_social_icon">
                                    <ul>
                                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                                        <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                        <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    </ul>
                                </div>
                                <div class="share_icon">
                                    <i class="ti-share"></i>
                                </div>
                            </div>
                        </div>
                        <div class="hotel_text_iner">
                            <h3> <a href="#"> Wall Point</a></h3>
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <span>(210 review)</span>
                            </div>
                            <p>Nusa Penida</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::industries end::-->

    <!--top place start-->
    <section class="client_review section_padding">
        <div class="container">
            <div class="row ">
                <div class="col-xl-6">
                    <div class="section_tittle">
                        <h2>What they said</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_review_slider owl-carousel">
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                        <div class="single_review_slider">
                            <div class="place_review">
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </div>
                            <p>Waters make fish every without firmament saw had. Morning air subdue. Our Air very one whales grass is fish whales winged night yielding land creeping that seed </p>
                            <h5> - Allen Miller</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top place end-->

    <!--::industries start::-->
 <section class="best_services section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>We offered best services</h2>
                    <p>Waters make fish every without firmament saw had. Morning air subdue. Our. Air very one. Whales grass is fish whales winged.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="{{ asset('assets/img/snorkling.png') }}" alt="">
                    <h3> <a href="#"> Snorkling</a></h3>
                    <p>All transportation cost we bear</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="{{ asset('assets/img/rent.png') }}" alt="">
                    <h3> <a href="#"> Rent Scooter</a></h3>
                    <p>We offer the best guidence for you</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="{{ asset('assets/img/tour.png') }}" alt="">
                    <h3> <a href="#"> Tour Island</a></h3>
                    <p>Luxarious and comfortable</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single_ihotel_list">
                    <img src="{{ asset('assets/img/ticket.png') }}" alt="">
                    <h3> <a href="#"> Ticket</a></h3>
                    <p>Best tour plan for your next tour</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::industries end::-->

    @endsection

    {{-- @push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMapFooter" async defer></script>
    <script>
        function initMapFooter() {
            const mapFooter = new google.maps.Map(document.getElementById('map-footer'), {
                center: { lat: -8.682096, lng: 115.4848457 },
                zoom: 14,
            });
            const marker = new google.maps.Marker({
                position: { lat: -8.682096, lng: 115.4848457 },
                map: mapFooter,
                title: 'Smiley Rental Scooter & Manta Tour Snorkling'
            });
        }
    </script>
@endpush --}}
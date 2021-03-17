@extends('layouts.main')
@section('content')

    <section class="content-section" id="portfolio">
        <div class="container">
            <div class="content-section-heading text-center">
                <h3 class="text-secondary mb-0">Portfolio</h3>
                <h2 class="display-6 d-flex justify-content-center mb-5">Recent Projects</h2>
            </div>
            <div class="row no-gutters">
                @foreach($portfolioItems as $eachPortfolioItem)
                <div class="col-lg-6" >
                    <a class="portfolio-item" data-mdb-toggle="modal" href="#exampleModal">
                        <div class="caption">
                            <div class="caption-content">
                                <div class="h2">{{ $eachPortfolioItem->FolioHeading }}</div>
                                <div class="h2"></div>
                                <p class="mb-0">{{ $eachPortfolioItem->FolioShortDesc }}</p>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{ url('/demo/img/portfolio_images/'.$eachPortfolioItem->FolioImageUrl) }}" alt="">
                    </a>
                </div>
{{--                <div class="col-lg-6">--}}
{{--                    <a class="portfolio-item" href="#!">--}}
{{--                        <div class="caption">--}}
{{--                            <div class="caption-content">--}}
{{--                                <div class="h2">Ice Cream</div>--}}
{{--                                <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <img class="img-fluid" src="{{ url('/demo/img/portfolio_images/portfolio-2.jpg') }}" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <a class="portfolio-item" href="#!">--}}
{{--                        <div class="caption">--}}
{{--                            <div class="caption-content">--}}
{{--                                <div class="h2">Strawberries</div>--}}
{{--                                <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="{{ url('/demo/img/portfolio_images/portfolio-3.jpg') }}" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <a class="portfolio-item" href="#!">--}}
{{--                        <div class="caption">--}}
{{--                            <div class="caption-content">--}}
{{--                                <div class="h2">Workspace</div>--}}
{{--                                <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="{{ url('/demo/img/portfolio_images/portfolio-4.jpg') }}" alt="">--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                    --}}
                    <button
                        id="portfolioModal"
                        type="button"
                        class="btn btn-primary modal{{$eachPortfolioItem->id}}"
                        data-mdb-toggle="modal"
                        data-mdb-target="#exampleModal"
{{--                        data-url="{{ route('dynamicPortfolioModal',['id'=>$eachPortfolioItem->id])}}"--}}
                        style="display: none;"
                    >
                    </button>


{{--                    <script>--}}
{{--                        $('.modal{{$eachPortfolioItem->id}}').on('click',function(){--}}
{{--                            $('.modal-body').load('',function(){--}}
{{--                                $('#exampleModal').modal({show:true});--}}
{{--                            });--}}
{{--                        });--}}
{{--                    </script>--}}
{{--                    <script>--}}
{{--                        $(document).ready(function(){--}}
{{--                            $("#exampleModal").on("show.bs.modal", function(e) {--}}
{{--                                var id = $(e.relatedTarget).data('exampleModal');--}}
{{--                                $.get( "/portfolio/" + id, function( data ) {--}}
{{--                                    $(".modal-body").html(data);--}}
{{--                                });--}}

{{--                            });--}}
{{--                        });--}}
{{--                    </script>--}}


                    <!-- Modal -->
                    <div
                        class="modal fade"
                        id="exampleModal"
                        tabindex="-1"
                        aria-labelledby="exampleModalLabel"
                        aria-hidden="true"
                    >
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $eachPortfolioItem->FolioHeading }}</h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-mdb-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-fluid" src="{{ url('/demo/img/portfolio_images/'.$eachPortfolioItem->FolioImageUrl2) }}" alt="">
                                    <div id="modal-loader"> </div>
                                    <div>{{ $eachPortfolioItem->FolioWebsiteUrl }} </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                                        Close
                                    </button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
{{--                    --}}
                @endforeach
            </div>
        </div>
{{--        Modal --}}
    <!-- Button trigger modal -->
{{--        <button--}}
{{--            type="button"--}}
{{--            class="btn btn-primary"--}}
{{--            data-mdb-toggle="modal"--}}
{{--            data-mdb-target="#exampleModal"--}}
{{--        >--}}
{{--            Launch demo modal--}}
{{--        </button>--}}

{{--        <!-- Modal -->--}}
{{--        <div--}}
{{--            class="modal fade"--}}
{{--            id="exampleModal"--}}
{{--            tabindex="-1"--}}
{{--            aria-labelledby="exampleModalLabel"--}}
{{--            aria-hidden="true"--}}
{{--        >--}}
{{--            <div class="modal-dialog">--}}
{{--                <div class="modal-content">--}}
{{--                    <div class="modal-header">--}}
{{--                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
{{--                        <button--}}
{{--                            type="button"--}}
{{--                            class="btn-close"--}}
{{--                            data-mdb-dismiss="modal"--}}
{{--                            aria-label="Close"--}}
{{--                        ></button>--}}
{{--                    </div>--}}
{{--                    <div class="modal-body">lorem ipsumWhatever By Mehedi Islam Ripon on Feb 25 2021--}}
{{--                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,--}}
{{--                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum--}}
{{--                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium--}}
{{--                        optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis--}}
{{--                        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam--}}
{{--                        nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,--}}
{{--                        tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,--}}
{{--                        quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos--}}
{{--                        sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam--}}
{{--                        recusandae alias error harum maxime adipisci amet laborum. Perspiciatis--}}
{{--                        minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit </div>--}}
{{--                    <div class="modal-footer">--}}
{{--                        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">--}}
{{--                            Close--}}
{{--                        </button>--}}
{{--                        <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        --}}
    </section>
@endsection

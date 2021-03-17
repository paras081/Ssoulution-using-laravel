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
                <!-- exampleModal -->
                    <a class="portfolio-item"  href="#!" OnClick="show_portfolio('{{ $eachPortfolioItem->FolioHeading }}','{{ url('/demo/img/portfolio_images/'.$eachPortfolioItem->FolioImageUrl2) }}')">
{{--                    <a class="portfolio-item"  href="#!" OnClick="show_portfolio('{{ $eachPortfolioItem->FolioHeading }}','{{ url('/demo/img/portfolio_images/'.$eachPortfolioItem->FolioImageUrl2) }}','{{$eachPortfolioItem->FolioDesc}}','{{$eachPortfolioItem->FolioWebsiteUrl}}')">--}}
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

                    <button
                        id="portfolioModal"
                        type="button"
                        class="btn btn-primary modal{{$eachPortfolioItem->id}}"
                        data-mdb-toggle="modal"
                        data-mdb-target="#exampleModal"
                        style="display: none;"
                    >
                    </button>

                    <!-- Detailed Modal -->
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
                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                    <button
                                        type="button"
                                        class="btn-close"
                                        data-mdb-dismiss="modal"
                                        aria-label="Close"
                                    ></button>
                                </div>
                                <div class="modal-body">
                                    <img class="img-fluid modal-image" src="{{ url('/demo/img/portfolio_images/'.$eachPortfolioItem->FolioImageUrl2) }}" alt="">

                                    <div id="modal-loader">
                                        <div class="modal-desc">
                                        </div>
                                    </div>
                                    <div class="modal-portFolioUrl"> </div>
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
    </section>

    <script type="text/javascript">
        function show_portfolio(heading, image,desc,portFolioUrl){
            $('.modal-title').html(heading);
            $('.modal-image').attr('src',image);
            // $('.modal-desc').html(desc);
            // $('.modal-portFolioUrl').html(portFolioUrl);
            $('#exampleModal').modal('show');
        }
    </script>
@endsection

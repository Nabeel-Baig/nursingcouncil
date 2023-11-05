@extends('layouts.front-master')
@section('main-content')
    <main>
        <section class="abtHero blueDefaultBg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                        <h2 class="innerMainTitle">News and updates</h2>
                        <p class="innerMainDesc">News and updates about our work, projects and priorities</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="abtContent pt-5">
            <div class="container">
                <h2 class="mb-5">Latest news</h2>
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 ">
                        <div class="row" id="latest-news">
                        </div>
                    </div>
                    @include('layouts.front-components.news-and-blog-sidebar')
                </div>
                <div class="row">
                    <div class="col-lg-6 m-auto mt-5 mb-5">
                        <button type="submit" id="nextBtn" class="btn mainThemeBtn shadow">+ Load 20 more <small>(714 left to
                                view)</small></button>
                    </div>
                </div>
                <div class="col-lg-8 m-auto mt-5">
                    <div class="updatesButtons">
                        <div class="btn-group m-auto text-center d-flex" role="group"
                            aria-label="Basic checkbox toggle button group">
                            <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                <i class="fas fa-print"></i> Print this page
                            </button>
                            <button type="button" class="btn btn-outline-secondary shadow d-block w-100">
                                <i class="fas fa-envelope"></i> Email this page
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('layouts.front-components.iwant')
    @include('layouts.front-components.ourwork')
@endsection

@section('scripts-bottom')
    <script>
        var nextPageUrl = 'no';
        var totalEntries = 0;
        var remainingEntries = 0;
        $(document).ready(function() {

            let url = '{{ route('news') }}'
            $.ajax({
                type: "get",
                url: url,
                dataType: "json",
                success: function(data) {

                    var newDataarray = data.data;

                    newDataarray.forEach(
                        element => {
                            var createDate = convertDateFormat(element.created_at);
                            var newsTitle = element.news_title;
                            var newsSubTitle = element.news_sub_title;
                            var divAppend = $(
                                '<div class="col-lg-12"><div class="newsData"><div class="date">' +
                                createDate + '</div><h3>' + newsTitle + '</h3><p>' +
                                newsSubTitle + '</p></div></div>');
                            $('#latest-news').append(divAppend);
                        }
                    );
                    console.log(data);
                    totalEntries = data.total;
                    console.log(totalEntries);
                    if(data.next_page_url != null){
                        remainingEntries = totalEntries-20;
                        $("#nextBtn").html('( Load 20 more '+remainingEntries+' left to view)');
                        nextPageUrl = data.next_page_url;
                    }
                    else{
                        nextPageUrl = 'no';
                        remainingEntries = 0;
                        $('#nextBtn').prop('disabled', true)
                    }

                }
            })
        });

        $( "#nextBtn" ).click(function() {

                $.ajax({
                type: "get",
                url: nextPageUrl,
                dataType: "json",
                success: function(data) {
                    var newDataarray = data.data;
                    newDataarray.forEach(
                        element => {
                            var createDate = convertDateFormat(element.created_at);
                            var newsTitle = element.news_title;
                            var newsSubTitle = element.news_sub_title;
                            var divAppend = $(
                                '<div class="col-lg-12"><div class="newsData"><div class="date">' +
                                createDate + '</div><h3>' + newsTitle + '</h3><p>' +
                                newsSubTitle + '</p></div></div>');
                            $('#latest-news').append(divAppend);
                        }
                    );
                    if(data.next_page_url != null){
                        remainingEntries = remainingEntries-20;
                        $("#nextBtn").html('( Load 20 more '+remainingEntries+' left to view)');
                        nextPageUrl = data.next_page_url;
                    }
                    else{
                        nextPageUrl = 'no';
                        $("#nextBtn").html("(0 LEFT TO VIEW)");
                        $('#nextBtn').prop('disabled', true)
                    }

                }
            })

                });


        function convertDateFormat(date) {
            var formattedDate = new Date(date);
            var day = formattedDate.getDate();
            var month = formattedDate.getMonth();
            month += 1; // JavaScript months are 0-11
            var year = formattedDate.getFullYear();
            let newDate = day + "." + month + "." + year;
            return newDate;
        }
    </script>
@endsection

<div class="container-fluid pt-5">
    <div class="container">
        <div class="text-center pb-2">
            <p class="section-title px-5">
                <span class="px-2">Popular Classes</span>
            </p>
            <h1 class="mb-4">Classes for Your Kids</h1>
        </div>
        <div class="row">
            @foreach($syllabus as $module => $sections)
                <div class="col-lg-6 mb-3">
                    <div class="card border-0 bg-light shadow-sm pb-2">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{ $module }}</h4>
                        </div>
                        <div class="card-footer bg-transparent py-4 px-5">
                            @foreach($sections as $section => $topics)
                                @if($section !== 'info')
                                    <div class="row border-bottom">
                                        <div class="col-12 py-1">
                                            <strong>{{ $section }}</strong>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        @foreach($topics as $key => $topic)
                                                            @if($key % 2 == 0)
                                                                <li>{{ $topic }}</li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        @foreach($topics as $key => $topic)
                                                            @if($key % 2!= 0)
                                                                <li>{{ $topic }}</li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Age of Kids</strong>
                                </div>
                                <div class="col-6 py-1">{{ $sections['info']['age'] }}</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Total Seats</strong>
                                </div>
                                <div class="col-6 py-1">{{ $sections['info']['seats'] }}</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Class Time</strong>
                                </div>
                                <div class="col-6 py-1">{{ $sections['info']['time'] }}</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Tuition Fee</strong>
                                </div>
                                <div class="col-6 py-1">{{ $sections['info']['fee'] }}</div>
                            </div>
                                
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Duration</strong>
                                </div>
                                <div class="col-6 py-1">{{ $sections['info']['duration'] }}</div>
                            </div>
                            <div class="row border-bottom">
                                <div class="col-6 py-1 text-right border-right">
                                    <strong>Location</strong>
                                </div>
                                <div class="col-6 py-1">{{ $sections['info']['location'] }}</div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary px-4 mx-auto mb-4">Join Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

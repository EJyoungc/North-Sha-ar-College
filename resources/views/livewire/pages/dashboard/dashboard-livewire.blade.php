<div>
    {{-- Stop trying to control. --}}
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        {{-- <li class="breadcrumb-item"><a href="#">Home</a></li> --}}
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-12 col-lg-4">
                    <div class="card bg-success">
                        <div class="card-body">
                            <h4> <i class="fa fa-coffee" aria-hidden="true"></i>
                                 {{ $posts->count() }} 
                                </h4>
                            <h5>Posts</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card bg-secondary">
                        <div class="card-body">
                            <h4><i class="fas fa-users"></i> 
                                {{ $intake->count() }}
                            </h4>
                            <h5>Intake</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card ">
                        <div class="card-body">
                            <h4> <i class="fa fa-user" aria-hidden="true"></i> 
                                {{ $users->count() }}
                            </h4>
                            <h5>Users</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12  col-lg-6">
                    <!-- Default box -->

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Cohort Candidate Stats</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> --}}
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <canvas id="donutChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <div class="col-12  col-lg-6">
                    <!-- Default box -->

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Top Viewed Posts</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> --}}
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table   m-0 ">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th>Post</th>
                                            <th>Category</th>
                                            <th>Views</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($topviews as $index =>$item)
                                            <tr>

                                                <td> <img src="{{ asset('assets/uploads/' . $item->image) }}"
                                                        width="25" height="25" alt="">
                                                    {{ $item->name }}</td>
                                                <td>{{ $item->category->name }}</td>
                                                <td><span class="badge bg-info"> {{ $item->view }}</span> </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td scope="row" colspan="3" class="text-center text-muted">EMPTY
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>

                <div class="col-12  col-lg-12">
                    <!-- Default box -->

                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Cohort Candidate Stats</div>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                    title="Collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                                {{-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                    <i class="fas fa-times"></i>
                                </button> --}}
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-end">
                                
                                    <div class="form-group pt-2 px-2">
                                        <select wire:model.live='year' disabled class="form-control">
                                        
                                            @for ($y = date('Y'); $y >= 2000; $y--) <!-- Adjust the range as needed -->
                                                <option value="{{ $y }}">{{ $y }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                
                            </div>

                           
                            <canvas wire:ignore id="barChart"
                                style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
        {{-- @section('chart')
            <script src="{{ asset('dash/plugins/chart.js/Chart.min.js') }}"></script>
            
            <script>

                
                // var months = @json($months);
                
                
                

                var areaChartData = {

                    // labels: @json($months),
                    
                    datasets: [{
                            label: 'Registered',
                            backgroundColor: 'rgba(60,141,188,0.9)',
                            borderColor: 'rgba(60,141,188,0.8)',
                            pointRadius: false,
                            pointColor: '#3b8bba',
                            pointStrokeColor: 'rgba(60,141,188,1)',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(60,141,188,1)',
                            // data: @php echo  json_encode($conreg ??   [0,0,0,0,0,0,0,0,0,0,0,0] ); @endphp
                        },
                        {
                            label: 'Attended',
                            backgroundColor: 'rgba(210, 214, 222, 1)',
                            borderColor: 'rgba(210, 214, 222, 1)',
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 222, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,220,0.5)',
                            // data: @json($ccon)
                        },
                        {
                            label: 'Completed',
                            backgroundColor: 'rgba(210, 214, 255, 1)',
                            borderColor: 'rgba(210, 214, 255, 1)',
                            pointRadius: false,
                            pointColor: 'rgba(210, 214, 255, 1)',
                            pointStrokeColor: '#c1c7d1',
                            pointHighlightFill: '#fff',
                            pointHighlightStroke: 'rgba(220,220,255,0.5)',
                            // data: @json($ccomp)
                        },
                    ]
                }
                //-------------
            
                //- DONUT CHART -
                //-------------
                // Get context with jQuery - using jQuery's .get() method.
                var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
                var donutData = {
                    labels: [
                        'Registered',
                        'Completed',
                        'Confirmed',

                    ],
                    datasets: [{
                        data: [{{ $candidates->count() }}, {{ $completed->count() }}, {{ $confirmed->count() }}],
                        backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
                    }]
                }
                var donutOptions = {
                    maintainAspectRatio: false,
                    responsive: true,
                }

                new Chart(donutChartCanvas, {
                    type: 'doughnut',
                    data: donutData,
                    options: donutOptions
                });



                //-------------
                //- BAR CHART -
                //-------------
                var barChartCanvas = $('#barChart').get(0).getContext('2d')
                var barChartData = $.extend(true, {}, areaChartData)

                // console.log(barChartData);
                // var temp0 = areaChartData.datasets[0]
                // var temp1 = areaChartData.datasets[1]
                // barChartData.datasets[0] = temp1
                // barChartData.datasets[1] = temp0

                var barChartOptions = {
                    responsive: true,
                    maintainAspectRatio: false,
                    datasetFill: false
                }

                new Chart(barChartCanvas, {
                    type: 'bar',
                    data: barChartData,
                    options: barChartOptions
                })
            </script>
        @endsection --}}

    </section>
</div>

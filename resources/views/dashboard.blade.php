@extends('templates.default')

@section('content')
<h1>Selamat Datang di Aplikasi Raw Herbal</h1>

<!-- row atas -->
<div class="row">
    <!-- batas awal card 1 -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <!-- kolom nama teks -->
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Bahan Total
                        </div>
                    </div>
                    <!-- akhir kolom text -->

                    <!-- kolom jumlah -->
                    @foreach($sum_bahan as $sum)
                    <div class="col mr-8 text-end">
                    {{$sum->total_stok}}
                    </div>
                    @endforeach
                    <!-- akhir kolom jumlah -->
                </div>
            </div>
        </div>
    </div>
    <!-- batas akhir card 1 -->

    <!-- batas awal card 2 -->
    <div class="col-xl-6 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <!-- kolom nama teks -->
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Jumlah Aksesoris Total
                        </div>
                    </div>
                    <!-- kolom jumlah -->
                    @foreach($sum_acc as $sum)
                    <div class="col mr-8 text-end ">
                    {{$sum->total_stok}}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- batas akhir card 2 -->
</div>
<!-- akhir row bar atas atas -->

<!-- Grafik -->
<div class="row">
    <div class="col-lg-6 mb-4">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="mb-1 text-xs font-weight-bold text-uppercase text-success ">
                    Grafik Stok Bahan
                </p>
            </div>
            <div class="card-body">
                <canvas id="ChartBahan" width="100%" height="50"></canvas>
            </div>
        </div>
    </div>

<!-- Batas akhir grafik -->

<!-- Grafik 2 -->

    <div class="col-lg-6 mb-4">
        <!-- Illustrations -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="mb-1 text-xs font-weight-bold text-uppercase text-success ">
                    Grafik Stok Aksesoris
                </p>
            </div>
            <div class="card-body">
                <canvas id="ChartAcc" width="100%" height="50"></canvas>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var lblbhn = {{Js::from($lblbahan)}};
    var bahan = {{Js::from($dtbahan)}};

    var ctx = document.getElementById("ChartBahan");
    var BarChart = new Chart(ctx,{
        type:'bar',
        data :{
            labels : lblbhn,
            datasets : [{
                label: "Jumlah Stok Bahan",
                backgroundColor:"rgba(2,117,216,1)",
                borderColor:"rgba(2,117,216,1)",
                data: bahan,
            }],
        },
        
        option:{
            sclaes:{
                xAxes :[{
                    time:{
                        unit:'Bahan'
                    },
                    gridLines:{
                        display: false
                    },
                    ticks:{
                    maxTicksLimit:6
                    }
                }],
                
                yAxes :[{
                    ticks:{
                        min:0,
                        max:10,
                        maxTicksLimit:5
                    },
                    gridLines:{
                        display:true
                    }
                }],
            },
        legend:{
            display:false
        }
        }
    });
</script>

<script type="text/javascript">
    var lblacc = {{Js::from($lblacc)}};
    var acc = {{Js::from($dtacc)}};

    var ctx = document.getElementById("ChartAcc");
    var BarChart = new Chart(ctx,{
        type:'bar',
        data :{
            labels : lblacc,
            datasets : [{
                label: "Jumlah Stok Aksesoris",
                backgroundColor:"rgba(2,117,216,1)",
                borderColor:"rgba(2,117,216,1)",
                data: acc,
            }],
        },
        
        option:{
            sclaes:{
                xAxes :[{
                    time:{
                        unit:'Aksesoris'
                    },
                    gridLines:{
                        display: false
                    },
                    ticks:{
                    maxTicksLimit:6
                    }
                }],
                
                yAxes :[{
                    ticks:{
                        min:0,
                        max:10,
                        maxTicksLimit:5
                    },
                    gridLines:{
                        display:true
                    }
                }],
            },
        legend:{
            display:false
        }
        }
    });
</script>


@endsection

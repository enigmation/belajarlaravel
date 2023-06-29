@extends('/wisata/master')

@section('content')
<div class="container">
        <div class="row mt-4">
                @foreach ($data as $item)
                    <div class="col-md-6">
                        <div class="card mt-4">
                            <iframe width="560" height="315" src="{{$item['video']}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            <div class="card-body">
                                <h5 class="card-title">{{ $item['nama_wisata']}}</h5>
                                <p class="card-text">{{ $item['tempat_wisata']}}</p>
                                <p class="card-text">{{ $item['alamat']}}</p>
                                <span class="badge rounded-pill text-bg-dark">Harga : </span>
                                <a href="#" class="btn btn-primary">{{ $item['harga']}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>  
@endsection


@extends('layouts/main')
@section('content')
@section('titles', 'eDuta - Products')

<ul class="list-unstyled">
    @foreach ($data as $item)
        <div class="row">
            <div class="col-md-10">
                <li class="media mb-3">
                    <img class="mr-3 mt-4" height="100" height="100"
                        {{-- src="https://i.pinimg.com/736x/1f/f6/21/1ff621a090d69c61f3084cc67867fd81.jpg" --}}
                        src={{ $item['src'] }}
                        alt="Generic placeholder image">
                    <div class="media-body mt-4">
                        <h5 class="mt-0 mb-1">{{ $item['header'] }}</h5>
                        <small>{{ $item['description'] }}</small>

                    </div>
                </li>
            </div>
            <div class="col-md-2">
                <div class="btn-group-vertical mt-4 mb-4 border-top" role="group"
                    aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-warning">Detail</button>
                    <button type="button" class="btn btn-success">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
        <hr>
    @endforeach
</ul>


{{-- <li class="media border-bottom mt-4 mb-2">
        <img class="mr-3" height="100" height="100"
            src="https://avatarfiles.alphacoders.com/321/321106.png"
            alt="Generic placeholder image">
        <div class="media-body">
            <div class="btn-group-vertical float-right mb-3" role="group"
            aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-warning">Detail</button>
            <button type="button" class="btn btn-success">Edit</button>
            <button type="button" class="btn btn-danger">Delete</button>
        </div>
            <h5 class="mt-0 mb-1">Kurosaki Ichigo</h5>
            <small>
                One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed
                in his bed into a horrible vermin. He lay on his armour-like back, and if he
                lifted
            </small>
        </div>
    </li>
    <li class="media border-bottom mt-4 mb-2">
        <img class="mr-3" height="100" height="100"
            src="https://i.pinimg.com/736x/a9/c2/35/a9c235b1413777e571fa7d1f1960cdd9.jpg"
            alt="Generic placeholder image">
        <div class="media-body">
            <div class="btn-group-vertical float-right mb-3" role="group"
                aria-label="Button group with nested dropdown">
                <button type="button" class="btn btn-warning">Detail</button>
                <button type="button" class="btn btn-success">Edit</button>
                <button type="button" class="btn btn-danger">Delete</button>
            </div>
            <h5 class="mt-0 mb-1">Monkey D. Luffy</h5>
            
            <small>
                One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed
                in his bed into a horrible vermin. He lay on his armour-like back, and if he
                lifted
            </small>
        </div>
    </li>
</ul> --}}
@endsection

@include('partials._header')


    {{-- <h1>Contact data</h1>

    @foreach ($user as $data)
        <div class="d-flex justify-content-start border">
            <p class="px-2 mx-3">{{$data->uid}}</p>
            <p class="px-2 mx-3">{{$data->contact_no}}</p>
            <p class="px-2 mx-3">{{$data->email}}</p>
            <p class="px-2 mx-3">{{$data->address}}</p>
            <p class="px-2 mx-3">{{$data->created_at}}</p>
            <p class="px-2 mx-3">{{$data->updated_at}}</p>
        </div>
    @endforeach --}}

    @include('partials._footer')

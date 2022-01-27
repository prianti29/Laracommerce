@extends('layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Slider List
        </div>
        <a href="{{route('sliders.create')}}" class="btn btn-sm btn btn-info">Index</a>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <th>Price</th>
                    <th>Image</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->subtitle }}</td>
                    <td>{{ $slider->price }}</td>
                    <td>{{ $slider->image }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

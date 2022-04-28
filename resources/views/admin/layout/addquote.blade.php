@extends('admin.layout.main')
@section('title-tab', 'Quote')
@section('title-page', 'Quote')

@section('mainContent')
    <form action="{{ url('admin/addquote') }}" method="post">
        @csrf
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Quote</span>
            </div>
            <textarea class="form-control" name="quote" aria-label="With textarea" placeholder="Write your quote here!"></textarea>
        </div>
        <button type="submit" class="btn btn-success ms-auto mt-3">Add Quote</button>
    </form>
@endsection

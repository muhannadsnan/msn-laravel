<h1>ALL CATEGORIES ({{ sizeof($data) }})</h1>

@if(sizeof($data) == 0)
    <h4>No categories.</h4>
@else
    @foreach($data as $cat)
        <div class="cat">
            ({{$cat->id}}) {{$cat->title}} <small>{{$cat->updated_at}}</small>
        </div>
    @endforeach
@endif
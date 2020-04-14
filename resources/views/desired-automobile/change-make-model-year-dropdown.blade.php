
<div class="btn-group" style="width:100%">
  <button type="button" class="btn btn-primary dropdown-toggle font-weight-bold" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false" >
    {{$itemType}}
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <div class="dropdown-menu" style="width:100%">
    @foreach($itemValues as $item)
      <a class="dropdown-item" href="#">{{$item}}</a>
    @endforeach
  </div>
</div>

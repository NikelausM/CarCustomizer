<div style="margin:5px">
  <form action={{route('DesiredAutomobiles.updateInteriorColor', $desiredAutomobile)}} method="post">
    <input type="text" id="interiorColorId" name="interiorColorId"  style="display: none;" value={{$interiorColor->id}}>
    <button type="submit" class="rounded-circle btn-lg" style={{"width:100px;height:100px;background-color:".$interiorColor->color->hex.";border-color:".$interiorColor->color->hex}}></button>
    <p>{{$interiorColor->color->name}}</p>
    @csrf
  </form>
</div>

<div align="center" style="padding:5px">
  <form action={{route('DesiredAutomobiles.updateExteriorColor', $desiredAutomobile)}} method="post" >
    <input type="text" id="exteriorColorId" name="exteriorColorId"  style="display: none;" value={{$exteriorColor->id}}>
    <button type="submit" class="rounded-circle btn-lg" style={{"width:100px;height:100px;background-color:".$exteriorColor->color->hex.";border-color:".$exteriorColor->color->hex}}></button>
    <p class="text-center font-weight-bold">{{$exteriorColor->color->name}}</p>
    @csrf
  </form>
</div>

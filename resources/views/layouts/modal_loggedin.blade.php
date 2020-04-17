<!----Sign up/Log in Popup---->
<div class="modal color-modal fade" id="exteriorColorPaletteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-small">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Exterior Colors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
        <div class="row align-items-center">
          @foreach($desiredAutomobile->automobile->colorPalette->exteriorColors as $exteriorColor)
          <div class="col">
            @if($exteriorColor->color->name == 'Giallo Spica')
            <div class ="bg-success" style="border-radius: 0.3rem; margin:5px">
              <p class="text-center font-weight-bold">Trending Color of the Year</p>
              @include('desired-automobile.change-exterior-color')
            </div>
            @else
            <div style="border-radius: 0.3rem; margin:5px">
              <p class="text-center font-weight-bold" style="opacity:0">Trending Color of the Year</p>
              @include('desired-automobile.change-exterior-color')
            </div>
            @endif
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="interiorColorPaletteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-small">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Interior Colors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
        <div class="row align-items-center">
          @foreach($desiredAutomobile->automobile->colorPalette->interiorColors as $interiorColor)
          <div class="col">
            @if($interiorColor->color->name == 'Bianco Leda')
            <div class ="bg-success" style="border-radius: 0.3rem; margin:5px">
              <p class="text-center font-weight-bold">Trending Color of the Year</p>
              @include('desired-automobile.change-interior-color')
            </div>
            @else
            <div style="border-radius: 0.3rem; margin:5px">
              <p class="text-center font-weight-bold" style="opacity:0">Trending Color of the Year</p>
              @include('desired-automobile.change-interior-color')
            </div>
            @endif
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

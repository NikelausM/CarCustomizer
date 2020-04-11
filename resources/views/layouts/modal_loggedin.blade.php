<!----Sign up/Log in Popup---->
<div class="modal color-modal fade" id="exteriorColorPaletteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title" id="exampleModalLabel" style="text-align: center; font-weight: bold">Exterior Colors</h5>
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
      	  <span aria-hidden="true">&times;</span>
      	</button>
      </div>
      <div class="container">
      <div class="row justify-content-center">
      @foreach($desiredAutomobile->automobile->colorPalette->exteriorColors as $exteriorColor)
      <div class="col">
      @include('desired-automobile.change-exterior-color')
      </div>
      @endforeach
      </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="interiorColorPaletteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align: center; font-weight: bold">Interior Colors</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="container">
      <div class="row justify-content-center">
      @foreach($desiredAutomobile->automobile->colorPalette->interiorColors as $interiorColor)
      <div class="col">
      @include('desired-automobile.change-interior-color')
      </div>
      @endforeach
      </div>
    </div>
    </div>
  </div>
</div>

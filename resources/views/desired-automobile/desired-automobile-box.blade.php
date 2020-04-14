<h2 style="font-weight:bold">Desired Automobile</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">
        <?php
        $itemType = "Brand";
        $itemValues = collect(["brand 1", "brand 2", "brand 3"]);
        ?>
        @include('desired-automobile.change-make-model-year-dropdown')
      </th>
      <th scope="col">
        <?php
        $itemType = "Model";
        $itemValues = collect(["matched model 1", "matched model 2", "matched model 3"]);
        ?>
        @include('desired-automobile.change-make-model-year-dropdown')
      </th>
      <th scope="col">
        <?php
        $itemType = "Year";
        $itemValues = collect(["matched year 1", "matched year 2", "matched year 3"]);
        ?>
        @include('desired-automobile.change-make-model-year-dropdown')
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$desiredAutomobile->automobile->brand}}</td>
      <td>{{$desiredAutomobile->automobile->model}}</td>
      <td>{{$desiredAutomobile->automobile->year}}</td>
    </tr>
  </tbody>
</table>
<div class="row" style="padding: 10px">
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail shadow">
			<div>
				<a target="_blank" href={{$desiredAutomobile->exteriorColor->url}}>
					<img src={{$desiredAutomobile->exteriorColor->url}} alt="exteriorColor">
				</a>
			</div>
			<div class="caption">
				<p class="text-center font-weight-bold">Exterior Color: {{$desiredAutomobile->exteriorColor->color->name}}</p>
        <button style="margin-top: 5px;" class="btn btn-primary" type="submit" href="#exteriorColorPaletteModal" data-toggle="modal">Exterior Color Palette</button>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail shadow">
			<div>
				<a target="_blank" href={{$desiredAutomobile->interiorColor->url}}>
					<img  src={{$desiredAutomobile->interiorColor->url}} alt="interiorColor">
				</a>
			</div>
			<div class="caption">
				<p class="text-center font-weight-bold">Interior Color: {{$desiredAutomobile->interiorColor->color->name}}</p>
        <button style="margin-top: 5px;" class="btn btn-primary" type="submit" href="#interiorColorPaletteModal" data-toggle="modal">Interior Color Palette</button>
			</div>
		</div>
	</div>
</div>

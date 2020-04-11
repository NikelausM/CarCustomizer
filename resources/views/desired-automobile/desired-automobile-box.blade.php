<h2 style="font-weight:bold">Desired Automobile</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Brand</th>
      <th scope="col">Model</th>
      <th scope="col">Year</th>
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
					<img style="max-width:100%; max-height:100%" src={{$desiredAutomobile->exteriorColor->url}} alt="exteriorColor">
				</a>
			</div>
			<div class="caption">
				<p style="text-align: center; font-weight: bold">Exterior Color: {{$desiredAutomobile->exteriorColor->color->name}}</p>
        <button style="margin-top: 5px;" class="btn btn-primary" type="submit" href="#exteriorColorPaletteModal" data-toggle="modal">Exterior Color Palette</button>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail shadow">
			<div>
				<a target="_blank" href={{$desiredAutomobile->interiorColor->url}}>
					<img style="max-width:100%; max-height:100%"  src={{$desiredAutomobile->interiorColor->url}} alt="interiorColor">
				</a>
			</div>
			<div class="caption">
				<p style="text-align: center; font-weight: bold">Interior Color: {{$desiredAutomobile->interiorColor->color->name}}</p>
        <button style="margin-top: 5px;" class="btn btn-primary" type="submit" href="#interiorColorPaletteModal" data-toggle="modal">Interior Color Palette</button>
			</div>
		</div>
	</div>
</div>

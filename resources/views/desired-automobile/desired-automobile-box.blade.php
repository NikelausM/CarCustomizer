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
				<a target="_blank" href={{$desiredAutomobile->exteriorColorPalette->url}}>
					<img style="max-width:100%; max-height:100%" src={{$desiredAutomobile->exteriorColorPalette->url}} alt="exteriorColorPalette">
				</a>
			</div>
			<div class="caption">
				<p style="text-align: center; font-weight: bold">Exterior Color</p>
			</div>
		</div>
	</div>
	<div class="col-sm-6 col-md-4">
		<div class="thumbnail shadow">
			<div>
				<a target="_blank" href={{$desiredAutomobile->interiorColorPalette->url}}>
					<img style="max-width:100%; max-height:100%"  src={{$desiredAutomobile->interiorColorPalette->url}} alt="exteriorColorPalette">
				</a>
			</div>
			<div class="caption">
				<p style="text-align: center; font-weight: bold">Interior Color</p>
			</div>
		</div>
	</div>
</div>

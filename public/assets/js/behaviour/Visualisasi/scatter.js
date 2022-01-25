function scatter($data, $id){
	/**
 * ---------------------------------------
 * This demo was created using amCharts 4.
 *
 * For more information visit:
 * https://www.amcharts.com/
 *
 * Documentation is available at:
 * https://www.amcharts.com/docs/v4/
 * ---------------------------------------
 */

am4core.useTheme(am4themes_animated);

var chart = am4core.create($id, am4charts.XYChart);

var valueAxisX = chart.xAxes.push(new am4charts.ValueAxis());
valueAxisX.renderer.ticks.template.disabled = true;
valueAxisX.renderer.axisFills.template.disabled = true;


var valueAxisY = chart.yAxes.push(new am4charts.ValueAxis());
valueAxisY.renderer.ticks.template.disabled = true;
valueAxisY.renderer.axisFills.template.disabled = true;
valueAxisY.renderer.minGridDistance = 30;

var series = chart.series.push(new am4charts.LineSeries());
series.dataFields.valueX = "x";
series.dataFields.valueY = "y";
series.dataFields.value = "value";
series.strokeOpacity = 0;
series.sequencedInterpolation = true;
series.tooltip.pointerOrientation = "vertical";

var bullet = series.bullets.push(new am4core.Circle());
bullet.fill = am4core.color("#C93B76");
bullet.propertyFields.fill = "color";
bullet.strokeOpacity = 1;
bullet.strokeWidth = 1;
bullet.fillOpacity = 0.5;
bullet.stroke = am4core.color("#000000");
bullet.hiddenState.properties.opacity = 0;
bullet.tooltipText = "[bold]{title}:[/] (Kinerja: {x}) (BPO: {y})";

var hoverState = bullet.states.create("hover");
hoverState.properties.fillOpacity = 1;
hoverState.properties.strokeOpacity = 1;

series.heatRules.push({
  target: bullet,
  min: 1,
  max: 30,
  property: "radius",
  logarithmic: true
});

bullet.adapter.add("tooltipY", function (tooltipY, target) {
  return -target.radius;
});

chart.cursor = new am4charts.XYCursor();
chart.cursor.behavior = "zoomXY";
chart.cursor.snapToSeries = series;

chart.data = $data;
}
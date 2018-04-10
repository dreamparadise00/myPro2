<?php // content="text/plain; charset=utf-8"
 date_default_timezone_set("PRC");

 require_once ('jpgraph/jpgraph.php');
 require_once ('jpgraph/jpgraph_bar.php');

 $file = 'test.csv';
 $fopenFile = fopen($file,'rb+');
 // $row = fgetcsv($fopenFile);
 // print_r($row);

 while ($data = fgetcsv($fopenFile)) {
   // print_r($data);

   $csv_List[] = $data;
 }
 foreach ($csv_List as $key => $value) {
   if(!($key == 0)){
     // echo $value[1]."<br>";
     $arr[] = $value[1];
   }

 };

 // // We need some data
 // $datay=array(4,18,6,10,15);
 $datay = $arr;
 // Setup the graph.
 $graph = new Graph(1000,500);
 $graph->SetScale("textlin");
 $graph->img->SetMargin(25,15,25,25);

 $graph->title->Set('"GRAD_MIDVER"');
 $graph->title->SetColor('darkred');

 // Setup font for axis
 $graph->xaxis->SetFont(FF_FONT1);
 $graph->yaxis->SetFont(FF_FONT1);

 // Create the bar pot
 $bplot = new BarPlot($datay);
 $bplot->SetWidth(0.2);

 // Setup color for gradient fill style
 $bplot->SetFillGradient("navy","lightsteelblue",GRAD_MIDVER);

 // Set color for the frame of each bar
 $bplot->SetColor("navy");
 $graph->Add($bplot);

 // Finally send the graph to the browser
 $graph->Stroke();
?>
